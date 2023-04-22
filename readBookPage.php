<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Book</title>
    

<style>
body {
    margin: 160px;
    background-color:white;
   }


h1{
	font-family:'Courier New', Courier, monospace;
	color:rgba(68, 32, 2, 0.76);
	font-size:100px;
	font-weight: normal;
	line-height: 64 px;
	margin: 10px 0 20px;
	padding: 20px 30px;
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
	font-size: large;
	text-decoration: none;
	white-space: nowrap;
}


div {
	position: relative;
	display: inline-block;
	width: 1300px;
	max-width: none;
}

input[name="nickname"] {
	float:left;
	font-family: 'Times New Roman', Times, serif;
	font-size: small;
	background-color: white;
	border: groove;
    padding: 12px 15px;
	margin-left: 360px;
}

input[name="title" ] {
	float:left;
	font-family: 'Times New Roman', Times, serif;
	font-size: small;
	background-color: white;
	border: groove;
    padding: 12px 20px;
	margin-left: 2px;
}

input[name="list_title" ] {
	float:left;
	font-family: 'Times New Roman', Times, serif;
	font-size: small;
	background-color: white;
	border: groove;
    padding: 12px 20px;
	margin-left: 2px;
}


input {
	border: groove;
	background-color: rgba(7, 96, 148);
	font-family:'Times New Roman', Times, serif;
	font-size: medium;
	padding: 10px 30px;
	color: black;
}


button[type="submit"] {
	color: black;
	border: groove;
	background-color: rgba(7, 96, 148);
	font-family: 'Times New Roman', Times, serif;
	font-size: small;
	padding: 12px 8px;
	position: absolute;
	margin-left: 2px;
}


</style>
</head>
<body>

<div class="catalog">
<div class= "container-lg">


<div class="title"> 
        <h1>eBoOks</h1> 
    </div>

<br></br>

<form action="readBook.php" class="readBook" method="GET">
	<input id="nickname" name="nickname" type= "text" placeholder="Enter your nickname ...">
	<input id="title" name="title" type= "text" placeholder="Book Title ...">
<input id="list_title" name="list_title" type= "text" placeholder="List Title ...">
        <button type="submit">Read Book</button>
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
