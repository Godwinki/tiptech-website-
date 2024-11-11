<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>

<?php
$service = isset($_GET['service']) ? $_GET['service'] : '';
$services = [
    'telemedicine' => [
        'title' => 'Telemedicine Consultation',
        'icon' => 'fa-video',
        'description' => 'Connect with healthcare providers remotely via video calls, improving access to medical care across Tanzania.',
        'features' => [
            'Real-time video consultations',
            'Secure patient-doctor communication',
            'Digital prescription services',
            'Follow-up appointment scheduling',
            'Medical record access'
        ],
        'pricing' => [
            'basic' => [
                'name' => 'Basic',
                'price' => '10,000',
                'duration' => 'per consultation',
                'features' => [
                    'Video consultation',
                    'Digital prescription',
                    'Basic health tracking',
                    '24/7 support'
                ]
            ],
            'premium' => [
                'name' => 'Premium',
                'price' => '25,000',
                'duration' => 'per month',
                'features' => [
                    'Unlimited consultations',
                    'Priority scheduling',
                    'Specialist referrals',
                    'Family account (up to 4)',
                    'Advanced health tracking'
                ]
            ]
        ],
        'faqs' => [
            [
                'question' => 'How do I schedule a consultation?',
                'answer' => 'You can schedule a consultation through our mobile app or website. Simply select your preferred doctor and available time slot.'
            ],
            [
                'question' => 'What technical requirements do I need?',
                'answer' => 'You need a stable internet connection and a device with a camera and microphone (smartphone, tablet, or computer).'
            ]
            // Add more FAQs
        ],
        'testimonials' => [
            [
                'name' => 'Sarah M.',
                'location' => 'Dar es Salaam',
                'rating' => 5,
                'text' => 'The telemedicine service saved me so much time. I got professional medical advice without leaving my home.'
            ],
            [
                'name' => 'John D.',
                'location' => 'Arusha',
                'rating' => 5,
                'text' => 'Excellent service! The doctor was very professional and the video quality was perfect.'
            ]
            // Add more testimonials
        ]
    ],
    'diagnosis' => [
        'title' => 'Disease Diagnosis',
        'icon' => 'fa-stethoscope',
        'description' => 'Advanced AI-driven diagnostic tools for early and accurate disease detection.',
        'features' => [
            'AI-powered symptom analysis',
            'Real-time diagnostic suggestions',
            'Integration with medical databases',
            'Patient history consideration',
            'Specialist referral system'
        ],
        'pricing' => [
            'basic' => [
                'name' => 'Basic',
                'price' => '15,000',
                'duration' => 'per diagnosis',
                'features' => [
                    'Basic symptom analysis',
                    'General health recommendations',
                    'Health tracking',
                    'Email support'
                ]
            ],
            'premium' => [
                'name' => 'Premium',
                'price' => '35,000',
                'duration' => 'per month',
                'features' => [
                    'Unlimited diagnoses',
                    'Specialist consultations',
                    'Detailed health reports',
                    'Priority support',
                    'Family health tracking'
                ]
            ]
        ],
        'faqs' => [
            [
                'question' => 'How accurate is the AI diagnosis?',
                'answer' => 'Our AI system has a 95% accuracy rate and is continuously learning from verified medical data. However, it\'s designed to support, not replace, professional medical diagnosis.'
            ],
            [
                'question' => 'Is my medical data secure?',
                'answer' => 'Yes, we employ end-to-end encryption and comply with international healthcare data protection standards.'
            ]
        ],
        'testimonials' => [
            [
                'name' => 'David M.',
                'location' => 'Mwanza',
                'rating' => 5,
                'text' => 'The AI diagnosis helped identify my condition early, leading to prompt treatment.'
            ]
        ]
    ],
    'monitoring' => [
        'title' => 'Patient Monitoring',
        'icon' => 'fa-heartbeat',
        'description' => 'Remote monitoring solutions for chronic diseases and post-treatment follow-ups.',
        'features' => [
            'Real-time vital signs monitoring',
            'Automated alert system',
            'Trend analysis and reporting',
            'Mobile app integration',
            'Emergency response coordination'
        ],
        'pricing' => [
            'basic' => [
                'name' => 'Basic',
                'price' => '20,000',
                'duration' => 'per month',
                'features' => [
                    'Basic vital monitoring',
                    'Daily health reports',
                    'SMS alerts',
                    'Basic support'
                ]
            ],
            'premium' => [
                'name' => 'Premium',
                'price' => '45,000',
                'duration' => 'per month',
                'features' => [
                    'Advanced vital monitoring',
                    'Real-time alerts',
                    'Video consultations',
                    '24/7 emergency support',
                    'Family monitoring (up to 4)'
                ]
            ]
        ],
        'faqs' => [
            [
                'question' => 'What vital signs are monitored?',
                'answer' => 'We monitor heart rate, blood pressure, temperature, oxygen levels, and activity patterns.'
            ]
        ],
        'testimonials' => [
            [
                'name' => 'Maria L.',
                'location' => 'Dodoma',
                'rating' => 5,
                'text' => 'The monitoring system gives me peace of mind knowing my elderly parents are being watched over 24/7.'
            ]
        ]
    ],
    'delivery' => [
        'title' => 'Home Medication Delivery',
        'icon' => 'fa-truck-medical',
        'description' => 'Direct medication delivery to patients\' homes ensuring timely access to treatments.',
        'features' => [
            'Same-day delivery service',
            'Real-time delivery tracking',
            'Temperature-controlled transport',
            'Prescription verification',
            'Contactless delivery option'
        ],
        'pricing' => [
            'basic' => [
                'name' => 'Standard',
                'price' => '5,000',
                'duration' => 'per delivery',
                'features' => [
                    'Next-day delivery',
                    'Basic tracking',
                    'SMS notifications',
                    'Standard packaging'
                ]
            ],
            'premium' => [
                'name' => 'Express',
                'price' => '12,000',
                'duration' => 'per delivery',
                'features' => [
                    'Same-day delivery',
                    'Real-time tracking',
                    'Priority handling',
                    'Temperature control',
                    'Insurance coverage'
                ]
            ]
        ],
        'faqs' => [
            [
                'question' => 'What areas do you cover?',
                'answer' => 'We currently serve all major cities in Tanzania, including Dar es Salaam, Dodoma, Arusha, and Mwanza.'
            ],
            [
                'question' => 'How do you ensure medication safety during transport?',
                'answer' => 'We use temperature-controlled containers and follow strict handling protocols to maintain medication integrity.'
            ],
            [
                'question' => 'What if I\'m not home during delivery?',
                'answer' => 'You can specify an alternative delivery location or reschedule through our app.'
            ]
        ],
        'testimonials' => [
            [
                'name' => 'Hassan K.',
                'location' => 'Dar es Salaam',
                'rating' => 5,
                'text' => 'Reliable and prompt delivery service. The tracking feature is very helpful.'
            ],
            [
                'name' => 'Amina R.',
                'location' => 'Arusha',
                'rating' => 4,
                'text' => 'Great service for getting my regular medications delivered to my doorstep.'
            ]
        ]
    ],
    'communication' => [
        'title' => 'Healthcare Communication Platform',
        'icon' => 'fa-comments-alt-medical',
        'description' => 'Streamlined communication between patients and healthcare providers.',
        'features' => [
            'Secure messaging system',
            'File sharing capabilities',
            'Multi-language support',
            'Voice and video calls',
            'Automated reminders'
        ],
        'pricing' => [
            'basic' => [
                'name' => 'Basic',
                'price' => '8,000',
                'duration' => 'per month',
                'features' => [
                    'Text messaging',
                    'Basic file sharing',
                    'Appointment reminders',
                    'Email support'
                ]
            ],
            'premium' => [
                'name' => 'Professional',
                'price' => '20,000',
                'duration' => 'per month',
                'features' => [
                    'Video calls',
                    'Advanced file sharing',
                    'Custom reminders',
                    'Priority support',
                    'Analytics dashboard'
                ]
            ]
        ],
        'faqs' => [
            [
                'question' => 'Is the platform HIPAA compliant?',
                'answer' => 'Yes, our platform follows international healthcare data protection standards including HIPAA guidelines.'
            ],
            [
                'question' => 'Can I communicate with multiple healthcare providers?',
                'answer' => 'Yes, you can connect with all your healthcare providers who are registered on our platform.'
            ],
            [
                'question' => 'What languages are supported?',
                'answer' => 'We currently support English and Swahili, with more languages coming soon.'
            ]
        ],
        'testimonials' => [
            [
                'name' => 'Dr. James M.',
                'location' => 'Dodoma',
                'rating' => 5,
                'text' => 'This platform has revolutionized how I communicate with my patients. The interface is intuitive and secure.'
            ],
            [
                'name' => 'Grace T.',
                'location' => 'Mwanza',
                'rating' => 5,
                'text' => 'I love how easy it is to reach my doctor and receive quick responses to my questions.'
            ]
        ]
    ]
];

$serviceData = isset($services[$service]) ? $services[$service] : null;

if (!$serviceData) {
    header('Location: index.php');
    exit;
}
?>

<div class="service-details">
    <!-- Hero Section -->
    <section class="service-hero">
        <div class="container">
            <i class="fas <?php echo $serviceData['icon']; ?> service-hero__icon"></i>
            <h1 class="service-hero__title"><?php echo $serviceData['title']; ?></h1>
            <p class="service-hero__description"><?php echo $serviceData['description']; ?></p>
        </div>
    </section>

    <!-- Features Section -->
    <section class="service-features">
        <div class="container">
            <h2 class="section-title">Key Features</h2>
            <div class="features__grid">
                <?php foreach ($serviceData['features'] as $feature): ?>
                    <div class="feature-card" data-aos="fade-up">
                        <i class="fas fa-check-circle"></i>
                        <p><?php echo $feature; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="service-pricing">
        <div class="container">
            <h2 class="section-title">Pricing Plans</h2>
            <div class="pricing__grid">
                <?php foreach ($serviceData['pricing'] as $plan): ?>
                    <div class="pricing-card" data-aos="fade-up">
                        <h3 class="pricing-card__name"><?php echo $plan['name']; ?></h3>
                        <div class="pricing-card__price">
                            <span class="currency">TZS</span>
                            <span class="amount"><?php echo $plan['price']; ?></span>
                            <span class="duration"><?php echo $plan['duration']; ?></span>
                        </div>
                        <ul class="pricing-card__features">
                            <?php foreach ($plan['features'] as $feature): ?>
                                <li><i class="fas fa-check"></i> <?php echo $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <button class="btn btn--primary">Get Started</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="service-faq">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="faq__accordion">
                <?php foreach ($serviceData['faqs'] as $index => $faq): ?>
                    <div class="faq__item" data-aos="fade-up">
                        <button class="faq__question">
                            <?php echo $faq['question']; ?>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq__answer">
                            <p><?php echo $faq['answer']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="service-testimonials">
        <div class="container">
            <h2 class="section-title">What Our Users Say</h2>
            <div class="testimonials__grid">
                <?php foreach ($serviceData['testimonials'] as $testimonial): ?>
                    <div class="testimonial-card" data-aos="fade-up">
                        <div class="testimonial-card__rating">
                            <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                                <i class="fas fa-star"></i>
                            <?php endfor; ?>
                        </div>
                        <p class="testimonial-card__text"><?php echo $testimonial['text']; ?></p>
                        <div class="testimonial-card__author">
                            <strong><?php echo $testimonial['name']; ?></strong>
                            <span><?php echo $testimonial['location']; ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<?php require_once 'includes/footer.php'; ?> 