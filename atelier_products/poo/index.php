<?php

require_once 'classes/User.php';
require_once 'function.php';

$user = new User();

$user->setLastname("Williams");
$user->setFirstname("Georges");

echo $user->getFullName();

echo $user->getIntroduction();