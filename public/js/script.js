// Sticky Navbar on Scroll
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// script.js
// Get elements
const loginBtn = document.getElementById('loginBtn');
const signupBtn = document.getElementById('signupBtn');
const loginPopup = document.getElementById('loginPopup');
const signupPopup = document.getElementById('signupPopup');
const closeLoginPopup = document.getElementById('closeLoginPopup');
const closeSignupPopup = document.getElementById('closeSignupPopup');
const openSignup = document.getElementById('openSignup');
const openLogin = document.getElementById('openLogin');

// Show login popup
loginBtn.addEventListener('click', () => {
    loginPopup.style.display = 'block';
});

// Show signup popup
signupBtn.addEventListener('click', () => {
    signupPopup.style.display = 'block';
});

heroBtn.addEventListener('click', () => {
    loginPopup.style.display = 'block';
});

// Close login popup
closeLoginPopup.addEventListener('click', () => {
    loginPopup.style.display = 'none';
});

// Close signup popup
closeSignupPopup.addEventListener('click', () => {
    signupPopup.style.display = 'none';
});

// Switch from login to signup
openSignup.addEventListener('click', (e) => {
    e.preventDefault();
    loginPopup.style.display = 'none';
    signupPopup.style.display = 'block';
});

// Switch from signup to login
openLogin.addEventListener('click', (e) => {
    e.preventDefault();
    signupPopup.style.display = 'none';
    loginPopup.style.display = 'block';
});

// Close the popup if the user clicks outside of the popup content
window.addEventListener('click', (e) => {
    if (e.target === loginPopup) {
        loginPopup.style.display = 'none';
    } else if (e.target === signupPopup) {
        signupPopup.style.display = 'none';
    }
});


// Smooth Scrolling for Navigation Links
document.querySelectorAll('.nav-links a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');

    menuToggle.addEventListener('click', function () {
        navLinks.classList.toggle('active');
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');
    const closeBtn = document.getElementById('close-btn');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.add('active');
    });

   closeBtn.addEventListener('click', () => {
        navLinks.classList.remove('active');
    });

    // Optional: Hide the menu when clicking outside the menu
    document.addEventListener('click', (event) => {
        if (!navLinks.contains(event.target) && !menuToggle.contains(event.target)) {
            navLinks.classList.remove('active');
        }
    });
});
