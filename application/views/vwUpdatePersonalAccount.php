<body>

    <div id="wrapper">

        <?php $this->view('snippets/navigation') ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-10">
                                <h1 class="remove-margin"><a href="/dashboard">Dashboard</a> > Update your account</h1>
                            </div>
                            <div class="col-lg-2">
                                <a class="update_details_button btn btn-default pull-right" href="#">Update information</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <?php echo validation_errors(); ?>
                <?php
                    if (isset($status) && $status) {
                        echo "<div class='alert alert-success' role='alert'>". $status ."</div>";
                    }
                ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" action="/account" role="form">
                                        <div class="form-group">
                                            <label>First name</label>
                                            <input name="first_name" class="form-control" value="<?php echo $user_info['first_name'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input name="last_name" class="form-control" value="<?php echo $user_info['last_name'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email_address" class="form-control" value="<?php echo $user_info['email_address'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Phone</label>
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <select name="mobile_number_code" class="form-control">
                                                        <?php foreach ($countries as $key => $country): ?>
                                                            <?php $current_mobile_code = $user_info['mobile_number_code']; ?>
                                                            <option <?php echo $key == $current_mobile_code ? "selected" : "" ?>>+<?php echo $key ?></option>
                                                        <?php endforeach ?>
                                                    </select> 
                                                </div>
                                                <div class="col-lg-10">
                                                    <input name="mobile_number" class="form-control" value="<?php echo $user_info['mobile_number'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input name="current_address" class="form-control" value="<?php echo $user_info['current_address'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Town</label>
                                            <input name="current_town" class="form-control" value="<?php echo $user_info['current_town'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Postcode</label>
                                            <input name="address_postcode" class="form-control" value="<?php echo $user_info['address_postcode'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select name="current_country" class="form-control">
                                                <?php foreach ($countries as $country): ?>
                                                    <?php $current_country = $user_info['current_country']; ?>
                                                    <option <?php echo $country == $current_country ? "selected" : "" ?>><?php echo $country ?></option>
                                                <?php endforeach ?>
                                            </select> 
                                        </div>
                                        <button type="submit" class="update_details_button_trigger btn btn-default hide">Submit Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-6">
                    <h2 style="margin-top: 0;">Membership information</h2>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->