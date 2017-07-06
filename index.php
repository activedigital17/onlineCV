<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Baloo|Josefin+Sans" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
   <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">


      
      <style>

      body{

        
        background: url(slika.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;


      }

      .copyright{

        font-size: 20px;
        color: white;


      }

     
          
          #example{


            font-size: 20px;
          }


          .typed-cursor{
  opacity: 1;
  -webkit-animation: blink 0.7s infinite;
  -moz-animation: blink 0.7s infinite;
  animation: blink 0.7s infinite;
}
@keyframes blink{
  0% { opacity:1; }
  50% { opacity:0; }
  100% { opacity:1; }
}
@-webkit-keyframes blink{
  0% { opacity:1; }
  50% { opacity:0; }
  100% { opacity:1; }
}
@-moz-keyframes blink{
  0% { opacity:1; }
  50% { opacity:0; }
  100% { opacity:1; }
}
      

         .slika{
              margin-top: 40px;
              min-height: 720px;
              position: relative;
              height: 100%;
              background: url(slika.jpg) center center;
              background-repeat: no-repeat;
              background-attachment: fixed;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              background-size: cover;
              color: #fff;
         }

         #portfolio{


          margin-top: 100px;
         }

         .row{

          font-family: 'Josefin Sans', sans-serif;
         }


        .navbar{ padding-right: 20px;
            font-family: 'Baloo', cursive;
            color: white;
            padding: 6px;
            font-size:20px;
         }
         
        

         .social p {

          font-size: 20px;
          margin-top: 10px;
         }

         .social a{

          font-size: 20px;
         }


          .ime{

font-size:25px;
padding-top: 20px;

          }


          .portfolio{

            padding-bottom: 20px;
          }

              
          .carousel{
          margin-bottom: 50px;
          margin-top: 20px;

          }

          #education{

            margin-top: 70px;
            margin-bottom: 20px;
          }


          .contact{

            margin-top: 40px;
            margin-bottom: 20px;
          }


          .animation{

            margin-top: 200px;
            margin-left: 100px;
          }

          .welcome{

            -webkit-animation-delay: 1s;
          }



          .first{margin-left: 260px;
          font-family: 'Love Ya Like A Sister', cursive;

        }

        .first h1 {

          font-size: 60px;
        }

          .second{
            margin-top: 80px;
            font-family: 'Love Ya Like A Sister', cursive;
          }
          
          
          
      
      
      </style>


      <script>
          var shiftWindow = function() { scrollBy(0, -80) };
          window.addEventListener("hashchange", shiftWindow);
          function load() { if (window.location.hash) shiftWindow(); }
      </script>


  </head>
  <body onload="load()">
    <div class="container-fluid">
      <div class="container-fluid" id="navbar">


      
        <nav class = "navbar navbar-fixed-top navbar-inverse bg-inverse" role = "navigation">
   
   <div class = "navbar-header">
      <button type = "button" class = "navbar-toggle" 
         data-toggle = "collapse" data-target = "#example-navbar-collapse">
         <span class = "sr-only">Toggle navigation</span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
      </button>
    
      <a class = "ime navbar-brand" href = "#">Antonio Plantaš Resume</a>
   </div>
   
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
  
      <ul class = "nav navbar-nav navbar navbar-right">
         <li><a href="#">Home</a></li>
            
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#info">Info</a></li>
              <li><a href="#contacts">Contacts</a></li>
      
      
      
      </ul>
   </div>
   
</nav>
      </div>
      </div>


      <div class="container-fluid slika">


      <div class="row animation">
      
      <div class="first">
      <h1 class="hello animated rubberBand">Hello</h1>
      </div>

      <div class="second">
       <h1 class="welcome animated bounceInLeft">I am Antonio and welcome to my page!!</h1>
      </div>



      
      </div>


      </div>


      <div class="container" >
        
      <div class="jumbotron">


      

       

        <div class="row text-center">
        <h2 id="portfolio">Portfolio</h2>
        </div>

        <div class="row carousel">
          
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators text-center">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                   
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="jobs.jpg" alt="">
                    </div>
                    <div class="item">
                      <img src="movie.jpg" alt="">
                    </div>

                    <div class="item text-center">
                      <img src="krizic.jpg" width="300px" alt="" text-center>
                    </div>

                    <div class="item">
                      <img src="slika.jpg" alt="#>
                    </div>

                    
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>


        </div>


        
          
          <div class="row text-center">
          <h2 id="info">Info</h2>
          </div>

           <div class="row">
            <div class="col-md-2 col-xs-6">

            <p>Name:</p>
            <p>Surname:</p>
            <p>Date of Birth:</p>
            <p>Address:</p>
            



            </div>

            <div class="col-md-10 col-xs-6">
            <p>Antonio</p>
            <p>Plantaš</p>
            <p>12th August 1991</p>
            <p>Miladini 3, 10453 Gorica Svetojanska</p>
            



            </div>
          </div>

          



        <div>

        <div class="row text-center">
          <h2 id="education">Education</h2>
          </div>


          <div class="row">
            <div class="col-md-2 col-xs-6">
            <p>2017 - today</p>
            <p>2016</p>
            <p>2016</p>
            <p>2010 - 2016</p>
            <p>2006 - 2010</p>
            



            </div>

            <div class="col-md-10 col-xs-6">
            <p>Free Code Camp ( Full Stack Web Development)</p>
            <p>CS50</p>
            <p>Udemy Course ( Web Developer Bootcamp)</p>
            <p>Faculty of Economics and Business Zagreb</p>
            <p>High School Jastrebarsko</p>
            



            </div>
          </div>



        </div>


        <div class="row text-center contact">
          
          <h2 id="contacts">Contacts</h2>
        </div>


        <div class="text-center social">
          

         <a class="btn btn-block btn-social btn-linkedin" href="https://www.linkedin.com/in/antonio-planta%C5%A1-20aa30126/">
             <span class="fa fa-linkedin"></span> Linkedin
          </a>   


          <a class="btn btn-block btn-social btn-facebook" href="https://www.facebook.com/AntonioPlantas">
          <span class="fa fa-facebook"></span> Facebook
          </a>

          
          <p>
          
          
          <a href="tel:+385993018608">+385993018608</a>
          </p>
          <p>
          <a href="mailto:antonio.plantas@gmail.com">antonio.plantas@gmail.com</a>
          </p>


        </div>






 

   
        




      </div>


      <div class="row text-center"><p class="copyright">Created by Antonio Plantaš</p></div>
</div>

    
        

      




      

      

      

     
        
        
        
       
        
      
        
        
       
            
           
        
        
        
     
        
        
     
      
        
      
      
      
      
      
    
      
      

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://use.fontawesome.com/da7a7d8c96.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>
</html>