<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Jay rathod
 */
class Profile extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
		$this->load->model('common');
	}
	public function add_new()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->library('upload',$this->friend->file_upload_config());
			if ($this->form_validation->run('profile') && $this->upload->do_upload('image')) {
				if ($this->admin->setProfile($this->input->post(),$this->upload->data('file_name'))) {
					$this->session->set_flashdata('post_success','Your post has been created successfully...!!');
					redirect('Admin/Profile/add_new');
				} else {
					$this->session->set_flashdata('post_success','Your post has been created successfully...!!');
				}
			} else {
				$data['image_upload_error'] = array('error' => $this->upload->display_errors());
			}
		}

		$data['country_key'] = $this->common->getAllCountry();
		$data['type_key'] = $this->common->getAllType();
		$data['payment_category_key'] = $this->common->getAllPaymentCategory();
		$this->load->view('admin/add_new_profile',$data);
	}
	public function profileList()
	{
		$data['all_profile_key'] = $this->admin->getAllProfile();
		$this->load->view('admin/profile_list',$data);
	}
	public function edit()
	{
		$post_id = $this->friend->base64url_decode($this->uri->segment(4));
		if ($post_id && is_numeric($post_id) && $this->admin->checkPostIsPresentOrNotById($post_id)) {
			$data['post_data'] = $this->admin->getSinglePostByPostId($post_id);
			if ($this->input->server('REQUEST_METHOD') == 'POST') {
				$this->load->library('upload',$this->friend->file_upload_config());
				if ($this->form_validation->run('edit_profile') && $this->upload->do_upload('image')) {
					$this->admin->setProfile($this->input->post(),$this->upload->data('file_name'),$post_id);
					$redirect = base_url('Admin/Profile/edit/').$this->friend->base64url_encode($post_id);
					redirect($redirect);
				} else {	
					$this->admin->setProfile($this->input->post(),$this->input->post('old_image'),$post_id);
					$redirect = base_url('Admin/Profile/edit/').$this->friend->base64url_encode($post_id);
					redirect($redirect);
				}
			}
		} 
		$data['country_key'] = $this->common->getAllCountry();
		$data['type_key'] = $this->common->getAllType();
		$data['payment_category_key'] = $this->common->getAllPaymentCategory();
		$this->load->view('admin/add_new_profile',$data);
	}
	public function delete_post()
	{
		$post_id = $this->friend->base64url_decode($this->uri->segment(4));
		if ($post_id && is_numeric($post_id) && $this->admin->checkPostIsPresentOrNotById($post_id)) {
			$this->admin->deletePostById($post_id);
			redirect('Admin/Profile/profileList');
		}
	}
}