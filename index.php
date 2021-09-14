<!DOCTYPE html>
<html>
    <head>
        <title>cour boostrap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <h2 class="text-center">Envoyer de message avec PHP</h2>
                    <?php
                      
                      if(isset($_POST['send'])){
                          $recipient = $_POST['email'];
                          $Nom = $_POST['nom'];
                          $Prenom = $_POST['prenom'];
                          $Contact = $_POST['contact'];
                          $Message = $_POST['message']."<br/> ".$Nom."<br/> ".$Prenom."<br/> ".$Contact."<br/> ".$recipient; 
                          $sender = "papamadiopdiaw@gmail.com";
                          $object ="Message";
                          $header = "content-type: text/html";
                           
                          if(empty($recipient)|| empty($Nom)|| empty($Prenom)||empty($Contact)|| empty($Message)){
                            ?>
                              <div class="alert alert-danger text-center">
                                  <?php echo "les champs doivent etre saisis"?> 
                              </div>
                              <?php
                          }else{
                              if(mail($sender,$object,$Message,$header)){
                                  ?>
                                  <div class="alert alert-success text-center">
                                      <?php echo "Tes donnees ont ete envoyé avec succés à $sender"?>
                                  </div>
                                <?php
                                
                              }else{
                                  ?>
                                  <div class="alert alert-danger text-center">
                                      <?php echo "echec d'envoie! veuillez verifier les données entrées" ?>
                                   </div>
                                   <?php
                              }
                          }

                      }
                     ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nom">Nom:</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                            <label for="Prenom">Prenom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom"  placeholder="Votre prenom">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" id="Email" name="email"  placeholder="Votre email">
                        </div>
                        <div class="form-group">
                            <label for="Contact">Contact</label>
                            <input type="text" class="form-control" id="Contact" name="contact"  placeholder="contact">
                        </div>
                        <div class="form-group">
                            <label for="Message">Message</label>
                            <textarea cols="30" rows="5" class="form-control textarea" name="message" placeholder="entrez votre message"></textarea>
                        </div>
                        <div class="form-group pt-4">
                          <input class="form-control button btn-primary" type="submit" name="send" value="Envoyer">  
                        </div>    
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    </body>
</html>