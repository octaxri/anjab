<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pma__column_info_model extends CI_Model
{

    public $table = 'pma__column_info';
    public $id = 'id';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,db_name,table_name,column_name,comment,mimetype,transformation,transformation_options,input_transformation,input_transformation_options');
        $this->datatables->from('pma__column_info');
        //add this line for join
        //$this->datatables->join('table2', 'pma__column_info.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('pma__column_info/update/$1'),'<i class="fa fa-pencil"></i>','class="btn btn-warning btn-xs"' )." ".anchor(site_url('pma__column_info/delete/$1'),'<i class="fa fa-trash"></i>','class="btn btn-danger btn-xs" onclick="javasciprt: return confirm(\'Apakah Anda Yakin Menghapus Data Ini ?\')"'), 'id');
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
	$this->db->or_like('db_name', $q);
	$this->db->or_like('table_name', $q);
	$this->db->or_like('column_name', $q);
	$this->db->or_like('comment', $q);
	$this->db->or_like('mimetype', $q);
	$this->db->or_like('transformation', $q);
	$this->db->or_like('transformation_options', $q);
	$this->db->or_like('input_transformation', $q);
	$this->db->or_like('input_transformation_options', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('db_name', $q);
	$this->db->or_like('table_name', $q);
	$this->db->or_like('column_name', $q);
	$this->db->or_like('comment', $q);
	$this->db->or_like('mimetype', $q);
	$this->db->or_like('transformation', $q);
	$this->db->or_like('transformation_options', $q);
	$this->db->or_like('input_transformation', $q);
	$this->db->or_like('input_transformation_options', $q);
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

/* End of file Pma__column_info.php */
/* Location: ./application/controllers/Pma__column_info.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/