<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Migrations_model extends CI_Model
{

    public $table = 'migrations';
    public $id = 'id';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,migration,batch');
        $this->datatables->from('migrations');
        //add this line for join
        //$this->datatables->join('table2', 'migrations.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('migrations/update/$1'),'<i class="fa fa-pencil"></i>','class="btn btn-warning btn-xs"' )." ".anchor(site_url('migrations/delete/$1'),'<i class="fa fa-trash"></i>','class="btn btn-danger btn-xs" onclick="javasciprt: return confirm(\'Apakah Anda Yakin Menghapus Data Ini ?\')"'), 'id');
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
	$this->db->or_like('migration', $q);
	$this->db->or_like('batch', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('migration', $q);
	$this->db->or_like('batch', $q);
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

/* End of file Migrations.php */
/* Location: ./application/controllers/Migrations.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/