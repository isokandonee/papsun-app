<?php include "../includes/a_config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<?php include "../includes/head-tag-contents.php";?>
</head>
<body>

<?php include "../includes/design-top.php"; ?>
<?php include "../includes/nav.php"; ?>
<div class="container" id="main-content">
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Account No</h4>
                                <!-- <p class="category">Last Performance</p> -->
                            </div><hr>
                            <div class="content">
                                <!-- <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div> -->
                                <b style="font-size:3.5em;"><?php echo ("<tr> <td>".$r['account_number']."</td></tr>"); ?></b>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Account Balance</h4>
                                <!-- <i class="divider"></i> -->
                            </div><hr>
                            <div class="content">
                                <div class="simple-text">
                                    <b style="font-size:3.5em;">#<?php include "../includes/select.php"; echo ("<tr> <td>".$r['balance']."</td></tr>"); ?></b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                
            </div>
        </div>
</div>

<?php include "../includes/footer.php";?>

</body>
</html>