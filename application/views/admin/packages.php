<?php if ($this->uri->segment(3) == 'manage'): ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => 'Add/Update Package')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-list"></i> Add/Update <strong>Package</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/packages'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
        </div>
    </div>
    <div>
        <hr>
        <div class="row col-md-12">
            <form action="" name="frmPromos" role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading col-md-12" style="padding: 5.5px 10px">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                Display Options
                            </div>
                            <div class="panel-body" style="padding: 15.5px 0px">
                                <div class="col-md-3">
                                    <h5>Status</h5>
                                </div>
                                <div class="col-md-7">
                                    <div class="btn-group" id="status" data-toggle="buttons">
                                        <label class="btn btn-default btn-on btn-sm <?php if($row->status == 1){echo 'active';}?>">
                                        <input type="radio" value="1" name="status"<?php if($row->status == 1){echo 'checked';}?>><i class="fa fa-check" aria-hidden="true"></i></label>
                                        
                                        <label class="btn btn-default btn-off btn-sm <?php if($row->status == 0){echo 'active';}?>">
                                        <input type="radio" value="0" name="status" <?php if($row->status == 0){echo 'checked';}?>><i class="fa fa-times" aria-hidden="true"></i></label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label" for="no_of_views"> No Of Views</label>
                        <input type="text" name="no_of_views" id="no_of_views" value="<?php if (isset($row->no_of_views)) echo $row->no_of_views; ?>" class="form-control" autofocus required>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label" for="price"> Price</label>
                        <input type="number" name="price" id="price" value="<?php if (isset($row->price)) echo $row->price; ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label" for="value"> Value</label>
                        <input type="number" name="value"  step="0.01" id="value" value="<?php if (isset($row->value)) echo $row->value; ?>" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="control-label" for="you_save"> You Save</label>
                        <input type="number" name="you_save"  step="0.01" id="you_save" value="<?php if (isset($row->you_save)) echo $row->you_save; ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <div class="col-md-12">
                            <label for="detail" class="control-label"> Package Detail <span class="symbol required">*</span></label>
                            <textarea name="detail" rows="3" class="form-control ckeditor" required=""><?= $row->detail ?></textarea>
                        </div>
                    </div>
                <div class="col-md-12">                
                    <hr class="hr-short">
                    <div class="form-group text-right">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
<?php else: ?>
    <?= showMsg(); ?>
    <?= getBredcrum(ADMIN, array('#' => 'Manage Packages')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-list"></i> Manage <strong>Packages</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?= site_url(ADMIN . '/packages/manage'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
        </div>
    </div>
    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <tr>
                <th width="5%" class="text-center">Sr#</th>
                <th>No Of Views</th>
                <th>Price</th>
                <th>Value</th>
                <th>Saved</th>
                <th>Display</th>
                <th width="12%" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($rows) > 0): $count = 0; ?>
                <?php foreach ($rows as $row): ?>
                    <tr class="odd gradeX">
                        <td class="text-center"><?= ++$count; ?></td>
                        <td class=""><?=$row->no_of_views ?></td>
                        <td class=""><?=$row->price ?></td>
                        <td><b><?= $row->value ; ?></b></td>
                        <td><b><?= $row->you_save ; ?></b></td>
                        <td class="text-center"><?= getStatus($row->status); ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                    <li><a href="<?= site_url(ADMIN.'/packages/manage/'.$row->id); ?>">Edit</a></li>
                                    <li><a href="<?= site_url(ADMIN.'/packages/delete/'.$row->id); ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
<?php endif; ?>