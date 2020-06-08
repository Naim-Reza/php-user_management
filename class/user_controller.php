<?php

require "db_controller.php";

class User
{
    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Checks if user already exists
     *
     * @param String $email
     * @return bool
     */
    public function existing_user($email)
    {
        $db   = new Db();
        $conn = $db->connect();

        $sql = "SELECT * FROM users WHERE email = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function create_new_user($username, $password)
    {
        $db   = new Db();
        $conn = $db->connect();

        $sql = "INSERT INTO users (`username`, `email`, `password`) VALUES (?,?,?)";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("sss", $username, $this->email, $password);
        $executed = $stmt->execute();
        $stmt->close();
        $db->close_connection($conn);

        if ($executed) {
            return true;
        } else {
            return false;
        }

    }
}