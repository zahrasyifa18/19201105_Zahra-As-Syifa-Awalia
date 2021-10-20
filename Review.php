<?php
defined ('BASEPATH') or exit('No direct script access allowed');

class Review extends CI_Controller
{
    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Review_model');
    }
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama Pembeli', 'required', [
            'required' => 'Nama Pembeli wajib di isi'
        ]);
        $this->form_validation->set_rules('nohp', 'Nomor HP', 'required', [
            'required' => 'Nomor HP wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
        $data['merk'] = ['Nike', 'Adidas', 'Kickers', 'Eiger', 'Bucherri'];
        $this->load->view('v_input', $data);
    }   else {
        $data = [
            'nama' => $this->input->post('nama'),
            'nohp' => $this->input->post('nohp'),
            'merk' => $this->input->post('merk'),
            'ukuran' => $this->input->post('ukuran'),
            'harga' => $this->Review_model->proses($this->input->post('merk'))
        ];
       
        $this->load->view('v_output', $data);
    }
}
}