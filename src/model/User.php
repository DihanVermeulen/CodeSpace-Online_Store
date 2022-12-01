<?php

class User
{

    private $name;
    private $surname;
    private $email;
    private $password;

    // ====================Construct====================

    public function __construct($name, $surname, $email, $password)
    {
        $this->$name = $name;
        $this->$surname = $surname;
        $this->$email = $email;
        $this->$password = $password;
    }

    // ====================Methods====================

    private function hashPassword($password)
    {
        $hash_password = password_hash($password, PASSWORD_BCRYPT);
        return $hash_password;
    }

    private function verifyPassword($hash)
    {
        $is_password_correct = password_verify($hash, PASSWORD_BCRYPT);
        return $is_password_correct;
    }

    // ====================Get and Set====================

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surname
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
