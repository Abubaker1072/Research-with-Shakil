/* ==========================================================================
   RESEARCH WITH SHAKIL - FRONTEND JAVASCRIPT
   Handles Stats Counters, Filter Tabs, Modal Dialogs & WhatsApp Helpers
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Animated Counter for Hero Stats
    const counters = document.querySelectorAll('.stat-number');
    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        if (!target) return;
        
        let count = 0;
        const increment = Math.ceil(target / 60);
        const updateCount = () => {
            count += increment;
            if (count < target) {
                counter.innerText = count.toLocaleString() + '+';
                setTimeout(updateCount, 25);
            } else {
                counter.innerText = target.toLocaleString() + '+';
            }
        };
        updateCount();
    });

    // 2. Course Category Filtering
    const filterButtons = document.querySelectorAll('.course-filter-btn');
    const courseCards = document.querySelectorAll('.course-card-item');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            filterButtons.forEach(b => b.classList.remove('btn-primary'));
            filterButtons.forEach(b => b.classList.add('btn-outline'));
            btn.classList.remove('btn-outline');
            btn.classList.add('btn-primary');

            const category = btn.getAttribute('data-category');
            courseCards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // 3. Dynamic WhatsApp Link Generator for Consultations
    const consultationForm = document.getElementById('consultationForm');
    if (consultationForm) {
        consultationForm.addEventListener('submit', function (e) {
            // Form is allowed to submit via standard POST to backend
            // Backend will redirect with success message and optional WhatsApp launch trigger
        });
    }
});

// Quick Booking Modal Trigger Helper
function openBookingModal(serviceName) {
    const serviceSelect = document.getElementById('service_type');
    if (serviceSelect) {
        for (let i = 0; i < serviceSelect.options.length; i++) {
            if (serviceSelect.options[i].value.includes(serviceName) || serviceSelect.options[i].text.includes(serviceName)) {
                serviceSelect.selectedIndex = i;
                break;
            }
        }
    }
    const contactSection = document.getElementById('booking-form-section');
    if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'smooth' });
    }
}
