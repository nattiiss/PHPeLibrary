
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AntonChekov</title>
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
<h1>Anton Chekov</h1>
<br></br>

<div class="float-container">

    <div class="float-child-1">
    
<img src="images/Chekov.jpg" alt="An image of Anton Chekov">
   
<h2>Biography</h2>
    <p>
    <br>
    <a href="https://en.wikipedia.org/wiki/Anton_Chekhov">Wikipedia</a>
    <br>
    Anton Pavlovich Chekhov (Russian: Антон Павлович Чехов[note 1], IPA: 29 January 1860[note 2] – 15 July 1904[note 3]) 
    was a Russian[3] playwright and short-story writer who is considered to be one of the greatest writers of all time. His career as a playwright produced four classics, and his 
    best short stories are held in high esteem by writers and critics.[4][5] Along with Henrik Ibsen and August Strindberg, Chekhov is often referred to as one of the three seminal 
    figures in the birth of early modernism in the theatre.[6] Chekhov was a physician by profession. "Medicine is my lawful wife", he once said, "and literature is my mistress."
    Chekhov renounced the theatre after the reception of The Seagull in 1896, but the play was revived to acclaim in 1898 by Konstantin Stanislavski's Moscow Art Theatre, which 
    subsequently also produced Chekhov's Uncle Vanya and premiered his last two plays, Three Sisters and The Cherry Orchard. These four works present a challenge to the acting ensemble
    as well as to audiences, because in place of conventional action Chekhov offers a "theatre of mood" and a "submerged life in the text".[9] The plays that Chekhov wrote were not complex, but easy to follow, and created a somewhat haunting atmosphere for the audience.[3]
    Chekhov at first wrote stories to earn money, but as his artistic ambition grew, he made formal innovations that influenced the evolution of the modern short story. 
    He made no apologies for the difficulties this posed to readers, insisting that the role of an artist was to ask questions, not to answer them.
    A few months before he died, Chekhov told the writer Ivan Bunin that he thought people might go on reading his writings for seven years. "Why seven?" asked Bunin. "Well, seven and a half," Chekhov replied. "That's not bad. I've got six years to live."[102] Chekhov's posthumous reputation greatly exceeded his expectations. The ovations for the play The Cherry Orchard in the year of his death served 
    to demonstrate the Russian public's acclaim for the writer, which placed him second in literary celebrity only to Tolstoy, who outlived him by six years. Tolstoy was an early admirer of Chekhov's short stories and had a series that he deemed "first quality" and "second quality" bound into a book. In the first category were: Children, The Chorus Girl, A Play, Home, Misery, The Runaway, In Court, Vanka, Ladies, A Malefactor, The Boys, Darkness, Sleepy, The Helpmate, and The Darling; in the second: A Transgression, Sorrow, The Witch, Verochka, In a Strange Land, The Cook's Wedding, A Tedious Business, An Upheaval, Oh! The Public!, The Mask, A Woman's Luck, Nerves, The Wedding, A Defenceless Creature, and Peasant Wives.[103]
    Chekhov's work also found praise from several of Russia's most influential radical political thinkers. If anyone doubted the gloom and miserable poverty of Russia in the 1880s, the anarchist theorist Peter Kropotkin responded, "read only Chekhov's novels!"[104] Raymond Tallis further recounts that Vladimir Lenin believed his reading of the short story Ward No. 6 "made him a revolutionary."[105] Upon finishing the story, Lenin is said to have remarked: "I absolutely had the feeling that I was shut up in Ward 6 myself!"
    </p>
<br></br>
    </div>
<div class="float-child-2">   
<h2>The Works of Anton Chekov</h2>
   <br></br>
   <br></br>

   <table>
        <tr><td>
        <?php 
        $title1 = "The Chameleon";
        $title2 = "Fat and Thin";
        $title3 = "About Love";
        $title4 = "The Man in a Case";
        $title5 = "The cherry Orchard";

        echo $title1 ?>
        <img src="books/TheChameleon.jpg" alt="An image of a book">
        <td>
        <?php  echo $title2 ?>
        <img src="books/FatAndThin.jpg" alt="An image of a book">
        </td></tr>
       
        <tr><td><?php  echo $title3 ?>    
        <img src="books/AboutLove.jpg" alt="An image of a book">
       
        <td>
       <?php  echo $title4 ?>
        <img src="books/TheManInACase.jpg" alt="An image of a book">
        </td></tr>
        
        <tr><td><?php  echo $title5 ?>
        <img src="books/TheCherryOrchard.jpg" alt="An image of a book">
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
