<!DOCTYPE html>
<html>
<head>
  <title>Innovative-Expo-Nepal</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript"> 
    $(document).ready(function(){
        $('#eventTable').dataTable();
    });
  </script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<style>

.thumbnail {
    position: relative;
}

.text-block {
  position: absolute;
  bottom: 230px;
  right: 450px;
  background-color: #51c1bb;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}

.text { font-family: "Impact"; }
.textino { font-family: "Fantasy"; }

.map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}

#myFooter {
    background-color: #3c3d41;
    color: white;
    padding-top: 30px;
}

#myFooter .footer-copyright {
    background-color: #333333;
    padding-top: 3px;
    padding-bottom: 3px;
    text-align: center;
}

#myFooter .row {
    margin-bottom: 60px;
}

#myFooter .navbar-brand {
    margin-top: 45px;
    height: 65px;
}

#myFooter .footer-copyright p {
    margin: 10px;
    color: #ccc;
}

#myFooter ul {
    list-style-type: none;
    padding-left: 0;
    line-height: 1.7;
}

#myFooter h5 {
    font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter h2 a{
    font-size: 50px;
    text-align: center;
    color: #fff;
}

#myFooter a {
    color: #d2d1d1;
    text-decoration: none;
}

#myFooter a:hover,
#myFooter a:focus {
    text-decoration: none;
    color: white;
}

#myFooter .social-networks {
    text-align: center;
    padding-top: 30px;
    padding-bottom: 16px;
}

#myFooter .social-networks a {
    font-size: 32px;
    color: #f9f9f9;
    padding: 10px;
    transition: 0.2s;
}

#myFooter .social-networks a:hover {
    text-decoration: none;
}

#myFooter .facebook:hover {
    color: #0077e2;
}

#myFooter .google:hover {
    color: #ef1a1a;
}

#myFooter .twitter:hover {
    color: #00aced;
}

#myFooter .btn {
    color: white;
    background-color: #d84b6b;
    border-radius: 20px;
    border: none;
    width: 150px;
    display: block;
    margin: 0 auto;
    margin-top: 10px;
    line-height: 25px;
}

@media screen and (max-width: 767px) {
    #myFooter {
        text-align: center;
    }
}
</style>


</head>
<body>

  <nav class="navbar navbar-expand-lg " style="background-color: #99e6b3; id="mainNav">
  <a class="navbar-brand js-scroll-trigger btn btn-outline-success btn-lg" href="index.php">
    <h5><b><img src="images/thumb/small.jpg">INNOVATIVE-Expo-nepal</b></h5></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><span style="padding-left:0px">
        <a class="btn btn-success btn-lg" href="#about"> Details</a>
      </li>
      <li class="nav-item"><span style="padding-left:5px">
        <a class="btn btn-danger btn-lg" href="#events"> Nearby-Events  </a>
      </li>
      <li class="nav-item"><span style="padding-left:5px">
        <a class="btn btn-warning btn-lg" href="#news"> News</a>
      </li>
      <li class="nav-item"><span style="padding-left:5px">
        <a class="btn btn-info btn-lg" href="admin/show_image_gallery.php"> Gallery</a>
      </li>
      <li class="nav-item"><span style="padding-left:5px">
        <a class="btn btn-danger btn-lg" href="#maps">  Maps</a>
      </li>

      <li class="nav-item" ><span style="padding-left:230px">
        <a class="btn btn-primary btn-lg active" href="finallogin.php">&nbsp LOGIN</a>
      </li>

      <li class="nav-item" >
        <a class="btn btn-primary btn-lg active" href="finalsignup.php">&nbsp SIGN-UP</a>
      </li>
    </ul>
  </div>  
</nav>

<script type="text/javascript"> 
    $(document).ready(function()
    {
        $('#eventtable').dataTable();
    });
</script>


<div class="row" id="box-search">
        <div class="thumbnail text-center">
        <img src="../images/12.jpg" class="img-fluid" alt="Responsive image">
        <div class="text-block">
        <h1 class="display-3"><p class="text"><b>INNOVATIVE-Expo-Nepal</b></p></h1>
        </div>
    </div>
</div>

<div id="about">
<div class="jumbotron">
   <h1 class="display-3"><p class="textino"><b>INNOVATIVE-Expo-Nepal</b></p></h1>
  <hr class="my-4">
  <p>This Event site will help people to find thier relevant events and also 
To meet to right possibilities you need to be at perfect place at right time with right tactics and information and meeting right people. Expos are provide the great platform for connecting with right as well as perfect opportunities. Innovative-Expo Nepal gathers information about every event on a regular basis to ensure our data is in fresh condition.So you have all that you need to make an informed choice.
Creating amazing enrolling experiences.
Initializing with information for many events globally as well as locally, you can easily make an appointment to attend the specific expo as well.Enabling expos to create amazing experiences.

We also created a admin dashboard so that it would be easy for organizer to manage add or delete people attending thier events.
</p>
</div>

<div id="slideshow">
  <h1 class="my-4 text-center text-lg-center">Gallery</h1>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/7.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/4.jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/5.jpg" alt="Fifth slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="images/6.png" alt="Sixth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/7.jpg" alt="Seventh slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/8.jpg" alt="Eight slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/9.jpg" alt="Nineth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/10.jpg" alt="Tenth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<br>

<div class="container">

      <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="Images/1.jpg" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail " src="images/1.jpg" alt="gallery01">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="gallery2.jpg" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail  " src="images/2.jpg" alt="gallery02">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="gallery3.jpg" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/3.jpg" alt="gallery03">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="gallery4.jpg" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/4.jpg" alt="gallery04">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="gallery5.jpg" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/5.jpg" alt="gallery05">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="gallery6.jpg" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/6.png" alt="gallery06">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="gallery7.jpg" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/7.jpg" alt="gallery07">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="gallery8.jpg" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/8.jpg" alt="gallery07">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="gallery9.jpg" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/9.jpg" alt="gallery09">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="gallery10.jpg" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/10.jpg" alt="gallery10">
          </a>
        </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="gallery10.jpg" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/11.jpg" alt="gallery11">
          </a>
        </div>
         <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="gallery10.jpg" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="images/12.jpg" alt="gallery12">
          </a>
        </div>
      </div>
</div>




<section class="section section-light">
<div class="container" id="event">
        <table id="eventtable" class="table table-striped">  
          <thead>  
            <tr>  
              <th>Event.No.</th>  
              <th>Image</th> 
              <th>Name</th>  
              <th>Event Date</th> 
              
               
               
            </tr>  
          </thead>  
          <tbody>  
            <tr>  
              <td>1</td>  
              <td><img src="images/3.jpg" width="80px" height="40px"></td>  
              <td>Nepal Agritech</td>  
              
              <td>2019 Jan 25-27 th</td>
              
               
            </tr>   
             <tr>  
              <td>2</td>  
               <td><img src="images/4.jpg" width="80px" height="40px"></td>  
              <td>Asian Hemp Summit</td>  
             
              <td>2018 Feb 1-2nd</td> 
              
            </tr> 
            <tr>  
              <td>3</td>  
              <td><img src="images/5.jpg" width="80px" height="40px"></td> 
              <td>Nepal Buildcon International Expo</td>  
               
              <td>2018 Feb 18th</td> 
              
            </tr>  
            <tr>  
              <td>4</td> 
              <td><img src="images/6.png" width="80px" height="40px"></td>  
              <td>Solar Today Expo-LED, Expo & Battery Expo</td>  
               
              <td>2018 APRIL 9th</td> 
             
            </tr>  
             <tr>  
              <td>5</td> 
              <td><img src="images/7.jpg" width="80px" height="40px"></td>  
              <td>Education Worldwide India - Kathmandu</td>  
               
              <td>2018 June 9th</td> 
             
            </tr> 
          </tbody>  
      </table>  
    </div>
  </section>

<div id="events">
  <h1 class="my-4 text-center text-lg-center">Events</h1>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/3.jpg" alt="Card image cap">
    <a href="#" style="text-decoration: none">
    <div class="card-body">
      <h4 class="card-title">Nepal Agritech International Expo</h4>
    </a>
      <p class="card-text">"Nepal’s Largest Exhibition On Agriculture, Farm Machinery, Dairy, Poultry, Livestock, Farm Equip."
3rd Nepal Agritech International Expo 2019 is 3 days event which is scheduled from 25th January to 27th January 2019 at BHARATPUR MAHANAGAR PALIKA, PRADARSANI MARG in Chitwan, Nepal. This event showcases products like Agricultural machinery & equipment, tractor, harvester, rotavator, floriculture & nursery industry, herbal food products and much more etc. in the Agriculture & Forestry, Business Services, Horticulture & Floriculture, Plants & Machinery industries.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 5 days ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/4.jpg" alt="Card image cap">
    <a href="#" style="text-decoration: none">
    <div class="card-body">
      <h4 class="card-title">Asian Hemp Summit</h4>
    </a>
      <p class="card-text">The Asian Hemp Summit Kathmandu intends to explore Asia’s vast and fast-moving industrial hemp sectors such as Investing in Asian Hemp, Cultivation & Harvesting, CBD, Food & Drink, Health & Beauty, Cosmetics, Textiles & Accessories, Building Materials & Construction, Biocomposites, Farming Equipment, Extraction & Other Processing Technology, Import/Export, Research & Development, and much more.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 5 days ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/5.jpg" alt="Card image cap">
    <div class="card-body">
      <a href="#" style="text-decoration: none">
      <h4 class="card-title">Nepal Buildcon International Expo</h4>
      </a>
      <p class="card-text">"Largest Expo on Architecture, Building, Construction, Design & Engineering."
5th Nepal Buildcon is a focused and solely dedicated exhibition for the Architects, Builders, Equipment, Tools, Heavy Machinery, Construction material companies, and Interior Designers, Buildcon International Expo as a business platform creates its vitality, bringing together best of the manufacturers and prevalent buyers, contractors, Architects & foremost consultants. 

</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 5 days ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/6.png" alt="Card image cap">
    <div class="card-body">
      <a href="#" style="text-decoration: none">
      <h4 class="card-title">Solar Today Expo-LED, Expo & Battery Expo</h4>
      </a>
      <p class="card-text">Solar Today Expo-LED, Expo & Battery Expo will host leading players in the solar energy sector, LED & Battery Industry that will include manufacturers, suppliers, contractors, Distributors, R & D, Technologies, consultants from India and Overseas. Grab the opportunity to see the latest technologies and suppliers of Solar, LED & Battery products Find types of machinery, materials, equipment, and solutions from leading manufacturers. Be a part of the latest happenings in this field Learn about the latest innovations, trends, and technologies in the field.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 5 days ago</small>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="images/7.jpg" alt="Card image cap">
    <div class="card-body">
      <a href="#" style="text-decoration: none">
      <h4 class="card-title">Education Worldwide India - Kathmandu</h4>
      </a>
      <p class="card-text">The Education Worldwide India - Kathmandu focused on student empowerment and has been highly successful in achieving this target. It offerings always focused on providing the right information to the Indian Students almost at their home or the city.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 5 days ago</small>
    </div>
  </div>
</a>
</div>
</div>
</div>

<br>
<br>
<br>
<br>

<div id="news">
  <h1 class="my-4 text-center text-lg-center">News</h1>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/ittrade.jpg" alt="Card image cap">
    <a href="#" style="text-decoration: none">
    <div class="card-body">
      <h4 class="card-title">IT traders lunching free hosting services</h4>
    </a>
      <p class="card-text">IT traders are lunching free domain hosting services.They are providing short workshop about web technology.IT traders Pvt Ltd. are providing free and premium web hosting services in Nepal. Other services they provide are domain registration, web hosting services, email hosting, web solutions and web development at a reasonable and cost-effective price.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 5 days ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/can.jpg" alt="Card image cap">
    <a href="#" style="text-decoration: none">
    <div class="card-body">
      <h4 class="card-title">CAN InfoTech 2019</h4>
    </a>
      <p class="card-text">The CAN Info-Tech is an international trade fair for the computer industry. It takes place annually in Kathmandu and is organized by the Computer Association of Nepal (CAN). National and international companies present here software, hardware, network devices and introduce networking solutions, mobile solutions, security systems, internet banking systems and wireless solutions. Other subjects are in the IT-based services and e-governance. For exhibitors and visitors everything about computer is provided under one roof, that is why the CAN Info-Tech is also a platform for product promotion and to share knowledge. Furthermore It is a forum for the latest technologies, creates awareness of IT applications and helps to make the IT sector of Nepal known throughout the world. The exhibition is accompanied by a 2-day conference, which is an ideal platform to introduce new products and services to a distinguished audience of IT professionals, politicians and decision makers in the industry.

The CAN Info-Tech takes place annually, and therefore for the 22nd time previsibly in January 2019 in Kathmandu.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 5 days ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/10.jpg" alt="Card image cap">
    <div class="card-body">
      <a href="#" style="text-decoration: none">
      <h4 class="card-title">DevFest Kathmandu</h4>
      </a>
      <p class="card-text">DevFest Kathmandu 

GDG DevFests are large, community-run events that can offer speaker sessions across multiple product areas, all-day hack-a-thons, code labs, and more.The official DevFest Season runs from September 01st through November 30th.

As a part of this global series, GDG Kathmandu is organizing this event on:

Date: 12th November
Time: 10 am to 5 pm 
Venue: Trade Tower Nepal

DevFest Kathmandu is a two track open event with workshop, speaker series, barcamp and various hands-on sessions. 
The agenda :
Track 1 : 
1. VR. Workshop (4 hours)- registration and confirmation required 
2. Speaker Series 
3. Ignite Session (Pitch your idea/product in 5 minutes)
Track 2
Hands on sessions ( 30 min to 1 Hrs. interactive sessions)- registration required 
1. Raspberry Pi - create internet of things 

2. Git Session - learn social coding 

3. Sensing Space - play with satellite kit 

4. Ingress - AR game, the world around you is not what it seems

5. Google Drive for Professionals

6. 3D printing : digital fabrication, design and print

7. And adding more</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 5 days ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/11.jpg" alt="Card image cap">
    <div class="card-body">
      <a href="#" style="text-decoration: none">
      <h4 class="card-title">Turn Your Ideas Into a Business in Udhyami Seed Camp
</h4>
      </a>
      <p class="card-text">Udhyami Seed Camp: Tech edition is a 6-day long intensive entrepreneurial program, designed specifically for aspiring entrepreneurs and very early stage tech startups who have groundbreaking ideas that helps to turn their business ideas into a viable business. Here, the teams (with 2-4 founders) will join to learn, network, gain exposure, attract seed funds and start up their ventures. During these 6 days, the teams will get an opportunity to learn and work closely with the pool of coaches, entrepreneurs, and industry leaders to validate their business idea. By the 6th day, on "Pitch day" they will pitch their business idea to investors and other stakeholders to secure the seed funding. Following the program, the participants will also get an access to personalized bi-weekly follow-up sessions for two months and Udhyami-101. The program helps to TURN YOUR IDEA INTO A BUSINESS. </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 5 days ago</small>
    </div>
  </div>
</div>
</div>
<!--/Cards-->
<br>



<div id="maps">
  <h1 class="my-4 text-center text-lg-center">Event-Location</h1>
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d906169.8461738193!2d85.24888705!3d27.4777896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1545546203681" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<style>

</style>
 <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                  <img class="img-circle" src="../images/pramit.jpg" alt="" width="100" height="100">
                   
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="../index.html">PortfolioHome</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About</h5>
                    <ul>
                        <li> <a class="" href="#about">Details</a></li>
                        <li> <a class="" href="#events">Nearby-Events</a></li>
                        <li> <a class="" href="#slideshow">Gallery</a></li>
                       <li> <a class="" href="#news">News</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>SignUp/Login</h5>
                    <ul>
                        <li><a class="btn btn-info btn-sm" href="#">Register Here!!</a></li>
                        <li><a class="btn btn-success btn-sm" href="#">Organiser Login</a></li>
                       
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-github"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <li><a class="btn btn-default " href="#">📠 Contact_Info</a></li>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
             <p>&copy;2018 pramit marattha</p>
        </div>
    </footer>



</body>
</html>
