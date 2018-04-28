<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Surat_lembur extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Surat_lembur_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','surat_lembur/tbl_surat_lembur_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Surat_lembur_model->json();
    }

    public function read($id) 
    {
        $row = $this->Surat_lembur_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_sl' => $row->id_sl,
		'nomor' => $row->nomor,
		'nama_pj' => $row->nama_pj,
		'tgl_skpl' => $row->tgl_skpl,
		'seksi' => $row->seksi,
		'lembur_waktu' => $row->lembur_waktu,
		'uraian_lembur' => $row->uraian_lembur,
		'tgl_lembur' => $row->tgl_lembur,
		'nama_pg1' => $row->nama_pg1,
		'nip_pg1' => $row->nip_pg1,
		'jabatan_pg1' => $row->jabatan_pg1,
		'nama_pg2' => $row->nama_pg2,
		'nip_pg2' => $row->nip_pg2,
		'jabatan_pg2' => $row->jabatan_pg2,
		'nama_pg3' => $row->nama_pg3,
		'nip_pg3' => $row->nip_pg3,
		'jabatan_pg3' => $row->jabatan_pg3,
		'nama_pg4' => $row->nama_pg4,
		'nip_pg4' => $row->nip_pg4,
		'jabatan_pg4' => $row->jabatan_pg4,
		'nama_pg5' => $row->nama_pg5,
		'nip_pg5' => $row->nip_pg5,
		'jabatan_pg5' => $row->jabatan_pg5,
		'jam_lembur1' => $row->jam_lembur1,
		'jam_lembur2' => $row->jam_lembur2,
		'bg_mengetahui' => $row->bg_mengetahui,
		'nama_mengetahui' => $row->nama_mengetahui,
	    );
            $this->template->load('template','surat_lembur/tbl_surat_lembur_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_lembur'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('surat_lembur/create_action'),
	    'id_sl' => set_value('id_sl'),
	    'nomor' => set_value('nomor'),
	    'nama_pj' => set_value('nama_pj'),
	    'tgl_skpl' => set_value('tgl_skpl'),
	    'seksi' => set_value('seksi'),
	    'lembur_waktu' => set_value('lembur_waktu'),
	    'uraian_lembur' => set_value('uraian_lembur'),
	    'tgl_lembur' => set_value('tgl_lembur'),
	    'nama_pg1' => set_value('nama_pg1'),
	    'nip_pg1' => set_value('nip_pg1'),
	    'jabatan_pg1' => set_value('jabatan_pg1'),
	    'nama_pg2' => set_value('nama_pg2'),
	    'nip_pg2' => set_value('nip_pg2'),
	    'jabatan_pg2' => set_value('jabatan_pg2'),
	    'nama_pg3' => set_value('nama_pg3'),
	    'nip_pg3' => set_value('nip_pg3'),
	    'jabatan_pg3' => set_value('jabatan_pg3'),
	    'nama_pg4' => set_value('nama_pg4'),
	    'nip_pg4' => set_value('nip_pg4'),
	    'jabatan_pg4' => set_value('jabatan_pg4'),
	    'nama_pg5' => set_value('nama_pg5'),
	    'nip_pg5' => set_value('nip_pg5'),
	    'jabatan_pg5' => set_value('jabatan_pg5'),
	    'jam_lembur1' => set_value('jam_lembur1'),
	    'jam_lembur2' => set_value('jam_lembur2'),
	    'bg_mengetahui' => set_value('bg_mengetahui'),
	    'nama_mengetahui' => set_value('nama_mengetahui'),
	);
        $this->template->load('template','surat_lembur/tbl_surat_lembur_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nomor' => $this->input->post('nomor',TRUE),
		'nama_pj' => $this->input->post('nama_pj',TRUE),
		'tgl_skpl' => $this->input->post('tgl_skpl',TRUE),
		'seksi' => $this->input->post('seksi',TRUE),
		'lembur_waktu' => $this->input->post('lembur_waktu',TRUE),
		'uraian_lembur' => $this->input->post('uraian_lembur',TRUE),
		'tgl_lembur' => $this->input->post('tgl_lembur',TRUE),
		'nama_pg1' => $this->input->post('nama_pg1',TRUE),
		'nip_pg1' => $this->input->post('nip_pg1',TRUE),
		'jabatan_pg1' => $this->input->post('jabatan_pg1',TRUE),
		'nama_pg2' => $this->input->post('nama_pg2',TRUE),
		'nip_pg2' => $this->input->post('nip_pg2',TRUE),
		'jabatan_pg2' => $this->input->post('jabatan_pg2',TRUE),
		'nama_pg3' => $this->input->post('nama_pg3',TRUE),
		'nip_pg3' => $this->input->post('nip_pg3',TRUE),
		'jabatan_pg3' => $this->input->post('jabatan_pg3',TRUE),
		'nama_pg4' => $this->input->post('nama_pg4',TRUE),
		'nip_pg4' => $this->input->post('nip_pg4',TRUE),
		'jabatan_pg4' => $this->input->post('jabatan_pg4',TRUE),
		'nama_pg5' => $this->input->post('nama_pg5',TRUE),
		'nip_pg5' => $this->input->post('nip_pg5',TRUE),
		'jabatan_pg5' => $this->input->post('jabatan_pg5',TRUE),
		'jam_lembur1' => $this->input->post('jam_lembur1',TRUE),
		'jam_lembur2' => $this->input->post('jam_lembur2',TRUE),
		'bg_mengetahui' => $this->input->post('bg_mengetahui',TRUE),
		'nama_mengetahui' => $this->input->post('nama_mengetahui',TRUE),
	    );

            $this->Surat_lembur_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('surat_lembur'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Surat_lembur_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('surat_lembur/update_action'),
		'id_sl' => set_value('id_sl', $row->id_sl),
		'nomor' => set_value('nomor', $row->nomor),
		'nama_pj' => set_value('nama_pj', $row->nama_pj),
		'tgl_skpl' => set_value('tgl_skpl', $row->tgl_skpl),
		'seksi' => set_value('seksi', $row->seksi),
		'lembur_waktu' => set_value('lembur_waktu', $row->lembur_waktu),
		'uraian_lembur' => set_value('uraian_lembur', $row->uraian_lembur),
		'tgl_lembur' => set_value('tgl_lembur', $row->tgl_lembur),
		'nama_pg1' => set_value('nama_pg1', $row->nama_pg1),
		'nip_pg1' => set_value('nip_pg1', $row->nip_pg1),
		'jabatan_pg1' => set_value('jabatan_pg1', $row->jabatan_pg1),
		'nama_pg2' => set_value('nama_pg2', $row->nama_pg2),
		'nip_pg2' => set_value('nip_pg2', $row->nip_pg2),
		'jabatan_pg2' => set_value('jabatan_pg2', $row->jabatan_pg2),
		'nama_pg3' => set_value('nama_pg3', $row->nama_pg3),
		'nip_pg3' => set_value('nip_pg3', $row->nip_pg3),
		'jabatan_pg3' => set_value('jabatan_pg3', $row->jabatan_pg3),
		'nama_pg4' => set_value('nama_pg4', $row->nama_pg4),
		'nip_pg4' => set_value('nip_pg4', $row->nip_pg4),
		'jabatan_pg4' => set_value('jabatan_pg4', $row->jabatan_pg4),
		'nama_pg5' => set_value('nama_pg5', $row->nama_pg5),
		'nip_pg5' => set_value('nip_pg5', $row->nip_pg5),
		'jabatan_pg5' => set_value('jabatan_pg5', $row->jabatan_pg5),
		'jam_lembur1' => set_value('jam_lembur1', $row->jam_lembur1),
		'jam_lembur2' => set_value('jam_lembur2', $row->jam_lembur2),
		'bg_mengetahui' => set_value('bg_mengetahui', $row->bg_mengetahui),
		'nama_mengetahui' => set_value('nama_mengetahui', $row->nama_mengetahui),
	    );
            $this->template->load('template','surat_lembur/tbl_surat_lembur_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_lembur'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_sl', TRUE));
        } else {
            $data = array(
		'nomor' => $this->input->post('nomor',TRUE),
		'nama_pj' => $this->input->post('nama_pj',TRUE),
		'tgl_skpl' => $this->input->post('tgl_skpl',TRUE),
		'seksi' => $this->input->post('seksi',TRUE),
		'lembur_waktu' => $this->input->post('lembur_waktu',TRUE),
		'uraian_lembur' => $this->input->post('uraian_lembur',TRUE),
		'tgl_lembur' => $this->input->post('tgl_lembur',TRUE),
		'nama_pg1' => $this->input->post('nama_pg1',TRUE),
		'nip_pg1' => $this->input->post('nip_pg1',TRUE),
		'jabatan_pg1' => $this->input->post('jabatan_pg1',TRUE),
		'nama_pg2' => $this->input->post('nama_pg2',TRUE),
		'nip_pg2' => $this->input->post('nip_pg2',TRUE),
		'jabatan_pg2' => $this->input->post('jabatan_pg2',TRUE),
		'nama_pg3' => $this->input->post('nama_pg3',TRUE),
		'nip_pg3' => $this->input->post('nip_pg3',TRUE),
		'jabatan_pg3' => $this->input->post('jabatan_pg3',TRUE),
		'nama_pg4' => $this->input->post('nama_pg4',TRUE),
		'nip_pg4' => $this->input->post('nip_pg4',TRUE),
		'jabatan_pg4' => $this->input->post('jabatan_pg4',TRUE),
		'nama_pg5' => $this->input->post('nama_pg5',TRUE),
		'nip_pg5' => $this->input->post('nip_pg5',TRUE),
		'jabatan_pg5' => $this->input->post('jabatan_pg5',TRUE),
		'jam_lembur1' => $this->input->post('jam_lembur1',TRUE),
		'jam_lembur2' => $this->input->post('jam_lembur2',TRUE),
		'bg_mengetahui' => $this->input->post('bg_mengetahui',TRUE),
		'nama_mengetahui' => $this->input->post('nama_mengetahui',TRUE),
	    );

            $this->Surat_lembur_model->update($this->input->post('id_sl', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('surat_lembur'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Surat_lembur_model->get_by_id($id);

        if ($row) {
            $this->Surat_lembur_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('surat_lembur'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_lembur'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nomor', 'nomor', 'trim|required');
	$this->form_validation->set_rules('nama_pj', 'nama pj', 'trim|required');
	$this->form_validation->set_rules('tgl_skpl', 'tgl skpl', 'trim|required');
	$this->form_validation->set_rules('seksi', 'seksi', 'trim|required');
	$this->form_validation->set_rules('lembur_waktu', 'lembur waktu', 'trim|required');
	$this->form_validation->set_rules('uraian_lembur', 'uraian lembur', 'trim|required');
	$this->form_validation->set_rules('tgl_lembur', 'tgl lembur', 'trim|required');
	$this->form_validation->set_rules('nama_pg1', 'nama pg1', 'trim|required');
	$this->form_validation->set_rules('nip_pg1', 'nip pg1', 'trim|required');
	$this->form_validation->set_rules('jabatan_pg1', 'jabatan pg1', 'trim|required');
	$this->form_validation->set_rules('nama_pg2', 'nama pg2', 'trim|required');
	$this->form_validation->set_rules('nip_pg2', 'nip pg2', 'trim|required');
	$this->form_validation->set_rules('jabatan_pg2', 'jabatan pg2', 'trim|required');
	$this->form_validation->set_rules('nama_pg3', 'nama pg3', 'trim');
	$this->form_validation->set_rules('nip_pg3', 'nip pg3', 'trim');
	$this->form_validation->set_rules('jabatan_pg3', 'jabatan pg3', 'trim');
	$this->form_validation->set_rules('nama_pg4', 'nama pg4', 'trim');
	$this->form_validation->set_rules('nip_pg4', 'nip pg4', 'trim');
	$this->form_validation->set_rules('jabatan_pg4', 'jabatan pg4', 'trim');
	$this->form_validation->set_rules('nama_pg5', 'nama pg5', 'trim');
	$this->form_validation->set_rules('nip_pg5', 'nip pg5', 'trim');
	$this->form_validation->set_rules('jabatan_pg5', 'jabatan pg5', 'trim');
	$this->form_validation->set_rules('jam_lembur1', 'jam lembur1', 'trim|required');
	$this->form_validation->set_rules('jam_lembur2', 'jam lembur2', 'trim|required');
	$this->form_validation->set_rules('bg_mengetahui', 'bg mengetahui', 'trim|required');
	$this->form_validation->set_rules('nama_mengetahui', 'nama mengetahui', 'trim|required');

	$this->form_validation->set_rules('id_sl', 'id_sl', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_surat_lembur.xls";
        $judul = "tbl_surat_lembur";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nomor");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Pj");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Skpl");
	xlsWriteLabel($tablehead, $kolomhead++, "Seksi");
	xlsWriteLabel($tablehead, $kolomhead++, "Lembur Waktu");
	xlsWriteLabel($tablehead, $kolomhead++, "Uraian Lembur");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Lembur");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Pg1");
	xlsWriteLabel($tablehead, $kolomhead++, "Nip Pg1");
	xlsWriteLabel($tablehead, $kolomhead++, "Jabatan Pg1");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Pg2");
	xlsWriteLabel($tablehead, $kolomhead++, "Nip Pg2");
	xlsWriteLabel($tablehead, $kolomhead++, "Jabatan Pg2");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Pg3");
	xlsWriteLabel($tablehead, $kolomhead++, "Nip Pg3");
	xlsWriteLabel($tablehead, $kolomhead++, "Jabatan Pg3");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Pg4");
	xlsWriteLabel($tablehead, $kolomhead++, "Nip Pg4");
	xlsWriteLabel($tablehead, $kolomhead++, "Jabatan Pg4");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Pg5");
	xlsWriteLabel($tablehead, $kolomhead++, "Nip Pg5");
	xlsWriteLabel($tablehead, $kolomhead++, "Jabatan Pg5");
	xlsWriteLabel($tablehead, $kolomhead++, "Jam Lembur1");
	xlsWriteLabel($tablehead, $kolomhead++, "Jam Lembur2");
	xlsWriteLabel($tablehead, $kolomhead++, "Bg Mengetahui");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Mengetahui");

	foreach ($this->Surat_lembur_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nomor);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_pj);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_skpl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->seksi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lembur_waktu);
	    xlsWriteLabel($tablebody, $kolombody++, $data->uraian_lembur);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_lembur);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_pg1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nip_pg1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jabatan_pg1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_pg2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nip_pg2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jabatan_pg2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_pg3);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nip_pg3);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jabatan_pg3);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_pg4);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nip_pg4);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jabatan_pg4);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_pg5);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nip_pg5);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jabatan_pg5);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jam_lembur1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jam_lembur2);
	    xlsWriteLabel($tablebody, $kolombody++, $data->bg_mengetahui);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_mengetahui);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }


   public function pdf($id)
    {
       $id            = $this->uri->segment(3);
       $data['suratlembur'] = $this->db->get_where('tbl_surat_lembur', array('id_sl' => $id))->row_array(); 
        ini_set('memory_limit', '32M');
        $html = $this->load->view('surat_lembur/tbl_surat_lembur_pdf', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('tbl_surat_lembur.pdf','I'); 
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

/* End of file Surat_lembur.php */
/* Location: ./application/controllers/Surat_lembur.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-24 17:00:07 */
/* Sugeng kurniawan */