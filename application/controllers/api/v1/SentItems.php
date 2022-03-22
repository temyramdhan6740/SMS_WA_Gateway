<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SentItems extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        header('Content-Type: application/json; charset=utf-8');
        $this->SMS = $this->load->database('sms_gateway', TRUE);
        $this->load->model('Send_model');
    }

    public function index()
    {
        // Tampilkan SMS terkirim untuk waktu sekarang
        $data = array(
            'message' => $this->SMS->get('sentitems')->result_array(),
            'date' => date('Y-m-d H:i:s'),
            'msgcount' => 0,
            'code' => 200,
            'success' => true
        );
        echo json_encode($data);
    }
}
