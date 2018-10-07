<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pma__column_info extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Pma__column_info_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('pma__column_info/pma__column_info_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pma__column_info_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pma__column_info_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'db_name' => $row->db_name,
		'table_name' => $row->table_name,
		'column_name' => $row->column_name,
		'comment' => $row->comment,
		'mimetype' => $row->mimetype,
		'transformation' => $row->transformation,
		'transformation_options' => $row->transformation_options,
		'input_transformation' => $row->input_transformation,
		'input_transformation_options' => $row->input_transformation_options,
	    );
            $this->load->view('pma__column_info/pma__column_info_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__column_info'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pma__column_info/create_action'),
	    'id' => set_value('id'),
	    'db_name' => set_value('db_name'),
	    'table_name' => set_value('table_name'),
	    'column_name' => set_value('column_name'),
	    'comment' => set_value('comment'),
	    'mimetype' => set_value('mimetype'),
	    'transformation' => set_value('transformation'),
	    'transformation_options' => set_value('transformation_options'),
	    'input_transformation' => set_value('input_transformation'),
	    'input_transformation_options' => set_value('input_transformation_options'),
	);
        $this->load->view('pma__column_info/pma__column_info_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'db_name' => $this->input->post('db_name',TRUE),
		'table_name' => $this->input->post('table_name',TRUE),
		'column_name' => $this->input->post('column_name',TRUE),
		'comment' => $this->input->post('comment',TRUE),
		'mimetype' => $this->input->post('mimetype',TRUE),
		'transformation' => $this->input->post('transformation',TRUE),
		'transformation_options' => $this->input->post('transformation_options',TRUE),
		'input_transformation' => $this->input->post('input_transformation',TRUE),
		'input_transformation_options' => $this->input->post('input_transformation_options',TRUE),
	    );

            $this->Pma__column_info_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pma__column_info'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pma__column_info_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pma__column_info/update_action'),
		'id' => set_value('id', $row->id),
		'db_name' => set_value('db_name', $row->db_name),
		'table_name' => set_value('table_name', $row->table_name),
		'column_name' => set_value('column_name', $row->column_name),
		'comment' => set_value('comment', $row->comment),
		'mimetype' => set_value('mimetype', $row->mimetype),
		'transformation' => set_value('transformation', $row->transformation),
		'transformation_options' => set_value('transformation_options', $row->transformation_options),
		'input_transformation' => set_value('input_transformation', $row->input_transformation),
		'input_transformation_options' => set_value('input_transformation_options', $row->input_transformation_options),
	    );
            $this->load->view('pma__column_info/pma__column_info_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__column_info'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'db_name' => $this->input->post('db_name',TRUE),
		'table_name' => $this->input->post('table_name',TRUE),
		'column_name' => $this->input->post('column_name',TRUE),
		'comment' => $this->input->post('comment',TRUE),
		'mimetype' => $this->input->post('mimetype',TRUE),
		'transformation' => $this->input->post('transformation',TRUE),
		'transformation_options' => $this->input->post('transformation_options',TRUE),
		'input_transformation' => $this->input->post('input_transformation',TRUE),
		'input_transformation_options' => $this->input->post('input_transformation_options',TRUE),
	    );

            $this->Pma__column_info_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pma__column_info'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pma__column_info_model->get_by_id($id);

        if ($row) {
            $this->Pma__column_info_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pma__column_info'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__column_info'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('db_name', 'db name', 'trim|required');
	$this->form_validation->set_rules('table_name', 'table name', 'trim|required');
	$this->form_validation->set_rules('column_name', 'column name', 'trim|required');
	$this->form_validation->set_rules('comment', 'comment', 'trim|required');
	$this->form_validation->set_rules('mimetype', 'mimetype', 'trim|required');
	$this->form_validation->set_rules('transformation', 'transformation', 'trim|required');
	$this->form_validation->set_rules('transformation_options', 'transformation options', 'trim|required');
	$this->form_validation->set_rules('input_transformation', 'input transformation', 'trim|required');
	$this->form_validation->set_rules('input_transformation_options', 'input transformation options', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pma__column_info.php */
/* Location: ./application/controllers/Pma__column_info.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
