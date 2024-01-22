<?php

// Includi la classe Alunno
require_once 'Alunno.php';

// Creazione di un array di oggetti Alunno
$alunni = array();

// Aggiungi alcuni alunni all'array
$alunno1 = new Alunno();
$alunno1->setNome('Mario');
$alunno1->setCognome('Rossi');
$alunno1->setEta(15);
$alunni[] = $alunno1;

$alunno2 = new Alunno();
$alunno2->setNome('Luca');
$alunno2->setCognome('Bianchi');
$alunno2->setEta(16);
$alunni[] = $alunno2;

// Stampare i singoli elementi dell'array
foreach ($alunni as $alunno) {
    $alunno->stampaAttributi();
}
?>
