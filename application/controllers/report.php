<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class report extends CI_Controller {

	
	
    public function __construct() {
        parent::__construct();
        $this->load->model('Modelnya');
    }
    function index() {
        $data['users'] = $this->modelnya->getData()->result();
        $this->load->view('view',$data);
        
    }
    function download(){
        header("Content-Type:   application/ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=abc.xls");  //File name extension was wrong
        $data['users'] = $this->modelnya->readData()->result();
        $this->load->view('view',$data);
        
        
    }
}
?>