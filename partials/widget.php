<?php
// Arguments for the widget.php template:
// title:string - title of the widget
// type: 'pie' || 'tags' - widget type
// pie_data:object [optional] - data for the pie (if the widget is a pie)
// tags_data: array [optional] - data for the tags (if the widget displays tags)
$title = $args[0];
$type = $args[1];
$pie_data = $args[2];
$tags_data = $args[3];
?>

<div class="widget">
  <div class="widget-title">
    <?php echo ucfirst($title)?>
  </div>
  <div class="underline"></div>
    <?php 
      if($type === 'pie') {
        get_template_part('partials/pie-chart', null, $pie_data);
      }
      if($type === 'tags') {
        ?>
        <div class="tags-content">
        <?php array_map('print_tag', $tags_data);?>
        </div>
        <?php
      }
      ?>
</div>