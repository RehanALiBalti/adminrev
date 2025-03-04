<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function addnewform(){
  
        $this->load->view('admin/addnewform');
    }
	public function edituser($no)
	{
		$d['q']=$this->db->where('l_login_id',$no)->get('tshirtlogin')->row_array();
		$d['no']=$no;
		$this->load->view('admin/editform',$d);


	}
	public function deletestory($id){
		$this->db->where('id',$id);
		$this->db->delete('stories');
		redirect(base_url().'admin/');	
	}
	public function updateacount($id){
		$data['firstName']=$this->input->post('firstName');
		$data['lastName']=$this->input->post('lastName');
		$data['companyName']=$this->input->post('companyName');
		$data['state']=$this->input->post('state');
		$data['city']=$this->input->post('city');
		$data['zipcode']=$this->input->post('zipcode');
		$data['phone']=$this->input->post('phone');
		$data['website']=$this->input->post('website');
		$data['source']=$this->input->post('source');
		if($this->input->post('password')){
			$data['password']=$this->encryption->encrypt($this->input->post('password'));;
		  }
		$data['address']=$this->input->post('address');
		$this->db->where('l_login_id',$id);
		$this->db->update('tshirtlogin',$data);
		redirect(base_url().'admin/edituser/'.$id);
	}
	public function activestory($id){
		$j['status']=1;
		$this->db->where('id',$id)->update('stories',$j);
		$this->session->set_flashdata('success', 'Data has been Added Sucessfully.');
		redirect(base_url().'admin/');
	}
	//suspendstory
		public function suspendstory($id){
		$j['status']=0;
		$this->db->where('id',$id)->update('stories',$j);
		$this->session->set_flashdata('success', 'Data has been Added Sucessfully.');
		redirect(base_url().'admin/');
	}
		public function setBanner($id){
	   $j['banner']=0;
	    $this->db->update('stories',$j);
		$j['banner']=1;
		$this->db->where('id',$id)->update('stories',$j);
		$this->session->set_flashdata('success', 'Data has been Added Sucessfully.');
		redirect(base_url().'admin/');
	}
	public function setfeature($type,$id){
	    $j['featured']=0;
	    $this->db->where('story_type',$type)->update('stories',$j);
	    
		$jl['featured']=1;
		$this->db->where('id',$id)->update('stories',$jl);
		$this->session->set_flashdata('success', 'Data has been Added Sucessfully.');
		redirect(base_url().'admin/');
	}
	public function index()
	{
		$d['adminlist']=$this->db->get('stories')->result_array();

		$this->load->view('admin/home',$d);


	}
	function addstorydata(){
	    $jana=array();
	    $data=$this->input->post();
	    $data['user_name']="Mr.admin";
	       if (isset($_FILES['files'])) {
        $uploadedFiles = $_FILES['files'];
        $totalFiles = count($uploadedFiles['name']);

        for ($i = 0; $i < $totalFiles; $i++) {
            if ($uploadedFiles['error'][$i] === UPLOAD_ERR_OK) {
                $tmpName = $uploadedFiles['tmp_name'][$i];
                $fileName = basename($uploadedFiles['name'][$i]);
                $uploadPath = 'uploads/' . $fileName; // Your upload directory

                if (move_uploaded_file($tmpName, $uploadPath)) {
                   array_push($jana,base_url().$uploadPath);
                }
            }
        }
	       }
	       if(count($jana)>0){
	           //$x=implode(",",$jana);
	$jana = array_map(function($url) {
    return trim($url, ',');
}, $jana);
	           $data['images']=json_encode($jana,true);

	       }else{
	           $data['images']=json_encode($jana,true);
	       }
	       
$this->db->insert('stories',$data);
	$this->session->set_flashdata('success', 'Data has been Removed Sucessfully.');
		redirect(base_url().'admin/');
	   
	}
	function viewstory($param1){
		$query=$this->db->select('*')->where('id',$param1)->get('stories')
		->row_array();
		$d['adminlist']=$query;
	$this->load->view('admin/bidsdetails',$d);
	
	}
	function order_complete($status,$id){
		$c['checkout_status']=$status;
		$this->db->where('check_out_id',$id)->update('check_out',$c);
		redirect(base_url().'admin/orders');
	}
	function order_removed($id){
		$hmata=$this->db->where('check_out_id',$id)->get('check_out')->row_array();
		$x=explode(",",$hmata['order_id']);

		$this->db->where_in('order_id', $x)->delete('order');
		$this->db->where('check_out_id',$id)->delete('check_out');
		redirect(base_url().'admin/orders');

	}

	function orders(){
		$query=$this->db->select('*')
				->where('check_out.checkout_status<>',3)
->from('tshirtlogin')
->join('check_out','check_out.user_id = tshirtlogin.l_login_id')
->get()->result_array();
		$d['adminlist']=$query;

		$this->load->view('admin/bids',$d);
	}
	//corders
		function corders(){
		$query=$this->db->select('*')
		->where('check_out.checkout_status',3)
->from('tshirtlogin')
->join('check_out','check_out.user_id = tshirtlogin.l_login_id')
->get()->result_array();
		$d['adminlist']=$query;

		$this->load->view('admin/bids',$d);
	}
	public function dform($id){
		$this->db->where('form_id',$id)->delete('form');
		$this->session->set_flashdata('success', 'Data has been Removed Sucessfully.');
		redirect(base_url().'admin/');
	}
	//addoperatordata
	public function addoperatordata(){
		$d= $this->db->where('city',$this->input->post('city'))
		->where('class',$this->input->post('class'))
		->where('school',$this->input->post('school'))
		->get('form')->row_array();
			if(empty($data)){
				$j['city']=$this->input->post('city');
				$j['class']=$this->input->post('class');
				$j['school']=$this->input->post('school');
				$j['code']=rand().time();

				$this->db->insert('form',$j);
			    $this->session->set_flashdata('success', 'Data has been Added Sucessfully.');
				redirect(base_url().'admin/addnewform/');
			}else{
	 //error           
	 $this->session->set_flashdata('error', 'city/school/class already esits.');
	 redirect(base_url().'admin/addnewform/');
	
	
			}
	
	

		}

}