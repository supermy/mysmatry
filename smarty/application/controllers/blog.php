<?php
class Blog extends CI_Controller {


  public function __construct()
  {
    parent::__construct();
    //$this->load->model('news_model');
  }

//	$db['default']['hostname'] = '(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=192.168.6.5)(PORT=1521))(CONNECT_DATA=(SID=orcl)))';


	public function index()
	{ 
		echo 'Hello World!';
	}
	

	public function comments()
	{
		echo 'Look at this!';
	}
 
}