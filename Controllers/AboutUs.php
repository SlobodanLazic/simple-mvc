<?php

    class AboutUs extends Controller{
        public static function doSomething()
        {
            echo "<pre>";
            print_r(self::query("SELECT * FROM kip.k;"));
            echo "</pre>";
        }
    }

?>