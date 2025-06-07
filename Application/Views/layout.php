<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'DimuA'; ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="/">DimuA</a>
                <ul class="nav-links">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/about">О нас</a></li>
                    <li><a href="/contact">Контакты</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <?php if (isset($content)): ?>
            <?php echo $content; ?>
        <?php else: ?>
            <?php require_once $view; ?>
        <?php endif; ?>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 DimuA. Все права защищены.</p>
        </div>
    </footer>

    <script src="/js/main.js"></script>
</body>
</html>
