<?php
session_start();

// Check if the database is installed
if (!file_exists('installed.txt')) {
    // If not installed, run installer
    header('Location: install.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clinic web site</title>
    <link rel="stylesheet" href="fontawesome-free-6.7.2-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!--header section start-->
    <header class="header">

        <a href="#" class="logo"><i class="fas fa-heartbeat"></i>medcare. </a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#about">about</a>
            <a href="#doctors">doctors</a>
            <a href="#book">book</a>
            <a href="#review">review</a>
            <a href="#blog">blogs</a>
            <a class="btn" href="profile.php"><i class="fas fa-user"></i> profile</a>
            <a class="btn" href="login.html">login</a>
            <a class="btn" href="register.html">register</a>
        </nav>
       
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>
    <!--header section end-->

<!--home section starts-->

    <section class="home" id="home">
        <div class="image">
            <img src="doctor-animate.svg" alt="">
</div>
            <div class="content">
                <h3>stay safe, stay healthy</h3>
                <p>Welcome to MedCar Clinic ,
                 Your Trusted Partner in Health and Wellness
                 At MedCar Clinic, we are committed to providing exceptional healthcare services with a focus on compassion, expertise, and personalized care. Our experienced team of medical professionals is dedicated to addressing your health needs with the highest standard of care.

                </p>
                <a href="#contact" class="btn">contact us<span class="fas fa-chevron-right"></span></a>

            </div>




    </section>
    <!-- icons section starts -->
     

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>140+</h3>
            <p>doctors at work</p>
        </div>

        <div class="icons">
            <i class="fas fa-user"></i>
            <h3>1040+</h3>
            <p>satisfied patients</p>
        </div>

        <div class="icons">
            <i class="fas fa-bed"></i>
            <h3>500+</h3>
            <p>bed facility</p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>80+</h3>
            <p>avaiilable hospitals</p>
        </div>

    </section>



<!--home section ends-->


<section class="services" id="services">

    <h1 class="heading">our <span>services</span></h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Take advantage of our free health checkups and stay on top of your well-being. Our expert team provides essential screenings to help detect any potential health concerns early.

</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
        
        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Call us anytime for fast, professional, and compassionate care. We're here for you around the clock!</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Trust MedCar's expert doctors to guide you on your path to better health</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Visit MedCar Clinic today for your prescriptions and expert medication advice.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>Choose MedCar Clinic for your healthcare needs, where comfort and care go hand in hand.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
                <h3>total care</h3>
            <p>Experience total care at MedCar Clinic, where your health is our complete priority.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>



    </div>



</section>


<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>
    <div class="row">

        <div class="image">
            <img src="cardiologist-animate.svg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>Our team of expert doctors, nurses, and healthcare professionals work together to deliver comprehensive care in a comfortable and supportive environment. From routine check-ups and preventative care to specialized treatments and emergency services, we are here to guide you every step of the way.</p>
            <p>At MedCar Clinic, we offer a range of services, including free checkups, 24/7 ambulance services, high-quality medications, comfortable bed facilities, and total care for all ages. We take pride in making healthcare accessible and ensuring that you receive the best possible care at all times.</p>
             <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">
        <div class="box">
            <img src="Dr.-Mohammad-Arab2022.jpg" alt="">
            <h3>Mohammad Arab</h3>
            <span>Registrar of Orthopedic</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>

        <div class="box">
            <img src="Haytham_Salti .jpg" alt="">
            <h3>Haytham Salti</h3>
            <span>Staff Physician, Retina</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>

        <div class="box">
            <img src="dr mekaoui.jpeg" alt="">
            <h3>Dr.mekaoui</h3>
            <span>CARDIO</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>

        <div class="box">
            <img src="dr hani najm.jpeg" alt="">
            <h3>hani najm</h3>
            <span>congenital cardiac surgery specialist</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>
        <div class="box">
            <img src="zaki-almallah.png" alt="">
            <h3>zaki-almallah</h3>
            <span>professor of urology</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>

            </div>
        </div>
    </div>
</section>
<!-- book section start  -->

<section class="book" id="book">
<h4 class="heading"><span>book</span> now </h4>
<div class="row">
    <div class="image">
        <img src="cardiologist-animate.svg" alt="">
    </div>
    <form action="handle_booking.php" method="post">
        <h3>book appointment</h3>
        <input type="text" name="name" placeholder="your name" class="box">
        <input type="number" name="number" placeholder="your number" class="box">
        <input type="email"  name="email" placeholder="your email" class="box">
        <input type="date" name="date" class="box">
        <input type="submit" value="book now" class="btn">
    </form>
</div>
</section>
<!-- book section end -->
<!-- review section start -->
 <section class="review" id="review">
<h1 class="heading">client's <span>review</span></h1>
<div class="box-container">
    <div class="box">
        <img src="beta.gif"  alt="">
        <h3>b3ta</h3>
         <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        </div>
        <p class="text">
            I've been visiting MedCar Clinic for a while now, and I can't say enough about the amazing care I’ve received. The doctors are knowledgeable, and the staff is so friendly and attentive. They make you feel like part of the family. I recently took advantage of their free checkup offer, and it was such a smooth experience. Highly recommend MedCar Clinic for anyone looking for top-notch healthcare!
        </p>
    </div>
    <div class="box">
        <img src="beta.gif"  alt="">
        <h3>b3t4</h3>
         <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        </div>
        <p class="text">
            Had to use their 24/7 ambulance service for an emergency, and I was incredibly impressed with how fast and professional the team was. They arrived quickly, and the staff kept me calm and informed throughout the whole ride to the clinic. The level of care and support was exceptional. Thank you, MedCar, for being there when I needed you most!
        </p>
    </div>    <div class="box">
        <img src="beta.gif"  alt="">
        <h3>b3t4</h3>
         <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        </div>
        <p class="text">
            MedCar Clinic offers everything you could possibly need in one place—routine check-ups, expert treatment, and even great medication services. The doctors are very thorough and take the time to explain everything. I also love the comfortable bed facilities—they really make you feel at home when you're recovering. I trust MedCar for all my healthcare needs!
        </p>
    </div>
   
</div>
 </section>
 <!-- review end -->
  <!-- blog section start  -->

  <section class="blog" id="blog">
    <h1 class="heading">our <span>blogs</span></h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
            <img src="food.jpg"alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calendar">1'st way 2025</i>
                    <a href="#"><i class="fas fa-user">  admin</i></a>
                </div>
                    <h3>healthy food</h3>
                    <p>Eating the right foods provides the energy and nutrients your body needs to perform at its best, recover efficiently, and build strength</p>
                        <a href="#" class="btn">learn more<span class="fas fa-chevron-right "></span></a>
                
            </div>
        </div>
        <div class="box">
            <div class="image">
            <img src="cofee.jpg"alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calendar">1'st way 2025</i></a>
                    <a href="#"><i class="fas fa-user">by admin</i></a>
                </div>
                    <h3>Coffee</h3>
                    <p>Coffee also holds cultural significance in many parts of the world.</p>
                        <a href="#" class="btn">learn more <span class="fas fa-chevron-right "></span></a>
                
            </div>
        </div>
        <div class="box">
            <div class="image">
            <img src="sport.jpg"alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calendar">1'st way 2025</i>
                    <a href="#"><i class="fas fa-user">by admin</i></a>
                </div>
                    <h3>sport</h3>
                    <p>Exercise and physical activity are cornerstones of good health</p>
                        <a href="#" class="btn">learn more<span class="fas fa-chevron-right "></span></a>
                
            </div>
        </div>
    </div>
  </section>
   <!-- blog end -->

   <!-- fooer section start -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quic links</h3>
            <a href="#"><i class="fas fa-chevron-right "></i>services</a>
            <a href="#"><i class="fas fa-chevron-right "></i>home</a>
            <a href="#"><i class="fas fa-chevron-right "></i>about</a>
            <a href="#"><i class="fas fa-chevron-right "></i>doctors</a>
            <a href="#"><i class="fas fa-chevron-right "></i>book</a>
            <a href="#"><i class="fas fa-chevron-right "></i>review</a>
            <a href="#"><i class="fas fa-chevron-right "></i>blogs</a>
        </div>
        <div class="box">
            <h3>our services</h3>
            <a href="#"><i class="fas fa-chevron-right "></i>cardiology</a>
            <a href="#"><i class="fas fa-chevron-right "></i>ambulance service</a>
            <a href="#"><i class="fas fa-chevron-right "></i>dental care</a>
            <a href="#"><i class="fas fa-chevron-right "></i>diagnosis</a>
        </div>
        <div class="box">
            <h3 id="contact">contact info</h3>
            <a href="#"><i class="fas fa-phone "></i>0599331247</a>
            <a href="#"><i class="fas fa-phone "></i>0632589744</a>
            <a href="#"><i class="fas fa-envelope "></i>zakaria@gmail.com</a>
            <a href="#"><i class="fas fa-envelope "></i>taha@gmail.com</a>
            <a href="#"><i class="fas fa-map-marker-alt "></i>Aintemouchent , algiers -ubbat</a>
        </div>
        <div class="box">
            <h3>folow us</h3>
            <a href="#"><i class="fab fa-facebook-f "></i>facebook</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-twitter "></i>twitter</a>
            <a href="#"><i class="fab fa-linkedin "></i>linkedin</a>
            <a href="#"><i class="fab fa-pinterest "></i>piterest</a>
        </div>

    </div>
    <div class="credit">created by <span>bn.zakaria , mk.taha , bn.kouider</span></div>

</section>






   <!-- footer secrion end -->

    <script src="script.js"></script>


</body>
</html>
