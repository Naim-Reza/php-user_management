<?php
class Db
{
    private $hostname = "localhost";
    private $dbname   = "najir";
    private $dbuser   = "root";
    private $dbpass   = "";

    /**
     * Make Conncetion to the database
     *
     * @return mysqli connection
     */
    public function connect()
    {
        $conn = new mysqli($this->hostname, $this->dbuser, $this->dbpass, $this->dbname);
        if ($conn->connect_error) {
            die("Connection Failed : " . $conn->connect_error);
        } else {

            return $conn;
        }

    }

    /**
     * Close database connection
     *
     * @param mysqli $conn
     * @return void
     */
    public function close_connection(mysqli $conn)
    {
        $conn->close();
    }
}