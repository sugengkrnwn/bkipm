<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_laporan_lembur_model extends CI_Model
{

    public $table = 'tbl_laporan_lembur';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,nama_1,nama_2,hari,tanggal,tempat,jam_awal,jam_akhir,uraian');
        $this->datatables->from('tbl_laporan_lembur');
        //add this line for join
        //$this->datatables->join('table2', 'tbl_laporan_lembur.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('laporan/pdf/$1'),'<i class="fa fa-eye" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm'))." 
            ".anchor(site_url('laporan/update/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm'))." 
                ".anchor(site_url('laporan/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('nama_1', $q);
	$this->db->or_like('nama_2', $q);
	$this->db->or_like('hari', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->or_like('tempat', $q);
	$this->db->or_like('jam_awal', $q);
	$this->db->or_like('jam_akhir', $q);
	$this->db->or_like('uraian', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('nama_1', $q);
	$this->db->or_like('nama_2', $q);
	$this->db->or_like('hari', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->or_like('tempat', $q);
	$this->db->or_like('jam_awal', $q);
	$this->db->or_like('jam_akhir', $q);
	$this->db->or_like('uraian', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Tbl_laporan_lembur_model.php */
/* Location: ./application/models/Tbl_laporan_lembur_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-25 05:20:22 */
/* Sugeng kurniawan*/