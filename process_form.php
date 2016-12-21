<?php
require_once "header.php";
require_once "teams.php";

$name=$_POST['name'];
$team=$_POST['team'];
$gender=$_POST['gender'];

?>
<p>Name: <?= htmlentities($name); ?></p>
<p>Team: <?= $teams[$team]; ?></p>
<p>Gender: <?= htmlentities($gender); ?></p>
<?php

require_once "footer.php";
