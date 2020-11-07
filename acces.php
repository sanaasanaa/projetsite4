<?php
// ouvre une nouvelle session et doit être au debut sans quoi que ce soit avant meme un espace
// session_start();

// definir variable
$email=$_POST['email'];
$password=$_POST['password'];

// connexion base de donnees
$pdo=new PDO('mysql:host=localhost; dbname=admin2', 'root', '');

$query=$pdo->query('SELECT * FROM datas2');

$resultat=$query->fetch(PDO::FETCH_ASSOC);

//  var_dump($resultat);

$emaildb=$resultat['email'];
$passworddb=$resultat['password'];

if ($email===$emaildb && $password===$passworddb) {
    echo 'bonjour';
}else {
    echo'vous n etes pas autorisé';
}




?>