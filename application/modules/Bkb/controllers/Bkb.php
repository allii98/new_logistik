<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bkb extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Bukti Keluar Barang'
        ];

        $this->template->load('template', 'v_indexbkb', $data);
    }

    public function input()
    {
        $data = [
            'title' => 'Bukti Keluar Barang'
        ];

        $this->template->load('template', 'v_inputbkb', $data);
    }
}
