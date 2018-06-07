<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'http://contesttrackerapi.herokuapp.com/');
$result = curl_exec($ch);
curl_close($ch);
$obj = json_decode($result,TRUE);

function mtime($to='Mon, 25 Jan 2017 22:00')
{
    $mlist=["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
    $seconds=0;
    list($part1,$part2) = explode(', ', $to);
    list($day, $mon, $year, $time) = explode(' ', $part2);
    list($hours, $minutes) = explode(':', $time);
    $month=0;
    for($i=0;$i<12;$i++)
    {
        if($mlist[$i]==$mon)
            $month=$i+1;

    }
    $timeto =  mktime($hours, $minutes, $seconds, $month, $day, $year);
    return $timeto;
}

?>