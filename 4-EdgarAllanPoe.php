
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edgar Allan Poe</title>
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

<h1>Edgar Allan Poe</h1>
<br></br>

<div class="float-container">

    <div class="float-child-1">
    
    <img src="images/EdgarAllanPoe.jpg" alt="An image of Edgar Allan Poe">
<h2>Biography</h2>
    <p>
    <br>
    <a href="https://en.wikipedia.org/wiki/Edgar_Allan_Poe">Wikipedia</a>
    <br>
    Edgar Allan Poe (/poʊ/; born Edgar Poe; January 19, 1809 – October 7, 1849) was an American writer, poet, editor, and literary critic. Poe is best known for his poetry and short stories, 
    particularly his tales of mystery and the macabre. 
    He is widely regarded as a central figure of Romanticism in the United States, and of American literature. Poe was one of the country's earliest practitioners of the short story, 
    and considered to be the inventor of the detective fiction genre, as well as a significant contributor to the emerging genre of science fiction.[1] Poe is the first well-known American 
    writer to earn a living through writing alone, resulting in a financially difficult life and career. Poe was born in Boston, the second child of actors David and Elizabeth "Eliza" Poe. 
    His father abandoned the family in 1810, and when his mother died the following year, 
    Poe was taken in by John and Frances Allan of Richmond, Virginia. They never formally adopted him, but he was with them well into young adulthood. He attended the University of 
    Virginia but left after a year due to lack of money. He quarreled with John Allan over the funds for his education, and his gambling debts. In 1827, having enlisted in the United States 
    Army under an assumed name, he published his first collection Tamerlane and Other Poems, credited only to "a Bostonian". Poe and Allan reached a temporary rapprochement after the death of 
    Allan's wife in 1829. Poe later failed as an officer cadet at West Point, declared a firm wish to be a poet and writer, and parted ways with Allan.
    Poe switched his focus to prose and spent the next several years working for literary journals and periodicals, becoming known for his own style of literary criticism. His work forced him 
    to move among several cities, including Baltimore, Philadelphia, and New York City. In 1836, he married his 13-year-old cousin, Virginia Clemm, but she died of tuberculosis in 1847. In January 
    1845, Poe published his poem "The Raven" to instant success. He planned for years to produce his own journal The Penn (later renamed The Stylus), but before it could be produced, he died in 
    Baltimore on October 7, 1849, at age 40, under mysterious circumstances. The cause of his death remains unknown, and has been variously attributed to many causes including disease, alcoholism, 
    substance abuse, and suicide. Poe and his works influenced literature around the world, as well as specialized fields such as cosmology and cryptography. He and his work appear throughout 
    popular culture in literature, music, films, and television. A number of his homes are dedicated museums today. The Mystery Writers of America present an annual award known as the Edgar Award 
    for distinguished work in the mystery genre.
    </p>
<br></br>
    </div>
<div class="float-child-2">   
<h2>The Works of Edgar Allan Poe</h2>
   <br></br>
   <br></br>

   <table>
        <tr><td>
        <?php 
        $title1 = "The Tell Tale Heart";
        $title2 = "The Gold-Bug and Other Tales";
        $title3 = "Tales of Mystery and Imagination";
        $title4 = "The Fall of the House of Usher";
        $title5 = "Poetry";

        echo $title1 ?>
        <img src="books/TheTellTaleHeart.jpg" alt="An image of a book">
        <td>
        <?php  echo $title2 ?>
        <img src="books/TheGoldBugAndOtherTales.jpg" alt="An image of a book">
        </td></tr>
       
        <tr><td><?php  echo $title3 ?>    
        <img src="books/TalesOfMysteryAndImagination.jpg" alt="An image of a book">
       
        <td>
       <?php  echo $title4 ?>
        <img src="books/TheFallOfTheHouseOfUsher.jpg" alt="An image of a book">
        </td></tr>
        
        <tr><td><?php  echo $title5 ?>
        <img src="books/Poetry.jpg" alt="An image of a book">
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


