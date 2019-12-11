<?php

include 'inc/header.php';

$posts = posts();



foreach ($posts as $post) :
 ?>

 <div class="col-md-6">
  <div class="card m-2"> 
   <div class="card-header"> <?= $post['title'] ?> </div><!-- card-header -->
    <div class="card-body"><?= $post['content'] ?> </div><!-- card-body -->
     <div class="card-footer"> <a href="">More</a> </div><!-- card-footer -->
     
    
  
  </div> <!-- card -->
 </div> <!-- col-md-6 -->

<?php
endforeach;


include 'inc/footer.php';
?>