<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inbox extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Inbox';
        $data['subtitle'] = 'SMS Gateway RSUD Al Ihsan';
        $data['view'] = 'inbox/index';
        $data['js'] = 'inbox/js';
        $this->load->view('template/extend', $data);
    }
}
