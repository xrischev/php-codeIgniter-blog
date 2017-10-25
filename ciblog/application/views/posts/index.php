<h2><?=$title?></h2>

<?php foreach ($posts as $post):?>
    <h3><?php echo $post['title'];?></h3>
    <div class="row">
        <div class="col-md-3">
            <img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image'];?>">
        </div>
        <div class="col_md-9">
            <smal>Posted on :<?php echo $post['createt_ad'];?>in <strong>
                    <?php echo $post['name'];?>
                </strong></smal><br/>
            <?php echo word_limiter($post['body'],60);?>
            <br/>
            <p>
                <a class="btn btn-default" href="<?php echo site_url('/posts/'
                    .$post['slug']); ?>">Read More</a>
            </p>
        </div>
    </div>




<?php endforeach;?>
<div class="pagination-links">
    <?php echo $this->pagination->create_links();?>
</div>

<style>
    .pagination-links{
        margin:30px 0;
    }
    a.pagination-links{
        padding:8px 13px;
        margin:5px;
        background: #f4f4f4;
        border:1px #ccc solid;
    }
    .pagination-links strong{
        padding:8px 13px;
        margin:5px;
        background: #f4f4f4;
        border:1px #ccc solid;
    }
</style>
