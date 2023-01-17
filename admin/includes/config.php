<?php
// DB credentials.
//define('DB_HOST','localhost');
//define('DB_USER','root');
//define('DB_PASS','');
//define('DB_NAME','bpcms');
// Establish database connection.
//try
//{
//    $dbh = new PDO("mysql:HOST=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
//}
//catch (PDOException $e)
//{
//exit("Error: " . $e->getMessage());
//}

class Database
{
    public $SERVER;
    public $DATEBASE;
    public $PASSWORD;
    public $UESERNAME;
    public $CMS;

    function __construct($SERVER, $DATEBASE, $PASSWORD, $UESERNAME, $CMS)
    {

        $this->SERVER = $SERVER;
        $this->DATEBASE = $DATEBASE;
        $this->PASSWORD = $PASSWORD;
        $this->UESERNAME = $UESERNAME;
        $this->CMS = $CMS;


    }

    function con()
    {
        try {
            $this->CMS = new PDO("mysql:host=$this->SERVER;dbname=$this->DATEBASE", $this->UESERNAME, $this->PASSWORD);
            return $this->CMS;
        } catch (PDOException $e) {
            print "Error!: " . $e->gettMessage() . "<br/>";
            die();
        }
    }
}
