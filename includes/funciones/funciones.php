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

  $camisas = (int)$camisas;
  if($camisas > 0){
    $json['camisas'] = $camisas;
  }

  $etiquetas = (int)$etiquetas;
  if($etiquetas > 0){
    $json['etiquetas'] = $etiquetas;
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

function formatear_pedido($articulos) {
  $articulos = json_decode($articulos, true);
  $pedido = '';

  if(array_key_exists('viernes', $articulos)):
    $pedido .= 'Pase(s) viernes: ' . $articulos['viernes'] . "<br/>";
  endif;

    if(array_key_exists('sabado', $articulos)):
        $pedido .= 'Pase(s) Sabado: ' . $articulos['sabado'] . "<br/>";
    endif;

    if(array_key_exists('domingo', $articulos)):
        $pedido .= 'Pase(s) Domingo: ' . $articulos['domingo'] . "<br/>";
    endif;

    if(array_key_exists('camisas', $articulos)):
        $pedido .= 'Camisas: ' . $articulos['camisas'] . "<br/>";
    endif;

    if(array_key_exists('etiquetas', $articulos)):
        $pedido .= 'Etiquetas: ' . $articulos['etiquetas'] . "<br/>";
    endif;

    return $pedido;
}

function eventos_json(&$eventos)
{
  $eventos_json = array();
  foreach ($eventos as $evento) {
    $eventos_json['eventos'][] = $evento;
  }

  return json_encode($eventos_json);
}

?>
