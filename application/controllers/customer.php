<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends CI_Controller 
{
	/*Default Page*/
	public function loadbids()
	{
		$show = $this->customer_model->getbids();
		$showdata="<Strong><h4><b>Bids</b></h4></Strong>
				   <div style='overflow: scroll; height: 300px;'' class='well'>";
		if ($show->num_rows() > 0)
		{
			foreach ($show->result() as $row)
			{

				$detail=base_url('index.php/customer/details/'.$row->id.'/'.$row->carriers_id);
				$showdata.=$this->tqship->getConsignmentsWithBids($row->title,$row->source,$row->destination,$row->amount,$detail);
			}
			$showdata.="</div><div class='help-block'>*Click to open.</div>";
		}
		else
		{
			$showdata .="<div class='well well-lg' style='text-align:center'><h3>No New Bids</h3></div>";
		}
		return $showdata;
	}
	public function index()
	{
		$this->load->model('customer_model');
		
		$data=array('panel_title'=> 'DashBoard',
					'page' => 'customer/dashboard',
					'showdata'=>$this->loadbids());
			$this->load->view('customer',$data);
	}
	/*Default Page*/

	/*Get Distance*/
		function getDistance($addressFrom, $addressTo, $unit)
		{
		    //Change address format
		    $formattedAddrFrom = str_replace(' ','+',$addressFrom);
		    $formattedAddrTo = str_replace(' ','+',$addressTo);
		    //Send request and receive json data
		    $geocodeFrom = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false');
		    $outputFrom = json_decode($geocodeFrom);
		    $geocodeTo = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$formattedAddrTo.'&sensor=false');
		    $outputTo = json_decode($geocodeTo);
		    //Get latitude and longitude from geo data
		    $latitudeFrom = $outputFrom->results[0]->geometry->location->lat;
		    $longitudeFrom = $outputFrom->results[0]->geometry->location->lng;
		    $latitudeTo = $outputTo->results[0]->geometry->location->lat;
		    $longitudeTo = $outputTo->results[0]->geometry->location->lng;
		    //Calculate distance from latitude and longitude
		    $theta = $longitudeFrom - $longitudeTo;
		    $dist = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
		    $dist = acos($dist);
		    $dist = rad2deg($dist);
		    $miles = $dist * 60 * 1.1515;
		    $unit = strtoupper($unit);
		    if ($unit == "K") {
		        return ($miles * 1.609344).' km';
		    } else if ($unit == "N") {
		        return ($miles * 0.8684).' nm';
		    } else {
		        return $miles.' mi';
		    }
		}
	/*End Get Distance*/
	/*Dasboard Page2*/
	public function details($id,$cid)
	{
		$this->load->model('customer_model');
		$show=$this->customer_model->biddetails($id,$cid);
		foreach($show->result() as $row)
		{
			$info=array('tid'=>$row->tid,'id'=>$id,'title'=>$row->title,'description'=>$row->description,'expdate'=>$row->expected_delivery,'from'=>$row->source,'to'=>$row->destination,'name'=>$row->name,'address'=>$row->address,'contact'=>$row->contact,'amount'=>$row->amount,'ddate'=>$row->date_of_delivery);
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
						'showbr'=>1);
			$this->session->set_userdata("sno",1);
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
						'showbr'=>1,);
				$this->load->view('customer',$data);
			}
			else
			{
				$this->load->library('googlemaps');
				$config=array('zoom'=>'auto',
							  'directionsStart'=>$this->input->post('scity'),
							  'directionsEnd' =>$this->input->post('dcity'),
							  'directionsMode'=>"DRIVING",
							  'directions'=>TRUE,
							  'kmlLayerPreserveViewport'=>TRUE,
							  'map_height'=>"300px");
				$marker = array();
				$marker['position'] = $this->input->post('scity');
				$marker['infowindow_content'] = "Source";
				$marker['title']="Source";
				$this->googlemaps->add_marker($marker);

				$marker['position'] = $this->input->post('dcity');
				$marker['infowindow_content'] = "Destination";
				$marker['title']="Destination";
				$this->googlemaps->add_marker($marker);
				$this->googlemaps->initialize($config);

				$this->session->set_userdata('scity',$this->input->post('scity'));
				$this->session->set_userdata('dcity',$this->input->post('dcity'));
				$data=array('panel_title'=> 'New Consignment',
							'page' => 'newconsignment/newcon2',
							'ismap'=>1,
							'showbr'=>1,
							'dist'=>ceil($this->getDistance($this->input->post('scity'),$this->input->post('dcity'),"k")). " Kilometers",
							'map'=>$this->googlemaps->create_map());
				$this->session->set_userdata("sno",2);
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
						'showbr'=>1
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
							'page' => 'newconsignment/newcon3',
							'showbr'=>1);
				$this->session->set_userdata("sno",3);
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
						'showbr'=>1);
				$this->load->view('customer',$data);
			}
			else
			{
				$this->session->set_userdata('width',$this->input->post('width'));
				$this->session->set_userdata('height',$this->input->post('height'));
				$this->session->set_userdata('weight',$this->input->post('weight'));
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
							'page' => 'newconsignment/newcon4',
							'showbr'=>1);
				$this->session->set_userdata("sno",4);
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
					$data=array('panel_title'=> 'DashBoard',
							'page' => 'customer/dashboard',
							'msg'=>$msg,
							'showdata'=>$this->loadbids());
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
					$showdata.=$this->tqship->getConsignments($row->title,$row->source,$row->destination,$details);
				}
			}
			else
			{
				$showdata .="<div class='well well-lg' style='text-align:center'><h3>No New requests</h3></div>";
			}
			$showdata.="</div>";
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
		$queryy = $this->db->query("select source,destination,id,title,description,date_time,expected_delivery,image from shippings where id='".$cid."'");
		$row=$queryy->row();
		$info=array('id'=>$row->id,'title'=>$row->title,'description'=>$row->description,'date'=>$row->date_time,'expdate'=>$row->expected_delivery,'from'=>$row->source,'to'=>$row->destination,'img'=>$row->image);
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
		$query2 = $this->db->query("select s.amount,s.date_of_delivery,t.name,t.address,t.contact,t.id from sresponse s inner join tquser t on s.carriers_id=t.id where shippings_id=".$id." order by s.amount desc");
		$row=$queryy->row();
		$detail=array('title'=>$row->title,'image'=>$row->image);
		$showdata="<div style='overflow: scroll; height: 170px;  border-style: solid; border-width: 5px 0px 0px 0px; border-color:#f2f2f2;'>";
		if ($query2->num_rows() > 0)
		{
			foreach ($query2->result() as $row)
			{	
				$showdata.=$this->tqship->getBids($row->id,$row->amount);
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