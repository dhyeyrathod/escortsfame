<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Jay rathod
 */
class Admin extends MY_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function authenticationCheck($email,$password)
	{
		$sql_str = "SELECT * FROM admin WHERE email = ".$this->db->escape($email)." AND password = ".$this->db->escape($password);
		return $this->db->query($sql_str)->num_rows();
	}
	public function getUserDetailsByEmail($email)
	{
		$sql_str = "SELECT * FROM admin WHERE email = ".$this->db->escape($email) ;
		return $this->db->query($sql_str)->row();
	}
	public function setProfile($data,$image,$post_id=0)
	{
		if ($post_id == 0) {
			$sql_str = "INSERT INTO profiles SET name = ".$this->db->escape($data['name']).", email = ".$this->db->escape($data['email']).",website_url = ".$this->db->escape($data['website_url']).",title = ".$this->db->escape($data['title']).",description = ".$this->db->escape($data['description']).",fk_country_id=".$this->db->escape($data['country']).",fk_city_id = ".$this->db->escape($data['city']).",image = ".$this->db->escape($image).",fk_type_id = ".$this->db->escape($data['type']).",fk_payment_category_id = ".$this->db->escape($data['payment_category']).",contact_number = ".$this->db->escape($data['contact_number']).",fk_payment_period = ".$this->db->escape($data['payment_period'])." , user_id = 0 ,status = ".$this->db->escape($data['status'])." , created_by = 0 , created_date = NOW() , activation_date = NOW() , expiry_date = DATE_ADD(NOW(), INTERVAL ".$this->db->escape($data['payment_period'])." DAY)";
			return $this->db->query($sql_str);
		} else {
			$sql_str = "UPDATE profiles SET name = ".$this->db->escape($data['name']).", email = ".$this->db->escape($data['email']).",website_url = ".$this->db->escape($data['website_url']).",title = ".$this->db->escape($data['title']).",description = ".$this->db->escape($data['description']).",fk_country_id=".$this->db->escape($data['country']).",fk_city_id = ".$this->db->escape($data['city']).",image = ".$this->db->escape($image).",fk_type_id = ".$this->db->escape($data['type']).", status = ".$this->db->escape($data['status'])." ,contact_number = ".$this->db->escape($data['contact_number']).", updated_by = 0 , updated_date = NOW() WHERE id = ".$this->db->escape($post_id);
			return $this->db->query($sql_str);
		}
	}
	public function getAllBannerOffer()
	{
		$sql_str = "SELECT * FROM banner_offers";
		return $this->db->query($sql_str)->result();
	}
	public function insertNewbanner($data,$filename,$post_id=0)
	{
		$sql_str = "INSERT INTO banner SET banner_image = ".$this->db->escape($filename).", webiste_url = ".$this->db->escape($data['url']).", months = ".$this->db->escape($data['banner_offer']).", activation_date = NOW() , expiry_date = DATE_ADD(NOW(), INTERVAL ".$this->db->escape($data['banner_offer'])." month) , created_date = NOW() , created_by = 1";
		return $this->db->query($sql_str);
	}
	public function getAllProfile()
	{
		$sql_str = "SELECT profiles.id as id , name , profiles.email as email , website_url , title , image , CASE WHEN profiles.status = false THEN 'Deactivate' ELSE 'Activate' END AS status , CASE WHEN profiles.user_id = 0 THEN 'admin' ELSE (SELECT username FROM members WHERE id = profiles.user_id) END AS username , payment_category.payment_category_name as payment_category_name FROM profiles INNER JOIN payment_category On payment_category.id = profiles.fk_payment_category_id ORDER BY profiles.id DESC";
		return $this->db->query($sql_str)->result();
	}
	public function getSinglePostByPostId($post_id)
	{
		$sql_str = "SELECT profiles.id , name , email , website_url , title , description , image , fk_payment_period , user_id , profiles.status as status , created_by , created_date , activation_date , expiry_date , updated_by , updated_date , contact_number , countries.country_name as country_name , countries.country_id as country_id , sortname , phonecode , payment_category_name , type.id as type_id , type , cities.city_id as city_id ,city_name , profiles.contact_number as contact_number FROM profiles INNER JOIN countries ON profiles.fk_country_id=countries.country_id INNER JOIN payment_category ON profiles.fk_payment_category_id=payment_category.id INNER JOIN type ON profiles.fk_type_id=type.id INNER JOIN cities ON profiles.fk_city_id=cities.city_id WHERE profiles.id = ".$this->db->escape($post_id);
		return $this->db->query($sql_str)->row();
	}
	public function checkPostIsPresentOrNotById($post_id)
	{
		return $this->db->get_where('profiles', array('id' => $post_id))->num_rows();
	}
	public function deletePostById($post_id)
	{
		$sql_str = "UPDATE profiles SET status = 0 WHERE id = ".$this->db->escape($post_id);
		return $this->db->query($sql_str);
	}
}