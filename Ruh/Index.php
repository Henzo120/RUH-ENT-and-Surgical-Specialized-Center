<?php
// Admin-controlled hero content (unchanged)
$hero = [
    'h2' => "Expert Head & Neck Care in Hawassa",
    'paragraph' => "Hawassa Head Specialty Hospital provides compassionate, world-class treatment for ear, nose, throat, eye, neurology, and maxillofacial conditions. Our specialists deliver the best outcomes using modern technology.",
    'counters' => [
        ['label' => 'Patients Treated', 'value' => 5000],
        ['label' => 'Specialized Doctors', 'value' => 20]
    ]
];

$hospital_name = "RUH ENT and Surgical Specialized Center";
$email = "info@rueh.com";
$phone = "+251 911 234 567";
$address = "Hawassa, Sidama Region, Ethiopia";
$hosname = "Ruh";

// About Us – admin controllable
$about = [
    'dr_image'       => './Asset/img/About/about.JPG',
    'dr_name'        => 'Dr. Ruh',
    'dr_title'       => 'Founder & CEO of Ruh',
    'paragraph'      => 'Dr. Ruh established Hawassa Head Specialty Hospital with a vision to bring advanced, compassionate head and neck care to the people of Sidama and beyond. With over 15 years of specialized experience in ENT, maxillofacial, and neurosurgery, he leads a team dedicated to excellence, innovation, and patient-centered treatment. Our hospital combines modern technology with deep respect for Ethiopian values of community and care. We are committed to serving every patient with dignity, precision, and the highest standards of medical practice.',
    'read_more_link' => '#',
    'counters'       => [                           // ← only 3 counters now
        ['number' => 5000,  'label' => 'Patients Treated'],
        ['number' => 7,    'label' => 'Years '],
        ['number' => 20,    'label' => 'Specialized Doctors']
    ]
];

$hospital_name = "Hawassa Head Specialty Hospital";
$email = "info@rueh.com";
$phone = "+251 911 234 567";
$address = "Hawassa, Sidama Region, Ethiopia";


// Services – fully admin-controllable
$services = [
    [
        'title'       => 'ENT & Hearing Services',
        'description' => 'Diagnosis and treatment of ear infections, sinus problems, hearing loss, vertigo, voice disorders and throat conditions using modern endoscopic and audiometric equipment.',
        'icon'        => 'fa-ear-listen',
        'image'       => './Asset/img/services/1.JPG',
        'side'        => 'left'   // image on left
    ],
    [
        'title'       => 'Neurology & Neurosurgery',
        'description' => 'Expert care for headaches, stroke, epilepsy, brain tumors, spine disorders and nerve injuries with advanced imaging and microsurgical techniques.',
        'icon'        => 'fa-brain',
        'image'       => './Asset/img/services/2.JPG',
        'side'        => 'right'  // image on right (zigzag)
    ],
    [
        'title'       => 'Ophthalmology & Eye Care',
        'description' => 'Comprehensive eye examinations, cataract surgery, glaucoma management, retina disorders and vision correction services with state-of-the-art laser technology.',
        'icon'        => 'fa-eye',
        'image'       => './Asset/img/services/3.jpg',
        'side'        => 'left'
    ],
    [
        'title'       => 'Oral & Maxillofacial Surgery',
        'description' => 'Treatment of dental infections, jaw fractures, facial trauma, oral cancers, wisdom teeth removal and reconstructive procedures in modern operating theatre.',
        'icon'        => 'fa-tooth',
        'image'       => './Asset/img/services/4.JPG',
        'side'        => 'right'
    ]
];

// Doctors data – admin controllable
$doctors = [
    [
        'name'          => 'Dr. Ruh',
        'title'         => 'ENT & Head-Neck Surgeon',
        'experience'    => '15+ yrs',
        'photo'         => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400',
        'instagram'     => 'https://instagram.com/dr.ruh.official',
        'linkedin'      => 'https://linkedin.com/in/dr-ruh',
    ],
    [
        'name'          => 'Dr. Alemayehu',
        'title'         => 'Neurologist',
        'experience'    => '12 yrs',
        'photo'         => 'https://images.pexels.com/photos/4167541/pexels-photo-4167541.jpeg?w=400',
        'instagram'     => 'https://instagram.com/dr.alemayehu',
        'linkedin'      => 'https://linkedin.com/in/dr-alemayehu',
    ],
    [
        'name'          => 'Dr. Selamawit',
        'title'         => 'Ophthalmologist',
        'experience'    => '10 yrs',
        'photo'         => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400',
        'instagram'     => 'https://instagram.com/dr.selamawit',
        'linkedin'      => 'https://linkedin.com/in/dr-selamawit',
    ],
    [
        'name'          => 'Dr. Yonas',
        'title'         => 'Maxillofacial Surgeon',
        'experience'    => '9 yrs',
        'photo'         => 'https://images.pexels.com/photos/5715905/pexels-photo-5715905.jpeg?w=400',
        'instagram'     => 'https://instagram.com/dr.yonas.abera',
        'linkedin'      => 'https://linkedin.com/in/dr-yonas-abera',
    ],
    [
        'name'          => 'Dr. Eyerusalem',
        'title'         => 'Audiologist',
        'experience'    => '8 yrs',
        'photo'         => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400',
        'instagram'     => 'https://instagram.com/dr.eyerusalem',
        'linkedin'      => 'https://linkedin.com/in/dr-eyerusalem',
    ],
    [
        'name'          => 'Dr. Yonas',
        'title'         => 'Maxillofacial Surgeon',
        'experience'    => '9 yrs',
        'photo'         => 'https://images.pexels.com/photos/5715905/pexels-photo-5715905.jpeg?w=400',
        'instagram'     => 'https://instagram.com/dr.yonas.abera',
        'linkedin'      => 'https://linkedin.com/in/dr-yonas-abera',
    ],
];

// Patient Stories – admin controllable
$testimonials = [
    [
        'name'      => 'Abebech M.',
        'title'     => 'Patient from Hawassa',
        'review'    => 'After years of sinus issues, Dr. Ruh’s surgery changed my life. I breathe freely now and sleep peacefully. The team was incredibly caring.',
        'avatar'    => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400',
        'instagram' => 'https://instagram.com/abebech_m',
        'linkedin'  => 'https://linkedin.com/in/abebech-m',
    ],
    [
        'name'      => 'Tewodros K.',
        'title'     => 'Patient from Shashamane',
        'review'    => 'Cataract surgery was fast and painless. I can see clearly again without glasses. Thank you Dr. Selamawit and the wonderful staff!',
        'avatar'    => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400',
        'instagram' => 'https://instagram.com/tewodros_k',
        'linkedin'  => 'https://linkedin.com/in/tewodros-k',
    ],
    [
        'name'      => 'Fatuma A.',
        'title'     => 'Mother from Yirgalem',
        'review'    => 'My son’s jaw surgery was successful. Dr. Yonas explained everything clearly. The nurses were kind — we felt truly cared for.',
        'avatar'    => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400',
        'instagram' => 'https://instagram.com/fatuma_a',
        'linkedin'  => 'https://linkedin.com/in/fatuma-a',
    ],
    [
        'name'      => 'Dawit G.',
        'title'     => 'Patient from Dilla',
        'review'    => 'After my stroke, Dr. Alemayehu’s treatment helped me walk again. This hospital gave me a second chance. Highly recommended!',
        'avatar'    => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400',
        'instagram' => 'https://instagram.com/dawit_g',
        'linkedin'  => 'https://linkedin.com/in/dawit-g',
    ],
];

// Contact Us – admin controllable
$contact = [
    'address'       => 'Hawassa Head Specialty Hospital<br>Tabor Sub-City, Near Lake Hawassa<br>Hawassa, Sidama Region, Ethiopia',
    'map_embed'     => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.234567890123!2d38.476123456789!3d7.062345678901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDMnNDQuNCJOIDM4wrAyOCczNC4wIkU!5e0!3m2!1sen!2set!4v1698765432100!5m2!1sen!2set',
    'phone_main'    => '+251 911 234 567',
    'phone_emerg'   => '+251 911 999 888',
    'whatsapp'      => '+251 911 234 567',
    'email'         => 'info@rueh.com',
    'hours'         => 'Monday – Friday: 8:00 AM – 8:00 PM<br>Saturday: 8:00 AM – 5:00 PM<br>Sunday & Holidays: Emergency Only (24/7)',
    'directions'    => 'From Hawassa Main Bus Station: 10–12 minutes drive toward Tabor. Free parking inside the hospital compound.',
    'social'        => [
        'facebook'  => 'https://facebook.com/hawassaheadhospital',
        'telegram'  => 'https://t.me/hawassaheadhospital',
        'instagram' => 'https://instagram.com/hawassaheadhospital',
        'whatsapp'  => 'https://wa.me/251911234567',
    ],
];
// Footer – fully admin controllable
$footer = [
    'logo'          => './Asset/img/logo/ruh.png', // your hospital logo
    'name'          => ' RUH ENT and Surgical Specialized Center',
    'tagline'       => 'Expert Care for Head, Neck, ENT, Eye, Brain & Oral Health',
    'address'       => 'Tabor Sub-City, Near Lake Hawassa<br>Hawassa, Sidama Region, Ethiopia',
    'phone_main'    => '+251 911 234 567',
    'phone_emerg'   => '+251 911 999 888',
    'whatsapp'      => '+251 911 234 567',
    'email'         => 'info@rueh.com',
    'social'        => [
        'facebook'  => 'https://facebook.com/hawassaheadhospital',
        'telegram'  => 'https://t.me/hawassaheadhospital',
        'instagram' => 'https://instagram.com/hawassaheadhospital',
        'whatsapp'  => 'https://wa.me/251911234567',
    ],
    'quick_links'   => [
        'Home'          => '#',
        'About'         => '#about',
        'Services'      => '#services',
        'Doctors'       => '#doctors',
        'Patient Stories' => '#testimonials',
        'Contact'       => '#Contact',
    ],
];

// Accreditations – admin controllable with placeholder images
$accreditations = [
    [
        'name' => 'JCI',
        'logo' => 'https://via.placeholder.com/120x60?text=JCI',
        'link' => 'https://www.jointcommissioninternational.org/',
    ],
    [
        'name' => 'ISO 9001',
        'logo' => 'https://via.placeholder.com/120x60?text=ISO+9001',
        'link' => 'https://www.iso.org/iso-9001-quality-management.html',
    ],
    [
        'name' => 'National Health Authority',
        'logo' => 'https://via.placeholder.com/120x60?text=NHA',
        'link' => '#',
    ],
];

// Global Partners – admin controllable with placeholder images
$partners = [
    [
        'name' => 'WHO',
        'logo' => 'https://via.placeholder.com/100x100?text=WHO',
        'link' => 'https://www.who.int/',
    ],
    [
        'name' => 'International ENT Society',
        'logo' => 'https://via.placeholder.com/100x100?text=ENT+Society',
        'link' => 'https://www.ent-society.org/',
    ],
    [
        'name' => 'Global Medical Partners',
        'logo' => 'https://via.placeholder.com/100x100?text=Global+Medical',
        'link' => 'https://www.globalmedicalpartners.com/',
    ],
    [
        'name' => 'African Health Alliance',
        'logo' => 'https://via.placeholder.com/100x100?text=African+Health',
        'link' => 'https://www.africahealth.org/',
    ],
];
// Technology – admin controllable (now with images instead of icons)
$technology = [
    'title' => 'Advanced Medical Technology',
    'subtitle' => 'We combine cutting-edge tools with expert care to deliver precise, safe, and effective treatment',
    'items' => [
        [
            'image' => 'https://images.unsplash.com/photo-1584982751601-97dcc096659c?auto=format&fit=crop&q=80', // modern operating room microscope / ENT
            'title' => 'High-Definition Endoscopy & Surgical Microscopy',
            'description' => 'Advanced HD & 4K endoscopic systems and surgical microscopes for minimally invasive ENT, sinus, laryngeal, and skull-base procedures with maximum precision.'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1581595220165-d9d2a1a1e6f4?auto=format&fit=crop&q=80', // neuronavigation / brain imaging setup
            'title' => 'Advanced Neuro-Imaging & Navigation',
            'description' => 'High-resolution MRI, CT, and intraoperative neuronavigation systems for brain, spine, and nerve surgeries — allowing safer and more accurate interventions.'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1576092768241-dec2310aa0f5?auto=format&fit=crop&q=80', // eye laser / femtosecond setup
            'title' => 'State-of-the-Art Ophthalmic Lasers & Imaging',
            'description' => 'Phacoemulsification systems, femtosecond lasers, optical coherence tomography (OCT), and advanced visual field analyzers for cataract, glaucoma, and retinal treatments.'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1581595220165-d9d2a1a1e6f4?auto=format&fit=crop&q=80', // maxillofacial / 3D imaging (reuse or replace with CBCT photo)
            'title' => 'Modern Maxillofacial & 3D Planning Technology',
            'description' => '3D cone-beam CT, piezosurgery, and computer-guided systems for jaw fractures, facial trauma, oral cancers, and reconstructive procedures.'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1586776976031-76b0a6d8a20e?auto=format&fit=crop&q=80', // robotic / minimally invasive surgery
            'title' => 'Minimally Invasive & Precision Techniques',
            'description' => 'Endoscopic, transoral, and advanced assisted methods to reduce recovery time, scarring, and complications in head & neck procedures.'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1584982751601-97dcc096659c?auto=format&fit=crop&q=80', // sterile OR / safety tech
            'title' => 'Sterilization & Infection Control Systems',
            'description' => 'Latest plasma sterilizers, HEPA-filtered theatres, and international-standard protocols for maximum patient safety.'
        ],
    ]
];
// Why Choose Us – admin controllable
$why_choose_us = [
    'title' => 'Why Choose RUH?',
    'subtitle' => 'Your trusted partner for advanced head, neck, ENT, eye, brain & oral care in Hawassa and beyond',
    'items' => [
        [
            'icon' => 'fa-user-md',
            'title' => 'Specialized Expertise',
            'description' => 'Led by Dr. Ruh and a dedicated team of ENT, neurosurgery, ophthalmology, and maxillofacial specialists with 10–15+ years of focused experience — rare in the region.'
        ],
        [
            'icon' => 'fa-hospital-user',
            'title' => 'Patient-Centered Ethiopian Care',
            'description' => 'We blend world-class treatment with deep respect for our community values — compassionate, respectful, and culturally sensitive care for every patient from Sidama and beyond.'
        ],
        [
            'icon' => 'fa-microscope',
            'title' => 'Modern Technology & Safety',
            'description' => 'Advanced endoscopy, neuro-navigation, OCT lasers, 3D imaging, and strict sterilization — delivering precise, minimally invasive results with maximum safety.'
        ],
        [
            'icon' => 'fa-heartbeat',
            'title' => 'Comprehensive Head & Neck Focus',
            'description' => 'One specialized center for ENT, hearing, neurology, eye, jaw, and facial conditions — no need to travel far or coordinate multiple hospitals.'
        ],
        [
            'icon' => 'fa-users',
            'title' => 'Thousands of Happy Patients',
            'description' => 'Over 5,000 patients treated with life-changing outcomes, backed by real stories of restored vision, hearing, breathing, and smiles.'
        ],
        [
            'icon' => 'fa-map-marker-alt',
            'title' => 'Convenient Hawassa Location',
            'description' => 'Easy access near Lake Hawassa with free parking, extended hours, emergency 24/7 support, and WhatsApp booking — made for our local families.'
        ]
    ]
];
// Before/After Success Cases – use your own consented images or placeholders/stock
$success_cases = [
    'title' => 'Real Results – Before & After',
    'subtitle' => 'See how our specialized treatments have transformed lives in ENT, eye, neurology, and maxillofacial care',
    'cases' => [
        [
            'title' => 'Cataract Surgery – Restored Clear Vision',
            'before' => 'https://images.unsplash.com/photo-1570549717489-4d5a6e3e4e8e?auto=format&fit=crop&q=80', // cloudy eye simulation
            'after'  => 'https://images.unsplash.com/photo-1570549717489-4d5a6e3e4e8e?auto=format&fit=crop&q=80', // clear eye (replace with real pair)
            'desc'   => 'Patient regained sharp, colorful vision after quick, painless phacoemulsification procedure.'
        ],
        [
            'title' => 'Endoscopic Sinus Surgery – Better Breathing',
            'before' => 'https://images.unsplash.com/photo-1584982751601-97dcc096659c?auto=format&fit=crop&q=80', // congested sinus area
            'after'  => 'https://images.unsplash.com/photo-1586776976031-76b0a6d8a20e?auto=format&fit=crop&q=80', // clear nasal passage
            'desc'   => 'Chronic sinusitis resolved – patient now breathes freely without pain or congestion.'
        ],
        [
            'title' => 'Orthognathic Jaw Surgery – Improved Bite & Profile',
            'before' => 'https://images.unsplash.com/photo-1581595220165-d9d2a1a1e6f4?auto=format&fit=crop&q=80', // misaligned jaw example
            'after'  => 'https://images.unsplash.com/photo-1576092768241-dec2310aa0f5?auto=format&fit=crop&q=80', // balanced face
            'desc'   => 'Corrected jaw alignment for better chewing, speech, and facial harmony.'
        ],
        // Add 1–3 more real cases when you have consented photos
    ]
];
// FAQ – admin controllable
$faq = [
    'title' => 'Frequently Asked Questions',
    'subtitle' => 'Quick answers to common questions about our services, appointments, and care',
    'questions' => [
        [
            'q' => 'How do I book an appointment?',
            'a' => 'You can book via WhatsApp (+251 911 234 567), phone call, or our online form in the Contact section. Emergency cases are seen 24/7.'
        ],
        [
            'q' => 'Do you accept insurance or payment plans?',
            'a' => 'We work with major local insurance providers. Please contact us with your insurance details for verification. Flexible payment options are available for some procedures.'
        ],
        [
            'q' => 'What should I bring to my first visit?',
            'a' => 'Bring any previous medical records, imaging (CT/MRI), current medications list, and ID. For eye/ENT visits, avoid wearing contact lenses if possible.'
        ],
        [
            'q' => 'How long is recovery after ENT or eye surgery?',
            'a' => 'Most endoscopic ENT procedures allow return to light activities in 3–7 days. Cataract surgery recovery is usually 1–2 weeks with full vision improvement in 4–6 weeks. We provide detailed post-op instructions.'
        ],
        [
            'q' => 'Is your hospital equipped for pediatric cases?',
            'a' => 'Yes – we have child-friendly facilities and experienced specialists for pediatric ENT, eye, and maxillofacial conditions.'
        ],
        [
            'q' => 'Do you offer second opinions?',
            'a' => 'Absolutely. Many patients come to us for second opinions on complex head & neck, neurological, or eye conditions.'
        ]
    ]
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $hospital_name; ?> Home page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" type="image/png" href="./Asset/img/logo/Logo.jpg">
    <link rel="stylesheet" href="./Asset/css/hero-header.css">
    <link rel="stylesheet" href="./Asset/css/about.css">
    <link rel="stylesheet" href="./Asset/css/Servicess.css">
    <link rel="stylesheet" href="./Asset/css/doctores.css">
    <link rel="stylesheet" href="./Asset/css/doctores.css">
    <link rel="stylesheet" href="./Asset/css/technology.css">
    <link rel="stylesheet" href="./Asset/css/choose.css">
    <link rel="stylesheet" href="./Asset/css/Stories.css">
    <link rel="stylesheet" href="./Asset/css/partner.css">
    <link rel="stylesheet" href="./Asset/css/Contact-us.css">
    <link rel="stylesheet" href="./Asset/css/Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        /* Hamburger visibility control */
        .hamburger {
            display: none !important;
        }

        @media (max-width: 992px) {
            .hamburger {
                display: block !important;
                font-size: 1.8rem;
                cursor: pointer;
                color: inherit;
            }
        }
    </style>
</head>


<body>



    <!-- Header -->
    <header class="transparent" id="main-header">
        <a href="index.php" class="logo">
            <img src="./Asset/img/logo/ruh.png" alt="Logo">
        </a>

        <div class="nav-desktop">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Doctors</a>
            <a href="#">Contact</a>
        </div>

        <!-- Right side clickable contact info -->
        <div class="header-info">
            <a href="tel:+251911223344" class="contact-link">
                <i class="fas fa-phone-alt"></i> +251 911 223 344
            </a>
            |
            <a href="mailto:info@ruhent.com" class="contact-link">
                <i class="fas fa-envelope"></i> info@ruhent.com
            </a>
        </div>

        <i class="fas fa-bars hamburger" id="hamburger"></i>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <i class="fas fa-times close-btn" id="closeMenu"></i>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Doctors</a>
        <a href="#">Contact</a>
    </div>
    <!-- Right Floating Social Sidebar -->
    <div class="social-sidebar">
        <a href="https://facebook.com/hawassaheadhospital" target="_blank" class="sidebar-icon facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://wa.me/251911234567" target="_blank" class="sidebar-icon whatsapp">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://instagram.com/hawassaheadhospital" target="_blank" class="sidebar-icon instagram">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://t.me/hawassaheadhospital" target="_blank" class="sidebar-icon telegram">
            <i class="fab fa-telegram-plane"></i>
        </a>
    </div>

    <!-- Hero -->
    <section class="hero">
        <div class="slideshow">
            <div class="slide active" style="background-image: url('./Asset/img/slide/slide4.JPG');"></div>
            <div class="slide" style="background-image: url('./Asset/img/slide/slide3.JPG');"></div>
            <div class="slide" style="background-image: url('./Asset/img/slide/slide4.JPG');"></div>
            <div class="slide" style="background-image: url('./Asset/img/slide/slide3.JPG');"></div>
        </div>

        <div class="overlay"></div>

        <div class="hero-content">
            <h2 class="hero-title"><?php echo $hero['h2']; ?></h2>
            <p class="hero-paragraph"><?php echo $hero['paragraph']; ?></p>

            <div class="counters">
                <?php foreach ($hero['counters'] as $c): ?>
                    <div class="counter">
                        <div class="counter-number" data-target="<?php echo $c['value']; ?>">0+</div>
                        <p><?php echo $c['label']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- About Us Section -->
    <section class="about-section" id="about">
        <div class="section-header">
            <h2 class="section-title">About</h2>
            <div class="title-underline"></div>
        </div>

        <div class="about-container">
            <div class="about-left about-animated">
                <img src="<?php echo $about['dr_image']; ?>" alt="<?php echo $about['dr_name']; ?>" class="dr-image">

                <div class="dr-info">
                    <h3><?php echo $about['dr_name']; ?></h3>
                    <div class="dr-title"><?php echo $about['dr_title']; ?></div>
                </div>
            </div>

            <div class="about-right about-animated">
                <p class="about-text"><?php echo $about['paragraph']; ?></p>

                <a href="<?php echo $about['read_more_link']; ?>" class="read-more-btn">Read More</a>

                <div class="counters-grid">
                    <?php foreach ($about['counters'] as $index => $counter): ?>
                        <div class="counter-item about-animated" style="animation-delay: <?php echo 0.6 + $index * 0.2; ?>s;">
                            <div class="counter-number" data-target="<?php echo $counter['number']; ?>">0+</div>
                            <p class="counter-label"><?php echo $counter['label']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section class="services-section">
        <div class="section-header">
            <h2 class="section-title">Our Services</h2>
            <div class="title-underline"></div>
        </div>

        <div class="services-container">
            <?php foreach ($services as $service): ?>
                <div class="service-item <?= $service['side'] === 'right' ? 'reverse' : '' ?>">
                    <div class="service-image">
                        <img src="<?= $service['image'] ?>" alt="<?= $service['title'] ?>" loading="lazy">
                    </div>

                    <div class="service-content">
                        <h3 class="service-title"><?= $service['title'] ?></h3>
                        <p class="service-desc"><?= $service['description'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Doctors Section -->
    <section class="doctors-section">
        <div class="section-header">
            <h2 class="section-title">Our Specialists</h2>
            <div class="title-underline"></div>
        </div>
        <div class="doctors-grid"> <?php foreach ($doctors as $doctor): ?> <div class="doctor-card">
                    <div class="doctor-photo"> <img src="<?= $doctor['photo'] ?>" alt="<?= $doctor['name'] ?>"> </div>
                    <div class="doctor-info">
                        <h3 class="doctor-name"><?= $doctor['name'] ?></h3>
                        <p class="doctor-title"><?= $doctor['title'] ?></p>
                        <p class="doctor-exp"><?= $doctor['experience'] ?></p>
                        <div class="doctor-social"> <a href="<?= $doctor['instagram'] ?>" target="_blank" class="social-link"> <i class="fab fa-instagram"></i> </a> <a href="<?= $doctor['linkedin'] ?>" target="_blank" class="social-link"> <i class="fab fa-linkedin-in"></i> </a> </div>
                    </div>
                </div> <?php endforeach; ?> </div>
    </section>
    <!-- Technology / Advanced Equipment Section -->
    <section class="technology-section" id="technology">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">Our Technology</h2>
            <div class="title-underline"></div>
            <p class="section-subtitle"><?php echo $technology['subtitle']; ?></p>
        </div>

        <div class="technology-grid">
            <?php foreach ($technology['items'] as $index => $tech): ?>
                <div class="tech-card"
                    data-aos="fade-up"
                    data-aos-delay="<?php echo $index * 100; ?>" <!-- stagger: 0ms, 100ms, 200ms, ... -->
                    data-aos-duration="700">

                    <div class="tech-image-container">
                        <img src="<?php echo $tech['image']; ?>"
                            alt="<?php echo $tech['title']; ?>"
                            class="tech-image"
                            loading="lazy">
                    </div>

                    <div class="tech-overlay">
                        <h3 class="tech-title"><?php echo $tech['title']; ?></h3>
                        <p class="tech-description"><?php echo $tech['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Why Choose Us Section -->
    <section class="why-choose-section" id="why-choose">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title"><?php echo $why_choose_us['title']; ?></h2>
            <div class="title-underline"></div>
            <p class="section-subtitle"><?php echo $why_choose_us['subtitle']; ?></p>
        </div>

        <div class="why-grid">
            <?php foreach ($why_choose_us['items'] as $index => $item): ?>
                <div class="why-card"
                    data-aos="fade-up"
                    data-aos-delay="<?php echo $index * 100; ?>"
                    data-aos-duration="700">

                    <div class="why-icon">
                        <i class="fas <?php echo $item['icon']; ?>"></i>
                    </div>

                    <h3 class="why-title"><?php echo $item['title']; ?></h3>

                    <p class="why-description"><?php echo $item['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Patient Stories Section -->
    <section class="testimonials-section">
        <div class="testimonials-container">
            <div class="header-text">
                <h2 class="section-title">Patient Stories</h2>
                <div class="title-line"></div>
                <p class="section-subtitle">Hear from people we’ve helped</p>
            </div>

            <div class="grid-container">
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="testimonial-card">
                        <div class="card-header">
                            <img
                                src="<?= $testimonial['avatar'] ?>"
                                alt="<?= $testimonial['name'] ?>"
                                class="avatar" />
                            <div class="author-info">
                                <div class="author-name"><?= $testimonial['name'] ?></div>
                                <div class="author-title"><?= $testimonial['title'] ?></div>
                            </div>
                        </div>

                        <p class="review-text">
                            "<?= $testimonial['review'] ?>"
                        </p>

                        <div class="social-links">
                            <a href="<?= $testimonial['instagram'] ?>" target="_blank" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="<?= $testimonial['linkedin'] ?>" target="_blank" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Success Cases / Before-After Section -->
    <section class="success-section" id="success-cases">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title"><?php echo $success_cases['title']; ?></h2>
            <div class="title-underline"></div>
            <p class="section-subtitle"><?php echo $success_cases['subtitle']; ?></p>
        </div>

        <div class="disclaimer">
            <strong>Important:</strong> All before-and-after images shown are from patients who have given explicit written consent for their use on this website for educational purposes. Results vary by individual. These are not guarantees of similar outcomes.
        </div>

        <div class="cases-grid">
            <?php foreach ($success_cases['cases'] as $index => $case): ?>
                <div class="case-card"
                    data-aos="fade-up"
                    data-aos-delay="<?php echo $index * 150; ?>">

                    <div class="case-images">
                        <div class="image-pair">
                            <img src="<?php echo $case['before']; ?>" alt="Before - <?php echo $case['title']; ?>" class="before-img" loading="lazy">
                            <span class="label">Before</span>
                        </div>
                        <div class="image-pair">
                            <img src="<?php echo $case['after']; ?>" alt="After - <?php echo $case['title']; ?>" class="after-img" loading="lazy">
                            <span class="label">After</span>
                        </div>
                    </div>

                    <h3 class="case-title"><?php echo $case['title']; ?></h3>
                    <p class="case-desc"><?php echo $case['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Accreditations Section -->
    <section class="accreditations-section">
        <div class="section-header">
            <h2 class="section-title">Accreditations</h2>
            <div class="title-underline"></div>
        </div>
        <div class="accreditations-container">
            <?php foreach ($accreditations as $acc): ?>
                <a href="<?= $acc['link'] ?>" target="_blank" class="accreditation-card">
                    <img src="<?= $acc['logo'] ?>" alt="<?= $acc['name'] ?>">
                </a>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- FAQ Accordion Section -->
    <section class="faq-section" id="faq">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title"><?php echo $faq['title']; ?></h2>
            <div class="title-underline"></div>
            <p class="section-subtitle"><?php echo $faq['subtitle']; ?></p>
        </div>

        <div class="faq-container" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($faq['questions'] as $index => $item): ?>
                <div class="faq-item">
                    <div class="faq-question">
                        <?php echo $item['q']; ?>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <?php echo $item['a']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Global Partners Section -->
    <section class="partners-section">
        <div class="section-header">
            <h2 class="section-title">Global Partners</h2>
            <div class="title-underline"></div>
        </div>

        <div class="partners-slider">
            <div class="partners-track">
                <?php foreach ($partners as $partner): ?>
                    <a href="<?= $partner['link'] ?>" target="_blank" class="partner-card">
                        <img src="<?= $partner['logo'] ?>" alt="<?= $partner['name'] ?>">
                        <span><?= $partner['name'] ?></span>
                    </a>
                <?php endforeach; ?>
                <!-- Repeat for infinite slide -->
                <?php foreach ($partners as $partner): ?>
                    <a href="<?= $partner['link'] ?>" target="_blank" class="partner-card">
                        <img src="<?= $partner['logo'] ?>" alt="<?= $partner['name'] ?>">
                        <span><?= $partner['name'] ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Contact  Section -->
    <section class="contact-section" id="Contact">
        <div class="section-header">
            <h2 class="section-title">Contact Us</h2>
            <div class="green-underline"></div>
            <p class="section-desc">For medical inquiries, appointments, emergencies, or general information — our team is ready to assist you.</p>
        </div>

        <div class="contact-container">
            <!-- Contact Details -->
            <div class="contact-details">
                <div class="detail-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div style="color: #000000;">
                        <strong>Address:</strong><br>
                        <?= $contact['address'] ?>
                    </div>
                </div>

                <div class="detail-item">
                    <i class="fas fa-phone-alt"></i>
                    <div style="color: #000000;">
                        <strong>Main Line:</strong> <a href="tel:<?= str_replace(' ', '', $contact['phone_main']) ?>"><?= $contact['phone_main'] ?></a><br>
                        <strong>Emergency:</strong> <a href="tel:<?= str_replace(' ', '', $contact['phone_emerg']) ?>"><?= $contact['phone_emerg'] ?></a>
                    </div>
                </div>

                <div class="detail-item">
                    <i class="fab fa-whatsapp"></i>
                    <div style="color: #000000;">
                        <strong>WhatsApp:</strong> <a href="<?= $contact['social']['whatsapp'] ?>" target="_blank"><?= $contact['whatsapp'] ?></a>
                    </div>
                </div>

                <div class="detail-item">
                    <i class="fas fa-envelope"></i>
                    <div style="color: #000000;">
                        <strong>Email:</strong> <a href="mailto:<?= $contact['email'] ?>"><?= $contact['email'] ?></a>
                    </div>
                </div>

                <div class="detail-item hours-item">
                    <i class="fas fa-clock"></i>
                    <div style="color: #000000;">
                        <strong>Working Hours:</strong><br>
                        <?= $contact['hours'] ?>
                    </div>
                </div>

                <div class="detail-item directions-item">
                    <i class="fas fa-directions"></i>
                    <div style="color: #000000;">
                        <strong>Directions / Parking:</strong><br>
                        <?= $contact['directions'] ?>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="social-media">
                    <h4 style="color: #000000;">Follow & Message Us</h4>
                    <div class="social-links">
                        <?php foreach ($contact['social'] as $platform => $link): ?>
                            <?php if (!empty($link)): ?>
                                <a href="<?= $link ?>" target="_blank" class="social-btn <?= $platform ?>">
                                    <i class="fab fa-<?= $platform === 'whatsapp' ? 'whatsapp' : ($platform === 'telegram' ? 'telegram-plane' : $platform) ?>"></i>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form id="contactForm" method="post" action="send-inquiry.php">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Your Full Name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="you@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" placeholder="Your Number" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="e.g. Appointment Inquiry" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" placeholder="How can we assist you today?" rows="6" required></textarea>
                    </div>

                    <button type="submit" id="submitBtn">Send Message</button>
                </form>

                <div id="formMessage" class="form-message"></div>
            </div>
        </div>

        <!-- Google Map -->
        <div class="contact-map">
            <iframe
                src="<?= $contact['map_embed'] ?>"
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </section>

    <!-- Fotter  Section -->

    <footer class="site-footer">
        <div class="footer-container">
            <!-- Column 1: Logo & Tagline -->
            <div class="footer-brand">
                <img src="<?= $footer['logo'] ?>" alt="<?= $footer['name'] ?>" class="footer-logo">
                <h3 class="footer-name"><?= $footer['name'] ?></h3>
                <p class="footer-tagline"><?= $footer['tagline'] ?></p>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <?php foreach ($footer['quick_links'] as $label => $url): ?>
                        <li><a href="<?= $url ?>"><?= $label ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Column 3: Contact Info -->
            <div class="footer-contact">
                <h4>Contact Us</h4>
                <p class="address"><i class="fas fa-map-marker-alt"></i> <?= $footer['address'] ?></p>
                <p><i class="fas fa-phone-alt"></i> Main: <?= $footer['phone_main'] ?></p>
                <p><i class="fas fa-exclamation-triangle"></i> Emergency: <?= $footer['phone_emerg'] ?></p>
                <p><i class="fab fa-whatsapp"></i> WhatsApp: <a href="<?= $footer['social']['whatsapp'] ?>" target="_blank"><?= $footer['whatsapp'] ?></a></p>
                <p><i class="fas fa-envelope"></i> Email: <a href="mailto:<?= $footer['email'] ?>"><?= $footer['email'] ?></a></p>
            </div>

            <!-- Column 4: Social Media -->
            <div class="footer-social">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <?php foreach ($footer['social'] as $platform => $link): ?>
                        <?php if (!empty($link)): ?>
                            <a href="<?= $link ?>" target="_blank" class="social-icon <?= $platform ?>">
                                <i class="fab fa-<?= $platform === 'whatsapp' ? 'whatsapp' : ($platform === 'telegram' ? 'telegram-plane' : $platform) ?>"></i>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Copyright & Developed - now directly attached, no separation -->
        <div class="footer-bottom">
            <p>© <?= date("Y") ?> <?= $footer['name'] ?>. All Rights Reserved.</p>

        </div>
    </footer>
    </footer>

    <script src="./Asset/js/hero.js"></script>
    <script src="./Asset/js/hero.js"></script>
    <script src="./Asset/js/about-animation.js"></script>
    <script src="./Asset/js/servicese.js"></script>
    <script src="./Asset/js/Doctores.js"></script>
    <script src="./Asset/js/stories.js"></script>
    <script>
        AOS.init({
            duration: 800, // animation duration in ms
            once: true, // animate only once
            easing: 'ease-out', // smooth feel
            offset: 120 // start animation 120px before element enters view
        });
    </script>
    <script>
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', () => {
                const parent = item.parentElement;
                parent.classList.toggle('active');
            });
        });
    </script>

</body>

</html>