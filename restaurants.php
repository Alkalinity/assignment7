<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Burlington Eats!</title>
        <meta charset="utf-8">
        <meta name="description"
              content="Burlington Eats Restaurants Page" />
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
            <h1>Restaurants</h1>
            <?php
            $debug = false;

            if (isset($_GET["debug"])) {
                $debug = true;
            }
            $myFileName = "restaurants";
            $fileExt = ".csv";
            $filename = $myFileName . $fileExt;

            if ($debug)
                print "\n\n<p>filename is " . $filename;
            $file = fopen($filename, "r");

            if ($file) {
                if ($debug)
                    print "<p>File Opened</p>\n";
            }
            ?>
            <?php
            if ($file) {

                if ($debug)
                    print "<p>Begin reading data into an array.</p>\n";
                $headers = fgetcsv($file);
                if ($debug) {
                    print "<p>Finished reading headers.</p>\n";
                    print "<p>My header array<p><pre> ";
                    print_r($headers);
                    print "</pre></p>";
                }
                while (!feof($file)) {
                    $records[] = fgetcsv($file);
                }
                fclose($file);
                if ($debug) {
                    print "<p>Finished reading data. File closed.</p>\n";
                    print "<p>My data array<p><pre> ";
                    print_r($records);
                    print "</pre></p>";
                }
            }
            ?>
            <?php
            /* display the data */
            print "<table class='restTable'>";
            print '<th><h3>' . $headers[0] . '</h3></th>';
            print '<th><h3>' . $headers[1] . '</h3></th>';
            print '<th><h3>' . $headers[2] . '</h3></th>';
            foreach ($records as $oneRecord) {
                if ($oneRecord[0] != "") {
                    print "\n\t<tr>";
                    print '<td class="name"><a href="' . $oneRecord[0] . '</a></td>';
                    print '<td class="location"><a href="' . $oneRecord[1] . '">Location</a></td>';
                    print '<td class="phone">' . $oneRecord[2] . '</td>';
                    print "\n\t</tr>";
                }
            }
            print "</table>";
            if ($debug)
                print "<p>End of processing.</p>\n";
            ?>
        </article>
<?php
include "footer.php";
?>
    </body>
</html>

