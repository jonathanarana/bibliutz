<?php

class Empleados_model extends CI_Model{

  function login($data){
    return $this->db
                ->select('idAdministradores, Nombre')
                ->from('Administradores')
                ->where('Usuario=',$data['user'])
                ->where('PW=',md5($data['pass']))
                ->get()
                ->result_array();
  }
}?>
