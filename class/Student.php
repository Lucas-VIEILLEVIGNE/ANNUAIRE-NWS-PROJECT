<?php
require_once "Database.php";

class Student extends Database{
    public function addRegister($data){
        $prenom = $data['first-name'];
        $nom = $data['last-name'];
        $age = $data['age'];
        $email = $data['email'];
        $tel = $data['tel'];
        $level = $data['level'];
        $filiere = $data['filiere'];

        if(isset($prenom) && isset($nom) && isset($age) && isset($email) && isset($tel) && isset($level) && isset($filiere)){
            $query = "INSERT INTO etudiant (prenom, nom, age, email, tel, level, filiere) VALUES (?,?,?,?,?,?,?)";             
            $request = $this->getPDO()->prepare($query);            
            $request->execute([$prenom, $nom, $age, $email, $tel, $level, $filiere]);
        }
        else{
            $msg = "Tous les champs sont obligatoires.";             
            return $msg;
        }
    }
    
}