<?php
class Msite extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('sap',TRUE);
	}

	public function getORDR()
	{
		$this->db->select('*');
		$this->db->from('ORDR');
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
}
?>