<?php include 'data.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <?php
        $faculty_id = $_GET['faculty_id'];
        $faculty_name = '';
        foreach ($faculties as $faculty) {
            if ($faculty['id'] == $faculty_id) {
                $faculty_name = $faculty['name'];
                break;
            }
        }
    ?>
    <h1><?= $faculty_name ?> - Departments</h1>
    <div class="navigation">
        <a href="index.php" class="btn back-btn">Back to Faculties</a>
    </div>
    <div class="grid-container">
        <?php foreach ($departments[$faculty_id] as $department): ?>
            <div class="grid-item">
                <i class="<?= $department['icon'] ?>" alt="<?= $department['name'] ?> Icon"></i>
                <h2><?= $department['name'] ?></h2>
                <a href="courses.php?department_id=<?= $department['id'] ?>" class="btn">View Courses</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
