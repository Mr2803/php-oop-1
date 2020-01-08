<?php
include "pojo_config.php";

// connessione al DB
include "getDb.php";
// download di tutte le configurazioni
$sql = "

      SELECT *
      FROM configurazioni

  ";
$res = $conn->query($sql);
if ($res->num_rows < 1) {

  echo json_encode(-2);
  return;
}

$confs = [];
while ($conf = $res->fetch_assoc()) {

  $myConf = new Configurazione(
    $conf['id'],
    $conf['title'],
    $conf['description']
  );
  $confs[] = $myConf;
}

foreach ($confs as $conf) {
  echo $conf . "\n";
}

