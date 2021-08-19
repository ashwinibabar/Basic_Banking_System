<?php
include("config.php");
?>

<html>
    <head>
        <title>create_user</title>
     

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
  .form-box{
    width: 400px;
    height: 500px;
    position: relative;
    margin: 9% auto;
    background: rgba(0,0,0,0.5);
    padding: 5px;
    overflow: hidden;
}

.form-box img{
  margin-left: 37%;
  margin-top: 10px;
  height: 100px;
  width: 100px;
}

input{
    margin-left: 17%;
    margin-top: 10%;
    position: 80px;;
    height: 1cm;
    width: 7cm;
    font-size: 15px;
    font-family: Verdana;
    border: none;
    
}

input[type=submit]{
    width: 45%;
    margin-left: 150px;
    background: #eb4630;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    
}

.navbar{
  background-color:black;
  opacity:0.5;
  width:100%;
  height:5%;
  margin:auto;
  padding:15px 0;
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
   padding:10px 0;
   float:left;
   width:200px;
   height:40px;
   background-color:black;
   opacity:0.9;
   list-style:none;
   line-height:40px;
   text-align:center;
   font-size:20px;  
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
.navbar ul li:hover ul li{
   display:block;
}
footer{
  margin-left:25%;
  margin-bottom:5%;
  margin-top:10%;
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
    
    
    </ul>

</div>

        
        <div class="form-box">
        <img src="images/user_image3.png">
        <form method="POST" action="create.php">
           
            <table>
                <tr>
                    <td></td><input type="text" name="name" placeholder="Enter your name..."></td>
                </tr>
               
                <tr>
                    <td></td><input type="text" name="email" placeholder="Enter your Email id..."></td>
                </tr>

                <tr>
                     <td></td><input type="text" name="bal" placeholder="Enter Balance..."></td>
                </tr>

                <tr>
                    <td colspan="2"><input type="submit" name="sub" value="Create"></td>
                </tr>

            </table>
            
        </form>

        <footer class="footer">
            <p>Presented by <b>ASHWINI BABAR</b><br> <b>The Sparks Foundation Project</b></p>
    </footer>
        
        </div>
        
</div>


    </body>
</html>