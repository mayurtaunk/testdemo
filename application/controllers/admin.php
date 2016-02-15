<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function index()
	{
		$this->load->model('admin_model');
		$con=$this->admin_model->getcon();
		$cus=$this->admin_model->getcus();
		$car=$this->admin_model->getcar();
		$data=array('panel_title'=>'DashBoard',
					'page' =>'admin/dashboard',
					'con'=>$con->sum,
					'cus'=>$cus->cus,
					'car'=>$car->car);
		$this->load->view('admin',$data);
	}
	/*Appove carrier*/
	public function approvecarrier()
	{	
		$this->load->model('admin_model');
		$show = $this->admin_model->getreq();
		$showdata="<strong><h4><b> There Are Some New Request </b></h4></strong>
					<div style='overflow: scroll; height: 300px;' class='well'>";
		if($show->num_rowS() > 0)
		{
			foreach ($show->result() as $row)
			{
				$reject= base_url('index.php/admin/rejectuser/'.$row->id);
				$accept= base_url('index.php/admin/acceptuser/'.$row->id);
				$showdata .="
					<div class='list-group'>
						<button data-toggle='modal' data-target='#carrierdetails' type='button' class='list-group-item'>
	  						<label class='control-label' for='textinput'>$row->name</label><br>
	  						<label class='control-label' for='textinput'>$row->address</label><br>
	  						<label class='control-label' for='textinput'>$row->contact</label><br>
	  						<a href='".$reject."' class='btn btn-danger'> Reject <i class='glyphicon'></i></a>
							<a href='".$accept."' class='btn btn-success'> Approve <i class='glyphicon'></i></a>
					  	</button>
					</div>";
			}
			$showdata .="</div><div class='help-block'> *Click to view more.</div>";
		}
		else
		{
			$showdata .="<div class='well well-lg' style='text-align:center'><h3>No New requests</h3></div>";
		}
		$data=array('nor'=> $showdata,'panel_title'=> 'Approve Carrier','page' => 'appvcar');
		$this->load->view('admin',$data);
	}
	/*Appove carrier*/
	/*Approve Button*/
	public function acceptuser($id)
	{
		$this->db->query("update users set status=1 where id=$id");
		echo $this->approvecarrier();
	}
	/*Approve Button*/
	/*Reject Button*/
	public function rejectuser($id)
	{
		$this->db->query("update users set status=2 where id=$id");
		echo $this->approvecarrier();
	}
	/*Reject Button*/
	/*Deactivate Profile*/
	public function deactpro()
	{
		$this->load->model('admin_model');
		$showcustomer = $this->admin_model->getcustomer();
		$showdata="<div style='overflow: scroll; height: 300px;'>";
		if($showcustomer->num_rows()>0)
		{
			foreach ($showcustomer->result() as $row)
			{
				$showdata.="<div class='list-group'>
					  			<button id='cu' data-id=$row->id  type='button' class='list-group-item'>
					  				<label class='control-label' for='textinput'>
					  				$row->name</label><br>
					  				<label class='control-label' for='textinput'>$row->address</label><br>
					  				<label class='control-label' for='textinput'>$row->contact</label><br>
					  			</button>
					  		</div>";
			}
			$showdata .="</div>";
		}
		else
		{
			$showdata .="<div class='well well-lg' style='text-align:center'><h3>No Customers</h3></div></div>";
		}
		$showcarrier = $this->admin_model->getcarrier();
		$showcar="<div style='overflow: scroll; height: 300px;'>";
		if($showcarrier->num_rows()>0)
		{
			foreach ($showcarrier->result() as $row)
			{
				$showcar.="<div class='list-group'>
					  			<button id='cr' data-id=$row->id type='button' class='list-group-item'>
					  				<label class='control-label' for='textinput'>
					  				$row->name</label><br>
					  				<label class='control-label' for='textinput'>$row->address</label><br>
					  				<label class='control-label' for='textinput'>$row->contact</label><br>
					  			</button></div>";
			}
			$showcar .="</div>";
		}
		else
		{
			$showcar .="<div class='well well-lg' style='text-align:center'><h3>No Carriers</h3></div>";
		}


		$data=array('panel_title' => 'Deactivate Carrier/Clients','page' => 'deactivate_profile','nocustomer'=>$showdata,'nocarrier'=>$showcar);
		$this->load->view('admin',$data);
	}
	/*Deactivate Profile*/
	public function deactuser($id)
	{
		$this->db->update('users',array('status'=>'2'),array('id'=>$id));
		echo $this->deactpro();
	}
	/*Outstanding Cosignments*/
	public function outconsignment()
	{
		$this->load->model('admin_model');
		$showw=$this->admin_model->getoutcon();
		$showdata="<div style='overflow: scroll; height: 300px;'>";
		if($showw->num_rows() > 0)
		{
			foreach($showw->result() as $row)
			{
				$showdata.="<div class='list-group'>
		  						<button data-id=$row->id id='con' type='button' class='list-group-item'>
		  						<label class='control-label' for='textinput'>Name: $row->title</label><br>
		  						<label class='control-label' for='textinput'>From: $row->source To: $row->destination</label><br>
		  						<label class='control-label' for='textinput'>Contact: $row->contact</label><br>
		  					</button></div>";
			}
			$showdata.="</div><div class='help-block'> *Click to view more. </div>";
		}
		else
		{
			$showdata.="<div class='well well-lg' style='text-align:center'><h3>No New Consignments</h3></div>";
		}
		$data=array('panel_title' => 'Outstanding Consignment',
					'page' => 'outstanding_consignment',
					'outcon'=>$showdata);
		$this->load->view('admin',$data);
	}
	/*Outstanding Cosignments*/
	/*For Model Showing Customer Details*/
	public function fetchcustomerdata()
	{
		$query=$this->db->query('select u.id,t.name,t.address,t.contact,t.city,t.dob,t.email,t.gender from users u inner join tquser t on u.tquser_id=t.id where status=1 and type=2 and u.id='.$this->input->post('id'));
       	echo json_encode($query->row());
	}
	/*For Model Showing Customer Details*/
	/*For Model Showing Carrier Details*/
	public function fetchcarrierdata()
	{
		$query=$this->db->query('select u.id,t.name,t.address,t.contact,t.city,t.dob,t.email,t.gender from users u inner join tquser t on u.tquser_id=t.id where status=1 and type=1 and u.id='.$this->input->post('id'));
       	echo json_encode($query->row());
	}
	/*For Model Showing Carrier Details*/
}
?>