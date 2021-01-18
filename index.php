<?php
require('User.php');

$first_user = new User();
$first_user-> setName('pippo');
$first_user-> setLastname('rossi');
$first_user-> setEmail('pippo.rossi@gamail.it');
$first_user-> setPassword('1234');
echo '<br>';
echo $first_user-> getName();
echo '<br>';
echo $first_user-> getLastname();
echo '<br>';
echo $first_user-> getEmail();
echo '<br>';
echo $first_user-> getPassword();

$second_user = new User();
$second_user-> setName('mario');
$second_user-> setLastname('verdi');
$second_user-> setEmail('mario.verdi@gmail.it');
$second_user-> setPassword('1710720');
echo '<br>';
echo $second_user-> getName();
echo '<br>';
echo $second_user-> getLastname();
echo '<br>';
echo $second_user-> getEmail();
echo '<br>';
echo $second_user-> getPassword();

$third_user = new User();
$third_user-> setName('luigi');
$third_user-> setLastname('bianchi');
$third_user-> setEmail('luigi.bianchi@gmail.it');
$third_user-> setPassword('1426242');
echo '<br>';
echo $third_user-> getName();
echo '<br>';
echo $third_user-> getLastname();
echo '<br>';
echo $third_user-> getEmail();
echo '<br>';
echo $third_user-> getPassword();
?>
