<?php
require "function.php";
require "People.php";
require "Connection.php";
require "Query.php";

$query = New Query(
    Connection::make()
);
