<?php
namespace App\Repository;

use App\Model\Tournament;

class TournamentRepository extends Repository implements IRepository
{
    private static $table = 'tournament';

<<<<<<< HEAD
    /* 
    TournamentRepository constructor.
     */
=======

>>>>>>> dce823ba614cb365f78e7a9fa15222d8e3ccc930
    public function __construct()
    {
        parent::__construct(TournamentRepository::$table);
    }


    public function getResult(string $request = ''): Tournament
    {
        $tournament = null;
        $result = parent::getResult($request);

        if ($result) {
            $tournament = new Tournament();
            $tournament->setId($result['id']);
        }
        return $tournament;
    }


    public function getResults(string $request = ''): array
    {
        $tournaments = [];
        $results = parent::getResults($request);

        if ($results) {
            foreach ($results as $result) {
                $tournament = new Tournament();
                $tournament->setId($result['id']);
                $tournaments[] = $tournament;
            }
        }

        return $tournaments;
    }

    /**
     * @param Tournament $tournament
     * @return mixed
     * @throws \Exception
     */
    public function insert($tournament)
    {
        if (!$tournament instanceof Tournament) {
            throw new \Exception('You can save only tournaments');
        }
        $request = "(id) VALUES ('" . $tournament->getId()."')";
        return parent::insert($request);
    }
}