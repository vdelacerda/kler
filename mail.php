<?php
    //expéditeur du message
    $from = "clairevietti@gmail.com";
     
    //destinataire du message
    //ici on fais correspondre l’expéditeur, et destinataire pour le test
    $to = $from;
     
    //sujet du message
    $subject = "Message book";
     
    //corps du message
    $message = "Ceci est un message pour le test.\n";
     
    $headers = "From:" .$from. "\r\n" ;
    $headers .='Reply-To:'.$from."\r\n";
    $headers .='Content-Type: text/plain; charset="iso-8859-1"'."\r\n";
    $headers .='Content-Transfer-Encoding: 7bit'."\r\n";
     
    //on récupère la variable $_POST, on l’insère dans le message
     
    foreach ($_POST as $cle => $valeur) {
     
    // ici on peut vérifier si $cle ="submit" et l'enlever du message cela correspond au bouton envoyer, donc inutile
    // si on peut aussi a partir d'ici ré-initialiser l'objet du message
     
    $message.= "$cle : $valeur.\n";
     
    }
    if(mail($to,$subject,$message,$headers))
    {
    echo '
	<title>Claire Vietti // Graphiste - Webdesigner</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
<link rel="icon" type="image/png" href="img/favicon2.png" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="css/petite_resolution.css" /> 
<link rel="stylesheet" media="screen and (max-width: 1280px)" href="css/grande_resolution.css" /> 
<link rel="stylesheet" media="screen and (max-width: 1440px)" href="css/mac.css" />
 <header>
  <div class="logo"><a href="home.html"><img src="img/logo2.png" width="90" height="55" border="0" alt="Logo Claire Vietti // Graphiste - Webdesigner"/></a></div>
  <nav>
    <ul id="menu">
      <li><a href="edition.html" title="Edition">Edition</a></li>
      <li><a href="multimedia.html" title="Multim&eacute;dia">Multim&eacute;dia</a>
        <ul id="sous-menu">
          <li><a href="headers.html" title="Headers">Headers</a></li>
          <li><a href="newsletters.html" title="Newsletters">Newsletters</a></li>
          <li><a href="guides.html" title="Guides">Guides</a></li>
          <li><a href="marques.html" title="Marques">Marques</a></li>
          <li><a href="landing.html" title="Pages">Pages</a></li>
          <li><a href="multimedia.html" title="Divers">Divers</a></li>
        </ul>
      </li>
      <li><a href="dessins.html" title="Dessins">Dessins</a></li>
      <li><a href="photos.html" title="Photos">Photos</a> </li>
      <li><a href="contact.html" title="Contact">Contact</a></li>
      <li><a href="img/cv_ClaireVietti.pdf" target="_blank" title="CV">CV</a></li>
    </ul>
  </nav>
</header>
<div class="hr"></div><br />
Le message &agrave; Claire VIETTI // Graphiste & Webdesigner a bien &eacute;t&eacute; envoy&eacute;.<br />
<div id="frise"></div>
<div class="hr"></div>
<footer> <a href="http://fr.viadeo.com/fr/profile/claire.vietti1" title="Profil Viadeo" target="_blank"> <span class="viadeo"></span></a><a href="http://www.linkedin.com/pub/claire-vietti/64/459/3b8"title="Profil Linkedin" target="_blank"><span class="linkedin"></span></a>
  <p>Claire Vietti // Graphiste - Webdesigner &copy;2013  I Tous droits r&eacute;serv&eacute;s<br/>
    <a href="edition.html" title="Edition">Edition</a> I <a href="multimedia.html" title="Multim&eacute;dia">Multim&eacute;dia</a> I <a href="dessins.html" title="Dessins">Dessins</a> I <a href="photos.html" title="Photographies">Photographies</a> I <a href="contact.html" title="Contact">Contact</a> I <a href="img/cv_ClaireVietti.pdf" target="_blank" title="CV">Cv</a> </p>
</footer>';
    }
    else
    {
    echo '<title>Claire Vietti // Graphiste - Webdesigner</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
<link rel="icon" type="image/png" href="img/favicon2.png" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="css/petite_resolution.css" /> 
<link rel="stylesheet" media="screen and (max-width: 1280px)" href="css/grande_resolution.css" /> 
<link rel="stylesheet" media="screen and (max-width: 1440px)" href="css/mac.css" />
 <header>
  <div class="logo"><a href="home.html"><img src="img/logo2.png" width="90" height="55" border="0" alt="Logo Claire Vietti // Graphiste - Webdesigner"/></a></div>
  <nav>
    <ul id="menu">
      <li><a href="edition.html" title="Edition">Edition</a></li>
      <li><a href="multimedia.html" title="Multim&eacute;dia">Multim&eacute;dia</a>
        <ul id="sous-menu">
          <li><a href="headers.html" title="Headers">Headers</a></li>
          <li><a href="newsletters.html" title="Newsletters">Newsletters</a></li>
          <li><a href="guides.html" title="Guides">Guides</a></li>
          <li><a href="marques.html" title="Marques">Marques</a></li>
          <li><a href="landing.html" title="Pages">Pages</a></li>
          <li><a href="multimedia.html" title="Divers">Divers</a></li>
        </ul>
      </li>
      <li><a href="dessins.html" title="Dessins">Dessins</a></li>
      <li><a href="photos.html" title="Photos">Photos</a> </li>
      <li><a href="contact.html" title="Contact">Contact</a></li>
      <li><a href="img/cv_ClaireVietti.pdf" target="_blank" title="CV">CV</a></li>
    </ul>
  </nav>
</header>
<div class="hr"></div><br />
Le message &agrave; Claire VIETTI // Graphiste & Webdesigner n\'a pu &ecirc;tre envoy&eacute;.<br />
<div id="frise"></div>
<div class="hr"></div>
<footer> <a href="http://fr.viadeo.com/fr/profile/claire.vietti1" title="Profil Viadeo" target="_blank"> <span class="viadeo"></span></a><a href="http://www.linkedin.com/pub/claire-vietti/64/459/3b8"title="Profil Linkedin" target="_blank"><span class="linkedin"></span></a>
  <p>Claire Vietti // Graphiste - Webdesigner &copy;2013  I Tous droits r&eacute;serv&eacute;s<br/>
    <a href="edition.html" title="Edition">Edition</a> I <a href="multimedia.html" title="Multim&eacute;dia">Multim&eacute;dia</a> I <a href="dessins.html" title="Dessins">Dessins</a> I <a href="photos.html" title="Photographies">Photographies</a> I <a href="contact.html" title="Contact">Contact</a> I <a href="img/cv_ClaireVietti.pdf" target="_blank" title="CV">Cv</a> </p>
</footer>';
    } //*******************/
    ?>
