<?php echo form_open('users/login'); ?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center"><?php echo $title;?></h1>
        <div>
            <input type="text" name="username" class="form-control"  required>
        </div>
        <div>
            <input type="password" name="password" class="form-control"  required autofocus>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div>


</form>
