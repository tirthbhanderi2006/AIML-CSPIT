<!-- <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header ">
          <h2></h2><h2 style="padding-top: 20px" >Faculties</h2>
        </div>
	<div class=" carousel-wrap">
          <div>
		  
	<div class="owl-carousel owl-theme"  >
	
  <?php
  
  for($i=1;$i<17;$i++)
  {
    ?>
    <div class="item bd-all" style="margin-right:02px;">
      <div class="member">
        <div class="pic"><img src="<?=$links['faculty'][$i]['photo']?>" alt=""></div>
        <div class="details">
          <h4 class="pa-b-5 bd-b"><?=$links['faculty'][$i]['name']?></h4>
          <h6 class="font-p pa-b-5 bd-b"><?=$links['faculty'][$i]['position']?></h6>
          <h6 class="font-p  pa-b-5 bd-b">Experience: <?=$links['faculty'][$i]['experience']?></h6>
          <h6 class="bd-b pa-b-5 pa-t-5">
            <span>Areas of Interest:</span><span><?=$links['faculty'][$i]['area_of_interest']?></span></h6>          
          <div class="social">
            <a href="<?=$links['faculty'][$i]['profile']?>" target="_blank"><i class="fa fa-id-card"></i></a>
            <a href="mailto:<?=$links['faculty'][$i]['email']?>"><i class="fa fa-envelope"></i></a>
            <a href="https://linkedin.com/<?=$links['faculty'][$i]['linkedin']?>" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https:<?=$links['faculty'][$i]['web_link']?>" target="_blank"><i class="fa fa-globe"></i></a>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
 ?>
 	</div>
	<div class="text-center">

	<button type="button" class="btn btn-primary btn-sm customNextBtn "> < </button>
	<button type="button" class="btn btn-primary btn-sm customPrevBtn"> > </button>
	</div>
	
	</div>
	</div>
	</div>
	</section>

	
	
	
			
	
	<!-- end Ravi slider -->
	
