<?php 
 $cities= array( "Italy"=>"Rome",
  "Luxembourg"=>"Luxembourg",
   "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen",
 "Finland"=>"Helsinki",
  "France" => "Paris",
   "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana",
 "Germany" => "Berlin",
  "Greece" => "Athens",
   "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam",
 "Portugal"=>"Lisbon",
  "Spain"=>"Madrid" );
  asort($cities);
  foreach($cities as $city => $capital){
    echo"<p> The capital of " . $city . " is " . $capital . "</h3>";
  }
