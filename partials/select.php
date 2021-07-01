<?php
// Arguments for the select.php template:
  // options:string[] - the options of the select input
  // rounded:boolean - if true, the select's shape will be rounded. defaults to true.
  // name:string - name for the select input
  // withBorder:boolean - if true, the select input will have a left-border. defautls to false

if($args[0]) {
  $options = $args[0];
  $additional_class = $args[1] ? null : 'squared-select';
  $name = $args[2] ?: null;
  $border_class = $args[3] ? 'left-border' : null;
  ?>
    <div class="select-container <?php echo $border_class ?>"> 
      <select class="select <?php echo $additional_class ?>" name="<?php echo $name ?>">
      <?php if($name) { ?>
        <option value="" disabled selected hidden><?php echo $name?></option>
      <?php
      } 
      ?>
        <?php
        array_map('print_option', $options);
        ?>
      </select>
    </div>
  <?php
}
?>