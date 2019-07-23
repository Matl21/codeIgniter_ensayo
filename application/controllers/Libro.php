<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libro extends CI_Controller {



    public function __construct()
    {
        //HACER USO DE LO METODO CONSTRUCTORE DEL PADRE 
        parent::__construct();
        //METODO CARGADO EN EL MODELO
        $this->load->model('libroModel');

        
    }

    
    //METODO INDEX PARA VER LA PÁGINA PRINCIPAL
	public function index()
	{
		$this->load->view('libro/index');
    }
    

    //METODO QUE LLAMA LOS DATOS DE LA BASE DE DATOS Y REDICCIONA
    public function cargarDatos(){ 
       $libros = $this->libroModel->getAll();
       $data=['libros' => $libros];

    $this->load->view('libro/tabla', $data);
    }


    //METODO QUE AGREGA DATOS A LA BASE DE DATOS USANDO JAVASCRIP Y AJAX
    public function agregar(){
        $data=[$_POST['titulo'], $_POST['descripcion'], $_POST['autor'], $_POST['estado']];
    
        $this->libroModel->agregar($data);
    
        $this->load->view('libro/index', $data);
      }


      //METODO QUE ELIMINA UN REGISTRO USANDO JAVASCRIPT Y AJAX
      public function eliminar($id){
        $this->libroModel->eliminar($id);
      }



      //METODO CON EL QUE OBTENDRIA EL REGISTRO PARA MODIFICAR AUN NO TERMINADO :V
      public function obtenerRegistro($id){
      $dato=['libros'=>$this->libroModel->obtenerRegistro($id)];
      $this->load->view('libro/form', $dato);
      }



}