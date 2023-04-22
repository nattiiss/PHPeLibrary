
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgathaChristie</title>
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
<h1>Agatha Christie</h1>
<br></br>

<div class="float-container">

    <div class="float-child-1">
    
<img src="images/AgathaChristie.jpg" alt="An image of AgathaChristie">
   
<h2>Biography</h2>
    <p>
    <br>
    <a href="https://en.wikipedia.org/wiki/Agatha_Christie">Wikipedia</a>
    <br>
    Dame Agatha Mary Clarissa Christie, Lady Mallowan, DBE (née Miller; 15 September 1890 – 12 January 1976) was an English writer known for her 66 detective novels and 14 short story collections, particularly those revolving around fictional detectives Hercule Poirot and Miss Marple. She also wrote the world's longest-running play, The Mousetrap, which has been performed in the West End since 1952, as well as six novels under the pseudonym Mary Westmacott. In 1971, she was made a Dame (DBE) 
    for her contributions to literature. Guinness World Records lists Christie as the best-selling fiction writer of all time, her novels having sold more than two billion copies.
    Christie was born into a wealthy upper-middle-class family in Torquay, Devon, and was largely home-schooled. She was initially an unsuccessful writer with six consecutive rejections, 
    but this changed in 1920 when The Mysterious Affair at Styles, featuring detective Hercule Poirot, was published. Her first husband was Archibald Christie; they married in 1914 and 
    had one child before divorcing in 1928. During both World Wars, she served in hospital dispensaries, acquiring a thorough knowledge of the poisons which featured in many of her novels, short stories, and plays. Following her marriage to archaeologist Max Mallowan in 1930, she spent several months each year on digs in the Middle East and used her first-hand knowledge of this profession in her fiction.
    According to Index Translationum, she remains the most-translated individual author. Her novel And Then There Were None is one of the top-selling books of all time, with approximately 
    100 million copies sold. Christie's stage play The Mousetrap holds the world record for the longest initial run. It opened at the Ambassadors Theatre in the West End of London on 25
    November 1952, and by September 2018 there had been more than 27,500 performances. The play was closed down in March 2020 because of COVID-19 lockdowns and reopened in May 2021.
    In 1955, Christie was the first recipient of the Mystery Writers of America's Grand Master Award. Later that year, Witness for the Prosecution received an Edgar Award for best play. 
    In 2013, she was voted the best crime writer and The Murder of Roger Ackroyd the best crime novel ever by 600 professional novelists of the Crime Writers' Association. In September 2015, 
    And Then There Were None was named the "World's Favourite Christie" in a vote sponsored by the author's estate.[1] Most of Christie's books and short stories have been adapted for television, radio, video games, and graphic novels. More than 30 feature films are based on her work.
    </p>
<br></br>
    </div>
<div class="float-child-2">   
<h2>The Works of Agatha Christie</h2>
   <br></br>
   <br></br>

   <table>
        <tr><td>
        <?php 
        $title1 = "Murder on the Orient Express";
        $title2 = "Poirot sul Nilo";
        $title3 = "La maison biscornue";
        $title4 = "The Mysterious Affair at Styles";
        $title5 = "The Pale Horse";

        echo $title1 ?>
        <img src="books/MurderOnTheOrientExpress.jpg" alt="An image of a book">
        <td>
        <?php  echo $title2 ?>
        <img src="books/PoirotSulNilo.jpg" alt="An image of a book">
        </td></tr>
       
        <tr><td><?php  echo $title3 ?>    
        <img src="books/LaMaisonBiscornue.jpg" alt="An image of a book">
       
        <td>
       <?php  echo $title4 ?>
        <img src="books/TheMysteriousAffairAtStyles.jpg" alt="An image of a book">
        </td></tr>
        
        <tr><td><?php  echo $title5 ?>
        <img src="books/ThePaleHorse.jpg" alt="An image of a book">
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
