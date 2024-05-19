<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Outer Clove</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

<div class="bg">

<video autoplay loop muted plays-inline class="bg_video">
    <source src="images/Video.mp4" type="video/mp4">
</video>
</div>

 
    <!---------Home--------->

    <section id="Home">

        <nav>

            <div class="logo1">
                <img src="images/logo.jpg">
                
            </div>


            <div class="logo">
                <img src="images/logo_name.png">
            </div>

            <ul>
                <li> <a href="#Home">Home</a> </li>
                <li> <a href="#About">About</a> </li>
                <li> <a href="#Promotion">Promotion</a> </li>
                <li> <a href="#Facilities">Facilities</a> </li>
                <li> <a href="#Review">Review</a> </li>
                <button class="Loginbtn">Login</button>
                
            </ul>

            

        </nav>



        <div class="main">

            <div class="men_text">
                <h1>Get Yummy<span>Food</span><br>in a Easy Way</h1>
            </div>

            <div class="main_image">
                <img src="images/mainlogo.png" width="750">
            </div>

        </div>

        <p>
            Welcome to Outer Clove, a haven in the heart of Colombo, seamlessly blendin  g culinary artistry with 
            coastal charm for an unparalleled dining experience. Our menu, a symphony of seasonal flavors, showcases a 
            commitment to excellence. Amidst modern elegance and timeless allure, relish signature dishes crafted by passionate 
            chefs or soak in the ambient glow. Outer Clove is a celebration of culinary mastery, shared indulgence, and 
            cherished memories. Join us for a gastronomic journey where every meal is a masterpiece, and 
            every guest a cherished friend.
        </p>

        <div class="order_btn">
            <a href="#">Order Now</a>
            <img src="images/arrow_icon.png" width="13px">
        </div>

    </section>


    

    <!---------about--------->

    <div class="about" id="About">
        <div class="about_main">

        <div class="image">
            <img src="uploaded_img/plate.png">
        </div>

        <div class="about_text">
            <h1><span>About</span>Us</h1>
            <h3>Why Choose us?</h3>
            <p>
                Discover unparalleled culinary excellence at The Outer Clove, a distinguished restaurant chain 
                gracing cities across Sri Lanka. Elevate your dining experience with our commitment to using the 
                finest local and seasonal ingredients, expertly crafted by passionate chefs. Our blend of modern 
                sophistication and warm hospitality creates an inviting atmosphere, ensuring each visit is a celebration 
                of taste and tradition. Choose The Outer Clove for an unforgettable journey into exquisite flavors and
                 shared moments, where every dish tells a story of culinary mastery. Welcome to a world of 
                 exceptional dining.
            </p>
             </div>
        </div>

        <div class="about_btn">
            <a href="#">Order Now</a>
        </div>
    </div>



     <!---------Promotion--------->

        <div class="promo" id="Promotion">
            <h1>Weekly<span>Promotion</span></h1>

            <div class="promo_box">

                <!--item 1-->


        <div class="promo_card">

            <div class="promoimg">
                <img src="images/burger_promo_pic.png" width="50px">
        
            </div>

                <div class="promo_btn">
                    <a href="#">Order Now</a>
                </div>
        </div>


        <!--item 2-->


        <div class="promo_card">

            <div class="promoimg">
                <img src="images/offer chicken wings.png" width="50px">
                <h1>15% OFF</h1>
            </div>

            <div class="promo_info">

                <div class="promo_btn">
                    <a href="#">Order Now</a>
                </div>
            </div>
        </div>

            
            </div>

    
        </div>




     <!------------Facilities------------->


     <?php
if(isset($message)){
    foreach($message as $message){
       echo '<div class="message"> <span>'.$message.'</span> 
       <i class="x_icon" onclick="this.parentElement.style.display = `none`;">
            <img src="images/x_icon.png" width="18px">
       </i> 
       </div>';
    };
 };
?>
     

     <div class="facilities" id="Facilities">

        <div class="facilities_text">
            <h2>Premium<span>Facilities</span><br>at Outer Clove</h2>

            <ul>
                <li>Parking Availability</li>
                <li>40 Seat Capacities</li>
                <li>Free Wifi</li>
                <li>Well Trained Staff</li>
            </ul>

        <div>
            <a href="#" class="reservation-btn">Reserve a Table Now!</a>
        </div>

        </div>

        

        <div class="slider">
            <div class="slides">
            
             <input type="radio" name="radio-btn" id="radio1">
             <input type="radio" name="radio-btn" id="radio2">
             <input type="radio" name="radio-btn" id="radio3">
             <input type="radio" name="radio-btn" id="radio4">
             <input type="radio" name="radio-btn" id="radio5">

             <div class="slide first">
                <img src="images/facility-1.jpg" alt="">
             </div>

             <div class="slide">
                <img src="images/facility-2.jpg" alt="">
             </div>

             <div class="slide">
                <img src="images/facility-3.jpg" alt="">
             </div>

             <div class="slide">
                <img src="images/facility-4.jpg" alt="">
             </div>

             <div class="slide">
                <img src="images/ facility-5.jpg" alt="">
             </div>
 
             <div class="navigation-auto">
                <div class="autobtn1"></div>
                <div class="autobtn2"></div>
                <div class="autobtn3"></div>
                <div class="autobtn4"></div>
                <div class="autobtn5"></div>
             </div>
             </div>

            <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
            <label for="radio5" class="manual-btn"></label>
            </div>
        </div>
     </div>




    <!------------Review------------->

    <div class="review" id="Review">
    <h1>Customer<span>Review</span></h1>

    <div class="review_box">

        <div class="review_card">

            <div class="review_profile">
                <img src="images/Aqeel.png">
            </div>

            <div class="review_text">
                <h2 class="name">Aqeel Yehiya</h2>

                <p>
                    This cozy restaurant has left the best impressions! Hospitable hosts, 
                    delicious dishes, beautiful presentation, wonderful desserts. I recommend to everyone!
                     I would like to come back here again and again
                </p>

            </div>

        </div>

        <div class="review_card">

            <div class="review_profile">

                <img src="images/Sura.jpg">
            </div>

            <div class="review_text">
                <h2 class="name">Suraniya Ravimoorthy</h2>

                <p>
                    This place is great! Atmosphere is chill and cool, The staff is also really friendly. 
                    They know what they are doing and what they are talking about, and you can tell making the 
                    customers happy is their main priority. Food is pretty good, some italian classics and some twists, 
                    and for their prices its 100% worth it.
                </p>

            </div>

        </div>

        <div class="review_card">

            <div class="review_profile">
                <img src="images/Swe.jpg">
            </div>

            <div class="review_text">
                <h2 class="name">Swetha Chandrabose</h2>

                <p>
                    Do yourself a favor and visit this lovely restaurant in Colombo. The service is unmatched. 
                    The staff truly cares about your experience. The food is absolutely amazing, everything we 
                    tasted melted in other mouths. Absolutely the best meal we had while in Colombo. Highly recommend!
                </p>

            </div>

        </div>

        <div class="review_card">

            <div class="review_profile">
                <img src="images/Dula.jpg">
            </div>

            <div class="review_text">
                <h2 class="name">Dulaj Dulmin</h2>

                <p>
                    Its a great experience. The ambiance is very welcoming and charming. Amazing food and service. 
                    Staff are extremely knowledgeable and make great recommendations.
                </p>

            </div>

        </div>

    </div>

    </div>



    <!-------------------------Team------------------------->

    <div class="team">
    <h1>Our<span>Team</span></h1>

    <div class="team_box">
        
        <div class="profile">
            <img src="images/chef_vector.jpg">

            <div class="info">
                <h2 class="name">Chef Gabriella</h2>
                <p class="bio">Executive Chef</p>

            </div>

        </div>

        <div class="profile">
            <img src="images/chef_vector.jpg">

            <div class="info">
                <h2 class="name">Chef Miguel </h2>
                <p class="bio">Sous Chef (Grill and Fire Specialist)</p>
            </div>


        </div>

        <div class="profile">
            <img src="images/chef_vector.jpg">

            <div class="info">
                <h2 class="name">Chef Mei-Lin</h2>
                <p class="bio">Pastry Chef</p>

            </div>

        </div>

        <div class="profile">
            <img src="images/chef_vector.jpg">

            <div class="info">
                <h2 class="name">Chef Alejandro</h2>

                <p class="bio">Head Chef de Cuisine</p>

            </div>

        </div>

    </div>

    </div>

    

    <!----------------------Footer----------------------->

    <footer>
    <div class="footer_main">

        <div class="footer_tag">
            <h2>Location</h2>
            <p>Colombo</p>
            <p>Ratnapura</p>
            <p>Dehivala</p>
        </div>

        <div class="footer_tag">
            <h2>Quick Link</h2>
            <p>Home</p>
            <p>About</p>
            <p>Promotion</p>
            <p>Menu</p>
            <p>Facilities</p>
            <p>Review</p>
        </div>

        <div class="footer_tag">
            <h2>Contact</h2>
            <p>+94 71 7878 014</p>
            <p>+94 75 7878 014</p>
            <p>outerclove@gmail.com</p>
            <p>outerclove.business@gmail.com</p>
        </div>

        <div class="footer_tag">
            <h2>Our Service</h2>
            <p>Take Away</p>
            <p>Dining</p>
            <p>Fast Delivery</p>
            
        </div>


    </div>

    <p class="end">Designed by<span>☻ MR Usama 2023©️</span></p>

    </footer>




    </body>

    <!---------login--------->

    <div class="wrapper">
    <span class="xbtn">
        <a> <img src="images/xbtn.png" width="20px"> </a>

    </span>

    <div class="loginformbox">
        <h2>Login</h2>
        
        <form action="#">
            

        <div class="btn1">
            <a href="customer_login.php">Login as Customer</a>
            
        </div>

            <div class="login-reg">
                <p><a href="#" class="reg-link"></a></p>
            </div> 

        <div class="btn1">
            <a href="login_form.php">Login as Admin/Staff</a>
            
        </div>
            
        </form>
    </div>


    <div class="regformbox">
        <h2></h2>
        
        <form action="#">
            <div class="login-reg">
                <p><a href="#" class="login-link"></a></p>
            </div> 

        </form>
    </div>
    </div>


<!-------------------Script------------------->

    <script>
        const wrapper = document.querySelector('.wrapper');
        const loginlink = document.querySelector('.login-link');
        const reglink = document.querySelector('.reg-link');
        const btnPopup = document.querySelector('.Loginbtn');
        const closebtn = document.querySelector('.xbtn');

        reglink.addEventListener('click', () => {
            wrapper.classList.add('active');
            });

        loginlink.addEventListener('click', () => {
            wrapper.classList.remove('active');
            });

        btnPopup.addEventListener('click', () => {
            wrapper.classList.add('active-popup');
            });

        closebtn.addEventListener('click', ()=>{
            wrapper.classList.remove('active-popup'); 
            });
    </script>  

    <script type ="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4){
                counter = 1;
            }
        }, 3000);
    </script>


</body>

</html>