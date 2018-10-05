<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pma__userconfig extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Pma__userconfig_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('pma__userconfig/pma__userconfig_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pma__userconfig_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pma__userconfig_model->get_by_id($id);
        if ($row) {
            $data = array(
		'username' => $row->username,
		'timevalue' => $row->timevalue,
		'config_data' => $row->config_data,
	    );
            $this->load->view('pma__userconfig/pma__userconfig_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__userconfig'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pma__userconfig/create_action'),
	    'username' => set_value('username'),
	    'timevalue' => set_value('timevalue'),
	    'config_data' => set_value('config_data'),
	);
        $this->load->view('pma__userconfig/pma__userconfig_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'timevalue' => $this->input->post('timevalue',TRUE),
		'config_data' => $this->input->post('config_data',TRUE),
	    );

            $this->Pma__userconfig_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pma__userconfig'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pma__userconfig_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pma__userconfig/update_action'),
		'username' => set_value('username', $row->username),
		'timevalue' => set_value('timevalue', $row->timevalue),
		'config_data' => set_value('config_data', $row->config_data),
	    );
            $this->load->view('pma__userconfig/pma__userconfig_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__userconfig'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('username', TRUE));
        } else {
            $data = array(
		'timevalue' => $this->input->post('timevalue',TRUE),
		'config_data' => $this->input->post('config_data',TRUE),
	    );

            $this->Pma__userconfig_model->update($this->input->post('username', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pma__userconfig'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pma__userconfig_model->get_by_id($id);

        if ($row) {
            $this->Pma__userconfig_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pma__userconfig'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pma__userconfig'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('timevalue', 'timevalue', 'trim|required');
	$this->form_validation->set_rules('config_data', 'config data', 'trim|required');

	$this->form_validation->set_rules('username', 'username', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pma__userconfig.php */
/* Location: ./application/controllers/Pma__userconfig.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
