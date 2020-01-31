<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Rs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdata');
    }

    function index()
    {
        $x['data'] = $this->mdata->show_pasien();
        $this->load->view('home', $x);
    }
    function simpan_pasien()
    {
        $no_pasien = $this->input->post('no_pasien');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $umur = $this->input->post('umur');
        $keluhan = $this->input->post('keluhan');
        $no_hp = $this->input->post('no_hp');
        $this->mdata->simpan_pasien($no_pasien, $nama, $alamat, $jenis_kelamin, $umur, $keluhan, $no_hp);
        redirect('rs');
    }
    function edit_pasien()
    {
        $no_pasien = $this->input->post('no_pasien');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $umur = $this->input->post('umur');
        $keluhan = $this->input->post('keluhan');
        $no_hp = $this->input->post('no_hp');
        $this->mdata->edit_pasien($no_pasien, $nama, $alamat, $jenis_kelamin, $umur, $keluhan, $no_hp);
        redirect('rs');
    }
    function delete($no_pasien)
    {
        $this->db->where('no_pasien', $no_pasien);
        $this->db->delete('tblpasien');
        redirect('rs');
    }
}

/* End of file Rs.php */
