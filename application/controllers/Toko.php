<?php 
class Toko extends CI_Controller
{

    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('header', $data);
        $this->load->view('view-form-toko');
        $this->load->view('footer', $data);
    }

    public function cetak()
    {
        $nama = $this->input->post('nama');
        $nohp = $this->input->post('nohp');
        $merk = $this->input->post('merk');
        $size = $this->input->post('size');
        if ($merk == "Nike") {
            $harga = "375000";
        } else if ($merk == "Adidas") {
            $harga = "300000";
        } else if ($merk == "Kickers") {
            $harga = "250000";
        } else if ($merk == "Eiger") {
            $harga = "275000";
        } else if ($merk == "Bucherri") {
            $harga = "400000";
        } else {
            $harga = 0;
        }

        $this->input->post(floatval('harga'));


        $data = [
            'nama' => $nama,
            'nohp' => $nohp,
            'merk' => $merk,
            'size' => $size,
            'harga' => $harga
        ];

        $this->load->view('header', $data);
        $this->load->view('view-data-toko', $data);
        $this->load->view('footer', $data);
    }
}
?>