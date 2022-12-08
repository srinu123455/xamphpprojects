<?php include("phpconnectio.php");
  $id= $_GET['id'];
  $query = "select * from phpproject where id='$id'";
$data = mysqli_query($conn,$query);

$result =mysqli_fetch_assoc($data);
 // echo $_GET['NAME'];
 // echo $_GET['AGE'];
 // echo $_GET['GENDER'];
 // echo $_GET['ADDRE'];
 // echo $_GET['EDU'];
 // echo $_GET['CITY'];
$checkbox= $result['education'];
$chk1 = explode(",", $checkbox);
  
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="form3.css">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
 
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

  




 <style>
    .error{
      color: "red";
    }
  </style>


</head>
<body>
  

  <div class="contain">
    <div >
      <form method="POST" action="" class="form" id="signupForm">
      <h1>Update_student_form</h1>
     
              <!-- name -->

        <span for="name"  style="margin-right:px">name<span style="color:red">*</span></span>
           <input type="text" name="name" id="name"  style="margin:2px 12px 20px 0px  " value="<?php echo $result['name'];?>">
             <div style="color:red"> </div>  

                          <!-- age -->
              
               <span for="password" style="margin:0px opx 20px 0px" >age<span style="color:red">*</span></span>
                 <input type="text" name="age" id="age" value="<?php echo $result['age'];?>">
                   <div style="color:red"> </div>

                                               <!-- gender -->
                    <div class="radio">
                      <span for="password">gender<span style="color:red">*</span></span>
                         

                          <input type="radio" name="gender"  value="male"
                          
                             style="margin-left: 15px"; <?php if (isset($result['gender']) && $result['gender']=="male") echo "checked";?>><span style="margin-left: 35px">male</span>


                               <input type="radio" name="gender"  value="female" 
                                   style="margin-left: 0px" <?php if (isset($result['gender']) && $result['gender']=="female") echo "checked";?>><span style="margin-left: 15px">Female</span><span style="margin-right:70px"></span>
                                 <span class="error"> </span></div>
            
                                       <br>
                                                         <!--  address -->

                                       <span for="address" >address<span style="color:red">*</span></span>
                                             <textarea  style="margin-right:40px;  border-radius: 10px; width: 35%; height: 60px;" name="address" id="address" >
                                                 <?php echo $result['address'];?>
                                             </textarea>
                                               <div style="color:red"></div>



                                                                      <!--   education -->

                                        

                                                              <div class="checkbox1">


                                            









                                   




                                                <span for="education" >education<span style="color:red"
                                                     ></span></span>
                                                     <span style="margin:20px 140px 0px 0px"><input type="checkbox" id="school" name="education[]" value="High_school" 
                                                         <?php 
                                                         if(in_array('High_school',$chk1))

                                                         {
                                                         echo 'checked';
                                                          }
                                                          ?>
                                                         for="High_school">High_school</span><br>
                                                       <span style="margin-right:75px"><input type="checkbox" id="inter"name="education[]"  value="Intermediate"
                                                         <?php 
                                                         if(in_array('Intermediate',$chk1))

                                                         {
                                                         echo 'checked';
                                                          }
                                                          ?>>Intermediate</span><br>
                                                          <span style="margin-right:105px"><input type="checkbox" id="degree" name="education[]" value="Degree"
                                                         <?php 
                                                         if(in_array('Degree',$chk1))

                                                         {
                                                         echo 'checked';
                                                          }
                                                          ?>
                                                            >Degree</span><br>
                                                            <span style="margin-right:130px"><input type="checkbox" name="education[]" id="pg" value="PG"
                                                                  <?php 
                                                         if(in_array('PG',$chk1))

                                                         {
                                                         echo 'checked';
                                                          }
                                                          ?>
                                                                 >PG</span>
                                                            <div style="color:red"></div>
                                        </div>





                                                                                              <!--  city -->

                                                              <span for="city">city<span style="color:red">*</span></span>
                                                                   <select name="city" id="things" style="margin:20px 40px 0px 0px">
                                                                    <option></option>
                                                                      <option value="samarlakota"
                                                                          <?php 
                                                                          if($result['city']=='samarlakota')
                                                                          {
                                                                            echo "selected";
                                                                          }
                                                                            ?>

                                                                      >samarlakota</option>
                                                                      <option value="west_godavari"
                                                                        <?php 
                                                                          if($result['city']=='east_godavari')
                                                                          {
                                                                            echo "selected";
                                                                          }
                                                                            ?>

                                                                      >west_godavari</option>
                                                                      <option value="east_godavari"
                                                                        <?php 
                                                                          if($result['city']=='east_godavari')
                                                                          {
                                                                            echo "selected";
                                                                          }
                                                                            ?>>east_godavari</option>
                                                                      <option value="visakhapatnam"
                                                                        <?php 
                                                                          if($result['city']=='visakhapatnam')
                                                                          {
                                                                            echo "selected";
                                                                          }
                                                                            ?>>visakhapatnam</option>
                                                                    </select>
                                                                   <div style="color:red"> </div><br>
 


        
       
                                       <input type="submit" value="update" name="update" class="btn update" style="background-color:blue; color:white; text-align: center ;">
                                            <input type="reset"  value="clear" name="clear" class="btn1" id="clear" style="background-color:blue; color:white; text-align: center ;">
                                      

      
   </div>

</form>

    </div>
</body>
</html>
<?php
error_reporting(0);
        if($_POST['update']){

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$checkbox1= $result['education'];

$checkbox1=$_POST['education'];
  
$chk=implode(",",$checkbox1);

//$education=$_POST['education'];  
//$education = $result['education'];
//$chk = explode(",", $education);

//$chk=implode(",",$checkbox1);
// echo $chk ;  
//$chk="";  
//foreach($checkbox1 as $chk1)  
  // {  
    //  $chk .= $chk1.","; 
    //  echo $chk ;
  // }  

$city = $_POST['city'];


 

  $query = "UPDATE phpproject SET name='$name',age='$age',gender='$gender',address='$address',education='$chk',city='$city' where id='$id'";
 $data = mysqli_query($conn,$query);
 if($data)
 {
  echo "<script>alert('record updated successfull')</script>";
  ?>

  <meta http-equiv = "refresh" content = "0; url = http://localhost/project/form3.php" />
  <?php
 }
 else
 {
  echo "record not update";
 }
}

?>

