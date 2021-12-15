<?= getBredcrum(ADMIN, array('#' => 'Home Page')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Home Page</strong></h2>
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
            <h3> Main Banner </h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="banner_heading" class="control-label"> Heading<span class="symbol required">*</span></label>
                                <input type="text" name="banner_heading" id="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="banner_detail" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                                <textarea name="banner_detail" rows="3" class="form-control" required=""><?= $row['banner_detail'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_text" class="control-label">Left Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="banner_button_text" id="banner_button_text" value="<?= $row['banner_button_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_link" class="control-label">Left Button Link<span class="symbol required">*</span></label>
                                <select name="banner_button_link" id="banner_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach ($pages as $page) { ?>
                                        <option value="<?= $page ?>" <?= ($row['banner_button_link'] == $page) ? 'selected' : '' ?>> <?= $page ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_text_right" class="control-label">Right Button Text<span class="symbol required">*</span></label>
                                <input type="text" name="banner_button_text_right" id="banner_button_text_right" value="<?= $row['banner_button_text_right'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_link_right" class="control-label">Right Button Link<span class="symbol required">*</span></label>
                                <select name="banner_button_link_right" id="banner_button_link_right" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach ($pages as $page) { ?>
                                        <option value="<?= $page ?>" <?= ($row['banner_button_link_right'] == $page) ? 'selected' : '' ?>> <?= $page ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Section 2</h3>
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
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image1']) ? getImageSrc(UPLOADIMAGE . "images/", $row['image1']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image1">
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">Card Heading <span class="symbol required">*</span></label>
                            <input type="text" name="2sec_card_heading1" value="<?= $row['2sec_card_heading1'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Desciptions <span class="symbol required">*</span></label>
                            <textarea name="2sec_card_tagline1" rows="4" class="form-control"><?= $row['2sec_card_tagline1'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image2']) ? getImageSrc(UPLOADIMAGE . "images/", $row['image2']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image2">
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">Card Heading <span class="symbol required">*</span></label>
                            <input type="text" name="2sec_card_heading2" value="<?= $row['2sec_card_heading2'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Desciptions <span class="symbol required">*</span></label>
                            <textarea name="2sec_card_tagline2" rows="4" class="form-control"><?= $row['2sec_card_tagline2'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image3']) ? getImageSrc(UPLOADIMAGE . "images/", $row['image3']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image3">
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">Card Heading <span class="symbol required">*</span></label>
                            <input type="text" name="2sec_card_heading3" value="<?= $row['2sec_card_heading3'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Desciptions <span class="symbol required">*</span></label>
                            <textarea name="2sec_card_tagline3" rows="4" class="form-control"><?= $row['2sec_card_tagline3'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image4']) ? getImageSrc(UPLOADIMAGE . "images/", $row['image4']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image4">
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">Card Heading <span class="symbol required">*</span></label>
                            <input type="text" name="2sec_card_heading4" value="<?= $row['2sec_card_heading4'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Desciptions <span class="symbol required">*</span></label>
                            <textarea name="2sec_card_tagline4" rows="4" class="form-control"><?= $row['2sec_card_tagline4'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image5']) ? getImageSrc(UPLOADIMAGE . "images/", $row['image5']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image5">
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">Card Heading <span class="symbol required">*</span></label>
                            <input type="text" name="2sec_card_heading5" value="<?= $row['2sec_card_heading5'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Desciptions <span class="symbol required">*</span></label>
                            <textarea name="2sec_card_tagline5" rows="4" class="form-control"><?= $row['2sec_card_tagline5'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image6']) ? getImageSrc(UPLOADIMAGE . "images/", $row['image6']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image6">
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">Card Heading <span class="symbol required">*</span></label>
                            <input type="text" name="2sec_card_heading6" value="<?= $row['2sec_card_heading6'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Desciptions <span class="symbol required">*</span></label>
                            <textarea name="2sec_card_tagline6" rows="4" class="form-control"><?= $row['2sec_card_tagline6'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <h3> Section 3</h3>
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
                                        <img src="<?= !empty($row['image7']) ? getImageSrc(UPLOAD_PATH . "images/", $row['image7']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image7" accept="image/*" <?php if (empty($row['image7'])) {
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
                                <label for="3sec_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="3sec_heading" value="<?= $row['3sec_heading'] ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image8']) ? getImageSrc(UPLOADIMAGE . "images/", $row['image8']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image8">
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image9']) ? getImageSrc(UPLOADIMAGE . "images/", $row['image9']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image9">
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Card Image
                                    </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden"><input type="hidden">
                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                            <img src="<?= !empty($row['image10']) ? getImageSrc(UPLOADIMAGE . "images/", $row['image10']) : 'http://placehold.it/1000x1200' ?>" alt="--">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image10">
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">Card Heading <span class="symbol required">*</span></label>
                            <input type="text" name="3sec_card_heading3" value="<?= $row['3sec_card_heading3'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Desciptions <span class="symbol required">*</span></label>
                            <textarea name="3sec_card_tagline3" rows="4" class="form-control"><?= $row['3sec_card_tagline3'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <h2>Section 4 (Our Packages)</h2>
            <div class="form-group">
                <div class="col-md-6">
                    <label class="control-label"> Heading <span class="symbol required"></span></label>
                    <input type="text" name="4sec_heading" value="<?= $row['4sec_heading'] ?>" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="control-label"> Tagline <span class="symbol required"></span></label>
                    <input type="text" name="4sec_tagline" value="<?= $row['4sec_tagline'] ?>" class="form-control">
                </div>
            </div>

            <h2>Section 5</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Heading<span class="symbol required">*</span></label>
                            <input type="text" name="5sec_heading" value="<?= $row['5sec_heading'] ?>" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Youtube Link<span class="symbol required">*</span></label>
                            <input type="text" name="5sec_youtube_link" value="<?= $row['5sec_youtube_link'] ?>" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="5sec_right_content" class="control-label"> Right Content <span class="symbol required">*</span></label>
                            <textarea name="5sec_right_content" rows="3" class="form-control ckeditor" required=""><?= $row['5sec_right_content'] ?></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="5sec_bottom_content" class="control-label"> Bottom Content <span class="symbol required">*</span></label>
                            <textarea name="5sec_bottom_content" rows="3" class="form-control ckeditor" required=""><?= $row['5sec_bottom_content'] ?></textarea>
                        </div>
                    </div>
                </div>

            </div>

            <h2>Section 6 (Testimonials Section)</h2>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="6sec_heading" class="control-label"> Heading <span class="symbol required"></span></label>
                    <input type="text" name="6sec_heading" id="6sec_heading" value="<?= $row['6sec_heading'] ?>" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="6sec_tagline" class="control-label"> Tagline <span class="symbol required"></span></label>
                    <input type="text" name="6sec_tagline" id="6sec_tagline" value="<?= $row['6sec_tagline'] ?>" class="form-control">
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