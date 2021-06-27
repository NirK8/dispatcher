<?php
if($args) {
  ?>
    <h4>Stats</h4>
    <div class="stats-container">
        <?php 
          array_map('print_stat', $args);
        ?>
    </div>
  <?php
}
?>