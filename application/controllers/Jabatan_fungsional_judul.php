<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jabatan_fungsional_judul extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Jabatan_fungsional_judul_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('jabatan_fungsional_judul/jabatan_fungsional_judul_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Jabatan_fungsional_judul_model->json();
    }

    public function read($id) 
    {
        $row = $this->Jabatan_fungsional_judul_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'kata_pengantar' => $row->kata_pengantar,
	    );
            $this->load->view('jabatan_fungsional_judul/jabatan_fungsional_judul_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_fungsional_judul'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jabatan_fungsional_judul/create_action'),
	    'id' => set_value('id'),
	    'kata_pengantar' => set_value('kata_pengantar'),
	);
        $this->load->view('jabatan_fungsional_judul/jabatan_fungsional_judul_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kata_pengantar' => $this->input->post('kata_pengantar',TRUE),
	    );

            $this->Jabatan_fungsional_judul_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jabatan_fungsional_judul'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jabatan_fungsional_judul_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jabatan_fungsional_judul/update_action'),
		'id' => set_value('id', $row->id),
		'kata_pengantar' => set_value('kata_pengantar', $row->kata_pengantar),
	    );
            $this->load->view('jabatan_fungsional_judul/jabatan_fungsional_judul_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_fungsional_judul'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'kata_pengantar' => $this->input->post('kata_pengantar',TRUE),
	    );

            $this->Jabatan_fungsional_judul_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jabatan_fungsional_judul'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jabatan_fungsional_judul_model->get_by_id($id);

        if ($row) {
            $this->Jabatan_fungsional_judul_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jabatan_fungsional_judul'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_fungsional_judul'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kata_pengantar', 'kata pengantar', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jabatan_fungsional_judul.php */
/* Location: ./application/controllers/Jabatan_fungsional_judul.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
