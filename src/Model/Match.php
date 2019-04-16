<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/04/2019
 * Time: 10:17
 */

namespace App\Model;


class Match
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
     * @var Team $winner
     */
    private $winner;
    /**
     * @var Team $looser
     */
    private $looser;
    /**
     * @var int $matchStatus
     */
    private $matchStatus;

    /**
     * Match constructor.
     * @param int $id
     * @param Team[] $teams
     * @param Team $winner
     * @param Team $looser
     * @param int $matchStatus
     */
    public function __construct(int $id, array $teams, Team $winner, Team $looser, int $matchStatus)
    {
        $this->id = $id;
        $this->teams = $teams;
        $this->winner = $winner;
        $this->looser = $looser;
        $this->matchStatus = $matchStatus;
    }

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
     * @return Team
     */
    public function getWinner(): Team
    {
        return $this->winner;
    }

    /**
     * @param Team $winner
     */
    public function setWinner(Team $winner): void
    {
        $this->winner = $winner;
    }

    /**
     * @return Team
     */
    public function getLooser(): Team
    {
        return $this->looser;
    }

    /**
     * @param Team $looser
     */
    public function setLooser(Team $looser): void
    {
        $this->looser = $looser;
    }

    /**
     * @return int
     */
    public function getMatchStatus(): int
    {
        return $this->matchStatus;
    }

    /**
     * @param int $matchStatus
     */
    public function setMatchStatus(int $matchStatus): void
    {
        $this->matchStatus = $matchStatus;
    }


}