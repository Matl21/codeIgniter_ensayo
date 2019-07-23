<?php

class LibroModel extends CI_Model{

    //CONSULTA PARA CARGAR LO DATOS
    public function getAll(){  
        return $this->db->get('libro')->result();
    }

    //CONSULTA PARA AGREGAR 
    public function agregar($data){     
        $sql="INSERT INTO LIBRO(titulo, descripcion, autor, estado) VALUES(?,?,?,?)";
        
        $this->db->query($sql, $data);
    }


    //CONSULTA PARA ELIMINAR
    public function eliminar($id){
        $this->db->query("DELETE FROM LIBRO WHERE id_libro=$id");
       
    }

    //CONSULTA PARA OBTENER UN REGISTRO
    public function obtenerRegistro($id){
        return $this->db->query("SELECT * FROM LIBRO WHERE id_libro=$id")->row();
       
    }


    //CONSULTA PARA ACTUALIZAR
    public function actualizar($data){
        $sql="UPDATE LIBRO SET titulo=?, descripcion=?, autor=?, estado=?, WHERE id_libro=?";
        
        $this->db->query($sql, $data);
       }


}