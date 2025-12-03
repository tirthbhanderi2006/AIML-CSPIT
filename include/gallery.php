<style>
.gallery-img {
    width: 100%;
    height: 260px;        
    object-fit: cover;    
    display: block;
}
</style>
<section id="portfolio" class="wow fadeInUp">
   <div class="container">
      <div class="section-header">
         <h2></h2>
         <h2 style="padding-top: 20px">Gallery</h2>
      </div>
   </div>

   <div class="container-fluid">
      <div class="row no-gutters">
         <?php 
         $counter = 1;
         $itemsPerRow = 4;
         $totalItems = count($links['gallery']);

         for ($i = 1; $i <= $totalItems; $i++):
            if (!isset($links['gallery'][$i])) continue;

            if ($counter > 1 && ($counter - 1) % $itemsPerRow === 0) {
               echo '</div><div class="row no-gutters">';
            }
         ?>
            <div class="col-lg-3 col-md-3">
               <div class="portfolio-item wow fadeInUp">
                  <a href="<?= htmlspecialchars($links['gallery'][$i]) ?>" class="portfolio-popup">
                     <img src="<?= htmlspecialchars($links['gallery'][$i]) ?>" 
                          alt="Gallery Image <?= $i ?>" 
                          class="gallery-img">
                     <div class="portfolio-overlay">
                        <div class="portfolio-info">
                           <h2 class="wow fadeInUp"></h2>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         <?php 
            $counter++;
         endfor; 
         ?>
      </div>
   </div>
</section>
