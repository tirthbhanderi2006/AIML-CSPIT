<?php
$clubs = [
    [
        'id' => 'innovators-club',
        'title' => 'Innovators Club',
        'category' => 'Technical Innovation Club',
        'description' => 'Fostering creativity and innovation among students through hands-on projects, workshops, and collaborative problem-solving experiences in emerging technologies.',
        'faculty_name' => 'Niyati Patel',
        'faculty_email' => 'niyatipatel.aiml@charusat.ac.in',
        'image' => 'img/clubs/IMG_0817.JPG',
        'alt' => 'Innovators Club',
        'fallback_image' => 'img/portfolio/1.JPG'
    ],
    [
        'id' => 'ai-for-all',
        'title' => 'AI For All Club',
        'category' => 'AI Awareness & Learning',
        'description' => 'Democratizing artificial intelligence education for all students, promoting AI literacy and ethical AI practices through interactive sessions and real-world applications.',
        'faculty_name' => 'Dr. Nirav Bhatt',
        'faculty_email' => 'niravbhatt.it@charusat.ac.in',
        'image' => 'img/clubs/LOGO AI FOR ALL.jpg',
        'alt' => 'AI For All Club',
        'fallback_image' => 'img/portfolio/2.JPG'
    ],
    [
        'id' => 'math-for-ai',
        'title' => 'Math For AI Club',
        'category' => 'Mathematical Foundation',
        'description' => 'Building strong mathematical foundations for artificial intelligence, exploring the critical role of mathematics in machine learning algorithms and AI model development.',
        'faculty_name' => 'Bhargav Shobhana',
        'faculty_email' => 'bhargavshobhana.cv@charusat.ac.in',
        'image' => 'img/clubs/Math for AI.JPG',
        'alt' => 'Math For AI Club',
        'fallback_image' => 'img/portfolio/3.JPG'
    ]
];
?>

<style>
    .clubs-section {
        padding: 60px 0 30px 0;
        background: #f8f9fa;
    }

    .club-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
        margin-bottom: 30px;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
        position: relative;
    }

    .club-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.15);
    }

    .club-image-container {
        position: relative;
        overflow: hidden;
        height: 250px;
    }

    .club-image {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: all 0.3s ease-in-out;
    }

    .club-card:hover .club-image {
        transform: scale(1.05);
    }

    .club-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(12, 46, 138, 0.8) 0%, rgba(41, 204, 163, 0.8) 100%);
        opacity: 0;
        transition: all 0.3s ease-in-out;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .club-card:hover .club-overlay {
        opacity: 1;
    }

    .club-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: linear-gradient(45deg, #0c2e8a 0%, #29cca3 100%);
        color: #fff;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .club-details {
        padding: 25px;
        text-align: center;
    }

    .club-title {
        font-size: 20px;
        font-weight: 700;
        color: #0c2e8a;
        margin-bottom: 10px;
        font-family: "Montserrat", sans-serif;
    }

    .club-category {
        color: #29cca3;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .club-description {
        color: #666;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 15px;
        min-height: 72px;
    }

    .faculty-info {
        border-top: 1px solid #eee;
        padding-top: 15px;
        margin-top: 15px;
    }

    .faculty-name, .faculty-email {
        font-size: 13px;
        margin-bottom: 5px;
        display: flex;
        align-items: center;
    }

    .faculty-name i, .faculty-email i {
        margin-right: 8px;
        color: #29cca3;
        width: 20px;
        text-align: center;
    }

    .faculty-email a {
        color: #0c2e8a;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .faculty-email a:hover {
        color: #29cca3;
        text-decoration: underline;
    }

    .club-icon {
        font-size: 48px;
        color: #fff;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .club-image-container {
            height: 200px;
        }

        .club-details {
            padding: 20px 15px;
        }

        .club-title {
            font-size: 18px;
        }
    }

    /* Animation for section reveal */
    .club-card {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.6s ease-out forwards;
    }

    .club-card:nth-child(1) { animation-delay: 0.1s; }
    .club-card:nth-child(2) { animation-delay: 0.2s; }
    .club-card:nth-child(3) { animation-delay: 0.3s; }
    .club-card:nth-child(4) { animation-delay: 0.4s; }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<section id="student-clubs" class="clubs-section wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2 style="padding-top: 20px">Student Clubs</h2>
            <p>Empowering student excellence through innovation, collaboration, and achievement in technology and AI</p>
        </div>

        <div class="row">
            <?php foreach ($clubs as $index => $club): ?>
                <div class="col-lg-4 col-md-6">
                    <div id="<?php echo $club['id']; ?>" class="club-card">
                        <div class="club-image-container">
                            <img src="<?php echo $club['image']; ?>" 
                                 alt="<?php echo htmlspecialchars($club['alt']); ?>" 
                                 class="club-image" 
                                 onerror="this.src='<?php echo $club['fallback_image']; ?>'">
                            <div class="club-overlay">
                                <i class="fa fa-trophy club-icon"></i>
                            </div>
                            <!-- Uncomment to add a badge if needed -->
                            <!-- <div class="club-badge">Active</div> -->
                        </div>
                        <div class="club-details">
                            <h4 class="club-title"><?php echo htmlspecialchars($club['title']); ?></h4>
                            <div class="club-category"><?php echo htmlspecialchars($club['category']); ?></div>
                            <p class="club-description"><?php echo htmlspecialchars($club['description']); ?></p>
                            <div class="faculty-info">
                                <div class="faculty-name">
                                    <i class="fa fa-user"></i>
                                    <span>Faculty In-charge: <?php echo htmlspecialchars($club['faculty_name']); ?></span>
                                </div>
                                <div class="faculty-email">
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:<?php echo htmlspecialchars($club['faculty_email']); ?>">
                                        <?php echo htmlspecialchars($club['faculty_email']); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- View More Button (Uncomment if needed) -->
        <!--
        <div class="row">
            <div class="col-12 text-center" style="margin-top: 30px;">
                <a href="?v=student_achievements_all" class="btn" style="background: linear-gradient(45deg, #0c2e8a 0%, #29cca3 100%); color: #fff; padding: 12px 30px; border-radius: 25px; font-weight: 600; text-decoration: none; transition: all 0.3s ease;">
                    View All Clubs
                </a>
            </div>
        </div>
        -->
    </div>
</section>