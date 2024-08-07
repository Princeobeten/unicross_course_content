<?php
$faculties = [
    ['id' => 1, 'name' => 'Faculty of Agriculture and Forestry', 'icon' => 'fa fa-leaf'],
    ['id' => 2, 'name' => 'Faculty of Basic Medical Sciences', 'icon' => 'fa fa-stethoscope'],
    ['id' => 3, 'name' => 'Faculty of Communication Technology', 'icon' => 'fa fa-satellite-dish'],
    ['id' => 4, 'name' => 'Faculty of Education', 'icon' => 'fa fa-graduation-cap'],
    ['id' => 5, 'name' => 'Faculty of Engineering', 'icon' => 'fa fa-cogs'],
    ['id' => 6, 'name' => 'Faculty of Environmental Sciences', 'icon' => 'fa fa-tree'],
    ['id' => 7, 'name' => 'Faculty of Management Sciences', 'icon' => 'fa fa-briefcase'],
    ['id' => 8, 'name' => 'Faculty of Science', 'icon' => 'fa fa-flask'],
    ['id' => 9, 'name' => 'Faculty of Technology', 'icon' => 'fa fa-wrench']
];

$departments = [
    1 => [
        ['id' => 1, 'name' => 'Agricultural Economics and Extension', 'icon' => 'fa fa-chart-line'],
        ['id' => 2, 'name' => 'Agronomy', 'icon' => 'fa fa-seedling'],
        ['id' => 3, 'name' => 'Animal Science', 'icon' => 'fa fa-paw'],
        ['id' => 4, 'name' => 'Fisheries', 'icon' => 'fa fa-fish'],
        ['id' => 5, 'name' => 'Forestry and Wildlife', 'icon' => 'fa fa-tree']
    ],
    2 => [
        ['id' => 6, 'name' => 'Human Anatomy', 'icon' => 'fa fa-user-md'],
        ['id' => 7, 'name' => 'Human Physiology', 'icon' => 'fa fa-heartbeat'],
        ['id' => 8, 'name' => 'Medical Biochemistry', 'icon' => 'fa fa-flask']
    ],
    3 => [
        ['id' => 9, 'name' => 'Mass Communication', 'icon' => 'fa fa-bullhorn']
    ],
    4 => [
        ['id' => 10, 'name' => 'Curriculum and Instructional Technology', 'icon' => 'fa fa-book'],
        ['id' => 11, 'name' => 'Educational Administration and Planning', 'icon' => 'fa fa-chart-line'],
        ['id' => 12, 'name' => 'Educational Foundations and Development', 'icon' => 'fa fa-building'],
        ['id' => 13, 'name' => 'Guidance and Counselling', 'icon' => 'fa fa-handshake'],
        ['id' => 14, 'name' => 'Library and Information Science', 'icon' => 'fa fa-book'],
        ['id' => 15, 'name' => 'Science Education', 'icon' => 'fa fa-flask'],
        ['id' => 16, 'name' => 'Technical and Vocational Education', 'icon' => 'fa fa-wrench']
    ],
    5 => [
        ['id' => 17, 'name' => 'Agricultural Engineering', 'icon' => 'fa fa-tractor'],
        ['id' => 18, 'name' => 'Civil Engineering', 'icon' => 'fa fa-building'],
        ['id' => 19, 'name' => 'Electrical/Electronic Engineering', 'icon' => 'fa fa-bolt'],
        ['id' => 20, 'name' => 'Mechanical Engineering', 'icon' => 'fa fa-cogs'],
        ['id' => 21, 'name' => 'Wood Products Engineering', 'icon' => 'fa fa-tree']
    ],
    6 => [
        ['id' => 22, 'name' => 'Geography and Environmental Science', 'icon' => 'fa fa-globe']
    ],
    7 => [
        ['id' => 23, 'name' => 'Accountancy', 'icon' => 'fa fa-calculator'],
        ['id' => 24, 'name' => 'Business Administration', 'icon' => 'fa fa-briefcase'],
        ['id' => 25, 'name' => 'Hospitality and Tourism Management', 'icon' => 'fa fa-hotel'],
        ['id' => 26, 'name' => 'Marketing', 'icon' => 'fa fa-chart-bar']
    ],
    8 => [
        ['id' => 27, 'name' => 'Biological Sciences', 'icon' => 'fa fa-dna'],
        ['id' => 28, 'name' => 'Chemical Sciences', 'icon' => 'fa fa-vial'],
        ['id' => 29, 'name' => 'Computer Science', 'icon' => 'fa fa-desktop'],
        ['id' => 30, 'name' => 'Mathematics and Statistics', 'icon' => 'fa fa-square-root-alt'],
        ['id' => 31, 'name' => 'Microbiology', 'icon' => 'fa fa-microscope'],
        ['id' => 32, 'name' => 'Physics', 'icon' => 'fa fa-atom']
    ],
    9 => [
        ['id' => 33, 'name' => 'Food Science and Technology', 'icon' => 'fa fa-apple-alt']
    ]
];

$courses = [
    1 => [
        ['id' => 1, 'title' => 'Introduction to Agricultural Economics'],
        ['id' => 2, 'title' => 'Farm Management'],
        ['id' => 3, 'title' => 'Agricultural Marketing'],
        ['id' => 4, 'title' => 'Extension Education'],
        ['id' => 5, 'title' => 'Rural Development']
    ],
    2 => [
        ['id' => 6, 'title' => 'Soil Science'],
        ['id' => 7, 'title' => 'Crop Production'],
        ['id' => 8, 'title' => 'Plant Breeding'],
        ['id' => 9, 'title' => 'Weed Science'],
        ['id' => 10, 'title' => 'Horticulture']
    ],
    3 => [
        ['id' => 11, 'title' => 'Animal Nutrition'],
        ['id' => 12, 'title' => 'Animal Breeding'],
        ['id' => 13, 'title' => 'Animal Physiology'],
        ['id' => 14, 'title' => 'Poultry Science'],
        ['id' => 15, 'title' => 'Dairy Science']
    ],
    4 => [
        ['id' => 16, 'title' => 'Fisheries Management'],
        ['id' => 17, 'title' => 'Aquaculture'],
        ['id' => 18, 'title' => 'Fish Nutrition'],
        ['id' => 19, 'title' => 'Fish Pathology'],
        ['id' => 20, 'title' => 'Fish Breeding']
    ],
    5 => [
        ['id' => 21, 'title' => 'Forest Ecology'],
        ['id' => 22, 'title' => 'Wildlife Management'],
        ['id' => 23, 'title' => 'Forest Management'],
        ['id' => 24, 'title' => 'Agroforestry'],
        ['id' => 25, 'title' => 'Forest Economics']
    ],
    6 => [
        ['id' => 26, 'title' => 'Gross Anatomy'],
        ['id' => 27, 'title' => 'Histology'],
        ['id' => 28, 'title' => 'Neuroanatomy'],
        ['id' => 29, 'title' => 'Embryology'],
        ['id' => 30, 'title' => 'Clinical Anatomy']
    ],
    7 => [
        ['id' => 31, 'title' => 'Human Physiology'],
        ['id' => 32, 'title' => 'Cardiovascular Physiology'],
        ['id' => 33, 'title' => 'Neurophysiology'],
        ['id' => 34, 'title' => 'Respiratory Physiology'],
        ['id' => 35, 'title' => 'Endocrinology']
    ],
    8 => [
        ['id' => 36, 'title' => 'Biochemistry'],
        ['id' => 37, 'title' => 'Metabolism'],
        ['id' => 38, 'title' => 'Molecular Biology'],
        ['id' => 39, 'title' => 'Enzymology'],
        ['id' => 40, 'title' => 'Genetics']
    ],
    9 => [
        ['id' => 41, 'title' => 'Mass Communication Theory'],
        ['id' => 42, 'title' => 'News Reporting'],
        ['id' => 43, 'title' => 'Broadcast Journalism'],
        ['id' => 44, 'title' => 'Public Relations'],
        ['id' => 45, 'title' => 'Media Law']
    ],
    10 => [
        ['id' => 46, 'title' => 'Curriculum Development'],
        ['id' => 47, 'title' => 'Instructional Technology'],
        ['id' => 48, 'title' => 'Assessment and Evaluation'],
        ['id' => 49, 'title' => 'Educational Psychology'],
        ['id' => 50, 'title' => 'Instructional Design']
    ],
    11 => [
        ['id' => 51, 'title' => 'School Management'],
        ['id' => 52, 'title' => 'Educational Planning'],
        ['id' => 53, 'title' => 'Educational Policy'],
        ['id' => 54, 'title' => 'Leadership in Education'],
        ['id' => 55, 'title' => 'School Finance']
    ],
    12 => [
        ['id' => 56, 'title' => 'Educational Psychology'],
        ['id' => 57, 'title' => 'Sociology of Education'],
        ['id' => 58, 'title' => 'Philosophy of Education'],
        ['id' => 59, 'title' => 'Comparative Education'],
        ['id' => 60, 'title' => 'Educational Measurement']
    ],
    13 => [
        ['id' => 61, 'title' => 'Counseling Techniques'],
        ['id' => 62, 'title' => 'Career Counseling'],
        ['id' => 63, 'title' => 'Group Counseling'],
        ['id' => 64, 'title' => 'Counseling Ethics'],
        ['id' => 65, 'title' => 'Counseling in Schools']
    ],
    14 => [
        ['id' => 66, 'title' => 'Information Retrieval'],
        ['id' => 67, 'title' => 'Cataloging and Classification'],
        ['id' => 68, 'title' => 'Library Management'],
        ['id' => 69, 'title' => 'Digital Libraries'],
        ['id' => 70, 'title' => 'Archival Science']
    ],
    15 => [
        ['id' => 71, 'title' => 'Science Teaching Methods'],
        ['id' => 72, 'title' => 'Laboratory Techniques'],
        ['id' => 73, 'title' => 'Physics Education'],
        ['id' => 74, 'title' => 'Chemistry Education'],
        ['id' => 75, 'title' => 'Biology Education']
    ],
    16 => [
        ['id' => 76, 'title' => 'Vocational Education'],
        ['id' => 77, 'title' => 'Technical Drawing'],
        ['id' => 78, 'title' => 'Workshop Practice'],
        ['id' => 79, 'title' => 'Craft Education'],
        ['id' => 80, 'title' => 'Industrial Training']
    ],
    17 => [
        ['id' => 81, 'title' => 'Soil and Water Engineering'],
        ['id' => 82, 'title' => 'Farm Structures'],
        ['id' => 83, 'title' => 'Agricultural Machinery'],
        ['id' => 84, 'title' => 'Irrigation Engineering'],
        ['id' => 85, 'title' => 'Post-Harvest Technology']
    ],
    18 => [
        ['id' => 86, 'title' => 'Structural Analysis'],
        ['id' => 87, 'title' => 'Construction Technology'],
        ['id' => 88, 'title' => 'Geotechnical Engineering'],
        ['id' => 89, 'title' => 'Transportation Engineering'],
        ['id' => 90, 'title' => 'Hydraulics']
    ],
    19 => [
        ['id' => 91, 'title' => 'Circuit Analysis'],
        ['id' => 92, 'title' => 'Control Systems'],
        ['id' => 93, 'title' => 'Power Systems'],
        ['id' => 94, 'title' => 'Signal Processing'],
        ['id' => 95, 'title' => 'Digital Electronics']
    ],
    20 => [
        ['id' => 96, 'title' => 'Thermodynamics'],
        ['id' => 97, 'title' => 'Fluid Mechanics'],
        ['id' => 98, 'title' => 'Heat Transfer'],
        ['id' => 99, 'title' => 'Machine Design'],
        ['id' => 100, 'title' => 'Manufacturing Processes']
    ],
    21 => [
        ['id' => 101, 'title' => 'Wood Science'],
        ['id' => 102, 'title' => 'Wood Processing'],
        ['id' => 103, 'title' => 'Wood Products Manufacturing'],
        ['id' => 104, 'title' => 'Forest Products Utilization'],
        ['id' => 105, 'title' => 'Wood Preservation']
    ],
    22 => [
        ['id' => 106, 'title' => 'Environmental Management'],
        ['id' => 107, 'title' => 'Climatology'],
        ['id' => 108, 'title' => 'Geographical Information Systems'],
        ['id' => 109, 'title' => 'Urban Geography'],
        ['id' => 110, 'title' => 'Environmental Impact Assessment']
    ],
    23 => [
        ['id' => 111, 'title' => 'Financial Accounting'],
        ['id' => 112, 'title' => 'Management Accounting'],
        ['id' => 113, 'title' => 'Auditing'],
        ['id' => 114, 'title' => 'Taxation'],
        ['id' => 115, 'title' => 'Accounting Information Systems']
    ],
    24 => [
        ['id' => 116, 'title' => 'Principles of Management'],
        ['id' => 117, 'title' => 'Organizational Behavior'],
        ['id' => 118, 'title' => 'Human Resource Management'],
        ['id' => 119, 'title' => 'Operations Management'],
        ['id' => 120, 'title' => 'Strategic Management']
    ],
    25 => [
        ['id' => 121, 'title' => 'Hospitality Management'],
        ['id' => 122, 'title' => 'Tourism Management'],
        ['id' => 123, 'title' => 'Food and Beverage Management'],
        ['id' => 124, 'title' => 'Event Management'],
        ['id' => 125, 'title' => 'Travel Agency Operations']
    ],
    26 => [
        ['id' => 126, 'title' => 'Marketing Principles'],
        ['id' => 127, 'title' => 'Consumer Behavior'],
        ['id' => 128, 'title' => 'Sales Management'],
        ['id' => 129, 'title' => 'Advertising'],
        ['id' => 130, 'title' => 'Digital Marketing']
    ],
    27 => [
        ['id' => 131, 'title' => 'General Biology'],
        ['id' => 132, 'title' => 'Genetics'],
        ['id' => 133, 'title' => 'Microbiology'],
        ['id' => 134, 'title' => 'Botany'],
        ['id' => 135, 'title' => 'Zoology']
    ],
    28 => [
        ['id' => 136, 'title' => 'General Chemistry'],
        ['id' => 137, 'title' => 'Organic Chemistry'],
        ['id' => 138, 'title' => 'Inorganic Chemistry'],
        ['id' => 139, 'title' => 'Physical Chemistry'],
        ['id' => 140, 'title' => 'Analytical Chemistry']
    ],
    29 => [
        ['id' => 141, 'title' => 'Introduction to Computer Science'],
        ['id' => 142, 'title' => 'Data Structures'],
        ['id' => 143, 'title' => 'Algorithms'],
        ['id' => 144, 'title' => 'Computer Networks'],
        ['id' => 145, 'title' => 'Operating Systems']
    ],
    30 => [
        ['id' => 146, 'title' => 'Calculus'],
        ['id' => 147, 'title' => 'Linear Algebra'],
        ['id' => 148, 'title' => 'Statistics'],
        ['id' => 149, 'title' => 'Probability Theory'],
        ['id' => 150, 'title' => 'Mathematical Modeling']
    ],
    31 => [
        ['id' => 151, 'title' => 'General Microbiology'],
        ['id' => 152, 'title' => 'Medical Microbiology'],
        ['id' => 153, 'title' => 'Industrial Microbiology'],
        ['id' => 154, 'title' => 'Environmental Microbiology'],
        ['id' => 155, 'title' => 'Food Microbiology']
    ],
    32 => [
        ['id' => 156, 'title' => 'Classical Mechanics'],
        ['id' => 157, 'title' => 'Quantum Mechanics'],
        ['id' => 158, 'title' => 'Thermodynamics'],
        ['id' => 159, 'title' => 'Electromagnetism'],
        ['id' => 160, 'title' => 'Optics']
    ],
    33 => [
        ['id' => 161, 'title' => 'Food Chemistry'],
        ['id' => 162, 'title' => 'Food Microbiology'],
        ['id' => 163, 'title' => 'Food Engineering'],
        ['id' => 164, 'title' => 'Food Processing'],
        ['id' => 165, 'title' => 'Food Quality Control']
    ]
];
?>
