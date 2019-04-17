<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 17/04/2019
 * Time: 14:15
 */

namespace App\Controller;


use App\Model\Tournament;
use App\Repository\TournamentRepository;

class TournamentController
{
private $tournamentRepository;
private $teamRepository;

    /**
     * TournamentController constructor.
     */
    public function __construct()
    {
        $this->tournamentRepository = new TournamentRepository();
    }

    public function index(){
        $tournament = $this->tournamentRepository->getResults();
        $teams = $this->tournamentRepository->getResults();
        require_once 'src/View/tournament/index.php';

    }


    public function create(){

    }

}