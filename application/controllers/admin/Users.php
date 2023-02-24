<?php

date_default_timezone_set('America/Mexico_City');

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/user_model', 'user_model');
        $this->load->model('admin/log_model', 'log_model');
    }

    public function index() {
        //START: MWS Log
        $idAdmin = $this->session->userdata('idusuario');
        $this->add_log($idAdmin, "check - controller: Users  func: index()");
        //END: MWS Log                    
        $data['all_users'] = $this->user_model->get_all_users();
        $data['view'] = 'admin/users/user_list';
        $this->load->view('admin/layout', $data);
    }

    public function add() {
        if ($this->input->post('submit')) {

            $this->form_validation->set_rules('Nombre', 'Nombre', 'trim|required');
            $this->form_validation->set_rules('ApPaterno', 'ApPaterno', 'trim|required');
            $this->form_validation->set_rules('ApMaterno', 'ApMaterno', 'trim|required');
            $this->form_validation->set_rules('Usuario', 'Usuario', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('mobile_no', 'Number', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('user_role', 'User Role', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['view'] = 'admin/users/user_add';
                $this->load->view('admin/layout', $data);
            } else {
                $data = array(
                    'Nombre' => $this->input->post('Nombre'),
                    'ApPaterno' => $this->input->post('ApPaterno'),
                    'ApMaterno' => $this->input->post('ApMaterno'),
                    'Usuario' => $this->input->post('Usuario'),
                    'email' => $this->input->post('email'),
                    'mobile_no' => $this->input->post('mobile_no'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                    'IdRol' => $this->input->post('IdRol'),
                    'created_at' => date('Y-m-d : h:m:s'),
                    'updated_at' => date('Y-m-d : h:m:s'),
                );
                $data = $this->security->xss_clean($data);
                $result = $this->user_model->add_user($data);
                if ($result) {
                    //MWS Log
                    $idAdmin = $this->session->userdata('admin_id');
                    $this->add_log($idAdmin, "successfully new user - " . $data['username']);

                    $this->session->set_flashdata('msg', 'Usuario registrado con éxito!');
                    redirect(base_url('admin/users'));
                }
            }
        } else {
            $data['view'] = 'admin/users/user_add';
            $this->load->view('admin/layout', $data);
        }
    }

    public function edit($id = 0) {
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('Nombre', 'Nombre', 'trim|required');
            $this->form_validation->set_rules('ApPaterno', 'ApPaterno', 'trim|required');
            $this->form_validation->set_rules('ApMaterno', 'ApMaterno', 'trim|required');
            $this->form_validation->set_rules('Usuario', 'Usuario', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('mobile_no', 'Number', 'trim|required');
            $this->form_validation->set_rules('user_role', 'User Role', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['user'] = $this->user_model->get_user_by_id($id);
                $data['view'] = 'admin/users/user_edit';
                $this->load->view('admin/layout', $data);
            } else {
                $data = array(
                    'Nombre' => $this->input->post('Nombre'),
                    'ApPaterno' => $this->input->post('ApPaterno'),
                    'ApMaterno' => $this->input->post('ApMaterno'),
                    'Usuario' => $this->input->post('Usuario'),
                    'email' => $this->input->post('email'),
                    'mobile_no' => $this->input->post('mobile_no'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                    'IdRol' => $this->input->post('IdRol'),
                    'updated_at' => date('Y-m-d : h:m:s'),
                );
                $data = $this->security->xss_clean($data);
                $result = $this->user_model->edit_user($data, $id);
                if ($result) {
                    $this->session->set_flashdata('msg', 'Usuario actualizado!');
                    redirect(base_url('admin/users'));
                }
            }
        } else {
            $data['user'] = $this->user_model->get_user_by_id($id);
            $data['view'] = 'admin/users/user_edit';
            $this->load->view('admin/layout', $data);
        }
    }

    public function del($id = 0) {
        //MWS Log
        $idAdmin = $this->session->userdata('admin_id');
        $this->add_log($idAdmin, "successfully deleted user - " . $id);
        
        $data = array(
            'is_active' => 0,
        );
        $this->user_model->delete_user($data, $id);
        
        $this->db->delete('seguridad_usuarios', array('idusuario' => $id));
        $this->session->set_flashdata('msg', 'Usuario eliminado exitosamente!');
        redirect(base_url('admin/users'));
    }

}

?>