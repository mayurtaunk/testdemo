<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model 
{
	/*To get count of Consignments for Dasboard*/
	function getcon()
	{
    	$query = $this->db->query("select count(id) as sum from shippings");
  		return $query->row();
	}
	/*To get count of consignments for Dasboard*/
	/*To get count of Customers for Dasboard*/
	function getcus()
	{
		$query = $this->db->query("select count(id) as cus from users where type=2 and status=1");
  		return $query->row();
	}
	/*To get count of Customers for Dasboard*/
	/*To get count of Carriers for Dasboard*/
	function getcar()
	{
		$query = $this->db->query("select count(id) as car from users where type=1 and status=1");
  		return $query->row();
	}
	/*To get count of Carriers for Dasboard*/
	/*To get list of active customers for deactivating profile*/
	function getcustomer($name)
    {
    	$query = $this->db->query("select u.id,t.name,t.address,t.contact from users u inner join tquser t on u.tquser_id=t.id where status=1 and type=2 and name like'%$name%'");
    	return $query;
    }
    /*To get list of active customers for deactivating profile*/
    /*To get list of active carriers for deactivating profile*/
    function getcarrier($name)
    {
    	$query = $this->db->query("select u.id,t.name,t.address,t.contact from users u inner join tquser t on u.tquser_id=t.id where status=1 and type=1 and t.name like '%$name%'");
    	return $query;
    }
    /*To get list of active carriers for deactivating profile*/
    /*To get list of carriers to approve them*/
    function getreq()
    {
        $query = $this->db->query('select u.id,t.name,t.address,t.contact from users u inner join tquser t on u.tquser_id=t.id where status=0');
        return $query;
    }
    /*To get list of carriers to approve them*/
    function getoutcon()
    {
        $query = $this->db->query("select s.source,s.destination,s.id,s.title,s.description,s.date_time,s.expected_delivery,t.name,t.address,t.contact from shippings s inner join  tquser t on s.tquser_id=t.id where s.status=0");
        return $query;
    }
}
?>