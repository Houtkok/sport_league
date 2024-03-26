@include('manubar') 
  
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin mode</title>
    <link rel="stylesheet" href="/css/adminmode.css">

</head>
<body>
      <h1>hello welcome to AdminMode Admin</h1>

      <form action="#">
  <label for="choice"></label>
  <select id="choice" name="choice">
  <option value="arsenal">Arsenal</option>
    <option value="aston-villa">Aston Villa</option>
    <option value="Bournemouth">Bournemouth</option>
    <option value="brentford">Brentford</option>
    <option value="brighton">Brighton</option>
    <option value="burnley">Burnley</option>
    <option value="chelsea">Chelsea</option>
    <option value="crystal-palace">Crystal Palace</option>
    <option value="everton">Everton</option>
    <option value="Fulham">Fulham</option>
    <option value="liverpool">Liverpool</option>
    <option value="Luton Town">Luton Town</option>
    <option value="manchester-city">Manchester City</option>
    <option value="manchester-united">Manchester United</option>
    <option value="newcastle-united">Newcastle United</option>

    <option value="Nottingham Forest">Nottingham Forest</option>
    <option value="sheffield United">sheffield United</option>
    <option value="tottenham-hotspur">Tottenham Hotspur</option>

    <option value="west-ham-united">West Ham United</option>
    <option value="wolverhampton-wanderers">Wolverhampton Wanderers</option>
  </select><br>
  <input type="submit" value="Visit schedule">
</form>
<div class="threeflex">
<div class="playerlis">
<div class="boxplayer">
  
 <img src="/images/kdb3.jpeg" alt="Example Image"><br><br> 
 
</div>
<div class="boxplayer" style="margin-top: 20%;">
  
 <img src="/images/man-united-vs-new.webp" alt="Example Image"><br><br> 
 
</div>
<div class="boxplayer" style="margin-top: 20%;">
  
 <img src="/images/aston-villa-vs-arsenal-prediction-opta-1024x715.png" alt="Example Image"><br><br> 
 
</div>

    
</div>
<div class="container">
  <h2>Premier League Schedule</h2>

  <ul>
    <li id="teamLis">Arsenal vs Aston Villa <button style="margin-left: 150px">view</button><button>delete</button><button >update</button></li>
    <li id="teamLiss">Brighton&Hove Albion vs Brentford <button style="margin-left: 50px">view</button><button>delete</button><button>update</button></li>
    
    <li id="teamLis">Chelsea vs Burnley <button style="margin-left: 150px">view</button><button>delete</button><button>update</button></li>
    
    <li id="teamLiss">Everton vs Crystal Palace <button style="margin-left: 110px">view</button><button>delete</button><button>update</button></li>
    
    <li id="teamLis">Everton vs Luton Town <button style="margin-left: 120px">view</button><button>delete</button><button>update</button></li>
        
    <li id="teamLiss">Southampton vs Norwich City <button style="margin-left: 80px">view</button><button>delete</button><button>update</button></li>

    <li id="teamLis"> Nottingham Forest vs Tottenham Hotspur <button >view</button><button>delete</button><button>update</button></li>
   
    <li id="teamLiss">Wolverhampton Wanderers vs West Ham <button>view</button><button>delete</button><button>update</button></li>
<!-- <div class="edit">
    <button id="editTeam" style="background-color: yellow;" >view </button>
    <button id="editTeam" style="background-color: red;" >delete </button>
    <button id="editTeam" style="background-color: #1670BF ;" >update </button>
    </div> -->
  </ul>
  

</div>
<div class="playerliss">
  <div class="boxplayer" style="margin-top: 5%;  margin-left: -182%;">
  
    <img src="/images/chelseaburn.webp" alt="Example Image"><br><br> 
    
   </div>
   <div class="boxplayer" style="margin-top: 20%;  margin-left: -182%;">
    
    <img src="/images/0_Forest-vs-Spurs.webp" alt="Example Image"><br><br> 
    
   </div>
   <div class="boxplayer" style="margin-top: 20%;  margin-left: -182%;">
    
    <img src="/images/lu.webp" alt="Example Image"><br><br> 
    
   </div>
  </div>
  </div>
</body>
</html>
@include('footer') 