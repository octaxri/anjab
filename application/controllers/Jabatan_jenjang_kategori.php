<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jabatan_jenjang_kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Jabatan_jenjang_kategori_model');
        $this->load->library('form_validation');

        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('jabatan_jenjang_kategori/jabatan_jenjang_kategori_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Jabatan_jenjang_kategori_model->json();
    }

    public function read($id) 
    {
        $row = $this->Jabatan_jenjang_kategori_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'id_jabatan' => $row->id_jabatan,
		'id_jenjang' => $row->id_jenjang,
		'id_jenjang_kategori' => $row->id_jenjang_kategori,
		'id_kelas' => $row->id_kelas,
		'id_golongan' => $row->id_golongan,
		'id_ruang' => $row->id_ruang,
		'kode_pengangkatan' => $row->kode_pengangkatan,
	    );
            $this->load->view('jabatan_jenjang_kategori/jabatan_jenjang_kategori_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_jenjang_kategori'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jabatan_jenjang_kategori/create_action'),
	    'id' => set_value('id'),
	    'id_jabatan' => set_value('id_jabatan'),
	    'id_jenjang' => set_value('id_jenjang'),
	    'id_jenjang_kategori' => set_value('id_jenjang_kategori'),
	    'id_kelas' => set_value('id_kelas'),
	    'id_golongan' => set_value('id_golongan'),
	    'id_ruang' => set_value('id_ruang'),
	    'kode_pengangkatan' => set_value('kode_pengangkatan'),
	);
        $this->load->view('jabatan_jenjang_kategori/jabatan_jenjang_kategori_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_jabatan' => $this->input->post('id_jabatan',TRUE),
		'id_jenjang' => $this->input->post('id_jenjang',TRUE),
		'id_jenjang_kategori' => $this->input->post('id_jenjang_kategori',TRUE),
		'id_kelas' => $this->input->post('id_kelas',TRUE),
		'id_golongan' => $this->input->post('id_golongan',TRUE),
		'id_ruang' => $this->input->post('id_ruang',TRUE),
		'kode_pengangkatan' => $this->input->post('kode_pengangkatan',TRUE),
	    );

            $this->Jabatan_jenjang_kategori_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jabatan_jenjang_kategori'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jabatan_jenjang_kategori_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jabatan_jenjang_kategori/update_action'),
		'id' => set_value('id', $row->id),
		'id_jabatan' => set_value('id_jabatan', $row->id_jabatan),
		'id_jenjang' => set_value('id_jenjang', $row->id_jenjang),
		'id_jenjang_kategori' => set_value('id_jenjang_kategori', $row->id_jenjang_kategori),
		'id_kelas' => set_value('id_kelas', $row->id_kelas),
		'id_golongan' => set_value('id_golongan', $row->id_golongan),
		'id_ruang' => set_value('id_ruang', $row->id_ruang),
		'kode_pengangkatan' => set_value('kode_pengangkatan', $row->kode_pengangkatan),
	    );
            $this->load->view('jabatan_jenjang_kategori/jabatan_jenjang_kategori_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_jenjang_kategori'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'id_jabatan' => $this->input->post('id_jabatan',TRUE),
		'id_jenjang' => $this->input->post('id_jenjang',TRUE),
		'id_jenjang_kategori' => $this->input->post('id_jenjang_kategori',TRUE),
		'id_kelas' => $this->input->post('id_kelas',TRUE),
		'id_golongan' => $this->input->post('id_golongan',TRUE),
		'id_ruang' => $this->input->post('id_ruang',TRUE),
		'kode_pengangkatan' => $this->input->post('kode_pengangkatan',TRUE),
	    );

            $this->Jabatan_jenjang_kategori_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jabatan_jenjang_kategori'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jabatan_jenjang_kategori_model->get_by_id($id);

        if ($row) {
            $this->Jabatan_jenjang_kategori_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jabatan_jenjang_kategori'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan_jenjang_kategori'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_jabatan', 'id jabatan', 'trim|required');
	$this->form_validation->set_rules('id_jenjang', 'id jenjang', 'trim|required');
	$this->form_validation->set_rules('id_jenjang_kategori', 'id jenjang kategori', 'trim|required');
	$this->form_validation->set_rules('id_kelas', 'id kelas', 'trim|required');
	$this->form_validation->set_rules('id_golongan', 'id golongan', 'trim|required');
	$this->form_validation->set_rules('id_ruang', 'id ruang', 'trim|required');
	$this->form_validation->set_rules('kode_pengangkatan', 'kode pengangkatan', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jabatan_jenjang_kategori.php */
/* Location: ./application/controllers/Jabatan_jenjang_kategori.php */
/* Please DO NOT modify this information : */
/* Generated by mahrus@pcr.ac.id*/
