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
        $data['title'] = 'Laporan Penerimaan Barang';
        $this->template->load('template', 'v_lpbIndex', $data);
    }

    public function input()
    {
        $data['title'] = 'Laporan Penerimaan Barang';

        $this->template->load('template', 'v_lpbInput', $data);
    }
}
