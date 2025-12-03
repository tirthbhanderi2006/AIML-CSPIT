<!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:<?=$data['contact_email']?>"><?=$data['contact_email']?></a>
        <i class="fa fa-phone"></i> <?=$data['contact_phone']?> |
		<i class="fa fa-download"></i> <a href="<?=$links['brochure']?>">Brochure</a>
      </div>
      <div class="social-links float-right">
        <a href="http://117.239.83.200:8110/charusat/download/Academic%20Calenders/DEPSTAR/" target="_blank" >Academic Calendar</a>
		<a href="http://117.239.83.200:8110/charusat/download/Syllabus/DEPSTAR/IT/" target="_blank">Syllabus</a>
		<a href="http://117.239.83.200:8110/charusat/download/Practical%20List%20&%20Lab%20Manual/DEPSTAR/IT/" target="_blank" >Practical Lists</a>
		<a href="http://117.239.83.200:8110/charusat/download/Question%20Papers/DEPSTAR/B%20TECH/IT/" target="_blank" >Question Papers</a>
      </div>
	  
<!-- 	  <div class="social-links float-right">
        <a href="https://www.facebook.com/CSPITIT/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
      </div>
 -->	  
    </div>
  </section>

    <!--==========================
    Header
  ============================-->
  <header id="header">
  
    <div class="container">
    
      <div id="logo" class="pull-left">
        <h3><a href="index.php" class="scrollto"><span><h6>Department of</h6><?=$data['name_of_dept']?></span></a></h3>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
     
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php#about_us">About</a></li> 
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
          

          <li class="menu-has-children"><a href="index.php#team">People</a></li>          
          
          <li class="menu-has-children"><a href="#">Research Labs</a>
            <ul>
              <li><a href="index.php?v=lab_advance">Virtual Reality Lab</a></li>
              <li><a href="index.php?v=lab_automation">Mobile-App Development Lab </a></li>
              <li><a href="index.php?v=lab_database">GPU Workstation </a></li>
              <li><a href="index.php?v=lab_networking">Networking Lab </a></li>
              <li><a href="index.php?v=lab_os">Apple Lab </a></li>
              <li><a href="index.php?v=lab_pm">Image Processing Lab </a></li>
              <li><a href="index.php?v=lab_security">Security Lab </a></li>
              <li><a href="index.php?v=lab_web">Web Technologies Lab </a></li>
            </ul>  
          </li>

          <li class="menu-has-children"><a href="https://charusat.ac.in/admission/" target="_black">Admission</a></li>
          
          <li>
          
          </li>
          

                    
        </ul>

        <br><br><br>

      </nav><!-- #nav-menu-container -->
     
    </div>
   
  </header><!-- #header -->
  
  