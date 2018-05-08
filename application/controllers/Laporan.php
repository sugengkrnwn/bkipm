<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_laporan_lembur_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','laporan/tbl_laporan_lembur_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_laporan_lembur_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_laporan_lembur_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama_1' => $row->nama_1,
		'nama_2' => $row->nama_2,
		'hari' => $row->hari,
		'tanggal' => $row->tanggal,
		'tempat' => $row->tempat,
		'jam_awal' => $row->jam_awal,
		'jam_akhir' => $row->jam_akhir,
		'uraian' => $row->uraian,
	    );
            $this->template->load('template','laporan/tbl_laporan_lembur_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('laporan/create_action'),
	    'id' => set_value('id'),
	    'nama_1' => set_value('nama_1'),
	    'nama_2' => set_value('nama_2'),
	    'hari' => set_value('hari'),
	    'tanggal' => set_value('tanggal'),
	    'tempat' => set_value('tempat'),
	    'jam_awal' => set_value('jam_awal'),
	    'jam_akhir' => set_value('jam_akhir'),
	    'uraian' => set_value('uraian'),
	);
        $this->template->load('template','laporan/tbl_laporan_lembur_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_1' => $this->input->post('nama_1',TRUE),
		'nama_2' => $this->input->post('nama_2',TRUE),
		'hari' => $this->input->post('hari',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'tempat' => $this->input->post('tempat',TRUE),
		'jam_awal' => $this->input->post('jam_awal',TRUE),
		'jam_akhir' => $this->input->post('jam_akhir',TRUE),
		'uraian' => $this->input->post('uraian',TRUE),
	    );

            $this->Tbl_laporan_lembur_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('laporan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_laporan_lembur_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('laporan/update_action'),
		'id' => set_value('id', $row->id),
		'nama_1' => set_value('nama_1', $row->nama_1),
		'nama_2' => set_value('nama_2', $row->nama_2),
		'hari' => set_value('hari', $row->hari),
		'tanggal' => set_value('tanggal', $row->tanggal),
		'tempat' => set_value('tempat', $row->tempat),
		'jam_awal' => set_value('jam_awal', $row->jam_awal),
		'jam_akhir' => set_value('jam_akhir', $row->jam_akhir),
		'uraian' => set_value('uraian', $row->uraian),
	    );
            $this->template->load('template','laporan/tbl_laporan_lembur_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama_1' => $this->input->post('nama_1',TRUE),
		'nama_2' => $this->input->post('nama_2',TRUE),
		'hari' => $this->input->post('hari',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'tempat' => $this->input->post('tempat',TRUE),
		'jam_awal' => $this->input->post('jam_awal',TRUE),
		'jam_akhir' => $this->input->post('jam_akhir',TRUE),
		'uraian' => $this->input->post('uraian',TRUE),
	    );

            $this->Tbl_laporan_lembur_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('laporan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_laporan_lembur_model->get_by_id($id);

        if ($row) {
            $this->Tbl_laporan_lembur_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('laporan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_1', 'nama 1', 'trim|required');
	$this->form_validation->set_rules('nama_2', 'nama 2', 'trim|required');
	$this->form_validation->set_rules('hari', 'hari', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('tempat', 'tempat', 'trim|required');
	$this->form_validation->set_rules('jam_awal', 'jam awal', 'trim|required');
	$this->form_validation->set_rules('jam_akhir', 'jam akhir', 'trim|required');
	$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_laporan_lembur.xls";
        $judul = "tbl_laporan_lembur";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama 1");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama 2");
	xlsWriteLabel($tablehead, $kolomhead++, "Hari");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");
	xlsWriteLabel($tablehead, $kolomhead++, "Tempat");
	xlsWriteLabel($tablehead, $kolomhead++, "Jam Awal");
	xlsWriteLabel($tablehead, $kolomhead++, "Jam Akhir");
	xlsWriteLabel($tablehead, $kolomhead++, "Uraian");

	foreach ($this->Tbl_laporan_lembur_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->hari);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tempat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jam_awal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jam_akhir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->uraian);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    // function pdf()
    // {
    //     $data = array(
    //         'tbl_laporan_lembur_data' => $this->Tbl_laporan_lembur_model->get_all(),
    //         'start' => 0
    //     );
        
    //     ini_set('memory_limit', '32M');
    //     $html = $this->load->view('laporan/tbl_laporan_lembur_pdf', $data, true);
    //     $this->load->library('pdf');
    //     $pdf = $this->pdf->load();
    //     $pdf->WriteHTML($html);
    //     $pdf->Output('tbl_laporan_lembur.pdf', 'I'); 
    // }
    function pdf($id)
    {
       $id            = $this->uri->segment(3);
       $data['laporanlembur'] = $this->db->get_where('tbl_laporan_lembur', array('id' => $id))->row_array(); 
        ini_set('memory_limit', '32M');
        $html = $this->load->view('laporan/tbl_laporan_lembur_pdf', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('tbl_laporan_lembur.pdf','I'); 

    }
    function pdf_back()
    {
        $data = array(
            'surat_lembur_data' => $this->Surat_lembur_model->get_all(),
            'start' => 0
        );
        
        ini_set('memory_limit', '32M');
        $html = $this->load->view('surat_lembur/cetak_surat_lembur', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('tbl_surat_lembur.pdf','I'); 
    }

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-25 05:20:22 */
/* Sugeng kurniawan */