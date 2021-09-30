<html>
<head>
<title>RANAKOSH RESULT </title>
<script src="pdf.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</head>
<body bgcolor="#32e692">
<center>
<h1>ENTER YOUR USN</h1>
<div class="container">
<form action="" method="POST">
<input type="text" name="usn" placeholder="Enter your usn"/>
<h1>ENTER YOUR SEMESTER</h1>
<input type="text" name="semester" placeholder="Enter your semester"/>
<input type="submit" name="search" vaule="search by semester">
</form>
<button type="reset" id="pdf" value="reset" style="font-size:20px">Download</button>
<table id="download" border="1" align="center">

<tr>
      <th>USN</th>
      <th>Semster</th>
      <th>Subject Code</th>
      <th>Subject</th>
      <th>Maximum Marks</th>
      <th>Marks Obtained</th>
</tr><br/>
<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'tutorials');
if(isset($_POST['search']))
{
$usn=$_POST['usn'];
$semester=$_POST['semester'];
$query="SELECT * FROM subject WHERE usn='$usn' AND semester=$semester";
$query_run=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($query_run))
{
?>
<tr>
<td><?php echo $row['usn']; ?></td>
<td><?php echo $row['semester']; ?></td>
<td><?php echo $row['subjectcode']; ?></td>
<td><?php echo $row['subjectid']; ?></td>
<td><?php echo $row['maxmarks']; ?></td>
<td><?php echo $row['marksobt']; ?></td>

<?php
}}
?>
</table>
</div></center>
</body>
</html>