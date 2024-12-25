<?php

class ContrySale {
    public static function csale( $country ) {
        echo 'Sale is 20% in ' . $country;
    }
}

class CitySale extends ContrySale {

    public static function csale( $country ) {
        echo 'Sale is 50% in ' . $country;
    }
    public static function sale( $city ) {
        echo 'Sale is 30% in ' . $city;
    }

    }


    CitySale::csale('India');
    echo "<br>";
    CitySale::sale('Delhi');

    ContrySale::csale('Pakistan');
    echo "<br>";
    CitySale::sale('Lahore');



?>