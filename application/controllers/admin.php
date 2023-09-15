<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Admin extends CI_Controller { 
 
 function __construct(){ 
  parent::__construct(); 
$this->load->model('m_model'); 
$this->load->helper('my_helper'); 
if ($this->session->userdata('logged_in')!=true) { 
    redirect(base_url().'auth'); 
} 
 } 
 
 public function index() 
 { 
  $this->load->view('admin/index'); 
 } 
 public function siswa() 
 { 
    $data['siswa'] = $this->m_model->get_data('siswa')->result(); 
  $this->load->view('admin/siswa', $data); 
 } 
 public function tambah_siswa() 
 { 
    $data['kelas'] = $this->m_model->get_data('kelas')->result(); 
  $this->load->view('admin/Tambah_siswa', $data); 
 } 
 public function ubah_siswa() 
 { 
    $data['kelas'] = $this->m_model->get_data('kelas')->result(); 
  $this->load->view('admin/ubah_siswa', $data); 
 } 
 public function aksi_Tambah_siswa() 
 { 
    $data = [ 
        'nama_siswa' => $this->input->post('nama'), 
        'nisn' => $this->input->post('nisn'), 
        'gender' => $this->input->post('gender'), 
        'id_kelas' => $this->input->post('kelas'), 
    ]; 
    $this->m_model->tambah_data('siswa', $data); 
    redirect(base_url('admin/siswa')); 
 } 
 public function hapus_siswa($id) 
 { 
    $this->m_model->delete('siswa', 'id_siswa', $id); 
    redirect(base_url('admin/siswa')); 
 } 
  
  
} 
?>