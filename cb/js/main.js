/**
 * City Builders - Main JavaScript
 * Pure HTML/CSS/JS Template
 */

document.addEventListener('DOMContentLoaded', function() {
    initMobileMenu();
    initSearchBox();
    initProductHover();
    initSmoothScroll();
    initMegaMenuTabs();
});

/**
 * Mobile Menu Toggle
 */
function initMobileMenu() {
    const menuBtn = document.querySelector('.mobile-menu-btn');
    const nav = document.querySelector('.main-nav');
    
    // Make function global for inline onclick
    window.toggleMobileMenu = function() {
        if (nav) {
            nav.classList.toggle('active');
        }
    };
    
    if (menuBtn && nav) {
        menuBtn.addEventListener('click', function() {
            nav.classList.toggle('active');
        });
    }
}

/**
 * Language Dropdown Toggle
 */
function initLanguageDropdown() {
    window.toggleLanguageDropdown = function() {
        const dropdown = document.getElementById('languageDropdown');
        if (dropdown) {
            dropdown.classList.toggle('show');
        }
    };
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        const selector = document.querySelector('.language-selector');
        const dropdown = document.getElementById('languageDropdown');
        if (selector && dropdown && !selector.contains(e.target)) {
            dropdown.classList.remove('show');
        }
    });
}

/**
 * Search Box Focus Effect
 */
function initSearchBox() {
    const searchInput = document.querySelector('.search-box input');
    
    if (searchInput) {
        searchInput.addEventListener('focus', function() {
            this.closest('.search-box').style.borderColor = '#f9d175';
        });
        
        searchInput.addEventListener('blur', function() {
            this.closest('.search-box').style.borderColor = '#e3e8eb';
        });
    }
}

/**
 * Product Card Hover Effects
 */
function initProductHover() {
    const productCards = document.querySelectorAll('.product-card');
    
    productCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
}

/**
 * Smooth Scroll for Anchor Links
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
}

/**
 * Header Scroll Effect
 */
window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    if (header) {
        if (window.scrollY > 100) {
            header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.15)';
        } else {
            header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.08)';
        }
    }
});

/**
 * Lazy Load Images (Native)
 */
if ('loading' in HTMLImageElement.prototype) {
    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
    lazyImages.forEach(img => {
        img.src = img.dataset.src;
    });
}

/**
 * Newsletter Form (if needed)
 */
function initNewsletterForm() {
    const form = document.querySelector('.newsletter-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            if (email) {
                alert('Thank you for subscribing!');
                this.reset();
            }
        });
    }
}

/**
 * Mega Menu Tabs & Position
 */
function initMegaMenuTabs() {
    window.openTab = function(evt, tabId, menuName) {
        const panel = document.getElementById(tabId);
        if (!panel) return;
        
        const parent = panel.closest('.mega-menu-images');
        if (!parent) return;
        
        const tabContents = parent.querySelectorAll('.mega-menu-tab-content');
        tabContents.forEach(content => content.classList.remove('active'));
        
        const tabBtns = parent.querySelectorAll('.mega-menu-tab-btn');
        tabBtns.forEach(btn => btn.classList.remove('active'));
        
        panel.classList.add('active');
        evt.currentTarget.classList.add('active');
    };
    
    // Position mega menu from left edge of nav-menu
    const navMenu = document.querySelector('.nav-menu');
    if (navMenu) {
        const navLeft = navMenu.offsetLeft;
        
        document.querySelectorAll('.has-dropdown').forEach(dropdown => {
            dropdown.addEventListener('mouseenter', function() {
                const megaMenu = this.querySelector('.mega-menu');
                if (megaMenu) {
                    megaMenu.style.left = navLeft + 'px';
                    megaMenu.style.opacity = '1';
                    megaMenu.style.visibility = 'visible';
                }
            });
        });
    }
}
