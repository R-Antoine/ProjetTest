<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/04/2019
 * Time: 09:43
 */

namespace App\Model;


class Team
{
    /**@var int $id **/
    private $id;
    /**
     * @var string $name
     */
    private $name;
    /**
     * @var \Player[] $players
     */
    private $players;
    /**
     * Team constructor.
     * @param int $id
     * @param string $name
     * @param \Player[] $players
     */
    public function __construct(int $id, string $name, array $players)
    {
        $this->id = $id;
        $this->name = $name;
        $this->players = $players;
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return \Player[]
     */
    public function getPlayers(): array
    {
        return $this->players;
    }

    /**
     * @param \Player[] $players
     */
    public function setPlayers(array $players): void
    {
        $this->players = $players;
    }




}