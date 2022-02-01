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

    /**
     * @param $type
     */
    public function getHouseQuantity($type)
    {
        $req = $this->bdd->prepare('  
           SELECT *
            FROM house
            WHERE house_type = :house_type 
        ');

        $req->bindValue(':house_type', $type, PDO::PARAM_STR);
        $req->execute();
        $data = $req->fetchObject();

        return $data->quantity;
    }

}