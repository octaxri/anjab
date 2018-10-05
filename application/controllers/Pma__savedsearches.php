<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pma__savedsearches extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Pma__savedsearches_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('pma__savedsearches/pma__savedsearches_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pma__savedsearches_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pma__savedsearches_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'username' => $row->username,
		'db_name' => $row->db_name,
		'search_name' => $row->search_name,
		'search_data' => $row->search_data,
	    );
            $this->load->view('pma__savedsearches/pma__savedsearches_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__savedsearches'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pma__savedsearches/create_action'),
	    'id' => set_value('id'),
	    'username' => set_value('username'),
	    'db_name' => set_value('db_name'),
	    'search_name' => set_value('search_name'),
	    'search_data' => set_value('search_data'),
	);
        $this->load->view('pma__savedsearches/pma__savedsearches_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'db_name' => $this->input->post('db_name',TRUE),
		'search_name' => $this->input->post('search_name',TRUE),
		'search_data' => $this->input->post('search_data',TRUE),
	    );

            $this->Pma__savedsearches_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pma__savedsearches'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pma__savedsearches_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pma__savedsearches/update_action'),
		'id' => set_value('id', $row->id),
		'username' => set_value('username', $row->username),
		'db_name' => set_value('db_name', $row->db_name),
		'search_name' => set_value('search_name', $row->search_name),
		'search_data' => set_value('search_data', $row->search_data),
	    );
            $this->load->view('pma__savedsearches/pma__savedsearches_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__savedsearches'));
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
		'db_name' => $this->input->post('db_name',TRUE),
		'search_name' => $this->input->post('search_name',TRUE),
		'search_data' => $this->input->post('search_data',TRUE),
	    );

            $this->Pma__savedsearches_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pma__savedsearches'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pma__savedsearches_model->get_by_id($id);

        if ($row) {
            $this->Pma__savedsearches_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pma__savedsearches'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__savedsearches'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('db_name', 'db name', 'trim|required');
	$this->form_validation->set_rules('search_name', 'search name', 'trim|required');
	$this->form_validation->set_rules('search_data', 'search data', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pma__savedsearches.php */
/* Location: ./application/controllers/Pma__savedsearches.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
