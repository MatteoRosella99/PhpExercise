<?php

error_reporting(0);

//Auto detecte che delimita ogni riga del file csv
ini_set('auto_detect_line_endings', TRUE);

//Ricavo le variabili inserite in console
$file_csv = $argv[1];
$index_row = $argv[2];
$name = $argv[3];

//Apro file csv in sola lettura
$fileHandle = fopen($file_csv, 'r');

//Inizio a ciclare all'interno del mio CSV
while (($line = fgetcsv($fileHandle)) !== FALSE) { //Ricavo ogni riga di dati
    //Condizione
    if ($line[$index_row] == $name) { //Se il valore presente nella colonna è uguale al nome inserito in console
        //Mostro tutti i dati inerenti a quella riga
        echo "- ID: " . $line[0] . "\n";
        echo "- Nome: " . $line[1] . "\n";
        echo "- Cognome: " . $line[2] . "\n";
        echo "- Data di nascita: " . $line[3] . "\n";
    }
}