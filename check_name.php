<?php
$usersList = ['Toma', 'Petar', 'Marko'];

(string) $userInputtedName = !empty(trim($_POST['userInputtedName'])) ? strtolower(trim($_POST['userInputtedName'])) : '';
(bool) $isCorrectLength = strlen($userInputtedName) >= 3;

if ((bool) !$isCorrectLength) die('The name needs to have 3 or more characters!');

if (in_array(ucfirst($userInputtedName), $usersList)) {
    echo "Match found";
} else {
    echo "Match not found";
};
