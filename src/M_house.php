<?php


class M_house
{
    private $bdd;

    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=test_technique', 'root', '');
        } catch (PDOException $e) {
            print "Error: " . $e->getMessage() . "<br/>";
        }
    }

    public function getHouseQuantity()
    {
        return $this->bdd->query('SELECT * from house')->fetchObject();
    }

}