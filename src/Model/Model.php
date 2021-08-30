<?php


class Model
{
    private $bdd = null;

    public function __construct()
    {
        $host = 'wynsewvquantum20.mysql.db';
        $dbname = 'wynsewvquantum20';
        $user = 'wynsewvquantum20';
        $pswrd = 'Quantum2020';

        try {
            $this->bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
                $user, $pswrd,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        } catch (PDOException $e) {
            die('Echec de la connexion : ' . $e->getMessage());
        }
    }

    public function setUser($gender, $name, $mail, $comments){

        try {
            $request = $this->bdd->prepare('
            INSERT INTO Formulaire (form_gender, form_name, form_mail, form_comments) 
            VALUES (?, ?, ?, ?)');
            $request->execute(array(
                $gender,
                $name,
                $mail,
                $comments
            ));

            header("location: /merci");
            exit();

        }catch (PDOException $e){
            var_dump('Echec BDD : ' . $e->getMessage());

        }
    }

}