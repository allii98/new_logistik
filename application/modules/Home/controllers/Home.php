<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data = [
            'tittle'=> "Dashboard"
        ];
        $this->template->load('template', 'dashboard',$data);
    }
    public function tes()
    {
        $data = [
            'tittle'=> "Dashboard"
        ];
        $this->template->load('template', 'v_contohTabel',$data);
    }

}

/* End of file Home.php */
