<!DOCTYPE html>
<html>
<head>
    <title>Introduction to Quantum Mechanics</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function showDownloadOption(image) {
            image.nextElementSibling.style.display = 'block';
        }

        function hideDownloadOption(image) {
            image.nextElementSibling.style.display = 'none';
        }

        function viewImage(src) {
            const popup = document.getElementById('image-popup');
            const popupImage = document.getElementById('popup-image');
            popupImage.src = src;
            popup.style.display = 'block';
        }

        function closePopup() {
            document.getElementById('image-popup').style.display = 'none';
        }
    </script>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <h1>Introduction to Quantum Mechanics</h1>
    <div class="course-details-container">
        
        
        <h2><u>Course Outline</u></h2>
        <div class="course-outline">
            <div class="grid-item">
                <li>Quantum Mechanics Basics</li>
            </div>
            <div class="grid-item">
                <li>Wave-Particle Duality</li>
            </div>
            <div class="grid-item">
                <li>Schrödinger Equation</li>
            </div>
            <div class="grid-item">
                <li>Quantum States</li>
            </div>
        </div>
        
        <!-- <h2><u>Intro Video</u></h2> -->
        <h2><u>Course Overview</u></h2>
        <div class="video-container">
        <video class="course-video" width="600" controls autoplay muted>
                <source src="img/How to use data labels in a chart.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        
        
        <p class="course-overview">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nam saepe non blanditiis incidunt distinctio est, nihil suscipit quam rem excepturi ipsum nesciunt sit veniam consectetur necessitatibus, vero magni porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, repellat possimus sapiente porro fugiat quos dolor voluptatibus ipsam quae, enim blanditiis. Possimus asperiores eos tempore minima similique incidunt omnis autem. lor</p>
        
        <h2><u>Past Questions</u></h2></h2>
        <div class="past-questions-container">
            <div class="past-question-item">
                <img src="img/q1.jpg" class="past-question-image">
                <a href="#" class="view-link" onclick="viewImage('img/q1.jpg'); return false;">View</a>
                <a href="img/q1.jpg" class="download-link" download>Download</a>
            </div>

            <div class="past-question-item">
                <img src="img/q2.jpg" class="past-question-image">
                <a href="#" class="view-link" onclick="viewImage('img/q2.jpg'); return false;">View</a>
                <a href="img/q2.jpg" class="download-link" download>Download</a>
            </div>

            <div class="past-question-item">
                <img src="img/q3.jpg" class="past-question-image">
                <a href="#" class="view-link" onclick="viewImage('img/q3.jpg'); return false;">View</a>
                <a href="img/q3.jpg" class="download-link" download>Download</a>
            </div>
        </div>

        <div class="navigation-container">
            <button class="back-button" onclick="history.back()">Previous</button>
            <a href="index.php"><button class="back-button">Home</button></a>
        </div>
    </div>

    <!-- Image Popup -->
    <div id="image-popup" class="image-popup">
        <span class="close-popup" onclick="closePopup()">&times;</span>
        <img id="popup-image" src="" alt="Popup Image">
    </div>
</body>
<footer id="footer">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Guru Innovation Hub. All Rights Reserved.</p>
    </div>
</footer>
</html>
