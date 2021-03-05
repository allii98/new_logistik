<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Retur extends CI_Controller
{
    public function input()
    {
        $data = [
            'title' => 'Retur BKB',
        ];
        $this->template->load('template', 'v_inputretur', $data);
    }
}
