<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set('MAX_EXECUTION_TIME', -1);
ini_set('mssql.connect_timeout',0);
ini_set('mssql.timeout',0);
set_time_limit(0);  
ini_set('memory_limit', -1);

//client_buffer_max_kb_size = '50240'
//sqlsrv.ClientBufferMaxKBSize = 50240

class Fresh_auto extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("Auto_model_", "auto");
    }

	public function index_test(){
		echo 'testing';
    }
	
}
