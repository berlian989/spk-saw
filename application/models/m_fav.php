<?php

class m_fav extends CI_model
{
    public function tampil_data($id)
    {
        $this->db->select('*');
        $this->db->from('favlist a');
        $this->db->join('tempatwisata b', 'b.id_tempat = a.id_tempat');
        $this->db->order_by('b.id_tempat', 'asc');
        $this->db->where('a.user_id', $id);
        return $this->db->get();
    }
    public function tampil_id_user($id)
    {
        $this->db->distinct('id_user');
        $this->db->from('favlist a');
        $this->db->join('tempatwisata b', 'b.id_tempat = a.id_tempat');
        $this->db->where('a.user_id', $id);
        return $this->db->get();
    }

    public function hapus_data($uid, $idt)
    {
        $this->db->where('id_tempat', $idt);
        $this->db->where('user_id', $uid);
        $this->db->delete('favlist');
    }
}