<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

		
		// Load MongoDB library
		$this->load->library('mongo_db');
		
		//$this->mongo_db->where_gte(¡®age¡¯, 18)->where(array(¡®country¡¯ => ¡®UK¡¯, ¡®can_drink¡¯ => TRUE))->get(¡®people¡¯);
		//»òÕß£º
		//$this->mongo_db->get_where(¡®posts¡¯, array(¡®title¡¯ => ¡®Hello, World!¡¯);
		//»ò£º
		//$this->mongo_db->get(¡®sales¡¯);
		
		$docs = $this->mongo_db->where('age', '33')->get('collection_name_here'); 
		//$results = $this->mongo_db->where_gte(¡®age¡¯, 18)->where(array(¡®country¡¯ => ¡®UK¡¯, ¡®sex¡¯ => ¡®male¡¯))->get(¡®users¡¯);
	
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */