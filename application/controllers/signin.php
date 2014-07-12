<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


require APPPATH.'/libraries/REST_Controller.php';
class Signin extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');

        $this->load->model('userModel','',TRUE);
    }

    public function index_post() {

        $session_id = $this->session->userdata('session_id');
        
        if ($this->post('email') && $this->post('password')){
             $password = md5(mysql_real_escape_string($this->post('password')));
             $row = $this->userModel->get_by_email_and_password($this->post('email'),$password);
             if ($row){
                 $this->response(array('status'=> RESPONSE_SUCCESS,'session_id'=>$session_id,'data'=>$row),200);
             }
             else{
                 $this->response(array("status"=>RESPONSE_WRONG_CREDENTIALS),200);
             }
         }
         else {
             $this->response(array( "status"=> RESPONSE_WRONG_CREDENTIALS),200);
         }
        
    }

}
