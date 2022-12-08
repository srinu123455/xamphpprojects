<?php include("phpconnectio.php");?>
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
  <script src="form3req.js"></script>
 
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

  




 <style>
    .error{
      color: "red";
    }
  </style>


</head>
<body class="body">
  

  <?php include 'form3req.php';?>
  <div class="contain">
    <form method="POST" action="" class="form" id="signupForm">
      <h1>student_form</h1>
     
              <!-- name -->

        <span for="name"  style="margin-right:px">name<span style="color:red">*</span></span>
           <input type="text" name="name" id="name"  style="margin:2px 12px 20px 0px  " value="<?php echo $name;?>">
             <div style="color:red"> <?php echo $nameErr;?></div>  

                          <!-- age -->
              
               <span for="password" style="margin:0px opx 20px 0px" >age<span style="color:red">*</span></span>
                 <input type="text" name="age" id="age" value="<?php echo $age;?>">
                   <div style="color:red"> <?php echo $ageErr;?></div>

                                               <!-- gender -->
                    <div class="radio">
                      <span for="password">gender<span style="color:red">*</span></span>
                          <input type="radio" name="gender"  value="male" style="margin-left: 15px";><span style="margin-left: 35px";>male</span>
                               <input type="radio" name="gender"  value="female" style="margin-left: 0px";><span style="margin-left: 15px";>Female</span><span style="margin-right:70px"></span>
                                 <span class="error"> <?php echo $genderErr;?></span></div>
            
                                       <br>
                                                         <!--  address -->

                                       <span for="address" >address<span style="color:red">*</span></span>
                                             <textarea  style="margin-right:40px; border-radius: 10px; width: 35%; height: 60px;" name="address" id="address" value="<?php echo $address;?>"></textarea>
                                               <div style="color:red"> <?php echo $addressErr;?></div>
                                             
                                                                        <!--   education -->
                                        <div class="checkbox1">
                                                <span for="education" >education<span style="color:red"></span></span>
                                                     <span style="margin:20px 140px 0px 0px"><input type="checkbox" id="school" name="education[]" value="High_school" for="High_school">High_school</span><br>
                                                       <span style="margin-right:75px"><input type="checkbox" id="inter"name="education[]"  value="Intermediate">Intermediate</span><br>
                                                          <span style="margin-right:105px"><input type="checkbox" id="degree" name="education[]" value="Degree">Degree</span><br>
                                                            <span style="margin-right:130px"><input type="checkbox" name="education[]" id="pg" value="PG">PG</span>
                                                            <div style="color:red"> <?php echo $educationErr;?></div>
                                        </div>

                                                                                              <!--  city -->

                                                              <span for="city">city<span style="color:red">*</span></span>
                                                                   <select name="city" id="things" style="margin:20px 40px 0px 0px">
                                                                    <option ></option>
                                                                      <option>samarlakota</option>
                                                                      <option>west_godavari</option>
                                                                      <option>east_godavari</option>
                                                                      <option>visakhapatnam</option>
                                                                    </select>
                                                                   <div style="color:red"> <?php echo $cityErr;?></div><br>
 


        
       
                                       <input type="submit" id="submitBtn" value="submit" name="submit" class="add-row btn " style="background-color:blue; color:white; text-align: center ;">
                                            <input type="reset"  value="clear" name="clear" class="btn1" id="clear" style="background-color:blue; color:white; text-align: center ;">
                                      

      
   </div>

</form >

    </div>
    <hr style="border :1px solid black">
</body>

</html>

<?php 


error_reporting(0);
$query = "select * from phpproject";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
 



if($total != 0)

{
    ?><div class="table-responsive-lg">
        <table  border="3"> 
        <thead>
            <tr style="background: orange;">
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>gender</th>
                <th>address</th>
                <th>education</th>
                <th>city</th>
                 <th style="width:12%">action</th>
               
                </tr>
                  </thead>
                



    <?php
    while($result =mysqli_fetch_assoc($data))
    {
        
    

      
            echo "<tr>
                     <td>".$result['id']."</td>
                     <td>".$result['name']."</td>
                     <td>".$result['age']."</td>
                     <td>".$result['gender']."</td>
                     <td>".$result['address']."</td>
                     <td>".$result['education']."</td>
                     <td>".$result['city']."</td>
                     <td><a href='update.php?id=$result[id]&NAME=$result[name]&AGE=$result[age]&GENDER=$result[gender]&ADDRE=$result[address]&EDU=$result[education]&CITY=$result[city]'><input type='submit' value='update' class='update'><i class='fa fa-refresh' ></i></a>

                     <a href='delete.php?id=$result[id]'><input type='submit' value='delete' class='delete' onclick='return delete()'><i class='fa fa-trash' ></i></a></td>



                   

           
                
                

            </tr>";




    }
}
else
{
    echo "no records";

}
?>
<?php
        if($_POST['submit']){

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$checkbox1=$_POST['education'];
  
$chk=implode(",",$checkbox1);  
//$chk="";  
//foreach($checkbox1 as $chk1)  
   //{  
   //   $chk .= $chk1.","; 
   //   echo $chk ;
   //}  

$city = $_POST['city'];
if($name != "" && $age != "" && $gender != "" && $address != "" && $chk != "" && $city != "" )
{

 $query = "INSERT INTO phpproject(name,age,gender,address,education,city) VALUES('$name','$age','$gender','$address','$chk','$city')";
 $data = mysqli_query($conn,$query);
 if($data)
 {
  echo "inserted";
 }
 else
 {
  echo "not inserted";
 }
}
 else
 {
   echo "<script>alert('please fill the all details')</script>";
 }

}
?>


</table>
</div>
