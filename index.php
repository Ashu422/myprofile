<?php 
session_start();
include 'database.php';

$select_query = "SELECT * FROM users";
$users = $conn->query($select_query);
$result = $users->fetch_all(MYSQLI_ASSOC);

$sql = "SELECT * FROM qualification_details";
$users = $conn->query($sql);
$result1 = $users->fetch_all(MYSQLI_ASSOC);

$sql = "SELECT * FROM skills";
$users = $conn->query($sql);
$result2 = $users->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/orbit-1.css">
</head> 

<body>
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="assets/images/ASHU.png" width="100" height="100">
                <h3 class="name"><?= $result[0]['name']; ?></h3>
                <h3 class="tagline">Full Stack Developer</h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <h2 class="container-block-title">Personal Details</h2>
                <ul class="list-unstyled contact-list">
                    <li class="email"><a href="mailto: yurgodashu@email.com"><?= $result[0]['email']; ?></a></li>
                    <li class="email"><a href="https://www.github.com/Ashu422">github.com/Ashutosh</a></li>
                    <li class="email"><a href="https://www.linkedin.com/in/ashutosh-tiwari-06459a14b">linkedin.com/in/Ashutosh</a></li>

                    <li class="phone"><i class="fas fa-phone"></i><a href="#"><?= $result[0]['mobile']; ?></a></li>
                </ul>
            </div>
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <li>English <span class="lang-desc"></span></li>
                    <li>Hindi <span class="lang-desc"></span></li>
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <li>Listening songs</li>
                    <li>Cooking</li>
                    <li>visiting new places</li>
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">

            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-user"></i></span>Career Profile</h2>
                <div class="summary">
                    <p>To  be associated with a firm which provides me the apportunity to improve mt skills and knowledge to grow along with the organization objective. I have done Bachelore of Engineering in CSE stream from Technocrats Of Technology & Science Bhopal with 7.54 cgpa. </p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-briefcase"></i></span>Current Working</h2>
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">php Developer</h3>
                            <div class="time">2019 - Present</div>
                        </div><!--//upper-row-->
                        <div class="company">Alina Software LLp Bhopal</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p></p>  
                        <p></p>
                    </div><!--//details-->
                </div><!--//item-->
                
            </section><!--//section-->
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-briefcase"></i></span>Educational Qualification</h2>
                <!-- <h2>Educational Qualification</h2><br> -->
                <div class="container well" >
                    <div class="row">
                        <div style=" width: 100% ; overflow: auto;">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Qualifications</th>
                                        <th>School/College</th>
                                        <th>Board/Univercity</th>
                                        <th>Year</th>
                                        <th>%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($result1 as $user) :  ?>
                                        <tr>
                                            <td><?= $user['Course']; ?></td>
                                            <td><?= $user['univercity_name']; ?></td>
                                            <td><?= $user['univercity']; ?></td>
                                            <td><?= $user['Passing_year']; ?></td>
                                            <td><?= $user['Marks']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  
            </section><!--//section-->
            <section class="section projects-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-archive"></i></span>Projects</h2>
                <div class="item">

                    <ul>
                        <li>Astrology</li>
                        <li>Job Portal</li>
                        <li>NID(National Institute of Design)</li>
                    </ul> 
                </div><!--//item-->

            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-rocket"></i></span>Skills</h2>
                <ul>
                   <li><?= $result2[0]['name'] ?></li>  
                   <li><?= $result2[1]['name'] ?></li>  
                   <li><?= $result2[2]['name'] ?></li>  
                   <li><?= $result2[3]['name'] ?></li>  
                   <li><?= $result2[4]['name'] ?></li>  
                   <li><?= $result2[5]['name'] ?></li>  
               </ul>       


           </section><!--//skills-section-->
           <section class="skills-section section">
            <h2 class="section-title"><span class="icon-holder"><i class="fas fa-rocket"></i></span>Strength</h2>
            <ul>
               <li>Honest</li>    
               <li>Hard Working</li>    
               <li>Self Motivated</li>    
               <li>Positive attitude keep to learn new things and aggressive team member</li>    
           </ul>       

       </section><!--//skills-section-->
             <section class="skills-section section">
            <h2 class="section-title"><span class="icon-holder"><i class="fas fa-rocket"></i></span>weakness</h2>
            <ul>
               <li>Trust people quickly</li>        
           </ul>       

       </section>
       </section>
             <section class="skills-section section">
            <h2 class="section-title"><span class="icon-holder"><i class="fas fa-rocket"></i></span>Declaration</h2>
           <p>I hereby declare that above mention information is correct as per my knowledge and i take the responsibility for the correctness of the above details and I'll try my level best to satisfy you as well as organization.</p>     

       </section>
   </div><!--//main-body-->
</div>

</body>
</html> 

