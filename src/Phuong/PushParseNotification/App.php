<?php namespace Phuong\PushParseNotification;

use Parse\ParseClient;
use Parse\ParseObject;

class App {
    
    public function __construct()
    {
        $app_id = "";
        $rest_key = "";
        $master_key = "";
        ParseClient::initialize($app_id, $rest_key, $master_key);
    }

    public function to($addressee)
    {
        $this->addressee = is_string($addressee) ? new Device($addressee) : $addressee;

        return $this;
    }

    public function send($message, $options = array()) {
        $push = new Push($this->adapter, $this->addressee, ($message instanceof Message) ? $message : new Message($message, $options));

        $this->pushManager->add($push);
        
        $this->pushManager->push();

        return $this;
    }

    public function getFeedback() {
        return $this->pushManager->getFeedback($this->adapter);
    }
}