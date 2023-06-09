
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Grow</title>
    
    <link rel="icon" type="image/x-icon" href="images/fevi.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
    <script>
        var i = 0;
        var images = [];
        var time =2000;

        //image list 
        images[0] = 'slide 1.jpg';
        images[1] = 'slide 2.jpg';
        images[2] = 'slide 3.jpg';
        images[3] = 'slide 4.jpg';

        //change image

        function changeImg(){
            document.slide.src = images[i];
            
            if(i < images.length - 1){
                i++;

            } else {
                i=0;
            }
            setTimeout("changeImg()", time);

        }
        window.onload = changeImg;


    </script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
/*resets*/

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
    

:root{
    /* --primary-text-color:#183b56;
    --secondary-text-color:#577592;
    --accent-color:#2294ed;
    --accent-color-dark:#1d69a3; */
    --padding-inline-section:20px;
}
body{
   font-family:'Poppins','sans-serif';
   color: var(--primary-text-color);
   background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(body-bgi.jpg);
   background-repeat: no-repeat;
   background-position: center;
   background-size: cover;
   
  
  
}
h1{
    font-size: 3rem;

}
h2{
    font-size: 2rem;
}
h2{
    font-size: 1.5rem;
}
p{
    font-family: 'Roboto',sans-serif ;
    font-size: 1.25rem;
    color: var(--secondary-text-color);
    line-height: 1.8rem;
}
a{
    text-decoration: none;
    display: inline-block;
}
ul{
    list-style: none;
}
/*utility classes */

.small-bold-text{
    font-size: 1rem;
    font-weight: 700;
    
}
.container{
    max-width: 1180px;
    margin-inline: auto;
    padding-inline: var(--padding-inline-section);
}
.flex{
    display: flex;
    align-items: center;

}
.hover-links{
    color:white;
    transition:0.2s ease-out;
    font-weight: bold;

}
.hover-links:hover{
    color: #acd93d;
}
.primary-button{
    background-color:#2294ed;
    border-radius: 6px;
    font-weight: 700;
    margin: 20px;
    color: white !important;
    padding: 12px 24px;
    box-shadow: 0 0 2px white;
    transition:0.2s ease-out;
   
}
.primary-button:hover{
    background-color: var(--accent-color-dark);
}

/*top - banner*/
.top-banner{
    background-color: #acd93d;
    background-size: 40px;
    background-repeat:none ;
    

}
.banner-text{
    color: black;
    padding: 10px 20px;
    text-align: center ;
    font-weight: bold;
}

/*nav section */

.main-nav{
    margin-top: 7px;
    justify-content: space-between;


}
.company-logo img{
    width: 55px;
}
.nav-links{
    flex-basis:730px ;
}
.nav-links ul{
    justify-content: end;
    gap: 40px;
}
/*header*/
/* header{
    padding: 50px var(--padding-inline-section);
}
header section{
    justify-content: center;
    gap: 50px;} */


    /* header section  */


.header-img  img{
    width: 1115px;
    border: 2px solid black;
    border-radius: 20px;
    
}
.header-right img{
    width: 240px;
    height: 600px;
    border: 2px solid;
    
}
.header-rightone img{
    margin-left: 10px;
}
    /* border: 2px solid;
    padding-top: 230px;
    
    padding-right: 100px;
    padding-bottom: 300px;
 */
 /* footer{
    padding-block: 60px;
    background-color: grey;
 }
 .link-column{
    flex-direction: column;
    align-items: flex-start;
    gap: 5px;
 }
 .footer-container{
    align-items: flex-start;
    justify-content: space-between;
 } */
 .header-leftone h2{
    font-family: sans-serif;
    font-weight: bold;
    color: whitesmoke;
    font-size: 35px;
 }
 .header-leftone p{
    color: white;
 }
 .header-leftone button{
    background-color: #2294ed;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: bolder;

 }
 .header-leftone button:hover{
    background-color: transparent;
    border: 0.3px solid white;
    color: #ffffff;
 }
 .header-rightone{
    margin-left: 20px;
    margin-top: 20px;
    
    
   
 }


 /* footer section  */

 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

.container{
	max-width: 1170px;
    margin:auto;
    
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #24262b;
    padding: 50px 0;
    margin-top: 20px;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}





 


</style>

</head>
<body>
    <!-- top banner -->
    <div class="top-banner">
        <div class="container">
            <div class="small-bold-text banner-text">  <  W E L C O M E  >  </div> 
        </div>
      
    </div>
    <!---nav -->
    <nav>
        <div class="container main-nav flex" >
            <a href="#" class="company-logo">
                <img src="images/logo.png" alt="company logo">
            </a>
            <div class="nav-links">
               <ul class="flex">
                <li><a href="#"class="hover-links">Products</a></li>
                <li><a href="#"class="hover-links">Customer</a></li>
                <li><a href="#"class="hover-links">About</a></li>
                <li><a href="#"class="hover-links">Contact Us</a></li>
                
                <li><a href="logout.php"class="hover-links primary-button">Log out</a></li>
               </ul>
            </div>
        </div>
    </nav>
    <!---header section -->
    <header>
        <div class="container header-section flex">
           <div class="header-img">
             <img name="slide" width="800px" height="500px">
            </div>
            <!-- <div class="header-left">
                <img src="images/header.jpeg" alt="header image">
            </div> -->
           
        </div>

    </header>
    
    
    <section >
    <div class="container header-section flex">
     <div class="header-leftone">
       <h2>Agricuture</h2>
      <p> Use of fertilizers, pesticides is resulting in soil degradation and causing health hazards for the farmers and the consumers. This is an issue at multiple levels.
As part of its counter measures, CCD is taking initiative to focus on sustainable farming where the
use of organic inputs is maximized and at the same time, methods are used to market the sustainable food through channels that prioritize the same.</p>
<button>Read more ></button>

      </div>
      <!-- <div class="header-left">
          <img src="images/header.jpeg" alt="header image">
      </div> -->
      <div class="header-rightone">
          <img src="advertise.jpg" alt="advertise image" width="200px">
      </div>
  </div>
    <!-- <div class="container flex">
    <div class="section-left">
    <div >
        <h2>agriculture</h2>
        <p>Use of fertilizers, pesticides is resulting in soil degradation and causing health hazards for the farmers and the consumers. This is an issue at multiple levels.

As part of its counter measures, CCD is taking initiative to focus on sustainable farming where the
use of organic inputs is maximized and at the same time, methods are used to market the sustainable food through channels that prioritize the same.</p>
   </div>
        <div class=" section-right">
            <img src="logo3.png" >
            
        </div>
    </div>
    </div> -->
    </section>
    <section class="big-features-section"></section>
    <section class="big-features-section"></section>
    <section class="exmaple-section"></section>
    <section class="cta-section"></section>
    <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>online shop</h4>
  	 			<ul>
  	 				<li><a href="#">watch</a></li>
  	 				<li><a href="#">bag</a></li>
  	 				<li><a href="#">shoes</a></li>
  	 				<li><a href="#">dress</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
    <div class="subfooter"></div>
    <script src="https://kit.fontawesome.com/65f3bea1ea.js" crossorigin="anonymous"></script>
    
    
</body>
</html>