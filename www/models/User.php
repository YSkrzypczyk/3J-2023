<?php
namespace App\models;

class User{

    private $id = -1;
    private $firstname;
    private $lastname;
    private $email;
    private $pwd;
    private $date_inserted;
    private $date_updated;
    private $status = 0;


    public function __construct()
    {
        $this->date_inserted = new \DateTime();
        $this->date_updated = new \DateTime();
    }

    public function __toString(): string
    {
        return serialize($this);
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
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = ucwords(strtolower(trim($firstname)));
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = strtoupper(trim($lastname));
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = strtolower(trim($email));
    }

    /**
     * @return string
     */
    public function getPwd(): string
    {
        return $this->pwd;
    }

    /**
     * @param string $pwd
     */
    public function setPwd(string $pwd): void
    {
        $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
    }

    /**
     * @return DateTime
     */
    public function getDateInserted(): DateTime
    {
        return $this->date_inserted;
    }

    /**
     * @param DateTime $date_inserted
     */
    public function setDateInserted(DateTime $date_inserted): void
    {
        $this->date_inserted = $date_inserted;
    }

    /**
     * @return DateTime
     */
    public function getDateUpdated(): DateTime
    {
        return $this->date_updated;
    }

    /**
     * @param DateTime $date_updated
     */
    public function setDateUpdated(DateTime $date_updated): void
    {
        $this->date_updated = $date_updated;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }





}