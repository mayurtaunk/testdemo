<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Customer_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
    /*To get list of Recent Consignments*/
    function getcon()
    {
    	$id=$this->session->userdata('userid');
    	$query = $this->db->query("select s.id,s.title,s.description,s.date_time,s.expected_delivery,t.name,t.address,t.contact from shippings s inner join  tquser t on s.tquser_id=t.id where s.tquser_id=$id");
    	return $query;
    }
    /*To get list of Recent Consignments*/
    /*To get bids for consignments*/
    function getbids()
    {
        $id=$this->session->userdata('userid');
        $query = $this->db->query("select s.id,s.title,s.source,s.destination,r.carriers_id,r.amount from shippings s inner join sresponse r on s.id=r.shippings_id where s.id in(select id from shippings where tquser_id=$id and status=1)");
        return $query;   
    }
    /*To get bids for consignments*/
    function biddetails($id,$cid)
    {
        $query = $this->db->query("select s.id,s.title,s.description,s.source,s.destination,s.expected_delivery,r.amount,r.date_of_delivery,t.name,t.address,t.contact,t.id as tid from shippings s inner join sresponse r on s.id=r.shippings_id inner join tquser t on r.carriers_id=t.id where s.id=$id and t.id=$cid");
        return $query;
    }
    /*To insert details of New Consignment*/
    function insert()
    {

        $this->db->trans_start();
        $data=array('source' => $this->session->userdata('scity'),
                    'destination' => $this->session->userdata('dcity'),
                    's_address' => $this->session->userdata('saddress'),
                    'd_address' => $this->session->userdata('daddress'),
                    'scode' => $this->session->userdata('spincode'),
                    'dcode' => $this->session->userdata('dpincode'),
                    'width' => $this->session->userdata('width'),
                    'height' => $this->session->userdata('height'),
                    'weight' => $this->session->userdata('weight'),
                    'description' => $this->session->userdata('description'),
                    'expected_delivery' => $this->session->userdata('expdate'),
                    'title' => $this->session->userdata('title'),
                    'image' => $this->session->userdata('image'),
                    'tquser_id' => $this->session->userdata('userid'),
                    'status' => '0',
                    'carriers_id' => '0');
        $this->db->set('date_time', 'NOW()', FALSE);
        $this->db->insert('shippings',$data);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE)
        {
            return 0;
        }
        else
        {
            return 1;
        }
        /*To insert details of New Consignment*/
    }
}