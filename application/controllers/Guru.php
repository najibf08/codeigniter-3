<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_model');
        $this->load->helper('my_helper');
        $this->load->library('upload');
        if (
            $this->session->userdata('logged_in') != true ||
            $this->session->userdata('role') !== 'keuangan'
        ) {
            redirect(base_url() . 'auth');
        }
    }

    public function guru()
    {
        $data['guru'] = $this->m_model->get_data('guru')->result();
        $data['kelas'] = $this->m_model->get_data('kelas')->result();
        $this->load->view('guru/guru', $data);
    }

    public function export_guru()
    {
        $data['data_guru'] = $this->m_model->get_data('guru')->result();
        $data['nama'] = 'guru';
        if ($this->uri->segment(3) == 'pdf') {
            $this->load->library('pdf');
            $this->pdf->load_view('guru/export_data_guru', $data);
            $this->pdf->render();
            $this->pdf->stream('data_guru.pdf', ['Attachment' => false]);
        } else {
            $this->load->view('guru/download_data_guru', $data);
        }
    }
}
?>