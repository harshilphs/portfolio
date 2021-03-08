<?php 
require_once('php/init_pdo.php');
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Harshil Padhiyar</title>
  <meta name="description" content="Hello, I'm Harshil Padhiyar and software developer.">
  <meta name="keywords" content="Harshil, harshil, Padhiyar, padhiyar, Harshil Padhiyar, harshil padhiyar, padhiyar harshil">
  <meta name="author" content="Harshil Padhiyar">
  <meta http-equiv="cache-control" content="no-cache">
  <link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>
   <!-- Template css Files -->
	<link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/skins/orange.css" type="text/css">

  <link rel="stylesheet" href="css/toastr.css" type="text/css">
  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-954XTPN7QY"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-954XTPN7QY');
    </script>
	
	<!-- form cap -->
	<script src="https://www.google.com/recaptcha/api.js"></script> 

</head>
<body class="dark protect noselect">

  <div class="preloader">
    <div class="loader">
    </div>
  </div>

  <div class="main-container">
    <div class="aside">

      <div class="nav-toggler">
        <span></span>
      </div>

      <div class="aside-inner">
        <div class="logo">
          <a href="#">Harshil</a>
        </div>

        <ul class="nav">
          <li><a href="#home" class="active"><i class="fa fa-home"></i> Home</a></li>
          <li><a href="#about"><i class="fa fa-user"></i> About</a></li>
          <li><a href="#projects"><i class="fa fa-briefcase"></i> Projects</a></li>
          <li><a href="#achievements"><i class="fa fa-trophy"></i> Achievements</a></li>
          <li><a href="#contact"><i class="fa fa-comments"></i> Contact</a></li>
        </ul>
        <div class="copyright-text">
          &copy; 2020 Harshil Padhiyar
        </div>
      </div>
    </div>

    <div class="main-content">
      <section class="home section active" id="home">
        <div class="container">
          <div class="intro">
            <img src="images/about.jpeg" alt="profile" class="shadow-dark">
            <h1>Harshil Padhiyar</h1>
            <p>Programmer • Software Developer • Good Learner</p>
            <div class="social-links">
              <a href="https://twitter.com/harshilphs" target="_blank"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/harshilphs" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/harshilphs" target="_blank"><i class="fa fa-instagram"></i></a>
              <a href="https://in.linkedin.com/in/harshilphs" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </section>

      <section class="about section" id="about">
        <div class="container"> 
          <div class="row">
            <div class="section-title padd-15">
              <h2>About Me</h2>
            </div>
          </div>
          <div class="row">
            <div class="about-content padd-15">
              <div class="row">
                <div class="about-text padd-15">
                  <h3>I'm Harshil Padhiyar and <span>Programmer • Software Developer • Good Learner</span></h3>
                  <p>I study in the Aditya Silver Oak Institute Of Technology at the Silver Oak University, 
                    pursuing an undergraduate degree. I am majoring in Information Technology, 
                    with intent to double major in Mathematics with Statistics and Data Science concentration. 
                    I am interested in exploring the fields of Software Engineering, 
                    Full-Stack Development, Data Science, and Machine Learning, 
                    and I am open to opportunities for the same.</p>
                </div>
              </div>

              <div class="row">
                <div class="personal-info padd-15">
                  <div class="row">
                    <div class="info-item padd-15">
                      <p>Birthday : <span>25 September 2000</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Age : <span>20</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Degree : <span>B.E.</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Email : <span>harshilpadhiyar786@gmail.com</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Phone : <span>+91-9173342482</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>City : <span>Ahmedabad</span></p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="buttons padd-15">
                      <a href="#" class="btn">Download CV</a>
                    </div>
                  </div>
                </div>

                <div class="skills padd-15">
                    <div class="row">
                      <div class="skill-item padd-15">
                        <h5>HTML</h5>
                        <div class="progress">
                          <div class="progress-in" style="width: 90%;"></div>
                          <div class="skill-percent">90%</div>
                        </div>
                      </div>

                      <div class="skill-item padd-15">
                        <h5>Python</h5>
                        <div class="progress">
                          <div class="progress-in" style="width: 90%;"></div>
                          <div class="skill-percent">90%</div>
                        </div>
                      </div>
                      <div class="skill-item padd-15">
                        <h5>Django</h5>
                        <div class="progress">
                          <div class="progress-in" style="width: 70%;"></div>
                          <div class="skill-percent">70%</div>
                        </div>
                      </div>
                      <div class="skill-item padd-15">
                        <h5>MySQL</h5>
                        <div class="progress">
                          <div class="progress-in" style="width: 60%;"></div>
                          <div class="skill-percent">80%</div>
                        </div>
                      </div>

                    </div>
                </div>
              </div>

              <div class="row">
                <div class="education padd-15">
                  <h3 class="title">Education</h3>
                  <div class="row">
                    <div class="timeline-box padd-15">
                      <div class="timeline shadow-dark">

                        <div class="timeline-item">
                          <div class="circle-dot"></div>
                          <h6 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2018 - 2022
                          </h6>
                          <h4 class="timeline-title">Bachelor of Engineering</h4>
                          <p class="timeline-text">I am currently in Information Technology branch of the Aditya Silver Oak Institute Of Technology affiliated with the
                            Gujarat Technological University, pursuing an undergraduate degree.<br><br><strong> CPI </strong>- 8.69</p>
                        </div>

                        <div class="timeline-item">
                          <div class="circle-dot"></div>
                          <h6 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2018
                          </h6>
                          <h4 class="timeline-title">HSC - Science</h4>
                          <p class="timeline-text">Gujarat Secondary And Higher Secondary Education Board, Gandhinagar
                            <br><br><strong> Percentage </strong>- 72%</p>
                        </div>

                        <div class="timeline-item">
                          <div class="circle-dot"></div>
                          <h6 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2016
                          </h6>
                          <h4 class="timeline-title">SSC</h4>
                          <p class="timeline-text">Gujarat Secondary Education Board, Gandhinagar
                            <br><br><strong> Percentage </strong>- 75%</p>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="experience padd-15">
                  <h3 class="title">Experience</h3>
                  <div class="row">
                    <div class="timeline-box padd-15">
                      <div class="timeline shadow-dark">

                        <div class="timeline-item">
                          <div class="circle-dot"></div>
                          <h6 class="timeline-date">
                            <i class="fa fa-calendar"></i> Nov - 2020 to Dec - 2020
                          </h6>
                          <h4 class="timeline-title">Data Science & Business Analytics</h4>
                          <p class="timeline-text">Intern at The Sparks Foundation</p>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="project section" id="projects">
        <div class="container"> 
          <div class="row">
            <div class="section-title padd-15">
              <h2>Featured Projects</h2>
            </div>
          </div>
          <div class="row">

            <div class="project-item padd-15">
              <div class="project-item-inner shadow-dark">
                <div class="project-image">
                  <img src="images/project/tic-tac-toe.png" alt="project image">
                  <div class="project-date">Feb 2021</div>
                </div>
                <div class="project-info">
                  <h4 class="project-title">Tic-Tac-Toe Game</h4>
                  <p class="project-description">I developed a mobile game for android os. I got knowledge of android studio and learn how to design activity and 
                  implement the logic of game by java Programming language.</p>
                  <p class="project-tags">Tags : <a href="#">Android</a> , <a href="#">Java</a> , <a href="#">XML</a></p>
                </div>
              </div>
            </div>

            <div class="project-item padd-15">
              <div class="project-item-inner shadow-dark">
                <div class="project-image">
                  <img src="images/project/resume-site.png" alt="project image">
                  <div class="project-date">Dec 2020</div>
                </div>
                <div class="project-info">
                  <h4 class="project-title">Personal Resume Website</h4>
                  <p class="project-description">I developed and designed a website using Bootstrap and JavaScript to showcase my 
                    resume in an interactive and visually-appealing format.</p>
                  <p class="project-tags">Tags : <a href="#">HTML</a> , <a href="#">CSS</a> , <a href="#">Javascript</a></p>
                </div>
              </div>
            </div>

            <div class="project-item padd-15">
              <div class="project-item-inner shadow-dark">
                <div class="project-image">
                  <img src="images/project/medicoplus-app.png" alt="project image">
                  <div class="project-date">2020</div>
                </div>
                <div class="project-info">
                  <h4 class="project-title">Medico+ Project</h4>
                  <p class="project-description">This is web for small clinic in which doctors can manage their medicine as well as they can generate digital description.Here we will also provide appointment system for receptionist.
                    I have used django framework which is popular for web application.</p>
                  <p class="project-tags">Tags : <a href="#">HTML</a> , <a href="#">CSS</a> , 
                    <a href="#">Python</a> , <a href="#">Django</a> , <a href="#">MySQL</a></p>
                </div>
              </div>
            </div>

            <div class="project-item padd-15">
              <div class="project-item-inner shadow-dark">
                <div class="project-image">
                  <img src="images/project/fastgo.png" alt="project image">
                  <div class="project-date">2020</div>
                </div>
                <div class="project-info">
                  <h4 class="project-title">Fast Go - Redefining the way to shop</h4>
                  <p class="project-description">Fast Go is an thoughts of a future shopping system. 
                    Today we see that the size of automation is increasing in every branch.Nowadays, 
                    we have to stand in a queue indefinitely for a payment of shopping 
                    at mall or at shop.. we know that time is precious.Hence, this thought is for buyer 
                    to save a time and also try to give solution of some problem that arises after applying 
                    automation in shopping field.</p>
                  <p class="project-tags">Tags : <a href="#">MS Power Point</a></p>
                </div>
              </div>
            </div>

            <div class="project-item padd-15">
              <div class="project-item-inner shadow-dark">
                <div class="project-image">
                  <img src="images/project/smartbin.jpg" alt="project image">
                  <div class="project-date">2020</div>
                </div>
                <div class="project-info">
                  <h4 class="project-title">Smart Dustbin</h4>
                  <p class="project-description">I had made smart dustbin at SSIP Gujarat Hackathon 2019. 
                    I have used ultrasonic sensor for measuring level of dustbin, Nodemcu Controller 
                    and GPS Module for location data. I had programmed nodemcu which sent level of dustbin 
                    and location of the perticular dustbin at every 10 minutes to the server. 
                    Our defination of project was Smart Garbage Collection System.</p>
                  <p class="project-tags">Tags : <a href="#">Arduino</a> , <a href="#">C++</a> , <a href="#">MySQL</a></p>
                </div>
              </div>
            </div>

            
            <div class="project-item padd-15">
              <div class="project-item-inner shadow-dark">
                <div class="project-image">
                  <img src="images/project/md5cracker.png" alt="project image">
                  <div class="project-date">2020</div>
                </div>
                <div class="project-info">
                  <h4 class="project-title">MD5 Cracker Tool</h4>
                  <p class="project-description">I have make a tool for creating an MD5 hash from a string. 
                    It is very useful tool to create an MD5 hash from a string and vice-versa.</p>
                  <p class="project-tags">Tags : <a href="#">HTML</a> , <a href="#">PHP</a></p>
                </div>
              </div>
            </div>

            <div class="project-item padd-15">
              <div class="project-item-inner shadow-dark">
                <div class="project-image">
                  <img src="images/project/smarthome-automation.jpg" alt="project image">
                  <div class="project-date">2019</div>
                </div>
                <div class="project-info">
                  <h4 class="project-title">Smart Home Automation</h4>
                  <p class="project-description">It consists of Keypad Lock system and Fingerprint-at-handle & Iris recognition 
                    is our future updation. Smart Lighting system is made using PIR, LDR sensors. PIR sensor based 
                    structure would detect presence of living organisms and would turn on the lights, 
                    while LDR sensor was used for controlling Street light polls and other direction lights, 
                    that needs to get operated in dark; here Mood based light control system is our future updation. 
                    Last but not the least, Smart Controlling System, which is too our future implementation. 
                    Here all the electric devices like Fan, Lights, Doors, Gates etc., are made to get controlled by Mobile 
                    Operation based stimulus.
                  </p>
                  <p class="project-tags">Tags : <a href="#">C++</a> , <a href="#">Arduino</a> , <a href="#">PHP</a> ,
                     <a href="#">MySQL</a></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      
      <section class="achievements section" id="achievements">
        <div class="container"> 
          <div class="row">
            <div class="section-title padd-15">
              <h2>Achievements</h2>
            </div>
          </div>
          
          <div class="row">
            <div class="achievement-table" style="width: 100%;">

                <?php

                  $stmt1 = $pdo->query("SELECT * FROM achive ORDER BY date DESC");
                  $stmt2 = $pdo->query("SELECT * FROM achive");
                  $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
                  if($row2 === false){
                    echo '<h1 class="dataError">Data not found..</h1>';
                  } 
                  else{
                    echo '<table><tr>';
                    echo '<th class="table-heading1">Certification</th>';
                    echo '<th class="table-heading2">Issued On</th>';
                    echo '<th class="table-heading3">View Certificate</th></tr>';
                    echo '<div style="font-size:10px;">';
                    while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
                      echo ("<tr><td>");
                      echo htmlentities($row['cerification']);
                      echo ("</td><td>");
                      $date=date_create($row['date']);
                      echo htmlentities(date_format($date,"d-m-Y"));
                      echo ("</td><td>");
                      echo ('<a class="table-heading3-link" target="_blank" style="font-size:15px;" href="'.$row['file_path'].'">View</a>');
                      echo ("</td></tr>"); 
                    }
                    echo '</div>';
                    echo '</table>'."\n";
                  }
                  $pdo=null;
                ?>
              </table>
            </div>   
          </div>
        
        </div>
      </section>

      <section class="contact section" id="contact">
        <div class="container"> 
          <div class="row">
            <div class="section-title padd-15">
              <h2>Contact Me</h2>
            </div>
          </div>
          <div class="row">
            <div class="contact-info-item padd-15">
              <div class="icon"><i class="fa fa-phone"></i></div>
              <h4>Call me On</h4>
              <p>+91-9173342482</p>
            </div>

            <div class="contact-info-item padd-15">
              <div class="icon"><i class="fa fa-map-marker"></i></div>
              <h4>Address</h4>
              <p>Ahmedabad, Gujarat, India</p>
            </div>

            <div class="contact-info-item padd-15">
              <div class="icon"><i class="fa fa-envelope"></i></div>
              <h4>Email</h4>
              <p>harshilpadhiyar786@gmail.com</p>
            </div>
          </div>

          <div class="row">
            <form class="contact-form padd-15" id="contact-form" method="post">
              <div class="row">
                <div class="form-item col-6 padd-15">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name*" autocomplete="off" > 
                  </div>
                </div>
                <div class="form-item col-6 padd-15">
                  <div class="form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email*" autocomplete="off" >
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-item col-12 padd-15">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject*" autocomplete="off" >
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-item col-12 padd-15">
                  <div class="form-group">
                    <textarea class="form-control" name="message" id="message" placeholder="Your Message..." autocomplete="off" ></textarea>
                  </div>
                </div>
              </div>
			  
			  <div class="row">
                <div class="form-item col-6 padd-15">
                  <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LfjLXUaAAAAAKqyxKEAiRYpFHBUtckzn2ho0ue8"></div>
                  </div>
                </div>
              </div>
			

              <div class="row">
                <div class="col-12 padd-15">
                  <button type="submit" class="btn">Send Message</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </section>  

    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/toastr.js"></script>
  <script src="js/script.js"></script>
</body>
</html>

