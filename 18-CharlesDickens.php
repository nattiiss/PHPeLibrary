
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CharlesDickens</title>
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
<h1>Charles Dickens</h1>
<br></br>

<div class="float-container">

    <div class="float-child-1">
    
<img src="images/CharlesDickens.jpg" alt="An image of CharlesDickens">
   
<h2>Biography</h2>
    <p>
    <br>
    <a href="https://en.wikipedia.org/wiki/Charles_Dickens">Wikipedia</a>
    <br>
    Charles John Huffam Dickens FRSA (7 February 1812 – 9 June 1870) was an English writer and social critic. He created some of the world's best-known fictional characters and is regarded by many as the greatest novelist of the Victorian era.[1] His works enjoyed unprecedented popularity during his lifetime and, by the 20th century, critics and scholars had recognised him as a literary genius. His novels and short stories are widely read today.[2][3]
    Born in Portsmouth, Dickens left school at the age of 12 to work in a boot-blacking factory when his father was incarcerated in a debtors' prison. After three years he returned to school, before he began his literary career as a journalist. Dickens edited a weekly journal for 20 years, wrote 15 novels, five novellas, hundreds of short stories and non-fiction articles, lectured and performed readings extensively, was an indefatigable letter writer, and campaigned vigorously for children's rights, for education, and for other social reforms.
    Dickens's literary success began with the 1836 serial publication of The Pickwick Papers, a publishing phenomenon—thanks largely to the introduction of the character Sam Weller in the fourth episode—that sparked Pickwick merchandise and spin-offs. Within a few years Dickens had become an international literary celebrity, famous for his humour, satire and keen observation of character and society. His novels, most of them published in monthly or weekly instalments, pioneered the serial publication of narrative fiction, which became the
    dominant Victorian mode for novel publication.[4][5] Cliffhanger endings in his serial publications kept readers in suspense.[6] The instalment format allowed Dickens to evaluate his 
    audience's reaction, and he often modified his plot and character development based on such feedback.[5] For example, when his wife's chiropodist expressed distress at the way Miss 
    Mowcher in David Copperfield seemed to reflect her own disabilities, Dickens improved the character with positive features.[7] His plots were carefully constructed and he often wove 
    elements from topical events into his narratives.[8] Masses of the illiterate poor would individually pay a halfpenny to have each new monthly episode read to them, opening up and 
    inspiring a new class of readers.
    His 1843 novella A Christmas Carol remains especially popular and continues to inspire adaptations in every artistic genre. Oliver Twist and Great Expectations are also frequently 
    adapted and, like many of his novels, evoke images of early Victorian London. His 1859 novel A Tale of Two Cities (set in London and Paris) is his best-known work of historical fiction. The most famous celebrity of his era, he undertook, in response to public demand, a series of public reading tours in the later part of his career.[10] The term Dickensian is used to describe something that is reminiscent of Dickens and his writings, such as poor social or working conditions, or comically repulsive characters
    </p>
<br></br>
    </div>
<div class="float-child-2">   
<h2>The Works of Charles Dickens</h2>
   <br></br>
   <br></br>

   <table>
        <tr><td>
        <?php 
        $title1 = "Oliver Twist";
        $title2 = "David Copperfield";
        $title3 = "A Tale of Two Cities";
        $title4 = "Great Expectations";
        $title5 = "The Pickwick Papers";

        echo $title1 ?>
        <img src="books/OliverTwist.jpg" alt="An image of a book">
        <td>
        <?php  echo $title2 ?>
        <img src="books/DavidCopperfield.jpg" alt="An image of a book">
        </td></tr>
       
        <tr><td><?php  echo $title3 ?>    
        <img src="books/ATaleOfTwoCities.jpg" alt="An image of a book">
       
        <td>
       <?php  echo $title4 ?>
        <img src="books/GreatExpectations.jpg" alt="An image of a book">
        </td></tr>
        
        <tr><td><?php  echo $title5 ?>
        <img src="books/ThePickwickPapers.jpg" alt="An image of a book">
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
