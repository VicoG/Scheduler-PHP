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

$record[0]["contactName"]="Mrs. Applebee";
$record[1]["contactName"]="Sally Cupcake";
$record[2]["contactName"]="Mr. Bernard";

$record[0]["start_date"]=date("m d Y");
$record[1]["start_date"]=date("m d Y", strtotime("+1 day"));
$record[2]["start_date"]=date("m d Y", strtotime("-2 day"));

$record[0]["end_date"]="2016-12-06 14:00:00";
$record[1]["end_date"]="2016-12-06 14:00:00";
$record[2]["end_date"]="2016-12-06 14:00:00";

$record[0]["posterType"]="";
$record[1]["posterType"]="";
$record[2]["posterType"]="";

$record[0]["paperSize"]="11.5x17";
$record[1]["paperSize"]="11.5x17";
$record[2]["paperSize"]="11.5x17";

$record[0]["printedOn"]="n/a";
$record[1]["printedOn"]="n/a";
$record[2]["printedOn"]="n/a";

$record[0]["paperFinish"]="glossy";
$record[1]["paperFinish"]="plain";
$record[2]["paperFinish"]="glossy";

$record[0]["ink"]="color";
$record[1]["ink"]="color";
$record[2]["ink"]="color";

$record[0]["cover"]="no";
$record[1]["cover"]="no";
$record[2]["cover"]="no";

$record[0]["numberOriginals"]="8";
$record[1]["numberOriginals"]="8";
$record[2]["numberOriginals"]="8";

$record[0]["numberCopies"]="4";
$record[1]["numberCopies"]="5";
$record[2]["numberCopies"]="6";

$record[0]["stapling"]="yes";
$record[1]["stapling"]="yes";
$record[2]["stapling"]="yes";

$record[0]["binding"]="no";
$record[1]["binding"]="no";
$record[2]["binding"]="no";

$record[0]["comments"]="blah blah blah";
$record[1]["comments"]="blah blah blah";
$record[2]["comments"]="blah blah blah";

$record[0]["assignedTo"]="Joe";
$record[1]["assignedTo"]="Tony";
$record[2]["assignedTo"]="Sally";

$record[0]["render"]="P";
$record[1]["render"]="P";
$record[2]["render"]="P";

for ($i=0; $i<3; $i++) {

    $event_array[] = array(
            'id' => $record[$i]['id'],
            'title' => $record[$i]['title'],
            'jobName' => $record[$i]['jobName'],
            'contactName' => $record[$i]['contactName'],
            'start' => $record[$i]['start_date'],
            'end' => $record[$i]['end_date'],

            'posterType' => $record[$i]['posterType'],
            'paperSize' => $record[$i]['paperSize'],
            'printedOn' => $record[$i]['printedOn'],
            'paperFinish' => $record[$i]['paperFinish'],
            'ink' => $record[$i]['ink'],
		'cover' => $record[$i]['cover'],
            'numberOriginals' => $record[$i]['numberOriginals'],
            'numberCopies' => $record[$i]['numberCopies'],
            'stapling' => $record[$i]['stapling'],
            'binding' => $record[$i]['binding'],

            'comments' => $record[$i]['comments'],
            'assignedTo' => $record[$i]['assignedTo'],
            'render' => $record[$i]['render'],
            'allDay' => true
    );


}

echo json_encode($event_array);


Exit;
?>	
