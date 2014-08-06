<?php
$json = json_encode(array(
     "Showroom" => array(
        "lati" => "72.12",
        "name" => "Showroom 1",
        "longi" => "12.0",
        "Address" => "Malad, Mumbai"
     ), "price" =>  "200",
     "slots" => array(
        "9" => "72",
        "10" => "6",
        "11" => "12",
        "12" => "5",
	"2" => "13"
     ),"Ammenities"=>"Painting, Pickup, Drop, Good life Loyalty benfits ",
     "pickcharge" => "10",


));
echo $json;
?>
