<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

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
		
		$this->load->view('welcome_message');
		echo "test new file";
	}
	public function myfunction(){ 
		$this->load->database();
		$this->load->model('news_m');
  		echo $this->news_m->get_data();
		$data['testtest'] = 'ข้อความนี้ส่งมาจาก controller';
		$this->load->view('news_myfunction',$data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */