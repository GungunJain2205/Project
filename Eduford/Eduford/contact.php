
<?php 
include('connect.php');
if (isset($_POST["sign"])) {
    $Name= $_POST["name"];
    $Email= $_POST["email"];
    $Subject= $_POST["subject"];
    $Message= $_POST["message"]; 
    $queryString = "INSERT INTO `registerform`(`name`, `email`, `subject`, `message`) VALUES ('$Name','$Email','$Subject','$Message')";
    mysqli_query($conn,$queryString);
    echo "<script>alert('Data Inserted')</script>";
    mysqli_close($conn);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIVERSITY WEBSITE DESIGN</title>
    <link rel="stylesheet" href="website.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6f4e47a6f1.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="website.html"> <img src="images/logo.png" ></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="home.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="course.html">COURSE</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    <h1>Contact Us</h1>
    </section>

   <!--contact us-->
    
   <section class="location">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.8491629649!2d77.63093949999997!3d12.953997400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1694967043281!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </section>

   <section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>Ring Road, CG Building</h5>
                    <p>Banglore,Karnataka,IN</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+91 8003289285</h5>
                    <p>Monday to Saturday,10AM to 6PM</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>gungunjain2205@gmail.com</h5>
                    <p>Email us your query</p>
                </span>
            </div>
        </div>
        <div class="contact-col">
        
        <!-- <form onsubmit="sendEmail(); reset(); return false;"> -->
            <form action="" method="post">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter email address" required>
            <input type="text" name="subject" placeholder="Enter your subject" required>
            <textarea rows="8" name="message" placeholder="Message" required></textarea>
            <input type="submit" name="sign" class="hero-btn red-btn">Send Message</button>
        </form>
    </div>
   </section>
     <!-- footer -->
     <section class="footer">
        <h4>About Us</h4>
        <p>We make lives better by producing leaders of society and equipping our people with leadership qualities so they can serve our communities at every level. <br>A well-designed website can serve as the hub of your nonprofit's online presence, helping you educate new supporters.</p>

        <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by Easy Tutorials</p>
     </section>
     <!-- <script src=" https://smtpjs.com/v3/smtp.js"></script>
     <script>
        function sendEmail(){
            Email.send({
                Host : "smtp.gmail.com",
                Username : "gungunjain2205@gmail.com",
                Password : "@@2003-4-22@@",
                To : 'gungunjain0507@gmail.com',
                From : document.getElementById("email").value,
                Subject : "New Contact Form Enquiry",
                Body : "Name:" + document.getElementById("name").value
                      + "<br> Email:" + document.getElementById("email").value
                      + "<br> Subject:" + document.getElementById("subject").value
                      + "<br> Message:" + document.getElementById("message").value
            }).then(
            message => alert("Message Sent Successfully")
            );
        }
     </script> -->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>
</body>
</html>