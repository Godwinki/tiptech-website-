document.addEventListener('DOMContentLoaded', function() {
    const themeToggle = document.getElementById('themeToggle');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)');
    
    // Set initial theme
    const savedTheme = localStorage.getItem('theme') || 
                      (prefersDark.matches ? 'dark' : 'light');
    document.documentElement.setAttribute('data-theme', savedTheme);
    updateThemeIcon(savedTheme);
    
    themeToggle.addEventListener('click', function() {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        
        document.documentElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        updateThemeIcon(newTheme);
    });
    
    function updateThemeIcon(theme) {
        const sunIcon = document.querySelector('.light-icon');
        const moonIcon = document.querySelector('.dark-icon');
        
        if (theme === 'dark') {
            sunIcon.style.display = 'none';
            moonIcon.style.display = 'inline-block';
        } else {
            sunIcon.style.display = 'inline-block';
            moonIcon.style.display = 'none';
        }
    }
});

// Language Toggle
document.addEventListener('DOMContentLoaded', function() {
    const languageToggle = document.getElementById('languageToggle');
    const languageDropdown = document.querySelector('.language-dropdown');
    
    languageToggle.addEventListener('click', function() {
        languageDropdown.classList.toggle('show');
    });
    
    document.addEventListener('click', function(e) {
        if (!languageToggle.contains(e.target)) {
            languageDropdown.classList.remove('show');
        }
    });
}); 