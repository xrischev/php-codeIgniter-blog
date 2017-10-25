<h2><?php echo $post['title'];?></h2>
<img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>">
<smal>Posted on :<?php echo $post['createt_ad'];?></smal><br/>
<div class="post-body">
    <?php echo $post['body'];?>
</div>
<hr>
<?php if($this->session->userdata('user_id')==$post['user_id']):?>
<a class="btn btn-default pull-left" href="edit/<?php echo $post['slug'];?>">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']);?>
<input type="submit" value="Delete" class="btn btn-danger">

<?php endif ?>
</form>
<h3>Comments</h3>
<?php if($comments):?>

    <?php foreach ($comments as $comment ):?>
        <div class="well">
        <h5><?php echo $comment['body'];?>[by <strong><?php echo $comment['name'];?></strong>]</h5>
        </div>
        <?php endforeach;?>
<?php else : ?>
<p>No Comments To Display</p>
<?php endif;?>

<hr>
<h3>Add Comment</h3>
<?php echo validation_errors();?>
<?php echo form_open('comments/create/'.$post['id']);?>
<div class="form_group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
</div>

<div class="form_group">
    <label>Email</label>
    <input type="email" name="email" class="form-control">
</div>

<div class="form_group">
    <label>Body</label>
    <textarea type="text" name="body" class="form-control"></textarea>
</div>
<input type="hidden" value="<?php echo $post['slug'];?>">
<button type="submit" class="btn-btn-primary">Submit</button>
</form>
