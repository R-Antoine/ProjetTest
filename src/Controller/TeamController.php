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
    }


    public function index()
    {
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