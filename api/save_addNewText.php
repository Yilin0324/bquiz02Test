<?php
include_once "../base.php";

// $select_value=$_POST['type'];
// echo $select_value; 
// print_r ($_POST);

echo $News->save($_POST);

to("../backend.php?do=news");