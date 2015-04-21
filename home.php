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
    </head>
    <body>
        <?php
            include "header.php";
            include "nav.php";
        ?>
        <article>
            <h2 class="today">Featured Restaurant</h2>
            <figure>
                <img class="flatBread" src="images/american_flatbread.jpg" title="American Flatbread, Burlington Vermont" alt="American Flatbread, Burlington Vermont">
                <figcaption>
                    <h2>American Flatbread, Zero Gravity Brewery</h2>
                    <p><a href="http://americanflatbread.com/">Website</a> - <a href="https://www.google.com/maps/place/American+Flatbread+Burlington+Hearth/@44.476545,-73.21428,17z/data=!3m1!4b1!4m2!3m1!1s0x4cca7af7633dc29d:0xe42126a31948a463?hl=en">Location</a> - <a href="http://americanflatbread.com/restaurants/burlington-vt/burlington-menu/">Menu</a></p>
                </figcaption>
            </figure>
            <h2>Nepali Dumpling House, Opens</h2>
            <aside>
                <img src="images/dumplings.jpg" class="dumpling" title="Nepali Dumplings" alt="Nepali Dumplings">
                <p>Located on 78 North Street Burlington, the former African Safari Market has now become the Nepali Dumpling House. Owner Goma Khadaka has transformed the space into a mini Nepali store, offering items from Nepali food to traditional clothing and items. The only drawback of this delicious location is the lack of a dining area!</p>
                <p class="info"><a href="https://www.google.com/maps/place/78+North+St,+Burlington,+VT+05401/@44.4847012,-73.21908,17z/data=!3m1!4b1!4m2!3m1!1s0x4cca7aed706a1c93:0x8001b7b747f26c95">Location And Directions</a> - 78 North Street, Burlington Vermont, 05446 </p>
                <div class="push"></div>
            </aside>
        </article>
        <?php
            include "footer.php";
        ?>
    </body>
</html>
