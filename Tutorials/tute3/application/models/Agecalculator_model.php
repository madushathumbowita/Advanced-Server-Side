<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agecalculator_model extends CI_Model {

    public function calculate_age($dob) {
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dob), date_create($today));
        return $diff->format('%y');
    }
}