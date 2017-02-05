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

function image($plat)
{
    $url;
    if($plat=='CODEFORCES')
        echo "<img src='http://st.codeforces.com/s/91447/images/codeforces-logo-with-telegram.png' style='height:65px; width:300px'>";
    else if($plat=='HACKERRANK')
        echo "<img src='http://blog.hackerrank.com/wp-content/uploads/2016/06/logo.png' style='height:65px; width:300px'>";
    else if($plat=='HACKEREARTH')
        echo "<img src='https://hackerearth.global.ssl.fastly.net/static/hackerearth/images/logo/HE_logo.png' style='height:55px; width:275px' >";
     else if($plat=='TOPCODER')
        echo "<img src='https://wwwtc.wpengine.com/wp-content/themes/tc2-theme/appirio-50-50/i/desktop/logo.png' style='height:55px; width:301px' >";
    else if($plat=='GOOGLE CODE JAM')
        echo "<img src='https://code.google.com/codejam/contest/static/logo_image4.gif' style='height:65px; width:300px' >";
    else if($plat=='CODECHEF')
        echo "<img src='https://s3.amazonaws.com/codechef_shared/sites/all/themes/abessive/logo.png' style='height:65px; width:210px' >";
     else if($plat=='OTHER')
        echo "<img src='img/other.gif' style='height:65px; width:210px'>";
}
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Contest Finder </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <style type="text/css">
    	.navbar 
    	{
        	background: transparent;
        	opacity: 1;
            color:black;
	    }
	    .top-nav-collapse
	    {
	        background: #0066ff;
            opacity: 1;
	    }
	    @media only screen and (max-width: 768px)
	    {
        	.navbar 
        	{
            	background: #0066ff;
                opacity: 1;
                color:black;
        	}
    	}
        .view 
		{
		    background: url("img/up.jpeg")center fixed;
            height:50vh;
		    background-size: cover;
		}
        
        div.entry
        {
            margin-left: 50px;
            margin-right: 30px;
            margin-top: 10px;
            background-color: #fff;
            border: 1px solid #fff;
            border-radius: 10px;
            opacity: 1;
            filter: alpha(opacity=80); /* For IE8 and earlier */
            color: #000000;
            text-align: left;
            font-size: 120%;
        }
        div.entry:hover
        {
            font-size: 120%;
            background-color: #bfbfbf;
            border: 1px solid #029c0b;
            color: #000000;
            -webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
    transform: translate3d(2px, -2px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.6s;
	  transition-property: all;
  transition-timing-function: line;

        }

        div.entry p 
        {
            margin: 5%;
            text-align: left;
            font-weight: bold;
        }
    </style>

</head>

<body>
    
    <!-- Start your project here-->

    <header>
    	<nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">
    		<button class="navbar-toggler hidden-sm-up" data-toggle="collapse" data-target="#togg"> <span class="fa fa-bars"> </span> </button>
    		<div class="container">
    			<div class="collapse navbar-toggleable-xs" id="togg">
    				<a class="navbar-brand" href="index.php" style=" font-size:150%"> Contest Finder </a>
    				<ul class="nav navbar-nav" >
    					<li class="nav-item">
                            <a class="nav-link" href="up.php"style="font-size:120%" > Upcoming Contests </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="on.php"style="font-size:120%"> Ongoing Contests </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php" style="font-size:120%"> About Me </a>
    				</ul>
    			</div>
    		</div>
    	</nav>
        
    </header>
    <div class="view hm-black-slight">
        <div class="full-bg-img flex-center">
	            <h1 class="animated fadeInUp display-1" style="color:white;"> Scheduled Contests </h1>
	    	</div>
    </div>
    <div style="background-color: #fff;">
        <div style="color:#fff; margin-bottom:20px;">ghjkl</div>
    <?php
        $i=0;
        for(;$i<count($obj['result']['upcoming']);$i++)
        {
            if(mtime($obj['result']['upcoming'][$i]['StartTime'])>=mtime($obj['result']['timestamp']))
            {   
                 echo " <a href='{$obj['result']['upcoming'][$i]['url']}' target='_blank'>
                        <div class='entry'>
                        <div class='row'>
                            <div class='col-md-4'>
                            <p >";
                            image($obj['result']['upcoming'][$i]['Platform']);
                
                echo "</p>
                            </div>
                            <div class='col-md-3'>
                            <p>{$obj['result']['upcoming'][$i]['Name']}</p>
                            </div>
                            <div class='col-md-3'>
                            <p>{$obj['result']['upcoming'][$i]['StartTime']}</p>
                            </div>
                            <div class='col-md-2'>
                            <p>{$obj['result']['upcoming'][$i]['Duration']}</p>
                            </div>
                        </div>  
                     </div></a>";                          
            }
        }
        if($i==0)
        {
            echo "<div class='entry'>
                        <div class='row'>
                            <div class='col-md-12'>
                            <p >Sorry, No Contest scheduled Right Now!!!</p>
                            </div
                        </div>  
                     </div>";
            
        }
    ?>
    </div>
    <div >
        <div style="color:#000000; margin-bottom:10px;  margin-top:10px; text-align:center; font-size:20px;"><p>&copy; DragonFist</p></div>
    </div>

</body>

</html>