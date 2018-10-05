<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pma__export_templates extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Pma__export_templates_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('pma__export_templates/pma__export_templates_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pma__export_templates_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pma__export_templates_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'username' => $row->username,
		'export_type' => $row->export_type,
		'template_name' => $row->template_name,
		'template_data' => $row->template_data,
	    );
            $this->load->view('pma__export_templates/pma__export_templates_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__export_templates'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pma__export_templates/create_action'),
	    'id' => set_value('id'),
	    'username' => set_value('username'),
	    'export_type' => set_value('export_type'),
	    'template_name' => set_value('template_name'),
	    'template_data' => set_value('template_data'),
	);
        $this->load->view('pma__export_templates/pma__export_templates_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'export_type' => $this->input->post('export_type',TRUE),
		'template_name' => $this->input->post('template_name',TRUE),
		'template_data' => $this->input->post('template_data',TRUE),
	    );

            $this->Pma__export_templates_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pma__export_templates'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pma__export_templates_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pma__export_templates/update_action'),
		'id' => set_value('id', $row->id),
		'username' => set_value('username', $row->username),
		'export_type' => set_value('export_type', $row->export_type),
		'template_name' => set_value('template_name', $row->template_name),
		'template_data' => set_value('template_data', $row->template_data),
	    );
            $this->load->view('pma__export_templates/pma__export_templates_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__export_templates'));
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
		'export_type' => $this->input->post('export_type',TRUE),
		'template_name' => $this->input->post('template_name',TRUE),
		'template_data' => $this->input->post('template_data',TRUE),
	    );

            $this->Pma__export_templates_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pma__export_templates'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pma__export_templates_model->get_by_id($id);

        if ($row) {
            $this->Pma__export_templates_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pma__export_templates'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__export_templates'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('export_type', 'export type', 'trim|required');
	$this->form_validation->set_rules('template_name', 'template name', 'trim|required');
	$this->form_validation->set_rules('template_data', 'template data', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pma__export_templates.php */
/* Location: ./application/controllers/Pma__export_templates.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
