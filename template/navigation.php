<div id="container">
                <!--Left navigation-->
                <ul id="left-navigation" class ="nav nav-pills">
                  <li role="presentation" <?php if ($page=='home') echo 'class="active"';?>><a class="menu-links" href="?page=home">Home</a></li>
                  <li role="presentation" <?php if ($page=='menu') echo 'class="active"';?>><a class="menu-links" href ="?page=menu">Menu</a></li>
                  <li role="presentation" <?php if ($page=='news') echo 'class="active"';?>><a class="menu-links" href="?page=news">News</a></li>
                  <li role="presentation" <?php if ($page=='reservation') echo 'class="active"';?>><a class="menu-links" href="?page=reservation">Reservation</a></li>
                </ul>

                <!--Logo-->
                <a href="?page=home">
                    <h1 id="logo">
                        <span class="glyphicon glyphicon-grain" aria-hidden="true"></span></br>
                        Piazza Afrodita
                    </h1>
                </a>

                <!--Right navigation-->
                <ul id="right-navigation" class ="nav nav-pills">
                  <li role="presentation" <?php if ($page=='order') echo 'class="active"';?>><a class="menu-links" href="?page=order">Order</a></li>
                  <li role="presentation" <?php if ($page=='gallery') echo 'class="active"';?>><a class="menu-links" href="?page=gallery">Gallery</a></li>
                  <li role="presentation" <?php if ($page=='about-us') echo 'class="active"';?>><a class="menu-links" href="?page=about-us">About us</a></li>
                  <li role="presentation" <?php if ($page=='contact') echo 'class="active"';?>><a class="menu-links" href="?page=contact">Contact</a></li>
                </ul>

</div><!--End of container-->