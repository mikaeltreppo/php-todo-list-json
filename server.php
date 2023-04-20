<?php
$todo =['alzarsi','mangiare','uscire','divertirsi','lavarsi','dormire'];
header('Content-Type: application/json');
echo json_encode($todo);