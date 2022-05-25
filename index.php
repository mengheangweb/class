<?php
require "Bootstrap.php";

$people = $query->getStudentList();

require "View/student_view.php";
