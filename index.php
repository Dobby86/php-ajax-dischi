<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="my.css">


        </script>
        <title>dischi php</title>
    </head>

    <body>
        <header>
            <div class="container">
                <img src="img/logo.png" alt="logo" />
            </div>
        </header>
        <!-- includiamo php -->
        <?php

        include "database.php";

         ?>

        <div class="cds-container container">
            <!-- inseriamo il php nei div -->

            <?php
            foreach ($database as $album) {
                ?>

            <div class="cd" >
                <img src="<?php echo $album["poster"] ;?>" alt="">
                <h3>"<?php echo $album["title"] ;?>"</h3>
                <span class="author">"<?php echo $album["author"] ;?>"</span>
                <span class="year">"<?php echo $album["year"] ;?>"</span>
            </div>

            <?php  }?>

        </div>
        <!-- quando importiamo il php l'handlebars si commenta -->
<!--
        <script id="entry-template" type="text/x-handlebars-template"> -->

          <!-- </script> -->

        <!-- <script src="main.js" charset="utf-8"></script> -->



    </body>
</html>
