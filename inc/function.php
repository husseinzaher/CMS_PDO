<?php
include 'connection.php';

function posts()
{
 global $pdo;
 $query = $pdo->prepare("SELECT * FROM posts");
 $query->execute();
 return $query->fetchAll();
 
}
