<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Send extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        header('Content-Type: application/json; charset=utf-8');
        $this->SMS = $this->load->database('sms_gateway', TRUE);
        $this->load->model('Send_model');
    }

    public function index($no_telp)
    {
        // Proses kirim pesan
        if (isset($_POST['no_telp']) || isset($_POST['message']) || isset($_POST['user'])) {
            $send = $this->Send_model->insert($_POST['no_telp'], $_POST['message'], $_POST['user']);
            $code = 200;
        } else {
            $send = "Data Kosong";
            $code = 201;
        }

        // Respon hasil kiriman
        $data = array(
            'message' => $send,
            'date' => date('Y-m-d H:i:s'),
            'msgcount' => 0,
            'code' => $code,
            'success' => true
        );
        echo json_encode($data);
    }
}
