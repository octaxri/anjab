<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pma__central_columns extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Pma__central_columns_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('pma__central_columns/pma__central_columns_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pma__central_columns_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pma__central_columns_model->get_by_id($id);
        if ($row) {
            $data = array(
		'db_name' => $row->db_name,
		'col_name' => $row->col_name,
		'col_type' => $row->col_type,
		'col_length' => $row->col_length,
		'col_collation' => $row->col_collation,
		'col_isNull' => $row->col_isNull,
		'col_extra' => $row->col_extra,
		'col_default' => $row->col_default,
	    );
            $this->load->view('pma__central_columns/pma__central_columns_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__central_columns'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pma__central_columns/create_action'),
	    'db_name' => set_value('db_name'),
	    'col_name' => set_value('col_name'),
	    'col_type' => set_value('col_type'),
	    'col_length' => set_value('col_length'),
	    'col_collation' => set_value('col_collation'),
	    'col_isNull' => set_value('col_isNull'),
	    'col_extra' => set_value('col_extra'),
	    'col_default' => set_value('col_default'),
	);
        $this->load->view('pma__central_columns/pma__central_columns_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'col_type' => $this->input->post('col_type',TRUE),
		'col_length' => $this->input->post('col_length',TRUE),
		'col_collation' => $this->input->post('col_collation',TRUE),
		'col_isNull' => $this->input->post('col_isNull',TRUE),
		'col_extra' => $this->input->post('col_extra',TRUE),
		'col_default' => $this->input->post('col_default',TRUE),
	    );

            $this->Pma__central_columns_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pma__central_columns'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pma__central_columns_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pma__central_columns/update_action'),
		'db_name' => set_value('db_name', $row->db_name),
		'col_name' => set_value('col_name', $row->col_name),
		'col_type' => set_value('col_type', $row->col_type),
		'col_length' => set_value('col_length', $row->col_length),
		'col_collation' => set_value('col_collation', $row->col_collation),
		'col_isNull' => set_value('col_isNull', $row->col_isNull),
		'col_extra' => set_value('col_extra', $row->col_extra),
		'col_default' => set_value('col_default', $row->col_default),
	    );
            $this->load->view('pma__central_columns/pma__central_columns_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__central_columns'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('db_name', TRUE));
        } else {
            $data = array(
		'col_type' => $this->input->post('col_type',TRUE),
		'col_length' => $this->input->post('col_length',TRUE),
		'col_collation' => $this->input->post('col_collation',TRUE),
		'col_isNull' => $this->input->post('col_isNull',TRUE),
		'col_extra' => $this->input->post('col_extra',TRUE),
		'col_default' => $this->input->post('col_default',TRUE),
	    );

            $this->Pma__central_columns_model->update($this->input->post('db_name', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pma__central_columns'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pma__central_columns_model->get_by_id($id);

        if ($row) {
            $this->Pma__central_columns_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pma__central_columns'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__central_columns'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('col_type', 'col type', 'trim|required');
	$this->form_validation->set_rules('col_length', 'col length', 'trim|required');
	$this->form_validation->set_rules('col_collation', 'col collation', 'trim|required');
	$this->form_validation->set_rules('col_isNull', 'col isnull', 'trim|required');
	$this->form_validation->set_rules('col_extra', 'col extra', 'trim|required');
	$this->form_validation->set_rules('col_default', 'col default', 'trim|required');

	$this->form_validation->set_rules('db_name', 'db_name', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pma__central_columns.php */
/* Location: ./application/controllers/Pma__central_columns.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
