<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Roles extends MY_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('admin/rol_model', 'rol_model');
		}

		public function index(){
			$data['all_roles'] =  $this->rol_model->get_all_roles();
			$data['view'] = 'admin/roles/roles_list';
			$this->load->view('admin/layout', $data);
		}
		
		public function add(){
			if($this->input->post('submit')){

                                $this->form_validation->set_rules('ClaveRol', 'ClaveRol', 'trim|required');
				$this->form_validation->set_rules('NombreRol', 'NombreRol', 'trim|required');
				$this->form_validation->set_rules('DescripcionRol', 'DescripcionRol', 'trim|required');
//                                $this->form_validation->set_rules('EstaInactivo', 'EstaInactivo', 'trim|required');
//				$this->form_validation->set_rules('UsrCaptura', 'UsrCaptura', 'trim|required');
//				$this->form_validation->set_rules('FechaCaptura', 'FechaCaptura', 'trim|required');
				

				if ($this->form_validation->run() == FALSE) {
					$data['view'] = 'admin/roles/rol_add';
					$this->load->view('admin/layout', $data);
				}
				else{
					$data = array(
						'ClaveRol' => $this->input->post('ClaveRol'),
						'NombreRol' => $this->input->post('NombreRol'),
						'DescripcionRol' => $this->input->post('DescripcionRol'),
                                                'EstaInactivo' => $this->input->post('EstaInactivo'),
                                            'UsrCaptura' => $this->session->userdata('Usuario'),
                                            'FechaCaptura' => date('Y-m-d : h:m:s'),
					);
					$data = $this->security->xss_clean($data);
					$result = $this->rol_model->add_rol($data);
					if($result){
						$this->session->set_flashdata('msg', 'Record is Added Successfully!');
						redirect(base_url('admin/roles'));
					}
				}
			}
			else{
				$data['view'] = 'admin/roles/rol_add';
				$this->load->view('admin/layout', $data);
			}
			
		}

		public function edit($id = 0){
			if($this->input->post('submit')){
                                $this->form_validation->set_rules('ClaveRol', 'ClaveRol', 'trim|required');
				$this->form_validation->set_rules('NombreRol', 'NombreRol', 'trim|required');
				$this->form_validation->set_rules('DescripcionRol', 'DescripcionRol', 'trim|required');
//                                $this->form_validation->set_rules('EstaInactivo', 'EstaInactivo', 'trim|required');
				

				if ($this->form_validation->run() == FALSE) {
					$data['rol'] = $this->rol_model->get_rol_by_id($id);
					$data['view'] = 'admin/roles/rol_edit';
					$this->load->view('admin/layout', $data);
				}
				else{
					$data = array(
						'ClaveRol' => $this->input->post('ClaveRol'),
						'NombreRol' => $this->input->post('NombreRol'),
						'DescripcionRol' => $this->input->post('DescripcionRol'),
                                                'EstaInactivo' => $this->input->post('EstaInactivo'),						
					);
					$data = $this->security->xss_clean($data);
					$result = $this->rol_model->edit_rol($data, $id);
					if($result){
						$this->session->set_flashdata('msg', 'Rol actualizado!');
						redirect(base_url('admin/roles'));
					}
				}
			}
			else{
				$data['rol'] = $this->rol_model->get_rol_by_id($id);
				$data['view'] = 'admin/roles/rol_edit';
				$this->load->view('admin/layout', $data);
			}
		}

		public function del($id = 0){
			$this->db->delete('seguridad_roles', array('IdRol' => $id));
			$this->session->set_flashdata('msg', 'Rol eliminado exitosamente!');
			redirect(base_url('admin/roles'));
		}

	}


?>