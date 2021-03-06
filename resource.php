<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: resource-log.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <span class="material-icons">
        home
        </span> -->
    <link rel="stylesheet" href="resource.css">
    <title>DCET Student Resource</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"> -->
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <section class="header">
     <nav>
         <div class="logo">
        <a href="index.html" ><img class="logo" src="webimgs/logo2.png"></a>
         </div>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
             <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="resource-about.html">About</a></li>
                <li><a href="resource-course.html">Course</a></li>
                <li><a href="resource-faculty.html">Faculty</a></li>
                <li><a href="resource-contact.html">Contact Us</a></li>
                <!-- <li><a href="resource-login.html" target="blank">LogIn</a></li> -->
                    <a href="logout.php">Logout</a></li>
                <!-- <li><button class="loginbtn" onclick="document.getElementById('login-form').style.display='block' "style="width:auto;">Login</button> -->
             </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
     </nav>
    
     <!-- <div id="login" class="fas fa-user-circle"></div> -->

<div class="text-box1">

<h1>Osmania University Syllabus </h1>
<p> The Vision of the University is to generate and disseminate knowledge through a harmonious blend of ancient and modern wisdom, and to serve the society by developing in students heightened intellectual, cultural, ethical, and humane sensitivities; to foster a scientific temper, and to promote professional and technological expertise. Central to this vision is a commitment to regional and national development in consonance with our culture, heritage, and environment.</p>
<a href="https://www.osmania.ac.in/ " target="_blank" class="fst-button">Visit us to know more</a>
</div>

</section>

<!-- the login form -->
<!-- 
<div id="login-form" class="login-page">
    <div class="form-box">
        <div class="button-box">
            <div class="btn"></div>
            <button 
            type="button" onclick="login()" class="toggle-btn">
            Log In</button>
            <button 
            type="button" onclick="register()" class="toggle-btn">
             Register</button>
        </div>
        <form id='login' class="input-group-login">
            <input type="email" class="input-field" placeholder="Email Id" required>
            <input type="password" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box">
            <span>
                Remember Password
            </span>
            <button type="submit" class="submit-btn"> Log in</button>
        </form>  -->

        <!-- registration form -->

         <!-- <form id="register" class="input-group-register">
            <input type="text" class="input-field" placeholder="First Name" required>
            <input type="text" class="input-field" placeholder="Last Name" required>
            <input type="email" class="input-field" placeholder="Email Id" required>
            <input type="password" class="input-field" placeholder="Enter Password" required>
            <input type="password" class="input-field" placeholder="Confirm Password" required>
            <input type="checkbox" class='check-box'><span> I agree to the Terms and conditions</span>
            <button type="submit" class="submit-btn"> Register</button>
         </form> 
     </div> 
</div>  -->


<!-- course section -->

<section class="course">
<h1>Courses we offer</h1>
<p>Deccan College of Engineering and Technology offers 4 years Undergraduate Programme (B.E) & 2 years (M.E) programme in Engineering Education, a 3 years Postgraduate Programme in Computer Applications (MCA) .</p>

<div class="row">
    <div class="course-col">
        <h3>1st SEMESTER NOTES</h3>
        <p>SOON THE NOTES OF 1ST SEMISTER STUDENT PAGE WILL POST HERE</p>
    </div>

    <div class="course-col">
        <h3> 3nd SEMESTER NOTES</h3>
        <p>SOON THE NOTES OF 2ND SEMISTER STUDENTS PAGE WILL POST HERE</p>
    </div>

    <div class="course-col">
        <h3>5th SEMESTER NOTES</h3>
        <p>SOON THE NOTES OF 3RD SEMISTER STUDENTS PAGE WILL POST HERE</p>
    </div>

    <div class="course-col">
        <h3>7th SEMISTERT NOTES</h3>
        <p>SOON THE NOTES OF 7TH SEMISTER STUDENTS PAGE WILL POST HERE</p>
    </div>
</div>
</section>
<!-- campus -->
<section class="campus"> 
 <h1>Our campus</h1>
 <p>
     JR-campus consist of following BRANCHES: <br>
     -1st semister(cse,IT,ECE,EEE,Mechinical,civil)
 </p>
 <div class="row">
     <div class="campus-col">
         <img src="webimgs/web.jfif" alt="THERE IS SUPPOSE TO BE JR-BUILDING PICTURE">
         <div class="layer">
             <h3>JR-BRANCH</h3>
         </div>
     </div>
     <div class="campus-col">
        <img src="webimgs/main-building.jpg" alt=" THER IS SUPPOSE TO BE MAIN-BUILDING PICTURE">
        <div class="layer">
            <h3>MAIN-BUILDING</h3>
        </div>
    </div>
    <div class="campus-col">
        <img src="webimgs/plz6.jfif" alt="THER IS SUPPOSE TO BE MECICAL AND OTHER BUILDING PICTURE ">
        <div class="layer">
            <h3>OTHER-BRANCHES</h3>
        </div>
    </div>
 </div>
</section>

<!-- facilities-->
<section class="facilities">
    <h1>Our Facilities</h1>
    <p>THE VARIOUS TYPES OF WORK GOINT IN OUR UNIVERSITY IS GOINT TO SHOWN BELOW:</p>
<div class="row">
    <div class="facilities-col">
       <img src="webimgs/computer labs.jpg" alt="there is suppose to be computer lab picture here" >
      <a href="http://deccancollege.ac.in/computing_center.html"><h3>COMPUTER LAB</h3></a>
       <p>The computer center was started in 1991. The college has a Computer Center that is one of the best in twin cities. The center has fully air-conditioned floor area of 6000sq.ft. and most modern hardware and software facilities. It consists of latest computer machines and IBM servers, arranged in four laboratories. The Laboratories are arranged so that one can work on SCO Open Server 6, Windows 7, Novel Netware, Red Hat Linux, RTOS. Other software facilities include Language Compilers for C, C++, Java, Fortran, COBOL and Pascal Packages such as Oracle 10 G, Developer 2000, Microsoft Visual Studio pro-2008, MS Office 2007, VC++ 5.0 and so on.
    </p>
    </div>

    <div class="facilities-col">
        <img src="webimgs/chemistry labs.jpg" alt="there is suppose to be English lab picture here">
      <a href="http://deccancollege.ac.in/english_learning_labs.html"><h3>CHEMISTRY LAB</h3></a>
        <p>The Chemistry Department offers Engineering Chemistry (Theory & Practical ) for all the branches of B.E. I/IV.The Chemistry Department has advance ambience for teaching and learning with the special focus on practicals where student performance is evaluated with well defined procedures. The curriculum is made more interesting by extending it to the applied aspects wherever possible like, Ground water analysis using Instrumental Analytical Techniques. The practicals are also taken as a means to bring about changes in the attitude of the students by inculcating values in them.</p>
     </div>
    
     <div class="facilities-col">
        <img src="webimgs/physics labs.jpg" alt="there is suppose to be physics lab picture here">
        <a href="http://deccancollege.ac.in/advanced_learning_center.html"> <h3>ADAVANCED LEARNING CENTRE</h3> </a>
        <p>Advanced Learning Resource Center (ALRC) was established to provide an opportunity to students and staff of the college to conduct seminars, arrange expert lectures and enhance their knowledge by going through video graphed expert lectures from eminent professors of IIT's on various topics of Engineering.
            <br>
            The Department has well qualified and dedicated faculty members and supporting staff. There are currently 5 faculty members who are catering to the requirements of the students. Faculty is provided with lab and research facilities in their endeavors in pursuing PhD in different fields.
        </p>
     </div>
</div>      
</section>



<!--     faculty -->

<section class="faculty">
    <div class="faculty-col">

    <h1> Our Faculty</h1>
    <section class="faculty-info">
        <div class="row">
            <div class="faculty-left">
                <img src="webimgs/college faculty.jpg" alt="should be faculty image here">
                <h2>Our Engineering main building faculty detail:</h2>
                <h3>About Library :</h3>
                <br><br>
                <p>The Deccan College of Engineering and Technology library is spread over an area 1500 sq mtr of built-up area and seating capacity of 300 students <br><br>
                    The DCET library has 11726 titles and 51868 volumes, and subscribing 108 National and 25 International journals and online E-Journals subscription of IEEE ASPP 169 Title and back file of BE ECE, EEE, CSE, IT, MCA also ME ECE, M.Tech. CSE back files from 1997 to 2015, McGraw-Hill Access Engineering title 630 and J-gage (Engineering and Technology), library is also providing e-book facility in the college premises.
                    <br><br>
                    Library provides abundant information and intellectual requirements to the students and faculty with a user friendly approach. It offers a fully integrated and peaceful environment for conducting academic study.
                    <br><br>
                    <ul>
                        <h3>GREAT LIBRARIES BUILD COMMUNICATIONS IS OUR AGENDA</h3><br><br>
                        <li>o become a premier learning resource centre to offer comprehensive services related to dissemination of knowledge through user friendly approach towards students and faculty.</li>
                       <br>
                        <li>To support and facilitate research, learning and teaching activities of the institution.</li>
                    </ul>
                </p>
                <br><br><br>
                <h3>Fully computerised</h3>
                <p>he library uses NewGenLib Software for day to day operations. It is an open source software. *Marc 21 Format, Unicode based and web-enabled, has Linux operating systems, Virus free, Window Server, Bar coded technology for issue and return of books.</p>
                <br>
                <ul>
                    <li>Circulation Section</li>
                    <li>Reference section </li>
                    <li>Periodical Section</li>
                    <li>Reading Room</li>
                    <li>Technical section</li>
                    <li>Stack Room & Reading Room Section</li>
                    <li>Digital library</li>
                    <li>Audio visual section</li>
                    <li>News Papers</li>
                </ul>
    <!-- <p>THE INFORMATION FO FACULTY IS GOING ADD SOON ON THE PAGE</p> -->
    </div>
    <div class="faculty-right">
        <h3>Regular Faculty information:</h3>
        <div>
            <!-- <span>[CSE,IT]</span> -->
            <span><b> SE-Software Engineering:</b></span>
            <span>MRS.SUMRANA SIDDIQUI</span>
        </div>
        <div>
            <!-- <span>[CSE,IT]</span> -->
            <span> <b> OS-Operating Systems:</b></span>
            <span>MRS.AFROZE BEGUM</span>
        </div>
        <div>
            <!-- <span>[CSE,IT]</span> -->
            <span><b> ALC-Automata Language & Computation:</b></span>
            <span>MRS.ZEENATH BEGUM</span>
        </div>
        <div>
            <!-- <span>[CSE,IT]</span> -->
            <span><b> Artificial Intelligence:</b></span>
            <span>MR.MUNAWAR</span>
        </div>
        <div>
            <!-- <span>[CSE,IT]</span> -->
            <span><b> WIT-Web and Internet Technologie:</b></span>
            <span>MR.MUSTHAFA BAIG</span>
        </div>
        <div>
            <!-- <span>[CSE,IT]</span> -->
            <span><b> BCT-Block Chain Technlogy:</b></span>
            <span>MRS.NEHA UNNISA</span>
        </div>
        <div>
            <!-- <span>[CSE,IT]LAB</span> -->
            <span><b> SEL-Software Engineering LAB:</b></span>
            <span>MRS.SUMRANA SIDDIQUI </span>
        </div>
        <div>
            <!-- <span>[CSE,IT]LAB</span> -->
            <span><b>ETC-Effective Technical communication in English:</b></span>
            <span>DR. SAMEENA FAHEEM </span>
        </div>
        <div>
            <!-- <span>[CSE,IT]LAB</span> -->
            <span><b> FA-Finance and Accounting:</b></span>
            <span>DR.V.JAKEER HUSSAIN </span>
        </div>
        <div>
            <!-- <span>[CSE,IT]LAB</span> -->
            <span><b> M-III-Mathematics-III:</b></span>
            <span>DR.AHMED SHAH</span>
        </div>
        <div>
            <!-- <span>[CSE,IT]LAB</span> -->
            <span><b> BE-Basic Electronics:
                <br><hr>BDA-Big Data Analytics:
            </b></span>    
            <span>MR.Mir.Mustafa Ali </span>
        </div>
        <div>
            <!-- <span>[CSE,IT]LAB</span> -->
            <span><b> DE-Digital Electornics:
                <br><hr>SE-Software Engineering:
            </b></span>
            <span>DR.MAHABUBULHAQ ATIF </span>
        </div>
        <div>
            <!-- <span>[CSE,IT]LAB</span> -->
            <span><b> DS-Data Structures:
            <br><hr>VLSI-VLSI Design:
            </b></span>
            <span>MRS. TANVEER SULATANA</span>
        </div>
        <div>
            <!-- <span>[CSE,IT]LAB</span> -->
            <span><b> MFIT-Mathemtical Foundation of Information Technology:
                <hr>
                CN-Computer Networks:
            </b></span>
            <span>MRS.RESHMA BEGUM </span>
        </div>
        <div>
            <!-- <span>[CSE,IT]LAB</span> -->
            <span><b> WAD-Web Application development:
                <br><hr>ENT-Start-Up Entrepreneruship:
            </b></span>
            <span>MR. FEROZ AMER </span>
        </div>
        <div>
            <!-- <span>[CSE,IT]LAB</span> -->
            <span><b> OS-Operating Systems:</b></span>
            <span>MR. MOHAMMED ABDUL ALEEM </span>
        </div>
        <div>
            <!-- <span>[CSE,IT]LAB</span> -->
            <span><b> AT-Autometa Theory:
                <br><hr>WMC-Wireless Mobile communication:
            </b></span>

            <span>MR. MOHD SALAHUDDIN </span>
        </div>
        <div>
            <!-- <span>[CSE,IT]LAB</span> -->
            <span><b> AI-Artificial Intelligence (IT): </b></span>
            <span>DR. AYESHA AMEEN </span>
        </div>
       


        </div>
    </div>
</section>
</div>
</section>

<br><br><br><br><br><br>

<!-- call to action -->
<section class="cta">
    <h1>Enroll for Our Various Courses <br>From AnyWhere From The world </h1>
    <a href="resource-contact.html" class="fst-button">CONTACT US </a>
</section>


<!--    foother   -->
<section class="footer">
    <h4> About US</h4>
    <p> This website has been created by DCET students -sd.mohtashim,-adnan asim,-md.muzammil</p>
   
    <div class="icons">
         <i class= "fa fa-facebook"></i>
         <i class= "fa fa-twitter"></i>
         <i class= "fa fa-instagram"></i>
         <i class= "fa fa-linkedin"></i>
         <i class= "fa fa-youtube"></i>
    </div>
    
    <p>copy right &copy; 2021,belongs to deccan students and team</p>
</section>











<!-- js closing and opening of menu(toggle) -->
<script>

let navLinks = document.getElementById("navLinks");
 
function showMenu(){
    navLinks.style.right = "0";
}
function hideMenu(){
    navLinks.style.right="-200px";
}

</script>

<!-- js for login -->
<script>
    var x=document.getElementById("login");
    var y=document.getElementById("register");
    var z=document.getElementById("btn");
    function register()
    {
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left='110px';
    }
    function login()
    {
        x.style.left="-50px";
        y.style.left="450px";
        z.style.left='0px';
    }
</script>
<!-- login registration -->
<script>
    var modal = document.getElementById('login-form');
    window.onclick=function(event)
    {
        if(event.target == modal)
        {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
