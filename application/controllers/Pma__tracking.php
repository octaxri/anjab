<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pma__tracking extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Pma__tracking_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('pma__tracking/pma__tracking_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pma__tracking_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pma__tracking_model->get_by_id($id);
        if ($row) {
            $data = array(
		'db_name' => $row->db_name,
		'table_name' => $row->table_name,
		'version' => $row->version,
		'date_created' => $row->date_created,
		'date_updated' => $row->date_updated,
		'schema_snapshot' => $row->schema_snapshot,
		'schema_sql' => $row->schema_sql,
		'data_sql' => $row->data_sql,
		'tracking' => $row->tracking,
		'tracking_active' => $row->tracking_active,
	    );
            $this->load->view('pma__tracking/pma__tracking_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__tracking'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pma__tracking/create_action'),
	    'db_name' => set_value('db_name'),
	    'table_name' => set_value('table_name'),
	    'version' => set_value('version'),
	    'date_created' => set_value('date_created'),
	    'date_updated' => set_value('date_updated'),
	    'schema_snapshot' => set_value('schema_snapshot'),
	    'schema_sql' => set_value('schema_sql'),
	    'data_sql' => set_value('data_sql'),
	    'tracking' => set_value('tracking'),
	    'tracking_active' => set_value('tracking_active'),
	);
        $this->load->view('pma__tracking/pma__tracking_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'date_created' => $this->input->post('date_created',TRUE),
		'date_updated' => $this->input->post('date_updated',TRUE),
		'schema_snapshot' => $this->input->post('schema_snapshot',TRUE),
		'schema_sql' => $this->input->post('schema_sql',TRUE),
		'data_sql' => $this->input->post('data_sql',TRUE),
		'tracking' => $this->input->post('tracking',TRUE),
		'tracking_active' => $this->input->post('tracking_active',TRUE),
	    );

            $this->Pma__tracking_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pma__tracking'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pma__tracking_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pma__tracking/update_action'),
		'db_name' => set_value('db_name', $row->db_name),
		'table_name' => set_value('table_name', $row->table_name),
		'version' => set_value('version', $row->version),
		'date_created' => set_value('date_created', $row->date_created),
		'date_updated' => set_value('date_updated', $row->date_updated),
		'schema_snapshot' => set_value('schema_snapshot', $row->schema_snapshot),
		'schema_sql' => set_value('schema_sql', $row->schema_sql),
		'data_sql' => set_value('data_sql', $row->data_sql),
		'tracking' => set_value('tracking', $row->tracking),
		'tracking_active' => set_value('tracking_active', $row->tracking_active),
	    );
            $this->load->view('pma__tracking/pma__tracking_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__tracking'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('db_name', TRUE));
        } else {
            $data = array(
		'date_created' => $this->input->post('date_created',TRUE),
		'date_updated' => $this->input->post('date_updated',TRUE),
		'schema_snapshot' => $this->input->post('schema_snapshot',TRUE),
		'schema_sql' => $this->input->post('schema_sql',TRUE),
		'data_sql' => $this->input->post('data_sql',TRUE),
		'tracking' => $this->input->post('tracking',TRUE),
		'tracking_active' => $this->input->post('tracking_active',TRUE),
	    );

            $this->Pma__tracking_model->update($this->input->post('db_name', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pma__tracking'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pma__tracking_model->get_by_id($id);

        if ($row) {
            $this->Pma__tracking_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pma__tracking'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__tracking'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('date_created', 'date created', 'trim|required');
	$this->form_validation->set_rules('date_updated', 'date updated', 'trim|required');
	$this->form_validation->set_rules('schema_snapshot', 'schema snapshot', 'trim|required');
	$this->form_validation->set_rules('schema_sql', 'schema sql', 'trim|required');
	$this->form_validation->set_rules('data_sql', 'data sql', 'trim|required');
	$this->form_validation->set_rules('tracking', 'tracking', 'trim|required');
	$this->form_validation->set_rules('tracking_active', 'tracking active', 'trim|required');

	$this->form_validation->set_rules('db_name', 'db_name', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pma__tracking.php */
/* Location: ./application/controllers/Pma__tracking.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
