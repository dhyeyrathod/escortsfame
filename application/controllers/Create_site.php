<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Jay Rathod
 */
class Create_site extends MY_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('website');
		$this->load->model('common');
	}
	public function index()
	{
		$data['all_contry_key'] = $this->website->getAllCountry();
		$data['banner_key'] = $this->website->getAllActiveBannre();
		$this->load->view('website/create_site_view',$data);
	}
}