<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Jay Rathod
 */
class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('friend');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->friend = new friend ;
	}
}