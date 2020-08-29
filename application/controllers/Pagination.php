<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * author mahen
 */
class Pagination extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->library('Pagination_bootstrap');
		$sql = $this->db->get('orotcapital');
		$this->Pagination_bootstrap->offset(10);
		$this->Pagination_bootstrap->config("/pagination/index",$sql)
		$this->load->view('pagination',$data);
	}
}