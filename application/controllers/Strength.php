<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Strength extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Strength_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'strength/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'strength/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'strength/index.html';
            $config['first_url'] = base_url() . 'strength/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Strength_model->total_rows($q);
        $strength = $this->Strength_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'strength_data' => $strength,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('strength/strength_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Strength_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'subject' => $row->subject,
		'courses' => $row->courses,
		'careers' => $row->careers,
		'advice' => $row->advice,
		'descipline' => $row->descipline,
	    );
            $this->load->view('strength/strength_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('strength'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('strength/create_action'),
	    'id' => set_value('id'),
	    'subject' => set_value('subject'),
	    'courses' => set_value('courses'),
	    'careers' => set_value('careers'),
	    'advice' => set_value('advice'),
	    'descipline' => set_value('descipline'),
	);
        $this->load->view('strength/strength_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'subject' => $this->input->post('subject',TRUE),
		'courses' => $this->input->post('courses',TRUE),
		'careers' => $this->input->post('careers',TRUE),
		'advice' => $this->input->post('advice',TRUE),
		'descipline' => $this->input->post('descipline',TRUE),
	    );

            $this->Strength_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('strength'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Strength_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('strength/update_action'),
		'id' => set_value('id', $row->id),
		'subject' => set_value('subject', $row->subject),
		'courses' => set_value('courses', $row->courses),
		'careers' => set_value('careers', $row->careers),
		'advice' => set_value('advice', $row->advice),
		'descipline' => set_value('descipline', $row->descipline),
	    );
            $this->load->view('strength/strength_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('strength'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'subject' => $this->input->post('subject',TRUE),
		'courses' => $this->input->post('courses',TRUE),
		'careers' => $this->input->post('careers',TRUE),
		'advice' => $this->input->post('advice',TRUE),
		'descipline' => $this->input->post('descipline',TRUE),
	    );

            $this->Strength_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('strength'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Strength_model->get_by_id($id);

        if ($row) {
            $this->Strength_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('strength'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('strength'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('subject', 'subject', 'trim|required');
	$this->form_validation->set_rules('courses', 'courses', 'trim|required');
	$this->form_validation->set_rules('careers', 'careers', 'trim|required');
	$this->form_validation->set_rules('advice', 'advice', 'trim|required');
	$this->form_validation->set_rules('descipline', 'descipline', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Strength.php */
/* Location: ./application/controllers/Strength.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-04-14 07:49:54 */
/* http://harviacode.com */