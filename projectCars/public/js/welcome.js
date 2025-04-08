// script.js

document.addEventListener('DOMContentLoaded', () => {
    // Smooth scrolling for navbar links
    const links = document.querySelectorAll('.navbar a');

    links.forEach(link => {
        link.addEventListener('click', event => {
            event.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Button click animation
    const ctaButton = document.querySelector('.cta-button');

    if (ctaButton) {
        ctaButton.addEventListener('click', () => {
            alert('Merci de réserver avec nous !');
        });
    }
});
