<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Xmlfeed extends CI_Controller {


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
				
	$this->load->model('Feed');
	$data['query']=$this->Feed->get_feed();
	$data['title']="News";
	$data['banner']="Todays Top Stories";
	//$this->load->view('xmlfeed_view',$data);
	$this->load->view('customer/xmlfeed_view2',$data);	
	
	}




	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */