<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Po extends CI_Controller
{

    var $title = 'Permohonan Order';

    public function index()
    {
        $data = [
            'title' => $this->title,
        ];
        $this->template->load('template', 'v_dataPo', $data);
    }

    public function input()
    {
        $data = [
            'title' => $this->title,
        ];
        $this->template->load('template', 'v_inputPo', $data);
    }
}

/* End of file Po.php */
