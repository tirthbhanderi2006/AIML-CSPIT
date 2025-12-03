<style>
    th {
        cursor: pointer;
        font-weight: bold;
        text-align: center;
    }
    /*.dataTables_length
      {
      margin-bottom:35px;
      }*/
    
    #example_length,
    #example_filter,
    #example_info,
    #example_paginate {
        display: none;
    }
</style>
<section id="services" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2></h2><h2 style="padding-top: 20px">Depstar Social Activity Club</h2><br>
          <p>Devang Patel Institute of Advance Technology and Research (DEPSTAR) always inspires
            students for the overall development in academics and co-curricular activities. The institution
            is devoted to intellectually vibrant atmosphere of research and imparts education in learning of
            sciences but inculcates necessary soft skills in the students that help them nurture their future.
      Keeping this in mind, an interactive session was organized by the students of DEPSTAR Social
      club at “ANAND DHAM”, an old age home located at Lambhvel village, Anand.        
        </p>
    </div>
  </div>
  </section>
<section id="services" class="wow fadeInUp">
      <div class="container">
          <div class="section-header">
            <h2></h2><h2 style="padding-top: 20px">Events</h2>
          </div>

           <div class="row table-responsive fw-body wow fadeInLeft">
                <div class="content">
                        <table id="example" class="table">
                            <thead>
                                <tr>
                                    <th>Name of Event<img src="img/sort.png" style="float:right; width:15px;" /></th>
                                    <th>Date<img src="img/sort.png" style="float:right; width:15px;" /></th>
                                    <th>No. of Participants<img src="img/sort.png" style="float:right; width:15px;" /></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>Meet & Greet</td>
                                    <td>13/10/2018</td>
                                    <td>32</td>
                                </tr>
                                <tr>
                                    <td>Wall of Kindness</td>
                                    <td>30/03/2019</td>
                                    <td>20</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
          </div>
    </div>
    </section>
   
  
  <!---
  Faculty Coordinators
  
-->
<section id="services" class="wow fadeInUp">
      <div class="container">
          <div class="section-header">
            <h2></h2><h2 style="padding-top: 20px">Faculty Coordinators</h2>
          </div>
        <div class="row">
        <?php
  
  for($i=1;$i<3;$i++)
  {
    ?>   
<div class="col-lg-3">
            <div class="bd-all">
              <div class="text-center pd-all">
                <img class="picf" src="<?=$links['fsocial'][$i]['photo']?>" alt="">
                <h4 id="fac">
                  <?=$links['fsocial'][$i]['name']?>
                </h4>
              </div> 
            </div>
          </div>

             <?php
  }
 ?> 
      </div>
    </section>
       
    


        
  <!-- Student Coordinator -->
    <!-- <section id="teamdcc" class="wow fadeInUp">
      <div class="container">
        <div class="section-header ">
          <h2 style="padding-top: 20px" >Student Core Commitee Members</h2>
        </div>
  <div class=" carousel-wrap">
          <div>
      
  <div class="owl-carousel owl-theme"  >
  
  <?php
  
  for($i=1;$i<7;$i++)
  {
    ?>
    <div class="item bd-all" style="margin-right: 2px;">
      <div class="memberdcc">
        <div class="pic ">
          <img src="<?=$links['social'][$i]['photo']?>" alt="">
        </div>
                <div class="details">
                  <h4><?=$links['social'][$i]['name']?></h4>
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
  </section> -->
          </div>
      </div>
   </section>
  
  <!-- end Ravi slider -->
  
  <!--======================
  People
  ========================-->
   