<style type="text/css" media="screen">
   #services.v_m  .title {
   margin-left: 100px;
   font-weight: 700;
   margin-bottom: 15px;
   font-size: 22px;
   }
   #services.v_m  .mission_class {
   font-size: 16px;
   line-height: 1.5;
   }
   .blink-hard {
   animation: blinker 1s linear infinite;
   }
   @keyframes blinker {
   50% {
   opacity: 0;
   }
   }
</style>
<section id="services" class="v_m">
   <div class="services-content container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12" id="vision">
            <div class="box wow fadeInLeft">
               <div class="icon"><i class="fa fa-eye"></i></div>
               <big>
                  <h4 class="title"><a href="">Vision</a></h4>
                  <p class="description mission_class">
                     <i> “<?=$data['vision']?>”</i>
                  </p>
               </big>
            </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12" id="mission">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
               <div class="icon"><i class="fa fa-line-chart"></i></div>
               <h4 class="title"><a href="">Mission</a></h4>
               <p class="description ">
                  <i><?=$data['mission']?></i>
               </p>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- #services -->