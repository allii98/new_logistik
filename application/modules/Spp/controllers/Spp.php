<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spp extends CI_Controller
{

    public function index()
    {
        $this->template->load('template', 'v_spp');
    }

    public function sppBaru()
    {
        $this->template->load('template', 'v_input_spp');
    }

    public function sppApproval()
    {
        $this->template->load('template', 'v_spp_approval');
    }
}

/* End of file Controllername.php */