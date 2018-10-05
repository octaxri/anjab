<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pma__history extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Pma__history_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('pma__history/pma__history_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pma__history_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pma__history_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'username' => $row->username,
		'db' => $row->db,
		'table' => $row->table,
		'timevalue' => $row->timevalue,
		'sqlquery' => $row->sqlquery,
	    );
            $this->load->view('pma__history/pma__history_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__history'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pma__history/create_action'),
	    'id' => set_value('id'),
	    'username' => set_value('username'),
	    'db' => set_value('db'),
	    'table' => set_value('table'),
	    'timevalue' => set_value('timevalue'),
	    'sqlquery' => set_value('sqlquery'),
	);
        $this->load->view('pma__history/pma__history_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'db' => $this->input->post('db',TRUE),
		'table' => $this->input->post('table',TRUE),
		'timevalue' => $this->input->post('timevalue',TRUE),
		'sqlquery' => $this->input->post('sqlquery',TRUE),
	    );

            $this->Pma__history_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pma__history'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pma__history_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pma__history/update_action'),
		'id' => set_value('id', $row->id),
		'username' => set_value('username', $row->username),
		'db' => set_value('db', $row->db),
		'table' => set_value('table', $row->table),
		'timevalue' => set_value('timevalue', $row->timevalue),
		'sqlquery' => set_value('sqlquery', $row->sqlquery),
	    );
            $this->load->view('pma__history/pma__history_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__history'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'db' => $this->input->post('db',TRUE),
		'table' => $this->input->post('table',TRUE),
		'timevalue' => $this->input->post('timevalue',TRUE),
		'sqlquery' => $this->input->post('sqlquery',TRUE),
	    );

            $this->Pma__history_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pma__history'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pma__history_model->get_by_id($id);

        if ($row) {
            $this->Pma__history_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pma__history'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__history'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('db', 'db', 'trim|required');
	$this->form_validation->set_rules('table', 'table', 'trim|required');
	$this->form_validation->set_rules('timevalue', 'timevalue', 'trim|required');
	$this->form_validation->set_rules('sqlquery', 'sqlquery', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pma__history.php */
/* Location: ./application/controllers/Pma__history.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
