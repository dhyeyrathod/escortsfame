<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author jay Rathod
 */
class Banner extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
		$this->load->model('common');
	}
	public function index()
	{
		$data['all_contry_key'] = $this->website->getAllCountry();
		$data['banner_key'] = $this->website->getAllActiveBannre();
		$this->load->view('website/banner_view',$data);
	}
}