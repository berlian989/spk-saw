<?php

class m_tempatwisata extends CI_model
{
    public function tampil_data()
    {
        return $this->db->get('tempatwisata');
    }
    public function tampildata_peritem($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function input_data($data)
    {
        $this->db->insert('tempatwisata', $data);
    }
    public function maxrating($daerah)
    {
        $this->db->select_max('rating');
        $this->db->from('tempatwisata');
        $this->db->where('daerah', $daerah);
        return $this->db->get();
    }
    public function maxrating2()
    {
        $this->db->select_max('rating');
        $this->db->from('tempatwisata');
        return $this->db->get();
    }

    
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function tukar_hadiah($where, $table)
    {
        $this->db->where($where);
        $this->db->update($table);
    }
}