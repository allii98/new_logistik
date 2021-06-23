<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

    public function count_spp()
    {
        $role_user = $this->session->userdata('user');

        $this->db_logistik_pt->select('noreftxt');
        $this->db_logistik_pt->where(['status2' => '0', 'user' => $role_user]);
        $this->db_logistik_pt->from('ppo');
        $count_spp = $this->db_logistik_pt->count_all_results();

        $this->db_logistik_pt->select('noreftxt');
        $this->db_logistik_pt->where(['status2' => '1', 'user' => $role_user]);
        $this->db_logistik_pt->from('ppo');
        $count_spp_approved = $this->db_logistik_pt->count_all_results();

        $this->db_logistik_pt->select('noreftxt');
        $this->db_logistik_pt->from('po');
        $this->db_logistik_pt->where(['user' => $role_user]);
        $count_po = $this->db_logistik_pt->count_all_results();

        $this->db_logistik_pt->select('noreftxt');
        $this->db_logistik_pt->from('stokmasuk');
        $this->db_logistik_pt->where(['user' => $role_user]);
        $count_lpb = $this->db_logistik_pt->count_all_results();

        $this->db_logistik_pt->select('norefbpb');
        $this->db_logistik_pt->from('bpb');
        $this->db_logistik_pt->where(['approval' => '0', 'user' => $role_user]);
        $count_bpb = $this->db_logistik_pt->count_all_results();

        $this->db_logistik_pt->select('norefbpb');
        $this->db_logistik_pt->from('bpb');
        $this->db_logistik_pt->where(['approval' => '1', 'user' => $role_user]);
        $count_bpb_approved = $this->db_logistik_pt->count_all_results();

        $this->db_logistik_pt->select('NO_REF');
        $this->db_logistik_pt->from('stockkeluar');
        $this->db_logistik_pt->where(['user' => $role_user]);
        $count_bkb = $this->db_logistik_pt->count_all_results();

        $this->db_logistik_pt->select('norefbpb');
        $this->db_logistik_pt->from('approval_bpb');
        $this->db_logistik_pt->where(['flag_req_rev_qty' => '1']);
        $count_bkb_rev_qty = $this->db_logistik_pt->count_all_results();

        $this->db_logistik_pt->select('no_pp');
        $this->db_logistik_pt->from('pp');
        $this->db_logistik_pt->where(['user' => $role_user]);
        $count_pp = $this->db_logistik_pt->count_all_results();

        $result = [
            'count_spp' => $count_spp,
            'count_pp' => $count_pp,
            'count_spp_approved' => $count_spp_approved,
            'count_po' => $count_po,
            'count_lpb' => $count_lpb,
            'count_bpb' => $count_bpb,
            'count_bpb_approved' => $count_bpb_approved,
            'count_bkb' => $count_bkb,
            'count_bkb_rev_qty' => $count_bkb_rev_qty
        ];
        return $result;
    }
}

/* End of file M_home.php */
