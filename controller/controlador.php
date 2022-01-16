<?php
// require_once('../model/clsClient');


$accion = $_POST['accion'];  //Parametro que capturamos desde la vista

operaciones($accion); //Ejecutamos la operacion

function operaciones($accion)
{

    // $objCliente = new clsCliente(); 
    
    switch ($accion) {
        case 'CONSULTA_DNI':
            # code...


            $dni = $_POST['dni'];
            $ws = "https://consultaruc.win/api/dni/$dni?format=json";

            $header = array();

            $ch = curl_init(); // inicializar el cURL
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
            curl_setopt($ch, CURLOPT_URL, $ws); // Se envia la URL del servicio
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

            $datos = curl_exec($ch); //Ejectutamos y guardamos el resultado en datos
            curl_close($ch);

            echo $datos; //retorna a la vista la data
            break;

            // $rpt = json_decode($datos); //convierte el json en un array
            // var_dump($rpt);
            // //GRABAR CLIENTE
            // $cliente = array(
            //    'tipodoc' => '1',
            //    'nrodoc' => $rpt[0] -> Nombre,
            //    'razon_social' => $datos,
            //    'direccion' => 'PERU-LIMA'
                
            // );

            
            case 'CONSULTA_RUC':
                # code...
    
    
                $ruc = $_POST['ruc'];
                $ws = "https://consultaruc.win/api/ruc/$ruc?format=json";
    
                $header = array();
    
                $ch = curl_init(); // inicializar el cURL
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
                curl_setopt($ch, CURLOPT_URL, $ws); // Se envia la URL del servicio
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
                curl_setopt($ch, CURLOPT_TIMEOUT, 30);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    
                $datos = curl_exec($ch); //Ejectutamos y guardamos el resultado en datos
                curl_close($ch);
    
                echo $datos; //retorna a la vista la data
                break;
        default:
            # code...
            break;
    }
}