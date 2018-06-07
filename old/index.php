<?php include 'head.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contest Finder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/body1.css">
    <link rel="shortcut icon" href="img/2.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body  >
<nav class="navbar navbar-inverse" style="margin-bottom:0px">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"> <img src="img/1.png" style="margin-top: -39px; margin-left: -10px; height: 100px; width:100px"> </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Up Coming Contests</a></li>
      <li><a href="on.php">On Going Contests</a></li>
    </ul>
  </div>
</nav>
<div class="table-responsive">
  <table class="container">
    <thead>
      <tr>
        <th><h1>Contest Name</h1></th>
        <th><h1>Start Time</h1></th>
        <th><h1>Duration</h1></th>
        <th><h1>Platform</h1></th>
        <th><h1>Link</h1></th>
      </tr>
    </thead>
    <tbody>
    
        <?php
        $i=0;
        for(;$i<count($obj['result']['upcoming']);$i++)
        {
            if(mtime($obj['result']['upcoming'][$i]['StartTime'])>=mtime($obj['result']['timestamp']))
            {   
                echo "<tr><td>{$obj['result']['upcoming'][$i]['Name']}</td>
                <td>{$obj['result']['upcoming'][$i]['StartTime']}</td>
                <td>{$obj['result']['upcoming'][$i]['Duration']}</td>
                <td>{$obj['result']['upcoming'][$i]['Platform']}</td>
                <td>"; ?> <a href="<?php echo $obj['result']['upcoming'][$i]['url']; ?>" target="_blank"  class="btn btn-info" role="button">&Xi; Go to Contest</a><?php  echo "</td>
                </tr>";
            }
        }
        ?>
        <?php
        if($i==0)
        {
            echo "<tr><td>Sorry, No Contest scheduled Right Now!!!</td></tr>";
        }
    ?>
    </tbody>
  </table>
    
</div>
<footer style="height: 7vh;">
    <p style="text-align: center;">&copy; DragonFist</p>
</footer>
</body>
</html>