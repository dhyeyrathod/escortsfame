<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author jay Rathod
 */
class Common_admin extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('common');
	}
	public function getcity()
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
	public function getpaymentperiod()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$payment_caegory_id = $this->input->post('payment_caegory_id');
			header('Content-Type: application/json');
    		echo json_encode(array('status' =>'success','payment_period'=>$this->common->getPaymentPeriodByCategory($payment_caegory_id),'message'=>'data fetch successfully'));
		}
	}
}