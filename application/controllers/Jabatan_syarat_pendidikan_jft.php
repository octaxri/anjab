<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jabatan_syarat_pendidikan_jft extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Jabatan_syarat_pendidikan_jft_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('jabatan_syarat_pendidikan_jft/jabatan_syarat_pendidikan_jft_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Jabatan_syarat_pendidikan_jft_model->json();
    }

    public function read($id) 
    {
        $row = $this->Jabatan_syarat_pendidikan_jft_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_jabatan' => $row->id_jabatan,
		'jpendidikan_id' => $row->jpendidikan_id,
		'bidang_id' => $row->bidang_id,
	    );
            $this->load->view('jabatan_syarat_pendidikan_jft/jabatan_syarat_pendidikan_jft_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_syarat_pendidikan_jft'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jabatan_syarat_pendidikan_jft/create_action'),
	    'id' => set_value('id'),
	    'id_jabatan' => set_value('id_jabatan'),
	    'jpendidikan_id' => set_value('jpendidikan_id'),
	    'bidang_id' => set_value('bidang_id'),
	);
        $this->load->view('jabatan_syarat_pendidikan_jft/jabatan_syarat_pendidikan_jft_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_jabatan' => $this->input->post('id_jabatan',TRUE),
		'jpendidikan_id' => $this->input->post('jpendidikan_id',TRUE),
		'bidang_id' => $this->input->post('bidang_id',TRUE),
	    );

            $this->Jabatan_syarat_pendidikan_jft_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jabatan_syarat_pendidikan_jft'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jabatan_syarat_pendidikan_jft_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jabatan_syarat_pendidikan_jft/update_action'),
		'id' => set_value('id', $row->id),
		'id_jabatan' => set_value('id_jabatan', $row->id_jabatan),
		'jpendidikan_id' => set_value('jpendidikan_id', $row->jpendidikan_id),
		'bidang_id' => set_value('bidang_id', $row->bidang_id),
	    );
            $this->load->view('jabatan_syarat_pendidikan_jft/jabatan_syarat_pendidikan_jft_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_syarat_pendidikan_jft'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_jabatan' => $this->input->post('id_jabatan',TRUE),
		'jpendidikan_id' => $this->input->post('jpendidikan_id',TRUE),
		'bidang_id' => $this->input->post('bidang_id',TRUE),
	    );

            $this->Jabatan_syarat_pendidikan_jft_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jabatan_syarat_pendidikan_jft'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jabatan_syarat_pendidikan_jft_model->get_by_id($id);

        if ($row) {
            $this->Jabatan_syarat_pendidikan_jft_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jabatan_syarat_pendidikan_jft'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_syarat_pendidikan_jft'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_jabatan', 'id jabatan', 'trim|required');
	$this->form_validation->set_rules('jpendidikan_id', 'jpendidikan id', 'trim|required');
	$this->form_validation->set_rules('bidang_id', 'bidang id', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jabatan_syarat_pendidikan_jft.php */
/* Location: ./application/controllers/Jabatan_syarat_pendidikan_jft.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
