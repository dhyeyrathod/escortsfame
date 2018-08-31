<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Jau Rathod
 */
class Dashboard extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('admin_id')) : redirect('admin/account/login') ; endif ; 
	}
	public function Index()
	{
		$this->load->view('admin/dashboard_view');
	}
}