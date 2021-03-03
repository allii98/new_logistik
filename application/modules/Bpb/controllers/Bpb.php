<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bpb extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Bon Permintaan Barang'
        ];
        $this->template->load('template', 'v_indexBpb', $data);
    }

    public function input()
    {
        $data = [
            'title' => 'Bon Permintaan Barang'
        ];
        $this->template->load('template', 'v_inputbpb', $data);
    }
}
