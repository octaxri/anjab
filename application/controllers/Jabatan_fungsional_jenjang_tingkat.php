<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jabatan_fungsional_jenjang_tingkat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Jabatan_fungsional_jenjang_tingkat_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('jabatan_fungsional_jenjang_tingkat/jabatan_fungsional_jenjang_tingkat_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Jabatan_fungsional_jenjang_tingkat_model->json();
    }

    public function read($id) 
    {
        $row = $this->Jabatan_fungsional_jenjang_tingkat_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_jenjang' => $row->id_jenjang,
		'id_tingkat_jabatan' => $row->id_tingkat_jabatan,
		'id_batas_usia' => $row->id_batas_usia,
		'id_tunjangan' => $row->id_tunjangan,
		'id_kategori' => $row->id_kategori,
		'id_jabatan' => $row->id_jabatan,
	    );
            $this->load->view('jabatan_fungsional_jenjang_tingkat/jabatan_fungsional_jenjang_tingkat_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_fungsional_jenjang_tingkat'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jabatan_fungsional_jenjang_tingkat/create_action'),
	    'id' => set_value('id'),
	    'id_jenjang' => set_value('id_jenjang'),
	    'id_tingkat_jabatan' => set_value('id_tingkat_jabatan'),
	    'id_batas_usia' => set_value('id_batas_usia'),
	    'id_tunjangan' => set_value('id_tunjangan'),
	    'id_kategori' => set_value('id_kategori'),
	    'id_jabatan' => set_value('id_jabatan'),
	);
        $this->load->view('jabatan_fungsional_jenjang_tingkat/jabatan_fungsional_jenjang_tingkat_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_jenjang' => $this->input->post('id_jenjang',TRUE),
		'id_tingkat_jabatan' => $this->input->post('id_tingkat_jabatan',TRUE),
		'id_batas_usia' => $this->input->post('id_batas_usia',TRUE),
		'id_tunjangan' => $this->input->post('id_tunjangan',TRUE),
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'id_jabatan' => $this->input->post('id_jabatan',TRUE),
	    );

            $this->Jabatan_fungsional_jenjang_tingkat_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jabatan_fungsional_jenjang_tingkat'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jabatan_fungsional_jenjang_tingkat_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jabatan_fungsional_jenjang_tingkat/update_action'),
		'id' => set_value('id', $row->id),
		'id_jenjang' => set_value('id_jenjang', $row->id_jenjang),
		'id_tingkat_jabatan' => set_value('id_tingkat_jabatan', $row->id_tingkat_jabatan),
		'id_batas_usia' => set_value('id_batas_usia', $row->id_batas_usia),
		'id_tunjangan' => set_value('id_tunjangan', $row->id_tunjangan),
		'id_kategori' => set_value('id_kategori', $row->id_kategori),
		'id_jabatan' => set_value('id_jabatan', $row->id_jabatan),
	    );
            $this->load->view('jabatan_fungsional_jenjang_tingkat/jabatan_fungsional_jenjang_tingkat_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_fungsional_jenjang_tingkat'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_jenjang' => $this->input->post('id_jenjang',TRUE),
		'id_tingkat_jabatan' => $this->input->post('id_tingkat_jabatan',TRUE),
		'id_batas_usia' => $this->input->post('id_batas_usia',TRUE),
		'id_tunjangan' => $this->input->post('id_tunjangan',TRUE),
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'id_jabatan' => $this->input->post('id_jabatan',TRUE),
	    );

            $this->Jabatan_fungsional_jenjang_tingkat_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jabatan_fungsional_jenjang_tingkat'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jabatan_fungsional_jenjang_tingkat_model->get_by_id($id);

        if ($row) {
            $this->Jabatan_fungsional_jenjang_tingkat_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jabatan_fungsional_jenjang_tingkat'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_fungsional_jenjang_tingkat'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_jenjang', 'id jenjang', 'trim|required');
	$this->form_validation->set_rules('id_tingkat_jabatan', 'id tingkat jabatan', 'trim|required');
	$this->form_validation->set_rules('id_batas_usia', 'id batas usia', 'trim|required');
	$this->form_validation->set_rules('id_tunjangan', 'id tunjangan', 'trim|required');
	$this->form_validation->set_rules('id_kategori', 'id kategori', 'trim|required');
	$this->form_validation->set_rules('id_jabatan', 'id jabatan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jabatan_fungsional_jenjang_tingkat.php */
/* Location: ./application/controllers/Jabatan_fungsional_jenjang_tingkat.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
