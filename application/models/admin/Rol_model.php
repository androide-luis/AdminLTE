<?php
	class Rol_model extends CI_Model{

		public function add_rol($data){
			$this->db->insert('seguridad_roles', $data);
			return true;
		}

		public function get_all_roles(){
			$query = $this->db->get('seguridad_roles');
			return $result = $query->result_array();
		}

		public function get_rol_by_id($id){
			$query = $this->db->get_where('seguridad_roles', array('IdRol' => $id));
			return $result = $query->row_array();
		}

		public function edit_rol($data, $id){
			$this->db->where('IdRol', $id);
			$this->db->update('seguridad_roles', $data);
			return true;
		}

	}

?>