<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>business</title>
    <link rel="stylesheet" href="sme_css.css">
    <link rel="stylesheet" href="sme_css.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
</head>
<body>
    <!--Section for nav bar-->
    <nav class="desktop_nav"> <!--Navbar for Destok view-->
        <div class="navbar">
            <div class="logo">LOGO</div>

            <div class="items">
                <div class="home"><a href="home">Home</a></div>
                <div class="services"><a href="Services.html">Services</a></div>
                <div class="aboutUs.html"><a href="aboutUs.html">About Us</a></div>
            </div>
            
            <div class="search">
                <input type="search" name="search" id="search">
                <form id="desktop_navForm" class="btn" action="" method="">
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
                    <div class="home"><a href="home">Home</a></div>
                    <div class="services"><a href="Services.html">Services</a></div>
                    <div class="aboutUs.html"><a href="aboutUs.html">About Us</a></div>

                    <div class="search">
                        <input type="search" name="search" id="search">
                        <form id="mobile_navForm" class="btn" action="" method="">
                            <button type="submit" id="search" class="button">Search</button>
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
        
        <form class="form" id="myForm" action="sme_form.php" method="post">
            <div class="create-account">
                <p><b>Create Account &nbsp;</b><span>Now to Green Alliance?</span></p>
            </div>

            <!--Section to display Success message-->
            <p id="success_messagebox" class="success_messagebox"></p>

            <!-- section for company name and contact details -->
            <div id="formControl" class="fullname container">
                <div class="div_mobile_space company_name">
                    <div>
                        <label for="company_name" class="first_name company_name"> Name</label>
                    </div>
                    <input type="text" name="company_name" id="company_name" placeholder="Enter Company Name"/>
                    <p id="company_nameerrorBox" class="errorBox"></p>
                </div>

                <div class="div_mobile_space phone_no">
                    <div>
                        <label for="phone_number" class="last_name phone_no">Mobile No</label>
                    </div>
                    <input type="tel" name="phone_number" id="phone_no" placeholder="Enter Mobile"/>
                    <p id="phone_noerrorBox" class="errorBox"></p>
                </div>
            </div>

            <!-- Section for company email-->
            <div id="formControl" class="email container">
                <div class="div_mobile_space">
                    <div>
                        <label for="email" class="email">Email</label>
                    </div>
                    <input type="email" name="email" id="email" placeholder="Enter Email"/>
                    <p id="emailerrorBox" class="errorBox"></p>
                </div>

            </div>

            <!-- Section for company password-->
            <div id="formControl" class="password_container container">
                <div class="div_mobile_space">
                    <div>
                        <label for="password" class="password">Password</label>
                    </div>
                    <input type="password" name="password" id="password"/>
                    <p id="passworderrorBox" class="errorBox"></p>
                </div>
            </div>

            <!-- Section for product Services-->
            <div class="formControl container product_service">
                <div class="div_mobile_space product_service div_mobile_space">
                    <div>
                        <label for="product_services">Product/Services</label>
                    </div>
                    <input type="text" name="product_services" id="product_services" placeholder="Product Services">
                    <p id="product_serviceerrorBox" class="errorBox"></p>
                </div>
            </div>

            <!-- Section for button-->
            <div class="btn">
                <!--<input type="submit" onclick="Submit()" name="Submit" id="submit" class="button">Submit/>-->
                <input type="Submit" name= "Submit" id= "Submit"/>
            </div>
        </form>
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
    <script src="business_signup.js"></script>
</body>
</html>