<?php

class Libros_model extends CI_Model{

  function new_libro($data){
    //$ejemplares=$data['Ejemplares'];
    //unset($data['Ejemplares']);
    $str = $this->db->insert_string('Libros', $data);
    $this->db->query($str);
    return $this->db->insert_id();
    //if ($ejemplares>0) {
    //  for ($i=0; $i < $ejemplares ; $i++) {

    //  }
    //}
  }

  function new_ejemplar($data){
    $str = $this->db->insert_string('Ejemplares', $data);
    $this->db->query($str);
    return $this->db->insert_id();
  }

  function get_libros(){
    return $this->db->get('Libros')->result_array();
  }

  function get_cant($id){
    $res=$this->db->query("SELECT COUNT(`idEjemplar`) AS `Cantidad` FROM `Ejemplares` WHERE `Libro`='{$id}'")->result_array();
    return $res[0]['Cantidad'];
  }

  function get_title($id){
    $res = $this->db->get_where('Libros',array('idlibro' => $id))->result_array();
    return $res[0]['Titulo'];
  }

  function get_ids($id){
    return $this->db
    ->select('idEjemplar')
    ->from('Ejemplares')
    ->where('Libro',$id)
    ->get()->result_array();
  }

  function find_libros($por,$criterio){
    $this->db->like($por,$criterio);
    return $libros=$this->db
    ->get('Libros')
    ->result_array();
  }

  function new_prestamo($data){
    $str = $this->db->insert_string('Prestamos', $data);
    $this->db->query($str);
    return $this->db->insert_id();
    //return $str;
  }
  function get_prestamo($id){
    $prestamo=$this->db
    ->select('idPrestamos')
    ->from('Prestamos')
    ->where('Ejemplar',$id)
    ->where('Retorno',0)
    ->get()
    ->result_array();
    if ($prestamo) {
      return $prestamo[0]['idPrestamos'];
    }
    else{
      return -1;
    }
  }

  function Retorno($id,$data){
    $this->db->where('idPrestamos', $id);
    $this->db->update('Prestamos', $data);
  }

}?>
