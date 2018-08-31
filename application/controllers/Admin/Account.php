<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Dhyey rathod
 */
class Account extends MY_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
	}
	public function login()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$email = $this->security->xss_clean($this->input->post('email'));
			$password = $this->security->xss_clean($this->input->post('password'));
			if ($this->form_validation->run('login') && $this->admin->authenticationCheck($email,$password)) {	
				$this->response = $this->admin->getUserDetailsByEmail($email,$password);
				$userdata['admin_id'] = $this->response->id;$userdata['admin_name'] = $this->response->username ;
				$userdata['admin_email'] = $this->response->email;$userdata['admin_contact'] = $this->response->contact ;
 				$this->session->set_userdata($userdata);redirect('Admin/Dashboard');
			} else {
				$data['authentication_error'] = "Email Id And password is not correct";
			}
		}
		$data['test_key'] = '';
		$this->load->view('admin/login_view',$data);
	}
	public function logout()
	{
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_name');
		$this->session->unset_userdata('admin_email');
		$this->session->unset_userdata('admin_contact');
		redirect('Admin/Account/login');
	}
}