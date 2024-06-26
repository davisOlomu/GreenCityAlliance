
<?php
require_once('database.php');
require_once('nav.php');
$conn = db_connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="Frontend/public/index.css">
    <link rel="stylesheet" href="Frontend/public/dashboard.css">
    <link rel="stylesheet" href="Frontend/public/resident.css">
    <link rel="stylesheet" href="Frontend/public/products_menu.css">
</head>
<body>
     




<!-- <h3>All Products</h3>
<table width="402" border="1">
    <tbody>
        <tr>
            <td colspan="8">
            </td>
        </tr>
        <tr>
            <td width="18">Product_name:</td>
            <td width="18">Company_name:</td>
            <td width="380">Description:</td>
            <td width="150">Size: </td>
            <td width="109">Price:</td>
            <td width="91">Price Category: </td>
            <td width="91">Environmental_Benefits: </td>
            <td width="91">Manage: </td>
        </tr> -->

    
<!-- 

        <main>
              Background changer-->
             <div class="container-fluid backgroundChanger">
                <button id="background" type="button"><i class='backgroundNew bx bxs-moon' ></i></button>
            </div>

              <!-- Mini nav bar -->
              <div class="userLogin">
                <div class="logon">
                    <p>
                        <i class='bx bx-user user_icon' id=""></i>
                        <span class="username" id="username">chile</span>
                        <span><i id="user_icon" class='bx bx-chevron-down arrow_down'></i></span>
                    </p>
                    <div id="displayUserAdd" class="user_dispay">
                            <!-- <p id="user"></p>
                            <p id="login"> <i class='bx bx-log-out'></i> Sign out</p>
                             <p id="signUp">Sign Up</p> -->
                    </div>
                </div>
            </div>

             <!-- //////////// Menu Header ///////////// -->
            <menu>
                <div class="menu">
                <div class="our-menu"> 
                    <div>
                        <span class="material-symbols-outlined food-plate">
                            category
                            </span>
                    </div>
                    
                    <div>
                        <p>Our Products</p>
                    </div>
                </div>
                </div>
        
                <div class="eat-fresh">
                <h1><span>Green</span> Urban Living</h1>
                </div>
            </menu> 
    
  
          <!-- View Products //////////////////////////////////////// -->
          <div class="viewMenu container-fluid">
            <div class="container_fluid dashboard_container">
                <div class="side_dashboard_container">   
                    <div id="sideNav" class="side_dashboard">
                        <h4>Price</h4>
                    </div>

                    <form id="form" action="products_form.php" method="get" onsubmit="return validateForm()" class="product_price">
                        <div class="under_seventy">
                            <input type="checkbox" name="under_seventy" id="under_seventy">
                            <label for="under_seventy">Under &#163;70 </label>
                        </div>

                        <div class="between_seventy">
                            <input type="checkbox" name="between_seventy" id="between_seventy">
                            <label for="between_seventy">&#163;70 to &#163;200</label>
                        </div>

                        <div class="over_two_hundred">
                            <input type="checkbox" name="over_two_hundred" id="over_two_hundred">
                            <label for="over_two_hundred">Over &#163;200</label>
                        </div>

                        <div class= "type_price_center">
                            <div class="type_price">
                                <div class="min_price">
                                    <input type="number" name="min_price" id="min_price" placeholder="Min">
                                </div>
                                <span>to</span>
                                <div class="max_price">
                                    <input type="number" name="max_price" id="max_price"  placeholder="Max">
                                </div>
                                <button type="submit" class="price_btn"><i class='bx bx-right-arrow-alt priceIcon'></i></button>
                            </div>
                            <p id="priceerrorBox" class="errorBox"></p>
                        </div>
                    </form>
                </div>

                <table >
                    <thead>
                        <tr>
                            <th width="">Product Name</th>
                            <th width="">Company Name</th>
                            <th width="">Product Description</th>
                            <th width="">Price</th>
                            <th width="">Size</th>
                            <th width="">Price Category</th>
                            <th width="">Environmental Benefits</th>
                        </tr>
                    </thead>


                <?php
        $sql_query = "SELECT p.Product_name, c.Company_name, p.Description, p.Size, p.Price, p.Price_category, p.Environmental_benefits
FROM products_services p
INNER JOIN company c ON p.Company_id = c.Company_id;";


        $result = $conn->query($sql_query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
                    <tbody>
                        <!-- <tr>
                            <td>
                                <figure class="viewMenuFigure">
                                    <div class="viewMenuContainerFlex">
                                        <div class="imageholder">
                                            <img src="../mainpages/images/1698296148470.png" alt="">
                                        </div>
                                    </div>
                                </figure>
                            </td>
                        </tr> -->
                
                        <tr>
                            <td><?php echo $row['Product_name']; ?></td>
                            <td><?php echo $row['Company_name']; ?></td>
                            <td width="1200px"><?php echo $row['Description']; ?></td>
                            <!-- <td class="product_size">Size</td> -->
                            <td class="foodPrice viewMenuAdd"><?php echo $row['Size']; ?></td>
                            <td>&#163; <?php echo $row['Price']; ?></td>
                            <td><?php echo $row['Price_category']; ?></td>
                            <td><?php echo $row['Environmental_benefits']; ?></td>
                            <td><a style="text-decoration: none;" href="resident_login.php?Product_name=<?php echo $row['Product_name']; ?>">
                            VOTE <i class='bx bxs-downvote vote'></i></a></td>
                        </tr>
                    </tbody>
                
                <?php }
} ?>               
            </table> 
              </div>
            </div>
      </main>
             
      <!--Section for footer-->
      <?php
require_once('footer.php');
?>
    <script src="Frontend/Resident/resident.js"></script>
    <script src="index.js"></script>

    <script>
        // function calculatePriceCategory(price)
        // {
        //     priceCategory = null;

        //     if (price >= 0 && price <= 50) {
        //         priceCategory = 'Affordable';
        //     } else if (price > 100 && price <= 200)
        //         priceCategory = 'Moderate';
        //     else {
        //         priceCategory = 'Premium';
        //     }
        //     return priceCategory;
        // }

            document.getElementById('form').addEventListener('click', ()=>{
                event.preventDefault();
            })


        function validateForm() {
            const min_price = document.getElementById("min_price").value.trim();
            const max_price = document.getElementById("max_price").value.trim();
            const errorMessage = document.getElementById("priceerrorBox");

            if (min_price === "" || max_price === "" && min_price === "" || max_price == 0) {
                errorMessage.innerHTML = "Enter a valid number";
                return false; // Prevent form submission
            } else {
                errorMessage.innerHTML = ""; // Clear the error message
            }
            // Check if min_price is less than or equal to max_price
            if (parseInt(min_price) > parseInt(max_price)) {
                document.getElementById("priceerrorBox").innerHTML = "Minimum price should be less than or equal to maximum price";
                return false;
            } else {
                document.getElementById("priceerrorBox").innerHTML = "";
            }
            return true; // Allow form submission
        }

    </script>
</body>
</html>