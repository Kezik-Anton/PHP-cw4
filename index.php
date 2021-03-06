<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформление доставки</title>
</head>
<body>

<?php 

?>



<form method="POST" action='/'>

    <div>Ваше имя:</div>
    <input name="name" type="text" require/>
    <div>Ваш телефон:</div>
    <input name="tel" type="tel" />
    <div>Адрес доставки:</div>
    <select name="city">
        <option value="minsk">Минск</option>
        <option value="brest">Брест</option>
        <option value="vitebsk">Витебск</option>
        <option value="gomel">Гомель</option>
        <option value="grodno">Гродно</option>
        <option value="mogilev">Могилев</option>
    </select>
    <input name="address" type="text" />
    <div>Дата доставки:</div>
    <input name="date" type="date" />
    <button>Заказать</button>
    <br><br><br>

</form>

<?php 

    var_dump(preg_match('/^[а-яё]+$/msiu', $_POST['name']));

    if (preg_match('/^[А-Яа-я]+$/', $_POST['name'])) {

        echo 'Имя должно содержать только русские буквы';

    } else {
        $name = $_POST['name'];
        echo $name;
    }








    
?>
    
</body>
</html>
