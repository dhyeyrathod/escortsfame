<?php 
/**
 * @author Jay rathod
 */
class Friend
{
	public function file_upload_config()
	{
		$config['upload_path'] = './post_image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['encrypt_name'] = TRUE ;
		return $config ;
	}
	public function banner_upload_config()
	{
		$config['upload_path'] = './banner_image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['encrypt_name'] = TRUE ;
		return $config ;
	}
	public function base64url_encode($data) { 
	  	return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
	} 
	public function base64url_decode($data) { 
	  	return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
	} 
}