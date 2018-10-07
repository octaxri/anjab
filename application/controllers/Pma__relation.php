<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pma__relation extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Pma__relation_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('pma__relation/pma__relation_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pma__relation_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pma__relation_model->get_by_id($id);
        if ($row) {
            $data = array(
		'master_db' => $row->master_db,
		'master_table' => $row->master_table,
		'master_field' => $row->master_field,
		'foreign_db' => $row->foreign_db,
		'foreign_table' => $row->foreign_table,
		'foreign_field' => $row->foreign_field,
	    );
            $this->load->view('pma__relation/pma__relation_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__relation'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pma__relation/create_action'),
	    'master_db' => set_value('master_db'),
	    'master_table' => set_value('master_table'),
	    'master_field' => set_value('master_field'),
	    'foreign_db' => set_value('foreign_db'),
	    'foreign_table' => set_value('foreign_table'),
	    'foreign_field' => set_value('foreign_field'),
	);
        $this->load->view('pma__relation/pma__relation_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'foreign_db' => $this->input->post('foreign_db',TRUE),
		'foreign_table' => $this->input->post('foreign_table',TRUE),
		'foreign_field' => $this->input->post('foreign_field',TRUE),
	    );

            $this->Pma__relation_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pma__relation'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pma__relation_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pma__relation/update_action'),
		'master_db' => set_value('master_db', $row->master_db),
		'master_table' => set_value('master_table', $row->master_table),
		'master_field' => set_value('master_field', $row->master_field),
		'foreign_db' => set_value('foreign_db', $row->foreign_db),
		'foreign_table' => set_value('foreign_table', $row->foreign_table),
		'foreign_field' => set_value('foreign_field', $row->foreign_field),
	    );
            $this->load->view('pma__relation/pma__relation_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__relation'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('master_db', TRUE));
        } else {
            $data = array(
		'foreign_db' => $this->input->post('foreign_db',TRUE),
		'foreign_table' => $this->input->post('foreign_table',TRUE),
		'foreign_field' => $this->input->post('foreign_field',TRUE),
	    );

            $this->Pma__relation_model->update($this->input->post('master_db', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pma__relation'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pma__relation_model->get_by_id($id);

        if ($row) {
            $this->Pma__relation_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pma__relation'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__relation'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('foreign_db', 'foreign db', 'trim|required');
	$this->form_validation->set_rules('foreign_table', 'foreign table', 'trim|required');
	$this->form_validation->set_rules('foreign_field', 'foreign field', 'trim|required');

	$this->form_validation->set_rules('master_db', 'master_db', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pma__relation.php */
/* Location: ./application/controllers/Pma__relation.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
