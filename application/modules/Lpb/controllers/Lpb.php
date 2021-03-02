<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lpb extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    }

    public function input()
    {
        $data['title'] = 'LPB';

        $this->template->load('template', 'v_lpbInput', $data);
    }
}
