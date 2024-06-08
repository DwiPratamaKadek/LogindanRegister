<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class c_auth extends CI_Controller {

    public function index()
    {
     $this->load->view('login');
     
    }
    public function register()
    {
        $this->load->view('regis');
        
    }
    
}

/* End of file Controllername.php */


?>