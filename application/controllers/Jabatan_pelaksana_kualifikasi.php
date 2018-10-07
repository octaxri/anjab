<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jabatan_pelaksana_kualifikasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Jabatan_pelaksana_kualifikasi_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('jabatan_pelaksana_kualifikasi/jabatan_pelaksana_kualifikasi_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Jabatan_pelaksana_kualifikasi_model->json();
    }

    public function read($id) 
    {
        $row = $this->Jabatan_pelaksana_kualifikasi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_jabatan' => $row->id_jabatan,
		'id_jenjang' => $row->id_jenjang,
		'id_pendidikan' => $row->id_pendidikan,
	    );
            $this->load->view('jabatan_pelaksana_kualifikasi/jabatan_pelaksana_kualifikasi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_pelaksana_kualifikasi'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jabatan_pelaksana_kualifikasi/create_action'),
	    'id' => set_value('id'),
	    'id_jabatan' => set_value('id_jabatan'),
	    'id_jenjang' => set_value('id_jenjang'),
	    'id_pendidikan' => set_value('id_pendidikan'),
	);
        $this->load->view('jabatan_pelaksana_kualifikasi/jabatan_pelaksana_kualifikasi_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_jabatan' => $this->input->post('id_jabatan',TRUE),
		'id_jenjang' => $this->input->post('id_jenjang',TRUE),
		'id_pendidikan' => $this->input->post('id_pendidikan',TRUE),
	    );

            $this->Jabatan_pelaksana_kualifikasi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jabatan_pelaksana_kualifikasi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jabatan_pelaksana_kualifikasi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jabatan_pelaksana_kualifikasi/update_action'),
		'id' => set_value('id', $row->id),
		'id_jabatan' => set_value('id_jabatan', $row->id_jabatan),
		'id_jenjang' => set_value('id_jenjang', $row->id_jenjang),
		'id_pendidikan' => set_value('id_pendidikan', $row->id_pendidikan),
	    );
            $this->load->view('jabatan_pelaksana_kualifikasi/jabatan_pelaksana_kualifikasi_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_pelaksana_kualifikasi'));
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
		'id_jenjang' => $this->input->post('id_jenjang',TRUE),
		'id_pendidikan' => $this->input->post('id_pendidikan',TRUE),
	    );

            $this->Jabatan_pelaksana_kualifikasi_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jabatan_pelaksana_kualifikasi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jabatan_pelaksana_kualifikasi_model->get_by_id($id);

        if ($row) {
            $this->Jabatan_pelaksana_kualifikasi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jabatan_pelaksana_kualifikasi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_pelaksana_kualifikasi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_jabatan', 'id jabatan', 'trim|required');
	$this->form_validation->set_rules('id_jenjang', 'id jenjang', 'trim|required');
	$this->form_validation->set_rules('id_pendidikan', 'id pendidikan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jabatan_pelaksana_kualifikasi.php */
/* Location: ./application/controllers/Jabatan_pelaksana_kualifikasi.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
