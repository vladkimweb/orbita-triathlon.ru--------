<!-- Через 10 секунд после появления сообщения об отправке или ошибке — отправляемся на сайт -->
<meta http-equiv='refresh' content='10; url=https://orbita-triathlon.ru/'>
<meta charset="UTF-8" />
<body>
    Сообщение успешно отправлено, спасибо!
</body>
<!-- Начался блок PHP -->
<?php
$token = '6123281187:AAHTg__eBtDP1QozV_PuDhW8OBqHP0_KirU';
 // ID чата
$chat_id = '-830457607';
//Определяем переменные для передачи данных из нашей формы
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$message = $_POST['message'];

//Собираем в массив то, что будет передаваться боту
$arr = array(
    'Имя:' => $name,
    'Email' => $email,
    'Телефон:' => $phone,
    'Город' => $city,
    'Сообщение' => $message
);
//Настраиваем внешний вид сообщения в телеграме
foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
};
//Передаем данные боту
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
//Выводим сообщение об успешной отправке
// if ($sendToTelegram) {
//     echo "Отправлено"
//   } else {
//     echo "Error";
//   }
?>
