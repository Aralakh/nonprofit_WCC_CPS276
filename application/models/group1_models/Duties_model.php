<?php

class Duties_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function addDuty($inputData){

        $data = array(
            'duty_name' => $inputData['duty_name'],
            'duty_description' => $inputData['duty_description']
        );

        return $this->db->insert('misc_duties_table', $data);

    }

    public function getDutyById($id)
    {
        $query = $this->db->get_where('misc_duties_table', array('duty_id' => $id));
        return $data = $query->result_array();
    }

    public function getDutyByName($name)
    {
        $query = $this->db->get_where('misc_duties_table', array('duty_name' => $name));
        return $data = $query->result_array();
    }

    public function updateDuty($inputData)
    {
        $id = $inputData["duty_id"];
        $duty_name = $inputData['duty_name'];
        $duty_description = $inputData['duty_description'];

        $data = array(
          'duty_name' => $duty_name,
            'duty_description' => $duty_description
        );

        $this->db->where('duty_id', $id);
        $this->db->update('misc_duties_table', $data);
    }

}