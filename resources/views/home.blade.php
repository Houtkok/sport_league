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


* {
    font-family: 'Nunito', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none;
    border: none;
    text-transform: capitalize;
    transition: all .2s linear;
}

html {
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 5.5rem;
    scroll-behavior: smooth;
}


.sub-heading {
    text-align: center;
    color: var(--bs-indigo);
    font-size: 2rem;
    padding-top: 1rem;
}

.heading {
    text-align: center;
    color: var(--black);
    font-size: 3rem;
    padding-bottom: 2rem;
    text-transform: uppercase;
}



.menu{
    margin-top: 8rem;
}
.menu .box-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(24rem, 1fr));
    gap: .5rem;
}

.menu .box-container .box {
    background: #fff;
    border: .1rem solid rgba(0, 0, 0, .2);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    cursor: pointer;
}

.menu .box-container .box .image {
    height: 25rem;
    width: 100%;
    padding: 1.5rem;
    overflow: hidden;
    position: relative;
}

.menu .box-container .box .image img {
    height: 100%;
    width: 100%;
    border-radius: .5rem;
    object-fit: cover;
}


.menu .box-container .box .image .fa-heart:hover {
    background-color: var(--green);
    color: #fff;
}

.menu .box-container .box .content {
    padding: 2rem;
    padding-top: 0;
}

.menu .box-container .box .content .stars {
    padding-bottom: 1rem;
}

.menu .box-container .box .content .stars i {
    font-size: 1.7rem;
    color: var(--green);
}

.menu .box-container .box .content h3 {
    color: var(--black);
    font-size: 2.5rem;
}

.menu .box-container .box .content p {
    color: var(--light-color);
    font-size: 1.6rem;
    padding: .5rem 0;
    line-height: 1.5;
}

.menu .box-container .box .content .price {
    color: var(--green);
    margin-left: 1rem;
    font-size: 2.5rem;
}

.menu .box-container .box img:hover {
    transform: scale(1.1);

}




.News{
    margin-top: 9rem;
}
.slide-bar .slide-item{
    padding: 2rem 30%;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}
.slide-bar .slide-item .slide{
    flex: 1 1 20rem;
    
}
.slide-bar .slide-item .slide img{
    width: 100%;
    height: 80vh;
}
.slide-bar .btn-prev i{
    font-size: 2rem;
    color: #343a40;
    position:absolute;
    top: 50%;
    left:20%;
}
.slide-bar .btn-next i{
    font-size: 2rem;
    color: #343a40;
    position:absolute;
    top: 50%;
    right:20%;
}




.loader-container {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 10000;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.loader-container img {
    width: 35rem;
}

.loader-container.fade-out {
    top: -110%;
    opacity: 0;
}








/* media queries  */

@media (max-width:991px) {

    html {
        font-size: 55%;
    }

    header {
        padding: 1rem 2rem;
        margin: 0%;

    }

    section {
        padding: 2rem;
    }

    header .navbar {
        text-align: center;
        margin: 0;
    }
    .story .row .content p{
        font-size: 10px;
    }
    .story .row .image img{
        height: 20rem;
    }



}

@media (max-width:768px) {

    header .icons #menu-bars {
        display: inline-block;
    }

    header .navbar {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: #fff;
        border-top: .1rem solid rgba(0, 0, 0, .2);
        border-bottom: .1rem solid rgba(0, 0, 0, .2);
        padding: 1rem;
        text-align: center;
        margin: 0;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    header .navbar.active {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }

    header .navbar a {
        display: block;
        padding: 1.5rem;
        margin: 1rem;
        font-size: 2rem;
        background: #eee;
    }

    #search-form #search-box {
        width: 90%;
        margin: 0 1rem;
    }

    .home .home-slider .slide .content h3 {
        font-size: 5rem;
    }


}

@media (max-width:450px) {

    html {
        font-size: 50%;
    }

    .dishes .box-container .box img {
        height: auto;
        width: 100%;
    }

    .order form .inputBox .input {
        width: 100%;
    }
    header .icons {
        display: flex;
    }
    header .icons i{ 
        margin-top: 20px;
        width: 40px;
        line-height: 40px;
        height: 40px;
        font-size: 15px;
    }
    header .icons a{ 
        margin-top: 20px;
        width: 40px;
        line-height: 40px;
        height: 40px;
        font-size: 15px;
    }
    header .logo img{
        width: 60px;
    }
}

        .navbar-toggle
        {
            background-color: black;
        }
        .icon-bar{
            background-color: white;
        }
        .sub-box
        {
            height: 250px;
            width: 100%;
            background-color: #f1f1f1;
            margin-bottom: 20px;
        }
        .popular{
            border:1px solid black;
            min-height: 450px;
            height: auto;
            margin-bottom: 20px;
        }
        .my_form{
            background-color: aliceblue;
            height: 450px;
            
            padding:20px;
            margin-bottom: 20px;
        }
        @media (max-width: 390px) {
            .my_form {
                height: 250px !important;
            }
        }
         /* Add some basic styling for the navigation menu and table */
         ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #333;
            overflow: hidden;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }
         ul.submenu {
            display: none;
            position: absolute;
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            z-index: 1;
            opacity: 0; 
            transition: opacity 0.3s ease; 
            }
            li:hover ul.submenu {
            display: block;
            opacity: 1; 
        }
        ul.submenu li {
            float: none;
        }


        li:hover ul.submenu {
            display: block;
        }


        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
       
        .popular{
            border-radius: 10px;
            box-shadow: 10px 10px 20px #8ecae6;

        }
        
.home .home-slider .slide {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 2rem;
    padding-top: 7rem;
}

.home .home-slider .slide .content {
    flex: 1 1 45rem;
}

.home .home-slider .slide .image {
    flex: 1 1 45rem;
}

.home .home-slider .slide .image img {
    width: 100%;
    animation:float 3s linear infinite;
}

@keyframes float{
  0%, 100%{
    transform: translateY(0rem);
  }
  50%{
    transform: translateY(3rem);
  }
}
.home .home-slider .slide .content span {
    color: var(--green);
    font-size: 2.5rem;
}

.home .home-slider .slide .content h3 {
    color: var(--black);
    font-size: 7rem;
}

.home .home-slider .slide .content p {
    color: var(--light-color);
    font-size: 2.2rem;
    padding: .5rem 0;
    line-height: 1.5;
}

.swiper-pagination-bullet-active {
    background: var(--bs-blue);
}
/* CSS for footer */
footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.footer-content {
    flex: 1;
    margin: 0 10px;
}

.footer-content h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.footer-content p {
    font-size: 14px;
    line-height: 1.5;
}

.footer-content ul {
    list-style: none;
    padding: 0;
}

.footer-content ul li {
    margin-bottom: 5px;
}

.footer-content ul li a {
    color: #fff;
    text-decoration: none;
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
    padding-top: 10px;
    border-top: 1px solid #777;
}

.footer-bottom p {
    font-size: 14px;
}

    </style>

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
