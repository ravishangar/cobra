<?php
include_once 'crud.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<center>
<div id="header">
 <label>By : <a href="http://www.codingcage.com/">cleartuts - programming blog</a></label>
</div>
<br />
<div id="form">
<form method="post">
<table width="100%" border="1" cellpadding="15">
<tr>
<td><input type="text" name="fn" placeholder="First Name" value="<?php if(isset($_GET['edit'])) echo $getROW['fn'];  ?>" /></td>
</tr>
<tr>
<td><input type="text" name="ln" placeholder="Last Name" value="<?php if(isset($_GET['edit'])) echo $getROW['ln'];  ?>" /></td>
</tr>
<tr>
<td>
<?php
if(isset($_GET['edit']))
{
 ?>
 <button type="submit" name="update">update</button>
 <?php
}
else
{
 ?>
 <button type="submit" name="save">save</button>
 <?php
}
?>
</td>
</tr>
</table>
</form>

<br /><br />

<table width="100%" border="1" cellpadding="15" align="center">
<?php
$res = $MySQLiconn->query("SELECT * FROM data");
while($row=$res->fetch_array())
{
 ?>
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['fn']; ?></td>
    <td><?php echo $row['ln']; ?></td>
    <td><a href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('sure to edit !'); " >edit</a></td>
    <td><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('sure to delete !'); " >delete</a></td>
    </tr>
    <?php
}
?>
</table>
</div>
</center>
</body>
</html>