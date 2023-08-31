<!doctype html>
<html>

<head>
    <title>
        table with database</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
           body{

padding-left:400px;
background-size: cover;
font-family: Arial, Helvetica, sans-serif;
      background-repeat: no-repeat;
      background-image: url(https://www.cna-qatar.com/SiteCollectionImages/News/STEM%20Teacher%20Training%20Conference.jpg);
		}

		.box {	
display: flex;
margin-top:80px;
padding:0px;
width:60%;
position:relative;
z-index:1;


}
.bar{
	height:29px;
	width:400px;
	border-bottom-left-radius:9px;
	border-top-left-radius:9px;
	border:0;
	padding-left:10px;
	z-index:1;
	position:relative;
	color: rgb(235, 182, 84);
}

.b{
	width:43px;
	height:31px;
	background-color:orange;
	display: flex;
align-items: center;
border-bottom-right-radius:9px;
border-top-right-radius:9px;
position:relative;
z-index:1;
}

.b i{
	padding-right:10px;
	color:white;
	position:relative;
z-index:1;
}

.btn{
	background-color:orange; 
	width:40px;
	border:0;
	width:100px;
	border-radius:20px;
	height:30px;
	position:relative;
z-index:1;
}

th{
	color: rgb(235, 182, 84);
	padding:30px;
	padding-left:0px;
	position:relative;
z-index:1;
padding-top:40px;
}
td{
	color: white;
	padding:10px;
	padding-left:0px;
	position:relative;
z-index:1;
}
table{
	color:white;
	position:relative;
z-index:1;
}
h1{
	position:relative;
	padding-top:70px;
z-index:1;
color:pink;
padding-left:50px;
text-transform:capitalize;
}

.color-overlay{
    position: absolute;
top:0;
left:0;
width:100%;
height: 100%;
background:rgba(19, 19, 75, 0.8) ;
}
            </style>

</head>
<body>
<h1> search bar for faculty</h1>
<form method="post">
<div class="box">

<input class="bar" type="text" name="search" placeholder="please enter the department">
<div class="b">
<input class="btn" type="submit" name="submit" value="">

<i class="fa fa-search" aria-hidden="true" tpe="submit"></i>
</div>
</div>
</form>
<div class="color-overlay">
</div>



<?php
$conn = mysqli_connect ("localhost","root","","faculty");
if ($conn->connect_error) {
    die("connection failed:" .$conn-> connect_error);
}
if (isset($_POST["submit"])) {
	$str = $_POST["search"];
$sql= "SELECT * FROM `faculty_list` WHERE Department = '$str'";
$result = $conn->query($sql);

if($result-> num_rows >0){
    ?>
    <table>
<tr>
    <th> Name</th>
    <th>Designation</th>
    <th>Age</th>
    
</tr>
<?php
    while ($row = $result-> fetch_assoc()){
       

        echo "<tr><td>" .$row["Name"] . "</td><td>" .$row["Designation"] . "</td><td>" 
        .$row["Age"] . "</td><td>" ;
    }
    echo "</table>";
}
else{
	echo "<p style='color:white; z-index:1; position:relative;'> Name Does not exist</p>";
}
}
$conn-> close();
?>
</table>
</body>
</html>