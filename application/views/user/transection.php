<!doctype html>
<html>

<head>
    <title>Grow Subs - Transections</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page" class="dashboard-side dash-body">
<?php $this->load->view('includes/header-logged'); ?>
<main index>
<section id="dash">
	 <div id="dashboard" class="order-form">
	 	<div class="contain">
            <div class="head">
                <h1 class="secHeading">Transection History (<?=count($totalRec)?>)</h1>
            </div>
            <div class="blk">
                    <div class="tbl_blk">
                        <table>
                            <thead>
                                <tr>
                                    <th>Order No.</th>
                                    <th>Channel Name</th>
                                    <th width="140">Amount</th>
                                    <th>Date</th>
                                    <th width="80">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(count($transactions) == 0): ?>
                                <tr>
                                    <td>No record found.</td>
                                    <td></td>
                                    <td class="price"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php
                            else:
                                foreach($transactions as $index => $transac): $transac = (object)$transac; ?>
                                    <tr>
                                        <td><a href="<?=base_url('user/order-detail/'.doEncode($transac->id))?>"><?=num_size($transac->id)?></a></td>
                                        <td><?=$transac->channel_name?></td>
                                        <td class="price">$<?=$transac->total_price?></td>
                                        <td><?=format_date_log_format($transac->order_timestamp, 'D, d M Y', false)?></td>
                                        <td><span class="badge green">Completed</span></td>
                                    </tr>
                            <?php
                                endforeach;
                            endif;
                            ?>
                            </tbody>
                        </table>
                    </div>
            </div>
            <div class="text-center page_nation">
                <ul class="pagination">
                    <?php echo $this->pagination->create_links(); ?>
                </ul>
            </div>
        </div>
        
	 </div>
</section>
</main>
<?php $this->load->view('includes/commonjs'); ?>
</body>

</html>