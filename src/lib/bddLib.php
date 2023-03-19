<?php
class Database {
    private $dsn;
    private $user;
    private $pass;
    private $pdo;
    public function __construct($host = 'localhost', $name = 'projetweb', $user = 'root', $pass = '')
    {
        $this->dsn = "mysql:host=$host;dbname=$name";
        $this->user = $user;
        $this->pass = $pass;
        try {
        $this->pdo = new PDO($this->dsn, $this->user, $this->pass);
        } catch (PDOException $e) {
            die("Erreur !: " . $e->getMessage() . "<br/>");
        }
    }
    public function getPDO()
    {
        return $this->pdo;
    }
    public function query($request)
    {
        $statment = $this->pdo->query($request);
        return $statment->fetchall();
    }
    public function execute($request, $param = array())
    {
        $statment = $this->pdo->prepare($request);
        return         $statment->execute($param);

    }
    public function executeReturn($request, $param = array())
    {
        $statment = $this->pdo->prepare($request);
        $statment->execute($param);
        return $statment->fetchAll();
    }
}
?>
