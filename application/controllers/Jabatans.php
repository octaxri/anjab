<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jabatans extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Jabatans_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('jabatans/jabatans_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Jabatans_model->json();
    }

    public function read($id) 
    {
        $row = $this->Jabatans_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_urusan' => $row->id_urusan,
		'id_jabatan_level' => $row->id_jabatan_level,
		'kode_jabatan' => $row->kode_jabatan,
		'nama_jabatan' => $row->nama_jabatan,
		'jenis' => $row->jenis,
		'tugas_jabatan' => $row->tugas_jabatan,
		'id_rumpun' => $row->id_rumpun,
		'id_jenjang' => $row->id_jenjang,
		'opd_id' => $row->opd_id,
		'status' => $row->status,
		'kode_pengangkatan' => $row->kode_pengangkatan,
	    );
            $this->load->view('jabatans/jabatans_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatans'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jabatans/create_action'),
	    'id' => set_value('id'),
	    'id_urusan' => set_value('id_urusan'),
	    'id_jabatan_level' => set_value('id_jabatan_level'),
	    'kode_jabatan' => set_value('kode_jabatan'),
	    'nama_jabatan' => set_value('nama_jabatan'),
	    'jenis' => set_value('jenis'),
	    'tugas_jabatan' => set_value('tugas_jabatan'),
	    'id_rumpun' => set_value('id_rumpun'),
	    'id_jenjang' => set_value('id_jenjang'),
	    'opd_id' => set_value('opd_id'),
	    'status' => set_value('status'),
	    'kode_pengangkatan' => set_value('kode_pengangkatan'),
	);
        $this->load->view('jabatans/jabatans_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_urusan' => $this->input->post('id_urusan',TRUE),
		'id_jabatan_level' => $this->input->post('id_jabatan_level',TRUE),
		'kode_jabatan' => $this->input->post('kode_jabatan',TRUE),
		'nama_jabatan' => $this->input->post('nama_jabatan',TRUE),
		'jenis' => $this->input->post('jenis',TRUE),
		'tugas_jabatan' => $this->input->post('tugas_jabatan',TRUE),
		'id_rumpun' => $this->input->post('id_rumpun',TRUE),
		'id_jenjang' => $this->input->post('id_jenjang',TRUE),
		'opd_id' => $this->input->post('opd_id',TRUE),
		'status' => $this->input->post('status',TRUE),
		'kode_pengangkatan' => $this->input->post('kode_pengangkatan',TRUE),
	    );

            $this->Jabatans_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jabatans'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jabatans_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jabatans/update_action'),
		'id' => set_value('id', $row->id),
		'id_urusan' => set_value('id_urusan', $row->id_urusan),
		'id_jabatan_level' => set_value('id_jabatan_level', $row->id_jabatan_level),
		'kode_jabatan' => set_value('kode_jabatan', $row->kode_jabatan),
		'nama_jabatan' => set_value('nama_jabatan', $row->nama_jabatan),
		'jenis' => set_value('jenis', $row->jenis),
		'tugas_jabatan' => set_value('tugas_jabatan', $row->tugas_jabatan),
		'id_rumpun' => set_value('id_rumpun', $row->id_rumpun),
		'id_jenjang' => set_value('id_jenjang', $row->id_jenjang),
		'opd_id' => set_value('opd_id', $row->opd_id),
		'status' => set_value('status', $row->status),
		'kode_pengangkatan' => set_value('kode_pengangkatan', $row->kode_pengangkatan),
	    );
            $this->load->view('jabatans/jabatans_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatans'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_urusan' => $this->input->post('id_urusan',TRUE),
		'id_jabatan_level' => $this->input->post('id_jabatan_level',TRUE),
		'kode_jabatan' => $this->input->post('kode_jabatan',TRUE),
		'nama_jabatan' => $this->input->post('nama_jabatan',TRUE),
		'jenis' => $this->input->post('jenis',TRUE),
		'tugas_jabatan' => $this->input->post('tugas_jabatan',TRUE),
		'id_rumpun' => $this->input->post('id_rumpun',TRUE),
		'id_jenjang' => $this->input->post('id_jenjang',TRUE),
		'opd_id' => $this->input->post('opd_id',TRUE),
		'status' => $this->input->post('status',TRUE),
		'kode_pengangkatan' => $this->input->post('kode_pengangkatan',TRUE),
	    );

            $this->Jabatans_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jabatans'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jabatans_model->get_by_id($id);

        if ($row) {
            $this->Jabatans_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jabatans'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatans'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_urusan', 'id urusan', 'trim|required');
	$this->form_validation->set_rules('id_jabatan_level', 'id jabatan level', 'trim|required');
	$this->form_validation->set_rules('kode_jabatan', 'kode jabatan', 'trim|required');
	$this->form_validation->set_rules('nama_jabatan', 'nama jabatan', 'trim|required');
	$this->form_validation->set_rules('jenis', 'jenis', 'trim|required');
	$this->form_validation->set_rules('tugas_jabatan', 'tugas jabatan', 'trim|required');
	$this->form_validation->set_rules('id_rumpun', 'id rumpun', 'trim|required');
	$this->form_validation->set_rules('id_jenjang', 'id jenjang', 'trim|required');
	$this->form_validation->set_rules('opd_id', 'opd id', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('kode_pengangkatan', 'kode pengangkatan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jabatans.php */
/* Location: ./application/controllers/Jabatans.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
