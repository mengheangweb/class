<?php

class Query {

    public $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function getStudentList()
    {
        $statement = $this->con->prepare("select * from students");

        $statement->execute();

        $people = $statement->fetchAll(PDO::FETCH_CLASS,'People');

        return $people;

    }
}