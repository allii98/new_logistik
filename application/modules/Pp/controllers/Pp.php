<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pp extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Permohonan Pembayaran',
        ];

        $this->template->load('template', 'v_indexpp', $data);
    }

    public function input()
    {
        $data = [
            'title' => 'Permohonan Pembayaran',
        ];

        $this->template->load('template', 'v_inputpp', $data);
    }
}
