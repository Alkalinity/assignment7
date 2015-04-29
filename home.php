<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Burlington Eats!</title>
        <meta charset="utf-8">
        <meta name="description"
              content="Burlington Eats Home Page" />
        <meta name ="robots"
              content="noindex" />
        <meta name="author" content="Samuel Pakulski">
        <link href="css/style.css" type="text/css"
              rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
        include "header.php";
        include "nav.php";
        ?>
        <article>
            <h2 class="today">Featured Restaurant</h2>
            <aside class="featured">
                <figure>
                    <img class="flatBread" src="images/american_flatbread.jpg" title="American Flatbread, Burlington Vermont" alt="American Flatbread, Burlington Vermont">
                    <figcaption>
                        <h2>American Flatbread, Zero Gravity Brewery</h2>
                        <p><a href="http://americanflatbread.com/">Website</a> - <a href="https://www.google.com/maps/place/American+Flatbread+Burlington+Hearth/@44.476545,-73.21428,17z/data=!3m1!4b1!4m2!3m1!1s0x4cca7af7633dc29d:0xe42126a31948a463?hl=en">Location</a> - <a href="http://americanflatbread.com/restaurants/burlington-vt/burlington-menu/">Menu</a></p>
                    </figcaption>
                </figure>
            </aside>
            <h2>Nepali Dumpling House, Now Open</h2>
            <aside class="content">
                <img src="images/dumplings.jpg" class="dumpling" title="Nepali Dumplings" alt="Nepali Dumplings">
                <p>Located on 78 North Street Burlington, the former African Safari Market has now become the Nepali Dumpling House. Owner Goma Khadaka has transformed the space into a mini Nepali store, offering items from Nepali food to traditional clothing and items. The only drawback of this delicious location is the lack of a dining area!</p>
                <p class="info"><a href="https://www.google.com/maps/place/78+North+St,+Burlington,+VT+05401/@44.4847012,-73.21908,17z/data=!3m1!4b1!4m2!3m1!1s0x4cca7aed706a1c93:0x8001b7b747f26c95">Location And Directions</a> - 78 North Street, Burlington Vermont, 05405 </p>
                <div class="push"></div>
            </aside>
            <h2>Doughnuts Coming to Burlington</h2>
            <aside class="content">
                <img src="images/donut.jpg" class="donut" title="Gourmet Donut" alt="Gourmet Donut">
                <p>Looking to start her own store, Michelle Cunningham has been running a home bakery, supplying local farmer markets with delicious donuts. Planning on moving in next to <a href=”http://www.maplestreetcatering.com/piggery.html” >Big Fatty’s BBQ</a>, the store will serve as a bakery and coffe shop. <a href=”https://www.ugvermont.com/”>The Uncommon Grounds</a> will be supplying tea and coffee to compliment the baked goods. The opening will come with an upgrade to her kitchen, and the debut of new donut flavors.</p>
                <p class="info">Coming to Burlington Soon!</p>
                <div class="push"></div>
            </aside>
            <!--<p class="links"><a href="">Click Here For Later Posts</a></p> -->
        </article>
        <?php
        include "footer.php";
        ?>
    </body>
</html>
