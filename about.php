<?php
$pageTitle = "About Project";
include "includes/header.php";
include "includes/nav.php";
include "includes/function.php";
?>

    <main class="w3-container">
        <h1>Why I chose Poke AI?</h1>
        <p> 
            As a Pokemon fan of the trading card game, and other card games such as Riftbound,
            I was drawn to the idea of creating a comprehensive search tool for Pokémon enthusiasts.

            I would like to make this website to where it is connected to Riftbound and Pokemon based.
            To look up cards in regards to that game. While also being able to look up the same character
            that is on that card.
        </p>
        <break></break>
        <h1>The data I Used.</h1>
        <p>
            I used the PokeAPI to get the data for this website. The PokeAPI is a free and open API that 
            provides data on all Pokémon, including their abilities, types, and stats. I used this API to 
            get the data for the Pokémon search tool.
        </p>
        <break></break>
        <h1> How PHP recieves and decodes JSON data </h1>
        <p>
            PHP has built-in functions for working with JSON data. The json_decode() function is used to decode JSON data into a PHP array or object. 
            In this project, I used the json_decode() function to decode the JSON data returned by the PokeAPI into a PHP array. 
            This allowed me to easily access the data and display it on the website.
        </p>
        <break></break>
        <h1> How AI Helped me within this project.</h1>
        <p>
            AI helped by breaking down the project into smaller parts and providing guidance on how to implement each part.
            It also helps by giving me feedback in regards to the code I have written and how to improve it. While
            coding, if i get stuck on why my pages are not connecting, I am able to ask AI for help and it will give me suggestions on how to fix the issue.
        </p>
        <h1>What did I personalize?</h1>
        <p>
            As of right now, I have personalized the website by adding my own CSS styles and images. 
            I plan to continue personalizing the website by adding more content and improving the overall look and feel of the website. 
            Since I do want to make this into a live website, so others can use it to. Also so furute employers can see my work and what I am capable of doing.
        </p>
    </main>

<?php include "includes/footer.php"; ?>

