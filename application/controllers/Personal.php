<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('form_work');
	}
	public function create(){
		$data = array(
			'Name_LastName' =>$this->input->post("Name_LastName"),
			'ID_Card' =>$this->input->post("ID_Card"),
			'Date_Of_Birth' =>$this->input->post("Date_Of_Birth"),
			'Sex' =>$this->input->post("Sex"),
			'Address' =>$this->input->post("Address"),
			'Tel' =>$this->input->post("Tel"),
			'E_mail' =>$this->input->post("E_mail"),
			'Facebook' =>$this->input->post("Facebook"),
			'Instagram' =>$this->input->post("Instagram"),
		);
		$get['a'] = $data;
		$this->load->view('get_Personal',$get);
	}
	
}
