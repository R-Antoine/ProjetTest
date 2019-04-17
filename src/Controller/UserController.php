<?php

namespace App\Controller;


use App\Model\Player;
use App\Model\Team;
use App\Model\User;
use App\Repository\TeamRepository;
use App\Repository\UserRepository;

class UserController
{
    /** @var UserRepository $userRepository */
    private $userRepository;
    private $teamRepository;

    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->teamRepository = new TeamRepository();
    }

    /**
     * @throws \Exception
     */
    public function index()
    {
        /** @var User[] $users */
        $users = $this->userRepository->getResults();
        require_once 'src/View/player/index.php';
    }


    /**
     * @throws \Exception
     */
    public function create()
    {
        $teams = $this->teamRepository->getResults();
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['firstname']) && !empty($_POST['firstname']) || isset($_POST['lastname']) && !empty($_POST['lastname'])) {
                $playerTeam = $this->teamRepository->getResult('where id=' . $_POST['team']);
                $users = $this->userRepository->getResults('where team_id=' . $playerTeam->getId());
                $playerTeam->setPlayers($users);
                $user = new Player();
                $user->setTeam($playerTeam);
                $user->setFisrtname($_POST['firstname'])
                    ->setLastname($_POST['lastname']);
                if(count($playerTeam->getPlayers())<5) {
                    $this->userRepository->insert($user);
                    var_dump($playerTeam->getPlayers());
                   // header('Location: /team/index');
                    exit;
                }else{
                    $errors[] = 'ERREUR: Equipe pleine';
                    echo $errors[0];
                }
            } else {
                $errors[] = 'Missing fields';
            }
        }

        require_once 'src/View/player/create.php';
        return;
    }
}