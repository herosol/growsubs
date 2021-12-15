<!doctype html>
<html>

<head>
    <title>Grow Subs - Transections</title>
    <?php require_once('../includes/site-master.php'); ?>
</head>

<body id="home-page" class="dashboard-side dash-body">
<?php require_once('../includes/header-logged.php'); ?>
<main index>
<section id="dash">
	 <div id="dashboard" class="order-form">
	 	<div class="contain">
            <div class="head">
                <h1 class="secHeading">Transection History</h1>
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
                                <tr>
                                    <td><a href="order-detail.php">000011</a></td>
                                    <td>360 degrees</td>
                                    <td class="price">$10.00</td>
                                    <td>Fri, 12 Nov 2021</td>
                                    <td><span class="badge green">Completed</span></td>
                                </tr>
                                <tr>
                                    <td><a href="order-detail.php">000010</a></td>
                                    <td>Snob</td>
                                    <td class="price">$30.00</td>
                                    <td>Tue, 09 Nov 2021</td>
                                    <td><span class="badge green">Completed</span></td>
                                </tr>
                                <tr>
                                    <td><a href="order-detail.php">000009</a></td>
                                    <td>Wonderful</td>
                                    <td class="price">$60.00</td>
                                    <td>Wed, 03 Nov 2021</td>
                                    <td><span class="badge green">Completed</span></td>
                                </tr>
                                <tr>
                                    <td><a href="order-detail.php">000008</a></td>
                                    <td>Studio</td>
                                    <td class="price">$10.00</td>
                                    <td>Wed, 27 Oct 2021</td>
                                    <td><span class="badge green">Completed</span></td>
                                </tr>
                                <tr>
                                    <td><a href="order-detail.php">000007</a></td>
                                    <td>Tips & Tricks</td>
                                    <td class="price">$65.00</td>
                                    <td>Thu, 30 Sep 2021</td>
                                    <td><span class="badge green">Completed</span></td>
                                </tr>
                                <tr>
                                    <td><a href="order-detail.php">000003</a></td>
                                    <td>Tutorials</td>
                                    <td class="price">$50.00</td>
                                    <td>Thu, 23 Sep 2021</td>
                                    <td><span class="badge green">Completed</span></td>
                                </tr>
                                <tr>
                                    <td><a href="order-detail.php">000002</a></td>
                                    <td>Samira Jones</td>
                                    <td class="price">$32.00</td>
                                    <td>Thu, 23 Sep 2021</td>
                                    <td><span class="badge green">Completed</span></td>
                                </tr>
                                <tr>
                                    <td><a href="order-detail.php">000001</a></td>
                                    <td>Town</td>
                                    <td class="price">$10.00</td>
                                    <td>Thu, 23 Sep 2021</td>
                                    <td><span class="badge green">Completed</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
            <div class="text-center page_nation">
                <ul class="pagination">
                    <li><a href="?">«</a></li>
                    <li><a href="?">1</a></li>
                    <li><a href="?" class="active">2</a></li>
                    <li><a href="?">3</a></li>
                    <li><a href="?">4</a></li>
                    <li><a href="?">5</a></li>
                    <li><a href="?">»</a></li>
                </ul>
            </div>
        </div>
        
	 </div>
</section>
</main>
<?php require_once('../includes/commonjs.php'); ?>
</body>

</html>