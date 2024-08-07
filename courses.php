<?php include 'data.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <?php
        // Fetch the department_id from the URL
        $department_id = $_GET['department_id'];
        
        // Initialize variables
        $department_name = '';
        $faculty_id = null;
        
        // Find department name and faculty_id based on department_id
        foreach ($departments as $fid => $faculty_departments) {
            foreach ($faculty_departments as $department) {
                if ($department['id'] == $department_id) {
                    $department_name = $department['name'];
                    $faculty_id = $fid;
                    break 2;
                }
            }
        }
        
        // Check if department_name was found and there are courses for this department
        if (empty($department_name) || !isset($courses[$department_id])) {
            echo '<p>No courses available for this department, <a href="index.php">go back home</a></p>';
            exit;
        }
    ?>
    <h1><?= htmlspecialchars($department_name) ?> - Courses</h1>
    <div class="navigation">
        <a href="departments.php?faculty_id=<?= htmlspecialchars($faculty_id) ?>" class="btn back-btn">Back to Departments</a>
    </div>
    <div class="grid-container">
        <?php foreach ($courses[$department_id] as $course): ?>
            <div class="grid-item">
                <h2><?= htmlspecialchars($course['title']) ?></h2>
                <!-- <a href="course_detail.php?course_id=<?= htmlspecialchars($course['id']) ?>" class="btn">Course Details</a> -->
                <a href="course_detail.php" class="btn">Course Details</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
