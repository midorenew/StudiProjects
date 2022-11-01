<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">A Propos</a> -->
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active" id="a">
                    <a href="index.php">Accueil</a>
                </li>
               
               <?php
                    if (!isset($_SESSION['username'])) {
                        // menu options
                        echo
                        '<li>
                            <a href="partner.php">Part</a>
                        </li>
                        <li>
                            <a href="facilities.php">Modules</a>
                        </li>
                        <li>
                            <a href="about.php">A propos</a>
                        </li>
                        <li>
                            <a href="contact.php">Nous contacter</a>
                        </li>';
                    }
                    else
                    {
                        echo    '<li><a href="./profile/i.php">Profile</a></li>
                        <li><a href="./workouts">Workouts</a></li></li>';
                
                        if(isset($_SESSION['admin'])) {
                        echo    '<li><a href="att.php">Attendance</a></li>';
                        }        
                    }
                ?>

                <?php if(isset($_SESSION['admin'])) { ?>
                    <li><a href="../admin/a.php">Admin Panel</a></li>
                <?php } ?>
            </ul>

            <?php
             if(isset($_SESSION['username'])) {
                echo '<form class="navbar-form navbar-right" role="form" action="include/logout.php">
                      <input type="submit" class="btn btn-success" value="Sign-out">';
                }
             else {
                echo '<form class="navbar-form navbar-right" role="form" method="post" action="include/process_login.php">
                      <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control" name="email">
                      </div>
                      <div class="form-group">
                        <input type="password" placeholder="Mot de passe" class="form-control" name="password">
                      </div>
                      <input type="submit" class="btn btn-success" value="Connexion" onclick="formhash(this.form, this.form.password);">
                    </form>';
             }
           ?>

        </div><!--/.navbar-collapse -->
    </div><!-- .container -->
</div><!-- navbar -->