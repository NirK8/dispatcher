<?php
// Arguments for the select.php template:
// options:string[] - the options of the select input
// name:string - name for the select input

if($args[0]) {
  $name = $args[0] ?: null;
  $options = $args[1];
  ?>
    <div class="selectdiv">
      <select class="select" name="<?php echo $name ?>">
        <option value="" disabled selected hidden><?php echo $name?></option>
        <?php
        array_map('print_option', $options);
        ?>
      </select>
    </div>
  <?php
}
?>