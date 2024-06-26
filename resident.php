<?php
require_once('database.php');
require_once('nav.php');
$conn = db_connect();

// SQL query to fetch areas
$sql = "SELECT Area_id, Area_name FROM Areas";
$result = $conn->query($sql);

// Check query execution
if (!$result) {
  die("Error: " . $conn->error);
}

// Generate options for dropdown
$area_options = "";
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $area_options .= "<option value='" . $row["Area_name"] . "'>" . $row["Area_name"] . "</option>";
  }
} else {
  $area_options = "<option value=''>No areas found</option>";
}

// Close connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resident</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="Frontend/public/resident.css">
  </head>
  <body>
    
  

    <main  class="container_fluid">
        <!-- Background changer-->
        <div class="container-fluid backgroundChanger">
            <button id="background" type="button"><i class='backgroundNew bx bxs-moon' ></i></button>
        </div>

        <form class="form" id="myForm" action="resident_form.php" method="POST" onsubmit="return validateForm()">
            <div class="create-account">
                <p><b>Create Account &nbsp;</b><span>Now to Green Alliance?</span></p>
            </div>
        
            <!--Section to display Success message-->
            <p id="success_messagebox" class="success_messagebox"></p>
        
            <!-- section for First and Last name -->
            <div id="formControl" class="fullname container">
                <!-- First Name -->
                <div class="div_mobile_space">
                    <div>
                        <label for="first_name" name="first_name_l" class="first_name">First Name</label>
                    </div>
                    <input type="text" name="firstName" id="first_name" placeholder="Enter First name" require/>
                    <p id="firstNameerrorBox" class="errorBox"></p>
                </div>
        
                <!-- Last Name -->
                <div class="div_mobile_space">
                    <div>
                        <label for="last_name" name="last_name_l" class="last_name">Last Name</label>
                    </div>
                    <input type="text" name="lastName" id="last_name" placeholder="Enter Last name" require/>
                    <p id="lastNameerrorBox" class="errorBox"></p>
                </div>
            </div>
        
            <!-- Email -->
            <div id="formControl" class="email container">
                <!-- Email Input -->
                <div class="div_mobile_space">
                    <div>
                        <label for="email" class="email">Email</label>
                    </div>
                    <input type="email" name="email" id="email" placeholder="Enter Email" require/>
                    <p id="emailerrorBox" class="errorBox"></p>
                </div>
        
                <!-- Reconfirm Email Input -->
                <div class="div_mobile_space">
                    <div>
                        <label for="Reconfirm_email" class="Reconfirm_email">Reconfirm Email</label>
                    </div>
                    <input type="email" name="Reconfirm_email" id="Reconfirm_email" placeholder="Reconfirm Email" require/>
                    <p id="Reconfirm_emailerrorBox" class="errorBox"></p>
                </div>
            </div>
        
            <!-- Password -->
            <div id="formControl" class="password_container container">
                <!-- Password Input -->
                <div class="div_mobile_space">
                    <div>
                        <label for="password" class="password">Password</label>
                    </div>
                    <input type="password" name="password" id="password" placeholder="eg Johndoe123!" require/>
                    <p id="passworderrorBox" class="errorBox"></p>
                </div>
        
                <!-- Reconfirm Password Input -->
                <div class="div_mobile_space">
                    <div>
                        <label for="Reconfirm_password" class="Reconfirm_password">Reconfirm Password</label>
                    </div>
                    <input type="password" name="Reconfirm_password" id="Reconfirm_password" placeholder="Reconfirm Password" require/>
                    <p id="Reconfirm_passworderrorBox" class="errorBox"></p>
                </div>
            </div>
        
            <!-- Location and Age -->
            <div id="formControl" class="location_age container">
                <!-- Location Input -->
                <div class="div_mobile_space">
                    <div>
                        <label for="location" class="location_l">Area</label>
                    </div>
                        <select style="width: 70%;" name="area_name" id="area" require>
  <<?php echo $area_options; ?> 
</select>

                
                    <!-- <input type="text" name="location" id="location" placeholder="Enter your area"> -->
                    <p id="locationerrorBox" class="errorBox"></p>
                </div>
        
                <!-- Age Input -->
                <div class="age_group div_mobile_space">
                    <div>
                        <label for="age">Age</label>
                    </div>
                    <input type="number" name="age" id="age" placeholder="Enter your age" require>
                    <p id="ageerrorBox" class="errorBox"></p>
                </div>
            </div>
        
            <!-- Environmental Interest and Gender -->
            <div id="formControl" class="environ_gender container">
                <!-- Environmental Interest Section -->
                <div class="environmental_interest_section">
                    <div class="div_mobile_space envflex">
                        <label class="environmental_interest" for="Environmental Interest">Environmental interest</label>
                        <span id="environmental_interest_icon"><i class='bx bx-chevron-down div_mobile_space_cursor' id="environmental_interest_arrowdown"></i></span>
                        <!-- <span id="environmental_interest_arrowup"><i class='bx bx-chevron-up'></i></span> -->
                    </div>
        
                    <div class="environmental_interest_visibility" id="environmental_interest_visibility">
                        <div class="environmental_interest">
                            <span>Renewable Energy <input type="checkbox" name="environmental_interests" id="renewable_energy" value="Renewable Energy" require></span>
                            <span>Waste Reduction <input type="checkbox" name="environmental_interests" id="waste_reduction" value="Waste Reduction" require></span>
                            <span>Energy Efficiency <input type="checkbox" name="environmental_interests" id="energy_efficiency" value="Energy Efficiency" require></span>
                            <span>Transportation <input type="checkbox" name="environmental_interests" id="transportation" value="Transportation" require></span>
                            <!-- <span>Transportation <input type="checkbox" name="interest" id="waste_reductiontwo"></span> -->
                        </div>
                    </div>
                    <p id="interesterrorBox" class="errorBox"></p>
                </div>
                
                <!-- Gender Section -->
                <div class="gender_section div_mobile_space">
                    <div>
                        <label for="gender" name="gender" id="gender">Gender</label>
                    </div>
                    <div class="choose_gender">
                        <label for="male">Male</label> <input type="radio" id="male" name="gender" value="male" require/>
                        <label for="female">Female</label> <input type="radio" id="female" name="gender" value="female" require/>
                        <label for="other">Other</label> <input type="radio" id="other" name="gender" value="other" require/>
                    </div>
                    <p id="gendererrorBox" class="errorBox"></p>
                </div>
            </div>
        
            <!-- Submit Button -->
            <div class="btn residentSignupbtn">
                <button type="submit" name="Submit" class="button">Submit</button>
            </div>
        </form> 

        <div class="have_account">
            <p>Already have an account? <span><a href="resident_login.php">Sign in</a></span></p>  
        </div>     
    </main>

    <!--Section for footer-->
    <?php
require_once('footer.php');
?>


    <!-- <script src="Frontend/Resident/resident.js"></script> -->

    <script>
      document.getElementById("environmental_interest_icon").addEventListener("click", function() {
    const visibilityElement = document.getElementById("environmental_interest_visibility");
    if (visibilityElement.style.display === "block") {
      visibilityElement.style.display = "none";
    } else {
      visibilityElement.style.display = "block";
    }
  });



        // Code for Form validation
function validateForm(){
  // Regular expression for email validation
  var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;

  // Regular expression for password validation
  const passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Z][A-Za-z\d@$!%*?&]{6,}[!@#$%^&*]$/;


  // Get values from input fields
  const first_name = document.getElementById("first_name").value;
  const last_name = document.getElementById("last_name").value;
  const email = document.getElementById("email").value;
  const Reconfirm_email = document.getElementById("Reconfirm_email").value;
  const password = document.getElementById("password").value;
  const location = document.getElementById("location").value;
  const age = document.getElementById("age").value;
  const Reconfirm_password =
    document.getElementById("Reconfirm_password").value;

  // Validate first name
  if (first_name == "") {
    document.getElementById("first_name").focus();
    document.getElementById("firstNameerrorBox").innerHTML = "Enter first name";
    return false;
  } else {
    document.getElementById("firstNameerrorBox").innerHTML = "";
  }

  // Validate last name
  if (last_name.trim() == "") {
    document.getElementById("last_name").focus();
    document.getElementById("lastNameerrorBox").innerHTML = "Enter last name";
    return false;
  } else {
    document.getElementById("lastNameerrorBox").innerHTML = "";
  }

  // Validate email
  if (email.trim() == "") {
    document.getElementById("email").focus();
    document.getElementById("emailerrorBox").innerHTML = "Enter an email";
    return false;
  } else if (!emailRegex.test(email)) {
    document.getElementById("email").focus();
    document.getElementById("emailerrorBox").innerHTML = "Enter a valid email";
    return false;
  } else {
    document.getElementById("emailerrorBox").innerHTML = "";
  }

  // Validate Reconfirm email
  if (Reconfirm_email.trim() == "") {
    document.getElementById("Reconfirm_email").focus();
    document.getElementById("Reconfirm_emailerrorBox").innerHTML =
      "Re-enter email";
    return false;
  } else if (!emailRegex.test(Reconfirm_email)) {
    document.getElementById("Reconfirm_email").focus();
    document.getElementById("Reconfirm_emailerrorBox").innerHTML =
      "Re-enter a valid email";
    return false;
  }

  // Validate matching emails
  if (Reconfirm_email != email) {
    document.getElementById("Reconfirm_email").focus();
    document.getElementById("Reconfirm_emailerrorBox").innerHTML =
      "Emails are not matching, re-enter again";
    return false;
  } else {
    document.getElementById("Reconfirm_emailerrorBox").innerHTML = "";
  }

  // Validate password
  if (password.trim() == "") {
    document.getElementById("password").focus();
    document.getElementById("passworderrorBox").innerHTML = "Enter password";
    return false;
  }else if (!passwordRegex.test(password)){
    document.getElementById("password").focus();
    document.getElementById("passworderrorBox").innerHTML = "Password length must be above eight characters";
    return false;
  } else {
    document.getElementById("passworderrorBox").innerHTML = "";
  }

  // Validate reconfirm password
  if (Reconfirm_password.trim() == "") {
    document.getElementById("Reconfirm_password").focus();
    document.getElementById("Reconfirm_passworderrorBox").innerHTML =
      "Re-enter Password";
    return false;
  }
  // else if (!passwordRegex.test(Reconfirm_password)){
  //   document.getElementById("Reconfirm_password").focus();
  //   document.getElementById("Reconfirm_passworderrorBox").innerHTML = 'Re-enter a valid password';
  //   return false;
  // }
  
  // Validate matching password
  if (Reconfirm_password != password) {
    document.getElementById("Reconfirm_password").focus();
    document.getElementById("Reconfirm_passworderrorBox").innerHTML = "Passwords are not matching, re-enter again";
    return false;
  } else {
    document.getElementById("Reconfirm_passworderrorBox").innerHTML = "";
  }

  // Validate location
  if (location.trim() == "") {
    document.getElementById("location").focus();
    document.getElementById("locationerrorBox").innerHTML = "Enter location";
    return false;
  } else {
    document.getElementById("locationerrorBox").innerHTML = "";
  }

  // Validate age
  if (age.trim() == 0) {
    document.getElementById("age").focus();
    document.getElementById("ageerrorBox").innerHTML = "Enter age";
    return false;
  } else {
    document.getElementById("ageerrorBox").innerHTML = "";
  }

  // Checkboxes validation for environmental interest
  var checkboxes = document.querySelectorAll('input[name="environmental_interests"]');
  var checkedCount = 0;
  checkboxes.forEach(function (checkbox) {
    if (checkbox.checked) {
      checkedCount++;
    }
  });
  if (checkedCount === 0) {
    document.getElementById("interesterrorBox").innerHTML =
      "Select at least one environmental interest";
    return false;
  } else {
    document.getElementById("interesterrorBox").innerHTML = "";
  }

  // // Radio button validation for gender
  // if (document.form.radiobutton[0].checked == false &&
  //   document.form.radiobutton[1].checked == false &&
  //   document.form.radiobutton[2].checked == false) {
  //   document.getElementById("gendererrorBox").innerHTML = "Select gender";
  //   return false;
  // }

  // Radio button validation for gender
  const genderRadioButtons = document.querySelectorAll('input[name="gender"]');
  let isGenderSelected = false;
  genderRadioButtons.forEach(function (radioButton) {
    if (radioButton.checked) {
      isGenderSelected = true;
    }
  });
  if (!isGenderSelected) {
    document.getElementById("gendererrorBox").innerHTML = "Select gender";
    return false;
  } else {
    document.getElementById("gendererrorBox").innerHTML = "";
  }

  // If all fields are filled, display success message
  if (
    first_name != "" &&
    last_name != "" &&
    email != "" &&
    Reconfirm_email != "" &&
    password != "" &&
    location != "" &&
    age != "" &&
    Reconfirm_password != ""
  ) {
    document.getElementById("success_messagebox").innerHTML =
      "Form submitted successfully";
  }
  return true; // Allow for submission  
}

    </script>
  </body>
</html>
