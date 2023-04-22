
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StephenKing</title>
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
<h1>Stephen King</h1>
<br></br>

<div class="float-container">

    <div class="float-child-1">
    
<img src="images/StephenKing.jpg" alt="An image of StephenKing">
   
<h2>Biography</h2>
    <p>
    <br>
    <a href="https://en.wikipedia.org/wiki/Stephen_King">Wikipedia</a>
    <br>
    Stephen Edwin King (born September 21, 1947) is an American author of horror, supernatural fiction, suspense, crime, science-fiction, and fantasy novels. Described as the "King of 
    Horror", a play on his surname and a reference to his high standing in pop culture,his books have sold more than 350 million copies,[3] and many have been adapted into films, 
    television series, miniseries, and comic books. King has published 64 novels, including seven under the pen name Richard Bachman, and five non-fiction books.[4] He has also written 
    approximately 200 short stories, most of which have been published in book collections.
    King has received Bram Stoker Awards, World Fantasy Awards, and British Fantasy Society Awards. In 2003, the National Book Foundation awarded him the Medal for Distinguished 
    Contribution to American Letters.He has also received awards for his contribution to literature for his entire bibliography, such as the 2004 World Fantasy Award for Life 
    Achievement and the 2007 Grand Master Award from the Mystery Writers of America.In 2015, he was awarded with a National Medal of Arts from the U.S. National Endowment for the 
    Arts for his contributions to literature.
    King's formula for learning to write well is: "Read and write four to six hours a day. If you cannot find the time for that, you can't expect to become a good writer." He sets out 
    each day with a quota of 2000 words and will not stop writing until it is met. He also has a simple definition for talent in writing: "If you wrote something for which someone sent you 
    a check, if you cashed the check and it didn't bounce, and if you then paid the light bill with the money, I consider you talented."
    When asked why he writes, King responds: "The answer to that is fairly simple—there was nothing else I was made to do. I was made to write stories and I love to write stories. 
    That's why I do it. I really can't imagine doing anything else and I can't imagine not doing what I do."[105] He is also often asked why he writes such terrifying stories and he 
    answers with another question: "Why do you assume I have a choice?"[106] King usually begins the story creation process by imagining a 
    "what if" scenario, such as what would happen if a writer is kidnapped by a sadistic nurse in Colorado.King often uses authors as characters, or includes mention of fictional books in 
    his stories, novellas and novels, such as Paul Sheldon, who is the main character in Misery, adult Bill Denbrough in It, Ben Mears in 'Salem's Lot, and Jack Torrance in The Shining. 
    He has extended this to breaking the fourth wall by including himself as a character in The Dark Tower series from The Dark Tower V: Wolves of the Calla onwards. In September 2009 it 
    was announced he would serve as a writer for Fangoria.
    </p>
<br></br>
    </div>
<div class="float-child-2">   
<h2>The Works of Stephen King</h2>
   <br></br>
   <br></br>

   <table>
        <tr><td>
        <?php 
        $title1 = "It";
        $title2 = "The Shining";
        $title3 = "The Stand";
        $title4 = "Carrie";
        $title5 = "Misery";

        echo $title1 ?>
        <img src="books/It.jpg" alt="An image of a book">
        <td>
        <?php  echo $title2 ?>
        <img src="books/TheShining.jpg" alt="An image of a book">
        </td></tr>
       
        <tr><td><?php  echo $title3 ?>    
        <img src="books/TheStand.jpg" alt="An image of a book">
       
        <td>
       <?php  echo $title4 ?>
        <img src="books/Carrie.jpg" alt="An image of a book">
        </td></tr>
        
        <tr><td><?php  echo $title5 ?>
        <img src="books/Misery.jpg" alt="An image of a book">
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
