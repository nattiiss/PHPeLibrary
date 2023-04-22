
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmilyDickenson</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
<br></br>

<a href="../index.php"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg>
</a>
<h1>Emily Dickenson</h1>
<br></br>

<div class="float-container">

    <div class="float-child-1">
    
<img src="images/EmilyDickenson.jpg" alt="An image of EmilyDickenson">
   
<h2>Biography</h2>
    <p>
    <br>
    <a href="https://en.wikipedia.org/wiki/Emily_Dickinson">Wikipedia</a>
    <br>
    Emily Elizabeth Dickinson (December 10, 1830 – May 15, 1886) was an American poet. Little-known during her life, she has since been regarded as one of the most important figures in American poetry.[2]
    Dickinson was born in Amherst, Massachusetts, into a prominent family with strong ties to its community. After studying at the Amherst Academy for seven years in her youth, she briefly attended the Mount Holyoke Female Seminary before returning to her family's home in Amherst.
    Evidence suggests that Dickinson lived much of her life in isolation. Considered an eccentric by locals, she developed a penchant for white clothing and was known for her reluctance to greet guests or, later in life, to even leave her bedroom. Dickinson never married, and most friendships between her and others depended entirely upon correspondence.[3]
    While Dickinson was a prolific writer, her only publications during her lifetime were 10 of her nearly 1,800 poems, and one letter.[4] The poems published then were usually edited significantly to fit conventional poetic rules. Her poems were unique for her era. They contain short lines, typically lack titles, and often use slant rhyme as well as unconventional capitalization and punctuation.[5] Many of her poems deal with themes of death and immortality, two recurring topics in letters to her friends, and also explore aesthetics, society, nature and spirituality.[6]
    Although Dickinson's acquaintances were most likely aware of her writing, it was not until after her death in 1886—when Lavinia, Dickinson's younger sister, discovered her cache of poems—that her work became public. Her first collection of poetry was published in 1890 by personal acquaintances Thomas Wentworth Higginson and Mabel Loomis Todd, though both heavily edited the content. A 1998 article in The New York Times revealed that of the many edits made to Dickinson's work, the name "Susan" was often deliberately removed. At least eleven of Dickinson's poems were dedicated to sister-in-law Susan Huntington Gilbert Dickinson, though all the dedications were obliterated, presumably by Todd.[7] A complete, 
    and mostly unaltered, collection of her poetry became available for the first time when scholar Thomas H. Johnson published The Poems of Emily Dickinson in 1955.[8]
    </p>
<br></br>
    </div>
<div class="float-child-2">   
<h2>The Works of Emily Dickenson</h2>
   <br></br>
   <br></br>

   <table>
        <tr><td>
        <?php 
        $title1 = "Because I could not stop for Death";
        $title2 = "The Complete Poems";
        $title3 = "I heard a Fly buzz when I died";
        $title4 = "Hope";
        $title5 = "Success is counted sweetest";

        echo $title1 ?>
        <img src="books/BecauseICouldNotStopForDeath.jpg" alt="An image of a book">
        <td>
        <?php  echo $title2 ?>
        <img src="books/TheCompletePoems.jpg" alt="An image of a book">
        </td></tr>
       
        <tr><td><?php  echo $title3 ?>    
        <img src="books/IHeardAFlyBuzzWhenIDied.jpg" alt="An image of a book">
       
        <td>
       <?php  echo $title4 ?>
        <img src="books/Hope.jpg" alt="An image of a book">
        </td></tr>
        
        <tr><td><?php  echo $title5 ?>
        <img src="books/SuccessIsCountedSweetest.jpg" alt="An image of a book">
        </td></tr>
        </tr>
    </table>

<br></br>
<br></br>
<br></br>


    </div>

</div>
</body>
</html>
