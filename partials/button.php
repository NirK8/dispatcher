<?php
// Arguments for the button.php template:
// value:string - the text to display inside the button
// class: string - the additional class to apply to the button
// withArrowLogo:boolean - whether to display an arrow logo after the button value

if($args[0]) {
  $additional_class = $args[1] ?: null;
  ?>
      <div class="button <?php echo $additional_class?>">
        <span><?php echo $args[0] ?></span>
        <?php 
        if($args[2]) {
          get_template_part('partials/arrow', null, null);
        }
        ?>
      </div>
  <?php
}
?>