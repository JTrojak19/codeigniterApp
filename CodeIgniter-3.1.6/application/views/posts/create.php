<h2>
    <?=$title?>
</h2>
<?php echo validation_errors();?>
<?php echo form_open('posts/create'); ?>
<form action="" method="post">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control"  placeholder="Add title">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>