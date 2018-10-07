<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Users_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('users/users_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Users_model->json();
    }

    public function read($id) 
    {
        $row = $this->Users_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'name' => $row->name,
		'email' => $row->email,
		'no_hp' => $row->no_hp,
		'id_opd' => $row->id_opd,
		'akses' => $row->akses,
		'password' => $row->password,
		'remember_token' => $row->remember_token,
	    );
            $this->load->view('users/users_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('users/create_action'),
	    'id' => set_value('id'),
	    'name' => set_value('name'),
	    'email' => set_value('email'),
	    'no_hp' => set_value('no_hp'),
	    'id_opd' => set_value('id_opd'),
	    'akses' => set_value('akses'),
	    'password' => set_value('password'),
	    'remember_token' => set_value('remember_token'),
	);
        $this->load->view('users/users_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'email' => $this->input->post('email',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		'id_opd' => $this->input->post('id_opd',TRUE),
		'akses' => $this->input->post('akses',TRUE),
		'password' => $this->input->post('password',TRUE),
		'remember_token' => $this->input->post('remember_token',TRUE),
	    );

            $this->Users_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('users'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Users_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('users/update_action'),
		'id' => set_value('id', $row->id),
		'name' => set_value('name', $row->name),
		'email' => set_value('email', $row->email),
		'no_hp' => set_value('no_hp', $row->no_hp),
		'id_opd' => set_value('id_opd', $row->id_opd),
		'akses' => set_value('akses', $row->akses),
		'password' => set_value('password', $row->password),
		'remember_token' => set_value('remember_token', $row->remember_token),
	    );
            $this->load->view('users/users_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'email' => $this->input->post('email',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		'id_opd' => $this->input->post('id_opd',TRUE),
		'akses' => $this->input->post('akses',TRUE),
		'password' => $this->input->post('password',TRUE),
		'remember_token' => $this->input->post('remember_token',TRUE),
	    );

            $this->Users_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('users'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Users_model->get_by_id($id);

        if ($row) {
            $this->Users_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('users'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
	$this->form_validation->set_rules('id_opd', 'id opd', 'trim|required');
	$this->form_validation->set_rules('akses', 'akses', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('remember_token', 'remember token', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
