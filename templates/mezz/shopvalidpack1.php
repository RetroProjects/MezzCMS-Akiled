<?php

$json = file_get_contents('php://input');
$datos = json_decode($json, true);

if(is_array($datos)){
    $id_transaccion = $datos['detalles']['id'];
    $status_paypal = $datos['detalles']['status'];
    $email = $datos['detalles']['payer']['email_address'];
    $product= $datos['detalles']['purchase_units']['0']['items']['0']['name'];
    $planetas= $datos['detalles']['purchase_units']['0']['description'];
    $esmeraldas= $datos['detalles']['purchase_units']['0']['items']['0']['description'];

    $insertshop = $dbh->prepare("INSERT INTO mezz_currency (user_id, date_shop, status_paypal, product, id_paypal, mail_shop, planetas, esmeraldas) VALUES (:userid, :date_shop, :status_paypal, :product, :id_paypal, :mail_shop, :planetas, :esmeraldas)");
    $insertshop->bindParam(':userid', User::userData('id'));
    $insertshop->bindParam(':date_shop', strtotime('now'));
    $insertshop->bindParam(':status_paypal', $status_paypal);
    $insertshop->bindParam(':product', $product);
    $insertshop->bindParam(':id_paypal', $id_transaccion);
    $insertshop->bindParam(':mail_shop', $email);
    $insertshop->bindParam(':planetas', $planetas);
    $insertshop->bindParam(':esmeraldas', $esmeraldas);
    $insertshop->execute();
}
else
{
    echo '¿Que crees que haces aquí?';
}
?>