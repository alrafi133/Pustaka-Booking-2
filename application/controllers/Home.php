<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelBuku');

    }

    // List all your items
    public function index()
    {
        $data = [
            'judul' => "Katalog Buku",
            'buku' => $this->ModelBuku->getBuku()->result(),
        ];

        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            
            $data['user'] = $user['nama'];

            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('buku/daftarbuku', $data);
            $this->load->view('templates/templates-user/modal');
            $this->load->view('templates/templates-user/footer', $data);
            
            
        } else {
            $data['user'] = 'Pengunjung';
            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('buku/daftarbuku', $data);
            $this->load->view('templates/templates-user/modal');
            $this->load->view('templates/templates-user/footer', $data);
            
        }
    }

    public function detailBuku()
    {
        $id = $this->uri->segment(3);
        $buku = $this->ModelBuku->joinKategoriBuku(['buku.id' => $id])->result();

        $data['user'] = "Pengunjung";
        $data['title'] = "Detail Buku";

        foreach ($buku as $fields) {
            $data['judul'] = $fields->judul_buku;
            $data['pengarang'] = $fields->pengarang;
            $data['penerbit'] = $fields->penerbit;
            $data['kategori'] = $fields->kategori;
            $data['tahun'] = $fields->tahun_terbit;
            $data['isbn'] = $fields->isbn;
            $data['gambar'] = $fields->image;
            $data['dipinjam'] = $fields->dipinjam;
            $data['dibooking'] = $fields->dibooking;
            $data['stok'] = $fields->stok;
            $data['id'] = $fields->id;
        }

        $this->load->view('templates/templates-user/header', $data);
        $this->load->view('buku/detail-buku', $data);
        $this->load->view('templates/templates-user/modal');
        $this->load->view('templates/templates-user/footer');      
        
    }

    // Add a new item
    public function add()
    {

    }

    //Update one item
    public function update( $id = NULL )
    {

    }

    //Delete one item
    public function delete( $id = NULL )
    {

    }
}

/* End of file Controllername.php */

