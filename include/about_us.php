<style>
.about_us_txt{
    display:inline-block;
	font-size: 36px;
    color: #29cca3;
    text-transform: uppercase;
    font-weight: 900 !important;
    position: relative;
    padding-bottom: 20px;
	font-family: "Montserrat", sans-serif;
    font-weight: 400;
    margin: 0 0 0 0;
    padding: 0;
}
</style>
<main id="main">
<!-- <section class="wow fadeInUp"  >
<div class="container">
<br/>
		  
		  <div style=" display:inline-block; text-align:center; padding-left:5%;   height:auto; width:auto; margin-top:-50px; " >
		  <marquee direction="left" scrolldelay="70" >
		  <b style="color:red;">News :</b> Register for workshop : click link: <a href="">click here</a> 
		  <b style="color:red;">News :</b> Register for workshop : click link: <a href="">click here</a> 
		  
		  </marquee>
</div>	
</div>	  
</section> -->
<section id="about_us" class="wow fadeInUp">
      <div class="container">
          
		  <div class="section-header">
            <div class="about_us_txt" style="padding-top: 20px;dispaly:inline-block;">About Us</div>
			
		  </div>
          <h5><?=$data['name_of_dept']?> (Estd. <?=$data['dept_esta']?>) offers <?=$data['dept_b_tech_seats']?> seats.</h5>
	   
  <div class="row">
    <div class="col-sm text-center">
      <section id="services" class="wow fadeInUp">
  <div class="container">
        <div class="services-content container">
      <div class="row">
          <div class="col-lg-4 content">
          <h2><center><b><?=$data['total_publications']?></b></center></h2>
          <p><h3><center>Publications</center></h3></p>

          </div>

          <div class="col-lg-4 content">
          <h2><center><b><?=$data['student_teacher_ratio']?></b></center></h2>
          <p><h3><center>Student Teacher Ratio</center></h3></p>
          </div>

          <div class="col-lg-4 content">
          <h2><center><b><?=$data['Intake']?></b></center></h2>
          <p><h3><center>No. of Seats</center></h3></p>

          </div>
        </div>
    </div>
</main>
<section id="services">

    <div class="services-content container">
      <div class="row">
          <div class="col-lg-4 content">
          <h2><center><b><?=$data['total_workshops_org']?></b></center></h2>
          <p><h3><center>Event Organized</center></h3></p>

          </div>

          <div class="col-lg-4 content">
          <h2><center><b><?=$data['total_projects_and_grants']?></b></center></h2>
          <p><h3><center>Projects & Grant Received</center></h3></p>
          </div>

           <!-- <div class="col-lg-4 content">
          <h2><center><b><?=$data['placement_percent']?></b></center></h2>
          <p><h3><center>Placement - <?=$data['placement_year']?></center></h3></p>
          </div>  -->
        </div>
    </div>
</section>