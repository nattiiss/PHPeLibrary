
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarkTwain</title>
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
<h1>Mark Twain</h1>
<br></br>

<div class="float-container">

    <div class="float-child-1">
    
<img src="images/MarkTwain.jpg" alt="An image of MarkTwain">
   
<h2>Biography</h2>
    <p>
    <br>
    <a href="https://en.wikipedia.org/wiki/Mark_Twain">Wikipedia</a>
    <br>
    Samuel Langhorne Clemens (November 30, 1835 – April 21, 1910),[1] known by his pen name Mark Twain, was an American writer, humorist, entrepreneur, publisher, and lecturer. He was 
    lauded as the "greatest humorist the United States has produced,"[2] and William Faulkner called him "the father of American literature".[3] His novels include The Adventures of Tom Sawyer 
    (1876) and its sequel, Adventures of Huckleberry Finn (1884),[4] the latter of which has often been called the "Great American Novel".
    Twain was raised in Hannibal, Missouri, which later provided the setting for Tom Sawyer and Huckleberry Finn. He served an apprenticeship with a printer and then worked as a typesetter, contributing articles to the newspaper of his older brother Orion Clemens. He later became a riverboat pilot on the Mississippi River before heading west to join Orion in Nevada. He referred humorously to his lack of success at mining, turning to journalism for the Virginia City Territorial Enterprise.
    His humorous story "The Celebrated Jumping Frog of Calaveras County" was published in 1865, based on a story that he heard at Angels Hotel in Angels Camp, California, where he had 
    spent some time as a miner. The short story brought international attention and was even translated into French.[6] His wit and satire, in prose and in speech, earned praise from 
    critics and peers, and he was a friend to presidents, artists, industrialists, and European royalty.
    Twain earned a great deal of money from his writings and lectures but invested in ventures that lost most of it—such as the Paige Compositor, a mechanical typesetter 
    that failed because of its complexity and imprecision. He filed for bankruptcy in the wake of these financial setbacks, but in time overcame his financial troubles with the help of 
    Henry Huttleston Rogers. He eventually paid all his creditors in full, even though his bankruptcy relieved him of having to do so. Twain was born shortly after an appearance of 
    Halley's Comet, and he predicted that he would "go out with it" as well; he died the day after the comet made its closest approach to Earth.
    wain was fascinated with science and scientific inquiry. He developed a close and lasting friendship with Nikola Tesla, and the two spent much time together in Tesla's laboratory.[citation needed]
    Twain patented three inventions, including an "Improvement in Adjustable and Detachable Straps for Garments" (to replace suspenders) and a history trivia game.[43][44] Most commercially successful was a self-pasting scrapbook; a dried adhesive on the pages needed only to be moistened before use.[43] Over 25,000 were sold.[43]
    Twain was an early proponent of fingerprinting as a forensic technique, featuring it in a tall tale in Life on the Mississippi (1883) and as a central plot element in the novel Pudd'nhead Wilson (1894).[citation needed]
    Twain's novel A Connecticut Yankee in King Arthur's Court (1889) features a time traveler from the contemporary U.S., using his knowledge of science to introduce modern technology to Arthurian England. This type of historical manipulation became a trope of speculative fiction as alternate histories.[citation needed]
    In 1909, Thomas Edison visited Twain at Stormfield, his home in Redding, Connecticut and filmed him. Part of the footage was used in The Prince and the Pauper (1909), a two-reel short film. It is the only known existing film footage of Twain.
    </p>
<br></br>
    </div>
<div class="float-child-2">   
<h2>The Works of Mark Twain</h2>
   <br></br>
   <br></br>

   <table>
        <tr><td>
        <?php 
        $title1 = "The Adventures of Tom Sawyer";
        $title2 = "Adventures of Huckleberry Finn";
        $title3 = "The Mysterious Stranger";
        $title4 = "Life on the Mississippi";
        $title5 = "A Connecticut Yankee in King Arthurs Court";

        echo $title1 ?>
        <img src="books/TheAdventuresOfTomSawyer.jpg" alt="An image of a book">
        <td>
        <?php  echo $title2 ?>
        <img src="books/AdventuresOfHuckleberryFinn.jpg" alt="An image of a book">
        </td></tr>
       
        <tr><td><?php  echo $title3 ?>    
        <img src="books/TheMysteriousStranger.jpg" alt="An image of a book">
       
        <td>
       <?php  echo $title4 ?>
        <img src="books/LifeOnTheMississippi.jpg" alt="An image of a book">
        </td></tr>
        
        <tr><td><?php  echo $title5 ?>
        <img src="books/AConnecticutYankeeInKingArthursCourt.jpg" alt="An image of a book">
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
