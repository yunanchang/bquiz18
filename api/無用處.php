<?php
include_once "db.php";

$bottom=$Bottom->find(1);
$bottom['bottom']=$_POST['bottom'];
$Bottom->save($bottom);
to("../back.php?do=bottom");
?>