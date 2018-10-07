<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jabatan_fungsional_jenjang_golongan_kredit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Jabatan_fungsional_jenjang_golongan_kredit_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('jabatan_fungsional_jenjang_golongan_kredit/jabatan_fungsional_jenjang_golongan_kredit_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Jabatan_fungsional_jenjang_golongan_kredit_model->json();
    }

    public function read($id) 
    {
        $row = $this->Jabatan_fungsional_jenjang_golongan_kredit_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_golongan' => $row->id_golongan,
		'id_ruang' => $row->id_ruang,
		'id_angka_kredit' => $row->id_angka_kredit,
		'id_jenjang_tingkat' => $row->id_jenjang_tingkat,
		'id_angka_kredit_minimal' => $row->id_angka_kredit_minimal,
	    );
            $this->load->view('jabatan_fungsional_jenjang_golongan_kredit/jabatan_fungsional_jenjang_golongan_kredit_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_fungsional_jenjang_golongan_kredit'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jabatan_fungsional_jenjang_golongan_kredit/create_action'),
	    'id' => set_value('id'),
	    'id_golongan' => set_value('id_golongan'),
	    'id_ruang' => set_value('id_ruang'),
	    'id_angka_kredit' => set_value('id_angka_kredit'),
	    'id_jenjang_tingkat' => set_value('id_jenjang_tingkat'),
	    'id_angka_kredit_minimal' => set_value('id_angka_kredit_minimal'),
	);
        $this->load->view('jabatan_fungsional_jenjang_golongan_kredit/jabatan_fungsional_jenjang_golongan_kredit_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_golongan' => $this->input->post('id_golongan',TRUE),
		'id_ruang' => $this->input->post('id_ruang',TRUE),
		'id_angka_kredit' => $this->input->post('id_angka_kredit',TRUE),
		'id_jenjang_tingkat' => $this->input->post('id_jenjang_tingkat',TRUE),
		'id_angka_kredit_minimal' => $this->input->post('id_angka_kredit_minimal',TRUE),
	    );

            $this->Jabatan_fungsional_jenjang_golongan_kredit_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jabatan_fungsional_jenjang_golongan_kredit'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jabatan_fungsional_jenjang_golongan_kredit_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jabatan_fungsional_jenjang_golongan_kredit/update_action'),
		'id' => set_value('id', $row->id),
		'id_golongan' => set_value('id_golongan', $row->id_golongan),
		'id_ruang' => set_value('id_ruang', $row->id_ruang),
		'id_angka_kredit' => set_value('id_angka_kredit', $row->id_angka_kredit),
		'id_jenjang_tingkat' => set_value('id_jenjang_tingkat', $row->id_jenjang_tingkat),
		'id_angka_kredit_minimal' => set_value('id_angka_kredit_minimal', $row->id_angka_kredit_minimal),
	    );
            $this->load->view('jabatan_fungsional_jenjang_golongan_kredit/jabatan_fungsional_jenjang_golongan_kredit_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_fungsional_jenjang_golongan_kredit'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_golongan' => $this->input->post('id_golongan',TRUE),
		'id_ruang' => $this->input->post('id_ruang',TRUE),
		'id_angka_kredit' => $this->input->post('id_angka_kredit',TRUE),
		'id_jenjang_tingkat' => $this->input->post('id_jenjang_tingkat',TRUE),
		'id_angka_kredit_minimal' => $this->input->post('id_angka_kredit_minimal',TRUE),
	    );

            $this->Jabatan_fungsional_jenjang_golongan_kredit_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jabatan_fungsional_jenjang_golongan_kredit'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jabatan_fungsional_jenjang_golongan_kredit_model->get_by_id($id);

        if ($row) {
            $this->Jabatan_fungsional_jenjang_golongan_kredit_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jabatan_fungsional_jenjang_golongan_kredit'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_fungsional_jenjang_golongan_kredit'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_golongan', 'id golongan', 'trim|required');
	$this->form_validation->set_rules('id_ruang', 'id ruang', 'trim|required');
	$this->form_validation->set_rules('id_angka_kredit', 'id angka kredit', 'trim|required');
	$this->form_validation->set_rules('id_jenjang_tingkat', 'id jenjang tingkat', 'trim|required');
	$this->form_validation->set_rules('id_angka_kredit_minimal', 'id angka kredit minimal', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jabatan_fungsional_jenjang_golongan_kredit.php */
/* Location: ./application/controllers/Jabatan_fungsional_jenjang_golongan_kredit.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
