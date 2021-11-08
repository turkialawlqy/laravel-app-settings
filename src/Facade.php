<?php

namespace turkialawlqy/\AppSettings;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'app-settings';
    }
}
