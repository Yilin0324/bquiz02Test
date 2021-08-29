<?php
include_once "../base.php";

echo $News->save($_POST);

to("../backend.php?do=news");