<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Calculator</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="java/script.js"></script>
</head>
<body class = "body">
    <div class="differnce">
        <div class="foundation">
            <header>
                <div class="header">
                    <div class="logo"></div>
                    <div class="number"></div>
                </div>
                <ul class="menu">
                    <li><a href="">Кредитные карты</a></li>
                    <li><a href="">Вклады</a></li>
                    <li><a href="">Дебетовые карта</a></li>
                    <li><a href="">Страхование</a></li>
                    <li><a href="">Друзья</a></li>
                    <li><a href="">Интернет банк</a></li>
                </ul>
            </header>

            <div class="breadcrumbs">
                <a href="">Главная</a>
                -
                <a href="">Вклады</a>
                -
                <a>Калькулятор</a>
            </div>

            <form name="form_calculator" id="form_calculator">
                <div class="calculator">
                    <div class="Text">Калькулятор</div>
                    <div class="inputclass">

                        <div class="inputline">
                            <p>Дата оформления вклада</p>
                            <input class="input" type="text" name="deposit_registration_date" id="datepicker" autocomplete="off">
                        </div>
                        <div class="inputline">
                            <p>Сумма вклада</p>
                            <input class="input" type="number" min="1000" max="3000000"  value="10000" id ="numbervalue" name="deposit_amount"  oninput= "change_nuber_value ()">
                            <div class="slyderclass">
                                <input class ="slyder" type="range" min="1000" max="3000000" value="10000" id = "slydervalue" onmousemove="change_slyder_value ()">
                                <p class = "a">1 тыс. руб.</p>
                                <p class = "b">3 000 000</p>
                            </div>
                        </div>
                        <div class="inputline">
                            <p>Срок вклада</p>
                            <select class="inputyears" name="term_of_deposit"  id="yearsvalue">
                                <option value="1">1 год</option>
                                <option value="2" />2 года</option>
                                <option value="3" />3 года</option>
                                <option value="4" />4 года</option>
                                <option value="5" />5 лет</option>
                            </select>
                        </div>
                        <div class="inputline">
                            <p>Пополнение вклада</p>
                            <input class="radiobutt"  type="radio" checked name="deposit_replenishment" value="0"><div>Нет</div>
                            <input class="radiobutt"  type="radio" name="deposit_replenishment" value="1"><div>Да</div>
                        </div>
                        <div class="inputline">
                            <p>Сумма пополнения вклада</p>
                            <input class="input" type="number" min="1000" max="3000000" name="deposit_replenishment_amount" value="10000" id ="numbervalue_two" oninput= "change_nuber_value_two ()">
                            <div class="slyderclass">
                                <input class ="slyder" type="range" min="1000" max="3000000" value="10000" id = "slydervalue_two" onmousemove="change_slyder_value_two ()">
                                <p class = "a">1 тыс. руб.</p>
                                <p class = "b">3 000 000</p>
                            </div>
                        </div>
                        <div class="buttomResult">
                            <input type="submit" value="Расcчитать"> 
                            <p>Результат:</p>
                            <a class="result" id="result"></a>   
                        </div>
                    </div>  
                </div>
            </form>
        </div>

        <footer class="footer">
            <div class="footerpad">
                <a href="">Кредитные карты</a>
                <a href="">Вклады</a>
                <a href="">Дебетовая карта</a>
                <a href="">Страхование</a>
                <a href="">Друзья</a>
                <a href="">Интернет-банк</a>
            </div>
        </footer>
    </div>
</body>
</html>