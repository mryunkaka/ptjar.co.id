<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{
    // Notes : 
    // INI CONTROLLER HASIL PEKERJAAN FIRMAN PAK //
    // ISINYA FUNCTION UNTUK MELOAD HALAMAN" //


    // ====== VIEW CMS ADMIN ======== //
    public function site_management()
    {
        $this->load->view('template/frontend/front_admin/header');
        $this->load->view('template/frontend/front_admin/sidebar');
        $this->load->view('frontend/admin/home');
    }

    // ====== VIEW USER ======= //
    public function home()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/home/index');
        $this->load->view('frontend/template/footer');
    }
    // Perusahaan Kami
    public function profil_perusahaan()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/perusahaan_kami/profil_perusahaan/profil_perusahaan');
        $this->load->view('frontend/template/footer');
    }
    public function dewan_komisaris()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/perusahaan_kami/profil_management/dewan_komisaris');
        $this->load->view('frontend/template/footer');
    }
    public function direksi()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/perusahaan_kami/profil_management/direksi');
        $this->load->view('frontend/template/footer');
    }
    public function komite_audit()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/perusahaan_kami/tata_kelola/komite_audit');
        $this->load->view('frontend/template/footer');
    }
    public function sekertaris_perusahaan()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/perusahaan_kami/tata_kelola/sekertaris_perusahaan');
        $this->load->view('frontend/template/footer');
    }
    public function tugas_tanggungjawab_dewan_komisaris()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/perusahaan_kami/tugas_tanggung_jawab/tugas_ttg_dewan_komisaris');
        $this->load->view('frontend/template/footer');
    }
    public function tugas_tanggungjawab_direksi()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/perusahaan_kami/tugas_tanggung_jawab/tugas_ttg_direksi');
        $this->load->view('frontend/template/footer');
    }

    public function area_kerja()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/perusahaan_kami/area_kerja/area_kerja');
        $this->load->view('frontend/template/footer');
    }

    public function struktur_organisasi()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/perusahaan_kami/informasi_perusahaan/struktur_organisasi');
        $this->load->view('frontend/template/footer');
    }

    public function struktur_group()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/perusahaan_kami/informasi_perusahaan/struktur_group');
        $this->load->view('frontend/template/footer');
    }
    public function pemegang_saham()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/perusahaan_kami/informasi_perusahaan/pemegang_saham');
        $this->load->view('frontend/template/footer');
    }


    // Keberlanjutan
    public function proses_kerja_perusahaan()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/keberlanjutan/proses_kerja/proses_kerja');
        $this->load->view('frontend/template/footer');
    }

    public function pencapaian_perusahaan()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/keberlanjutan/pencapaian/pencapaian_perusahaan');
        $this->load->view('frontend/template/footer');
    }
    public function target_produksi()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/keberlanjutan/target/target_produksi');
        $this->load->view('frontend/template/footer');
    }

    // Berita
    public function news()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/media/berita/berita');
        $this->load->view('frontend/template/footer');
    }

    public function detail_berita_1()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/media/berita/detail_berita_1');
        $this->load->view('frontend/template/footer');
    }
    public function detail_berita_2()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/media/berita/detail_berita_2');
        $this->load->view('frontend/template/footer');
    }

    public function detail_berita_3()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/media/berita/detail_berita_3');
        $this->load->view('frontend/template/footer');
    }
    public function detail_berita_4()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/media/berita/detail_berita_4');
        $this->load->view('frontend/template/footer');
    }


    // CSR
    public function kegiatan_sosial()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/csr/kegiatan_sosial/kegiatan_sosial');
        $this->load->view('frontend/template/footer');
    }
    public function kegiatan_k3()
    {
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/user/k3/k3');
        $this->load->view('frontend/template/footer');
    }
}
