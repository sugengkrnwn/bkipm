<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Surat_masuk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Surat_masuk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/surat_masuk/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/surat_masuk/index/';
            $config['first_url'] = base_url() . 'index.php/surat_masuk/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Surat_masuk_model->total_rows($q);
        $surat_masuk = $this->Surat_masuk_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $list_file=array();
        $dir = "./assets/fotoku/";

        // buka directory, dan baca isinya
        if (is_dir($dir)){
          if ($dh = opendir($dir)){
            while (($file = readdir($dh)) !== false){
                $list_file[]=$file;
            }
            closedir($dh);
          }
        }

        $data['daftar_file']=$list_file;
        $data = array(
            'surat_masuk_data' => $surat_masuk,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','surat_masuk/tbl_surat_masuk_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Surat_masuk_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_sm' => $row->id_sm,
		'asal_surat' => $row->asal_surat,
		'nomor_surat' => $row->nomor_surat,
		'tanggal_surat' => $row->tanggal_surat,
		'keterangan' => $row->keterangan,
		'file_sm' => $row->file_sm,
	    );
            $this->template->load('template','surat_masuk/tbl_surat_masuk_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_masuk'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('surat_masuk/create_action'),
	    'id_sm' => set_value('id_sm'),
	    'asal_surat' => set_value('asal_surat'),
	    'nomor_surat' => set_value('nomor_surat'),
	    'tanggal_surat' => set_value('tanggal_surat'),
	    'keterangan' => set_value('keterangan'),
	    'file_sm' => set_value('file_sm'),
	);
        $this->template->load('template','surat_masuk/tbl_surat_masuk_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();
        $foto = $this->upload_foto();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'asal_surat' => $this->input->post('asal_surat',TRUE),
		'nomor_surat' => $this->input->post('nomor_surat',TRUE),
		'tanggal_surat' => $this->input->post('tanggal_surat',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
		'file_sm' => $foto['file_name'],
	    );

            $this->Surat_masuk_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('surat_masuk'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Surat_masuk_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('surat_masuk/update_action'),
		'id_sm' => set_value('id_sm', $row->id_sm),
		'asal_surat' => set_value('asal_surat', $row->asal_surat),
		'nomor_surat' => set_value('nomor_surat', $row->nomor_surat),
		'tanggal_surat' => set_value('tanggal_surat', $row->tanggal_surat),
		'keterangan' => set_value('keterangan', $row->keterangan),
		'file_sm' => set_value('file_sm', $row->file_sm),
	    );
            $this->template->load('template','surat_masuk/tbl_surat_masuk_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_masuk'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();
        $foto = $this->upload_foto();
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_sm', TRUE));
        } else {
            $data = array(
		'asal_surat' => $this->input->post('asal_surat',TRUE),
		'nomor_surat' => $this->input->post('nomor_surat',TRUE),
		'tanggal_surat' => $this->input->post('tanggal_surat',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
		'file_sm' => $foto['file_name'],
	    );

        $this->session->set_userdata('file_sm',$foto['file_name']);

            $this->Surat_masuk_model->update($this->input->post('id_sm', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('surat_masuk'));
        }
    }
    
      function upload_foto(){
        $config['upload_path']          = './assets/fotoku';
        $config['allowed_types']        = 'gif|jpg|png|pdf|word';
        //$config['max_size']             = 100;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('file_sm');
        return $this->upload->data();
    }
    
    public function delete($id , $filenya) 
    {
        $dir   = './assets/fotoku'; 
        $row = $this->Surat_masuk_model->get_by_id($id); 
        if(unlink($dir.$filenya)){
        $this->session->set_userdata('status_hapus','<div class="alert alert-success alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            File berhasil dihapus</div>');

        }   
        if ($row) {
            $this->Surat_masuk_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('surat_masuk'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_masuk'));
        }
    }
    public function _rules() 
    {
	// $this->form_validation->set_rules('no_agenda', 'no agenda', 'trim|required');
	$this->form_validation->set_rules('asal_surat', 'asal surat', 'trim|required');
	$this->form_validation->set_rules('nomor_surat', 'nomor surat', 'trim|required');
	$this->form_validation->set_rules('tanggal_surat', 'tanggal surat', 'trim|required');
	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
	// $this->form_validation->set_rules('file_sm', 'file sm', 'trim');

	$this->form_validation->set_rules('id_sm', 'id_sm', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_surat_masuk.xls";
        $judul = "tbl_surat_masuk";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Asal Surat");
	xlsWriteLabel($tablehead, $kolomhead++, "Nomor Surat");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Surat");
	xlsWriteLabel($tablehead, $kolomhead++, "Keterangan");
	xlsWriteLabel($tablehead, $kolomhead++, "File Sm");

	foreach ($this->Surat_masuk_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->asal_surat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nomor_surat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_surat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keterangan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file_sm);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

   
}

/* End of file Surat_masuk.php */
/* Location: ./application/controllers/Surat_masuk.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-01-30 11:50:21 */
/* Sugeng kurniawan */