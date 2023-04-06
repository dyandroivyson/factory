<?php

include_once 'DBFactory.php';

$db = new DBFactory;
$db->setDriver('postgres');
$db->selectDatabase('localhost', 'test', 'admin', '1234');
