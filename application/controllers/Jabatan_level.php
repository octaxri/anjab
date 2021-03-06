<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jabatan_level extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Jabatan_level_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('jabatan_level/jabatan_level_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Jabatan_level_model->json();
    }

    public function read($id) 
    {
        $row = $this->Jabatan_level_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama_level' => $row->nama_level,
	    );
            $this->load->view('jabatan_level/jabatan_level_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_level'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jabatan_level/create_action'),
	    'id' => set_value('id'),
	    'nama_level' => set_value('nama_level'),
	);
        $this->load->view('jabatan_level/jabatan_level_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_level' => $this->input->post('nama_level',TRUE),
	    );

            $this->Jabatan_level_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jabatan_level'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jabatan_level_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jabatan_level/update_action'),
		'id' => set_value('id', $row->id),
		'nama_level' => set_value('nama_level', $row->nama_level),
	    );
            $this->load->view('jabatan_level/jabatan_level_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_level'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama_level' => $this->input->post('nama_level',TRUE),
	    );

            $this->Jabatan_level_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jabatan_level'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jabatan_level_model->get_by_id($id);

        if ($row) {
            $this->Jabatan_level_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jabatan_level'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_level'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_level', 'nama level', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jabatan_level.php */
/* Location: ./application/controllers/Jabatan_level.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
