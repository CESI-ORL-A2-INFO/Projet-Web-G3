<?php
class Database {
    private $dsn;
    private $user;
    private $pass;
    private $pdo;
    public function __construct($host = 'localhost', $name = 'prosit 8', $user = 'root', $pass = '')
    {
        $this->dsn = "mysql:host=$host;dbname=$name";
        $this->user = $user;
        $this->pass = $pass;
        $this->pdo = new PDO($this->dsn, $this->user, $this->pass);
    }
    public function getPDO()
    {
        return $this->pdo;
    }
    public function query($request)
    {
        $statment = $this->pdo->query($request) == false ? die("Request failed") : $this->pdo->query($request);
        return $statment->fetchall();
    }
    public function execute($request, $param = array())
    {
        $statment = $this->pdo->prepare($request) == false ? die("Request failed") : $this->pdo->prepare($request);
        $statment->execute($param);
    }
}
?>
