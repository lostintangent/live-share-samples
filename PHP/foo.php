<?php

/**
 * This is a function
 * 
 * @param $foo int
 * 
 * @return void
 */
function foo($foo)
{
    echo ("Hello $foo");

}

/**
 * This is a class
 */
class Blah
{
    /**
     * Does nothing at all
     * 
     * @return void
     */
    public static function blaz($bar)
    {
        echo("Hello");
    }

    public static $me = "23";
}

foo("sd");
Blah::blaz(23);

?>