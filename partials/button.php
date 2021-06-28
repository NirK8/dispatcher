<?php
// Arguments for the button.php template:
// inlineButton:boolean - if true, the button will be inline. defaults to false.
// class: string - the additional class to apply to the button ('')
// withArrowLogo:boolean - whether to display an arrow logo after the button value

if($args[0]) {
  $value = strtoupper($args[0]);
  $additional_class = $args[1] ? 'inline-button' : null;
  ?>
      <div class="button <?php echo $additional_class?>">
        <span><?php echo $value ?></span>
        <?php 
        if($args[2]) {
          get_template_part('partials/icon', null, array('arrow.png'));
        }
        ?>
      </div>
  <?php
}
?>