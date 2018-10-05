<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jabatan_level_opd extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Jabatan_level_opd_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('jabatan_level_opd/jabatan_level_opd_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Jabatan_level_opd_model->json();
    }

    public function read($id) 
    {
        $row = $this->Jabatan_level_opd_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_jabatan_level' => $row->id_jabatan_level,
		'id_jenis_opd' => $row->id_jenis_opd,
		'nama' => $row->nama,
	    );
            $this->load->view('jabatan_level_opd/jabatan_level_opd_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_level_opd'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jabatan_level_opd/create_action'),
	    'id' => set_value('id'),
	    'id_jabatan_level' => set_value('id_jabatan_level'),
	    'id_jenis_opd' => set_value('id_jenis_opd'),
	    'nama' => set_value('nama'),
	);
        $this->load->view('jabatan_level_opd/jabatan_level_opd_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_jabatan_level' => $this->input->post('id_jabatan_level',TRUE),
		'id_jenis_opd' => $this->input->post('id_jenis_opd',TRUE),
		'nama' => $this->input->post('nama',TRUE),
	    );

            $this->Jabatan_level_opd_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jabatan_level_opd'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jabatan_level_opd_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jabatan_level_opd/update_action'),
		'id' => set_value('id', $row->id),
		'id_jabatan_level' => set_value('id_jabatan_level', $row->id_jabatan_level),
		'id_jenis_opd' => set_value('id_jenis_opd', $row->id_jenis_opd),
		'nama' => set_value('nama', $row->nama),
	    );
            $this->load->view('jabatan_level_opd/jabatan_level_opd_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_level_opd'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_jabatan_level' => $this->input->post('id_jabatan_level',TRUE),
		'id_jenis_opd' => $this->input->post('id_jenis_opd',TRUE),
		'nama' => $this->input->post('nama',TRUE),
	    );

            $this->Jabatan_level_opd_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jabatan_level_opd'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jabatan_level_opd_model->get_by_id($id);

        if ($row) {
            $this->Jabatan_level_opd_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jabatan_level_opd'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_level_opd'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_jabatan_level', 'id jabatan level', 'trim|required');
	$this->form_validation->set_rules('id_jenis_opd', 'id jenis opd', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jabatan_level_opd.php */
/* Location: ./application/controllers/Jabatan_level_opd.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/