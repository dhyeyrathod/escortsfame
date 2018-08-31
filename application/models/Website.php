<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Jay Rathod
 */
class Website extends MY_Model
{	
	function __construct()
	{
		parent::__construct();
	}
	public function getAllCountry()
	{
		$sql_str = "SELECT * FROM countries";
		return $this->db->query($sql_str)->result();
	}
	public function getAllPremiumAndVipPost()
	{
		$sql_str = "SELECT * FROM profiles INNER JOIN cities ON profiles.fk_city_id = cities.city_id WHERE fk_payment_category_id IN (3,4) AND DATEDIFF(expiry_date,NOW()) > 0 ORDER BY RAND() LIMIT 100 OFFSET 0";
		return $this->db->query($sql_str)->result();
	}
	public function getAllFreeListingaAndTopPost()
	{
		$sql_str = "SELECT * FROM profiles INNER JOIN cities ON profiles.fk_city_id = cities.city_id WHERE profiles.status = TRUE AND fk_payment_category_id IN (1,2) AND DATEDIFF(expiry_date,NOW()) > 0 ORDER BY RAND() LIMIT 100 OFFSET 0";
		return $this->db->query($sql_str)->result();
	}
	public function getSingleEscortsDetailsById($escorts_id)
	{
		$sql_str = "SELECT * FROM profiles 
					INNER JOIN countries ON profiles.fk_country_id=countries.country_id
					INNER JOIN payment_category ON profiles.fk_payment_category_id=payment_category.id
					INNER JOIN cities ON profiles.fk_city_id=cities.city_id WHERE profiles.id = ".$this->db->escape($escorts_id);
		return $this->db->query($sql_str)->row();
	}
	public function setNewUserData($username,$email,$contact_number,$password,$user_id=0)
	{
		if ($user_id == 0) {
			$sql_str = "INSERT INTO members SET username = ".$this->db->escape($username).", email = ".$this->db->escape($email).", password = ".$this->db->escape($password).", contact_number = ".$this->db->escape($contact_number).", status = true , created_date = NOW()";
			return $this->db->query($sql_str);
		} else {
			echo "update query";
		}
	}
	public function checkUserLogin($email,$password)
	{
		$sql_str = "SELECT * FROM members WHERE email = ".$this->db->escape($email)." AND password = ".$this->db->escape($password)." AND status = true";
		return $this->db->query($sql_str)->row();
	}
	public function getAllActiveBannre()
	{
		$sql_str = "SELECT * FROM banner WHERE DATEDIFF(expiry_date,NOW()) > 0 AND status = true ORDER BY RAND() ";
		return $this->db->query($sql_str)->result();
	}
	public function getAllFreeAndPremiumPost($country_id=0,$city_id=0,$limit=0,$offset=0)
	{
		$sql_str = "SELECT * FROM profiles WHERE DATEDIFF(expiry_date,NOW()) > 0 AND status = true";
		if ($country_id && $country_id != 0) {
			$sql_str .= " AND fk_country_id = ".$this->db->escape($country_id) ;
		}
		$sql_str .= " AND fk_payment_category_id IN (1,2)";
		if ($city_id && $city_id != 0) {
			$sql_str .= " AND fk_city_id = ".$this->db->escape($city_id) ;
		}
		$sql_str .= " LIMIT $limit OFFSET $offset";
		return $this->db->query($sql_str)->result();
	}
	public function getTotalfreePrePostbyCountry($country_id=0,$city_id=0)
	{
		$sql_str = "SELECT * FROM profiles WHERE DATEDIFF(expiry_date,NOW()) > 0 AND status = true";
		if ($country_id && $country_id != 0) {
			$sql_str .= " AND fk_country_id = ".$this->db->escape($country_id) ;
		}
		$sql_str .= " AND fk_payment_category_id IN (1,2)";
		if ($city_id && $city_id != 0) {
			$sql_str .= " AND fk_city_id = ".$this->db->escape($city_id) ;
		}
		$sql_str .= " ORDER BY RAND()";
		return $this->db->query($sql_str)->num_rows();	
	}
	public function setProfile($data,$image,$user_id,$post_id=0)
	{
		if ($post_id == 0) {
			$sql_str = "INSERT INTO profiles SET name = ".$this->db->escape($data['name']).", email = ".$this->db->escape($data['email']).",website_url = ".$this->db->escape($data['website_url']).",title = ".$this->db->escape($data['title']).",description = ".$this->db->escape($data['description']).",fk_country_id=".$this->db->escape($data['country']).",fk_city_id = ".$this->db->escape($data['city']).",image = ".$this->db->escape($image).",fk_type_id = ".$this->db->escape($data['type']).",fk_payment_category_id = ".$this->db->escape($data['payment_category']).",fk_payment_period = ".$this->db->escape($data['payment_period'])." , user_id = ".$this->db->escape($user_id)." ,status = true , created_by = ".$this->db->escape($user_id)." , created_date = NOW() , activation_date = NOW() , expiry_date = DATE_ADD(NOW(), INTERVAL ".$this->db->escape($data['payment_period'])." DAY)";
			return $this->db->query($sql_str);
		} else {
			$sql_str = "UPDATE profiles SET name = ".$this->db->escape($data['name']).", email = ".$this->db->escape($data['email']).",website_url = ".$this->db->escape($data['website_url']).",title = ".$this->db->escape($data['title']).",description = ".$this->db->escape($data['description']).",fk_country_id=".$this->db->escape($data['country']).",fk_city_id = ".$this->db->escape($data['city']).",image = ".$this->db->escape($image).",fk_type_id = ".$this->db->escape($data['type']).", status = true , updated_by = ".$this->db->escape($user_id)." , updated_date = NOW() WHERE id = ".$this->db->escape($post_id);
			return $this->db->query($sql_str);
		}
	}
	public function getAllPostOfSingleUser($user_id)
	{
		$sql_str = "SELECT * FROM profiles WHERE user_id = ".$this->db->escape($user_id)." ORDER BY id DESC";
		return $this->db->query($sql_str)->result();
	}
	public function postDeactivate($post_id)
	{
		$sql_str = "UPDATE profiles SET status = false WHERE id = ".$this->db->escape($post_id);
		return $this->db->query($sql_str);
	}
	public function checkPostIsPresentOrNotById($post_id)
	{
		return $this->db->get_where('profiles', array('id' => $post_id))->num_rows();
	}
	public function getSinglePostByPostId($post_id)
	{
		$sql_str = "SELECT profiles.id , name , email , website_url , title , description , image , fk_payment_period , user_id , profiles.status as status , created_by , created_date , activation_date , expiry_date , updated_by , updated_date , contact_number , countries.country_name as country_name , countries.country_id as country_id , sortname , phonecode , payment_category_name , type.id as type_id , type , cities.city_id as city_id ,city_name , profiles.contact_number as contact_number FROM profiles INNER JOIN countries ON profiles.fk_country_id=countries.country_id INNER JOIN payment_category ON profiles.fk_payment_category_id=payment_category.id INNER JOIN type ON profiles.fk_type_id=type.id INNER JOIN cities ON profiles.fk_city_id=cities.city_id WHERE profiles.id = ".$this->db->escape($post_id);
		return $this->db->query($sql_str)->row();
	}
}