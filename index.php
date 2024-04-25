<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../public/resident.css">
    <link rel="stylesheet" href="../public/index.css">
</head>
<body>
        <!--Section for nav bar-->
    <nav class="desktop_nav"> <!--Navbar for Destok view-->
        <div class="navbar">
            <div class="logo">LOGO</div>

            <div class="items">
                <div class="home"><a href="../mainpages/index.html">Home</a></div>
                <div class="services">Services
                    <div class="dropdown_content">
                        <p><a href="/view_products.php">All products</a>
                    </div>
                </div>
                <div class="aboutUs.html"><a href="../mainpages/contactus.html">Contact</a></div>

                <div class="display_signup">
                    <!-- <p><i class='bx bx-log-in'></i> Sign in business</p> -->
    
                    <div class="sign_up">
                        <p>Registration</p>
                        <div class="registeration">
                            <p><a href="../Resident/resident.html">Resident Registration</a></p>
                            <p><a href="../businesses/business_signup.html">Business Registration</a></p>
                            <p><a href="../products_services/products.html">Product Registration</a></p>
                        </div>
                    </div>
    
                </div>
            </div>
            
            <div class="search">
                <form id="desktop_navForm" class="btn" action="search_products.php" method="GET">
                    <input type="text" name="product_search" id="search" placeholder="Products-Services">
                    <button type="submit" id="search" class="button">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Nav bar fof mobile view-->
    <nav class="mobile_nav">
        <div class="navbar_mobile">
            <div class="logo">LOGO</div>

            <div>
                <div id="items_menu">
                    <i class='bx bx-menu' id="menu_icon" style="font-size: 23px;"></i>
                </div>

                <div class="items_mobile" id="items_mobile">
                    <div class="home"><a href="../mainpages/index.html">Home</a></div>
                    <div class="services">Services
                        <div class="dropdown_content">
                            <p><a href="view_products.php">View products</a>
                        </div>
                    </div>
                    <div class="aboutUs.html"><a href="../mainpages/contactus.html">Contact Us</a></div>

                    <div class="search">
                        <form id="mobile_navForm" class="btn" action="search_products.php" method="GET">
                            <input type="text" name="product_search" id="search" placeholder="Products-Services">
                            <button type="submit" name="Submit" id="search" class="button">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav> <!--End of nav bar-->

        <main>
             <!-- Background changer-->
             <div class="container-fluid backgroundChanger">
                <button id="background" type="button"><i class='backgroundNew bx bxs-moon' ></i></button>
            </div>

            <!-- Mini nav bar -->
            <div class="userLogin">
                <div class="logon">
                    <p>
                        <i class='bx bx-user user_icon' id=""></i>
                        <span class="username" id="username"></span>
                        <span><i id="user_icon" class='bx bx-chevron-down arrow_down'></i></span>
                    </p>
                    <div id="displayUserAdd" class="user_dispay">
                            <p id="user" class="display"></p>
                            <div class="display_signin">
                                <div class="sign_in">
                                    <p><a href="../Resident/resident_login.html">Resident Sign in</a></p>
                                    <p><a href="../businesses/business-login.html">Business Sign in</a></p>
                                    <p><a href="../admin/admin_login.html">Admin Sign in</a></p>
                                </div>
                            </div>
                            <!-- <p id="signUp">Sign Up</p> -->
                         </div>
                    </div>
             </div>

            <!-- Section to display company message-->
            <section class="eco_friendlySection">
                <div class="container-fluid">
                    <div class="container greencities_container">
                      <div class="container greencities">
                        <h1>Discover <span> Eco-Friendly Solutions </span>for Urban Living with Green Cities Alliance</h1> <br>
                        <div class="container alliance">
                          <p>Green Cities Alliance cultivates sustainable connections to foster healthier urban living. Join us as we work together to build a greener future for our communities.</p>
                        </div>
                      </div><br>
            
                      <div class="container imageContainer">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                      </div>
                    </div>

                    <div class="contain btn viewMenubtn">
                       <!-- <button class="button" id="viewMenubtn" type="button">View products <i class='bx bx-right-arrow-alt'></i></button>-->
                    </div>
                </div>
            </section>
          
            <!-- Section For product menu-->
            <div id="productMenuDisplay" class="productMenuDisplay">
                <i class='bx bx-x exitIcon' id="exitIcon"></i>
                <div id="productmenu_container" class="productmenu_container container-fluid">

                    <div class="product_container" id="product_container">
                        <div class="image_container">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                        </div>
                        
                        <div class="productName">
                            <p id="productName">Product Name</p>
                        </div>
    
                        <figure class="productDescription">
                            <figcaption id="productDescription">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, maiores harum explicabo adipisci, dolorum placeat dicta porro, sit beatae asperiores quibusdam! Molestiae odio iure aperiam commodi impedit! Ipsa repellendus quasi sapiente tempore officia natus dolorum eius ratione accusamus. Velit odio labore, placeat architecto ab reiciendis expedita error fuga quos totam ea non ad quibusdam officiis delectus dolorem asperiores doloribus voluptatum illo! Deserunt accusamus numquam dolorum ea, magnam itaque ullam animi neque minima quas libero possimus sit doloremque repellendus. Aliquam sed minus quasi eos, molestiae aut odit, illo deleniti animi quaerat dignissimos quam quis delectus laboriosam repellendus? Magni sint dignissimos saepe.</figcaption>
                        </figure>
    
                        <div class="productPrice">
                            <p id="price">500</p>
                        </div>
                    </div>
    
                    <div class="product-container">
                        <div class="image_container">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                        </div>
                        
                        <div class="productName">
                            <p id="productName">Product Name</p>
                        </div>
    
                        <figure>
                            <figcaption>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, maiores harum explicabo adipisci, dolorum placeat dicta porro, sit beatae asperiores quibusdam! Molestiae odio iure aperiam commodi impedit! Ipsa repellendus quasi sapiente tempore officia natus dolorum eius ratione accusamus. Velit odio labore, placeat architecto ab reiciendis expedita error fuga quos totam ea non ad quibusdam officiis delectus dolorem asperiores doloribus voluptatum illo! Deserunt accusamus numquam dolorum ea, magnam itaque ullam animi neque minima quas libero possimus sit doloremque repellendus. Aliquam sed minus quasi eos, molestiae aut odit, illo deleniti animi quaerat dignissimos quam quis delectus laboriosam repellendus? Magni sint dignissimos saepe.</figcaption>
                        </figure>
    
                        <div class="productPrice">
                            <p id="price">500</p>
                        </div>
                    </div>
    
                    <div class="product-container">
                        <div class="image_container">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                        </div>
                        
                        <div class="productName">
                            <p id="productName">Product Name</p>
                        </div>
    
                        <figure>
                            <figcaption>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, maiores harum explicabo adipisci, dolorum placeat dicta porro, sit beatae asperiores quibusdam! Molestiae odio iure aperiam commodi impedit! Ipsa repellendus quasi sapiente tempore officia natus dolorum eius ratione accusamus. Velit odio labore, placeat architecto ab reiciendis expedita error fuga quos totam ea non ad quibusdam officiis delectus dolorem asperiores doloribus voluptatum illo! Deserunt accusamus numquam dolorum ea, magnam itaque ullam animi neque minima quas libero possimus sit doloremque repellendus. Aliquam sed minus quasi eos, molestiae aut odit, illo deleniti animi quaerat dignissimos quam quis delectus laboriosam repellendus? Magni sint dignissimos saepe.</figcaption>
                        </figure>
    
                        <div class="productPrice">
                            <p id="price">500</p>
                        </div>
                    </div>
    
                    <div class="product-container">
                        <div class="image_container">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                        </div>
                        
                        <div class="productName">
                            <p id="productName">Product Name</p>
                        </div>
    
                        <figure>
                            <figcaption>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, maiores harum explicabo adipisci, dolorum placeat dicta porro, sit beatae asperiores quibusdam! Molestiae odio iure aperiam commodi impedit! Ipsa repellendus quasi sapiente tempore officia natus dolorum eius ratione accusamus. Velit odio labore, placeat architecto ab reiciendis expedita error fuga quos totam ea non ad quibusdam officiis delectus dolorem asperiores doloribus voluptatum illo! Deserunt accusamus numquam dolorum ea, magnam itaque ullam animi neque minima quas libero possimus sit doloremque repellendus. Aliquam sed minus quasi eos, molestiae aut odit, illo deleniti animi quaerat dignissimos quam quis delectus laboriosam repellendus? Magni sint dignissimos saepe.</figcaption>
                        </figure>
    
                        <div class="productPrice">
                            <p id="price">500</p>
                        </div>
                    </div>
    
                    <div class="product-container">
                        <div class="image_container">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                        </div>
                        
                        <div class="productName">
                            <p id="productName">Product Name</p>
                        </div>
    
                        <figure>
                            <figcaption>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, maiores harum explicabo adipisci, dolorum placeat dicta porro, sit beatae asperiores quibusdam! Molestiae odio iure aperiam commodi impedit! Ipsa repellendus quasi sapiente tempore officia natus dolorum eius ratione accusamus. Velit odio labore, placeat architecto ab reiciendis expedita error fuga quos totam ea non ad quibusdam officiis delectus dolorem asperiores doloribus voluptatum illo! Deserunt accusamus numquam dolorum ea, magnam itaque ullam animi neque minima quas libero possimus sit doloremque repellendus. Aliquam sed minus quasi eos, molestiae aut odit, illo deleniti animi quaerat dignissimos quam quis delectus laboriosam repellendus? Magni sint dignissimos saepe.</figcaption>
                        </figure>
    
                        <div class="productPrice">
                            <p id="price">500</p>
                        </div>
                    </div>
    
                    <div class="product-container">
                        <div class="image_container">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                        </div>
                        
                        <div class="productName">
                            <p id="productName">500</p>
                        </div>
    
                        <figure>
                            <figcaption>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, maiores harum explicabo adipisci, dolorum placeat dicta porro, sit beatae asperiores quibusdam! Molestiae odio iure aperiam commodi impedit! Ipsa repellendus quasi sapiente tempore officia natus dolorum eius ratione accusamus. Velit odio labore, placeat architecto ab reiciendis expedita error fuga quos totam ea non ad quibusdam officiis delectus dolorem asperiores doloribus voluptatum illo! Deserunt accusamus numquam dolorum ea, magnam itaque ullam animi neque minima quas libero possimus sit doloremque repellendus. Aliquam sed minus quasi eos, molestiae aut odit, illo deleniti animi quaerat dignissimos quam quis delectus laboriosam repellendus? Magni sint dignissimos saepe.</figcaption>
                        </figure>
    
                        <div class="productPrice">
                            <p id="price">500</p>
                        </div>
                    </div>
                </div>

                    <div id="productmenu_container" class="productmenu_container container-fluid">
                        <div class="product_container" id="product_container">
                            <div class="image_container">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                            </div>
                            
                            <div class="productName">
                                <p id="productName">Product Name</p>
                            </div>
        
                            <figure class="productDescription">
                                <figcaption id="productDescription">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, maiores harum explicabo adipisci, dolorum placeat dicta porro, sit beatae asperiores quibusdam! Molestiae odio iure aperiam commodi impedit! Ipsa repellendus quasi sapiente tempore officia natus dolorum eius ratione accusamus. Velit odio labore, placeat architecto ab reiciendis expedita error fuga quos totam ea non ad quibusdam officiis delectus dolorem asperiores doloribus voluptatum illo! Deserunt accusamus numquam dolorum ea, magnam itaque ullam animi neque minima quas libero possimus sit doloremque repellendus. Aliquam sed minus quasi eos, molestiae aut odit, illo deleniti animi quaerat dignissimos quam quis delectus laboriosam repellendus? Magni sint dignissimos saepe.</figcaption>
                            </figure>
        
                            <div class="productPrice">
                                <p id="price">500</p>
                            </div>
                        </div>
        
                        <div class="product-container">
                            <div class="image_container">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                            </div>
                            
                            <div class="productName">
                                <p id="productName">Product Name</p>
                            </div>
        
                            <figure>
                                <figcaption>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, maiores harum explicabo adipisci, dolorum placeat dicta porro, sit beatae asperiores quibusdam! Molestiae odio iure aperiam commodi impedit! Ipsa repellendus quasi sapiente tempore officia natus dolorum eius ratione accusamus. Velit odio labore, placeat architecto ab reiciendis expedita error fuga quos totam ea non ad quibusdam officiis delectus dolorem asperiores doloribus voluptatum illo! Deserunt accusamus numquam dolorum ea, magnam itaque ullam animi neque minima quas libero possimus sit doloremque repellendus. Aliquam sed minus quasi eos, molestiae aut odit, illo deleniti animi quaerat dignissimos quam quis delectus laboriosam repellendus? Magni sint dignissimos saepe.</figcaption>
                            </figure>
        
                            <div class="productPrice">
                                <p id="price">500</p>
                            </div>
                        </div>
        
                        <div class="product-container">
                            <div class="image_container">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                            </div>
                            
                            <div class="productName">
                                <p id="productName">Product Name</p>
                            </div>
        
                            <figure>
                                <figcaption>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, maiores harum explicabo adipisci, dolorum placeat dicta porro, sit beatae asperiores quibusdam! Molestiae odio iure aperiam commodi impedit! Ipsa repellendus quasi sapiente tempore officia natus dolorum eius ratione accusamus. Velit odio labore, placeat architecto ab reiciendis expedita error fuga quos totam ea non ad quibusdam officiis delectus dolorem asperiores doloribus voluptatum illo! Deserunt accusamus numquam dolorum ea, magnam itaque ullam animi neque minima quas libero possimus sit doloremque repellendus. Aliquam sed minus quasi eos, molestiae aut odit, illo deleniti animi quaerat dignissimos quam quis delectus laboriosam repellendus? Magni sint dignissimos saepe.</figcaption>
                            </figure>
        
                            <div class="productPrice">
                                <p id="price">500</p>
                            </div>
                        </div>
        
                        <div class="product-container">
                            <div class="image_container">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                            </div>
                            
                            <div class="productName">
                                <p id="productName">Product Name</p>
                            </div>
        
                            <figure>
                                <figcaption>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, maiores harum explicabo adipisci, dolorum placeat dicta porro, sit beatae asperiores quibusdam! Molestiae odio iure aperiam commodi impedit! Ipsa repellendus quasi sapiente tempore officia natus dolorum eius ratione accusamus. Velit odio labore, placeat architecto ab reiciendis expedita error fuga quos totam ea non ad quibusdam officiis delectus dolorem asperiores doloribus voluptatum illo! Deserunt accusamus numquam dolorum ea, magnam itaque ullam animi neque minima quas libero possimus sit doloremque repellendus. Aliquam sed minus quasi eos, molestiae aut odit, illo deleniti animi quaerat dignissimos quam quis delectus laboriosam repellendus? Magni sint dignissimos saepe.</figcaption>
                            </figure>
        
                            <div class="productPrice">
                                <p id="price">500</p>
                            </div>
                        </div>
        
                        <div class="product-container">
                            <div class="image_container">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                            </div>
                            
                            <div class="productName">
                                <p id="productName">Product Name</p>
                            </div>
        
                            <figure>
                                <figcaption>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, maiores harum explicabo adipisci, dolorum placeat dicta porro, sit beatae asperiores quibusdam! Molestiae odio iure aperiam commodi impedit! Ipsa repellendus quasi sapiente tempore officia natus dolorum eius ratione accusamus. Velit odio labore, placeat architecto ab reiciendis expedita error fuga quos totam ea non ad quibusdam officiis delectus dolorem asperiores doloribus voluptatum illo! Deserunt accusamus numquam dolorum ea, magnam itaque ullam animi neque minima quas libero possimus sit doloremque repellendus. Aliquam sed minus quasi eos, molestiae aut odit, illo deleniti animi quaerat dignissimos quam quis delectus laboriosam repellendus? Magni sint dignissimos saepe.</figcaption>
                            </figure>
        
                            <div class="productPrice">
                                <p id="price">500</p>
                            </div>
                        </div>
        
                        <div class="product-container">
                            <div class="image_container">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                            </div>
                            
                            <div class="productName">
                                <p id="productName">500</p>
                            </div>
        
                            <figure>
                                <figcaption>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, maiores harum explicabo adipisci, dolorum placeat dicta porro, sit beatae asperiores quibusdam! Molestiae odio iure aperiam commodi impedit! Ipsa repellendus quasi sapiente tempore officia natus dolorum eius ratione accusamus. Velit odio labore, placeat architecto ab reiciendis expedita error fuga quos totam ea non ad quibusdam officiis delectus dolorem asperiores doloribus voluptatum illo! Deserunt accusamus numquam dolorum ea, magnam itaque ullam animi neque minima quas libero possimus sit doloremque repellendus. Aliquam sed minus quasi eos, molestiae aut odit, illo deleniti animi quaerat dignissimos quam quis delectus laboriosam repellendus? Magni sint dignissimos saepe.</figcaption>
                            </figure>
        
                            <div class="productPrice">
                                <p id="price">500</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <br> <br>

            <!--Sectiion for our mission-->
            <div class="ourMission_container container">
                <div class="active">
                    <p>Active, clean and green spaces for everyone</p>
                </div>

                <div class="ourMissionContent">
                    <h3>Our mission…</h3>
                    <div>
                        <p>Our mission at the Green Cities Alliance is to spearhead a clear and ambitious approach to climate action within our communities. We aim to empower individuals, communities, educational institutions, and industries to take proactive steps towards sustainability.</p>

                        <p>Together, we will make conscious choices, support sustainable businesses, and adopt eco-friendly lifestyles to create greener and healthier cities."</p>
                    </div>

                    <div class="btn ourMissionbtn">
                        <button type="button" class="button">View the five year product plan</button>
                    </div>
                </div>
            </div>

            <!--Feel inspired section-->
            <div class="feelInspired_container containe">
                <div class="inspiredSection_one container">
                    <div class="feel">
                        <h1><span>Feel</span> inspired…</h1>
                    </div>

                    <div class="leading">
                        <p>Green Cities Alliance: Leading the Charge Towards Sustainability</p>

                        <p>Our mission at Green Cities Alliance is clear: to spearhead the transition towards sustainable urban living. Recognizing the critical role our environment plays in shaping our lives, we confront the urgent challenges posed by climate change. Our goal is ambitious yet achievable: to establish carbon-neutral cities by [insert target year</p>
                        
                        <p>We collaborate closely with leading businesses, community organizations, environmental advocates, educational institutions, and individuals who share our vision. Together, we drive tangible change, implementing eco-friendly practices and fostering a culture of sustainability.</p>

                        <p><b>Explore the impactful initiatives undertaken by members of the Green Cities Alliance community.</b></p>
                    </div>
                </div>

                <div class="inspiredSection_two container">
                    <div class="imageContainer">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                    </div>

                    <div class="imageContainer">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                    </div>

                    <div class="imageContainer">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                    </div>

                    <div class="imageContainer">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVGjOGN6nI7XHGtmKVnmp2wSTIPIQxre65vg&usqp=CAU" alt="">
                    </div>
                </div>

                <div class="btn container">
                    <button type="button" class="button">View all inspiration</button>
                </div>
            </div>


            <!-- Contact Us Section -->
        <div class="contactUs container">
            <h1>Contact Us</h1>

            <div class="contactUsFlex">
              <div class="contactUsPartOne">
                <div class="generalInfo">
                  <h3>General Information</h3>
                </div>
                <div class="contactUspara">
                  <p>For office hours and location, or to speak with a director, <a href="">click here.</a> For general inquiries, please send us a message or use the contact information below. We look forward to hearing from you!</p>
                </div>
                <div class="contactUsDetails">
                  <p class="firstPar">Toll Free: +447721742078</p>
                  <p class="firstPara"><a href="">greenallianceteamfive@gmail.com</a></p>
                </div>
              </div>

            <form action="https://formlinx.onrender.com/api/form/qYxVy8T8I" method="post" class="contactUsForm">
              
              <div class="lableName">
                <label for="name">Name</label>
              </div>

              <div class="input">
                <input type="text" name="FullName" id="name" placeholder="Enter FullName">
              </div> <br>

              <div class="labelEmail">
                <label for="email" >Email</label>
              </div>

              <div class="input">
                <input type="email" name="email" id="email" placeholder="Enter Email Address">
              </div> <br>

              <div class="textArea">
               <textarea name="Message" id="textArea" cols="30" rows="10" placeholder="Enter your message"></textarea>
              </div> <br>

              <div class="contactUsbtn">
                <button class="button" type="button">Send Message</button>
              </div>
            </form>
          </div>
        </div>
    
          <hr class="container hrOne" style="color: rgba(51, 51, 51, 0.651);">
          <hr class="container hrTwo" style="color: white;">


          <!-- Section for Newsletter -->
        <div class="newsletter">
            <div class="container newsletterFlex">

              <div class="newsletterSubscribe">
                <h4><span>Subscribe</span> to our Newsletter</h4>
                <p>Recieve information about new meals and promotions</p>
              </div>

              <div class="newsletterButton">
                <div class="newsletterButtonDisplay">
                  <input type="text" placeholder="Email Address" id="newsletterInput">
                  <!-- <div class="newsletterSend"><i id="newsletterSend" class='bx bxs-send'></i></div> -->
                  <button class="newsletterbtn button" type="button">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
        </main>

        <!--Section for footer-->
        <footer id="footer">
            <div class="container footerFlex">
              <div class="services_footer">
                <h5>Services</h5>
                <p><a href="index.html">Home</a></p>
                <p><a href="menu.html">Menu</a></p>
                <p><a href="">About Us</a></p>
                <p><a href="contactUs.html">Contact Us</a></p>
                <p><a href="">Become a Vendor</a></p>
              </div>
              <div class="support">
                <h5>Support</h5>
                <p><a href="">How to Order</a></p>
                <p><a href="">Where we deliver</a></p>
                <p><a href="">FAQs</a></p>
                <p><a href="">Contact</a></p>
                <p><a href="">Terms and Conditions</a></p>
                <p><a href="">Privacy Policy</a></p>
              </div>
              <div class="propertyManagement">
                <h5>Property Management</h5>
                <p><span><i class='bx bx-map'></i></span> Flat no B-5, plot 06 Block SW(H)-California</p>
                <p><span><i class='bx bx-phone'></i></span> +2348034956084</p>
                <p><span><i class='bx bx-envelope'></i></span> aliachiemena@gmail.com</p>
                <p><span><i class='bx bxs-time'></i></span> Mon - Sat: 7am - 5pm, Sun: 10am - 4pm</p>
                <div class="socialHandles">
                  <a href=""><span><i class='bx bxl-youtube'></i></span></a>
                  <a href=""><span><i class='bx bxl-facebook-circle'></i></span></a>
                  <a href=""><span><i class='bx bxl-twitter'></i></span>
                  </a>
                  <a href=""><span><i class='bx bxl-instagram-alt' ></i><span></a>
                </div>
              </div>
            </div>
          </footer>
             
        <script src="../Resident/resident.js"></script>
        <script src="index.js"></script>
        <script>
            // Code to toggle navbar menu items
document.addEventListener("DOMContentLoaded", function () {
  const menuIcon = document.getElementById("menu_icon");
  const itemsMobile = document.getElementById("items_mobile");

  if (menuIcon && itemsMobile) {
    menuIcon.addEventListener("click", function () {
      if (itemsMobile.style.display === "block") {
        itemsMobile.style.display = "none";
      } else {
        itemsMobile.style.display = "block";
        itemsMobile.style.maxHeight = "300px";
      }
    });
  }
});

//////////////////////////////////////////////////////////////

// Code to toggle Environmental interest
const envInterestDropdown = document.getElementById(
  "environmental_interest_icon"
);
const envInterestvisibility = document.getElementById(
  "environmental_interest_visibility"
);

if (envInterestDropdown && envInterestvisibility) {
  envInterestDropdown.addEventListener("click", () => {
    // checks if environmental items are visible and sets it to hidden otherwise set it to visible
    if (envInterestvisibility.style.display === "block") {
      envInterestvisibility.style.display = "none";
    } else {
      envInterestvisibility.style.display = "block";
      document.getElementById(
        "environmental_interest_arrowdown"
      ).style.display = "bloc";
      document.getElementById("environmental_interest_arrowup").style.display =
        "none";
    }
  });
}

/////////////////////////////////////////////////////////////////

// code for Black & White background
const background = document.querySelector("#background");
const footer = document.getElementById("footer");

background.addEventListener("click", () => {
  const navItems = document.querySelectorAll('navItems')
  const menuIcon = document.getElementById('menu_icon')
  const body = document.body;
  if (body.classList.contains("darkMode")) {
    body.classList.remove("darkMode");
    body.classList.add("whiteMode");
    footer.classList.remove("footerdarkMode");

    background.innerHTML = "<i class='bx bxs-moon whiteBackground'></i>";
  } else {
    body.classList.remove("whiteMode");
    body.classList.add("darkMode");
    footer.classList.add("footerdarkMode");
    menuIcon.style.color = "black";
    navItems.style.color = "black";
    background.innerHTML = "<i class='bx bxs-sun'>";
    // document.getElementsByTagName('footer').style.display = 'none'
  }
});

        </script>
</body>
</html>