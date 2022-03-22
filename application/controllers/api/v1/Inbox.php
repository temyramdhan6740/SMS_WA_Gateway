<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inbox extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->SMS = $this->load->database('sms_gateway', TRUE);
    }

    public function index()
    {
        $data = array(
            'message' => $this->SMS->get('inbox')->result_array(),
            'date' => date('Y-m-d H:i:s'),
            'msgcount' => 0,
            'code' => 200,
            'success' => true
        );
        echo json_encode($data);
    }
}
