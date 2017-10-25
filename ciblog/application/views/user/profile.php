<div class="container">
    <div class="row">
        <h2>Profile User</h2>


        <div class="col-md-7 ">

            <div class="panel panel-default">
                <div class="panel-heading"> <h2><?php echo $user['name'];?></h2></div>
                <div class="panel-body">

                    <div class="box box-info">

                        <div class="box-body">
                            <div class="col-sm-6">
                                <div  align="center"> <img src="<?php echo site_url();?>assets/images/profile/<?php echo $user['profile_image'];?>"  class="img-circle img-responsive">





                                </div>

                                <br>

                                <!-- /input-group -->
                            </div>

                            <div class="clearfix"></div>
                            <hr style="margin:5px 0 5px 0;">


                            <div class="col-sm-5 col-xs-6 tital " >First Name:<?php echo $user['name'];?></div><div class="col-sm-7 col-xs-6 "></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>


                            <div class="col-sm-5 col-xs-6 tital " >Username:<?php echo $user['username'];?></div><div class="col-sm-7"> </div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital " >Date Of Joining:<?php echo $user['register_date'];?></div><div class="col-sm-7"></div>

                            <div class="clearfix"></div>
                            <div class="bot-border"></div>





                            <div class="col-sm-5 col-xs-6 tital " >Email:<?php echo $user['email'];?></div><div class="col-sm-7"></div>








                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                    </div>


                </div>
            </div>
        </div>










    </div>
</div>




