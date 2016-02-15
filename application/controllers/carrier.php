<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrier extends CI_Controller 
{
	public function index()
	{
		$this->load->model('carrier_model');
		$show = $this->carrier_model->getapproved_con();
		$showdata="<Strong><h4><b>Customer Approved Consignments</b></h4></Strong>
				   <div style='overflow: scroll; height: 300px;' class='well'>";
		if ($show->num_rows() > 0)
		{
			foreach ($show->result() as $row)
			{
				$showdata.="<div class='list-group'>
				  <button id='con' data-id='$row->id' type='button' class='list-group-item'>
				  <div class='row'>
			   			<div class='col-md-9'>
               	    		<h2>$row->title</h2>
                    	</div>
				   	</div>
				  	</button></div>";
			}
			$showdata.="</div><div class='help-block'>*Click to open.</div>";
		}
		else
		{
			$showdata .="<div class='well well-lg' style='text-align:center'><h3>No New Bids</h3></div>";
		}
		$data=array('panel_title'=> 'DashBoard',
					'page' => 'carrier/dashboard',
					'showdata'=>$showdata);
		$this->load->view('carrier',$data);
		/*$data=array('panel_title'=> 'DashBoard',
						'page' => 'carrier/dashboard');
		$this->load->view('carrier',$data);*/
	}
	public function fetchconsignmentdata()
	{
		$query=$this->db->query('select s.id,s.title,s.source,s.destination,t.name,t.address,t.contact from shippings s inner join tquser t on t.id=s.tquser_id where s.id='.$this->input->post('id'));
       	echo json_encode($query->row());
	}
	/*Open Consignments1*/
	public function openconsignments()
	{
		$this->load->model('carrier_model');
		$show=$this->carrier_model->opencon();
		$showdata="<Strong><h4><b> Aww, You Have This Consignments Pending </b></h4></Strong>
				<div style='overflow: scroll; height: 300px;' class='well'>";
		if($show->num_rows() > 0)
		{
			foreach($show->result() as $row)
			{
				$details= base_url('index.php/carrier/opencon2/'.$row->id);
				$showdata.="<ul class='list-group'>
								<button type='button' class='list-group-item'>
				  					<div class='row'>
			   							<div class='col-md-9'>
               	    						<h3>$row->title</h3>
               	    					</div>
                        				<div class='col-md-3' style='margin-top:20px;'>
                        					<a href='".$details."' class='btn btn-default btn-sm pull-right'> View </a>
                        				</div>	
				   					</div>
				  				</button>
				  			</ul>";
			}
			$showdata.="</div>";
		}
		else
		{
			$showdata .="<div class='well well-lg' style='text-align:center'><h3>No New requests</h3></div>";
		}
		$data = array('panel_title' => 'Open Consignments',
					  'page' => 'opencon1',
					  'showdata'=>$showdata);
		$this->load->view('carrier',$data);

		/*<button type='button' class='list-group-item sbs'>$row->title
		<a href='".$details."' class='btn btn-default btn-sm pull-right'> View </a>
		</button>
		</ul>";*/
	}
	/*Open Consignments1*/
	/*Open Consignments2*/
	public function opencon2($id)
	{
		$this->load->model('carrier_model');
		$show = $this->carrier_model->detail($id);
		if($show->num_rows() > 0)
		{
			foreach($show->result() as $row)
			{
				$dataa=array('id'=>$row->id,'title'=>$row->title,'from'=>$row->source,'to'=>$row->destination,'expdate'=>$row->expected_delivery,'name'=>$row->name,'contact'=>$row->contact);
			}
		}
		else
		{
			$showdata .="<div class='well well-lg' style='text-align:center'><h3>No New Consignments</h3></div>";
		}
		$data = array('panel_title' => 'Open Consignments' ,'page' => 'opencon2','show'=>$dataa);
		$this->load->view('carrier',$data);
	}
	/*Open Consignments2*/
	/*Bid Update*/
	public function bid($id)
	{
		$cid=$this->session->userdata('userid');
		$query=$this->db->update('shippings',array('status'=>1),array('id'=>$id));
		$response=array('amount' =>$this->input->post('amount'),'date_of_delivery'=>$this->input->post('deliverydate'),'shippings_id'=>$id,'carriers_id'=>$cid);
		$query2=$this->db->insert('sresponse',$response);
		echo $this->openconsignments();
	}
	/*Bid Update*/
	/*Recent Consignments*/
	public function recentconsignments($pno)
	{
		$this->load->model('carrier_model');
		$show=$this->carrier_model->reccon();
		$showdata="<Strong><h4><b> Your Work Till Date </b></h4></Strong>
				<div style='overflow: scroll; height: 300px;' class='well'>";
		if($show->num_rows() > 0)
		{
			foreach($show->result() as $row)
			{
				$details= base_url('index.php/carrier/recent_consignment2/'.$row->id);
				$showdata.="<ul class='list-group'>
								<button type='button' class='list-group-item'>
				  					<div class='row'>
			   							<div class='col-md-9'>
               	    						<h3>$row->title</h3>
               	    					</div>
                        				<div class='col-md-3' style='margin-top:20px;'>
                        					<a href='".$details."' class='btn btn-default btn-sm pull-right'> View </a>
                        				</div>	
				   					</div>
				  				</button>
				  			</ul>";
				
			}
			$showdata.="</div><div class='help-block'>*Click to open.</div>";
		}
		else
		{
			$showdata .="<div class='well well-lg' style='text-align:center'><h3>No New requests</h3></div>";
		}
		$data = array('panel_title' => 'Recent Consignments',
					  'page' => 'careccon1',
					  'showdata'=>$showdata);
		$this->load->view('carrier',$data);

		/*<ul class='list-group'>
		<button type='button' class='list-group-item sbs'>$row->title
		<a href='".$details."' class='btn btn-default btn-sm pull-right'> View </a></button></ul>";*/
	}	
	/*Recent Consignments*/
	/*Recent Consignments2*/
	public function recent_consignment2($id)
	{
		$this->load->model('carrier_model');
		$show = $this->carrier_model->reccon2($id);
		if($show->num_rows() > 0)
		{
			foreach($show->result() as $row)
			{
				$dataa=array('id'=>$row->id,'title'=>$row->title,'from'=>$row->source,'to'=>$row->destination,'expdate'=>$row->expected_delivery,'name'=>$row->name,'contact'=>$row->contact,'amount'=>$row->amount,'ddate'=>$row->date_of_delivery);
			}
		}
		else
		{
			$showdata .="<div class='well well-lg' style='text-align:center'><h3>No New Consignments</h3></div>";
		}
		$data = array('panel_title' => 'Recent Consignments' ,'page' => 'careccon2','show'=>$dataa);
		$this->load->view('carrier',$data);
	}
	/*Recent Consignments2*/
	/*Mark As Not Done*/
	public function notdone($id)
	{
		$this->load->model('carrier_model');
		$this->carrier_model->bidremoved($id);
		echo $this->recentconsignments(1);	
	}
	/*Mark As Not Done*/
	/*Edit Profile*/
	public function editprofile()
	{
		$id=$this->session->userdata('userid');
		$queryy = $this->db->query("select name,address,gender,dob,contact,email,city from tquser where id='".$id."'");
		if ($queryy->num_rows() > 0)
		{
			foreach ($queryy->result() as $row)
			{	
				$details=array('name'=>$row->name,'address'=>$row->address,'gender'=>$row->gender,'dob'=>$row->dob,'contact'=>$row->contact,'email'=>$row->email,'city'=>$row->city);
			}
		}
		else
		{
			echo "nottt done";
		}
		$data=array('panel_title'=> 'Edit Profile',
					'page' => 'caeditpro',
					'show'=>$details,
					'id'=>$id);
		$this->load->view('carrier',$data);
	}
	/*Edit Profile*/
	/*Update Button*/
	public function update_profile($id)
	{
		$queryy=$this->db->update('tquser',array('name' => $this->input->post('caname'),'address' => $this->input->post('caaddress'),'gender' => $this->input->post('gender'),'dob' => $this->input->post('cadob'),'contact' => $this->input->post('cacontact'),'email' => $this->input->post('caemail'),'city' => $this->input->post('cacity')),array('id'=>$id));
		if($queryy==1)
		{
			echo $this->editprofile();
		}
		else
		{
			echo "not Done";
		}
	}
	/*Update Button*/
}
?>