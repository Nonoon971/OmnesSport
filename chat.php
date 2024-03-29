<?php
session_start();
if (isset($_GET['logout'])){

 //Message de sortie simple
 $logout_message = "<div class='msgln'><span class='left-info'>User <b class='user-name-left'>" .
 $_SESSION['prenom']. "&nbsp;" .$_SESSION['nom'] . "</b> a quitté la session de chat.</span><br></div>";


 $myfile = fopen(__DIR__ . "/log.html", "a") or die("Impossible d'ouvrir le fichier!" . __DIR__ . "/log.html");
 fwrite($myfile, $logout_message);
 fclose($myfile);
 sleep(1);
 header("Location: Accueil.php"); //Rediriger l'utilisateur
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <title>Chat OmnesSport</title>
 <link rel="stylesheet" href="style.css" />
</head>
<body id="chatPHP">
 <?php
 if (!isset($_SESSION['nom'])){
     header("location: loginsuccess.php");
 }
 else {
     ?>
     <div id="wrapper">
         <div id="menu">
            <p class="welcome">Bienvenue, <b><?php echo $_SESSION['prenom']. "&nbsp;" .$_SESSION['nom']; ?></b></p>
            <p class="logout"><a id="exit" href="#">Quitter la conversation</a></p>
        </div>
        <div id="chatbox">
         <?php
         if(file_exists("log.html") && filesize("log.html") > 0){
             $contents = file_get_contents("log.html");
             echo $contents;
         }
         ?>
     </div>
     <form name="message" action="" id="FormChat">
         <input class="InputPHP" name="usermsg" type="text" id="usermsg" />
         <input class="InputPHP" name="submitmsg" type="submit" id="submitmsg" value="Envoyer" />
     </form>
 </div>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript">
 // jQuery Document
 $(document).ready(function () {
     $("#submitmsg").click(function () {
         var clientmsg = $("#usermsg").val();
         $.post("post.php", { text: clientmsg });
         $("#usermsg").val("");
         return false;
     });
     function loadLog() {
 var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Hauteur de défilement avant la requête
 $.ajax({
     url: "log.html",
     cache: false,
     success: function (html) {
 $("#chatbox").html(html); //Insérez le log de chat dans la #chatbox div
 //Auto-scroll
 var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Hauteur de défilement apres la requête
 if(newscrollHeight > oldscrollHeight){
 $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Défilement automatique
}
}
});
}
setInterval (loadLog, 2500);
$("#exit").click(function () {
 var exit = confirm("Voulez-vous vraiment mettre fin à la session ?");
 if (exit == true) {
     window.location = "chat.php?logout=true";
 }
});
});
</script>
</body>
</html>
<?php
}
?>