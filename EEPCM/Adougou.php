<!DOCTYPE html>
<html>
<head>
	<title>ADOUGOU</title>
	<meta charset="utf-8">

	<style type="text/css">
	.div1
	{
		display: inline-flex;
		justify-content: space-around;
		width: 100%;
	}
	
	.ligne
	{
		height: 8px;
		width: 80%;
		background-color: lime;
		margin-left: 8%;
		border-radius: 5px;
	} 
	.devancier h3 
	{
		width:50%; 
		text-align:center;
		justify-content: center;
		margin-top:15px;
		line-height:30px;
		margin-left: 30px;
		
	}
	.devancier
	{
		background-image: url("Images/Eza1.jpg");
		background-size: 100%;
		height: 300px;
	}
	.devanciers
	{
		line-height: 30px;
		background-color: silver;
		font-size: 20px;
	}
	.principal
	{
		margin-top: 30px;
	}	
	.monp
	{
		text-align: center;
		line-height: 40px;

	}
	.comite
	{
		display: flex;
		justify-content: space-around;
	}
	h1
	{
		margin-bottom: 10px;
	}
	.un_h
	{
		justify-content: center;
		margin-top: 15px;
		margin-bottom: 15px;
		text-align: center;
	}


	</style>

</head>

<body>
<header>
	
	  <?php 
           include ("header.php");
	  ?>
</header>
     <h1 class="monp">PAROISSE D'ADOUGOU-OUESSE<br></h1>
     <div class="principal">
    
      	<div class="div1">
      			<div class="div_gauche">
      				<h2>LE PRESIDENT PAROISSIAL ADOUGOU</h2>
      			<!--<div>
 			     	<img src="Images/E.jpg" width="500" height="400">
 			    </div>-->
 			     <div class="devancier">
 			     	<h3>NOM: HOUNWANOU<br>PRENOM: Tossa Paul<br>Né(e):le 06 Octobre 1950 à Ouessè<br>Nationalité: Béninoise.</h3>
 			    </div>


      			</div>
       
      			
 			    <div class="div_droite">
 			    	<h2 class="un_h">LE PRESIDENT DU BUREAU REGIONAL<br> COLLINES-NORD BORGOU</h2>
      				
      			<!--<div>
 			     	<img src="Images/.jpg" width="500" height="400">
 			    </div>-->
 			     <div class="devancier">
 			     	<h3>NOM: HOUNWANOU<br>PRENOM: Tossa Paul<br>Né(e):le 06 Octobre 1950 à Ouessè<br>Nationalité: Béninoise.</h3>
 			    </div>


      			</div>

 			</div>
      </section>

      <br>
      <div class="ligne"></div>
      <br>

      <section class="section1">
      	<h2 class="un_h">Information concernant l'église</h2>
      	<div class="devanciers">
	      	Située dans la commune de OUESSE,l'EEPCM ADOUGOU se localise dans le village ADOUGOU dans l'arrondissement de OUESSE.Elle est située à 500m après le restaurant "MOTEL LES COLLINES" situé à l'entrée de la ville sur le tronçon IKEMON-OUESSE. Elle est situé près à 20m du "carrefour T d'adougou" en quittant le marché de la ville.<br>
	      	 L'EEPCM ADOUGOU,étant la première paroisse EEPCM de OUESSE,est née en 1972 dans le village de BOTTI sous l'autorité de <strong>TCHAGNONSIO Fagnonvi Mathias</strong>. Sous plusieurs peines elle a grandi peu à peu pour devenir EEPCM ADOUGOU qui est le siège des paroisses EEPCM de Collines-Nord Borgou.
      	 </div> 
      </section>
      <br>
      <div class="ligne"></div>
      <br>
      <section  class="section1">
      	<h2 class="un_h">LES EVENEMENTS  A VENIR DE L'EGLISE</h2>
	      <div >
	      <div class="devanciers">
	      	La croisade inter-régionale des paroisses collines Nord Borgou est prévue pour le mois de mars prochain. C'est une croisade qui regroupe toutes les paroisses EEPCM au plan national en particulier celles béninoises.<br>
	      	Trois grandes activités font l'objet de cette croisade Il s'agit du baptême d'eau et d'esprit  vont se dérouler au  dont le baptême d'eau, la communion et le mariage.  Faites l'effort de prendre le rendez-vous.
	      </div>
      </section>
      <h2 class="un_h">LES MEMEBRES DU COMITE PAROISSIAL</h2>

      <div class="comite">
      	
      	<img src="photo1.jpg">
      	<img src="photo1.jpg">
      	<img src="photo1.jpg">
      	<img src="photo1.jpg">
      	<img src="photo1.jpg">
      	<img src="photo1.jpg">
      	<img src="photo1.jpg">



      </div>
     </div>
      <?php 
           include ("footer.php");
	  ?>

</body>
</html>