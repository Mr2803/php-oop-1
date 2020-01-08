<?php
class Configurazione {

// variabili
public $id;
public $title;
public $description;

function __construct($id, $title, $description) {

// valorizzazione variabili tramite parametri
$this -> id = $id;
$this -> title = $title;
$this -> description = $description;
}

//funzioni utili

public function __toString() {

/* rappresentazione testuale dell'oggetto */
return "[" . $this->id . "] "
. $this->title . " - "
. $this->description;
}
}