<?php
	$to=$_REQUEST['to'];
     /*$to      = 'personne@example.com';*/
     $subject = 'Carte de voeux';
     $message = "<html>
      <head>
       <title>Carte de voeux</title>
      </head>
      <body>
       <p> 
       Bonjour !</p><p>
       Tous nos voeux de bonheur d'amour de santé et de prospérité pour cette nouvelle année 2019</p><p>
       Et que la joie de vivre, le bonheur, la réussite et l'amour remplissent ton coeur et t'emportent pour 2017 tout en douceur ...</p><p>
       Bonne et heureuse année</p><p>
       Quel plaisir en cette de fin d'année,</p><p>
       De nous retrouver en famille afin de festoyer.</p><p>
       J'espère qu'en 2019 vous trouverez le bonheur,</p><p>
       C'est ce que je vous souhaite du fond du coeur.
       </p>
       <a href='https://valerieh.carte-voeux.html'>Voici ma carte de voeux.</a>
       
      </body>
</html>";
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     $headers .= 'From: webmaster@example.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
     mail($to, $subject, $message, $headers);
	
  header('Location: /voeux.html');
  exit();