// script.js
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.section');
    const links = document.querySelectorAll('a');

    // Hide all sections except the active one
    sections.forEach(section => {
        if (!section.classList.contains('active')) {
            section.classList.add('hidden');
        }
    });

    // Event listener for navigation links
    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);

            // Hide all sections
            sections.forEach(section => {
                section.classList.add('hidden');
            });

            // Show the target section
            targetSection.classList.remove('hidden');
        });
    });
});
