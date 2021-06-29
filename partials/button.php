<?php
// Arguments for the button.php template:
// value:string - the button's text
// url: string - url to send to
// inlineButton:boolean - if true, the button will be inline. defaults to false.
// withArrowLogo:boolean - whether to display an arrow logo after the button value

if($args[0]) {
  $value = strtoupper($args[0]);
  $url = $args[1];
  $additional_class = $args[2] ? 'inline-button' : 'block-button';
  ?>
    <a href="<?php echo $url?>" target="_blank" style="text-decoration:none">
      <div class="button <?php echo $additional_class?>">
        <span><?php echo $value ?></span>
        <?php 
        if($args[3]) {
          get_template_part('partials/icon', null, array('arrow.png'));
        }
        ?>
      </div>
    </a>
  <?php
}
?>