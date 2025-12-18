<!--==========================
   Top Bar
   ============================-->
<section id="topbar" class="d-none d-lg-block">
   <div class="container clearfix">
      <div class="contact-info float-left">
         <i class="fa fa-envelope-o"></i> <a href="mailto:<?= $data['contact_email'] ?>"><?= $data['contact_email'] ?></a>
         <i class="fa fa-phone"></i> <?= $data['contact_phone'] ?> |
         <i class="fa fa-download"></i>
         <a href="<?= $links['brochure'] ?>" target="_blank">Brochure</a>
         <!-- <a href="https://www.charusat.ac.in/cspit/files/AI_ML.pdf" target="_blank">Brochure</a> -->
      </div>
      <!-- <div class="social-links float-right">
         <a href="https://drive.google.com/drive/folders/16AOpA3OW2nPZG91MVQIbUbA6RXkFIkSB?usp=sharing" target="_blank" >Academic Calendar</a>
         <a href="https://drive.google.com/drive/folders/1VaBigzWqxFnZrJFfMuxmFbF3g9ZrfTjI?usp=sharing" target="_blank">Syllabus</a>
         <a href="https://drive.google.com/drive/folders/10CCnxYwztUxqWYbKGd6QfKZMCmgF1Xha?usp=sharing" target="_blank" >Question Papers</a>
         <a href="http://117.239.83.200:8110/CHARUSAT_Virtual_Tour/DEPSTAR/" target="_blank" style="color: red" >360 View &nbsp;<i class="fa fa-video-camera" aria-hidden="true"></i></a>
      </div>
      <div class="social-links float-right">
         <a href="https://www.facebook.com/depstar" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
         <a href="https://www.instagram.com/depstar_charusat/?hl=en" target="_blank" class="facebook"><i class="fa fa-instagram"></i></a>
         <a href="https://www.youtube.com/channel/UCdbPil0VFKnBrOJjB2_4h4g/videos" target="_blank" class="facebook"><i class="fa fa-youtube"></i></a>
      </div>   -->

   </div>
</section>
<!--==========================
   Header
   ============================-->
<header id="header">
   <div class="container">
      <div id="logo" class="pull-left">
         <h6>
            <a href="index.php" class="scrollto">
               <span>
                  <h6>Department of</h6>
                  <?= $data['name_of_dept'] ?>
               </span>
            </a>
         </h6>
         <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
      <nav id="nav-menu-container">
         <ul class="nav-menu">
            <!-- <li><a href="https://www.charusat.ac.in/cspit/">Home</a></li> -->
            <li class="menu-has-children"><a href="index.php#about_us">About</a>
               <ul>
                  <li><a href="index.php#vision">Vision</a></li>
                  <li><a href="index.php#mission">Mission</a></li>

                  <li><a data-toggle="modal" data-target="#peos">Program Education Objectives (PEOs)</a></li>
                  <li><a data-toggle="modal" data-target="#pos">Program Outcomes (POs)</a></li>
                  <li><a data-toggle="modal" data-target="#psos">Program Specific Outcomes (PSOs)</a></li>
               </ul>
            </li>
            <li><a href="#">Student Services</a>
               <ul>
                  <li>
                     <a href="https://drive.google.com/file/d/1R43bm9OBMy74JAz8SMx_-T4RMSyDhD0R/view?usp=sha" target="_blank">Academic Calender</a>
                  </li>
                  <li>
                     <!-- <a href="https://drive.google.com/file/d/1UO1ZbYqAX5ongBuoIh-hh8BwQK8z3m_l/view?usp=sharing" target="_blank">Booklet 24-25</a> -->
                     <a href="https://acrobat.adobe.com/id/urn:aaid:sc:AP:9d330a5e-d43b-45b8-9be3-c4461ad8ea0c" target="_blank">Syllabus Booklet 25-26</a>
                  </li>
                  <!-- <li>
                     <a href="https://drive.google.com/drive/folders/1CsUApZYDwfpl44itkin-ubXCAD0-FF5i?usp=drive_link" target="_blank">Syllabus</a>
                  </li> -->
                  <li>
                     <a href="https://charusat.edu.in:912/eGovernance/" target="_blank">Egovernance</a>
                  </li>
                  <li>
                     <a href="https://charusat.edu.in:912/UniExamResult/" target="_blank">Exam Result</a>
                  </li>
                  <li>
                     <a href="index.php?v=student_achievements_all">Student Achievements</a>
                  </li>
               </ul>
            </li>
            <!--<li class="menu-has-children"><a href="#">Academics</a>
               <ul>
                 <li><a href="aca_calender.html">Academic Calender</a></li>
                 <li><a href="aca_timetable.html">Time Table</a></li>
                 <li class="menu-has-children"><a href="#">Syllabus</a>
                   <ul>
                     <li><a href="btech.html">B.Tech.</a></li>
                     <li><a href="mtech.html">M.Tech.</a></li>
                   </ul>
                 </li>      
                 <li><a href="aca_practical.html">Practical List & Lab Manual</a></li>
                 <li><a href="aca_papers.html">Question Papers</a></li>
                 <li><a href="aca_projectglimpse.html">Project Glimpse</a></li>
               </ul> 
               </li>-->
            <!-- <li class="menu-has-children"><a href="index.php#team">People</a></li> -->
            <li class="menu-has-children">
               <a href="#">Research Labs</a>
               <ul>
                  <li><a href="index.php?v=323A">323-A</a></li>
                  <li><a href="index.php?v=323B">323-B</a></li>
                  <li><a href="index.php?v=324A">324-A</a></li>
                  <li><a href="index.php?v=324D">324-D</a></li>
                  <li><a href="index.php?v=325">Motorola Lab(325)</a></li>
                  
               </ul>
            </li>
            <li class="menu-has-children"><a href="https://admission.charusat.ac.in/" target="_blank">Admission</a></li>
            <!-- <li><a href="index.php#contact">Contact Us</a></li> -->

         </ul>
         <br><br><br>
      </nav>
      <!-- #nav-menu-container -->
   </div>
   <section id="services" class="wow fadeInUp" style="text-align:left;">
      <div class="modal fade" id="peos" role="dialog">
         <div class="modal-dialog" style="min-width:70%">
            <!-- Modal content-->
            <div class="modal-content" style="padding-left: 30px;">
               <div class="modal-header">
                  <h4 class="modal-title">Program Education Objectives (PEOs)</h4>
                  <button type="button" class="close" data-dismiss="modal" style="text-align:right;">&times;</button>
               </div>
               <div class="modal-body">
                  <ul class="list-group">
                     <li>
                        <strong>Program Objective 1</strong>
                        <br>
                        <p style="text-align:justify;">To prepare the student(s) for a successful career as a technocrat.</p>
                     </li>
                     <li>
                        <strong>Program Objective 2</strong>
                        <p style="text-align:justify;">To create an ambience; where the students will get the opportunity to become excellent working professionals.</p>
                     </li>
                     <li>
                        <strong>Program Objective 3</strong>
                        <p style="text-align:justify;">To provide continued professional development and lifelong learning throughout their career to inculcate strong teamwork and ready young minds for tangible contributions to the society.</p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" id="pos" role="dialog">
         <div class="modal-dialog" style="min-width:70%">
            <!-- Modal content-->
            <div class="modal-content" style="padding-left: 30px;">
               <div class="modal-header">
                  <h4 class="modal-title">Program Outcomes (POs)</h4>
                  <button type="button" class="close" data-dismiss="modal" style="text-align:right;">&times;</button>
               </div>
               <div class="modal-body">
                  <ol class="list-group">
                     <li>
                        <p style="text-align:justify;"><Strong>Engineering knowledge:</Strong> Apply knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems.</p>
                     </li>
                     <li>
                        <p style="text-align:justify;"><strong>Problem analysis:</strong> Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.</p>
                     </li>
                     <li>
                        <p style="text-align:justify;"><strong>Design/development of solutions:</strong> Design solutions for complex engineering problems and design system components or processes that meet specified needs with appropriate consideration for public health and safety, and the cultural, societal, and environmental considerations.</p>
                     </li>
                     <li>
                        <p style="text-align:justify;"><strong>Conduct investigations of complex problems:</strong> Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.</p>
                     </li>
                     <li>
                        <p style="text-align:justify;"><strong>Modern tool usage:</strong> Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.</p>
                     </li>
                     <li>
                        <p style="text-align:justify;"><strong>The engineer and society:</strong> Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.</p>
                     </li>
                     <li>
                        <p style="text-align:justify;"><strong>Environment and sustainability:</strong> Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.</p>
                     </li>
                     <li>
                        <p style="text-align:justify;"><strong>Ethics:</strong> Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.</p>
                     </li>
                     <li>
                        <p style="text-align:justify;"><strong>Individual and team work:</strong> Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.</p>
                     </li>
                     <li>
                        <p style="text-align:justify;"><strong>Communication:</strong> Communicate effectively on complex engineering activities with the engineering community and with society at large, such as being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.</p>
                     </li>
                     <li>
                        <p style="text-align:justify;"><strong>Project management and finance:</strong> Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work, as a member and leader in a team, to manage projects and in multidisciplinary environments.</p>
                     </li>
                     <li>
                        <p style="text-align:justify;"><strong>Life-long learning:</strong> Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change.</p>
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="psos" role="dialog">
         <div class="modal-dialog" style="min-width:70%">
            <!-- Modal content-->
            <div class="modal-content" style="padding-left: 30px;">
               <div class="modal-header">
                  <h4 class="modal-title">Program Specific Outcomes (PSOs)</h4>
                  <button type="button" class="close" data-dismiss="modal" style="text-align:right;">&times;</button>
               </div>
               <div class="modal-body">
                  <ul class="list-group">
                     <li>
                        <strong>PSO 1</strong>
                        <br>
                        <p style="text-align:justify;">Graduates will demonstrate the ability to analyze complex
                           problems, apply appropriate algorithms and develop innovative
                           solutions that meet real-world challenges.
                        </p>
                     </li>
                     <li>
                        <strong>PSO 2</strong>
                        <p style="text-align:justify;">Graduates will be practical competence with emerging
                           technologies in the multi-disciplinary area for sustainable contributions
                           to the academic, industrial, and societal communities
                        </p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
</header>

<!-- #header -->