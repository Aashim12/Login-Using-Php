<?php
  session_start();
  if(!isset($_SESSION['IS_LOGIN'])){
    header('location:demo.php');
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grant Foundation</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
</div>
<header>    
  <div class="container">  
    <div class="first_row"> 
       <nav class="first" >
           <ul >
           <li>Follow us on: </li> <li id="Fb"><a href="#">
        <img style="height: 20px"  src="assests/facebook.png"></a></li>
            <li id="In"><a href="#"><img style="height:20px;" src="assests/linkendin.png"></a></li>
             <li id="Tw"><a href="#"><img style="height:20px" src="assests/facebook.png"></a></li>
             <li id="Li"><a href="#"><img style="height:20px" src="assests/facebook.png"></a></li>
            </ul>
      
        </nav>
        <nav class="second">
     <ul><li><img style="height:25px; margin-right: 10px;"  src="assests/facebook.png" >Email: demo@demo.com</li>
      <li>   <img style="height:25px; margin-left :20px;"  src="assests/facebook.png"> Phone: 9292901022</li>
      <li><a href="logout.php">Logout</a></li>
      </ul>

     </nav>      

    </div>
 <div class="second_row">
     <nav class="third">
    <ul>
        <li ><img src="assests/logo2.jpg" style="height: 30%; width: 30%; margin-left: 10em; border-radius: 2em;"></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Project</a></li>
        <li><a href="#">Event</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Page</a></li>
        <li><a href="#">Shortcodes</a></li>
    </ul>
     </nav>
     <button><a href="#">Donate</a></button>
    </div>
 
  </div>    


</header>


<main>  
<div class="grant">
  <img src="assests/edmund-lou-dcPThE8G59E-unsplash.jpg" alt="two boys">
    <div class="contentgrant">
        <h2 >WE CAN HELP SOMEONE</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit veniam quisquam fac
             </p>
        <div class="imgbutton">
        <button id="donate">DONATE NOW</button>
        <button id ="more">LEARN MORE</button>     
        </div>
    </div>

</div>
<div class="causes">
    <ul>
        <li style="color: #000;">OUR</li>
        <li style="color: #7de9e1;">CAUSES</li>
    </ul>
    <div class="class">
        <h3>Our charity help those people who have no hope</h3>
    </div>
</div>
<div class="docauses">
    <div class="childed">
        <img src="assests/ben-white-qDY9ahp0Mto-unsplash.jpg" alt="">
        <h3>Children to get education</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga animi autem cupiditate commodi? Nulla facere molestiae sed alias, itaque expedita, repellendus </p>
            <div class="donateinfo">
                <button>Donate</button>
                <p> $3550 / $5000</p>
                </div>
        </div>
        <div class="childed">
            <img src="assests/ben-white-qDY9ahp0Mto-unsplash.jpg" alt="">
            <h3>Children to get education</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga animi autem cupiditate commodi? Nulla facere molestiae sed alias, itaque expedita, repellendus </p>
                <div class="donateinfo">
                    <button>Donate</button>
                    <p> $3550 / $5000</p>
                    </div>
            </div>
            <div class="childed">
                <img src="assests/ben-white-qDY9ahp0Mto-unsplash.jpg" alt="">
                <h3>Children to get education</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga animi autem cupiditate commodi? Nulla facere molestiae sed alias, itaque expedita, repellendus </p>
                    <div class="donateinfo">
                        <button>Donate</button>
                        <p> $3550 / $5000</p>
                        </div>
                </div>







            </div>


     <div class="help">
         <img src="assests/new.jpg" alt="kids">
         <div class="helpcontent">
             <h2>HOW CAN YOU HELP US ?</h2>
             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, reiciendis et dignissimos eos possimus fuga eligendi ducimus non! Laboriosam</p>
         </div>
        <div class="options">
            <div class="option1">
            <div class="imagenew">
                <img src="assests/university.png" style="height:50px;width: 50px;" alt="">
            </div>
           <div class="info">
               <ul>
                   <li><h3 style="    font-weight: 600;
                    padding-bottom: 2em;
                    font-size: 1.2em;">DONATOR</h3</li>
                   <li style="padding-top: .5em; font-size: 15px; width: 50%;" ><p> ipsum dolor sit amet consectetur adipisicing elit. Accusamus animi facere a iste voluptatibus temporibus eveniet,
                </p>
                </li>

               </ul>
              <button>LEARN MORE</button> 
           </div>

        </div>
        <div class="option1">
            <div class="imagenew">
                <img src="assests/university.png" style="height:50px;width: 50px;" alt="">
            </div>
           <div class="info">
               <ul>
                   <li><h3 style="    font-weight: 600;
                    padding-bottom: 2em;
                    font-size: 1.2em;">VOLUNTEER</h3</li>
                   <li style="padding-top: .5em; font-size: 15px; width: 50%;" ><p> ipsum dolor sit amet consectetur adipisicing elit. Accusamus animi facere a iste voluptatibus temporibus eveniet,
                </p>
                </li>

               </ul>
              <button>LEARN MORE</button> 
           </div>

        </div>
        <div class="option1">
            <div class="imagenew">
                <img src="assests/university.png" style="height:50px;width: 50px;" alt="">
            </div>
           <div class="info">
               <ul>
                   <li><h3 style="    font-weight: 600;
                    padding-bottom: 2em;
                    font-size: 1.2em;">FUNDRAISER</h3</li>
                   <li style="padding-top: .5em; font-size: 15px; width: 50%;" ><p> ipsum dolor sit amet consectetur adipisicing elit. Accusamus animi facere a iste voluptatibus temporibus eveniet,
                </p>
                </li>

               </ul>
              <button>LEARN MORE</button> 
           </div>

        </div>
       
     </div>       
</main>
<footer>
 <div class="content">
   <div class="sec heading1">
    <h3>ABOUT US</h3>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    </p>
    <div class="sec contact">
        <h3>CONTACT US</h3>
        <ul class="lists" style="list-style: none;" >
            <li style="padding-bottom: .5em;">Phone: 999111</li>
            <li style="padding-bottom: .5em;">Email : Aaas@gmaolc.om</li>
            <li style="padding-bottom: .5em;">Addres: Kota Rajasthan</li>
        </ul>
    </div>

    </div>
    <div class="sec heading2">
        <h3>OUR PROJECT</h3>
          <ul class="lists">
              <li><a href="#">Water Survey </a></li>
              <li><a href="#">Education for all </a></li>
              <li><a href="#">Treatment </a></li>
              <li><a href="#">Food serving </a></li>
              <li><a href="#">Cloth </a></li>
              <li><a href="#">Setter project </a></li>
          </ul>
        </div>
        <div class="sec heading3">
            <h3>QUICK LINKS</h3>
              
            <ul class="lists">
                <li><a href="#">Causes </a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Gallery </a></li>
                <li><a href="#">Terms of use </a></li>
                <li><a href="#">Legal Disclaimer </a></li>
                <li><a href="#">Privacy policy </a></li>
            </ul>
            </div>
        <div class="sec heading4">
            <h3>NEWSLETTER</h3>
            <p>Select your newsletter , enter your mail address and click subscribe
   </p>
           <input type="email" id="email" name="email" placeholder="Enter your mail address">
           <input type="submit" id="submit-btn" >

        </div>   

                
</div>
  </footer>
<div class="copyright">
        <p>2021 Grant mede with By has Themes</p>

    <div class="social">
        <ul>
   <li><a href="#"><img src="assests/facebook.png" style="height: 20px;"></a></li>
   <li><a href="#"><img src="assests/facebook.png" style="height: 20px;"></a></li>
   <li><a href="#"><img src="assests/facebook.png" style="height: 20px;"></a></li>
   <li><a href="#"><img src="assests/facebook.png" style="height: 20px;"></a></li>

                
        </ul>
    </div>
</div>
</div>
  

</body>
</html>