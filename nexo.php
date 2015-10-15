<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/pedido.php");
require_once("clases/usuario.php");
$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'MostarLogin':
		include("partes/formLogin.php");
		break;
	case 'acciones':
		include("partes/botones.php");
		break;
	case 'desloguear':
		include("php/deslogearUsuario.php");
		break;



	case 'MostrarPedidos':
		include("partes/formMostrarPedidos.php");
	break;
	
	case 'GenerarPedido':
		include("partes/formGenerarPedido.php");
	break;



	case 'GuardarPedido':


		break;

	case 'BorrarPedido':


		break;
	
	case 'TraerPedido':


		break;


    case 'guardarMarcadores':
        session_start();
        if(isset($_POST["marcadores"]))
        {
            $filename = "ArchivosTxt/marcadores" . getdate()[0] . ".txt";

            $_SESSION['file'] = $filename;
            $puntos = $_POST["marcadores"];

            $file = fopen($filename, "w");

            foreach ($puntos as $valor)
            {
                $lat =  $valor["lat"];
                $lng =  $valor["lng"];
                $nombre =  $valor["nombre"];
                fwrite($file, $lat.">".$lng.">".$nombre . PHP_EOL);
            }
        fclose($file);

        echo "Marcadores guardados con exito";
        }
        else
            echo "No ingreso marcador/es a guardar";
        break;


	case 'VerEnMapa':
        include("partes/formMapa.php");
		break;

	default:
		# code...
		break;
}

 ?>