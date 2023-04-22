
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JackLondon</title>
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
<h1>Jack London</h1>
<br></br>

<div class="float-container">

    <div class="float-child-1">
    
<img src="images/JackLondon.jpg" alt="An image of JackLondon">
   
<h2>Biography</h2>
    <p>
    <br>
    <a href="https://en.wikipedia.org/wiki/Jack_London">Wikipedia</a>
    <br>
    John Griffith Chaney London (January 12, 1876 – November 22, 1916) was an American novelist, journalist and social activist. A pioneer of commercial fiction and American magazines, he was one of the first American authors to become an international celebrity and earn a large fortune from writing.[citation needed] He was also an innovator in the genre that would later become known as science fiction.[6]
    London was part of the radical literary group "The Crowd" in San Francisco and a passionate advocate of unionization, workers' rights, socialism, and eugenics
    He wrote several works dealing with these topics, such as his dystopian novel The Iron Heel, his non-fiction exposé The People of the Abyss, War of the Classes, and Before Adam.
    His most famous works include The Call of the Wild and White Fang, both set in the Klondike Gold Rush, as well as the short stories "To Build a Fire", "An Odyssey of the North", 
    and "Love of Life". He also wrote about the South Pacific in stories such as "The Pearls of Parlay", and "The Heathen".
    London was vulnerable to accusations of plagiarism, both because he was such a conspicuous, prolific, and successful writer and because of his methods of working. He wrote in a letter to Elwyn Hoffman, "expression, you see—with me—is far easier than invention." He purchased plots and novels from the young Sinclair Lewis and used incidents from newspaper clippings as writing material.[citation needed]
    In July 1901, two pieces of fiction appeared within the same month: London's "Moon-Face", in the San Francisco Argonaut, and Frank Norris' "The Passing of Cock-eye Blacklock", in Century Magazine. Newspapers showed the similarities between the stories, which London said were "quite different in manner of treatment, [but] patently the same in foundation and motive."[66] London explained both writers based their stories on the same newspaper account. A year later, it was discovered that Charles Forrest McLean had published a fictional story also based on the same incident.[67]
    Egerton Ryerson Young[68][69] claimed The Call of the Wild (1903) was taken from Young's book My Dogs in the Northland (1902). London acknowledged using it as a source and claimed to have written a letter to Young thanking him.[70]
    In 1906, the New York World published "deadly parallel" columns showing eighteen passages from London's short story "Love of Life" side by side with similar passages from a nonfiction article by Augustus Biddle and J. K. Macdonald, titled "Lost in the Land of the Midnight Sun".[71] London noted the World did not accuse him of "plagiarism", but only of "identity of time and situation", to which he defiantly "pled guilty".[72]
    The most serious charge of plagiarism was based on London's "The Bishop's Vision", Chapter 7 of his novel The Iron Heel (1908). The chapter is nearly identical to an ironic essay that Frank Harris published in 1901, titled "The Bishop of London and Public Morality".[73] Harris was incensed and suggested he should receive 1/60th of the royalties from The Iron Heel, the disputed material constituting about that fraction of the whole novel. London insisted he had clipped a reprint of the article, which had appeared in an American newspaper, and believed it to be a genuine speech delivered by the Bishop of London.
    </p>
<br></br>
    </div>
<div class="float-child-2">   
<h2>The Works of Jack London</h2>
   <br></br>
   <br></br>

   <table>
        <tr><td>
        <?php 
        $title1 = "White Fang";
        $title2 = "To Build a Fire";
        $title3 = "The Call of the Wild";
        $title4 = "Martin Eden";
        $title5 = "The Sea Wolf";

        echo $title1 ?>
        <img src="books/WhiteFang.jpg" alt="An image of a book">
        <td>
        <?php  echo $title2 ?>
        <img src="books/ToBuildAFire.jpg" alt="An image of a book">
        </td></tr>
       
        <tr><td><?php  echo $title3 ?>    
        <img src="books/TheCallOfTheWild.jpg" alt="An image of a book">
       
        <td>
       <?php  echo $title4 ?>
        <img src="books/MartinEden.jpg" alt="An image of a book">
        </td></tr>
        
        <tr><td><?php  echo $title5 ?>
        <img src="books/TheSeaWolf.jpg" alt="An image of a book">
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
