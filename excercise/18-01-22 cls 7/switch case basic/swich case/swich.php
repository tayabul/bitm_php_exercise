<?php
$nameofweek=[
        "Sun"=>"Sunday",
	    "Mon" => "monday",
        "Tue" => "tuesday",
        "Wed" => "wednesday",
        "Thus"=>"Thursday",
        "Fri"=>"Friday",
        "Sat"=>"Saturday"
        
];

$currentday = date("D");

switch(strtolower($currentday)){
	case "sun":
    	echo "Today is $nameofweek[$currentday]<br>";
        break;  
    case "mon":
    	echo "Today is $nameofweek[$currentday]<br>";
        break;
   	case "tue":
    	echo "Today is $nameofweek[$currentday]<br>";
        break;
    case "wed":
    	echo "Today is $nameofweek[$currentday]<br>";
        break; 
    case "thu":
    	echo "Today is $nameofweek[$currentday]<br>";
        break;
    case "fri":
    	echo "Today is $nameofweek[$currentday]<br>";  
        break;
    case "sat":
    	echo "Today is $nameofweek[$currentday] <br>";  
        break;  
    default:
    	break;
}


?>