<?php
class M_buku extends CI_Model{


//function input data
  function tambah_data($data_buku){
    $this->db->insert('tb_buku',$data_buku);
  }

//function tampil database
  function tampil_data(){
    $hasil = $this->db->get('tb_buku')->result();
    return $hasil;
  }

//funtion edit database
  function cari_data($data_kode){
    $this->db->where($data_kode);
    $hasil=$this->db->get('tb_buku')->result();
    return $hasil;
   }

  function edit_data($data_kode,$data_buku){
    $this->db->where($data_kode);
    $this->db->update('tb_buku',$data_buku);
  }

//function hapus
  function hapus_data($data_kode){
    $this->db->where($data_kode);
    $this->db->delete('tb_buku');
  }

}
