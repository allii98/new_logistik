<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posting extends CI_Controller
{

      function auth_hitungstok()
      {
            $value = $this->input->post('pw');
            if ($value == "123456789") {
                  $data = TRUE;
            } else {
                  $data = FALSE;
            }
            echo json_encode($data);
      }

      public function transfer_to_gl()
      {
            $data_lpb = $this->M_posting->get_data_lpb();

            //var untuk save ke header entry
            $i = 1;
            $header_entry["date"] = $i;
            $header_entry["periode"] = $i;
            $header_entry["ref"] = $i;
            $header_entry["totaldr"] = $i;
            $header_entry["totalcr"] = $i;
            $header_entry["periodetxt"] = $i;
            $header_entry["modul"] = $i;
            $header_entry["lokasi"] = $i;
            $header_entry["SBU"] = $i;
            $header_entry["USER"] = $i;

            //var untuk save ke entry
            $entry["date"] = $i;
            $entry["sbu"] = $i;
            $entry["noac"] = $i;
            $entry["desc"] = $i;
            $entry["group"] = $i;
            $entry["type"] = $i;
            $entry["level"] = $i;
            $entry["general"] = $i;
            $entry["dc"] = $i;
            $entry["dr"] = $i;
            $entry["cr"] = $i;
            $entry["periode"] = $i;
            $entry["converse"] = $i;
            $entry["ref"] = $i;
            $entry["noref"] = $i;
            $entry["descac"] = $i;
            $entry["ket"] = $i;
            $entry["begindr"] = $i;
            $entry["begincr"] = $i;
            $entry["kurs"] = $i;
            $entry["kursrate"] = $i;
            $entry["tglkurs"] = $i;
            $entry["periodetxt"] = $i;
            $entry["module"] = $i;
            $entry["lokasi"] = $i;
            $entry["POST"] = $i;
            $entry["tglinput"] = $i;
            $entry["USER"] = $i;
      }
}

/* End of file Posting.php */
