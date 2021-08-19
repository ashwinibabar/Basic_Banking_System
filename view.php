
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>viewuserdetails</title>
</head>
<style>


*{
        margin:0;
        padding:0;
        
    }
    .banner{
   width:100%;
   height:100vh;
   background-image:linear-gradient(rgba(0,0,50,0.35),rgba(0,0,50,0.5)),url('images/bg_img5.jpg');
   background-size:cover;
   background-position:center;
    }

    .navbar{
  background-color:black;
  opacity:0.5;
  width:100%;
  height:1.5%;
  
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
   height:9%px;
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

    table{
        margin-top:20px;
        margin-left:25px;
        width:750px;
        box-shadow: -1px 12px 12px -6px rgba(0,0,0,0.5);
  
    }

    table,td,th{
   
        padding: 5px;
        border:1px solid lightgray;
        border-coLLApse:collapse;
        text-align:center;
        cursor: pointer;

    }
    td{
        font-size:18px;
        
    }
       th{
        background-color:#D2691E;
        color:black;
        
       }
       tr{
           color:white;
       }

    .form-box{
    width: 800px;
    height: 300px;
    position: relative;
    margin: 9% auto;
  
    background-image:linear-gradient(rgba(0,0,70,0.5),rgba(0,0,70,0.5)),url('images/table_bg2.jpeg');
    background-size:cover;
    padding: 5px;
    overflow: hidden;
}

input[type=submit]{
   background-color: white;  
   border: 2px solid #008000;
   color: black;
   padding: 10px 20px;
   text-align: center;
   font-style:bold;
   font-family:serif;
   display: inline-block;
   font-size: 18px;
   margin-left:300px;
   margin-top:80px;
   } 

   input[type=submit]:hover{
    background-color: #32cd32;
   }

   footer{
  margin-left:43%;
  margin-top:3%;
  
}
 </style>




<body>

<div class="banner">
<div class="navbar">
     <img src="images/bank_logo2.png" class="logo">
     <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="#">About us</a></li>
    
    <li><a href="#">Contact Us</a></li>
    
    <li><a href="all_users.php">Back</a></li>
    </ul>

</div>

<div class="form-box">
<table>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email id</th>
    <th>Balance</th>
 

</tr>
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

                echo '<tr>';
                  echo '<td>'.$rows['Id'].'</td>';
                    echo '<td>'.$rows['Name'].'</td>';
                      echo '<td>'.$rows['Email id'].'</td>';
                        echo '<td>'.$rows['Balance'].'</td>';
                 echo '</tr>';
            ?>
            </table>
            <?php
            echo "<td><a href=\"transaction.php?id=$rows[Id]\"> <input type='submit' value='Transfer Money'></a>";
            ?>
            
          </div>
          </table>
         
   <footer class="footer">
    <p>Presented by <b>ASHWINI BABAR</b><br> <b>The Sparks Foundation Project</b></p>
   </footer>
            </div>
            
</body>
</html>


