<?php
$xml = file_get_contents("http://ec.europa.eu/eurostat/wdds/rest/data/v2.1/json/en/t2020_rd300?&precision=1&na_item=B1GQ&time=2010&time=2011");
 print_r( json_decode( $xml )  );
