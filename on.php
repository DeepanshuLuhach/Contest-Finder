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
      <li><a href="index.php">Up Coming Contests</a></li>
      <li class="active"><a href="on.php">On Going Contests</a></li>
    </ul>
  </div>
</nav>
<div class="table-responsive">
  <table class="container">
    <thead>
      <tr>
        <th>Contest Name</th>
        <th>End Time</th>
        <th>Platform</th>
        <th>Link</th>
      </tr>
    </thead>
    <tbody>
    <?php
    for($i=0;$i<count($obj['result']['ongoing']);$i++)
    {
        if(mtime($obj['result']['ongoing'][$i]['EndTime'])>=mtime($obj['result']['timestamp']))
        { 
            echo "<tr>
            <td>{$obj['result']['ongoing'][$i]['Name']}</td>
            <td>{$obj['result']['ongoing'][$i]['EndTime']}</td>
            <td>{$obj['result']['ongoing'][$i]['Platform']}</td>
            <td>"; ?>  <a href="<?php echo $obj['result']['ongoing'][$i]['url']; ?>" target="_blank"  class="btn btn-info" role="button">&Xi; Go to Contest</a><?php  echo "</td>
            </tr>";
        }
        
    }
    if($i==0)
    {
        echo "<tr><td>Sorry, No Contest Running Right Now!!!</td></tr>";
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