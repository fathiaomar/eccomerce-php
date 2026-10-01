<?php
require_once __DIR__ . '/../../inc/config.php';
require_once __DIR__ . '/../../inc/functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect(BASE_URL . 'checkout.php');
}

if (!isset($_SESSION['customer'])) {
    redirect(BASE_URL . 'login.php');
}

if (!isset($_SESSION['cart_p_id']) || empty($_SESSION['cart_p_id'])) {
    redirect(BASE_URL . 'cart.php');
}

$finalTotal = isset($_POST['final_total']) ? (float)$_POST['final_total'] : 0;
$paymentId = generate_payment_id('PAY');
$txnid = $_POST['txn_id'] ?? $paymentId;
$customerEmail = $_SESSION['customer']['cust_email'] ?? '';
$paymentDate = date('Y-m-d H:i:s');

$pdo = get_db();
$stmt = $pdo->prepare("INSERT INTO tbl_payment (payment_id, customer_email, paid_amount, payment_status, payment_method, txnid, payment_date) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([$paymentId, $customerEmail, safe_money($finalTotal), 'Completed', 'PayPal', $txnid, $paymentDate]);

foreach ($_SESSION['cart_p_id'] as $key => $value) {
    $productId = (int) $value;
    $productName = $_SESSION['cart_p_name'][$key] ?? '';
    $size = $_SESSION['cart_size_name'][$key] ?? '';
    $color = $_SESSION['cart_color_name'][$key] ?? '';
    $quantity = (int) ($_SESSION['cart_p_qty'][$key] ?? 0);
    $unitPrice = (float) ($_SESSION['cart_p_current_price'][$key] ?? 0);

    $stmt = $pdo->prepare("INSERT INTO tbl_order (payment_id, product_id, product_name, size, color, quantity, unit_price) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$paymentId, $productId, $productName, $size, $color, $quantity, safe_money($unitPrice)]);
}

unset($_SESSION['cart_p_id'], $_SESSION['cart_size_id'], $_SESSION['cart_size_name'], $_SESSION['cart_color_id'], $_SESSION['cart_color_name'], $_SESSION['cart_p_qty'], $_SESSION['cart_p_current_price'], $_SESSION['cart_p_name'], $_SESSION['cart_p_featured_photo']);

redirect(BASE_URL . 'payment_success.php?status=completed&method=PayPal');
