<?php
function productos_json(&$boletos, &$camisas = 0, &$etiquetas = 0){
  $dias = array(0 => 'viernes', 1 => 'sabado', 2 => 'domingo');
  $total_boletos = array_combine($dias, $boletos);
  $json = array();

  foreach ($total_boletos as $key => $boletos) {
    if ((int)$boletos) {
      $json[$key] = (int)$boletos;
    }
  }
  return json_encode($json);
}

?>
