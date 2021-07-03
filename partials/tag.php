<?php

if($args[0] && $args[1]) {
  $title = $args[0];
  $percent = $args[1];
  ?>
      <div class="tag-container">
        <div class="tag-name"><?php echo $args[0]?></div>
        <div class="pb-container">
          <div class="pb-percentage"><?php echo $args[1].'%'?></div>
          <div class="pb-bar">
            <div style="width: <?php echo $args[1]?>%;"></div>
          </div>
        </div>
      </div>
  <?php
}
?>