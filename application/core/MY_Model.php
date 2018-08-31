<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author jay rathod
 */
class MY_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
}