
<?php 
include("phpconnectio.php");

error_reporting(0);
$query = "select * from phpproject";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
 



if($total != 0)

{
    ?>
        <table  border="3"> 
        <thead>
            <tr style="background: orange;">
                <th>name</th>
                <th>age</th>
                <th>gender</th>
                <th>address</th>
                <th>education</th>
                <th>city</th>
               
                </tr>
                  </thead>
                



    <?php
    while($result =mysqli_fetch_assoc($data))
    {
        
    

      
            echo "<tr>
                     <td>".$result['name']."</td>
                     <td>".$result['age']."</td>
                     <td>".$result['gender']."</td>
                     <td>".$result['address']."</td>
                     <td>".$result['education']."</td>
                     <td>".$result['city']."</td>
           
                
                

            </tr>";




    }
}
else
{
    echo "no records";

}
?>