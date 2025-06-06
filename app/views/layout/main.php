<!DOCTYPE html>
<html>
<head>
 <title>SSpAA</title>
 <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
 <nav>
 <a href="/">Главная</a>
 </nav>
 
 <h1>Добро пожаловать в SSpAA</h1>
 
 <ul>
 <?php foreach($services as $service): ?>
 <li>
 <?= $service 'name' ?> - <?= $service'price' ?> ₽
 </li>
 <?php endforeach; ?>
 </ul>
</body>
</html>
