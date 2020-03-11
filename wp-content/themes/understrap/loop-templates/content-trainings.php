<?php
#OPTION 1 : get_post

$trainings = get_posts([
    'post_type' => 'training_session'
]);


foreach($trainings as $training) :
?>

<div class="col-4">
    <?php echo $training->post_title;?>
</div>

<?php
endforeach;
?>

<br>
<br>
<br>
<br>


<?php
#OPTION 2 : get_post

$query_args = [
    'post_type' => 'training_session',
    'orderby' => 'ID',
    'order' => 'ASC'
];


$trainings_query = new WP_Query($query_args);
$trainings = $trainings_query->posts;


foreach($trainings as $training) :
?>

<div class="col-4">  WP -
   <?php echo $training->post_title;?>
</div>

<?php
endforeach;