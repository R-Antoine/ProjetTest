<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/04/2019
 * Time: 14:26
 */

namespace App\Repository;


use App\Model\Team;

class TeamRepository extends Repository implements IRepository
{
    private static $table = 'team';


    public function __construct()
    {
        parent::__construct(TeamRepository::$table);
    }


    public function getResult(string $request = ''): ?Team
    {
        $team = null;
        $result = parent::getResult($request);

        if ($result) {
            $team = new Team();
            $team->setName($result['name']);
        }

        return $team;
    }


    public function getResults(string $request = ''): array
    {
        $teams = [];
        $results = parent::getResults($request);

        if ($results) {
            foreach ($results as $result) {
                $team = new Team();
                $team->setName($result['name']);
                $teams[] = $team;
            }
        }

        return $teams;
    }

    public function insert($team)
    {
        if (!$team instanceof Team) {
            throw new \Exception('You can save only team');
        }
        $request = "(name) VALUES ('" . $team->getName() . "')";
        return parent::insert($request);
    }

    public function update($user)
    {
        if (!$user instanceof User) {
            throw new \Exception('You can save only users');
        }
        $request = "SET firstname = '" . $user->getFirstName() . "', lastname = '" . $user->getLastName() . "' WHERE id = " . $user->getId() . " ";
        parent::update($request);
    }

    public function delete($team)
    {
        if (!$team instanceof Team) {
            throw new \Exception('You can save only teams');
        }
        $request = "WHERE id = " . $team->getId();
        parent::delete($request);
    }
}
