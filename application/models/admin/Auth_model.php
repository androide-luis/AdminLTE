<?php

class Auth_model extends CI_Model {

    public function login($data) {
        $query = $this->db->get_where('seguridad_usuarios', array('Usuario' => $data['usuario']));
        if ($query->num_rows() == 0) {
            return false;
        } else {
            //Compare the password attempt with the password we have stored.
            $result = $query->row_array();
            $validPassword = password_verify($data['password'], $result['password']);
            if ($validPassword) {
                return $result = $query->row_array();
            }
        }
    }

    public function change_pwd($data, $id) {
        $this->db->where('idusuario', $id);
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