 <main>
     <div class="container">
         <?php foreach ($discs as $oneDisc) { ?>
             <div class="disc-container">
                 <img src="<?php echo $oneDisc["poster"]; ?>" alt="">
                 <h2><?php echo $oneDisc["title"]; ?></h2>
                 <h3><?php echo $oneDisc["author"]; ?></h3>
                 <p><?php echo $oneDisc["year"]; ?></p>
             </div>
         <?php } ?>
     </div>
 </main>