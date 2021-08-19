<html>
  <head>
    <title>Home page</title> 
  </head>
  <style>
*{
  margin:0;
  padding:0;
  font family:sans-serif;
  
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
.title{
margin-left: 34%;
margin-top: 50px;
color: #fff;
text-transform: uppercase;
transition: all 2s ease-in-out;
}
.title h1{
   
margin-top:20px;
font-size: 32px;
line-height: 10px;

}

.title h2{
margin-left:20%;
font-size: 16px;


}
.form-box{
  width: 380px;
  height: 450px;
  position: relative;
  margin: 5% auto;
  background: rgba(0,0,0,0.5);
  padding: 5px;
  overflow: hidden;
}

.form-box img{
margin-left: 30%;
margin-top: 10px;
}

.btn{
  height: 40px;
  width: 250px;
  border-radius: 10%;
  background-color: white;
  border: 2px solid coral ;
  transition: background-color 1s;
  font-size: 20px;
  color: black;
  font-style: bold;
  text-decoration: none;
margin-top: 80px;
margin-left: 17%;
cursor: pointer;
}

.btn:hover{
background-color: coral;
}
.btn1{
height: 40px;
width: 250px;
border-radius: 10%;
background-color: white;
border: 2px solid coral ;
transition: background-color 1s;
font-size: 20px;
  color: black;
  font-style: bold;
  text-decoration: none;
  
  margin-top: 10%;
  margin-left: 17%;
  cursor: pointer;
}

.btn1:hover{
background-color: coral;
}
.btn2{
height: 40px;
width: 250px;
border-radius: 10%;
background-color: white;
border: 2px solid coral ;
transition: background-color 1s;
font-size: 20px;
color: black;
font-style: bold;
text-decoration: none;
margin-top: 10%;
margin-left: 17%;
cursor: pointer;


}
.btn2:hover{
background-color: coral;
}
footer{
  margin-left:21%;
  margin-bottom:5%;
  margin-top:10%;
}
    </style>


 <body>

<div class="banner">
  <div class="navbar">
     <img src="images/bank_logo2.png" class="logo">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About us</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="home.php">Back</a></li>
  </ul>
  </div>


   <div class="title">
                <h2>Welcome To</h2><br>
                <h1>Maharashtra Gramin Bank!</h1>
                </div>

                     <div class="form-box">
                        <img src="images/bank_logo2.png">  
                       
                        <form method="POST" action="create_user.php">
                        <button class="btn">Create a User</button></a>
                        </form>

                        <form method="POST" action="all_users.php">
                        <button class="btn1">All Customers</button>  
                        </form> 

                        <form method="POST" action="transhistory.php">
                        <button  class="btn2">Transaction History</button>
                        </form> 
                      

    <footer class="footer">
      <p>Presented by <b>ASHWINI BABAR</b><br> <b>The Sparks Foundation project</b></p>
    </footer>
                    </div>
 </div> 
 </body>
</html>