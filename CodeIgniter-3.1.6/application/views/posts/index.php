<h2>
    <?=$title?>
</h2>
<?php
foreach ($posts as $post): ?>
<h3><?php echo $post['title'];?></h3>
<small class="post-date">Posted on: <?php echo $post['created_at'];?></small></br>
<?php echo $post['body'];?>
</br></br>
<p><a class='btn btn-default' href="posts/view/<?php echo $post['id']?>">Read More</a></p>
<?php endforeach;?>
