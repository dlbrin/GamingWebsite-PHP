<?php include "config.php" ?>

<?php
if(isset($_POST['submit'])){
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  if(empty($name) || empty($email) || empty($message)) {
    $errors['result'] = "Please fill required fields";
    }else{
      $query = mysqli_query($db , "INSERT INTO `contact`(`name`,`email`,`message`) VALUES('$name','$email', '$message')");
      if ($query) {
      header('location: index.php?success');
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iKURD E-SPORTS</title>
    <link rel="icon" href="images/ikurd-esports.jpg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body bgcolor="#1e1e1e">
    <div class="back">
      <?php include "menu.php" ?>
  <div class="center-text-pc">
    <center><i class="fas fa-dice-d6"></i></center>
    <h1>WELCOME TO <span>iKURD </span>ESPORTS </h1>
    <br>
    <h2><span>ONE</span> FOR ALL, ALL FOR <span>ONE</span></h2>
  </div>
  <div class="arrow">
    <center>
    <a href="#down"><img src="images/down-arrow3.png"></a>
  </center>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>

  <div class="center-text-mob">
    <center><i class="fas fa-dice-d6"></i></center>
    <h1>WELCOME TO <span>iKURD </span>ESPORTS </h1>
    <br>
    <br>
    <h2><span>ONE</span> FOR ALL, ALL FOR <span>ONE</span></h2>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
    <a href="#down"><img src="images/down-arrow3.png"></a>
  </center>
  </div>
</div>
<br>
<div class="iKurd-achievements-text" id="down">
  <div data-aos="fade-right" data-aos-duration="1000"><h1>iKURD ACHIEVEMENTS</h1></div>
  <center><hr width="20%" color="#FABD02"></center>
</div>
<br>
<br>
<br>
<center>
<div class="achievements">
  <div class="achievements-images">
    <img src="images/gold-cup.png">
    <br>
    <div class="gold"><h1> PMCO IRAQ FINAL 2021 </h1></div>
    <br>
    <h2> iKURD E-SPORTS #1</h2>
  </div>


  <div class="achievements-images">
    <img src="images/silver-cup.png">
    <br>
    <div class="silver"><h1> PMCO IRAQ GROUP STAGE 2020 </h1></div>
    <br>
    <h2> iKURD E-SPORTS #2</h2>
    </div>

    <div class="achievements-images">
    <img src="images/bronze-cup.png">
    <br>
    <div class="bronze"><h1> PMCO 2019 Fall Split-Group Stage </h1></div>
    <br>
    <h2> iKURD E-SPORTS #3</h2>
  </div>
</div>
<br>
<br>
<div class="see-more-button">
  <button><a href="achievements.php">Click here to see all achievements</a></button>
</div>
</center>
</div>
<center>
<div class="about">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250"><path fill="#1e1e1e" fill-opacity="1" d="M0,224L24,224C48,224,96,224,144,224C192,224,240,224,288,186.7C336,149,384,75,432,64C480,53,528,107,576,122.7C624,139,672,117,720,122.7C768,128,816,160,864,149.3C912,139,960,85,1008,74.7C1056,64,1104,96,1152,106.7C1200,117,1248,107,1296,128C1344,149,1392,203,1416,229.3L1440,256L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
<div class="iKurd-about-text" id="aboutus">
  <div data-aos="fade-right" data-aos-duration="1000"><h1>ABOUT iKURD E-SPORTS</h1></div>
  <center><hr width="20%" color="#1e1e1e"></center>
</div>
<div class="about-details">
  <div class="about-text">
    <h1>ABOUT US</h1>
    <div data-aos="fade-right" data-aos-duration="1000"><h2>ONE FOR ALL, ALL FOR ONE</h2></div>
    <p>
iKURD E-SPORTS is a Gaming community in the Northern Iraq Region of Kurdistan that have one of the Biggest Fanbase in the Region.
The Clan name iKURD which is better described as i’m Kurdish refers to the National love behind Kurdish people.
As for years past and yet to come, we have been one of the best teams in the Middle east and the best in Iraq Region we have come through alot of hard working and sacrificing until we got here at this very top level.
We promise that we will make everyone from everywhere knows who are Kurds and we will make every Kurdish individual proud of us for what we do. Haters will hate iKURD will perk. “all for one and one for all”.</p>
  </div>
  <div class="about-image">
    <img src="images/ikurd-esports.png">
    <h1>Created on April of 2019</h1>
  </div>
</div>


</div>
</center>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 260"><path fill="#FABD02" fill-opacity="1" d="M0,160L48,170.7C96,181,192,203,288,181.3C384,160,480,96,576,85.3C672,75,768,117,864,133.3C960,149,1056,139,1152,160C1248,181,1344,235,1392,261.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
<div class="iKurd-achievements-text">
  <div data-aos="fade-right" data-aos-duration="1000"><h1>iKURD E-SPORTS PMCO PLAYERS</h1></div>
  <center><hr width="20%" color="#FABD02"></center>
</div>
<div class="ikurd-all-players">
  <center><img src="images/ikurd-player.jpg"></center>
</div>
<div class="pmco-players">
  <div class="pmco-players-details">
    <img src="images/azer.jpg">
    <h1>Name : iKURDxAZER</h1>
    <h2>Role : Fragger</h2>
  </div>

  <div class="pmco-players-details">
    <img src="images/azer.jpg">
    <h1>Name : iKURDxAZER</h1>
    <h2>Role : Fragger</h2>
  </div>

  <div class="pmco-players-details">
    <img src="images/azer.jpg">
    <h1>Name : iKURDxAZER</h1>
    <h2>Role : Fragger</h2>
  </div>

  <div class="pmco-players-details">
    <img src="images/azer.jpg">
    <h1>Name : iKURDxAZER</h1>
    <h2>Role : Fragger</h2>
  </div>

  <div class="pmco-players-details">
    <img src="images/azer.jpg">
    <h1>Name : iKURDxAZER</h1>
    <h2>Role : Fragger</h2>
  </div>

  <div class="pmco-players-details">
    <img src="images/azer.jpg">
    <h1>Name : iKURDxAZER</h1>
    <h2>Role : Fragger</h2>
  </div>
</div>

<div class="contact">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1e1e1e" fill-opacity="1" d="M0,64L48,64C96,64,192,64,288,101.3C384,139,480,213,576,218.7C672,224,768,160,864,154.7C960,149,1056,203,1152,186.7C1248,171,1344,85,1392,42.7L1440,0L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
<div class="iKurd-about-text" id="contactus">
  <div data-aos="fade-right" data-aos-duration="1000"><h1>CONTACT iKURD E-SPORTS</h1></div>
  <center><hr width="20%" color="#1e1e1e"></center>
</div>
<?php if(isset($_POST['submit'])){?><div class="error"><h1><?php echo $errors['result'];?></h1></div><?php } ?>
  <div class="contact-details">
    <div class="contact-content">
      <h1>CONTACT US</h1>
      <h2><i class="fas fa-map-marker-alt"></i>&nbsp Address<br>Kurdistan, Akre</h2>
      <h2><i class="fas fa-phone"></i>&nbsp Phone <br> +964 751 228 0114</h2>
      <h2><i class="fas fa-envelope"></i>&nbsp Email <br> ikurdg@gmail.com</h2>
    </div>
    <center>
      <form action="index.php" method="POST" enctype="multipart/form-data">
    <div class="contact-inputs">
      <h1>Name:</h1>
      <input type="text" name="name" placeholder="Enter Name">
      <br>
      <h1>Email:</h1>
      <input type="email" name="email" placeholder="Enter Email">
      <br>
      <h1>Message:</h1>
      <input type="text" name="message" placeholder="Your Message">
      <br>
      <button name="submit">Send</button>
    </div>
  </form>
  </center>
  </div>
</div>

<div class="num">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FABD02" fill-opacity="1" d="M0,224L60,218.7C120,213,240,203,360,208C480,213,600,235,720,229.3C840,224,960,192,1080,186.7C1200,181,1320,203,1380,213.3L1440,224L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
    <div class="iKurd-achievements-text">
  <div data-aos="fade-right" data-aos-duration="1000"><h1>iKURD-ESPORTS FAMILY</h1></div>
  <center><hr width="20%" color="#FABD02"></center>
</div>
  <center>
  <div class="num-details">
    <div class="num1">
      <i class="fab fa-facebook-square"></i>
      <div id="users" class="number" data-aos="zoom-in" data-aos-duration="1000"><b counter="0">0</b></div>
      <h1>Facebook Followers</h1>
    </div>
    <div class="num1">
      <i class="fab fa-discord"></i>
      <div id="shiva" class="number" data-aos="zoom-in" data-aos-duration="1000"><span class="count">9381</span></div>
      <h1>Discod Members</h1>
    </div>
  </div>
</center>
</div>


<?php include "footer.php" ?>



<script>
  scrollCue.init();
</script>
<script>
  AOS.init();
    function update_users_count() {
    $('#users b').animate({
        counter: 33000
    }, {
        duration: 6000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now));
        },
        complete: update_users_count
    });
};

$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

update_users_count();
</script>
</body>
</html>
