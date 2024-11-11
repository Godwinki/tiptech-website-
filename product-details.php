<?php require_once 'includes/config.php'; ?>
<?php require_once 'includes/header.php'; ?>

<?php
$product = isset($_GET['product']) ? $_GET['product'] : '';
$products = [
    'pharmacy' => [
        'title' => 'Pharmacy Management System',
        'description' => 'Complete solution for modern pharmacy operations and inventory management.',
        'features' => [
            'Inventory Management',
            'Point of Sale (POS)',
            'Analytics and Reporting',
            'Customer Management',
            'Supplier Management'
        ],
        'pricing' => 'Contact for pricing',
        'faqs' => [
            [
                'question' => 'What is included in the Pharmacy Management System?',
                'answer' => 'The system includes inventory management, POS, and analytics tools.'
            ],
            [
                'question' => 'Is there a mobile app available?',
                'answer' => 'Yes, we offer a mobile app for easy access to the system.'
            ]
        ],
        'testimonials' => [
            [
                'name' => 'Alice K.',
                'location' => 'Nairobi',
                'text' => 'This system has streamlined our pharmacy operations significantly.'
            ],
            [
                'name' => 'John S.',
                'location' => 'Mombasa',
                'text' => 'The analytics feature helps us make informed decisions.'
            ]
        ]
    ],
    'hospital' => [
        'title' => 'Hospital Management System',
        'description' => 'Comprehensive hospital operations and patient management platform.',
        'features' => [
            'Electronic Medical Records (EMR)',
            'Billing and Invoicing',
            'Appointment Scheduling',
            'Patient Management',
            'Reporting and Analytics'
        ],
        'pricing' => 'Contact for pricing',
        'faqs' => [
            [
                'question' => 'Can this system integrate with existing software?',
                'answer' => 'Yes, our system can integrate with various existing software solutions.'
            ],
            [
                'question' => 'Is training provided?',
                'answer' => 'Yes, we provide training for all users.'
            ]
        ],
        'testimonials' => [
            [
                'name' => 'Dr. Jane M.',
                'location' => 'Dar es Salaam',
                'text' => 'The hospital management system has improved our workflow immensely.'
            ],
            [
                'name' => 'Nurse Tom',
                'location' => 'Dodoma',
                'text' => 'Easy to use and very effective!'
            ]
        ]
    ],
    'mobile' => [
        'title' => 'Telemedicine Mobile App',
        'description' => 'Connect with healthcare providers anytime, anywhere.',
        'features' => [
            'Video Call',
            'Chat',
            'Prescriptions'
        ],
        'pricing' => 'Free to Download',
        'faqs' => [
            [
                'question' => 'How does the video call feature work?',
                'answer' => 'The video call feature connects you with doctors in real-time for consultations.'
            ],
            [
                'question' => 'Can I get prescriptions through the app?',
                'answer' => 'Yes, doctors can prescribe medication directly via the app.'
            ]
        ],
        'testimonials' => [
            [
                'name' => 'Sarah L.',
                'location' => 'Kigali',
                'text' => 'The app is a game changer, very convenient for consultations.'
            ],
            [
                'name' => 'Mark P.',
                'location' => 'Zanzibar',
                'text' => 'Now I can consult doctors without leaving my home.'
            ]
        ]
    ],
    'drone' => [
        'title' => 'Medication Delivery Drones',
        'description' => 'Revolutionary drone technology for swift medication delivery.',
        'features' => [
            'Automated Delivery',
            'GPS Tracking',
            'Real-time Updates'
        ],
        'pricing' => 'Contact for pricing',
        'faqs' => [
            [
                'question' => 'What is the range of the drones?',
                'answer' => 'Our drones can cover distances up to 100 km.'
            ],
            [
                'question' => 'Can drones deliver medication to remote areas?',
                'answer' => 'Yes, drones are ideal for delivering to remote locations.'
            ]
        ],
        'testimonials' => [
            [
                'name' => 'David R.',
                'location' => 'Mbeya',
                'text' => 'The drone service has revolutionized our delivery times.'
            ],
            [
                'name' => 'Clara T.',
                'location' => 'Morogoro',
                'text' => 'Fast, efficient, and reliable.'
            ]
        ]
    ],
    'ai-doctor' => [
        'title' => 'AI Doctor',
        'description' => 'Advanced AI-powered medical diagnosis and consultation system.',
        'features' => [
            'Machine Learning (ML)',
            'Accurate Diagnosis',
            '24/7 Availability'
        ],
        'pricing' => 'Contact for pricing',
        'faqs' => [
            [
                'question' => 'Can the AI diagnose all diseases?',
                'answer' => 'The AI is trained on a vast dataset and can diagnose a wide range of conditions.'
            ],
            [
                'question' => 'Is it safe to rely on AI for medical advice?',
                'answer' => 'AI assists healthcare professionals but does not replace them.'
            ]
        ],
        'testimonials' => [
            [
                'name' => 'Grace N.',
                'location' => 'Dodoma',
                'text' => 'I received instant advice, and it helped me make the right decision.'
            ],
            [
                'name' => 'John D.',
                'location' => 'Arusha',
                'text' => 'I trust the AI Doctor for quick consultations.'
            ]
        ]
    ],
    'ai-pharmacist' => [
        'title' => 'AI Pharmacist',
        'description' => 'Intelligent medication management and consultation system.',
        'features' => [
            'Smart Medication Management',
            'Safe Dosage Recommendations',
            'Accurate Prescription Guidance'
        ],
        'pricing' => 'Contact for pricing',
        'faqs' => [
            [
                'question' => 'Can the AI help with complex prescriptions?',
                'answer' => 'Yes, AI can manage complex medication regimens and ensure safety.'
            ],
            [
                'question' => 'Is AI Pharmacist available for personal use?',
                'answer' => 'Yes, the system can be used by individuals for personal medication management.'
            ]
        ],
        'testimonials' => [
            [
                'name' => 'Lilian F.',
                'location' => 'Arusha',
                'text' => 'This AI is amazing, it helps me manage my medications perfectly.'
            ],
            [
                'name' => 'Tom H.',
                'location' => 'Dar es Salaam',
                'text' => 'Highly recommend this for managing prescriptions.'
            ]
        ]
    ]
];

$productData = isset($products[$product]) ? $products[$product] : null;

if (!$productData) {
    header('Location: index.php');
    exit;
}
?>

<div class="product-details">
    <div class="container">
        <h1 class="product-title"><?php echo $productData['title']; ?></h1>
        <p class="product-description"><?php echo $productData['description']; ?></p>

        <h2>Key Features</h2>
        <ul>
            <?php foreach ($productData['features'] as $feature): ?>
                <li><?php echo $feature; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Pricing</h2>
        <p><?php echo $productData['pricing']; ?></p>

        <h2>Frequently Asked Questions</h2>
        <div class="faq__accordion">
            <?php foreach ($productData['faqs'] as $faq): ?>
                <div class="faq__item">
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

        <h2>What Our Users Say</h2>
        <div class="testimonials__grid">
            <?php foreach ($productData['testimonials'] as $testimonial): ?>
                <div class="testimonial-card">
                    <p class="testimonial-card__text"><?php echo $testimonial['text']; ?></p>
                    <p class="testimonial-card__author"><?php echo $testimonial['name']; ?>, <?php echo $testimonial['location']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
