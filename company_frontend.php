<?php
require_once('nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>business</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="Frontend/public/resident.css">
    <link rel="stylesheet" href="Frontend/public/index.css">
    <link rel="stylesheet" href="/Frontend/public/businesses_signup.css">
</head>
<body>
    <!--Section for nav bar-->
    

    <main>
        <!-- Background changer-->
        <div class="container-fluid backgroundChanger">
            <button id="background" type="button"><i class='backgroundNew bx bxs-moon' ></i></button>
        </div>
        
        <form class="form" id="myForm" action="company_form.php" method="post">
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

            <!-- Section for company password-->
            <!-- <div id="formControl" class="password_container container"> -->
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
                <!-- <button type="submit" id="submit_btn" name="Submit" class="button button_login"><span><i class='bx bx-log-in'></i></span> &nbsp;Submit</button> -->
                <input type="Submit" name= "Submit" id= "Submit" class="button button_login"/>
            </div>
        </form>
    </main>

    <?php
require_once('footer.php');
?>

    <script src="../Resident/resident.js"></script>
    <script src="business_signup.js"></script>
</body>
</html>