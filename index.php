<?php include 'data.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Course Content</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <h1>Our Faculties</h1>
    <div class="grid-container">
        <?php foreach ($faculties as $faculty): ?>
            <div class="grid-item">
                <i class="<?= $faculty['icon'] ?>" alt="<?= $faculty['name'] ?> Icon"></i>
                <h2><?= $faculty['name'] ?></h2>
                <a href="departments.php?faculty_id=<?= $faculty['id'] ?>" class="btn">View Departments</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>

<footer id="footer">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Guru Innovation Hub. All Rights Reserved.</p>
    </div>
</footer>
</html>