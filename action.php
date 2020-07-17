<?php

$hodnota = $_POST['castka'];

$apiClient = new ApiClient(
    new CurlDriver(),
    new CryptoService(
        $privateKeyFile,
        $bankPublicKeyFile
    ),
    'https://api.platebnibrana.csob.cz/api/v1.8'
);

$requestFactory = new RequestFactory('012345');

// cart has to have at least 1 but most of 2 items
$cart = new Cart(Currency::get(Currency::EUR));
$cart->addItem('Nákup', 1, $hodnota * 100);

$paymentResponse = $requestFactory->createInitPayment(
    123,
    PayOperation::get(PayOperation::PAYMENT),
    PayMethod::get(PayMethod::CARD),
    true,
    $returnUrl,
    HttpMethod::get(HttpMethod::POST),
    $cart,
    null,
    null,
    Language::get(Language::CZ)
)->send($apiClient);
$payId = $paymentResponse->getPayId();

$processPaymentResponse = $requestFactory->createProcessPayment($payId)->send($apiClient);

// redirect to gateway
header('Location: ' . $processPaymentResponse->getGatewayLocationUrl());

*/
?>
