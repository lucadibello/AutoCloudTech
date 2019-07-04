<?php

// carico il file di configurazione
require 'application/config/config.php';

// carico le classi dell'applicazione
require 'application/libs/application.php';

// carico la classe che permette di caricare le view
require 'application/libs/viewloader.php';

// faccio partire l'applicazione
$app = new Application();