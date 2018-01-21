<h2><?php echo $post['title'];?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at'];?></small></br>
<div>
    <?php echo $post['body'];?>
</div>
<hr>
<a class="btn btn-default pull-left" href="posts/edit/<?php echo $post['id'];?>">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']);?>
<input type="submit" value="Delete" class="btn-danger">
</form>

