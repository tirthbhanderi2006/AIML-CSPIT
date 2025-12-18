<?php
// Faculty Achievements Data
$facultyAchievements = [

       [
        'name' => 'Dr. Nirav Bhatt',
        'course' => 'HOD, AIML Department',
        'description' => 'Awarded for his remarkable paper  "Future of LLMs and Digital Twins in Precision Healthcare" published in the Journal of Propulsion Technology! ',
        'image' => 'img/faculties/faculty_achievement1.jpg',
        'badge' => 'Award',
        'icon' => 'trophy'
    ],
    [
        'name' => 'Bhargav Shobhana',
        'course' => 'Professor, AIML Department',
        'description' => 'Awarded for his remarkable paper "Eddy Current Dampers for Seismic Vibration Control" published in the Journal of Vibration Engineering & Technologies! ',
        'image' => 'img/faculties/faculty_achievement2.jpg',
        'badge' => 'Award',
        'icon' => 'trophy'
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
            <h2 style="padding-top: 20px; color: #0c2e8a;">Faculty Achievements</h2>
            <p>Celebrating the accomplishments and contributions of our esteemed faculty members</p>
        </div>

        <div class="row">
            <?php foreach ($facultyAchievements as $index => $achievement): 
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