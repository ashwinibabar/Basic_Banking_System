<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>All customers table</title>
    
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }


    .banner{
   width:100%;
   height:100vh;
   background-image:linear-gradient(rgba(0,0,50,0.35),rgba(0,0,50,0.5)),url('images/bg_img5.jpg');
   background-size:cover;
   background-position:center;


}
 

.title{

margin-top: 50px;
color: #fff;
text-transform: uppercase;
margin-left:40%;
}



    table{
        width:750px;
        margin-left:25%;
        margin-top:3%;
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
        background-color:#404040;
        color:white;
        
       }
        
    tr:nth-child(odd){
        background-color:lightgray;
    }
    tr:nth-child(odd):hover{
        background-color:gray;
        color:white;
       
        
    }
    tr:nth-child(even){
        background-color:#ededed;
    }
    tr:nth-child(even):hover{
        background-color:gray;
        color:white;
        
        
    }
   
   input[type=submit]{
   background-color: white;  
   border: none;
   color: black;
   padding: 10px 20px;
   text-align: center;
   font-style:bold;
   font-family:serif;
   display: inline-block;
   font-size: 18px;
   } 

   input[type=submit]:hover{
    background-color: #24a0ed;
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
    background-color:black;
   float:left;
   width:200px;
   height:70px;
  
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
    
    <li><a href="home.php">Back</a></li>
    </ul>
</div>

<div class=title>

<h1>All customers</h1>
</div>

   <table>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email id</th>
    <th>Balance</th>
    <th>Action</th>

</tr>


<?php
 $result=mysqli_query($mysqli,"SELECT* from user ORDER by Id");
 if($result->num_rows>0)
 {
   
while($res=mysqli_fetch_array($result)){
    echo '<tr>';
    echo '<td>'.$res['Id'].'</td>';
         echo '<td>'.$res['Name'].'</td>';
              echo '<td>'.$res['Email id'].'</td>';
                   echo '<td>'.$res['Balance'].'</td>';
                   
                    echo "<td><a href=\"view.php?id=$res[Id]\"><input type='submit' value='View Details'></a>";
                   
    echo '</tr>';
}
}
else{
    echo "0 Result";
}
?>
</table>


<footer class="footer">
  <p>Presented by <b>ASHWINI BABAR</b><br> <b>The Sparks Foundation Project</b></p>
</footer>


</div>
</body>
</html>





