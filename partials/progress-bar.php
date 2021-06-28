<?php
if($args[0] && $args[1]) {
  ?>
      <div class="pb-container">
        <div class="pb-name"><?php echo $args[0]?></div>
        <div class="pb-wrapper">
          <div class="pb-percentage"><?php echo $args[1].'%'?></div>
          <div class="pb-bar">
            <div style="width: <?php echo $args[1]?>%;"></div>
          </div>
        </div>
      </div>
  <?php
}
?>