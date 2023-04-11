<?php

function getTropStromText($url) {
    $text = file_get_contents($url);
    return $text;
}

/**
 * @param string $text
 * @return json text
 * 
 */
//{"valamikulcs":45,
// "masikkulcs":"szöveg"}
function getWarningInfo($text) {
    $warningPos = strpos($text, "WARNING POSITION:");
    $jsonArray = [];
    if($warningPos !== false) {
        $warningText = trim(substr($text, $warningPos+19, 32));

        $detailArray = explode(" ", $warningText);
        $dateString = $detailArray[0];
        date_default_timezone_set('UTC');
        $YYYY       = date('Y');
        $MM         = date('m');
        $DD         = substr($dateString, 0, 2);

        $HH         =  substr($dateString, 2, 2);
        $II         =  substr($dateString, 4, 2);
        $SS         = "00";

        $returnDateString = $YYYY.'-'.$MM.'-'.$DD.' '.$HH.':'.$II.':'.$SS;
        $latitude   = $detailArray[3];
        $longitude  = $detailArray[4];
        $jsonArray['date']  = $returnDateString;
        $jsonArray['latitude']  = $latitude;
        $jsonArray['longitude']  = $longitude;
}
    return json_encode($jsonArray, JSON_PRETTY_PRINT);
}

$text = getTropStromText("https://www.metoc.navy.mil/jtwc/products/sh1123web.txt");
print(getWarningInfo($text));

print(date('Y-m-d'));
print('<br>');
echo date("Y-m-d", mktime(0, 0, 0, 12, 32, 1997));
print('<br>');
echo date("Y-m-d", mktime(0, 0, 0, 2, 9, 2006));
print('<br>');
var_dump(date_add(date_create(), date_interval_create_from_date_string("8 days")));
print('<br>');
echo date("Y-m-d", mktime(0, 0, 0, 2, 49, 2006));