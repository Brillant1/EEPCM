<!DOCTYPE html>
<html>
<head>
	<title>Nos paroisses</title>
	<meta charset="utf-8">
<style>
	body
	{
		margin: 0px;
		padding: 0px;
	}
	
	}

	.memeLigne1

	{
		display:flex;
		justify-content:space-around;
		flex-direction: row;
		flex-wrap:wrap;
		width: 100%;
		text-align: center;
	}
	.memeLigne1 a
	{
		width: 33%;
		font-size: 25px;
		text-decoration: none;
		line-height: 100px;
		box-sizing: border-box;
		margin-top: 30px;
		color:black;
		background-color: rgba(228,77,38,0.25);
		border-top: solid green 5px;
		text-align: center;
		font-weight: bold;
		border-radius:5px; 
	}
	a:hover
	{
		color: white;
		background-color: green;

	}
	
	.memeLigne2
	 {
	 	display: flex;
	 	width: 100%;
	 	justify-content:space-around;
	 }


</style>
</head>
<body>
<header>
		  <?php 
           include ("header.php");
		   ?>
</header>
	

     <div class="memeLigne1">
     <div class="memeLigne2">
	   	<a href="adougou.php" >Paroisse D'ADOUGOU</a>
	    <a href="laminou.php">Paroisse de LAMINOU</a>
	   	<a  href="dokoudoho.php">Paroisse de DOKOUDOHO</a>
      </div>
      <div class="memeLigne2">
   		<a href="cocotomey.php" >Paroisse DE COCOTOMEY</a>
	    <a href="womey.php" >Paroisse DE WOMEY</a>
	    <a href="abomey.php" >Paroisse D'ABOMEY-CALAVI</a>
    </div>
    <div class="memeLigne2">
	  <a href="BOHICON.php" >Paroisse DE BOHICON</a>
	  <a href="adougou.php" >Paroisse DE DASSA-ZOUNME</a>
	  <a href="glazoue.php" >Paroisse DE GLAZOUE</a>
     </div>
     <div class="memeLigne2">
	   <a href="cotonou.php" >Paroisse DE COTONOU</a>
	   <a href="cocokodji.php" >Paroisse DE COCOKODJI</a>
	   <a href="agbangnizoun.php" >Paroisse D'AGBANGNIZOUN</a>
      </div>

      <div class="memeLigne2">
	    <a href="avrankou.php" >Paroisse D'AVRANKOU</a>
	    <a href="calavi.php" >Paroisse de PORTO-NOVO</a>
	    <a href="agla.php" >Paroisse D'AGLA</a>
      </div>

      <div class="memeLigne2">
   		<a href="parakou.php" >Paroisse De PARAKOU</a>	
		<a href="savalou.php" >Paroisse DE SAVALOU</a>
		<a href="massi.php" >Paroisse DE ZOGBODOME</a>
    </div>
    </div>



	

	<?php 
		include("footer.php");
	 ?>

</body>
</html>