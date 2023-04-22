<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELibrary</title>
    <link rel="stylesheet" type="text/css" href="main.css"> 
</head>


<body>
<div class="catalog">
<div class= "container-lg">
<div class="title"> 
        <h1>eLIBRARY</h1> 
    </div>
<br></br>
<form action="newOrder.php" class="addOrder" method="GET">
	<input id="nickname" name="nickname" type= "text" placeholder="Enter your nickname ...">
	<input id="title" name="title" type= "text" placeholder="Book Title ...">
        <button type="submit">Order Book</button>
</form>

<form action="cancelOrder.php" class="cancelOrder" method="GET">
  <input id="Ncancel" name="nickname" type= "text" placeholder="Enter your nickname ...">
        <input id="title" name="title" type="text" placeholder="Book Title... ">
        <button type="submit">Cancel Order</button>
    </form>
<br></br>
<br></br>
<form action="MustReadBooks.php">
    <input type="submit" value="Must-Read Books">
</form>
<form action="readBookPage.php">
    <input type="submit" value="Read Book">
</form>

<br></br>
<br></br>

<div class="catalogImage">

<div class="image">
<a href="writers/1-LoisaMayAlcott.php">
<img src="images/1.jpg" alt="1 - An image of Luisa May Alcott">
<br>
<?php 
    $firstName = "Loisa May ";
    $lastName = "Alcott";

    echo $firstName;
    echo $lastName;
    ?>
</a>
</div>

<div class="image">
<a href="writers/2-DouglasAdams.php">
<img src="images/2.jpg" alt="2 - An image of Douglas Adams">
<br>
  <?php 
    $firstName = "Douglas  ";
    $lastName = " Adams";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/3-J.R.R.Tolkien.php">
<img src="images/3.jpg" alt="3 - An image of J.R.R. Tolkien">
<br>
<?php 
    $firstName = "John Ronald  ";
    $lastName = " Tolkien";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/4-EdgarAllanPoe.php">
<img src="images/4.jpg" alt="4 - An image of Edgar Allan Poe" />
<br>
<?php 
    $firstName = "Edgar Allan  ";
    $lastName = " Poe";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/5-ArthurConanDoyle.php">
<img src="images/5.jpg" alt="5 - An image of Arthur Conan Doyle">
<br>
<?php 
    $firstName = "Arthur Conan  ";
    $lastName = "Doyle";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/6-VirginiaWoolf.php">
<img src="images/6.jpg" alt="6 - An image of Virginia Woolf">
<br>
<?php 
    $firstName = "Verginia ";
    $lastName = "Woolf";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/7-RichardFeynman.php"> 
<img src="images/7.jpg" alt="7 - An image of Richard Feynman">
<br>
<?php 
    $firstName = "Richard ";
    $lastName = "Feynman";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/8-HermanMelville.php">
<img src="images/8.jpg" alt="8 - An image of Herman Melville" />
<br>
<?php 
    $firstName = "Herman ";
    $lastName = "Melville";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/9-RayBradbury.php">
<img src="images/9.jpg" alt="9 - An image of Ray Bradbury">
<br>
<?php 
    $firstName = "Ray ";
    $lastName = "Bradbury";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/10-HarperLee.php">
<img src="images/10.jpg" alt="10 - An image of Harper Lee" />
<br>
<?php 
    $firstName = "Harper ";
    $lastName = "Lee";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/11-ChinuaAchebe.php">
<img src="images/11.jpg" alt="11 - An image of Chinua Achebe" />
<br>
<?php 
    $firstName = "Chinua ";
    $lastName = "Achebe";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/12-ErnestHemingway.php">
<img src="images/12.jpg" alt="12 - An image of Ernest Hemingway">
<br>
<?php 
    $firstName = "Ernest ";
    $lastName = "Hemingway";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/13-HarukiMurakami.php"> 
<img src="images/13.jpg" alt="13 - An image of Haruki Murakami">
<br>
<?php 
    $firstName = "Haruki ";
    $lastName = "Murakami";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/14-MarkTwain.php">
<img src="images/14.jpg" alt="14 - An image of Mark Twain" />
<br>
<?php 
    $firstName = "Mark ";
    $lastName = "Twain";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/15-FSFitzgerald.php"> 
<img src="images/15.jpg" alt="15 - An image of F.Scott Fitzgerald" />
<br>
<?php 
    $firstName = "Francis Scott ";
    $lastName = "Fitzgerald";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/16-AgathaChristie.php">  
<img src="images/16.jpg" alt="16 - An image of Agatha Christie">
<br>
<?php 
    $firstName = "Agatha ";
    $lastName = "Christie";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>
 
<div class="image">
<a href="writers/17-GeorgeOrwell.php">
<img src="images/17.jpg" alt="17 - An image of George Orwell" />
<br>
<?php 
    $firstName = "George ";
    $lastName = "Orwell";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/18-CharlesDickens.php">
<img src="images/18.jpg" alt="18 - An image of Charles Dickens" />
<br>
<?php 
    $firstName = "Charles ";
    $lastName = "Dickens";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/19-JamesJoyce.php">   
<img src="images/19.jpg" alt="19 - An image of James Joyce" />
<br>
<?php 
    $firstName = "James ";
    $lastName = "Joyce";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/20-StephenKing.php">  
<img src="images/20.jpg" alt="20 - An image of Stephen King" />
<br>
<?php 
    $firstName = "Stephen ";
    $lastName = "King";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/21-FranzKafka.php">
<img src="images/21.jpg" alt="21 - An image of Franz Kafka" />
<br>
<?php 
    $firstName = "Franz ";
    $lastName = "Kafka";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/22-VictorHugo.php">
<img src="images/22.jpg" alt="22 - An image of Victor Hugo" />
<br>
<?php 
    $firstName = "Victor ";
    $lastName = "Hugo";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>
<div class="image">
<a href="writers/23-MarcelProust.php">
<img src="images/23.jpg" alt="23 - An image of Marcel Proust" />
<br>
<?php 
    $firstName = "Marcel ";
    $lastName = "Proust";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/24-AlbertCamus.php">
<img src="images/24.jpg" alt="24 - An image of Albert Camus" />
<br>
<?php 
    $firstName = "Albert ";
    $lastName = "Camus";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/25-AnnaGavalda.php">
<img src="images/25.jpg" alt="25 - An image of Anna Gavalda" />
<br>
<?php 
    $firstName = "Anna ";
    $lastName = "Gavalda";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/26-EmilyDickenson.php">
<img src="images/26.jpg" alt="26 - An image of Emily Dickenson" />
<br>
<?php 
    $firstName = "Emily ";
    $lastName = "Dickenson";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/27-MilanKundera.php">
<img src="images/27.jpg" alt="27 - An image of Milan Kundera" />
<br>
<?php 
    $firstName = "Milan ";
    $lastName = "Kundera";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/28-HunterThompson.php">
<img src="images/28.jpg" alt="28 - An image of Hunter Thompson" />
<br>
<?php 
    $firstName = "Hunter ";
    $lastName = "Thompson";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/29-IsaacAsimov.php">
<img src="images/29.jpg" alt="29 - An image of Isaac Asimov" />
<br>
<?php 
    $firstName = "Isaac ";
    $lastName = "Asimov";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/30-TennesseeWilliams.php">
<img src="images/30.jpg" alt="30 - An image of Tennessee Williams" />
<br>
<?php 
    $firstName = "Tennessee ";
    $lastName = "Williams";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/31-AntonChekhow.php">
<img src="images/31.jpg" alt="31 - An image of Anthon Chekhow" />
<br>
<?php 
    $firstName = "Anthon ";
    $lastName = "Chekhow";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/32-J.K.Rowling.php">
<img src="images/32.jpg" alt="32 - An image of J.K.Rowling">
<br>
<?php 
    $firstName = "  ";
    $lastName = "  ";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/33-JackLondon.php">
<img src="images/33.jpg" alt="33 - An image of Jack London" />
<br>
<?php 
    $firstName = "Joanne ";
    $lastName = "Rowling";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/34-WilliamShakespeare.php">
<img src="images/34.jpg" alt="34 - An image of William Shakespeare" />
<br>
<?php 
    $firstName = "William ";
    $lastName = "Shakespeare";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/35-OscarWilde.php">
<img src="images/35.jpg" alt="35 - An image of Oscar Wilde" />
<br>
<?php 
    $firstName = "Oscar ";
    $lastName = "Wilde";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/36-YukioMishima.php">
<img src="images/36.jpg" alt="36 - An image of Yukio Mishima">
<br>
<?php 
    $firstName = "Yukio ";
    $lastName = "Mishima";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/37-JaneAustin.php">
<img src="images/37.jpg" alt="37 - An image of Jane Austen">
<br>
<?php 
    $firstName = "Jane ";
    $lastName = "Austin";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/38-CharlotteBronte.php">
<img src="images/38.jpg" alt="38 - An image of Charlotte Bronte">
<br>
<?php 
    $firstName = "Charlotte ";
    $lastName = "Bronte";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/39-MaryShelly.php">
<img src="images/39.jpg" alt="39 - An image of Mary Shelly">
<br>
<?php 
    $firstName = "Mary ";
    $lastName = "Shelly";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

<div class="image">
<a href="writers/40-AstridLindgren.php">
<img src="images/40.jpg" alt="40 - An image of AstridLindgren" />
<br>
<?php 
    $firstName = "Astrid ";
    $lastName = "Lindgren";

    echo $firstName;
    echo $lastName;  
    ?>
</a>
</div>

</div>

<div class="pagination">
			<div class="previousPage"> << Previous Page </div>
			<div class="nextPage"> Next Page >> </div>
		</div>

<script src="pagination.js"></script>


</body>
</html>
