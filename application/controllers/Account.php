<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Jay Rathod
 */
class Account extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('website');
		$this->load->model('common');
	}
	public function signup()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			if ($this->form_validation->run('sign_up_user')) {
				$username = $this->security->xss_clean($this->input->post('username'));
				$email = $this->security->xss_clean($this->input->post('email'));
				$contact_number = $this->security->xss_clean($this->input->post('contact_number'));
				$password = $this->security->xss_clean($this->input->post('password'));
				if ($this->website->setNewUserData($username,$email,$contact_number,$password)) {
					$this->session->set_flashdata('success','Registration Successfully...!!! Plese login');
					redirect('Account/login');
				} else {
					$this->session->set_flashdata('error','Error Plese Try again');
					redirect('Account/signup');
				}
			}
		}

		$data['all_contry_key'] = $this->website->getAllCountry();
		$data['banner_key'] = $this->website->getAllActiveBannre();
		$this->load->view('website/signup_view',$data);
	}
	public function login()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			if ($this->form_validation->run('login_user')) {
				$email = $this->security->xss_clean($this->input->post('email'));
				$password = $this->security->xss_clean($this->input->post('password'));
				$response = $this->website->checkUserLogin($email,$password);
				if (isset($response)) {
					$userdata['user_id'] = $response->id ;$userdata['username'] = $response->username ;
					$userdata['email'] = $response->email ;$userdata['contact_number'] = $response->contact_number ;
					$userdata['created_date'] = $response->created_date ; $this->session->set_userdata($userdata);
					$this->session->set_flashdata('success','Login Successfully...!!!');redirect();
				} else {
					$this->session->set_flashdata('error','Username And password is not correct');redirect('Account/login');
				}
			}
		}
		$data['all_contry_key'] = $this->website->getAllCountry();
		$data['banner_key'] = $this->website->getAllActiveBannre();
		$this->load->view('website/login_view',$data);
	}
	public function logout()
	{
		$this->session->unset_userdata('user_id');$this->session->unset_userdata('username');
		$this->session->unset_userdata('email');$this->session->unset_userdata('contact_number');
		$this->session->unset_userdata('created_date');redirect('Account/login');
	}
}
