<?php
  include("classes/classe_php_flashy/gestionMessageFlash.php");
  gestionMessageFlash::gestionMessage(1);// 1 for success , 2 for warning and 3 for error
  //test de setcookie
 
  $email=$_POST['email'];
  $pass=$_POST["password"];
  if(isset($_POST["submit"])){
    setcookie("toto","kouassiangey@gmail.com",time()+60*60*24*30,null,null,false,true);
       $db=new PDO("mysql:host=localhost;dbname=Authentification","ange","aegn1996");
       $req=$db->prepare("SELECT * FROM auth WHERE (email=? AND mot_de_pass=?)");
       $req->execute([$email,$pass]);
    
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Floating labels example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="asserts/css/bootstrap.min.css" rel="stylesheet">
    <link href="asserts/css/css_flashy/font-awesome.css" rel="stylesheet">
    <link href="asserts/css/css_flashy/style_flashy.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="asserts/css/floating-labels.css" rel="stylesheet">
  </head>

  <body style="margin:10px">
        
        <div class="<?php echo(gestionMessageFlash::getFlashDefault());?>">
                <a href="mailto:kouassiangey@gmail.com"><i class="<?php echo(gestionMessageFlash::getIcone())?>"></i> <?php echo(gestionMessageFlash::getMessage() )?></a>   
        </div>
        <form class="form-signin" method="post" action="">
        <div class="text-center mb-4">
            <img class="mb-4" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
            <p>veuillez vous authentifier <code>:placeholder-shown</code> pseudo-element.Works in latest Chrome, Safari, and Firefox.</p>
        </div>

        <div class="form-group">
            <input id="email" type="email"  class="form-control" placeholder="Email address" name="email" />
        </div>

        <div class="form-group">
            <input id="password" type="password"  class="form-control" name="password" placeholder="Password"/>
        
        </div>

        <div class="checkbox mb-3">
            <label>
            <input id="checkbox" type="checkbox" value="remember-me" name="checkbox"> Remember me
            </label>
        </div>
        <button id="submit" class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
        </form>
        <script src="asserts/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript">
                    
                    $(document).ready(()=>{


                        // ================== POUR LES MESSAGES FLASH  EXTERNE==========================
                                setTimeout(() =>{
                                
                                        $(".<?php echo(gestionMessageFlash::getFlashDefault());?>").animate({
                                        "left":"-1000px",
                                        "display":"none"
                                        
                                        },500);
                                        
                                },3000);
                                $('<audio id="beep" src="asserts/sounds/notify.wav"></audio>').appendTo('body');
                                $("#beep")[0].play();
                         // ================== / POUR LES MESSAGES FLASH ==========================


                         // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°  PROGRAMME INTERNE °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°

                                $_email=$("#email").val()
                                $_password=$("#password").val()
                                $_checkbox=$("#checkbox").val()
                                /*function controleChamps(champ){
                                    if(champ.length <4){
                                        champ.css("border","1px solid black")
                                         alert("ooo")
                                    
                                    }else{

                                    }
                                }*/
                                
                          // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°° / PROGRAMME INTERNE °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
                    });
        
           </script>
  </body>
</html>
