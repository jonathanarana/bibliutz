<?php

class Alumnos_model extends CI_Model{

  function get_idAlumno($matricula){
    $res = $this->db->get_where('Alumnos',array('Matricula' => $matricula))->result_array();
    $id=-1;
    if ($res) {
      $id=$res[0]['idAlumnos'];
    }
    return $id;
  }
}?>
