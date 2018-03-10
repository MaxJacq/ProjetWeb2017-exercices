<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

  <?php require 'header.php'; ?>
  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Le site d'actualité</a></li>
      <li><a href="#">Régions</a></li>
      <li><a href="#">Foot</a></li>
    </ul>
  </div>
   <h1>Comparatif de la semaine Italie VS Belgique</h1>
  </nav>
  <section class="col-lg-5">
 <article>
    <div class="img-responsive">
        <img src="images\italie.jpg" alt="Italie" style="width:100%">
        <div class="caption">
        </div>
		<section class="col-lg-5">
		<title>Généralités</title>
    </div>
<h2>Généralités</h2>
Confédération: UEFA</br>
Couleurs : Bleu marine et blanc</br>
Surnom : Gli Azzurri</br>
Classement FIFA : 17e (14 septembre 2017)</br>
  </article>
  <div class="table-responsive">
  <h2>Statistiques : 2000-2017</h2>           
  <table class="table">
    <thead>
      <tr>
		<th></th>
        <th></th>
        <th>Belgique</th>
        <th>Italie</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	  <td>Match</td>
        <td>Victoires</td>
        <td>42</td>
        <td>31</td>
      </tr>
      <tr>
        <td></td>
        <td>Défaites</td>
        <td>10</td>
		<td>12</td>
      </tr>
      <tr>
	  <td></td>
        <td>Nuls</td>
        <td>25</td>
        <td>30</td>
      </tr>
	  <tr>
	  <td>Total</td>
        <td></td>
        <td>77</td>
        <td>73</td>
      </tr>
    </tbody>
  </table>
</div>
			</section>
 <section class="col-lg-5">
 <article>
    <div class="img-responsive">
        <img src="images\belgique.jpg" alt=Belgique" style="width:100%">
        <div class="caption">
        </div>
    </div>
<h2>Généralités</h2>
Confédération: UEFA</br>
Surnom : Les Diables Rouges</br>
Stade principal: Stade Roi Baudouin</br>
Classement FIFA : 5e (16 octobre 2017)</br>
</article>
<h2>Inscrivez-vous</h2>
Inscrivez-vous pour recevoir chaque semaine votre comparatif!</br>
<form action="http://dero-promsocatc.alwaysdata.net/index.php" method="post" accept-charset="utf-8">
  Nom : <input type="text" name="NOM" placeholder ="Entrez votre nom"><br>
  Prénom : <input type="text" name="PRENOM" placeholder="Entrez votre prénom"><br>
  Email : <input type="text" name="EMAIL" placeholder="nom.prenom@gmail.com"><br>
  <INPUT type= "radio" name="masculin" value="H" checked> masculin
<INPUT type= "radio" name="masculin" value="F"> féminim<br>
  <input type="submit" value="Envoyer">
</form>
			</section>
  <aside class="aside col-lg-2">
  <h2>Fil d'actualité</h2>
  <ul> 
<li> Aujourd'hui à 21:07 VIDÉO | Des feux d’artifice «silencieux» au nouvel an pour respecter les animaux? </li> 
<li> Aujourd'hui à 21:04 Liban: le Premier ministre démissionnaire à Paris </li> 
<li> Aujourd'hui à 21:02 Charles Michel avec des étudiants Erasmus en Suède </li>
<li> Aujourd'hui à 20:47 Accident avec un taxi: on recherche le témoin </li>
<li> Aujourd'hui à 20:26 Drame à Huccorgne: une maman et une fillette décédées </li>
</ul> 
</aside>
<div class="row">
			<footer class="col-lg-12" >
				Fait par Patrick Baudoux <a href="#header" >Haut de page</a>
			</footer>
		</div>
</body>
</html>