<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Carrier_model extends CI_Model 
{
	function __construct()
    {
        parent::__construct();
    }
    /*To Get Data of Open Consignments*/
    function opencon()
    {
        $cid=$this->session->userdata('userid');
        $query = $this->db->query("select s.id,s.title,s.description,s.date_time,s.expected_delivery,t.name,t.contact from shippings s inner join  tquser t on s.tquser_id=t.id where status!=2 and s.id not in(select shippings_id from sresponse where carriers_id=$cid)");
        return $query;
    }
    /*To Get Data of Open Consignments1*/
    /*To Get Data of Open Consignments2*/
    public function detail($id)
    {
        $query=$this->db->query("select s.id,s.title,s.description,s.date_time,s.expected_delivery,s.source,s.destination,t.name,t.contact from shippings s inner join  tquser t on s.tquser_id=t.id where s.id=$id");
        return $query;
    }
    /*To Get Data of Open Consignments2*/
    /*To Get Data of Recent Consignments*/
    function reccon()
    {
        $cid=$this->session->userdata('userid');
        $query = $this->db->query("select s.id,s.title,s.description,s.date_time,s.expected_delivery,t.name,t.contact from shippings s inner join  tquser t on s.tquser_id=t.id where status=1 and s.id in(select shippings_id from sresponse where carriers_id=$cid)");
        return $query;
    }
    /*To Get Data of Recent Consignments*/
    function reccon2($id)
    {
        $query=$this->db->query("select r.amount,r.date_of_delivery,s.id,s.title,s.description,s.date_time,s.expected_delivery,s.source,s.destination,t.name,t.contact from shippings s inner join  tquser t on s.tquser_id=t.id inner join sresponse r on shippings_id=s.id  where s.id=$id");
        return $query;
    }
    function bidremoved($id)
    {
        $cid=$this->session->userdata('userid');
        $query=$this->db->query("delete from sresponse where shippings_id=$id and carriers_id=$cid");
        return $query;
    }
    function getapproved_con()
    {
        $cid=$this->session->userdata('userid');
        $query=$this->db->query("select id,title,source,destination,width,height,status from shippings where carriers_id=$cid and status=2");
        return $query;
    }
}
?>