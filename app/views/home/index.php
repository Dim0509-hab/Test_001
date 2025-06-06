<!-- app/views/home/index.php -->
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/resources/css/style.css">
</head>
<body>
    <div class="profile">
        <h1><?php echo $data['name']; ?></h1>
        <p><?php echo $data['position']; ?></p>
        <a href="mailto:<?php echo $data['email']; ?>"><?php echo $data['email']; ?></a>
    </div>
</body>
</html>
