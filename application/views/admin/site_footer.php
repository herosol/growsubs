<?= getBredcrum(ADMIN, array('#' => 'Footer')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Footer</strong></h2>
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
            <h3> Pre Footer </h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="prefooter_heading" class="control-label"> Heading<span class="symbol required">*</span></label>
                                <input type="text" name="prefooter_heading" id="prefooter_heading" value="<?= $row['prefooter_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="prefooter_detail" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                                <textarea name="prefooter_detail" rows="3" class="form-control" required=""><?= $row['prefooter_detail'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="prefooter_button_text" class="control-label">Left Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="prefooter_button_text" id="prefooter_button_text" value="<?= $row['prefooter_button_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="prefooter_button_link" class="control-label">Left Button Link<span class="symbol required">*</span></label>
                                <select name="prefooter_button_link" id="prefooter_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach ($pages as $page) { ?>
                                        <option value="<?= $page ?>" <?= ($row['prefooter_button_link'] == $page) ? 'selected' : '' ?>> <?= $page ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Subscribe Section</h3>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="" class="control-label"> Heading <span class="symbol required">*</span></label>
                    <input type="text" name="2sec_heading" value="<?= $row['2sec_heading'] ?>" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="control-label"> Tagline <span class="symbol required">*</span></label>
                    <input type="text" name="2sec_tagline" value="<?= $row['2sec_tagline'] ?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    <label for="" class="control-label"> Subscribe Heading <span class="symbol required">*</span></label>
                    <input type="text" name="subs_heading" value="<?= $row['subs_heading'] ?>" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="" class="control-label"> Subscribe Placeholder <span class="symbol required">*</span></label>
                    <input type="text" name="subs_placeholder" value="<?= $row['subs_placeholder'] ?>" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="" class="control-label"> Subscribe Button Text <span class="symbol required">*</span></label>
                    <input type="text" name="subs_button_text" value="<?= $row['subs_button_text'] ?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="" class="control-label"> Below Logo Text <span class="symbol required">*</span></label>
                    <input type="text" name="below_logo_txt" value="<?= $row['below_logo_txt'] ?>" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="" class="control-label"> Column 2 Heading <span class="symbol required">*</span></label>
                    <input type="text" name="column2_heading" value="<?= $row['column2_heading'] ?>" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="" class="control-label"> Column 3 Heading <span class="symbol required">*</span></label>
                    <input type="text" name="column3_heading" value="<?= $row['column3_heading'] ?>" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="" class="control-label"> Column 4 Heading <span class="symbol required">*</span></label>
                    <input type="text" name="column4_heading" value="<?= $row['column4_heading'] ?>" class="form-control">
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