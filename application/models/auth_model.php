<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
    /*To insert registration details of New Carriers & Customers*/
    function insert()
    {
        $status = 0;
        if($this->session->userdata('utype') == 2)
        {
            $status = 1;
        }
    	$this->db->trans_start();
        $data=array('name' => $this->session->userdata('name'),
                    'address' => $this->session->userdata('address'),
                    'gender' => $this->session->userdata('gender'),
                    'dob' => $this->session->userdata('dob'),
                    'contact' => $this->session->userdata('contact'),
                    'email' => $this->session->userdata('email'),
                    'city' => $this->session->userdata('city'));
        $this->db->insert('tquser',$data);
        $id = $this->db->insert_id(); 
        $datauser=array('auth_key'=>$this->session->userdata('pass'),
                        'security_question'=>$this->session->userdata('question'),
                        'security_answer'=>$this->session->userdata('answer'),
                        'status'=>$status,
                        'type'=>$this->session->userdata('utype'),
                        'tquser_id'=>$id);
    	$this->db->insert('users',$datauser);
        
        if($this->session->userdata("utype")=="1")
        {
            $datauser=array('id_proof'=>$this->session->userdata('locationproof'),
                        'status'=>0,
                        'tquser_id'=>$id
                        );
            $this->db->insert('carriers',$datauser);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }
    /*To insert registration details of New Carriers & Customers*/
    /*To verify the user*/
    function validate()
    {
        $id=$this->input->post('username');
        $pass=$this->input->post('pass');
        $result=$this->db->query("select u.id,t.email,u.auth_key,u.type
        from users u inner join tquser t on u.tquser_id=t.id where u.status=1 and t.email='".$id."' and u.auth_key='".$pass."'");
        $row=$result->row();
        if ($result->num_rows() > 0)
        {
            $this->session->set_userdata('userid',$row->id);
            if($row->type == 0)
            {
                $this->session->set_userdata('login_type',0);
                return 0;
            }
            else if($row->type == 1)
            {
                $this->session->set_userdata('login_type',1);
                return 1;
            }
            else if($row->type == 2)
            {
                $this->session->set_userdata('login_type',2);
                return 2;
            }
        }
        else
        {
            return 5;
        }
    }
    /*To verify the user*/

}