<?php require_once('header.php'); ?>

<?php
$status = $_GET['status'] ?? 'completed';
$method = $_GET['method'] ?? 'payment';
$message = 'Your payment has been processed successfully.';

if ($status === 'pending') {
    $message = 'Your Bank Deposit request has been submitted and is waiting for approval.';
}
?>

<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">
                <p>
                    <h3 style="margin-top:20px;">Payment Status</h3>
                    <div class="alert alert-success" style="margin-top:20px;">
                        <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>
                    </div>
                    <a href="dashboard.php" class="btn btn-success"><?php echo LANG_VALUE_91; ?></a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>