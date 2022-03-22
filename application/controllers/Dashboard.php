<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        
        $data['title'] = 'Dashboard';
        $data['subtitle'] = 'SMS Gateway RSUD Al Ihsan';
        $data['view'] = 'dashboard/index';
        $data['js'] = 'dashboard/js';
        $this->load->view('template/extend', $data);
        // $this->load->view('dashboard', $data);
    }
}
