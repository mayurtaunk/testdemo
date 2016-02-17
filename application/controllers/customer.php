<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends CI_Controller 
{
	/*Default Page*/
	public function index()
	{
		$this->load->model('customer_model');
		$show = $this->customer_model->getbids();
		$showdata="<Strong><h4><b>Bids</b></h4></Strong>
				   <div style='overflow: scroll; height: 300px;'' class='well'>";
		if ($show->num_rows() > 0)
		{
			foreach ($show->result() as $row)
			{
				$detail=base_url('index.php/customer/details/'.$row->id.'/'.$row->carriers_id);
				$showdata.="<div class='list-group'>
				  <button type='button' class='list-group-item'>
				  <div class='row'>
			   			<div class='col-md-9'>
               	    		<h2>$row->title</h2>
               	    		<div class='row'>
               	    			<div class='col-md-6'>
                   	    		<p>$row->source - $row->destination</p>
                   	    		</div>
                   	    		<div class='col-md-6'>
                   	    		<p>$row->amount</p>
                   	    		</div>
                   	    	</div>
                    	</div>
                        <div class='col-md-3' style='margin-top:30px;'><a href='".$detail."' class='btn btn-default btn-sm pull-right'> View </a></div>	
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
					'page' => 'customer/dashboard',
					'showdata'=>$showdata);
			$this->load->view('customer',$data);
	}
	/*Default Page*/
	/*Dasboard Page2*/
	public function details($id,$cid)
	{
		$this->load->model('customer_model');
		$show=$this->customer_model->biddetails($id,$cid);
		if($show->num_rows() > 0)
		{
			foreach($show->result() as $row)
			{
				$info=array('tid'=>$row->tid,'id'=>$id,'title'=>$row->title,'description'=>$row->description,'expdate'=>$row->expected_delivery,'from'=>$row->source,'to'=>$row->destination,'name'=>$row->name,'address'=>$row->address,'contact'=>$row->contact,'amount'=>$row->amount,'ddate'=>$row->date_of_delivery);
			}
		}
		else
		{
			echo "Not Done";
		}
		$data=array('panel_title'=> 'DashBoard',
					'page' => 'customer/page2',
					'show'=>$info);
			$this->load->view('customer',$data);

	}
	/*Dasboard Page2*/
	/*Approve Consignment*/
	public function approvecon($id,$tid)
	{
		$query=$this->db->update('shippings',array('status' => 2,'carriers_id'=>$tid),array('id'=>$id));
		echo $this->index();
	}
	/*Approve Consignment*/
	/*New Consignment for Customer*/
	public function newconsignment($pno)
	{
		if($pno==1)
		{
			/*pass title form here */
			$data=array('panel_title'=> 'New Consignment',
						'page' => 'newconsignment/newcon1',
						);
			$this->load->view('customer',$data);
		}
		else if($pno==2)
		{
			$this->form_validation->set_rules('scity', 'Source City', 'required');
			$this->form_validation->set_rules('dcity', 'Destination City', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$data=array('panel_title'=> 'New Consignment',
						'page' => 'newconsignment/newcon1',
						);
				$this->load->view('customer',$data);
			}
			else
			{
				$this->session->set_userdata('scity',$this->input->post('scity'));
				$this->session->set_userdata('dcity',$this->input->post('dcity'));
				$data=array('panel_title'=> 'New Consignment',
							'page' => 'newconsignment/newcon2',
							);
				$this->load->view('customer',$data);
			}
		}
		else if($pno==3)
		{
			$this->form_validation->set_rules('saddress', 'Source Address', 'required');
			$this->form_validation->set_rules('spincode', 'Source Pincode', 'required|numeric|max_length[6]');
			$this->form_validation->set_rules('daddress', 'Destination Address', 'required');
			$this->form_validation->set_rules('dpincode', 'Destination Pincode', 'required|numeric|max_length[6]');
			if ($this->form_validation->run() == FALSE)
			{
				$data=array('panel_title'=> 'New Consignment',
						'page' => 'newconsignment/newcon2',
						);
				$this->load->view('customer',$data);
			}
			else
			{
				$this->session->set_userdata('saddress',$this->input->post('saddress'));
				$this->session->set_userdata('spincode',$this->input->post('spincode'));
				$this->session->set_userdata('daddress',$this->input->post('daddress'));
				$this->session->set_userdata('dpincode',$this->input->post('dpincode'));
				$data=array('panel_title'=> 'New Consignment',
							'page' => 'newconsignment/newcon3');
				$this->load->view('customer',$data);
			}
		}
		else if($pno==4)
		{
			$this->form_validation->set_rules('width', 'Width', 'required|numeric');
			$this->form_validation->set_rules('height', 'Height', 'required|numeric');
			$this->form_validation->set_rules('weight', 'Weight', 'required|numeric');
			$ext=pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
			if (empty($_FILES['userfile']['name']))
			{
    			$this->form_validation->set_rules('userfile', 'Image', 'required');
			}
			
			if ($this->form_validation->run() == FALSE)
			{
				$data=array(
						'panel_title'=> 'New Consignment',
						'page' => 'newconsignment/newcon3',
						);
				$this->load->view('customer',$data);
			}
			else
			{
				$this->session->set_userdata('width',$this->input->post('width'));
				$this->session->set_userdata('height',$this->input->post('height'));
				$this->session->set_userdata('weight',$this->input->post('weight'));
				$this->session->set_userdata('image',$this->input->post('image'));
				$filename="Img_".random_string('alnum', 16).'.'.pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
				$config['upload_path']   = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['file_name']     = $filename;
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload())
				{
					$msg=$this->upload->display_errors()."<br>You can only upload ".$config['allowed_types'];
				}
				else
				{
					$this->session->set_userdata('location','uploads/'.$filename);
				}
				$data=array('panel_title'=> 'New Consignment',
							'page' => 'newconsignment/newcon4');
				$this->load->view('customer',$data);
			}
		}
		else if($pno==5)
		{
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('desc', 'Description', 'required');
			$this->form_validation->set_rules('expdate', 'Expected Date', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$data=array('panel_title'=> 'New Consignment',
						'page' => 'newconsignment/newcon4',
						);
				$this->load->view('customer',$data);
			}
			else
			{
				$this->session->set_userdata('title',$this->input->post('title'));
				$this->session->set_userdata('description',$this->input->post('desc'));
				$this->session->set_userdata('expdate',$this->input->post('expdate'));
				$this->load->model('customer_model');
				if($this->customer_model->insert() == 1)
				{
					$msg="<Strong> New Consignment Registered </strong>";
					$data=array('panel_title'=> 'New Consignment',
							'page' => 'newconsignment/newcon4',
							'msg'=>$msg);
					$this->load->view('customer',$data);
				}
				else
				{
					$msg="<Strong> Error </strong>";
					$data=array('panel_title'=> 'New Consignment',
							'page' => 'newconsignment/newcon4',
							'msg'=>$msg);
					$this->load->view('customer',$data);
				}
			}
		}
	}
	/*New Consignment for Customer*/
	/*Recent Consignment Page1*/
	public function recentconsignment($pno,$id)
	{
		if ($pno==1)
		{
			$this->load->model('customer_model');
			$show = $this->customer_model->getcon();
			$showdata = "<Strong><h4><b> Here Are Your Recent Consignments </b></h4></Strong>
				<div style='overflow: scroll; height: 300px;' class='well'>";
			if ($show->num_rows() > 0)
			{
				foreach ($show->result() as $row)
				{
					$details=base_url('index.php/customer/details_of_con/'.$row->id);
					$showdata.="<div class='list-group'>
				  					<button type='button' class='list-group-item'>
				  						<div class='row'>
			   								<div class='col-md-9'>
               	    						<h2>$row->title</h2>
                    					</div>
                        				<div class='col-md-3' style='margin-top:20px;'><a class='btn btn-default btn-sm pull-right' href='".$details."'> Details </a></div>	
				  					</button>
				  				</div>"; 
				}
				$showdata.="</div>";
			}
			else
			{
				$showdata .="<div class='well well-lg' style='text-align:center'><h3>No New requests</h3></div>";
			}
			$data=array('panel_title'=> 'Recent Consignment',
						'page' => 'recentconsignment/reccon1',
						'reccon'=>$showdata);
			$this->load->view('customer',$data);
		}	
	}
	/*Recent Consignment Page1*/
	/*Recent Consignment Page2*/
	public function details_of_con($id)
	{
		$cid=$id;
		$queryy = $this->db->query("select source,destination,id,title,description,date_time,expected_delivery from shippings where id='".$cid."'");
		if ($queryy->num_rows() > 0)
		{
			foreach ($queryy->result() as $row)
			{	
				$info=array('id'=>$row->id,'title'=>$row->title,'description'=>$row->description,'date'=>$row->date_time,'expdate'=>$row->expected_delivery,'from'=>$row->source,'to'=>$row->destination);
			}
		}
		else
		{
			echo "nottt done";
		}
		$data=array('panel_title'=> 'Recent Consignment',
					'page' => 'recentconsignment/reccon2',
					'show'=>$info);
		$this->load->view('customer',$data);
	}
	/*Recent Consignment Page2*/
	/*Recent Consignment Page3*/
	public function bids_for_con($id)
	{
		$queryy = $this->db->query("select image,title from shippings where id='".$id."'");
		$query2 = $this->db->query("select s.amount,s.date_of_delivery,t.name,t.address,t.contact,t.id from sresponse s inner join tquser t on s.carriers_id=t.id where shippings_id='".$id."'");
		if ($queryy->num_rows() > 0)
		{
			foreach ($queryy->result() as $row)
			{	
				$detail=array('title'=>$row->title,'image'=>$row->image);
			}
		}
		else
		{
			echo "nottt done";
		}
		$showdata="<div style='overflow: scroll; height: 170px;  border-style: solid; border-width: 5px 0px 0px 0px; border-color:#f2f2f2;'>";
		if ($query2->num_rows() > 0)
		{
			foreach ($query2->result() as $row)
			{	
				$showdata.="<ul class='list-group'>
								<button type='button' class='list-group-item'>
			  						<div class='row'>
		   								<div class='col-md-9'>
           	    						<h3>$row->amount</h3>
                					</div>
                    				<div class='col-md-3' style='margin-top:20px;'><a type='button' class='btn btn-default btn-sm pull-right' id='view' data-id='$row->id'> View </a></div>	
				  				</button>";
			}
			$showdata.="</div>";
		}
		else
		{
			$showdata .="<div class='well well-lg' style='text-align:center'><h3>No New Bids</h3></div>";
		}

		$data=array('panel_title'=> 'Recent Consignment',
					'page' => 'recentconsignment/reccon3',
					'show'=>$detail,
					'showdata'=>$showdata,
					'id'=>$id);
			$this->load->view('customer',$data);

		/*data-toggle='modal' data-target='#sellerdetails'*/
		/*<button type='button' class='list-group-item'>$row->amount
		<a type='button' class='btn btn-default btn-sm pull-right' data-toggle='modal' data-target='#sellerdetails'> View </a>
		</button></ul>*/
	}
	/*Recent Consignment Page3*/
	public function info()
	{
		$queryy = $this->db->query("select name,address,contact from tquser where id=".$this->input->post('id'));
		echo json_encode($queryy->row());;
	}
	/*Edit Profile for Customer*/
	public function editprofile()
	{
		$id=$this->session->userdata('userid');
		$queryy = $this->db->query("select name,address,gender,dob,contact,email,city from tquser where id=".$id);
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
					'page' => 'cuseditpro',
					'show'=>$details,
					'id'=>$id);
		$this->load->view('customer',$data);
	}
	/*Edit Profile for Customer*/
	/*Update Button*/
	public function update_profile($id)
	{
		$queryy=$this->db->update('tquser',array('name' => $this->input->post('cname'),'address' => $this->input->post('caddress'),'gender' => $this->input->post('gender'),'dob' => $this->input->post('cdob'),'contact' => $this->input->post('ccontact'),'email' => $this->input->post('cemail'),'city' => $this->input->post('ccity')),array('id'=>$id));
		if($queryy)
		{
			echo $this->editprofile();
		}
		else
		{
			echo "Nott Done";
		}
	}
	/*Update Button*/
}