<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_model');
        $this->load->helper('my_helper');
        $this->load->library('upload');
        if (
            $this->session->userdata('logged_in') != true &&
            $this->session->userdata('role') !== 'keuangan'
        ) {
            redirect(base_url() . 'auth');
        }
    }

    public function index()
    {
        $this->load->view('keuangan/index');
    }

    public function pembayaran()
    {
        $data['siswa'] = $this->m_model->get_data('siswa')->result();
        $data['pembayaran'] = $this->m_model->get_data('pembayaran')->result();
        $this->load->view('keuangan/pembayaran', $data);
    }

    public function tambah_pembayaran()
    {
        $data['siswa'] = $this->m_model->get_data('siswa')->result();
        $this->load->view('keuangan/tambah_pembayaran', $data);
    }

    public function aksi_tambah_pembayaran()
    {
        if ($data) {
            $data = [
                'id_siswa' => $this->input->post('nama'),
                'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
                'total_pembayaran' => $this->input->post('total_pembayaran'),
            ];

            $this->m_model->tambah_data('pembayaran', $data);
            redirect(base_url('keuangan/pembayaran'));
        } else {
            $data = [
                'id_siswa' => $this->input->post('nama'),
                'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
                'total_pembayaran' => $this->input->post('total_pembayaran'),
            ];

            $this->m_model->tambah_data('pembayaran', $data);
            redirect(base_url('keuangan/pembayaran'));
        }
    }

    public function hapus_pembayaran($id)
    {
        $this->m_model->delete('pembayaran', 'id', $id);
        redirect(base_url('keuangan/pembayaran'));
    }

    public function ubah_pembayaran($id)
    {
        $data['pembayaran'] = $this->m_model
            ->get_by_id('pembayaran', 'id', $id)
            ->result();
        $data['siswa'] = $this->m_model->get_data('siswa')->result();
        $this->load->view('keuangan/ubah_pembayaran', $data);
    }

    public function aksi_ubah_pembayaran()
    {
        $data = [
            'id_siswa' => $this->input->post('nama'),
            'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
            'total_pembayaran' => $this->input->post('total_pembayaran'),
        ];
        $eksekusi = $this->m_model->ubah_data('pembayaran', $data, [
            'id' => $this->input->post('id'),
        ]);
        if ($eksekusi) {
            $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('keuangan/pembayaran'));
        } else {
            $this->session->set_flashdata('error', 'gagal...');
            redirect(
                base_url(
                    'keuangan/pembayaran/ubah_pembayaran/' .
                        $this->input->post('id')
                )
            );
        }
    }
}
?>