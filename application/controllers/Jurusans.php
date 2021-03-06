<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jurusans extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Jurusans_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('jurusans/jurusans_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Jurusans_model->json();
    }

    public function read($id) 
    {
        $row = $this->Jurusans_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama_jurusan' => $row->nama_jurusan,
	    );
            $this->load->view('jurusans/jurusans_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jurusans'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jurusans/create_action'),
	    'id' => set_value('id'),
	    'nama_jurusan' => set_value('nama_jurusan'),
	);
        $this->load->view('jurusans/jurusans_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_jurusan' => $this->input->post('nama_jurusan',TRUE),
	    );

            $this->Jurusans_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jurusans'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jurusans_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jurusans/update_action'),
		'id' => set_value('id', $row->id),
		'nama_jurusan' => set_value('nama_jurusan', $row->nama_jurusan),
	    );
            $this->load->view('jurusans/jurusans_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jurusans'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama_jurusan' => $this->input->post('nama_jurusan',TRUE),
	    );

            $this->Jurusans_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jurusans'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jurusans_model->get_by_id($id);

        if ($row) {
            $this->Jurusans_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jurusans'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jurusans'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_jurusan', 'nama jurusan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jurusans.php */
/* Location: ./application/controllers/Jurusans.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
