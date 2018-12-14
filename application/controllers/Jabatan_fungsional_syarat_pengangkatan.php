<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jabatan_fungsional_syarat_pengangkatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Jabatan_fungsional_syarat_pengangkatan_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('jabatan_fungsional_syarat_pengangkatan/jabatan_fungsional_syarat_pengangkatan_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Jabatan_fungsional_syarat_pengangkatan_model->json();
    }

    public function filter() {
        //header('Content-Type: application/json');
        $data=$this->input->get_post('id');
        $jenis=$this->input->get_post('jenis');
        if ($jenis=='jabatan_fungsional_tambahan_keterangan') {
            
        echo json_encode($this->db->query("Select * from jabatan_fungsional_syarat_pengangkatan, jabatan_fungsional_tambahan_keterangan WHERE jabatan_fungsional_syarat_pengangkatan.id_jabatan_fungsional_tambahan_keterangan=jabatan_fungsional_tambahan_keterangan.id_jabatan_fungsional_tambahan_keterangan and jabatan_fungsional_tambahan_keterangan.id_jabatan_fungsional_tambahan_keterangan=".$data)->result());
        }else{

        echo json_encode($this->db->query("Select * from jabatan_fungsional_syarat_pengangkatan, jabatan_fungsional_tambahan_keterangan WHERE jabatan_fungsional_syarat_pengangkatan.id_jabatan_fungsional_tambahan_keterangan=jabatan_fungsional_tambahan_keterangan.id_jabatan_fungsional_tambahan_keterangan and id=".$data)->result());
        }
    }

    public function read($id) 
    {
        $row = $this->Jabatan_fungsional_syarat_pengangkatan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_jabatan_fungsional_tambahan_keterangan' => $row->id_jabatan_fungsional_tambahan_keterangan,
		'syarat' => $row->syarat,
		'kode_syarat' => $row->kode_syarat,
	    );
            $this->load->view('jabatan_fungsional_syarat_pengangkatan/jabatan_fungsional_syarat_pengangkatan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_fungsional_syarat_pengangkatan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jabatan_fungsional_syarat_pengangkatan/create_action'),
	    'id' => set_value('id'),
	    'id_jabatan_fungsional_tambahan_keterangan' => set_value('id_jabatan_fungsional_tambahan_keterangan'),
	    'syarat' => set_value('syarat'),
	    'kode_syarat' => set_value('kode_syarat'),
	);
        $this->load->view('jabatan_fungsional_syarat_pengangkatan/jabatan_fungsional_syarat_pengangkatan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_jabatan_fungsional_tambahan_keterangan' => $this->input->post('id_jabatan_fungsional_tambahan_keterangan',TRUE),
		'syarat' => $this->input->post('syarat',TRUE),
		'kode_syarat' => $this->input->post('kode_syarat',TRUE),
	    );

            $this->Jabatan_fungsional_syarat_pengangkatan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jabatan_fungsional_syarat_pengangkatan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jabatan_fungsional_syarat_pengangkatan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jabatan_fungsional_syarat_pengangkatan/update_action'),
		'id' => set_value('id', $row->id),
		'id_jabatan_fungsional_tambahan_keterangan' => set_value('id_jabatan_fungsional_tambahan_keterangan', $row->id_jabatan_fungsional_tambahan_keterangan),
		'syarat' => set_value('syarat', $row->syarat),
		'kode_syarat' => set_value('kode_syarat', $row->kode_syarat),
	    );
            $this->load->view('jabatan_fungsional_syarat_pengangkatan/jabatan_fungsional_syarat_pengangkatan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_fungsional_syarat_pengangkatan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_jabatan_fungsional_tambahan_keterangan' => $this->input->post('id_jabatan_fungsional_tambahan_keterangan',TRUE),
		'syarat' => $this->input->post('syarat',TRUE),
		'kode_syarat' => $this->input->post('kode_syarat',TRUE),
	    );

            $this->Jabatan_fungsional_syarat_pengangkatan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jabatan_fungsional_syarat_pengangkatan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jabatan_fungsional_syarat_pengangkatan_model->get_by_id($id);

        if ($row) {
            $this->Jabatan_fungsional_syarat_pengangkatan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jabatan_fungsional_syarat_pengangkatan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_fungsional_syarat_pengangkatan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_jabatan_fungsional_tambahan_keterangan', 'id jabatan fungsional tambahan keterangan', 'trim|required');
	$this->form_validation->set_rules('syarat', 'syarat', 'trim|required');
	$this->form_validation->set_rules('kode_syarat', 'kode syarat', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jabatan_fungsional_syarat_pengangkatan.php */
/* Location: ./application/controllers/Jabatan_fungsional_syarat_pengangkatan.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
