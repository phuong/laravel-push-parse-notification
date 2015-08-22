<?php

namespace Phuong\PushParseNotification;

use Parse\ParseClient;
use Parse\ParseObject;
use Config;

class App
{

    private $obj;

    public function __construct()
    {
        $config = Config::get('push-parse-notification');
        ParseClient::initialize($config['app_id'], $config['rest_key'], $config['master_key']);
        $this->obj = ParseObject::create("TestObject");
    }

    /**
     * Set data
     * @param type $key
     * @param type $value
     * @return \Phuong\PushParseNotification\App
     */
    public function set($key, $value)
    {
        $this->obj->set($key, $value);
        return $this;
    }

    /**
     * Save data
     * @return \Phuong\PushParseNotification\App
     */
    public function save()
    {
        $this->obj->save();
        return $this;
    }

}
