
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RayBradbyry</title>
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
<h1>Ray Bradbyry</h1>
<br></br>

<div class="float-container">

    <div class="float-child-1">

    <img src="images/RayBradbury.jpg" alt="An image of RayBradbury">
<h2>Biography</h2>
    <p>
    <br>
    <a href="https://en.wikipedia.org/wiki/Ray_Bradbury">Wikipedia</a>
    <br>
    Ray Douglas Bradbury (August 22, 1920 – June 5, 2012) was an American author and screenwriter. One of the most celebrated 20th-century 
    American writers, he worked in a variety of modes, including fantasy, science fiction, horror, mystery, and realistic fiction.[3]

Bradbury was mainly known for his novel Fahrenheit 451 (1953) and his short-story collections The Martian Chronicles (1950) and The Illustrated Man (1951).
Most of his best known work is speculative fiction, but he also worked in other genres, such as the coming of age novel Dandelion Wine (1957) and the fictionalized memoir 
Green Shadows, White Whale (1992). He also wrote and consulted on screenplays and television scripts, including Moby Dick and It Came from Outer Space. Many of his works were 
adapted into television and film productions as well as comic books.
The New York Times called Bradbury "the writer most responsible for bringing modern science fiction into the literary mainstream.
Throughout his youth, Bradbury was an avid reader and writer and knew at a young age that he was "going into one of the arts."Bradbury began writing his own stories at age 12 
(1931) —sometimes writing on butcher paper.In his youth, he spent much time in the Carnegie Library in Waukegan, reading such authors as H. G. Wells, Jules Verne, and Edgar Allan Poe.
At 12, Bradbury began writing traditional horror stories and said he tried to imitate Poe until he was about 18.[15] In addition to comics, he loved the work of Edgar Rice Burroughs, creator of Tarzan of the Apes, especially Burroughs' John Carter of Mars series. The Warlord of Mars impressed him so much that at the age of 12, he wrote his own sequel.[16][17] The young Bradbury was also a cartoonist and loved to illustrate. He wrote about Tarzan and drew his own Sunday panels. 
He listened to the radio show Chandu the Magician, and every night when the show went off the air, he would sit and write the entire script from memory.
As a teen in Beverly Hills, he often visited his mentor and friend science-fiction writer Bob Olsen, sharing ideas and maintaining contact. In 1936, at a secondhand bookstore in 
Hollywood, Bradbury discovered a handbill promoting meetings of the Los Angeles Science Fiction Society.[19] Excited to find that others shared his interest, Bradbury joined a weekly 
Thursday-night conclave at age 16.
Bradbury cited H. G. Wells and Jules Verne as his primary science-fiction influences. Bradbury identified with Verne, saying, "He believes the human being is in a strange situation 
in a very strange world, and he believes that we can triumph by behaving morally". Bradbury admitted that he stopped reading science-fiction books in his 20s and embraced a 
broad field of literature that included poets Alexander Pope and John Donne. Bradbury had just graduated from high school when he met Robert Heinlein, then 31 years old. 
Bradbury recalled, "He was well known, and he wrote humanistic science fiction, which influenced me to dare to be human instead of mechanical."
In young adulthood Bradbury read stories published in Astounding Science Fiction, and read everything by Robert A. Heinlein, Arthur C. Clarke, and the early writings of 
Theodore Sturgeon and A. E. van Vogt.

</p>
<br></br>
    </div>
<div class="float-child-2">   
<h2>The Works of Richard Feynman</h2>
   <br></br>
   <br></br>

   <table>
        <tr><td>
        <?php 
        $title1 = "Dandelion Wine";
        $title2 = "The Halloween Tree";
        $title3 = "The Martian Chronicles";
        $title4 = "From the Dust Returned";
        $title5 = "The October Country";

        echo $title1 ?>
        <img src="books/DandelionWine.jpg" alt="An image of a book">
        <td>
        <?php  echo $title2 ?>
        <img src="books/TheHalloweenTree.jpg" alt="An image of a book">
        </td></tr>
       
        <tr><td><?php  echo $title3 ?>    
        <img src="books/TheMartianChronicles.jpg" alt="An image of a book">
       
        <td>
       <?php  echo $title4 ?>
        <img src="books/FromTheDustReturned.jpg" alt="An image of a book">
        </td></tr>
        
        <tr><td><?php  echo $title5 ?>
        <img src="books/TheOctoberCountry.jpg" alt="An image of a book">
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
