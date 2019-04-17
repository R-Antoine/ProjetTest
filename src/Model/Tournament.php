<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/04/2019
 * Time: 09:43
 */

namespace App\Model;


class Tournament
{
    /**
     * @var int $id
     */
    private $id;
    /**
     * @var Team[] $teams
     */
    private $teams;
    /**
     * @var Matche[] $matches
     */
    private $matches;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return Team[]
     */
    public function getTeams(): array
    {
        return $this->teams;
    }

    /**
     * @param Team[] $teams
     */
    public function setTeams(array $teams): void
    {
        $this->teams = $teams;
    }

    /**
     * @return Matche[]
     */
    public function getMatches(): array
    {
        return $this->matches;
    }

    /**
     * @param Matche[] $matches
     */
    public function setMatches(array $matches): void
    {
        $this->matches = $matches;
    }



}