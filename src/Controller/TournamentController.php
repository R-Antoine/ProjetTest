<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/04/2019
 * Time: 12:20
 */

namespace App\Controller;


use App\Model\Team;
use App\Repository\TeamRepository;
use App\Repository\UserRepository;

class TeamController
{
    private $teamRepository;

    /**
     * TeamController constructor.
     *
     */
    public function __construct()
    {
        $this->teamRepository = new TeamRepository();
        $this->userRepository = new UserRepository();
    }


    public function index()
    {
        /** @var Team[] $teams */
        $teams = $this->teamRepository->getResults();

        foreach ($teams as $team) {
            $users = $this->userRepository->getResults('where team_id=' . $team->getId());
            $team->setPlayers($users);
        }

        require_once 'src/View/team/index.php';
    }

    public function create()
    {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['name']) && !empty($_POST['name'])) {
                $team = new Team();
                $team->setName($_POST['name']);
                $this->teamRepository->insert($team);
                header('Location: /team/index');
                exit;

            } else {
                $errors[] = 'Missing fields';
            }
        }

        require_once 'src/View/team/create.php';
        return;
    }
}