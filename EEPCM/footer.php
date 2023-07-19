 
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <style>
   
.mere
  { 
    width: 100%;
    height: 170px;
    display:flex;
    justify-content: space-around;
    background-color: green;
    margin-top: 100px;
  }
  .gauche
  {
    justify-content: center;
    color: red;
    font-size: 20px;
    color: white;
    font-weight: bold;

  }
  .blanc
  {
    color: white;
    font-size: 20px;

  }
  .blanc a
  {
    color: white;
    text-decoration: none;
  }
  .droit
  {
    display: flex;
   justify-content: center;
   color: white;
  }
  .email
  {
    font-size: 20px;
    color:white;
    font-weight: bolder;
  }
  .casemail
  {
    border-top: solid silver 5px;
    border-bottom: solid silver 5px;
    border-radius:6px;
    background-color: white;
    font-size: 15px;
    width: 200px;
  }
  .casesubmit
  {
    background-color: white;
    font-size: 15px;
    font-weight: bold;
    border-radius: 5px;
    border:6px;
    text-transform: uppercase;
    width: 100px;
    height: 30px;
  }
.casesubmit:hover
  {
    box-shadow: green;
    background-color: rgba("25,15,55,0.5");
    border-radius: 5px;
    border-top: solid red 3px;
  }
  .font 
  {
    font-weight: bold;
    font-size: 20px;
    color: white;
  }

.font a

{
    font-weight: bold;
    font-size: 20px;
    color: white;
  }
  span img
  {
    margin-left: 25px;
  }
  .margin
  {
    margin-right: 20px;
  }
  .separe
  {
    display: flex;

  }
  .meme
  {
    color: white;
    font-size: 20px;
    font-weight: bold; 
    color:orange;
    margin-left: 10px;
  }
  .color
  {
    color: orange;
    text-decoration: none;
  }
  </style> 
</head>
<body>
  <div class="mere"> 
    <div>
         <br><p class="gauche"><span class="font">CONTACTEZ NOUS</span><br>
          <div class="separe"><div ><img src="Images/contact.jpg" height="70px" width="50px"></div><div class="meme"><a href="Tel:95371154" class="color">+229 95371154</a> <br><br><a href="Tel:91598299" class="color">+229 91598299</a></div></div></p>
      </div>
      <div class="center">
         <br><br><span class="font">VISITEZ NOS PAGES<br><br>
         <a href="facebook.com" class="margin"><span><img src="Images/facebook.png"></a>
         <a href="youtube"><img src="Images/youtube.png"></a></span></span>
         
      </div>
      <div class="droit">
        <br><p class="email"><span class="font">Veillez nous laisser votre mail</span><br><br>
        <input type="email" name="mail" class="casemail"><br><br>
        <input type="submit" name="envoi" value="ENVOYER" class="casesubmit" ></p>
      </div>


 </div>
</body>
</html>

 



  




  





