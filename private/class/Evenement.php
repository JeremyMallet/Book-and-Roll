<?php
class Evenement {
    
    public $pdo = null;

    function __construct($pdo){
        $this->pdo = $pdo;     
    }

    public function readEvenement($id){
        $sql = 'SELECT * FROM evenements WHERE id = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function readAll(){
        $sql = 'SELECT * FROM evenements';
        $stmt = $this->pdo->query($sql);
        $evenements = $stmt->fetchAll();
        return $evenements;
    }

}