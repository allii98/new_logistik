<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Po extends CI_Controller {

    
    public function index()
    {
        $data = [
            'tittle'=> "Permohonan Order"
        ];
        $this->template->load('template', 'v_dataPo', $data);
    }

    public function input()
    {
        $data = [
            'tittle'=> "Permohonan Order"
        ];
        $this->template->load('template', 'v_inputPo',$data);
    }

}

/* End of file Po.php */
