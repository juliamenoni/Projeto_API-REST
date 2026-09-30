<?php

$host = "192.168.10.95";
$usuario = "postgres";
$senha = "Jul14@2504";
$banco = "manutencao";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);