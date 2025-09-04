<?php
session_start();
include('databaselocation.php');
if(!empty($_POST['u1']) && !empty($_POST['e1']) && !empty($_POST['p1']) && !empty($_POST['add1']) && !empty($_POST['add2']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip']) )
{
$uname=$_POST['u1'];
$email=$_POST['e1'];
$lastname=$_POST['l1'];
$password=$_POST['p1'];
$address1=$_Post['add1'];
$address2=$_Post['add2'];
$city=$_Post['city'];
$state=$_Post['state'];
$zip=$_Post['zip'];
$pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
