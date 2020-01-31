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
        // $x['data'] = $this->mbarang->show_pasien();
        $this->load->view('home');
    }
}

/* End of file Rs.php */
