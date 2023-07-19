<style>
*{
	margin: 0px;
	padding: 0px;
}
header h1
{
color: white;
margin: 0px;
padding: 0px;
height: 100px;
text-align: center;
background-color:green;
}
header h3
{
	display: flex;
	color: white;
	flex-wrap: nowrap;
	justify-content: center;
}

.bible
{
	 
	float: left;
}
.bible2{
	float: right;
	}
strong
{
	color: white;
}
ul
{
	height: 40px;
	align-items: center; 
	clear: top;
	margin-top: : 0px;
	border-bottom: 5px solid green;
}

ul li
{
	
	color:white;
	font-size:20px;
	text-decoration: none;
	position: relative;
	margin-left: 50px;
	margin-right: 50px;
	display: inline-block;

}
ul li a
{
	
	color: yellow;
	text-decoration: none;
	font-family: verdana;
	float: left;
	font-weight: bold;
}

nav ul
{
	display: flex;
	justify-content: space-evenly;
}
/*.bout
{
	margin-top: 0px;
	padding-top: 0px;
	margin: 0px;
}*/
.menu ul li a:hover
{
color: yellow;
}
/*.bat
{
	display: flex;
	justify-content: right;
	position: absolute;
}*/
.menu ul li a:hover
  {
  	color: white;
  }
  .bienvenu
  {
  	display: flex;
  	justify-content: center;
  	border-bottom:  solid green 10px;
  	color: blue;
  	font-size: 25px;
  	font-weight: bold;
  	height: 40px;
  	align-items: center;
  }
em
{
	display: flex;
	justify-content: center;
	align-items: center;
	color: white;
	font-size: 30px;
	padding: 0px;
	margin-top: 0px
}
ul{
	background-color: rgba(37,50,70,0.5);
}
@media screen and (max-width:1190px)
{
	body{
       background-color:white;
	}
   .bible{
   	display: none;
   }
   .bible2{
   	display: none;
   }
   .bienvenu{
   	font-size: 20px;
   }
   ul li a{
   	font-family: cursive;
   }




}
 
		


	</style>
<header>
		  	<img src="Images/logo.jpg" alt="la bible" class="bible">
		  	<img src="Images/logo.jpg" alt="la bible" class="bible2">
		  	<h1>Eglise d'Evangélisation la Parole du Christ au Monde (E E P C M)<br>
		  	<em>Venez aux eaux ,vous tous qui avez soif</em></h1>
		     
	 	<nav class="menu">
	 		 <ul >
			  		<li><a href="eepc.php">ACCUEIL</a></li>
			  		<li><a href="nosparoisses.php">Nos paroisses</a></li>
			  		<li><a href="actualite.php">Actualités</a></li>
			  		<li><a href="evenement.php">Nos évènements</a></li>
			  		<li><a href="image.php"> Images</a></li>
		  	</ul>
	   </nav>
	   <p class="bienvenu"><marquee>BIENVENU SUR LE SITE WEB DE L'EGLISE D'EVANGELISATION LA PAROLE DU CHRIST AU MONDE: OUESSE</marquee></p>
	</header>
	 



