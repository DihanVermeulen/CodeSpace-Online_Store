<?php

class User
{

    // ====================Variables====================

    private $name;
    private $surname;
    private $email;
    private $password;

    // ====================Construct====================

    public function __construct($name, $surname, $email, $password)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
    }

    // ====================Methods====================

    /**
     * Encrypts password
     */
    public static function hashPassword($password)
    {
        $hash_password = password_hash($password, PASSWORD_BCRYPT);
        return $hash_password;
    }

    /**
     * Creates user array
     * @return self
     */
    public function createUser()
    {
        return array(
            "user_name" => $this->getName(),
            "user_surname" => $this->getSurname(),
            "user_email" => $this->getEmail(),
            "user_password" => $this->getPassword()
        );
    }

    /**
     * Validates user data
     */
    public static function validateUserData($user)
    {
        $user_is_valid = false;

        $password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";

        // Uses regex and filter_var to validate
        if (preg_match($password_regex, $user['user_password']) && filter_var($user['user_email'], FILTER_VALIDATE_EMAIL)) {
            $user_is_valid = true;
        }

        // Returns true or false
        return $user_is_valid;
    }

    /**
     * Authenticates user: checks is passwords match
     */
    public static function authenticateUser($user, $password)
    {
        if (password_verify($password, $user[0]['user_password'])) {
            return true;
        } else {
            return false;
        }
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
