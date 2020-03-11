<?php
#OPTION 1 : get_post

$team_members = get_posts([
    'post_type' => 'team_members'
]);


foreach($team_members as $team_member) :
?>

<div class="col-4">
    <?php echo $team_member->post_title;?>
</div>

<?php
endforeach;
?>
