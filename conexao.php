<?php

$host = "Seu IP";
$usuario = "Seu Usuario";
$senha = "Sua senha";
$banco = "Seu BCD";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);