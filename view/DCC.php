<style>
    th{
      cursor:pointer;
      font-weight: bold;
          text-align: center;
      }
      /*.dataTables_length
      {
      margin-bottom:35px;
      }*/
      #example_length, #example_filter, #example_info, #example_paginate {
        display: none;
      }
      td {
        text-align: center;
      }
</style>

<section id="services" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2></h2>
            <h2 style="padding-top: 20px">Depstar Coding Club</h2><br>
            <p class="text-center" style="margin-bottom: 15px;"><b>"Great things are done by a series of small things brought together".</b></p>
            <p>In today’s rapidly changing environment, programming skills are essential tools that can be utilized and incorporated into various fields and domains. Hence, it becomes absolutely essential to equip young minds with such skills. DEPSTAR CODING CLUB aims to establish a coding culture on campus, reaching every student passionate about coding.<p>
                <br>
            <p>DEPSTAR CODING CLUB is a platform where students with different interests such as, Development (App Development, Web Development, Open Source) and Designing (UI/UX, Graphics) can participate in programming events and equip such skills. The club arranges Hands on workshops focusing on various activities such as, Basic Programming, Web Designing languages, Machine Learning algorithms, and Mobile Application Development. Competitive coding events are conducted to inculcate a coding culture in the institute.</p>
            <br>
            <p>We believe in coding our problems away.</p>

            <p>
                <b><br><br>DEPSTAR CODING CLUB Practices and outcomes:</b>
                <ul type="disc" style="text-align: justify;">
                    <li> The club conducts an Institute wide coding competition every year to motivate the students who are passionate about coding. The competition not only focuses on coding but also on logical, analytical and problem-solving skills which can help them in visualizing a problem from various perspectives and creating multiple innovative solutions.</li>
                    <li> DEPSTAR CODING CLUB helps members to gain in-depth knowledge of coding. This helps them immensely during placements and can bring laurels to the institution through various national and international programming contests.</li>
                    <li> The club meets every month to discuss and work on projects. All the members collaborate to achieve a common objective. Lecture sessions and technical talks on competitions are also organized for the benefit of members, where some concepts of computer science are discussed.</li>
                    <li> The club also organizes peer learning sessions about internship and placement preparation to inculcate the knowledge sharing attitude in students.</li>                    
                </ul>
                <p>The country as a whole requires a lot more coders for it to achieve the goal of a ‘Digital India’. The club is doing its bit to help the country pursue this goal.
                </p>
            </p>
        </div>

        <section id="services" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2></h2>
                    <h2 style="padding-top: 20px">Events</h2>
                </div>

                <div class="row table-responsive fw-body wow fadeInLeft">
                    <div class="content">

                        <table id="example" class="table">
                            <thead>
                                <tr>
                                    <th>Name of Event<img src="img/sort.png" style="float:right; width:15px;" /></th>
                                    <th>Type of Event<img src="img/sort.png" style="float:right; width:15px;" /></th>
                                    <th>Date<img src="img/sort.png" style="float:right; width:15px;" /></th>
                                    <th>No. of Participants<img src="img/sort.png" style="float:right; width:15px;" /></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>CODEWAR</td>
                                    <td>Coding Competition</td>
                                    <td>06/10/2018</td>
                                    <td>115</td>
                                </tr>
                                <tr>
                                    <td>The Mind Fizz</td>
                                    <td>QUIZ competition</td>
                                    <td>06/10/2018</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                  <td>Hands on with Git & Web Hosting</td>
                                  <td>Hands on Workshop</td>
                                  <td>16/03/2019</td>
                                  <td>53</td>
                                </tr>
                                <tr>
                                  <td>Illuminati Season IV</td>
                                  <td>Coding Competition</td>
                                  <td>07/09/2019</td>
                                  <td>115</td>
                                </tr>
                                <tr>
                                  <td>CodeChef Illuminati Season VI</td>
                                  <td>Coding Competition</td>
                                  <td>28/04/2020</td>
                                  <td>227</td>
                                </tr>
                                <tr>
                                  <td>DEBUGATHON</td>
                                  <td>Coding Competition Based on Debugging</td>
                                  <td>18/01/2021</td>
                                  <td>115</td>
                                </tr>
                                <tr>
                                  <td>“ORIGINATE”</td>
                                  <td>A Digital Innovation Hackathon</td>
                                  <td>21/08/2021</td>
                                  <td>115</td>
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
                    <h2></h2>
                    <h2 style="padding-top: 20px">Faculty Coordinators</h2>
                </div>
                <div class="row">
                    <?php
  
  for($i=1;$i<3;$i++)
  {
    ?>
    <div class="col-lg-3" >
            <div class="bd-all">
              <div class="text-center pd-all">
                <img class="picf" src="<?=$links['fdcc'][$i]['photo']?>" alt="">
                <h4 id="fac">
                  <?=$links['fdcc'][$i]['name']?>
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
      <h2 style="padding-top: 20px">Student Core Commitee Members</h2>
  </div>
  <div class=" carousel-wrap">
      <div>

          <div class="owl-carousel owl-theme">

              <?php

for($i=1;$i<9;$i++)
{
?>
        <div class="item bd-all" style="margin-right: 2px;">
            <div class="memberdcc">
                <div class="pic "><img src="<?=$links['cdcc'][$i]['photo']?>" alt="">
                </div>
                <div class="details">
                    <h4>
                        <?=$links['cdcc'][$i]['name']?>
                    </h4>
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