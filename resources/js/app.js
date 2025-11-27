import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// ===== MOBILE SIDEBAR TOGGLE =====
document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById("menuToggle");
    const mobileSidebar = document.getElementById("mobileSidebar");

    // Buka / tutup sidebar mobile
    if (menuToggle && mobileSidebar) {
        menuToggle.addEventListener("click", () => {
            mobileSidebar.classList.toggle("-translate-x-full");
        });
    }

    // Tutup sidebar ketika klik area luar (opsional)
    document.addEventListener("click", (e) => {
        if (
            mobileSidebar &&
            !mobileSidebar.contains(e.target) &&
            !menuToggle.contains(e.target)
        ) {
            mobileSidebar.classList.add("-translate-x-full");
        }
    });

    // ===== FADE IN ANIMATION =====
    document.querySelectorAll(".fade-in").forEach((el, i) => {
        setTimeout(() => el.classList.add("show"), i * 120);
    });
});
