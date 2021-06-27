<?php
  if($args[0]) {
    ?>
      <span class="poke-type <?php echo $args[0]?>">
        <?php echo ucfirst($args[0])?>
      </span>
    <?php
  }
?>