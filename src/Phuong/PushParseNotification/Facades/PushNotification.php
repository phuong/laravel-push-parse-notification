<?php namespace Phuong\PushParseNotification\Facades;

use Illuminate\Support\Facades\Facade;

class PushNotification extends Facade {

    /**
     * get facade accessor
     * @return string
     */
    protected static function getFacadeAccessor() { return 'pushNotification'; }

}