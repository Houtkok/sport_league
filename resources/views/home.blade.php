<?php

// Navigation menu array
$navMenu = array(
    'Home' => 'index.php',
    'Football Leagues' => 'footballleagues',
    'Team' => array(
        'Arsenal' => 'web-development.php',
        'Aston villa' => 'graphic-design.php',
        'Aston Villa' => 'graphic-design.php',
        'Brentford' => 'brentford.php',
        'Brighton & Hove Albion' => 'brighton.php',
        'Burnley' => 'burnley.php',
        'Chelsea' => 'chelsea.php',
        'Crystal Palace' => 'crystal-palace.php',
        'Everton' => 'everton.php',
        'Leeds United' => 'leeds-united.php',
        'Leicester City' => 'leicester-city.php',
        'Liverpool' => 'liverpool.php',
        'Manchester City' => 'manchester-city.php',
        'Manchester United' => 'manchester-united.php',
        'Newcastle United' => 'newcastle-united.php',
        'Norwich City' => 'norwich-city.php',
        'Southampton' => 'southampton.php',
        'Tottenham Hotspur' => 'tottenham-hotspur.php',
        'Watford' => 'watford.php',
        'West Ham United' => 'west-ham-united.php',
        'Wolverhampton Wanderers' => 'wolverhampton-wanderers.php'
    ),
    'Players' => 'player',
    'Schedule' => 'schedule',
    'ticket' => array(
    'VIP Ticket' => 'vip-ticket',
    'regular Ticket' =>'regular-ticket',
    'Premium Ticket' => 'premium-ticket',
    ),
    'Stadium' => array(

    'Emirates Stadium' => 'Arsenal',
    'Villa Park' => 'Aston Villa',
    'Brentford Community Stadium' => 'Brentford',
    'American Express Community Stadium' => 'Brighton & Hove Albion',
    'Turf Moor' => 'Burnley',
    'Stamford Bridge' => 'Chelsea',
    'Selhurst Park' => 'Crystal Palace',
    'Goodison Park' => 'Everton',
    'Elland Road' => 'Leeds United',
    'King Power Stadium' => 'Leicester City',
    'Anfield' => 'Liverpool',
    'Etihad Stadium' => 'Manchester City',
    'Old Trafford' => 'Manchester United',
    'St James\' Park' => 'Newcastle United',
    'Carrow Road' => 'Norwich City',
    'St Mary\'s Stadium' => 'Southampton',
    'Tottenham Hotspur Stadium' => 'Tottenham Hotspur',
    'Vicarage Road' => 'Watford',
    'London Stadium' => 'West Ham United',
    'Molineux Stadium' => 'Wolverhampton Wanderers',

    ),
    'English Premier Leagues' => 'index.php',
);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
    </style>    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
<script>
    function clearForm() {
        document.getElementById("MyForm").reset();
    }
</script>
</head>
<body>
    <header class="navbar navbar-static-top bs-docs-nav" id="top">
    <ul>
        <?php foreach ($navMenu as $label => $url): ?>
            <?php if (is_array($url)): ?>
                <li>
                    <a href="#"><?php echo $label; ?></a>
                    <ul class="submenu">
                        <?php foreach ($url as $subLabel => $subUrl): ?>
                            <li><a href="<?php echo $subUrl; ?>"><?php echo $subLabel; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php else: ?>
                <li><a href="<?php echo $url; ?>"><?php echo $label; ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           
          </div>
          
        </div>
      </header>


    <div class="container" style="margin-bottom: 50px;">
        <div class="bs-example" data-example-id="carousel-with-captions">
            <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
                <li data-target="#carousel-example-captions" data-slide-to="1" class="active"></li>
                <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item" style="background-image: url(/storage/app/public/ERLING-HAALAND-MANCHESTER-CITY-scaled-e1662531544452.jpg);">
                <img src="{{ URL('images/172220-3840x2160-desktop-4k-football-wallpaper.jpg')}}" alt="">
                  <div class="carousel-caption">
                    <h3>Newest update football match</h3>
                    <p>Paris Saint Germain forward Kylian Mbappe has finally agreed to join the 14-time Champions League winners Real Madrid by the end of the ongoing season, suggests a BBC report.</p>
                  </div>
                </div>
                <div class="item active">
                <img src="{{ URL('images/erling-haaland-fc-3840x2160-13049.jpeg')}}"  alt="">
                  <div class="carousel-caption">
                    <h3>Top scorer</h3>
                    <p> Erling Haaland is the most striker for manchester City </p>
                    <p>1Erling Haaland | Manchester City | 17 goals
The Norwegian colossus ended on 36 league goals from 35 matches in 2022/23, registering four separate hat-tricks, making an absolute mockery of those who said he would need time to acclimatise to life in England last season.</p>
                  </div>
                </div>
                <div class="item">
                  <img src="{{ URL('images/Big_Match_Man_City_vs_Man_United.webp')}}" alt="">
                  <div class="carousel-caption">
                    <h3>Special match</h3>
                    <p>Phil Foden kept Manchester City's Premier League title challenge on track with a second-half double as his side hit back to clinch a 3-1 home victory over Manchester United on Sunday.</p>
                  </div>
                </div>
                
              </div>
              <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

          <script>
            $('.carousel').carousel({
  interval: 2000
})
          </script>
        
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-md-8">
                <div class="popular">
                    <h1 style="text-align: center;">How to but ticket</h1>
                    <p>To buy tickets for football leagues, you typically follow these steps:

                Visit the Official Website: Go to the official website of the football league or the respective team you want to watch.

                Navigate to Tickets Section: Look for a "Tickets" or "Buy Tickets" section on the website. This section may be under the "Supporters" or "Fans" tab.

                Select Match: Choose the specific match you want to attend. Matches are usually listed by date and opponent.

                Choose Seats: Select the seats you want to purchase. Some websites allow you to see the stadium layout and choose your seats accordingly.

                Add to Cart: Add the selected tickets to your cart.

                Checkout: Proceed to checkout. You may need to create an account or log in if you haven't already.

                Payment: Provide the necessary payment details and complete the transaction.

                Receive Confirmation: After successfully purchasing the tickets, you should receive a confirmation email with details of your purchase, including the tickets and any additional information about the match.

                Collect or Print Tickets: Depending on the ticketing system, you may need to collect physical tickets from a designated location or print them at home. Some venues also offer mobile ticketing options where you can use your smartphone to gain entry.

                Attend the Match: On the day of the match, arrive at the stadium with your tickets ready. You may need to show them at the entrance for admission.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="my_form">
                    <form id="MyForm" action="ticket" method="POST">
                        <h2>Register Ticket here</h2>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">phone Number</label>
                          <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Tel">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Match ID</label>
                          <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Match_id">
                        </div>
                        <div class="form-group">
                        <input type="radio" id="html" name="fav_language" value="HTML">
                        <label for="html">VIP Ticket</label><br>
                        <input type="radio" id="css" name="fav_language" value="CSS">
                        <label for="css">regular Ticket</label><br>
                        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                        <label for="javascript">Premium Ticket</label>
                        </div>
                        <button type="submit" class="btn btn-default">Next </button><button style="margin-left: 150px" type="button" class="btn btn-default" onclick="clearForm()">Clear Form</button>
                      </form>
                </div>
            </div>
        </div>
        <div>
          <h2 style="text-align: center; padding-top:10px; padding-bottom:20px">Coach and Player Of the Month</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="sub-box">
                <img src="{{ URL('images/pep.webp')}}" width="100%" height="250px">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="sub-box">
                <img src="{{ URL('images/Jurgen-Klopp.jpg')}}" width="100%" height="250px">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="sub-box">
                <img src="{{ URL('images/atata.jpg')}}" width="100%" height="250px">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="sub-box">
               <img src="{{URL('images/TELEMMGLPICT000337536670_16989513848910_trans_NvBQzQNjv4BqrXQPXGvM58CJoUBPwmOnP15NUcTKNHKqy85KLqtvPLE.webp')}}" width="100%" height="250px">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="sub-box">
                <img src="{{ URL('images/foden.jpg')}}" width="100%" height="250px">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="sub-box">
                <img src="{{ URL('images/kdb.jpg')}}" width="100%" height="250px">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="sub-box">
                <img src="{{ URL('images/haha.jpg')}}" width="100%" height="250px">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="sub-box">
                <img src="{{ URL('images/oppa.jpg')}}" width="100%" height="250px">
                </div>
            </div>
        </div>
        <div>
        <footer>
    <div class="footer-container">
        <div class="footer-content">
            <h3>About Us</h3>
            <p>Welcome to LSPD, your digital gateway to academic excellence, personal growth, and vibrant campus life. Established with the vision of empowering students to achieve their full potential, LSPD is committed to providing a dynamic and supportive learning environment where every student can thrive.</p>
        </div>
        <div class="footer-content">
            <h3>Contact Us</h3>
            <p>Email: Kairith@example.com<br>Phone: +1 (123) 456-7890</p>
            <p>Email: Brohout@example.com<br>Phone: +1 (123) 456-7890</p>
            <p>Email: Line@example.com<br>Phone: +1 (123) 456-7890</p>
        </div>
        <div class="footer-content">
            <h3>Follow Us</h3>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Your LSPD. All rights reserved.By Institute of Digital technology</p>
    </div>
</footer>
        </div>
    </div>
   
</body>
</html>
