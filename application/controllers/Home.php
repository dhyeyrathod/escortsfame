<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author jay rahtod
 */
class Home extends MY_Controller
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
		$data['premium_and_vip_post_key'] = $this->website->getAllPremiumAndVipPost();
		$data['free_and_top_post_key'] = $this->website->getAllFreeListingaAndTopPost();
		$data['banner_key'] = $this->website->getAllActiveBannre();
		$this->load->view('website/home_view',$data);
	}
	public function getcities()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$country_id = $this->input->post('country_id');
			$response = $this->common->getAllCityByCountryId($country_id);
			if ($response) {
				header('Content-Type: application/json');
    			echo json_encode(array('status' =>'success','cities_data'=>$response,'message'=>'data fetch successfully'));
			} else {
				header('Content-Type: application/json');
    			echo json_encode(array('status' =>'failed','message'=>'city is not present'));
			}
		}
	}
	public function error_page_not_found()
	{
		$data['all_contry_key'] = $this->website->getAllCountry();
		$data['banner_key'] = $this->website->getAllActiveBannre();
		$this->load->view('website/error_404',$data);
	}
}