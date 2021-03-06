
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
    
    <section class="sub-header">
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
                <li><a href="resource-faculty_.php">Faculty</a></li>
                <li><a href="resource-contact.html">Contact Us</a></li>
                <!-- <li><a href="resource-login.html" target="blank">LogIn</a></li> -->
                <!-- <li><button class="loginbtn" onclick="document.getElementById('login-form').style.display='block' "style="width:auto;">Login</button> -->
                <li><a href="logout.php"> <b> LOG-OUT </b></a></li>
         </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
     </nav>
     <h1>Our Faculty</h1>
</section>
<!-----------our faculty information---------->
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


           <div class="feetback">
               <h3>FeedBack You'er Interaction</h3>
               <form role="form class="feetback-form" action="facultyform.php" method="post">
                 <input name="name" type="text" placeholder="Enter first_Name" required>
                 <input name="surname" type="text" placeholder="Enter last_Name" required>
                 <input name="email" type="email" placeholder="Enter E-mail" required>
                 <input name="phone" type="phone.No" placeholder="Enter phone number" required>
                 <textarea name="message" rows="5" placeholder="Write Your Feetback"></textarea>
                <button name="ok" value="send message" type="submit" class="fst-button new-btn">POST FEETBACK</button>
                </form>
           </div>

           <?php 
           if(isset($_POST['ok'])){
               include_once 'facultyform.php';
               $obj=new faculty();
               $res=$obj->faculty_fb($_POST);
               if($res==true){
                   echo "<script>alert('Query successfully Submitted.Thank you')</script>";
               }else{
                   echo "<script>alert('Something Went wrong!!')</script>";
               }
           }
           
           ?>





            <br><br><br>
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
            <span><b>AI- Artificial Intelligence(CSE):</b></span>
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


<!--------------footer----------- -->
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

</body>
</html>
