<?php
  class C_buku extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->model('M_buku');
    }

//function tampil
    function index(){
     $data['buku']=$this->M_buku->tampil_data();
     $this->load->view('main',$data);
    }

    function coba(){
      $this->load->view('main2');
    }

    function form(){
      $this->load->view('form');
    }

    function asset(){
      $this->load->view('main-asset');
     }

//function input
    function i(){
      $this->load->view('input');
    }

    function input(){
      $judul = $this->input->post('judul');
      $tebal = $this->input->post('tebal');
      $penerbit = $this->input->post('penerbit');

      $data_buku = array(
      'judul'=>$judul,
      'tebal'=>$tebal,
      'penerbit'=>$penerbit
      );

      $this->M_buku->tambah_data($data_buku);
      redirect('C_buku');
    }


//funciton edit
    function e($kode){
      $data_kode = array('id'=>$kode);
      $data['data_buku']=$this->M_buku->cari_data($data_kode);
      $this->load->view('edit',$data);
     }

    function edit(){
      $judul = $this->input->post('judul');
      $tebal = $this->input->post('tebal');
      $penerbit = $this->input->post('penerbit');
      $id = $this->input->post('id');
      $data_kode = array('id'=>$id);

      $data_buku = array(
           'judul'=>$judul,
           'tebal'=>$tebal,
           'penerbit'=>$penerbit
           );

      $this->M_buku->edit_data($data_kode,$data_buku);
      redirect('C_buku');
    }

//funciton hapus
    function hapus($kode){
        $data_kode = array('id'=>$kode);
        $this->M_buku->hapus_data($data_kode);
        redirect('C_buku');
    }

  }
?>
