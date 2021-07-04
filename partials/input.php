<?php
// Arguments for the input.php template:
// placeholder:string - placeholder for the input input
// withIcon: boolean - if true, a 'search' icon will be displayed

if($args[0]) {
  $placeholder = $args[0] ?: null;
  ?>
      <input class="input" placeholder="<?php echo $placeholder?>">
  <?php
}
?>