<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author jay rathod
 */
class Escorts extends MY_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('website');
		$this->load->model('common');
	}
	public function index()
	{
		$escorts_id = $this->friend->base64url_decode($this->uri->segment(3));
		if ($this->uri->segment(3) && $this->uri->segment(2) == "details" && $this->common->checkPostIspresent($escorts_id)) {
			$data['all_contry_key'] = $this->website->getAllCountry();
			$data['escorts_details_key'] = $this->website->getSingleEscortsDetailsById($escorts_id);
			$data['banner_key'] = $this->website->getAllActiveBannre();
			$this->load->view('website/details_view',$data);
		} else {
			redirect('home/error_page_not_found');
		}
	}
	public function country()
	{
		$country_data = $this->common->getCountryDetailsByName($this->uri->segment(2));
		if ($country_data) {
			$config['base_url'] = base_url('escorts')."/".$this->uri->segment(2);
			$config['total_rows'] = $this->website->getTotalfreePrePostbyCountry($country_data->country_id);
			$config['per_page'] = 100;
			$this->pagination->initialize($config);
			$data['free_toplinks_post_key'] = $this->website->getAllFreeAndPremiumPost($country_data->country_id,0,$config['per_page'],$this->uri->segment(3) ? $this->uri->segment(3) : 0);
			$data['all_contry_key'] = $this->website->getAllCountry();
			$data['city_key'] = $this->common->getAllCityByCountryId($country_data->country_id);
			$data['banner_key'] = $this->website->getAllActiveBannre();
			$data['iscountry'] = true ;
			$data['iscity'] = false ;
			$this->load->view('website/listing_view',$data);
		}
	}
	public function city()
	{
		$city_data = $this->common->getCityDetailsByName($this->uri->segment(3));
		if ($city_data) {
			$config['base_url'] = base_url('escorts')."/".$this->uri->segment(2)."/".$this->uri->segment(3);
			$config['total_rows'] = $this->website->getTotalfreePrePostbyCountry(0,$city_data->city_id);
			$config['per_page'] = 100;
			$this->pagination->initialize($config);
			$data['free_toplinks_post_key'] = $this->website->getAllFreeAndPremiumPost(0,$city_data->city_id,$config['per_page'],$this->uri->segment(4) ? $this->uri->segment(4) : 0);
			$country_data = $this->common->getCountryDetailsByName($this->uri->segment(2));
			$data['all_contry_key'] = $this->website->getAllCountry();
			$data['city_key'] = $this->common->getAllCityByCountryId($country_data->country_id);
			$data['banner_key'] = $this->website->getAllActiveBannre();
			$data['iscountry'] = false ;
			$data['iscity'] = true ;
			$this->load->view('website/listing_view',$data);
		}
	}
}
