 <?php
 $nameErr = $ageErr = $genderErr = $addressErr =  $educationErr =  $cityErr = "";
$name = $age =  $gender = $address =  $check = $city = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
   // if (!preg_match("/^[a-zA-Z-' ']*$/",$name)) {
    //  $nameErr = "Only letters and white space allowed";
   // }
  }

  
  
  if (empty($_POST["age"])) {
    $ageErr = "age is required";
  } else {
    $age = test_input($_POST["age"]);
    // check if name only contains letters and whitespace
   //if (!preg_match("/^[1-100 ]*$/",$age)) {
    //  $ageErr = "Only numbers are allowed";
    //}
  }
 if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["address"])) {
    $addressErr = "Gender is required";
  } else {
    $address = test_input($_POST["address"]);
  }
  // if (empty($_POST["education"])) {
  //   $educationErr = "education is required";
  // } else {
  //   $education = test_input($_POST["education"]);

  // }
     /*  if(!empty($_POST['education']))
       {

        foreach($_POST['education'] as $checked){
          echo $checked . '<br>';
        }

      }*/

     /*  else {
        //echo '<div class="error">Checkbox is not selected!</div>';
         $education = test_input($_POST["education"]);
  
      }*/
  if (empty($_POST["city"])) {
    $cityErr = "city is required";
  } else {
    $city = test_input($_POST["city"]);
  }


  }

function test_input($data) {
 // $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>