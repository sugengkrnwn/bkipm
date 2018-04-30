<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Laporanv2 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_laporan_lemburv2_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/laporanv2/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/laporanv2/index/';
            $config['first_url'] = base_url() . 'index.php/laporanv2/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tbl_laporan_lemburv2_model->total_rows($q);
        $laporanv2 = $this->Tbl_laporan_lemburv2_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'laporanv2_data' => $laporanv2,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','laporanv2/tbl_laporan_lembur_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_laporan_lemburv2_model->get_by_id($id);
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
            $this->template->load('template','laporanv2/tbl_laporan_lembur_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporanv2'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('laporanv2/create_action'),
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
        $this->template->load('template','laporanv2/tbl_laporan_lembur_form', $data);
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

            $this->Tbl_laporan_lemburv2_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('laporanv2'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_laporan_lemburv2_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('laporanv2/update_action'),
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
            $this->template->load('template','laporanv2/tbl_laporan_lembur_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporanv2'));
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

            $this->Tbl_laporan_lemburv2_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('laporanv2'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_laporan_lemburv2_model->get_by_id($id);

        if ($row) {
            $this->Tbl_laporan_lemburv2_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('laporanv2'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('laporanv2'));
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

    function pdf()
    {
        $data = array(
            'tbl_laporan_lembur_data' => $this->Tbl_laporan_lemburv2_model->get_all(),
            'start' => 0
        );
        
        ini_set('memory_limit', '32M');
        $html = $this->load->view('laporanv2/tbl_laporan_lembur_pdf', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('tbl_laporan_lembur.pdf', 'D'); 
    }

}

/* End of file Laporanv2.php */
/* Location: ./application/controllers/Laporanv2.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-30 16:26:31 */
/* Sugeng kurniawan */