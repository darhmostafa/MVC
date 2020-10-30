<?php

namespace TWO\core;


class helpers
{
    public static function header($path)
    {
        header("LOCATION:".DOMAIN_NAME.$path);
    }
}