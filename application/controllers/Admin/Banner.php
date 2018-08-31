<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Jay Rathod
 */
class Banner extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
	}
	public function add_new_banner()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->library('upload',$this->friend->banner_upload_config());
			if ($this->form_validation->run('banner_form') && $this->upload->do_upload('banner_image')) {
				if ($this->admin->insertNewbanner($this->input->post(),$this->upload->data('file_name'))) {
					$this->session->set_flashdata('banner_success','Your post has been created successfully...!!');
					redirect('admin/Banner/add_new_banner');
				} else {
					$this->session->set_flashdata('banner_error','Error Plese Try again');
				}
			} else {
				$data['banner_upload_error'] = array('error' => $this->upload->display_errors());
			}
		}
		$data['banner_offer_key'] = $this->admin->getAllBannerOffer();
		$this->load->view('admin/add_banner_view',$data);
	}
}