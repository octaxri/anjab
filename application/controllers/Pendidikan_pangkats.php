<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pendidikan_pangkats extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Pendidikan_pangkats_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('pendidikan_pangkats/pendidikan_pangkats_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pendidikan_pangkats_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pendidikan_pangkats_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'jpendidikan_id' => $row->jpendidikan_id,
		'golongan_id' => $row->golongan_id,
		'ruang_id' => $row->ruang_id,
		'pangkat_id' => $row->pangkat_id,
	    );
            $this->load->view('pendidikan_pangkats/pendidikan_pangkats_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendidikan_pangkats'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pendidikan_pangkats/create_action'),
	    'id' => set_value('id'),
	    'jpendidikan_id' => set_value('jpendidikan_id'),
	    'golongan_id' => set_value('golongan_id'),
	    'ruang_id' => set_value('ruang_id'),
	    'pangkat_id' => set_value('pangkat_id'),
	);
        $this->load->view('pendidikan_pangkats/pendidikan_pangkats_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'jpendidikan_id' => $this->input->post('jpendidikan_id',TRUE),
		'golongan_id' => $this->input->post('golongan_id',TRUE),
		'ruang_id' => $this->input->post('ruang_id',TRUE),
		'pangkat_id' => $this->input->post('pangkat_id',TRUE),
	    );

            $this->Pendidikan_pangkats_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pendidikan_pangkats'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pendidikan_pangkats_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pendidikan_pangkats/update_action'),
		'id' => set_value('id', $row->id),
		'jpendidikan_id' => set_value('jpendidikan_id', $row->jpendidikan_id),
		'golongan_id' => set_value('golongan_id', $row->golongan_id),
		'ruang_id' => set_value('ruang_id', $row->ruang_id),
		'pangkat_id' => set_value('pangkat_id', $row->pangkat_id),
	    );
            $this->load->view('pendidikan_pangkats/pendidikan_pangkats_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendidikan_pangkats'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'jpendidikan_id' => $this->input->post('jpendidikan_id',TRUE),
		'golongan_id' => $this->input->post('golongan_id',TRUE),
		'ruang_id' => $this->input->post('ruang_id',TRUE),
		'pangkat_id' => $this->input->post('pangkat_id',TRUE),
	    );

            $this->Pendidikan_pangkats_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pendidikan_pangkats'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pendidikan_pangkats_model->get_by_id($id);

        if ($row) {
            $this->Pendidikan_pangkats_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pendidikan_pangkats'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendidikan_pangkats'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('jpendidikan_id', 'jpendidikan id', 'trim|required');
	$this->form_validation->set_rules('golongan_id', 'golongan id', 'trim|required');
	$this->form_validation->set_rules('ruang_id', 'ruang id', 'trim|required');
	$this->form_validation->set_rules('pangkat_id', 'pangkat id', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pendidikan_pangkats.php */
/* Location: ./application/controllers/Pendidikan_pangkats.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
