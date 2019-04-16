<?php

namespace App\Controller;


use App\Model\User;
use App\Repository\UserRepository;

class UserController
{
    /** @var UserRepository $userRepository */
    private $userRepository;

    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->userRepository = new UserRepository();
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
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['firstname']) && !empty($_POST['firstname']) || isset($_POST['lastname']) && !empty($_POST['lastname'])) {
                $user = new User();
                $user->setFirstName($_POST['firstname'])
                    ->setLastName($_POST['lastname']);

                $this->userRepository->insert($user);

                exit;
            } else {
                $errors[] = 'Missing fields';
            }
        }

        require_once 'src/View/User/create.php';
        return;
    }
}