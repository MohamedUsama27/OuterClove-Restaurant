<?php
@include 'config.php';


?>



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

            <?php
      
                    $select_rows = mysqli_query($connfood, "SELECT * FROM `cart`") or die('query failed');
                    $row_count = mysqli_num_rows($select_rows);

             ?>

            

            <ul>
                <li> <a href="#Home">Home</a> </li>
                <li> <a href="#About">About</a> </li>
                <li> <a href="#Promotion">Promotion</a> </li>
                <li> <a href="#Menu">Menu</a> </li>
                <li> <a href="#Facilities">Facilities</a> </li>
                <li> <a href="#Review">Review</a> </li>
                <li> <a href="feedback.php">Feedback</a> </li>
                <li> <a href="main_page.php">LOGOUT</a> </li>
                
                
            </ul>

            <div class="icon">
                <img src="images/searchicon.jpg" width="18px">
                <img src="images/love.png" width="18px">
                <a href="cart.php" class="cart"><img src="images/carticon.png" width="30px"><span><?php echo $row_count; ?></span></a>
            </div>

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
            <a href="menu.php">Order Now</a>
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
            <a href="menu.php">Order Now</a>
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
                    <a href="menu.php">Order Now</a>
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
                    <a href="menu.php">Order Now</a>
                </div>
            </div>
        </div>

            
            </div>

    
        </div>




    <!-------menu------->

    <div class="menu" id="Menu">
        <h1>Our<span>Menu</span></h1>

        <div class="menu_box">


        <!--item 1-->


        <div class="menu_card">

            <div class="menu_image1">
                <img src="uploaded_img/burger_pic.jpg">
            </div>

            <div class="menu_info">
                <h2>
                   Chicken Burger
                </h2>
                <p>
                    Delight in our Chicken Patty Burger, a symphony of succulent flavors with perfectly grilled
                     chicken, soft buns, and gooey melted cheese.
                </p>

                <h3>LKR 1290</h3>

                <div class="menu_btn">
                    <a href="menu.php">Order Now</a>
                </div>
            </div>
        </div>

         <!--item 2-->

        <div class="menu_card">

            <div class="menu_image1">
                <img src="uploaded_img/Chicken-wings.jpg">
            </div>

            <div class="menu_info">
                <h2>
                    Chicken Wings
                </h2>
                <p>
                    Savor a dozen crispy Chicken Wings, bursting with flavor. Paired with a tangy white sauce, 
                    this combo elevates your wing experience.
                </p>

                <h3>LKR 3390</h3>

                <div class="menu_btn">
                    <a href="menu.php">Order Now</a>
                </div>
            </div>
        </div>

         <!--item 3-->

        <div class="menu_card">

            <div class="menu_image1">
                <img src="uploaded_img/supreme_pizza.jpg">
            </div>

            <div class="menu_info">
                <h2>
                    Supreme Pizza
                </h2>
                <p>
                    Savor Supreme Pizza: a medley of sausage, pepperoni, fresh veggies, and gooey cheese,
                     creating a symphony of taste in every slice. Ultimate indulgence!
                </p>

                <h3>LKR 2790</h3>

                <div class="menu_btn">
                    <a href="menu.php">Order Now</a>
                </div>
            </div>
        </div>

         <!--item 4-->

        <div class="menu_card">

            <div class="menu_image1">
                <img src="uploaded_img/pasta.jpg">
            </div>

            <div class="menu_info">
                <h2>
                    Chicken Alfredo Pasta
                </h2>
                <p>
                    Savor our Chicken Alfredo Pasta: perfect pasta, grilled chicken, velvety Alfredo—simple, 
                    sophisticated, and utterly delicious.
                </p>

                <h3>LKR 1150</h3>

                <div class="menu_btn">
                    <a href="menu.php">Order Now</a>
                </div>
            </div>
        </div>

         <!--item 5-->

        <div class="menu_card">

            <div class="menu_image1">
                <img src="uploaded_img/whitericeandcurry.jpg">
            </div>

            <div class="menu_info">
                <h2>
                    Rice and Curry
                </h2>
                <p>
                    A Sri Lankan meal that truly satisfies a Lankan soul. No matter the 
                    cuisine you indulge in, none can compete with a plate of rice, parippu, pol sambol and mallum.
                </p>

                <h3>LKR 790</h3>

                <div class="menu_btn">
                    <a href="menu.php">Order Now</a>
                </div>
            </div>
        </div>

         <!--item 6-->

        <div class="menu_card">

            <div class="menu_image1">
                <img src="uploaded_img/Yellow Ricee.jpg">
            </div>

            <div class="menu_info">
                <h2>
                    Yellow Rice and Curry
                </h2>
                <p>
                    Savor vibrant Yellow Rice and Curry: fragrant basmati, exotic spices, 
                    and luscious chicken curry. Culinary delight awaits!
                </p>

                <h3>LKR 790</h3>

                <div class="menu_btn">
                    <a href="menu.php">Order Now</a>
                </div>
            </div>
        </div>

         <!--item 7-->

        <div class="menu_card">

            <div class="menu_image1">
                <img src="uploaded_img/Classic Indian Lamb Biriyani.jpg">
            </div>

            <div class="menu_info">
                <h2>
                    Classic Indian Lamb Biriyani
                </h2>
                <p>
                    Savor classic Indian lamb biryani: succulent, spiced lamb in fragrant 
                    rice layers—a flavorful, rich delight.
                </p>

                <h3>LKR 3490</h3>

                <div class="menu_btn">
                    <a href="menu.php">Order Now</a>
                </div>
            </div>
        </div>

         <!--item 8-->

        <div class="menu_card">

            <div class="menu_image1">
                <img src="uploaded_img/Pesto Green Rice.jpg">
            </div>

            <div class="menu_info">
                <h2>
                    Pesto Green Rice
                </h2>
                <p>
                    Savor easy Pesto Green Rice, elevating Hiru Keeri Samba with pesto, 
                    fresh herbs, and almond slices.
                </p>

                <h3>LKR 2290</h3>

                <div class="menu_btn">
                    <a href="menu.php">Order Now</a>
                </div>
            </div>
        </div>
        

        <!--item 9-->

        <div class="menu_card">

            <div class="menu_image1">
                <img src="uploaded_img/Ice-Cream.jpg">
            </div>

            <div class="menu_info">
                <h2>
                    Ice Cream
                </h2>
                <p>
                    Savor timeless delight with our Madagascar Vanilla Ice Cream—creamy
                     richness, pure vanilla essence—a classic, comforting treat.
                </p>

                <h3>LKR 690</h3>

                <div class="menu_btn">
                    <a href="menu.php">Order Now</a>
                </div>
            </div>
        </div>

        <!--item 10-->

        <div class="menu_card">

            <div class="menu_image1">
                <img src="uploaded_img/chocolate molten cakes.jpg">
            </div>

            <div class="menu_info">
                <h2>
                    Chocolate Molten Cake
                </h2>
                <p>
                    Satisfy cravings with our decadent Chocolate Molten Cakes—an irresistible blend
                     of warm, gooey centers and perfection.
                </p>

                <h3>LKR 2290</h3>

                <div class="menu_btn">
                    <a href="menu.php">Order Now</a>
                </div>
            </div>
        </div>

        <!--item 11-->

        <div class="menu_card">

            <div class="menu_image1">
                <img src="uploaded_img/Gulab Jamun.jpg">
            </div>

            <div class="menu_info">
                <h2>
                    Gulab Jamun
                </h2>
                <p>
                    Savor the decadence of our Gulab Jamun—a divine fusion of khoya dumplings, 
                    rose-infused syrup, and soul-satisfying sweetness. Unleash dessert perfection in every bite.
                </p>

                <h3>LKR 990</h3>

                <div class="menu_btn">
                    <a href="menu.php">Order Now</a>
                </div>
            </div>
        </div>

        <!--item 12-->

        <div class="menu_card">

            <div class="menu_image1">
                <img src="uploaded_img/Watermelon-Juice.jpg">
            </div>

            <div class="menu_info">
                <h2>
                    Watermelon Juice
                </h2>
                <p>
                    Savor summer with our ripe Watermelon—bursting with sweetness, 
                    it's a hydrating, invigorating delight of sun-kissed days.
                </p>

                <h3>LKR 550</h3>

                <div class="menu_btn">
                    <a href="menu.php">Order Now</a>
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
            <a href="reservation.php" class="reservation-btn">Reserve a Table Now!</a>
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


</body>

</html>