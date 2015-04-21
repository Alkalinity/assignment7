<!-- ############ Main Navigation Section ########### -->
<nav id="cssmenu">    
    <ul>
        <?php 
            if(basename($_SERVER['PHP_SELF'])=="home.php"){
                print '<li class="active"><a href="#"><span>Home</span></a></li>';
            } else {
                print '<li><a href="home.php"><span>Home</span></a></li>';
            } 
            ?>
        <?php 
            if(basename($_SERVER['PHP_SELF'])=="restaurants.php"){
                print '<li class="active"><a href="#"><span>Restaurants</span></a></li>';
            } else {
                print '<li><a href="restaurants.php"><span>Restaurants</span></a></li>';
            } 
            ?>
        <?php 
            if(basename($_SERVER['PHP_SELF'])=="specials.php"){
                print '<li class="active"><a href="#"><span>Specials</span></a></li>';
            } else {
                print '<li><a href="specials.php"><span>Specials</span></a></li>';
            } 
            ?>
        <?php 
            if(basename($_SERVER['PHP_SELF'])=="burlington.php"){
                print '<li class="active"><a href="#"><span>Burlington</span></a></li>';
            } else {
                print '<li><a href="burlington.php"><span>Burlington</span></a></li>';
            } 
            ?>
        <?php 
            if(basename($_SERVER['PHP_SELF'])=="music.php"){
                print '<li class="active last"><a href="#"><span>Music</span></a></li>';
            } else {
                print '<li class="last"><a href="music.php"><span>Music</span></a></li>';
            } 
            ?>
    </ul>
</nav>

