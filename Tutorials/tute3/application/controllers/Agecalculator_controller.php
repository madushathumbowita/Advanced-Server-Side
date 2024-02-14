<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Agecalculator_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); // Load URL helper
    }

    public function index() {
        #$this->load->view('age_form');
        #public function index() {
            #$this->load->helper('url'); // Load URL helper
            $this->load->view('age_form');
        #}
    }

    public function calculate_age() {
        $this->load->model('agecalculator_model');
        $dob = $this->input->post('dob'); // Get date of birth from form

        // Validate date format
        if (!$this->_validate_date($dob)) {
            $this->data['error'] = "Invalid date format. Please use DD-MM-YYYY.";
            $this->load->view('age_form', $this->data);
            return;
        }

        $age = $this->agecalculator_model->calculate_age($dob);
        $this->data['age'] = $age;
        $this->load->view('age_result', $this->data);
    }

    private function _validate_date($date) {
        return DateTime::createFromFormat('d-m-Y', $date) !==false;
    }
}