
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HuntherThompson</title>
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
<h1>Hunther Thompson</h1>
<br></br>

<div class="float-container">

    <div class="float-child-1">
    
<img src="images/HuntherThompson.jpg" alt="An image of HuntherThompson">
   
<h2>Biography</h2>
    <p>
    <br>
    <a href="https://en.wikipedia.org/wiki/Hunter_S._Thompson">Wikipedia</a>
    <br>
    Hunter Stockton Thompson (July 18, 1937 – February 20, 2005) was an American journalist and author who founded the gonzo journalism movement. He rose to prominence with the publication of Hell's Angels (1967), a book for which he spent a year living and riding with the Hells Angels motorcycle gang to write a first-hand account of their lives and experiences.
    In 1970, he wrote an unconventional magazine feature titled "The Kentucky Derby Is Decadent and Depraved" for Scanlan's Monthly, which raised his profile and established his counterculture credibility. It also set him on the path to establishing his own subgenre of New Journalism that he called "Gonzo", a journalistic style in which the writer becomes a central figure and participant in the events of the narrative.
    Thompson remains best known for Fear and Loathing in Las Vegas (1971), a book first serialized in Rolling Stone in which he grapples with the implications of what he considered the failure of the 1960s counterculture movement. It was adapted for film twice: loosely in Where the Buffalo Roam starring Bill Murray as Thompson in 1980, and explicitly in 1998 by director Terry Gilliam in the eponymous film starring Johnny Depp and Benicio del Toro.
    Thompson ran unsuccessfully for sheriff of Pitkin County, Colorado in 1970 on the Freak Power ticket. His campaign was chronicled in the documentary film Freak Power: The Ballot or the Bomb. He became known for his dislike of Richard Nixon, who he claimed represented "that dark, venal, and incurably violent side of the American character".[2] He covered Nixon's 1972 reelection campaign for Rolling Stone and later collected the stories in book form as Fear and Loathing on the Campaign Trail '72.
    Thompson's output declined from the mid-1970s, as he struggled with the consequences of fame, and complained that he could no longer merely report on events, as he was too easily recognized. After several high-profile stories were quashed by the upper management of Rolling Stone, he found it increasingly difficult to get his work into mainstream outlets. He did continue to write for alternative newspapers, and had a gig as a critic for the mainstream San Francisco Examiner for much of the late 1980s and early 1990s. Most of 
    his work from 1979 to 1994 was collected in The Gonzo Papers. He continued to write for various journalism outlets in a variety of formats, including sporadic stories published in Rolling Stone and a weekly column that appeared on ESPN.com's Page 2 titled "Hey, Rube" that he started in 2000.
    He was known for his lifelong use of alcohol and illegal narcotics, his love of firearms, and his iconoclastic contempt for authority. He often remarked: "I hate to advocate drugs, alcohol, violence, or insanity to anyone, but they've always worked for me."[3] Thompson died by suicide at the age of 67, following a series of health problems. 
    In accordance with his wishes, his ashes were fired out of a cannon in a ceremony funded by his friend Johnny Depp and attended by friends including then-Senator John Kerry and Jack Nicholson. Hari Kunzru wrote, "the true voice of Thompson is revealed to be that of American moralist ... one who often makes himself ugly to expose the ugliness he sees around him.
    </p>
<br></br>
    </div>
<div class="float-child-2">   
<h2>The Works of Hunther Thompson</h2>
   <br></br>
   <br></br>

   <table>
        <tr><td>
        <?php 
        $title1 = "Fear and Loathing in Las Vegas";
        $title2 = "The Rum Diary";
        $title3 = "Fear and Loathing";
        $title4 = "The Great Shark Hunt";
        $title5 = "Gonzo";

        echo $title1 ?>
        <img src="books/FearAndLoathingInLasVegas.jpg" alt="An image of a book">
        <td>
        <?php  echo $title2 ?>
        <img src="books/TheRumDiary.jpg" alt="An image of a book">
        </td></tr>
       
        <tr><td><?php  echo $title3 ?>    
        <img src="books/FearAndLoathing.jpg" alt="An image of a book">
       
        <td>
       <?php  echo $title4 ?>
        <img src="books/TheGreatSharkHunt.jpg" alt="An image of a book">
        </td></tr>
        
        <tr><td><?php  echo $title5 ?>
        <img src="books/Gonzo.jpg" alt="An image of a book">
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
