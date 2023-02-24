<?php
	class User_model extends CI_Model{

		public function add_user($data){
			$this->db->insert('seguridad_usuarios', $data);
			return true;
		}

		public function get_all_users(){
			$query = $this->db->get('vw_seguridad_usuarios');
			return $result = $query->result_array();
		}

		public function get_user_by_id($id){
			$query = $this->db->get_where('vw_seguridad_usuarios', array('IdUsuario' => $id));
			return $result = $query->row_array();
		}

		public function edit_user($data, $id){
			$this->db->where('IdUsuario', $id);
			$this->db->update('vw_seguridad_usuarios', $data);
			return true;
		}

	}

?>