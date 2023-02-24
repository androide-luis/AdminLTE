<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Email
 *
 * @author landrade
 */
class Email extends MY_Controller {
    
    function __construct() {
        parent::__construct();
      
       

    }
    
    public function index ()
    {
        $this->load->helper('form');
        //$this->load->view('email_form');
        $data['view'] = 'admin/email/email_form';
        $this->load->view('admin/layout', $data);
    }
    
    public function send_email ()
    {
        $from_email = "landrade@teayudo.com.mx";
        $to_email = $this->input->post('to_email');
        $subject_email = $this->input->post('subject_email');
        $message_email = $this->input->post('message_email');
        
        //load email library
        $this->load->library('email');
        $this->email->from($from_email,'Luis Antonio Andrade');
        $this->email->to($to_email);
        $this->email->subject($subject_email);
        $this->email->message($message_email);
        
        // Send email
        if($this->email->send())
            {
            echo "Email delivered successfully";
            }
            else
            {
                        $this->load->view('email_form');

            }
    }
    
}
