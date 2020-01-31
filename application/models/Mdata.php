<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Mdata extends CI_Model
{
    function show_pasien()
    {
        $hasil = $this->db->query("SELECT * FROM tblpasien");
        return $hasil;
    }
    function simpan_pasien($no_pasien, $nama, $alamat, $jenis_kelamin, $umur, $keluhan, $no_hp)
    {
        $hasil = $this->db->query("INSERT INTO tblpasien (no_pasien, nama, alamat, jenis_kelamin, umur, keluhan, no_hp) VALUES ('$no_pasien','$nama','$alamat','$jenis_kelamin','$umur','$keluhan','$no_hp')");
        return $hasil;
    }
    function edit_pasien($no_pasien, $nama, $alamat, $jenis_kelamin, $umur, $keluhan, $no_hp)
    {
        $hasil = $this->db->query("UPDATE tblpasien SET nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',umur='$umur',keluhan='$keluhan',no_hp='$no_hp' WHERE no_pasien='$no_pasien'");
        return $hasil;
    }
}

/* End of file Mdata.php */
