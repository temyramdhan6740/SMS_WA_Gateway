<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sent_items_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->SMS = $this->load->database('sms_gateway', TRUE);
    }

    public function Today()
    {
        $this->SMS->like('SendingDateTime', date('Y-m-d'));
        return $this->SMS->get('sentitems')->result_array();
    }
}
