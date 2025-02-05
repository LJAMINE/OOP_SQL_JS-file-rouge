<?php

class User{
    protected $pdo;

    public function __construct($pdo){
        $this->pdo=$pdo;
    }

    public function display(){
        $stmt=$this->pdo->prepare("SELECT * FROM utilisateurs");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function search($search){
        $stmt = $this->pdo->prepare("SELECT * FROM utilisateurs where nom like '%$search%'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
}

?>