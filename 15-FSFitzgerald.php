
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.Scott Fitzgerald</title>
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
<h1>F.Scott Fitzgerald</h1>
<br></br>

<div class="float-container">

    <div class="float-child-1">
    
<img src="images/Fitzgerald.jpg" alt="An image of Fitzgerald">
 
<h2>Biography</h2>
    <p>
    <br>
    <a href="https://en.wikipedia.org/wiki/F._Scott_Fitzgerald">Wikipedia</a>
    <br>
    Francis Scott Key Fitzgerald (September 24, 1896 – December 21, 1940) was an American novelist, essayist, short story writer, and screenwriter. 
    He is best known for his novels depicting the flamboyance and excess of the Jazz Age—a term he popularized. During his lifetime, he published four novels, four story collections, and 164 short stories. Although he achieved 
    temporary popular success and fortune in the 1920s, Fitzgerald received critical acclaim only after his death and is now widely regarded as one of the greatest American writers of the 20th century.
    Born into a middle-class family in Saint Paul, Minnesota, Fitzgerald was raised primarily in New York state. He attended Princeton University where he befriended future literary critic 
    Edmund Wilson. Owing to a failed romantic relationship with Chicago socialite Ginevra King, he dropped out in 1917 to join the United States Army during World War I. While stationed in 
    Alabama, he met Zelda Sayre, a Southern debutante who belonged to Montgomery's exclusive country-club set. Although she initially rejected Fitzgerald's marriage proposal due to his 
    lack of financial prospects, Zelda agreed to marry him after he published the commercially successful This Side of Paradise (1920). The novel became a cultural sensation and cemented
    his reputation as one of the eminent writers of the decade.
    His second novel, The Beautiful and Damned (1922), propelled him further into the cultural elite. To maintain his affluent lifestyle, he wrote numerous stories for popular magazines 
    such as The Saturday Evening Post, Collier's Weekly, and Esquire. During this period, Fitzgerald frequented Europe, where he befriended modernist writers and artists of the 
    "Lost Generation" expatriate community, including Ernest Hemingway. His third novel, The Great Gatsby (1925), received generally favorable reviews but was a commercial failure, selling fewer than 23,000 copies in its first year. Despite its lackluster debut, The Great Gatsby is now hailed by some literary critics as the "Great American Novel". Following the deterioration of his wife's mental health and her placement in a mental institute for schizophrenia, Fitzgerald completed his final novel, Tender Is the Night (1934).
    Struggling financially because of the declining popularity of his works amid the Great Depression, Fitzgerald moved to Hollywood where he embarked upon an unsuccessful career as a 
    screenwriter. While living in Hollywood, he cohabited with columnist Sheilah Graham, his final companion before his death. After a long struggle with alcoholism, he attained sobriety 
    only to die of a heart attack in 1940, at 44. His friend Edmund Wilson completed and published an unfinished fifth novel, The Last Tycoon (1941), after Fitzgerald's death.
    </p>
<br></br>
    </div>
<div class="float-child-2">   
<h2>The Works of F.Scott Fitzgerald</h2>
   <br></br>
   <br></br>

   <table>
        <tr><td>
        <?php 
        $title1 = "The Great Gatsby";
        $title2 = "Tender Is the Night";
        $title3 = "This Side of Paradise";
        $title4 = "The Beautiful and Damned";
        $title5 = "Winter Dreams";

        echo $title1 ?>
        <img src="books/TheGreatGatsby.jpg" alt="An image of a book">
        <td>
        <?php  echo $title2 ?>
        <img src="books/TenderIsTheNight.jpg" alt="An image of a book">
        </td></tr>
       
        <tr><td><?php  echo $title3 ?>    
        <img src="books/ThisSideOfParadise.jpg" alt="An image of a book">
       
        <td>
       <?php  echo $title4 ?>
        <img src="books/TheBeautifulAndDamned.jpg" alt="An image of a book">
        </td></tr>
        
        <tr><td><?php  echo $title5 ?>
        <img src="books/WinterDreams.jpg" alt="An image of a book">
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
