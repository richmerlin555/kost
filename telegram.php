<?php
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = '1227176488:AAFDUStkKKJfnmNI8qxK5_oupFrmBCjoCtg';
$chat_id = '-491253135';
$arr = array(
    'Імя: ' => $name;
    'Телефон: ' => $phone;
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}","r");

if ($sendToTelegram) {
    header('Location: Thank.html');
   
    return true;
} else {
    echo "Error";
}
?>