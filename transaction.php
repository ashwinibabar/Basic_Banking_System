<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>transaction</title>
</head>
<style>

*{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
     body{
        width:100%;
        height:100vh;
        display:grid;
       
        background-image:linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url('images/bg_img5.jpg');*/
        background-size:100% 100%;
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center;
    }


    .content{
     
    width:350px;
    margin:auto;
    border-radius:5px;
    background:#FFC300;
    padding:10px;


    
}

input[type="text"],select{
    width:100%;
    padding:12px 20px;
    margin:8px 0;
    display:inline-block;
    border:1px solid #ccc;
    font-style:bold;
    font-size:15px; 
    font-family:serif;
    border-radius:4px;box-sizing:border-box;

}

input[type="submit"]{
    width:100%;
    background-color:#FDB770;
    color:black;
    font-size:18px;   
    font-style:bold;
    font-family:serif;
    padding:14px 20px;
    margin:8px 0;
    border:2px solid red;
    border-radius:4px;
    cursor:pointer;

}

.navbar{
  background-color:black;
  opacity:0.5;
  width:100%;
  height:70px;
  
  padding:30px 0;
  display:flex;
  align-items:center;
  justify-content:space-between;
}

.logo{
      width:160px;
      height:70px;
      cursor:pointer;
}



.navbar ul li{
   
   float:left;
   width:200px;
   height:70px;
   background-color:black;
   opacity:0.9;
   list-style:none;
   line-height:40px;
   text-align:center;
   font-size:20px;
   padding:10px;  
}
.navbar ul li a {
   text-decoration:none;
   color:yellow;
   text-transform:uppercase;
   display:block;
    
}

.navbar ul li a:hover{
    background-color:purple;
   }



input[type=submit]:hover{
    background-color: #E67E22;
   }

   footer{
  margin-left:43%;
  margin-top:3%;
 
  
}





</style>


<body>
<div class="navbar">
     <img src="images/bank_logo2.png" class="logo">
     <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="#">About us</a></li>
    
    <li><a href="#">Contact Us</a></li>
    
    
    </ul>

</div>
<?php
                include 'config.php';
              
                $sId=$_GET['id'];
                $sql = "SELECT * FROM  user where id=$sId";

                $result=mysqli_query($mysqli,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($mysqli);
                }
                $rows=mysqli_fetch_assoc($result);
               
                
                ?>


<form method="POST">
<div class='content'>
               <div class="header">
                <h2>Send to</h2></div>
                <table>
                    <tr>
                <select name="to">
                    <option value=" "disabled selected>Select customer</option> 
             
                    <?php
                     $sql = "SELECT * FROM  user where id!=$sId";
                     $result=mysqli_query($mysqli,$sql);
                     ?>
           
                     <?php
                    while($rows=mysqli_fetch_assoc($result))
                    {
                        ?> 
                    <option value="<?php echo $rows['Id'];?>">
                    <?php echo $rows['Name'];?>
                    </option>
                <?php
                }
                   ?>
             
            
                    
                </select>
                     </tr><br>

                    <tr>
                     <input type="text" name="amount" placeholder="Enter Balance...">
                     </tr>

                    <tr>
                    <input type='submit' name='send' value='send'></a>
            </tr>
                </tr>
                
  </table>
 </div>
 </form>         

 <footer class="footer">
            <p>Presented by <b> ASHWINI BABAR</b><br> <b>The Sparks Foundation Project</b></p>
    </footer>
 
</body>
</html>


<?php
include('config.php');


if(isset($_POST['send'])){


   $from = $_GET['id'];
   $to = $_POST['to'];
                         $amount = $_POST['amount'];

                        
                     
                         $sql = "SELECT * from user where Id=$from";
                         $query = mysqli_query($mysqli,$sql);
                         $sql1 = mysqli_fetch_array($query); 

                         
                         $sql = "SELECT * from user where Id=$to";
                         $query = mysqli_query($mysqli,$sql);
                         $sql2 = mysqli_fetch_array($query);
                     
                         
                     
                     
                         
                                     
                                     $newbalance = $sql1['Balance'] - $amount;
                                     $sql = "UPDATE user set Balance=$newbalance where Id=$from";
                                     mysqli_query($mysqli,$sql);
                                  
                     
                                     
                                     $newbalance = $sql2['Balance'] + $amount;
                                     $sql = "UPDATE user set Balance=$newbalance where Id=$to";
                                     mysqli_query($mysqli,$sql);
                                     
                                     $sender = $sql1['Name'];
                                     $receiver = $sql2['Name'];

                                    
                                     $query=mysqli_query($mysqli,"INSERT INTO transtab values('','$sender','$receiver','$amount')");
                     

                                   
                                     if($query){
                                        echo "<script> alert('Transaction Successful');
                                        window.location='home.php';  
                                              </script>";
                                       
                                   }
                     
                                     $newbalance= 0;
                                     $amount =0;
                             }
                         
                         
                     ?>  

