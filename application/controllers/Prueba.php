<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once ( APPPATH.'/libraries/REST_Controller.php');
use Restserver\libraries\REST_Controller;

class Prueba extends REST_Controller {
    public function index(){
        echo "Hola Mundo";
    }

    public function obtener_arreglo_get( $index ) {

        $arreglo = array( "Manzana", "Pera", "Piña");

        // echo json_encode( $arreglo[$index] );
        $this->response( $arreglo[$index] );
    }

    public function obtener_producto( $codigo ) {

        $this->load->database();

        $query = $this->db->query("SELECT * FROM `productos` where codigo = '". $codigo ."'");

        echo json_encode($query->result());

    }
}
