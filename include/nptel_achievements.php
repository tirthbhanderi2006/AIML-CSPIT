<?php
// Faculty Achievements Data
$facultyAchievements = [
    [
        'name' => ' Jalpesh Vasa',
        'course' => 'Professor, AI & ML Department',
        'description' => 'Elite + Silver in the NPTEL course Privacy and Security in Online Social Media.',
        'image' => 'img/nptel/nptel_faculty_achievement1.jpg',
        'badge' => 'Award',
        'icon' => 'trophy'
    ],

     [
        'name' => 'Deep Mendha',
        'course' => 'Professor, AI & ML Department',
        'description' => 'Elite category in the NPTEL course Programming with Generative AI.',
        'image' => 'img/nptel/nptel_faculty_achievement2.jpg',
        'badge' => 'Award',
        'icon' => 'trophy'
    ],

    [
        'name' => 'Nishant Koshti',
        'course' => 'Professor, AI & ML Department',
        'description' => 'Elite category in the NPTEL course Cloud Computing.',
        'image' => 'img/nptel/nptel_faculty_achievement3.jpg',
        'badge' => 'Award',
        'icon' => 'trophy'
    ],
     [
        'name' => 'Gaurang Patel',
        'course' => 'Professor, AI & ML Department',
        'description' => 'Elite category in the NPTEL course Processing of Polymers and Polymer Composites.',
        'image' => 'img/nptel/nptel_faculty_achievement4.jpg',
        'badge' => 'Award',
        'icon' => 'trophy'
    ],

      [
        'name' => 'Maulik V. Shah',
        'course' => 'Professor, AI & ML Department',
        'description' => 'Elite category in the NPTEL course Basics of Finite Element Analysis – 2.',
        'image' => 'img/nptel/nptel_faculty_achievement5.jpg',
        'badge' => 'Award',
        'icon' => 'trophy'
    ],
      [
        'name' => 'Niyati Patel',
        'course' => 'Professor, AI & ML Department',
        'description' => 'Elite category in the NPTEL course Cloud Computing.',
        'image' => 'img/nptel/nptel_faculty_achievement6.jpg',
        'badge' => 'Award',
        'icon' => 'trophy'
    ],
     [
        'name' => 'Hari, Puja and Smit',
        'course' => 'B.Tech AI-ML, 2023',
        'description' => 'Toppers position in JUL-OCT-2024 NPTEL Course "DSA using JAVA"',
        'image' => 'img/students/student4.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'category' => 'topper'
    ],
    [
        'name' => 'Hari Patel and Devang Dhandhukiya',
        'course' => 'B.Tech AI-ML, 2023',
        'description' => 'Toppers position(Top 1%) in JAN-APR-2025 NPTEL Course "Database Management System"',
        'image' => 'img/students/student12.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'category' => 'topper'
    ],
    [
        'name' => 'Het Patel and Arya Shah',
        'course' => 'B.Tech AI-ML, 2023',
        'description' => 'Toppers position(Top 2%) in JAN-APR-2025 NPTEL Course "Database Management System"',
        'image' => 'img/students/student11.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'category' => 'topper'
    ],
    [
        'name' => 'Kashak and Yash',
        'course' => 'B.Tech AI-ML, 2023',
        'description' => 'Toppers position(Top 5%) in JAN-APR-2025 NPTEL Course "Database Management System"',
        'image' => 'img/students/student5.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'category' => 'topper'
    ],

    [
        'name' => 'Tanmay and Aaryan',
        'course' => 'B.Tech AI-ML, 2025',
        'description' => 'Elite category in the NPTEL course Problem solving through Programming in C.',
        'image' => 'img/students/student20.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'category' => 'topper'
    ],
    [
        'name' => 'Nyasia Patel',
        'course' => 'B.Tech AI-ML, 2024',
        'description' => 'Silver category in the NPTEL course Demystifying Networking.',
        'image' => 'img/students/student21.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'category' => 'topper'
    ],

    [
        'name' => 'Kunjalba and Devarshi',
        'course' => 'B.Tech AI-ML, 2023',
        'description' => 'Elite category in the NPTEL course Introduction to LLMs.',
        'image' => 'img/students/student22.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'category' => 'topper'
    ],

     [
        'name' => 'Priyanshu and Harsh',
        'course' => 'B.Tech AI-ML, 2024',
        'description' => 'Elite category in the NPTEL course Data Structures and Algorithms using Java.',
        'image' => 'img/students/student23.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'category' => 'topper'
    ],

     [
        'name' => 'Bansari, Yash and Nency',
        'course' => 'B.Tech AI-ML, 2024',
        'description' => 'Elite category in the NPTEL course Introduction to Machine Learing.',
        'image' => 'img/students/student24.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'category' => 'topper'
    ],
];
?>

<style>
    #faculty-achievements {
        padding: 60px 0 30px 0;
        background: #f8f9fa;
    }

    #faculty-achievements .achievement-item {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
        margin-bottom: 30px;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
        position: relative;
    }

    #faculty-achievements .achievement-item:hover {
        transform: translateY(-5px);
        box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.15);
    }

    #faculty-achievements .achievement-image {
        position: relative;
        height: 200px;
        min-height: 200px;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        overflow: hidden;
    }

    #faculty-achievements .achievement-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform 0.3s ease-in-out;
    }

    #faculty-achievements .achievement-item:hover .achievement-image img {
        transform: scale(1.05);
    }

    #faculty-achievements .achievement-overlay {
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

    #faculty-achievements .achievement-item:hover .achievement-overlay {
        opacity: 1;
    }

    #faculty-achievements .achievement-badge {
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
        z-index: 2;
    }

    #faculty-achievements .achievement-content {
        padding: 20px 15px;
        text-align: center;
        display: flex;
        flex-direction: column;
        min-height: 200px;
    }

    #faculty-achievements .achievement-content h4 {
        font-size: 18px;
        font-weight: 700;
        color: #0c2e8a;
        margin: 0 0 5px;
        font-family: "Montserrat", sans-serif;
        line-height: 1.3;
    }

    #faculty-achievements .achievement-content .faculty-position {
        color: #29cca3;
        font-size: 13px;
        font-weight: 600;
        margin: 0 0 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    #faculty-achievements .achievement-content p {
        color: #666;
        font-size: 14px;
        line-height: 1.5;
        margin: 10px 0 0;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        flex-grow: 1;
    }

    #faculty-achievements .achievement-icon {
        font-size: 48px;
        color: #fff;
    }

    /* Animation for section reveal */
    .achievement-item {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.6s ease-out forwards;
    }

    .achievement-item.visible {
        opacity: 1;
        transform: translateY(0);
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive design */
    @media (max-width: 768px) {
        #faculty-achievements .achievement-image {
            height: 200px;
        }

        #faculty-achievements .achievement-content {
            min-height: auto;
            padding: 20px 15px;
        }

        #faculty-achievements .achievement-content h4 {
            font-size: 16px;
        }
    }
</style>

<section id="faculty-achievements" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2 style="padding-top: 20px; color: #0c2e8a;">NPTEL Excellence</h2>
            <p>Recognizing our faculty's and students's outstanding achievements in NPTEL online certification courses</p>
        </div>

        <div class="row">
            <?php 
            $i=0;
            foreach ($facultyAchievements as $index => $achievement): 
                if($i==6)break;
                $i++;
                // Set fallback image based on index
                $fallbackImage = 'img/portfolio/' . (($index % 5) + 1) . '.JPG';
                if ($index >= 5) $fallbackImage = 'img/portfolio/4.jpg';
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="achievement-item" style="animation-delay: <?php echo ($index % 5 + 1) * 0.1; ?>s">
                    <div class="achievement-image">
                        <img src="<?php echo htmlspecialchars($achievement['image']); ?>" 
                             alt="<?php echo htmlspecialchars($achievement['name']); ?>" 
                             onerror="this.src='<?php echo $fallbackImage; ?>'">
                        <div class="achievement-overlay">
                            <i class="fa fa-<?php echo htmlspecialchars($achievement['icon']); ?> achievement-icon"></i>
                        </div>
                        <div class="achievement-badge"><?php echo htmlspecialchars($achievement['badge']); ?></div>
                    </div>
                    <div class="achievement-content">
                        <h4><?php echo htmlspecialchars($achievement['name']); ?></h4>
                        <div class="faculty-position"><?php echo htmlspecialchars($achievement['course']); ?></div>
                        <p><?php echo htmlspecialchars($achievement['description']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- View More Button -->
        <div class="row">
            <div class="col-12 text-center" style="margin-top: 30px;">
                <a href="?v=nptel_achievements_all" class="btn" style="background: linear-gradient(45deg, #0c2e8a 0%, #29cca3 100%); color: #fff; padding: 12px 30px; border-radius: 25px; font-weight: 600; text-decoration: none; transition: all 0.3s ease;">
                    View All Achievements
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    // Add animation classes when elements come into view
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.achievement-item').forEach((item, index) => {
            item.style.animationDelay = `${(index % 5 + 1) * 0.1}s`;
            observer.observe(item);
        });
    });
</script>