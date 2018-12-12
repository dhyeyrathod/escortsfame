<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class Profile extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('website');
		$this->load->model('common');
	}
	public function addnew()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->library('upload',$this->friend->file_upload_config());
			if ($this->form_validation->run('user_profile_form') && $this->upload->do_upload('image_upload')) {
				if ($this->website->setProfile($this->input->post(),$this->upload->data('file_name'),$this->session->userdata('user_id') )) {
					$this->session->set_flashdata('post_success','Your post has been created successfully...!!');
					redirect('profile/myads');
				} else {
					$this->session->set_flashdata('post_error','Some Error has been occurd');
				}
			} else {
				$data['image_upload_error'] = array('error' => $this->upload->display_errors());
			}
		}
		$data['all_contry_key'] = $this->website->getAllCountry();
		$data['banner_key'] = $this->website->getAllActiveBannre();
		$data['payment_category_key'] = $this->common->getAllPaymentCategory();
		$data['type_key'] = $this->common->getAllType();
		$this->load->view('website/add_new_profile',$data);
	}
	public function myads()
	{
		$data['all_contry_key'] = $this->website->getAllCountry();
		$data['banner_key'] = $this->website->getAllActiveBannre();
		$data['payment_category_key'] = $this->common->getAllPaymentCategory();
		$data['type_key'] = $this->common->getAllType();
		$data['list_all_post_key'] = $this->website->getAllPostOfSingleUser($this->session->userdata('user_id'));
		$this->load->view('website/user_profile_list',$data);
	}
	public function deactivate_post()
	{
		$post_id = $this->friend->base64url_decode($this->uri->segment(3));
		if ($this->common->validateUser($post_id,$this->session->userdata('user_id'))) {
			$this->website->postDeactivate($post_id);
			$this->session->set_flashdata('deactivate_success','Anauthorised User');
			redirect('profile/myads');
		} else {
			$this->session->set_flashdata('deactivate_error','Anauthorised User');
			redirect('profile/myads');
		}
	}
	public function edit()
	{
		$post_id = $this->friend->base64url_decode($this->uri->segment(3));
		if ($post_id && is_numeric($post_id) && $this->common->validateUser($post_id,$this->session->userdata('user_id'))) {
			if ($this->input->server('REQUEST_METHOD') == 'POST') {
				$this->load->library('upload',$this->friend->file_upload_config());
				if ($this->form_validation->run('user_edit_profile_form')) {
					if ($this->upload->do_upload('image_upload')) {
						$this->website->setProfile($this->input->post(),$this->upload->data('file_name'),$this->session->userdata('user_id'),$post_id);
						$this->session->set_flashdata('success','Post Update successfully...!!');
						$redirect_url = base_url('profile/edit/').$this->friend->base64url_encode($post_id);
						redirect($redirect_url);
					} else {
						$this->website->setProfile($this->input->post(),$this->input->post('old_image'),$this->session->userdata('user_id'),$post_id);
						$this->session->set_flashdata('success','Post Update successfully...!!');
						$redirect_url = base_url('profile/edit/').$this->friend->base64url_encode($post_id);
						redirect($redirect_url);
					}
				} 
			}
			$data['all_contry_key'] = $this->website->getAllCountry();
			$data['banner_key'] = $this->website->getAllActiveBannre();
			$data['payment_category_key'] = $this->common->getAllPaymentCategory();
			$data['type_key'] = $this->common->getAllType();
			$data['post_data'] = $this->website->getSinglePostByPostId($post_id);
			$data['post_id'] = $post_id ;
			$this->load->view('website/edit_profile',$data);
		} else {
				
		}
	}
}
