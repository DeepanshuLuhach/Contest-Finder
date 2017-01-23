<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'http://contesttrackerapi.herokuapp.com/');
$result = curl_exec($ch);
curl_close($ch);
$obj = json_decode($result,TRUE);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Code Calender</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Contest Name</th>
        <th>Start Time</th>
        <th>Duration</th>
        <th>Platform</th>
        <th>Link</th>
      </tr>
    </thead>
    <tbody>
    <?php
    for($i=0;$i<count($obj['result']['upcoming']);$i++)
    {
        echo "<tr><td>{$obj['result']['upcoming'][$i]['Name']}</td>
        <td>{$obj['result']['upcoming'][$i]['StartTime']}</td>
        <td>{$obj['result']['upcoming'][$i]['Duration']}</td>
        <td>{$obj['result']['upcoming'][$i]['Platform']}</td>
        <td>"; ?> <a href="<?php echo $obj['result']['upcoming'][$i]['url']; ?>">Go to Contest</a><?php  echo "</td>
      </tr>";
    }
    ?>
    </tbody>
  </table>
</div>

</body>
</html>