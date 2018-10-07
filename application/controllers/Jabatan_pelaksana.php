<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jabatan_pelaksana extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Jabatan_pelaksana_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('jabatan_pelaksana/jabatan_pelaksana_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Jabatan_pelaksana_model->json();
    }

    public function read($id) 
    {
        $row = $this->Jabatan_pelaksana_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama' => $row->nama,
		'id_kelompok' => $row->id_kelompok,
		'tugas_jabatan' => $row->tugas_jabatan,
		'id_urusan' => $row->id_urusan,
	    );
            $this->load->view('jabatan_pelaksana/jabatan_pelaksana_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_pelaksana'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jabatan_pelaksana/create_action'),
	    'id' => set_value('id'),
	    'nama' => set_value('nama'),
	    'id_kelompok' => set_value('id_kelompok'),
	    'tugas_jabatan' => set_value('tugas_jabatan'),
	    'id_urusan' => set_value('id_urusan'),
	);
        $this->load->view('jabatan_pelaksana/jabatan_pelaksana_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'id_kelompok' => $this->input->post('id_kelompok',TRUE),
		'tugas_jabatan' => $this->input->post('tugas_jabatan',TRUE),
		'id_urusan' => $this->input->post('id_urusan',TRUE),
	    );

            $this->Jabatan_pelaksana_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jabatan_pelaksana'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jabatan_pelaksana_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jabatan_pelaksana/update_action'),
		'id' => set_value('id', $row->id),
		'nama' => set_value('nama', $row->nama),
		'id_kelompok' => set_value('id_kelompok', $row->id_kelompok),
		'tugas_jabatan' => set_value('tugas_jabatan', $row->tugas_jabatan),
		'id_urusan' => set_value('id_urusan', $row->id_urusan),
	    );
            $this->load->view('jabatan_pelaksana/jabatan_pelaksana_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_pelaksana'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'id_kelompok' => $this->input->post('id_kelompok',TRUE),
		'tugas_jabatan' => $this->input->post('tugas_jabatan',TRUE),
		'id_urusan' => $this->input->post('id_urusan',TRUE),
	    );

            $this->Jabatan_pelaksana_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jabatan_pelaksana'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jabatan_pelaksana_model->get_by_id($id);

        if ($row) {
            $this->Jabatan_pelaksana_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jabatan_pelaksana'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_pelaksana'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('id_kelompok', 'id kelompok', 'trim|required');
	$this->form_validation->set_rules('tugas_jabatan', 'tugas jabatan', 'trim|required');
	$this->form_validation->set_rules('id_urusan', 'id urusan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jabatan_pelaksana.php */
/* Location: ./application/controllers/Jabatan_pelaksana.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
