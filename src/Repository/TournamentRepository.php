<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 17/04/2019
 * Time: 14:16
 */

namespace App\Repository;


use App\Model\Tournament;

class TournamentRepository extends Repository implements IRepository
{
    private static $table = 'tournament';

    /**
     * TournamentRepository constructor.
     */
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
            throw new \Exception('You can save only users');
        }
        $request = "(id) VALUES ('" . $tournament->getId()."')";
        return parent::insert($request);
    }

    /**
     * Update user
     *
     * @param User $user
     * @throws \Exception
     */
    public function update($user)
    {
        if (!$user instanceof Player) {
            throw new \Exception('You can save only users');
        }
        $request = "SET firstname = '" . $user->getFirstName() . "', lastname = '" . $user->getLastName() . "' WHERE id = " . $user->getId() . " ";
        parent::update($request);
    }

    /**
     * Delete user
     *
     * @param User $user
     * @throws \Exception
     */
    public function delete($user)
    {
        if (!$user instanceof Player) {
            throw new \Exception('You can save only users');
        }
        $request = "WHERE id = " . $user->getId();
        parent::delete($request);
    }
}