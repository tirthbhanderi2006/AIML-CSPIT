<?php
// Faculty and Student Achievements Data
$achievements = [
    // Faculty Achievements
    [
        'name' => 'Jalpesh Vasa',
        'course' => 'Professor, AI & ML Department',
        'description' => 'Elite + Silver in the NPTEL course Privacy and Security in Online Social Media.',
        'image' => 'img/nptel/nptel_faculty_achievement1.jpg',
        'badge' => 'Award',
        'icon' => 'trophy',
        'type' => 'faculty'
    ],
    [
        'name' => 'Deep Mendha',
        'course' => 'Professor, AI & ML Department',
        'description' => 'Elite category in the NPTEL course Programming with Generative AI.',
        'image' => 'img/nptel/nptel_faculty_achievement2.jpg',
        'badge' => 'Award',
        'icon' => 'trophy',
        'type' => 'faculty'
    ],
    [
        'name' => 'Nishant Koshti',
        'course' => 'Professor, AI & ML Department',
        'description' => 'Elite category in the NPTEL course Cloud Computing.',
        'image' => 'img/nptel/nptel_faculty_achievement3.jpg',
        'badge' => 'Award',
        'icon' => 'trophy',
        'type' => 'faculty'
    ],
    [
        'name' => 'Gaurang Patel',
        'course' => 'Professor, AI & ML Department',
        'description' => 'Elite category in the NPTEL course Processing of Polymers and Polymer Composites.',
        'image' => 'img/nptel/nptel_faculty_achievement4.jpg',
        'badge' => 'Award',
        'icon' => 'trophy',
        'type' => 'faculty'
    ],
    [
        'name' => 'Maulik V. Shah',
        'course' => 'Professor, AI & ML Department',
        'description' => 'Elite category in the NPTEL course Basics of Finite Element Analysis – 2.',
        'image' => 'img/nptel/nptel_faculty_achievement5.jpg',
        'badge' => 'Award',
        'icon' => 'trophy',
        'type' => 'faculty'
    ],
    [
        'name' => 'Niyati Patel',
        'course' => 'Professor, AI & ML Department',
        'description' => 'Elite category in the NPTEL course Cloud Computing.',
        'image' => 'img/nptel/nptel_faculty_achievement6.jpg',
        'badge' => 'Award',
        'icon' => 'trophy',
        'type' => 'faculty'
    ],
    
    // Student Achievements
    [
        'name' => 'Hari, Puja and Smit',
        'course' => 'B.Tech AI-ML, 2023',
        'description' => 'Toppers position in JUL-OCT-2024 NPTEL Course "DSA using JAVA"',
        'image' => 'img/students/student4.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'type' => 'student'
    ],
    [
        'name' => 'Hari Patel and Devang Dhandhukiya',
        'course' => 'B.Tech AI-ML, 2023',
        'description' => 'Toppers position(Top 1%) in JAN-APR-2025 NPTEL Course "Database Management System"',
        'image' => 'img/students/student12.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'type' => 'student'
    ],
    [
        'name' => 'Het Patel and Arya Shah',
        'course' => 'B.Tech AI-ML, 2023',
        'description' => 'Toppers position(Top 2%) in JAN-APR-2025 NPTEL Course "Database Management System"',
        'image' => 'img/students/student11.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'type' => 'student'
    ],
    [
        'name' => 'Kashak and Yash',
        'course' => 'B.Tech AI-ML, 2023',
        'description' => 'Toppers position(Top 5%) in JAN-APR-2025 NPTEL Course "Database Management System"',
        'image' => 'img/students/student5.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'type' => 'student'
    ],
    [
        'name' => 'Tanmay and Aaryan',
        'course' => 'B.Tech AI-ML, 2025',
        'description' => 'Elite category in the NPTEL course Problem solving through Programming in C.',
        'image' => 'img/students/student20.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'type' => 'student'
    ],
    [
        'name' => 'Nyasia Patel',
        'course' => 'B.Tech AI-ML, 2024',
        'description' => 'Silver category in the NPTEL course Demystifying Networking.',
        'image' => 'img/students/student21.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'type' => 'student'
    ],
    [
        'name' => 'Kunjalba and Devarshi',
        'course' => 'B.Tech AI-ML, 2023',
        'description' => 'Elite category in the NPTEL course Introduction to LLMs.',
        'image' => 'img/students/student22.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'type' => 'student'
    ],
    [
        'name' => 'Priyanshu and Harsh',
        'course' => 'B.Tech AI-ML, 2024',
        'description' => 'Elite category in the NPTEL course Data Structures and Algorithms using Java.',
        'image' => 'img/students/student23.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'type' => 'student'
    ],
    [
        'name' => 'Bansari, Yash and Nency',
        'course' => 'B.Tech AI-ML, 2024',
        'description' => 'Elite category in the NPTEL course Introduction to Machine Learning.',
        'image' => 'img/students/student24.jpg',
        'badge' => 'Topper',
        'icon' => 'rocket',
        'type' => 'student'
    ]
];
?>

<style>
#student-achievements-all {
  padding: 60px 0 30px 0;
  background: #f8f9fa;
}

.achievement-item-full {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.08);
  margin-bottom: 40px;
  overflow: hidden;
  transition: all 0.3s ease-in-out;
  opacity: 0;
  transform: translateY(20px);
}

.achievement-item-full.visible {
  opacity: 1;
  transform: translateY(0);
}

.achievement-item-full:hover {
  transform: translateY(-8px);
  box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15);
}

.achievement-row {
  display: flex;
  align-items: center;
  padding: 0;
}

.achievement-image-full {
  flex: 0 0 200px;
  height: 200px;
  overflow: hidden;
  position: relative;
}

.achievement-image-full img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: all 0.3s ease-in-out;
}

.achievement-item-full:hover .achievement-image-full img {
  transform: scale(1.1);
}

.achievement-content-full {
  flex: 1;
  padding: 30px;
}

.achievement-content-full h3 {
  font-size: 24px;
  font-weight: 700;
  color: #0c2e8a;
  margin-bottom: 8px;
  font-family: "Montserrat", sans-serif;
}

.achievement-course-full {
  color: #29cca3;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 15px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.achievement-description-full {
  color: #666;
  font-size: 16px;
  line-height: 1.7;
  margin-bottom: 20px;
}

.achievement-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}

.achievement-tag {
  background: linear-gradient(45deg, #0c2e8a 0%, #29cca3 100%);
  color: #fff;
  padding: 6px 15px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.filter-buttons {
  text-align: center;
  margin-bottom: 50px;
}

.filter-btn {
  background: #fff;
  border: 2px solid #0c2e8a;
  color: #0c2e8a;
  padding: 10px 25px;
  margin: 5px;
  border-radius: 25px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}

.filter-btn:hover,
.filter-btn.active {
  background: linear-gradient(45deg, #0c2e8a 0%, #29cca3 100%);
  color: #fff;
  border-color: transparent;
}

/* Responsive design */
@media (max-width: 768px) {
  .achievement-row {
    flex-direction: column;
  }
  
  .achievement-image-full {
    flex: none;
    width: 100%;
    height: 250px;
  }
  
  .achievement-content-full {
    padding: 20px;
  }
  
  .achievement-content-full h3 {
    font-size: 20px;
  }
}

.stats-section {
  background: linear-gradient(45deg, #0c2e8a 0%, #29cca3 100%);
  color: #fff;
  padding: 60px 0;
  margin-bottom: 60px;
}

.stat-item {
  text-align: center;
  padding: 20px;
}

.stat-number {
  font-size: 48px;
  font-weight: 700;
  margin-bottom: 10px;
  font-family: "Montserrat", sans-serif;
}

.stat-label {
  font-size: 16px;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 600;
}
</style>

<main id="main">
  <section id="student-achievements-all">
    <div class="container">
      <div class="section-header">
        <h2 style="padding-top: 20px">NPTEL Excellence</h2>
        <p>Recognizing our faculty's and students's outstanding achievements in NPTEL online certification courses</p>
      </div>
      <!-- <div class="stats-section">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-number"><?php echo count($achievements); ?></div>             
               <div class="stat-label">Awards Won</div>
            </div>
          </div>          
        </div>
      </div> -->

      <!-- Filter Buttons -->
      <div class="filter-buttons">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="faculty">Faculties</button>
        <button class="filter-btn" data-filter="student">Students</button>
      </div>

      <!-- Achievements List -->
      <div class="achievements-container">
        <?php 
        $achievementIndex = 0;
        foreach ($achievements as $achievement): 
            $fallbackImage = 'img/portfolio/' . (++$achievementIndex) . 
                           (strpos(strtolower($achievement['image']), '.jpg') !== false ? '.JPG' : '.jpg');
        ?>
        <div class="achievement-item-full" data-type="<?php echo htmlspecialchars($achievement['type']); ?>">
          <div class="achievement-row">
            <div class="achievement-image-full">
              <?php
              $imagePath = file_exists($achievement['image']) ? $achievement['image'] : 'img/default-achievement.jpg';
              ?>
              <img src="<?php echo htmlspecialchars($imagePath); ?>" 
                   alt="<?php echo htmlspecialchars($achievement['name']); ?>"
                   onerror="this.onerror=null; this.src='img/default-achievement.jpg'">
            </div>
            <div class="achievement-content-full">
              <h3><?php echo htmlspecialchars($achievement['name']); ?></h3>
              <div class="achievement-course-full"><?php echo htmlspecialchars($achievement['course']); ?></div>
              <div class="achievement-description-full">
                <?php echo htmlspecialchars($achievement['description']); ?>
              </div>
              <div class="achievement-tags">
                <span class="achievement-tag"><?php echo htmlspecialchars($achievement['badge']); ?></span>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<script>
// Filter achievements by type
function filterAchievements(type) {
    const items = document.querySelectorAll('.achievement-item-full');
    const buttons = document.querySelectorAll('.filter-btn');
    
    // Update active button
    buttons.forEach(btn => {
        btn.classList.toggle('active', btn.dataset.filter === type);
    });
    
    // Filter items with animation
    items.forEach((item, index) => {
        const itemType = item.dataset.type;
        if (type === 'all' || itemType === type) {
            item.style.display = 'block';
            setTimeout(() => {
                item.classList.add('visible');
            }, 100 + (index * 50));
        } else {
            item.classList.remove('visible');
            setTimeout(() => {
                item.style.display = 'none';
            }, 300);
        }
    });
}

// Add event listeners to filter buttons
document.addEventListener('DOMContentLoaded', function() {
    // Add click handlers to filter buttons
    document.querySelectorAll('.filter-btn').forEach(button => {
        button.addEventListener('click', function() {
            filterAchievements(this.dataset.filter);
        });
    });
    
    // Initial animation
    const items = document.querySelectorAll('.achievement-item-full');
    items.forEach((item, index) => {
        setTimeout(() => {
            item.classList.add('visible');
        }, index * 100);
    });
    
    // Show all achievements by default
    filterAchievements('all');
});
</script>
