
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HermanMelville</title>
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




<h1>HermanMelville</h1>
<br></br>

<div class="float-container">

    <div class="float-child-1">
    
    <img src="images/HermanMelville.jpg" alt="An image of HermanMelville">
<h2>Biography</h2>
    <p>
    <br>
    <a href="https://en.wikipedia.org/wiki/Herman_Melville">Wikipedia</a>
    <br>
Herman Melville (born Melvill;[a] August 1, 1819 – September 28, 1891) was an American novelist, short story writer, and poet of the American 
Renaissance period. Among his best-known works are Moby-Dick (1851); Typee (1846), a romanticized account of his experiences in Polynesia; and Billy Budd, Sailor, a posthumously published novella. Although his reputation was not high at the time of his death, the 1919 centennial 
of his birth was the starting point of a Melville revival, and Moby-Dick grew to be considered one of the great American novels.
Melville was born in New York City, the third child of a prosperous merchant whose death in 1832 left the family in dire financial straits. He took to 
sea in 1839 as a common sailor on a merchant ship and then on the whaler Acushnet, but he jumped ship in the Marquesas Islands. Typee, his first book, and its sequel, Omoo (1847), were travel-adventures based on his encounters with the peoples of the island. Their success gave him the financial security to marry Elizabeth Shaw, the daughter of the Boston jurist Lemuel Shaw. Mardi (1849), a romance-adventure and his first book not based on his own experience, was not well received. 
Redburn (1849) and White-Jacket (1850), both tales based on his experience as a well-born young man at sea, were given respectable reviews, but did 
not sell well enough to support his expanding family.
Melville's growing literary ambition showed in Moby-Dick (1851), which took nearly
a year and a half to write, but it did not find an audience, and critics scorned his psychological novel Pierre: or, The Ambiguities (1852). 
From 1853 to 1856, Melville published short fiction in magazines, including "Benito Cereno" and "Bartleby, the Scrivener". In 1857, he traveled to 
England, toured the Near East, and published his last work of prose, The Confidence-Man (1857). He moved to New York in 1863, eventually taking a
position as United States customs inspector.
From that point, Melville focused his creative powers on poetry. Battle-Pieces and Aspects of the War (1866) was his poetic reflection on the moral 
questions of the American Civil War. In 1867, his eldest child Malcolm died at home from a self-inflicted gunshot. Melville's metaphysical epic Clarel: 
A Poem and Pilgrimage in the Holy Land was published in 1876. In 1886, his other son Stanwix died of apparent tuberculosis, and Melville retired. 
During his last years, he privately published two volumes of poetry, and left one volume unpublished. The novella Billy Budd was left unfinished at his 
death, but was published posthumously in 1924. Melville died from cardiovascular disease in 1891.
</p>
<br></br>
    </div>
<div class="float-child-2">   
<h2>The Works of Herman Melville</h2>
   <br></br>
   <br></br>

   <table>
        <tr><td>
        <?php 
        $title1 = "Moby Dick";
        $title2 = "Billy Budd";
        $title3 = "White Jacket";
        $title4 = "Redburn";
        $title5 = "Typee";

        echo $title1 ?>
        <img src="books/MobyDick.jpg" alt="An image of a book">
        <td>
        <?php  echo $title2 ?>
        <img src="books/BillyBudd.jpg" alt="An image of a book">
        </td></tr>
       
        <tr><td><?php  echo $title3 ?>    
        <img src="books/WhiteJacket.jpg" alt="An image of a book">
       
        <td>
       <?php  echo $title4 ?>
        <img src="books/Redburn.jpg" alt="An image of a book">
        </td></tr>
        
        <tr><td><?php  echo $title5 ?>
        <img src="books/Typee.jpg" alt="An image of a book">
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