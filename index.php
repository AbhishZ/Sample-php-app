
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
		<title>RESULT ANALYSIS SYSTEM </title>
		<link rel="stylesheet" type="text/css" href="css/style1.css" />

	</head>
<?php 

$conn = mysql_connect("localhost","root", "");
mysql_select_db('result_analysis',$conn);

$sqlname="CREATE TABLE news(new longtext)";
$resultname=mysql_query($sqlname, $conn);

$conn = mysql_connect("localhost","root", "");
mysql_select_db('result_analysis',$conn);
$sqlqa="SELECT * from news"; 
$resultqa=mysql_query($sqlqa, $conn);

?>
</html>

<style type = "text/css">
body{background-image :url(bag.jpg);}
</style>
<body>
<center>
<table>
<tr>
<th>
 
<img src="m.jpg" height="100" width="100" alt="logo"  />

</th> 

<TH>

<img src="resultan.jpg" height="90" width="700" alt="logo"  />
</TH>
</center>
</table>
<hr />
<hr/>

<?php    
 $row = mysql_fetch_array($resultqa, MYSQL_ASSOC) ?>
		
			<?php $nn= $row['new'];  ?>
                                                        

<blink><marquee><h1><font color="purple"><?php echo"$nn";?></font></h1></marquee></blink>					
				
<br>
<br>
<br>
<div id="menu">
<a href="sreportr.php"><center><b><font size="6" face="Times New Roman" color="black">RESULTS</b></font></center></a>     
						
					</div>     
<br>
<br>
<br>
<div id="menu" >
<a href="res1.php"><center><b><font size="6" face="Times New Roman" color="black">REPORTS</b></font></center></a>     
						
					</div> 

					
            </div> 
			<div class="center_content">
				<div class="left_content">
        	







</body>
</html>




