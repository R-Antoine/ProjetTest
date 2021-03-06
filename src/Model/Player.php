<?php

namespace App\Model;
class Player
{
    /** @var int $id */
    private $id;
    /** @var string $fisrtname */
    private $fisrtname;
    /** @var string $lastname */
    private $lastname;
    /** @var int $age */
    private $age;
    /** @var DateTime $createdAt */
    private $createdAt;
    /**
     * @var Team $team
     */
    private $team;


    /**
     * @return Team
     */
    public function getTeam(): Team
    {
        return $this->team;
    }

    /**
     * @param Team $team
     */
    public function setTeam(Team $team): void
    {
        $this->team = $team;
    }
    /**
     * Get the value of fisrtname
     */
    public function getFisrtname(): string
    {
        return $this->fisrtname;
    }

    /**
     * Set the value of fisrtname
     *
     * @return  self
     */
    public function setFisrtname(string $fisrtname): self
    {
        $this->fisrtname = $fisrtname;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of createdAt
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @return  self
     */
    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId(int $id): User
    {
        $this->id = $id;

        return $this;
    }


}