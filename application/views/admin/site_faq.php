<?php echo getBredcrum(ADMIN, array('#' => 'FAQ Page')); ?>
<?php echo showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>FAQ Page</strong></h2>
    </div>
    <div class="col-md-6 text-right">

    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
            
            <h3> Main Section </h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="main_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="main_heading" value="<?= $row['main_heading'] ?>" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="main_subheading" class="control-label"> Sub Heading <span class="symbol required">*</span></label>
                                <textarea class="form-control" name="main_subheading" rows="4"><?= $row['main_subheading'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label "></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>
    </div>
    <div class="clearfix"></div>
</div>