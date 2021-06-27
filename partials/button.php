<?php
if($args[0]) {
  ?>
      <div class="button">
        <span><?php echo $args[0] ?></span>
        <?php 
        if($args[1]) {
          get_template_part('partials/link', null, null);
        }
        ?>
      </div>
  <?php
}
?>