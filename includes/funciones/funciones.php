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
function usuario_admin_autenticado(){
  if(!revisar_usuario()){
      header('Location:login.php');
  }  else{
    if(!$_SESSION['tipo']=='admin'){
        header('Location:login.php');
    }
  }
}

function usuario_autenticado(){
  if(!revisar_usuario()){
    header('Location:login.php');
  }
}

function revisar_usuario(){
  return isset($_SESSION['usuario']);
}

?>
