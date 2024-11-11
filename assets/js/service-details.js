document.addEventListener('DOMContentLoaded', function() {
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq__item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq__question');
        
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Close all items
            faqItems.forEach(faqItem => {
                faqItem.classList.remove('active');
                const icon = faqItem.querySelector('.fa-chevron-down');
                icon.style.transform = 'rotate(0deg)';
            });
            
            // Open clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('active');
                const icon = item.querySelector('.fa-chevron-down');
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
}); 