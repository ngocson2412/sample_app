<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/home
	 *	- or -
	 * 		http://example.com/index.php/home/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/home/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$data['template'] = 'backend/home/index';
		$this->load->view('backend/layout/index',isset($data)? $data:NULL);
	}
	public function bongda() {
		$data['template'] = 'backend/home/bongda';
		$this->load->view('backend/layout/index',isset($data)? $data:NULL);
	}
}
