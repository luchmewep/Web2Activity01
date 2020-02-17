<?php
// $host='localhost';
// $username='admin';
// $password='admin';
// $database='email';

$host = 'us-cdbr-iron-east-04.cleardb.net';
$username = 'bcf54e7efed215';
$password = '9686ed7d';
$database = 'heroku_28abd66046b35da';

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
     echo "-1";
}
