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
          <h2></h2><h2 style="padding-top: 20px">Depstar Creativity and Innovation Club</h2><br>
          <p>Devang Patel Institute of Advance Technology and Research (DEPSTAR) always inspires
            students for the overall development in academics and co-curricular activities. The institution
            is devoted to intellectually vibrant atmosphere of research and imparts education in learning of
            sciences. CAIC is the initiative of Depstar Institute, Charusat University.CAIC stands for creativity and innovation club. 
      This club aims at providing platform for all the creative and innovative notions prevailing among the students.
      CAIC takes the responsibility to inculcate creative and innovative spirit among the students by organizing events and competitions that allow students to 
      express themselves and creates awareness among the students regarding recent innovations.
      CAIC believes that innovative ideas can change the world we live in and shape it into something that we would love to be in.CAIC holds the principle of innovating and creating things that can help solve everyday problems and can make life easier for us.
      CAIC currently has a group of 8 core committee members who receive guidance from two of the faculty members of the Depstar Institute, Charusat University.        
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
                                    <th>Name Of Event<img src="img/sort.png" style="float:right; width:15px;" /></th>
                                    <th>Date<img src="img/sort.png" style="float:right; width:15px;" /></th>
                                    <th>No. of Participants<img src="img/sort.png" style="float:right; width:15px;" /></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ideathon</td>
                                    <td>06/10/2018</td>
                                    <td>38</td>
                                </tr>
                                <tr>
                                    <td>3D Object Modelling using Blender</td>
                                    <td>02/03/2019</td>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <td>Thrift venture - an exciting Treasure Hunt</td>
                                    <td>31/08/2019</td>
                                    <td>14</td>
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
  
  for($i=1;$i<2;$i++)
  {
    ?>   <div class="col-lg-3">
            <div class="bd-all">
              <div class="text-center pd-all">
                <img class="picf" src="<?=$links['fcaic'][$i]['photo']?>" alt="">
                <h4 id="fac">
                  <?=$links['fcaic'][$i]['name']?>
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
        <div class="pic "><img src="<?=$links['caic'][$i]['photo']?>" alt="">
        </div>
                <div class="details">
                  <h4><?=$links['caic'][$i]['name']?></h4>
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
  
  <!-- end Ravi slider -->
  
  <!--======================
  People
  ========================-->
   