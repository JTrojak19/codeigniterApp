<h2><?php echo $post['title'];?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at'];?></small></br>
<div>
    <?php echo $post['body'];?>
</div>
<hr>
<?php echo form_open('/posts/delete/'.$post['id']);?>
<input type="submit" value="Delete" class="btn-danger">
</form>
