<?php

class Auth_model extends CI_Model {

    public function login($data) {
        //$query = $this->db->get_where('seguridad_usuarios', array('Usuario' => $data['usuario']));
        $this->db->select('*');
        $this->db->from('seguridad_usuarios');
        $this->db->join('personas_personas', 'seguridad_usuarios.IdPersona = personas_personas.IdPersona');
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            //Compare the password attempt with the password we have stored.
            $result = $query->row_array();
            //$validPassword = password_verify($data['password'], $result['Pwd']);  //Use when Pwd is crypted
            $validPassword = ($data['password'] == $result['Pwd'])? 1 : 0;
            if ($validPassword) {
                return $result = $query->row_array();
            }
        }
    }

    public function change_pwd($data, $id) {
        $this->db->where('Idusuario', $id);
        $this->db->update('seguridad_usuarios', $data);
        return true;
    }
    public function validaPermiso($IdPermiso, $IdRol){
        if($query= $this->db->query(''
            . 'SELECT EXISTS (SELECT IdPermisosRol from seguridad_permisosrol WHERE IdRol='.$IdRol.' AND IdPermiso='.$IdPermiso.') Permiso'
            . '')){
            return ($query->result());   
        }
    }
    
}

?>