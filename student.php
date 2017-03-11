<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('couldnot connect:'.mysql_error());
}
mysql_select_db("project",$con);
$sql="select * from project.students where usn='$_POST[usn]'";
$result=mysql_query($sql,$con);
echo"<table border='1'>
<tr>
<th>name</th>
<th>college</th>
<th>academics</th>
<th>technical</th>
<th>soft_skills</th>
</tr>";
while($row=mysql_fetch_array($result))
{
echo"<tr><td>".$row['name']."</td>";
echo"<td>".$row['college']."</td>";
echo"<td>".$row['academics']."</td>";
echo"<td>".$row['technical']."</td>";
echo"<td>".$row['soft_skills']."</td>";
</tr>";

}
echo"</table>";
mysql_close($con);
?>

