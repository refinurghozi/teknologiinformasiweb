<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	
    public function __construct() {
        parent::__construct();
        $this->load->model('Modelnya');
    }
    function index() {
        $this->load->view('index');
    }
    function create() {
        $data = array(
        'name' => $this->input->post('name'),
        'subject' => $this->input->post('subject'),
        'komentar' => $this->input->post('komentar')
        );
        $this->Modelnya->addData($data);
        $this->index();
    }
    function readData() {
        $data = $this->Modelnya->getData();
        $this->load->view('view', array('data' => $data));
    }
    function delete_barang(){
    $delete = $this->input->post('users');
    $this->Modelnya->delete_item($delete);
    $this->readData();
    }
}