<?php


date_default_timezone_set("America/Los_Angeles");


$record[0]["id"]="1";
$record[1]["id"]="2";
$record[2]["id"]="3";

$record[0]["title"]="Test 1";
$record[1]["title"]="Test 2";
$record[2]["title"]="Test 3";

$record[0]["jobName"]="Test 1";
$record[1]["jobName"]="Test 2";
$record[2]["jobName"]="Test 3";

$record[0]["contactName"]="Mrs. Smith";
$record[1]["contactName"]="Sally Cucumber";
$record[2]["contactName"]="Mr. Magoo";

$record[0]["start_date"]=date("m d Y", strtotime("+5 day"));
$record[1]["start_date"]=date("m d Y", strtotime("+7 day"));
$record[2]["start_date"]=date("m d Y", strtotime("-5 day"));

$record[0]["end_date"]="2016-12-06 14:00:00";
$record[1]["end_date"]="2016-12-06 14:00:00";
$record[2]["end_date"]="2016-12-06 14:00:00";

$record[0]["posterType"]="11x8.5";
$record[1]["posterType"]="11x8.5";
$record[2]["posterType"]="11x8.5";

$record[0]["mounting"]="steel";
$record[1]["mounting"]="steel";
$record[2]["mounting"]="steel";

$record[0]["paperFinish"]="glossy";
$record[1]["paperFinish"]="glossy";
$record[2]["paperFinish"]="glossy";

$record[0]["laminating"]="no";
$record[1]["laminating"]="no";
$record[2]["laminating"]="no";

$record[0]["frame"]="regular";
$record[1]["frame"]="regular";
$record[2]["frame"]="regular";

$record[0]["comments"]="blah blah blah";
$record[1]["comments"]="blah blah blah";
$record[2]["comments"]="blah blah blah";

$record[0]["assignedTo"]="Joe";
$record[1]["assignedTo"]="Tony";
$record[2]["assignedTo"]="Sally";

$record[0]["render"]="DM";
$record[1]["render"]="DM";
$record[2]["render"]="DM";

for ($i=0; $i<3; $i++) {

    $event_array[] = array(
            'id' => $record[$i]['id'],
            'title' => $record[$i]['title'],
            'jobName' => $record[$i]['jobName'],
            'contactName' => $record[$i]['contactName'],
            'start' => $record[$i]['start_date'],
            'end' => $record[$i]['end_date'],
            'posterType' => $record[$i]['posterType'],
            'mounting' => $record[$i]['mounting'],
            'paperFinish' => $record[$i]['paperFinish'],
            'laminating' => $record[$i]['laminating'],
            'frame' => $record[$i]['frame'],
            'comments' => $record[$i]['comments'],
            'assignedTo' => $record[$i]['assignedTo'],
            'render' => $record[$i]['render'],
            'allDay' => true
    );


}

echo json_encode($event_array);


Exit;
?>	
