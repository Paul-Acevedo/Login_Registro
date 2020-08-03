<?php 
session_start();
$coon = mysqli_connect('localhost','root','','minicurso_login_registro');

if(!$coon){
    echo 'error';
}