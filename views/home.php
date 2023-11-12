<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table border="1" width="800">
    <tr>
      <th>SL NO</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
    </tr>
    <?php foreach ($students as $key=> $student) {?>

    <tr>
      <td><?php echo ++$key;?></td>
      <td><?php echo $student["name"]?></td>
      <td><?php echo $student["email"]?></td>
      <td><?php echo $student["mobile"]?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>