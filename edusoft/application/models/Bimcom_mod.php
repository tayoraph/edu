<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Bimcom_mod extends CI_Model {



		public function show_dept($dept) {
			$condition = "announced_pu_results.polling_unit_uniqueid =" . "'" . $dept . "'";
			$this->db->select('*');
			$this->db->from('announced_pu_results');
			$this->db->join('polling_unit', 'polling_unit.uniqueid = announced_pu_results.polling_unit_uniqueid', 'left');
			

			$this->db->where($condition);
			//$this->db->limit(1);         // WHEN YOU LIMIT IT TO A NUMBER , you will only get that number of list.
			$query = $this->db->get();

			if ($query->num_rows() >= 0) {
			return $query->result();
			} else {
			return false;
			}
			}







			//  // this  ends selecting by department above





			public function lga($dept) {
			
			$condition = "polling_unit.lga_id =" . "'" . $dept . "'";
			//$this->db->select('*');
			$this->db->select_sum('party_score');
			$this->db->from('announced_pu_results');
			$this->db->join('polling_unit', 'polling_unit.uniqueid = announced_pu_results.polling_unit_uniqueid', 'left');
			

			$this->db->where($condition);
			//$this->db->limit(1);         // WHEN YOU LIMIT IT TO A NUMBER , you will only get that number of list.
			$query = $this->db->get();

			if ($query->num_rows() >= 0) {
			return $query->result();
			} else {
			return false;
			}
			}








}