<?= getBredcrum(ADMIN, array('#' => 'About Us')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>About Us</strong></h2>
    </div>
    <div class="col-md-6 text-right">
        <!--        <a href="<?= base_url('admin/services'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>-->
    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form" method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
            <h3> Section 1 </h3>
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
                            <div class="col-md-12">
                                <label for="main_tags" class="control-label"> Tags (Enter comma separated) <span class="symbol required">*</span></label>
                                <textarea class="form-control" name="main_tags" rows="4"><?= $row['main_tags'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <h3> Section 2</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Right Image
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image1']) ? getImageSrc(UPLOAD_PATH . "images/", $row['image1']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image1" accept="image/*" <?php if (empty($row['image1'])) {
                                                                                                    echo 'required=""';
                                                                                                } ?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="3sec_heading" class="control-label"> Left Heading <span class="symbol required">*</span></label>
                                <input type="text" name="3sec_heading" value="<?= $row['3sec_heading'] ?>" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label   label for="3sec_detail" class="control-label"> Left Detail <span class="symbol required">*</span></label>
                                <textarea name="3sec_detail" rows="3" class="form-control ckeditor" required=""><?= $row['3sec_detail'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">Card Heading <span class="symbol required">*</span></label>
                            <input type="text" name="3sec_card_heading1" value="<?= $row['3sec_card_heading1'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Desciptions <span class="symbol required">*</span></label>
                            <textarea name="3sec_card_tagline1" rows="4" class="form-control"><?= $row['3sec_card_tagline1'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">Card Heading <span class="symbol required">*</span></label>
                            <input type="text" name="3sec_card_heading2" value="<?= $row['3sec_card_heading2'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Desciptions <span class="symbol required">*</span></label>
                            <textarea name="3sec_card_tagline2" rows="4" class="form-control"><?= $row['3sec_card_tagline2'] ?></textarea>
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
</div>