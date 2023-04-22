<?php
require_once('DatabaseHelper.php');


$database = new DatabaseHelper();


$nickname = '';
if(isset($_GET['nickname'])){
    $nickname = $_GET['nickname'];
}


$title = '';
if(isset($_GET['title'])){
    $title = $_GET['title'];
}



$cancel = $database->cancelOrder( $nickname, $title);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Book</title>
    
</head>
<body>

<style>
body {
    margin: 200px;
    background-color: white;
text-align:center;
   }

    a {
	color: black;
	display: block;
	margin-left: auto;
    margin-right: auto;
	margin-bottom: 12px;
	text-align:center;
    line-height: 25pt;
	font-family: 'Times New Roman', Times, serif;
	font-size: large;
	text-decoration: none;
	white-space: nowrap;
}

div {
  width: 470px;
height:150px;
  margin: 20px;
  padding: 60px;
text-align: center;
margin-left: 480px;
border: 15px solid lightblue;
box-shadow:rgba(7, 96, 148, 0.4) 5px 5px, rgba(7, 96, 148, 0.3)10px 10px,rgba(7, 96, 148, 0.3) 15px 15px, rgba(7, 96, 148, 0.2) 20px 20px, rgba(7, 96, 148,0.2) 25px 25px, 
rgba(7, 96, 148,0.2) 30px 30px, rgba(7, 96, 148,0.1) 35px 35px,  rgba(7, 96, 148,0.1) 40px 40px, rgba(7, 96, 148,0.1) 40px 40px, rgba(7, 96, 148,0.1) 40px 40px;

}

</style>


<div>
<?php if ($cancel){
    echo "Your Order have been canceled!";
}
else{
    echo "Something went wrong! Please try again!";
}

?>
</div>



        
</form>
<br></br>
<br></br>
<br></br>
<a href="index.php"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg>
</a>


</body>
</html>