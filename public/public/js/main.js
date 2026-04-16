/**
 * Musafir International — main.js
 * Pure vanilla JS — no dependencies required.
 */

document.addEventListener('DOMContentLoaded', function () {
    initMobileMenu();
    initLanguageDropdown();
    initAccountDropdown();
    initSearchBox();
    initProductHover();
    initSmoothScroll();
    initContactForm();
    initHeaderScroll();
});

/* ── Mobile menu ──────────────────────────────────────────────── */
function initMobileMenu() {
    const nav = document.getElementById('mainNav');

    window.toggleMobileMenu = function () {
        if (nav) nav.classList.toggle('active');
    };

    // Tap on a has-dropdown item on mobile → toggle open class
    document.querySelectorAll('.has-dropdown > a').forEach(function (link) {
        link.addEventListener('click', function (e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                this.closest('.has-dropdown').classList.toggle('open');
            }
        });
    });

    // Close nav when clicking outside on mobile
    document.addEventListener('click', function (e) {
        if (nav && nav.classList.contains('active')) {
            const header = document.querySelector('.header');
            if (header && !header.contains(e.target)) {
                nav.classList.remove('active');
            }
        }
    });
}

/* ── Language dropdown ────────────────────────────────────────── */
function initLanguageDropdown() {
    window.toggleLanguageDropdown = function () {
        const dropdown = document.getElementById('languageDropdown');
        if (dropdown) dropdown.classList.toggle('show');
    };

    document.addEventListener('click', function (e) {
        const selector = document.querySelector('.language-selector');
        const dropdown = document.getElementById('languageDropdown');
        if (selector && dropdown && !selector.contains(e.target)) {
            dropdown.classList.remove('show');
        }
    });
}

/* ── Account dropdown ────────────────────────────────────────── */
function initAccountDropdown() {
    const accountSelector = document.querySelector('.account-dropdown');
    const accountDropdown = document.getElementById('accountDropdown');

    // If not logged in → stop here
    if (!accountSelector || !accountDropdown) return;

    window.toggleAccountDropdown = function () {
        accountDropdown.classList.toggle('show');
    };

    document.addEventListener('click', function (e) {
        if (!accountSelector.contains(e.target)) {
            accountDropdown.classList.remove('show');
        }
    });
}

/* ── Search box focus ring ────────────────────────────────────── */
function initSearchBox() {
    const input = document.querySelector('.search-box input');
    if (!input) return;

    input.addEventListener('focus', function () {
        this.closest('.search-box').style.borderColor = '#f9d175';
    });
    input.addEventListener('blur', function () {
        this.closest('.search-box').style.borderColor = '#e3e8eb';
    });
}

/* ── Product card hover lift ──────────────────────────────────── */
function initProductHover() {
    document.querySelectorAll('.product-card').forEach(function (card) {
        card.addEventListener('mouseenter', function () {
            this.style.transform = 'translateY(-5px)';
            this.style.transition = 'transform 0.3s ease';
        });
        card.addEventListener('mouseleave', function () {
            this.style.transform = 'translateY(0)';
        });
    });
}

/* ── Smooth scroll for anchor links ──────────────────────────── */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                var target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        });
    });
}

/* ── Contact form (plain HTML fallback) ───────────────────────── */
function initContactForm() {
    var form = document.getElementById('contactForm');
    if (!form) return;

    // Only intercept if there's no real server-side handler (static build)
    if (form.getAttribute('action') && form.getAttribute('action') !== '#') return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var name = form.querySelector('[name="name"]').value.trim();
        if (name) {
            alert('Thank you, ' + name + '! Your message has been sent.');
            form.reset();
        }
    });
}

/* ── Header shadow on scroll ─────────────────────────────────── */
function initHeaderScroll() {
    var header = document.querySelector('.header');
    if (!header) return;

    window.addEventListener('scroll', function () {
        if (window.scrollY > 80) {
            header.style.boxShadow = '0 4px 24px rgba(0,0,0,0.14)';
        } else {
            header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.08)';
        }
    }, { passive: true });
}
