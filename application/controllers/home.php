<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function index()
    {
        $this->load->library('form_validation');
        if (!$this->session->userdata('nama')) {
            $data['nama'] = '0';
        } else {
            $data['nama'] = '1';
            $data['login'] = $this->db->get_where('user', ['nama'=>
        $this->session->userdata('nama')])->row_array();
        }
       
        $data['title'] = 'Tugas Akhir Rekomendasi';
        $data['userid']=$this->session->userdata('user_id');
        $data['tempatwisata']= $this->m_tempatwisata->tampil_data()->result();
        $data['wisatafav'] = $this->m_fav->tampil_data($this->session->userdata('user_id'))->result();
        $data['useriddb'] = $this->m_fav->tampil_id_user($this->session->userdata('user_id'))->result();
        $data['tempatwisata1']= $this->m_tempatwisata->tampil_data()->row_array();
        
        $this->load->view('layouts/header', $data);
        $this->load->view('tempatwisata', $data);
        $this->load->view('layouts/footer');
    }

    public function Rekomendasi()
    {
        $this->load->library('form_validation');
        if (!$this->session->userdata('nama')) {
            $data['nama'] = '0';
        } else {
            $data['nama'] = '1';
            $data['login'] = $this->db->get_where('user', ['nama'=>
        $this->session->userdata('nama')])->row_array();
        }
       
        $data['title'] = 'Rekomendasi';
        $data['userid']=$this->session->userdata('user_id');
        $data['tempatwisata']= $this->m_tempatwisata->tampil_data()->result();
        $data['wisatafav'] = $this->m_fav->tampil_data($this->session->userdata('user_id'))->result();
        $data['useriddb'] = $this->m_fav->tampil_id_user($this->session->userdata('user_id'))->result();
        $data['tempatwisata1']= $this->m_tempatwisata->tampil_data()->row_array();
        
        $this->load->view('layouts/header', $data);
        $this->load->view('rekomendasi', $data);
        $this->load->view('layouts/footer');
    }

    public function submitrekomendasi()
    {
        $this->load->library('form_validation');
        if (!$this->session->userdata('nama')) {
            $data['nama'] = '0';
        } else {
            $data['nama'] = '1';
            $data['login'] = $this->db->get_where('user', ['nama'=>
        $this->session->userdata('nama')])->row_array();
        }
        $data['title'] = 'Detailpage';
        $data['tempatwisata']= $this->m_tempatwisata->tampil_data()->result();
        $data['daerah']=$this->input->post('daerah', true);
        $data['ratingmax'] = $this->m_tempatwisata->maxrating($data['daerah'])->row_array();
        $data['ratingmax2'] = $this->m_tempatwisata->maxrating2()->row_array();
        $data['$p']=$this->input->post('harga');
        switch ($data['$p']) {
            case 'Gratis':
                $data['price']='100';
                $data['pricen']='Gratis';
                break;
            case 'Murah':
                $data['price']='75';
                $data['pricen']='Murah';
                 break;
            case 'Sedang':
                $data['price']='50';
                $data['pricen']='Sedang';
                break;
            case 'Mahal':
                $data['price']='25';
                $data['pricen']='Mahal';
                break;
            case 'Sangat Mahal':
                $data['price']='0';
                $data['pricen']='Sangat Mahal';
                break;
        }
        $data['$f']=$this->input->post('fasilitas');
        switch ($data['$f']) {
            case 'Istimewa':
                $data['fasilitas']='100';
                $data['fasilitasn']='Istimewa';
                break;
            case 'Baik':
                $data['fasilitas']='75';
                $data['fasilitasn']='Baik';
                 break;
            case 'Sedang':
                $data['fasilitas']='50';
                $data['fasilitasn']='Sedang';
                break;
            case 'Tidak Baik':
                $data['fasilitas']='25';
                $data['fasilitasn']='Tidak Baik';
                break;
            case 'Sangat Tidak Menyenangkan':
                $data['fasilitas']='0';
                $data['fasilitasn']='Sangat Tidak Menyenangkan';
                break;
        }
        $data['rating']=$this->input->post('rating', true);
        $data['c1']=$data['price']/($data['price']+$data['fasilitas']+ $data['rating']);
        $data['c2']=$data['fasilitas']/($data['price']+$data['fasilitas']+ $data['rating']);
        $data['c3']= $data['rating']/($data['price']+$data['fasilitas']+ $data['rating']);

        $data['semuatempat'] = $this->m_tempatwisata->tampil_data()->result();
    
        $this->load->view('layouts/header', $data);
        $this->load->view('hasilrekomen', $data);
        $this->load->view('layouts/footer');
    }


    public function jawa()
    {
        $this->load->library('form_validation');
        if (!$this->session->userdata('nama')) {
            $data['nama'] = '0';
        } else {
            $data['nama'] = '1';
            $data['login'] = $this->db->get_where('user', ['nama'=>
        $this->session->userdata('nama')])->row_array();
        }
       
        $data['title'] = 'Tugas Akhir Rekomendasi';
        $data['userid']=$this->session->userdata('user_id');
        $data['tempatwisata']= $this->m_tempatwisata->tampil_data()->result();
        $data['wisatafav'] = $this->m_fav->tampil_data($this->session->userdata('user_id'))->result();
        $data['useriddb'] = $this->m_fav->tampil_id_user($this->session->userdata('user_id'))->result();
        $data['tempatwisata1']= $this->m_tempatwisata->tampil_data()->row_array();
        
        $this->load->view('layouts/header', $data);
        $this->load->view('jawa', $data);
        $this->load->view('layouts/footer');
    }

    public function nusatenggara()
    {
        $this->load->library('form_validation');
        if (!$this->session->userdata('nama')) {
            $data['nama'] = '0';
        } else {
            $data['nama'] = '1';
            $data['login'] = $this->db->get_where('user', ['nama'=>
        $this->session->userdata('nama')])->row_array();
        }
       
        $data['title'] = 'Tugas Akhir Rekomendasi';
        $data['userid']=$this->session->userdata('user_id');
        $data['tempatwisata']= $this->m_tempatwisata->tampil_data()->result();
        $data['wisatafav'] = $this->m_fav->tampil_data($this->session->userdata('user_id'))->result();
        $data['useriddb'] = $this->m_fav->tampil_id_user($this->session->userdata('user_id'))->result();
        $data['tempatwisata1']= $this->m_tempatwisata->tampil_data()->row_array();
        
        $this->load->view('layouts/header', $data);
        $this->load->view('nusatenggara', $data);
        $this->load->view('layouts/footer');
    }

    public function sulawesi()
    {
        $this->load->library('form_validation');
        if (!$this->session->userdata('nama')) {
            $data['nama'] = '0';
        } else {
            $data['nama'] = '1';
            $data['login'] = $this->db->get_where('user', ['nama'=>
        $this->session->userdata('nama')])->row_array();
        }
       
        $data['title'] = 'Tugas Akhir Rekomendasi';
        $data['userid']=$this->session->userdata('user_id');
        $data['tempatwisata']= $this->m_tempatwisata->tampil_data()->result();
        $data['wisatafav'] = $this->m_fav->tampil_data($this->session->userdata('user_id'))->result();
        $data['useriddb'] = $this->m_fav->tampil_id_user($this->session->userdata('user_id'))->result();
        $data['tempatwisata1']= $this->m_tempatwisata->tampil_data()->row_array();
        
        $this->load->view('layouts/header', $data);
        $this->load->view('sulawesi', $data);
        $this->load->view('layouts/footer');
    }

    public function sumatra()
    {
        $this->load->library('form_validation');
        if (!$this->session->userdata('nama')) {
            $data['nama'] = '0';
        } else {
            $data['nama'] = '1';
            $data['login'] = $this->db->get_where('user', ['nama'=>
        $this->session->userdata('nama')])->row_array();
        }
       
        $data['title'] = 'Tugas Akhir Rekomendasi';
        $data['userid']=$this->session->userdata('user_id');
        $data['tempatwisata']= $this->m_tempatwisata->tampil_data()->result();
        $data['wisatafav'] = $this->m_fav->tampil_data($this->session->userdata('user_id'))->result();
        $data['useriddb'] = $this->m_fav->tampil_id_user($this->session->userdata('user_id'))->result();
        $data['tempatwisata1']= $this->m_tempatwisata->tampil_data()->row_array();
        
        $this->load->view('layouts/header', $data);
        $this->load->view('sumatra', $data);
        $this->load->view('layouts/footer');
    }


    public function detailpage($id)
    {
        $this->load->library('form_validation');
        if (!$this->session->userdata('nama')) {
            $data['nama'] = '0';
        } else {
            $data['nama'] = '1';
            $data['login'] = $this->db->get_where('user', ['nama'=>
        $this->session->userdata('nama')])->row_array();
        }
        $data['title'] = 'Detailpage';
        $where = array('id_tempat' => $id);
        $data['detailtempat'] = $this->m_tempatwisata->tampildata_peritem($where, '
        tempatwisata')->result();
        $data['detailtempat1'] = $this->m_tempatwisata->tampildata_peritem($where, '
        tempatwisata')->row_array();
        $data['tempatwisata']= $this->m_tempatwisata->tampil_data()->result();
        $daerah=$data['detailtempat1']['daerah'];
        $data['ratingmax'] = $this->m_tempatwisata->maxrating($daerah)->row_array();
        $price=$data['detailtempat1']['harga'];
        switch ($price) {
            case 'Gratis':
                $data['price']='100';
                break;
            case 'Murah':
                $data['price']='75';
                 break;
            case 'Sedang':
                $data['price']='50';
                break;
            case 'Mahal':
                $data['price']='25';
                break;
            case 'Sangat Mahal':
                $data['price']='0';
                break;
        }

        $fasilitas=$data['detailtempat1']['fasilitas'];
        switch ($fasilitas) {
            case 'Istimewa':
                $data['fasilitas']='100';
                break;
            case 'Baik':
                $data['fasilitas']='75';
                 break;
            case 'Sedang':
                $data['fasilitas']='50';
                break;
            case 'Tidak Baik':
                $data['fasilitas']='25';
                break;
            case 'Sangat Tidak Menyenangkan':
                $data['fasilitas']='0';
                break;
        }

        $data['rat']=$data['detailtempat1']['rating'];
        $data['id']=$data['detailtempat1']['id_tempat'];
        $data['daerah']=$data['detailtempat1']['daerah'];
        
        $data['c1']=$data['price']/($data['price']+$data['fasilitas']+ $data['rat']);
        $data['c2']=$data['fasilitas']/($data['price']+$data['fasilitas']+ $data['rat']);
        $data['c3']= $data['rat']/($data['price']+$data['fasilitas']+ $data['rat']);

        $data['semuatempat'] = $this->m_tempatwisata->tampil_data()->result();
        


        $this->load->view('layouts/header', $data);
        $this->load->view('detail', $data);
        $this->load->view('layouts/footer');
    }


    public function favorit()
    {
        $this->load->library('form_validation');
        if (!$this->session->userdata('nama')) {
            $data['nama'] = '0';
        } else {
            $data['nama'] = '1';
            $data['login'] = $this->db->get_where('user', ['nama'=>
        $this->session->userdata('nama')])->row_array();
        }
        $data['wisatafav'] = $this->m_fav->tampil_data($this->session->userdata('user_id'))->result();
        $data['title'] = 'Favorit Page';
        $this->load->view('layouts/header', $data);
        $this->load->view('favorit', $data);
        $this->load->view('layouts/footer');
    }
    public function favklik($id)
    {
        $user_id=$this->session->userdata('user_id');
        $data = [
                'user_id'=>$user_id,
                'id_tempat'=>$id
            ];
        $this->db->insert('favlist', $data);
        redirect('http://localhost/tarewis1/home/');
    }
    public function unfavklik($id)
    {
        $user_id=$this->session->userdata('user_id');
        $this->m_fav->hapus_data($user_id, $id);
        redirect('http://localhost/tarewis1/home/');
    }
}