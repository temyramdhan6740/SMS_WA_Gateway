<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Send extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->SMS = $this->load->database('sms_gateway', TRUE);
    }

    public function insert($no_telp, $message, $user)
    {
        $send = array(
            "DestinationNumber" => $no_telp,
            "TextDecoded" => $message,
            "CreatorID" => $user
        );

        $this->SMS->insert('outbox', $send);
        return $send;
    }
}
