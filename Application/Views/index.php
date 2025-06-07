<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <style>
        /* Общие стили для всех страниц */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
        }
        .card {
            background: #f8f8f8;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
        }
        .profile-image {
            margin-right: 20px;
            border-radius: 50%;
        }
        .name {
            font-size: 24px;
            font-weight: bold;
        }
        .position {
            font-style: italic;
            margin-bottom: 15px;
        }
        .contact {
            margin-bottom: 5px;
        }
        .navbar {
            background: #333;
            color: white;
            padding: 10px;
            margin-bottom: 20px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="/">Главная</a>
        <a href="/about">О нас</a>
        <a href="/contact">Контакты</a>
    </div>
    <div class="card">
        <?php if ($person->profileImage): ?>
            <img src="data:image/jpeg;base64,<?= base64_encode(imagejpeg($person->profileImage)) ?>" alt="Фото" class="profile-image">
        <?php endif; ?>
        <div class="name"><?php echo $person->name. ' '. $person->surname; ?></div>
        <div class="position"><?php echo $person->position; ?></div>
        <div class="contacts">
            <?php foreach($person->contacts as $type => $value): ?>
                <div class="contact">
                    <?php echo ucfirst($type). ': '. $value; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
