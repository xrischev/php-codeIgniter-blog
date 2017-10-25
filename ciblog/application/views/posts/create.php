<h2><?=$title;?></h2>
<?php echo validation_errors();?>
<?php echo form_open_multipart('posts/create');?>
    <div class="form-group">
        <label for="formGroupExampleInput" id="title">title</label>
        <input type="text" class="form-control" name="title" placeholder="add title">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">body</label>
        <textarea id="editor1" class="form-control" name="body" placeholder="add body"></textarea>
    </div>
<div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form_control">
        <?php foreach ($categories as $category):?>
        <option value="<?php echo $category['id'];?>">
            <?php echo $category['name'];?>
        </option>
        <?php endforeach;?>
    </select>
</div>
<div class="form-group">
    <label>Upload Image</label>
    <input type="file" name="userfile" size="20">
</div>

<button type="submit" class="btn btn-default">Submit</button>

</form>
