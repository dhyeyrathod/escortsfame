<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Jay Rathod
 */
class Common extends MY_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function getAllCityByCountryId($country_id)
	{
		$sql_str = "SELECT * FROM cities WHERE country_id = ".$this->db->escape($country_id);
		return $this->db->query($sql_str)->result();
	}
	public function getAllCountry()
	{
		$sql_str = "SELECT * FROM countries";
		return $this->db->query($sql_str)->result();
	}
	public function getAllType()
	{
		$sql_str = "SELECT * FROM type";
		return $this->db->query($sql_str)->result();	
	}
	public function getAllPaymentCategory()
	{
		$sql_str = "SELECT * FROM payment_category";
		return $this->db->query($sql_str)->result();
	}
	public function getPaymentPeriodByCategory($payment_category_id)
	{
		$sql_str = "SELECT * FROM payment_period WHERE fk_payment_category_id = ".$this->db->escape($payment_category_id);
		return $this->db->query($sql_str)->result();
	}
	public function getCountryDetailsByName($country_name)
	{
		$sql_str = "SELECT * FROM countries WHERE country_name = ".$this->db->escape($country_name);
		return $this->db->query($sql_str)->row();	
	}
	public function getCityDetailsByName($city_name)
	{
		$sql_str = "SELECT * FROM cities WHERE city_name = ".$this->db->escape($city_name);
		return $this->db->query($sql_str)->row();	
	}
	public function validateUser($post_id,$user_id)
	{
		$sql_str = "SELECT * FROM profiles WHERE id = ".$this->db->escape($post_id)." AND user_id = ".$this->db->escape($user_id);
		return $this->db->query($sql_str)->row();
	}
	public function getSinglePostByPostId($post_id)
	{
		$sql_str = "SELECT profiles.id , name , email , website_url , title , description , image , fk_payment_period , user_id , profiles.status as status , created_by , created_date , activation_date , expiry_date , updated_by , updated_date , contact_number , countries.country_name as country_name , countries.country_id as country_id , sortname , phonecode , payment_category_name , type.id as type_id , type , cities.city_id as city_id ,city_name , profiles.contact_number as contact_number FROM profiles INNER JOIN countries ON profiles.fk_country_id=countries.country_id INNER JOIN payment_category ON profiles.fk_payment_category_id=payment_category.id INNER JOIN type ON profiles.fk_type_id=type.id INNER JOIN cities ON profiles.fk_city_id=cities.city_id WHERE profiles.id = ".$this->db->escape($post_id);
		return $this->db->query($sql_str)->row();
	}
	public function checkPostIspresent($post_id)
	{
		$sql_str = "SELECT * FROM profiles WHERE id = ".$this->db->escape($post_id);
		return $this->db->query($sql_str)->num_rows();
	}
}