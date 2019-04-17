<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/04/2019
 * Time: 14:26
 */

namespace App\Repository;


use App\Model\Bracket;

class TeamRepository extends Repository implements IRepository
{
    private static $table = 'tournament';


    public function __construct()
    {
        parent::__construct(TournamentRepository::$table);
    }


    public function getResult(string $request = ''): ?Tournament
    {
        $tournament = null;
        $result = parent::getResult($request);

        if ($result) {
            $tournament = new Tournament();
            $tournament->setId($result['id']);
            $tournament->setName($result['name']);
        }

        return $team;
    }


    public function getResults(string $request = ''): array
    {
        $tournaments = [];
        $results = parent::getResults($request);

        if ($results) {
            foreach ($results as $result) {
                $tournament = new Tournament();
                $tournament->setId($result['id']);
                $tournament->setName($result['name']);
                $tournaments[] = $tournament;
            }
        }
        return $teams;
    }


    public function insert($team)
    {
        if (!$tournament instanceof Team) {
            throw new \Exception('You can save only team');
        }
        $request = "(name) VALUES ('" . $tournament->getName() . "')";
        return parent::insert($request);
    }


    public function delete($tournament)
    {
        if (!$tournament instanceof Team) {
            throw new \Exception('You can save only teams');
        }
        $request = "WHERE id = " . $tournament->getId();
        parent::delete($request);
    }
}
