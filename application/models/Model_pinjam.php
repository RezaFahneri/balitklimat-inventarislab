<?php
class Model_pinjam extends CI_model
{
	function tampil_data($table)
	{
		// $this->db->select('*');
		// $this->db->join('stok_alat', 'stok_alat.id_barang = pinjam_barang.id_barang');
		// if ($id_barang != null) {
		// 	$this->db->where('id_barang', $id_barang);
		// }
		return $this->db->get($table);
	}

	public function getList()
	{
		//return $query = $this->db->order_by('id_proyek', 'ASC')->get('proyek')->result();
		$this->db->select('*');
		$this->db->from('pinjam_alat');
		$this->db->join('stok_alat', 'stok_alat.idalat = pinjam_alat.idalat');
		return $this->db->get()->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

		
	// }
}
