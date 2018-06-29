<?php

session_start();

if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['langage']) && isset($_POST['message'])) {


  $_SESSION['nom'] = $_POST['nom'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['langage'] = $_POST['langage'];
  $_SESSION['message'] = $_POST['message'];


}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  </head>
  <body>

    <div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h3> Votre nom : <?php echo $_SESSION['nom']; ?> </h3>
        <em>Votre email : <?php echo $_SESSION['email']; ?> </em><br>
        <a href="deconnexion.php">Déconnexion</a>
		</center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">Au sujet de <?php echo $_SESSION['nom']; ?> </h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading"> <?php echo $_SESSION['nom']; ?> <small>USA</small></h3>
                    <span><strong>Langage préféré :</strong></span>
                        <span class="label label-warning"><?php echo $_SESSION['langage']; ?></span>

                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Bio: </strong><br>
                      <?php echo $_SESSION['message']; ?>
                    <br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

  </body>
</html>
