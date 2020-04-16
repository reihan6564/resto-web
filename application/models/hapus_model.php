<?php
class hapus_model extends CI_Model
{
    public function hapus_makanan($id)
    {
        $this->db->delete('tb_makanan', ['id_makanan' => $id]);
    }
    public function hapus_minuman($id)
    {
        $this->db->delete('tb_minuman', ['id_minuman' => $id]);
    }
    public function hapus_paket($id)
    {
        $this->db->delete('tb_paket', ['id_paket' => $id]);
    }
}
