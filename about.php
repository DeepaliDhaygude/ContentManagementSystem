<!-- How to create links to sections on the same page in HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Odometer -->
  <link rel="stylesheet" href="odometer-theme-default.css">
  <!-- Footer Links -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="assets/css/style1.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css"></script>
      <script type='text/javascript'>
      function search(){
          
          topsearch=document.getElementById('topsearch');
          
          searchtext=topsearch.value;
          myurl="https://www.google.co.in/#q="+searchtext+"&*";
          window.location=myurl;
      }
  
      </script>
  
  <style>
     
     /*CSS Reset*/
   body{
      Color:black;
      margin:0px;
      padding:0px;
      background:url('img/bg.jpg');
  }
  h1{
      color:#4682B4;
  }
  .left{
      position:absolute;
      display:inline-block;
      border: 2px solid green;
      left: 34px;
      top: 20px;
  }
  .mid{
      
      display: block;
      width: 56%;
      margin: 20px auto;
      border: 2px solid #4682B4;
      background-color: #4682B4;
      border-radius: 20px;
      
  }
  .right{
      position:absolute;
      right:34px;
      top:20px;
      display:inline-block;
      
  
  }
  .navbar{
      display:block;
      
  }
  .navbar li a:hover{
      background-color: #00BFFF;
  }
  .navbar li{
          
      display: inline-block;
      padding-top:0px;
      padding-bottom: 0px;;
      /* border:1px solid black; */
  }
  .navbar li a{
     display:inline-block;
      color:white;
      text-decoration: none;
      padding-right: 40px;
      padding-left:40px; 
      
      font-size: 20px; 
      font-weight: bold;
  }
  
   
  .form-group input{
      text-align:center;
      display: block;
      width:354px;
      padding:9px;
      border: 2px solid #4682B4;
      border-radius: 10px;
      margin: 11px auto;
      font-family: 'Baloo bhai', cursive;
  }
  .mydiv h1{
      text-align:center;
  }
  
  /* Footer area CSS */
  
  .container-fluid{
      background-color:#4682B4; 
      margin-top: 30px;  
  }
  .container-fluid1{
      background-color:white;
      width:80%;
      margin-top: 30px;
      padding-left: 100px;
      padding-right: 100px;
      margin:auto;

  }
  #row{
      padding-right: 15px;
      margin-left: 76px;
      margin-right: 76px;
      padding-left: 15px;
  }
  h3{
      color:white;
      padding-left: 40px;
  }
  ul{
      list-style-type:none;
  }
  .container-fluid ul li a{
      color:white;
  }
  .icon{
      font-size: 60px;
      padding-right: 25px;
      color:white;
  }
  .copyright{
      color: cyan;
  }
  .navbar li a:hover, .navbar li a.active{
      color:#4682B4;
      background-color:white;
      text-decoration:underline;
  }
  .mydiv{
      height:130px;
  }
  .class1{
    color:#4682B4;
    background-color: white;
    height: 200px;
  }
  .class2{
    background-color:#4682B4;
    color:white;
    height: 550px; /*#007e65*/
  }
nav{
    background-color: cadetblue;
    padding-bottom: 1px;
}
  nav ul li {
      padding-left:20px;
      padding-right:20px;

  }
  .class2 h1{
      color:white;
  }
  .container-fluid2{
      background-color:#4682B4;
      width:80%;
      margin-top: 30px;
      padding-left: 100px;
      padding-right: 100px;
      margin:auto;

  }
  .container-fluid3{
    background-color:white;
    color: #4682B4;
      width:80%;
      margin-top: 30px;
      padding-left: 100px;
      padding-right: 100px;
      padding-top: 100px;
      margin:auto;

  }
  .mycol {
    overflow: hidden;
    color:#4682B4;
    text-align: center;
    position: relative;
    z-index: 1;
    padding: 30px;
    border: 1px dashed #4682B4;/*rgba(255, 255, 255, 0.4)*/
    border-radius: 5px;
    transition: 0.5s;
}
.subs-odometer, .subs-odometer1, .subs-odometer2, .subs-odometer3{
    color:#4682B4;
    font-size: 50px;
}
.sign-icon{
    color:#4682B4;
    font-size: 25px;
}
.mycol > p{
    font-size:15px;
    font-weight: bold;
}
   </style>
  </head>
  <body>
  
  <div class="containertop">
       <div class="wrapper"> 
          <div id="topright">
          <h4>Contact Us:</h4>
          deepali.dhgd93@gmail.com<br>
           7387426768/9145288815<br>
          <form>
              <input id="topsearch" type="text" name="toptext" placeholder="Search" >
              <input id="topbtn" type="button" name="topbutton" value="Search" onclick='search();'>
          </form>
  
          <a id="makeapp" href="#"><strong>Get Offers</strong></a>
  
          </div>
          <div id="topcenter">
              <h1>Content Management System</h1>
          </div>
  
  
          <div id="topleft">
          <img src="images/Logo1.png" height="163px" width="20%">
              
          </div>
      </div> 
  </div>
  <header class="header">
      <!-- left box for logo -->
      <div class="left">
                
      </div>
      <div class="mid">
         
          <ul class="navbar">
              <li><a href="index.php">Home</a></li>
              <li><a href="about-us.php" class="active">About Us</a></li>
              <li><a href="cms.php">CMS</a></li>
              <li><a href="#">Members</a></li>
              <li><a href="#">Contact Us</a></li>
          </ul>
   
      </div>
      <nav class="navbar navbar-expand-sm navbar-light flex-nowrap">     
        <div class="navbar-collapse collapse w-100 justify-content-center" id="navbar5">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#class1">Spirit of Deep IT Solutions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#class2">Deep IT Solution Company Group</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#class3">Milestones</a>
                </li>
            </ul>
        </div>
        <div class="w-100"><!--spacer--></div>
    </nav>
     
      <!-- right box for buttons -->
      <!-- <div class="right">
  
      </div> -->
  </header>
   <div class="class1 container-fluid" id="class1">
       <div class="container-fluid1 justify-content-center">
        <h1>Spirit of Deep IT Solutions</h1>
        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex reprehenderit facilis reiciendis ratione dolore officiis? Voluptatum impedit similique placeat dignissimos magnam? Nihil autem doloremque accusantium dicta, vitae sint quis asperiores delectus, necessitatibus sed nam fuga consectetur, iure quaerat. Rerum, eveniet. Ea asperiores dolore alias ducimus laborum placeat sunt? Repudiandae iste excepturi dolorem quisquam maiores eum facilis ad tempore laudantium iusto magnam quibusdam fuga suscipit omnis voluptate, alias neque temporibus inventore illum! Sed enim nisi mollitia quis consectetur, dolor atque impedit.
        </span>
       </div>
    </div>
    <div class="class2 container-fluid " id="class2" style="padding-top:25px;">
        <div class="container-fluid2 justify-content-center">
            <h1>Deep It Solutions Group</h1>
            <img src="images/Deep It.jpg" alt="Deep IT Solutions" width="1000" height="326">
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex reprehenderit facilis reiciendis ratione dolore officiis? Voluptatum impedit similique placeat dignissimos magnam? Nihil autem doloremque accusantium dicta, vitae sint quis asperiores delectus, necessitatibus sed nam fuga consectetur, iure quaerat. Rerum, eveniet. Ea asperiores dolore alias ducimus laborum placeat sunt? Repudiandae iste excepturi dolorem quisquam maiores eum facilis ad tempore laudantium iusto magnam quibusdam fuga suscipit omnis voluptate, alias neque temporibus inventore illum! Sed enim nisi mollitia quis consectetur, dolor atque impedit.
            </span>
        </div>
        
    </div>
    <div class="class1 container-fluid" id="class3">
        <div class="container-fluid3 justify-content-center">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="mycol">
                        <h3><span class="subs-odometer odometer odometer-auto-theme" data-count="10"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span><span class="sign-icon">+</span></h3>
                        <p>Project Completed</p>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mycol">
                        <h3>
                            <span class="subs-odometer1 odometer odometer-auto-theme" data-count="100">
                                <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span>
                                </div>
                            </span>     
                            <span class="sign-icon">%</span></h3>
                        <p>Client Satisfaction</p>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mycol">
                        <h3><span class="subs-odometer2 odometer odometer-auto-theme" data-count="5"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>
                            <span class="sign-icon">+</span></h3>
                        <p>Learning Technology</p>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mycol">
                        <h3><span class="subs-odometer3 odometer odometer-auto-theme" data-count="2"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>
                            <span class="sign-icon">+</span></h3>
                        <p>Expert Members</p>
                        
                    </div>
                </div>

            </div>  
        </div>
    </div>
  <div class="footer-clean" style="margin-top:200px;">
          <footer>
              <div class="container-fluid">
                  <div class="row justify-content-center" id="row">
                      <div class="col-sm-4 col-md-3 item">
                          <h3>Services</h3>
                          <ul>
                              <li><a href="#">Web design</a></li>
                              <li><a href="#">Development</a></li>
                              <li><a href="#">Hosting</a></li>
                          </ul>
                      </div>
                      <div class="col-sm-4 col-md-3 item">
                          <h3>About</h3>
                          <ul>
                              <li><a href="#">Company</a></li>
                              <li><a href="#">Team</a></li>
                              <li><a href="#">Legacy</a></li>
                          </ul>
                      </div>
                      <div class="col-sm-4 col-md-3 item">
                          <h3>Careers</h3>
                          <ul>
                              <li><a href="#">Job openings</a></li>
                              <li><a href="#">Employee success</a></li>
                              <li><a href="#">Benefits</a></li>
                          </ul>
                      </div>
                      <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                          <p class="copyright">Deep IT Solutions © 2021</p>
                      </div>
                  </div>
              </div>
          </footer>
      </div>
      <!-- for odometer -->
      <!-- 1. 10+ Project Completed -->
      <script src="odometer/v0.4.6/odometer.min.js"></script>
      <script>
          const subsOdometer = document.querySelector(".subs-odometer");
   
          const odometer = new Odometer({
              el: subsOdometer, 
              animation: 'count',
              duration:800
          })

       // odometer.update(10);  One method
       subsOdometer.innerHTML = 10;

       //2. 100% Client Satisfaction
       const subsOdometer1 = document.querySelector(".subs-odometer1");
   
          const odometer1 = new Odometer({
              el: subsOdometer1, 
              animation: 'count',
              duration:800
          })

       //    odometer.update(10);  One method
       subsOdometer1.innerHTML = 100;

       //3. Learning Technology
       const subsOdometer2 = document.querySelector(".subs-odometer2");
   
          const odometer2 = new Odometer({
              el: subsOdometer2, 
              animation: 'count',
              duration:800
          })

       //    odometer.update(10);  One method
       subsOdometer2.innerHTML = 5;

       //4. Expert Members
       const subsOdometer3 = document.querySelector(".subs-odometer3");
   
          const odometer3 = new Odometer({
              el: subsOdometer3, 
              animation: 'count',
              duration:800
          })

       //    odometer.update(2);  One method
       subsOdometer3.innerHTML = 2;
      </script>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>









    
