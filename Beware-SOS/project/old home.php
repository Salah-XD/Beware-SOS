<!DOCTYPE html>
<?php
// Required if your environment does not handle autoloading
require __DIR__ . '../vendor/autoload.php';

$sid = "AC825183bcb1ef17a6993e77c1fbdf3270"; // Your Account SID from https://console.twilio.com
$token = "da73c5d9459c5269cf3d03b8d7a460f2"; // Your Auth Token from https://console.twilio.com
// $client = new Twilio\Rest\Client($sid, $token);

// Use the Client to make requests to the Twilio REST API
if (isset($_POST['send'])){
    $client = new Twilio\Rest\Client($sid, $token);
    $message = $client->messages->create(
        '+916374628655', // Text this number
        array(
            'from' => '+14345954614', // From a valid Twilio number
            'body' => 'Help me, I am in danger'
        )
    );
    echo "Message sent";
  
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beware</title>
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/user.css" />
    <script
      src="https://kit.fontawesome.com/95346ea11f.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <style>
      .iact {
        background-color: red;
      }
    </style>
  </head>
  <body onload=" load()">
    <div class="nav">
      <a>
        <i class="fa-sharp fa-solid fa-bars"></i>
      </a>
    </div>
    <div class="con">
      <!--Page 1 Home -->
      <div class="col hm" style="display: none" id="hm">
        <div class="hmt">
          <center>
            <form method="post" >
              <button type="submit" id="btn" class="btn" name="send" onclick="sendEmail()">
                <span>SOS</span>
              </button>
            </form>
          </center>
        </div>
        <div class="hmb">
          <ul>
            <li><a>Home</a></li>
            <li><a href="info.html">News</a></li>
            <br /><br />
            <li><a>Safe Travel</a></li>
            <li><a>Contacts</a></li>
          </ul>
        </div>
      </div>
      <!--Page 1 End Completed-->
      <!--Page 2 Map -->
      <div class="col mp" style="display: none" id="mp">
        <div id="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.4045777637207!2d76.99522416382514!3d11.08319470648924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8f792636f82b5%3A0xdc86449e9fb48675!2sKGiSL%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1678098753861!5m2!1sen!2sin"
            width="350"
            height="690"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
      <!--Page 2 Map Completed-->
      <!--Page 3 News -->
      <div class="col news" style="display: none">
        <iframe
          width="360"
          height="auto"
          src="https://www.youtube.com/embed/cGpbXuuiavQ"
          title="YouTube video player"
          class="video"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe>
        <center>
          <a href="http://who.in/">Women Health Oragnisation</a>
        </center>
      </div>
      <!--Page 3 Completed-->
      <!--Page 4 Started-->
      <center>
        <div class="col sett" style="display: none">
          <div class="det">
            <img src="img/profile-1.jpeg" class="img" />
            <ul>
              <li>
                <input type="text" class="sin" placeholder="Harish" disabled />
              </li>
              <li>
                <input
                  type="email"
                  class="sin"
                  placeholder="ideaisours@mail.com"
                  disabled
                />
              </li>
              <li>
                <input
                  type="text"
                  class="sin"
                  placeholder="9298400222"
                  disabled
                />
              </li>
              <li>
                <input
                  type="password"
                  class="sin"
                  placeholder="********"
                  disabled
                />
              </li>
              <li><a id="sbtn" onclick=" edit()">Edit Profile</a></li>
            </ul>
          </div>
          <div class="set">
            <ul>
              <li>
                <a href=""><i class="fa-solid fa-gear"></i>About</a>
              </li>
              <li>
                <a href=""><i class="fa-regular fa-pen-to-square"></i>Share</a>
              </li>
              <li>
                <a href=""
                  ><i class="fa-solid fa-right-from-bracket"></i>Settings</a
                >
              </li>
              <li>
                <a href=""><i class="fa-sharp fa-solid fa-share"></i>Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </center>
      <!--Page 4 Completed-->
      <!--Page 5 Started-->
      <center>
        <div class="col psos" style="display: none">
          <div class="dep">
            <h3 class="text">Your Location Involves to be in Crime</h3>
          </div>
          <div>
            <a href=""><button id="btp">Pre-SOS</button></a>
          </div>
        </div>
      </center>
      <!--Page 5 Completed-->
      <!--Page 6 started-->
      <!--Page 6 Completed-->
    </div>
    <div class="foot">
      <center>
        <ul>
          <li class="min">
            <a onclick=" pg(0)"
              ><i class="fa-solid fa-triangle-exclamation"></i
            ></a>
          </li>
          <li class="min">
            <a onclick=" pg(1)"><i class="fa-solid fa-location-dot"></i></a>
          </li>
          <li class="min">
            <a onclick=" pg(2)"><i class="fa-solid fa-house"></i></a>
          </li>
          <li class="min">
            <a onclick=" pg(4)"><i class="fa-solid fa-circle-info"></i></a>
          </li>
          <li class="min">
            <a onclick=" pg(3)"><i class="fa-solid fa-gear"></i></a>
          </li>
        </ul>
      </center>
    </div>
    <script>
      function pg(e) {
        var pg = document.getElementsByClassName("col");
        var pi = document.getElementsByClassName("min");
        console.log(pg.length);
        for (var i = 0; i < pg.length; i++) {
          ////pg[i].classList.remove("act");
          pg[i].style.display = "none";
          console.log(pi[i]);
          pi[i].classList.remove("iact");
        }
        pga = document.getElementsByClassName("col")[e];
        console.log(pga);
        pga.style.display = "block";
        var ch = pi[e].classList.add("iact");
      }
      function load() {
        pg(0);
      }
      var edt = 0;
      function edit() {
        var sbtn = document.getElementById("sbtn");
        var inp = document.getElementsByClassName("sin");
        if (edt == 0) {
          for (var i = 0; i < inp.length; i++) {
            inp[i].disabled = false;
            inp[i].style.opacity = "1";
          }
          sbtn.innerHTML = "Save";
          edt = 1;
        } else {
          sbtn.innerHTML = "Edit Profile";
          for (var i = 0; i < inp.length; i++) {
            inp[i].disabled = true;
            inp[i].style.opacity = "0.5";
          }
          edt = 0;
        }
      }
    </script>
    <script type="text/javascript">
      function sendEmail() {
        Email.send({
          Host: "smtp.gmail.com",
          Username: "sender@email_address.com",
          Password: "Enter your password",
          To: "harishrahul5108@gmail.com",
          From: "navgosoft@gmail.com",
          Subject: "SOS,He/She is in danger!",
          Body: "Im in danger.HELP!",
        }).then(function (message) {
          alert("mail sent successfully");
        });
      }
    </script>
  </body>
</html>
