<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tqship 
{
    
    public function getCustomerList($name)
    {
        $CI =& get_instance();
        $CI->load->model('admin_model');
        $showcustomer = $CI->admin_model->getcustomer($name);
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
            return $showdata;
        }
        else
        {
            $showdata .="<div class='well well-lg' style='text-align:center'><h3>No Customers</h3></div></div>";
            return $showdata;
        }
    }
    public function getCarrierList($name)
    {
        $CI=& get_instance();
        $CI->load->model('admin_model');
        $showcarrier = $CI->admin_model->getcarrier($name);
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
            return $showcar;
    }
    public function getConsignments($title,$source,$destination,$details)
    {

        
        $consigndata="<div class='list-group'>
                        <div class='list-group-item'>
                            <div class='row'>
                                <div class='col-md-9'>
                                    <div class='row'>
                                        <div class='col-md-12'>
                                            <div class='cfont heading'>$title</div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-12'>
                                            <div class='cfont content'>$source - $destination</div>
                                        </div>
                                    </div>
                                </div>
                            <div class='col-md-3'>
                                <a class='btn btn-default btn-sm pull-right' style='padding:30px;' href='".$details."'> Details </a>
                            </div>  
                        </div>
                    </div>"; 
        return $consigndata;
    }
    public function getConsignmentsWithBids($title,$source,$destination,$amount,$details)
    {
        $consigndata="<div class='list-group'>
                        <div class='list-group-item'>
                            <div class='row'>
                                <div class='col-md-9'>
                                <div class='row'>
                                    <div class='col-md-9'>
                                    <div class='row'>
                                        <div class='col-md-12'>
                                            <div class='cfont heading'>$title</div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-12'>
                                            <div class='cfont content'>$source - $destination</div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class='col-md-3'>
                                        <div class='heading cfont'>Rupees $amount/-</div>
                                    </div>
                                </div>
                                </div>
                            <div class='col-md-3'>
                                <a class='btn btn-default btn-sm pull-right' style='padding:30px;' href='".$details."'> Details </a>
                            </div>  
                        </div>
                    </div>"; 
        return $consigndata;
    }
    public function getBids($id,$amount)
    {
        $showdata="<ul class='list-group'>
                    <div class='list-group-item' style='margin:10px;'>
                        <div class='row' >
                            <div class='col-md-9'>
                                <div class='heading cfont'>Rupees $amount/-</div>
                            </div>
                            <div class='col-md-3' >
                                <a type='button' class='btn btn-default btn-sm pull-right' id='view' data-id='$id' style='padding:10px;'> View </a>
                            </div>  
                    </div>";
        return $showdata;
    }
}

/* End of file tqship.php */