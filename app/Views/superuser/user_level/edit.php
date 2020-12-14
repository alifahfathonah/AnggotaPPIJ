<!--  Traffic  -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Edit User Level</strong>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                        </div>
                                        <hr>
                                    
                                    <form action="<?= base_url('userlevel/update');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <!-- if the variable is not empty, fill it with the previous data -->
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">User Level ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="user_level_id" class="form-control" required="required" value="<?= $userlevel['user_level_id']; ?>"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">User Level Name</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="user_level_name" class="form-control" required="required" value="<?= $userlevel['user_level_name']; ?>"></div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </form>
                            </div>
                            <div class="card-footer">
                                
                            </div>
                        </div>
                    </div>


                </div>
                <!--  /Traffic -->
                <div class="clearfix"></div>