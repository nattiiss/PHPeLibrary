
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnnaGavalda</title>
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
<h1>Anna Gavalda</h1>
<br></br>

<div class="float-container">

    <div class="float-child-1">
    
<img src="images/AnnaGavalda.jpg" alt="An image of AnnaGavalda">
   
<h2>Biography</h2>
    <p>
    <br>
    <a href="https://en.wikipedia.org/wiki/Anna_Gavalda">Wikipedia</a>
    <br>
    Anna Gavalda (born 23 May 1970 in Boulogne-Billancourt, Hauts-de-Seine)[1] is a French teacher and award-winning novelist.Referred to by Voici magazine as "a distant descendant of Dorothy Parker", Anna Gavalda was born in an upper-class suburb of Paris. 
    She was working as a French teacher in high school when a collection of her short stories was first published in 1999 under the title Je voudrais que quelqu'un m'attende quelque part that met with both critical acclaim and commercial success, selling more than three-quarters of 
    a million copies in her native France and winning the 2000 Grand prix RTL-Lire. The book was translated into numerous languages, including English, and sold in twenty-seven countries. It was published to acclaim in North America in 2003 as I Wish Someone Were Waiting for Me Somewhere. The book received much praise and is a library and school selection worldwide in several languages.
    Gavalda's first novel, Je l'aimais (Someone I Loved) was published in France in February 2002 and later that year in English. Inspired by the failure of her own marriage, it too was a major literary success and a bestseller and was followed by the short (96 pages) young adult novel 35 kilos d'espoir (95 Pounds of Hope) that she said she wrote "to pay tribute to those of my students who were dunces in school but otherwise fantastic people".
    In 2004, her third novel, Hunting and Gathering (Ensemble, c'est tout), focused on the lives of four people living in an apartment house: a struggling young artist who works as an office cleaner at night, a young aristocrat misfit, a cook, and an elderly grandmother. The 600-page book is a bestseller 
    in France and has been translated into English as Hunting and Gathering.
    As of 2007, her three books have sold more than 3 million copies in France.[2] Hunting and Gathering was made into a film in 2007 by Claude Berri, with Audrey Tautou and Guillaume Canet.[3] The adaptation of her first novel, Je l'aimais, with Daniel Auteuil and Marie-Josée Croze, was filmed in 2009 by Zabou Breitman.[4]
    She has also translated into French John William's novel Stoner.In March 2018, Anna Gavalda appeared in the African media as one of the finalists of the Grand Prix of Literary Associations 2017.[6] She was shortlisted in the Belles-Lettres Category for her collection of short stories entitled Fendre l'armure, that was released in 2017
    
</p>
<br></br>
    </div>
<div class="float-child-2">   
<h2>The Works of Anna Gavalda</h2>
   <br></br>
   <br></br>

   <table>
        <tr><td>
        <?php 
        $title1 = "95 Pounds of Hope";
        $title2 = "La Consolante";
        $title3 = "Someone I loved";
        $title4 = "French Leave";
        $title5 = "Consolante";

        echo $title1 ?>
        <img src="books/95PoundsOfHope.jpg" alt="An image of a book">
        <td>
        <?php  echo $title2 ?>
        <img src="books/LaConsolante.jpg" alt="An image of a book">
        </td></tr>
       
        <tr><td><?php  echo $title3 ?>    
        <img src="books/SomeoneILoved.jpg" alt="An image of a book">
       
        <td>
       <?php  echo $title4 ?>
        <img src="books/FrenchLeave.jpg" alt="An image of a book">
        </td></tr>
        
        <tr><td><?php  echo $title5 ?>
        <img src="books/Consolante.jpg" alt="An image of a book">
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
