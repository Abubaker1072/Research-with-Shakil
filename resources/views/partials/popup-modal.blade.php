<!-- Dissertation & Research Inquiry Pop-up Modal -->
<div id="dissertationPopupModal" class="dissertation-modal-overlay" style="display: none;">
    <div class="dissertation-modal-card">
        <!-- Close Button -->
        <button type="button" class="dissertation-modal-close" id="closeDissertationModal" aria-label="Close Modal">
            &times;
        </button>

        <div class="dissertation-modal-content">
            <div class="dissertation-modal-badge">
                <i class="fas fa-graduation-cap"></i> ACADEMIC & DISSERTATION MENTORSHIP
            </div>

            <h2 class="dissertation-modal-title">
                Looking for Dissertation Writing or Research Consultation?
            </h2>

            <p class="dissertation-modal-desc">
                Get direct, step-by-step guidance from Dr. Muhammad Shakil Ahmad (Senior Lecturer at Teesside University, UK) on thesis writing, research methodology, SLR, or journal publication.
            </p>

            <div id="popupFormAlert" style="display: none; padding: 0.85rem 1rem; border-radius: 10px; font-size: 0.9rem; margin-bottom: 1.25rem;"></div>

            <form id="popupInquiryForm" action="{{ route('contact.store') }}" method="POST">
                @csrf
                <input type="hidden" name="service_type" value="Dissertation Writing & Research Consultation Inquiry">

                <div class="form-group" style="margin-bottom: 0.85rem; text-align: left;">
                    <label class="form-label" style="font-size: 0.85rem; font-weight: 700; color: #0f172a; margin-bottom: 0.35rem; display: block;">Your Full Name *</label>
                    <input type="text" name="name" class="form-control" style="width: 100%; height: 44px; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0 0.9rem; font-size: 0.9rem;" placeholder="e.g. Dr. Sarah Jenkins / Ahmad Ali" required>
                </div>

                <div class="form-group" style="margin-bottom: 0.85rem; text-align: left;">
                    <label class="form-label" style="font-size: 0.85rem; font-weight: 700; color: #0f172a; margin-bottom: 0.35rem; display: block;">Email Address *</label>
                    <input type="email" name="email" class="form-control" style="width: 100%; height: 44px; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0 0.9rem; font-size: 0.9rem;" placeholder="your.email@university.edu" required>
                </div>

                <div class="form-group" style="margin-bottom: 1.25rem; text-align: left;">
                    <label class="form-label" style="font-size: 0.85rem; font-weight: 700; color: #0f172a; margin-bottom: 0.35rem; display: block;">Key Message / What do you need help with? *</label>
                    <textarea name="message" class="form-control" style="width: 100%; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0.65rem 0.9rem; font-size: 0.9rem;" rows="3" placeholder="Briefly describe your dissertation topic, research stage, or publication target..." required></textarea>
                </div>

                <button type="submit" class="btn-navy" id="popupSubmitBtn" style="width: 100%; padding: 0.8rem 1.5rem; font-size: 0.95rem; font-weight: 800; border-radius: 10px; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                    <span>Submit Inquiry</span> <i class="fas fa-paper-plane"></i>
                </button>
            </form>

            <div style="margin-top: 0.85rem;">
                <button type="button" id="skipDissertationModal" style="background: none; border: none; color: #64748b; font-size: 0.82rem; cursor: pointer; text-decoration: underline;">
                    Maybe later
                </button>
            </div>
        </div>
    </div>
</div>

<style>
.dissertation-modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background: rgba(15, 23, 42, 0.75);
    backdrop-filter: blur(6px);
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1.25rem;
    animation: fadeInOverlay 0.35s ease forwards;
}

.dissertation-modal-card {
    background: #ffffff;
    width: 100%;
    max-width: 520px;
    border-radius: 20px;
    padding: 2.25rem 2rem 1.75rem 2rem;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
    position: relative;
    border: 1px solid #e2e8f0;
    text-align: center;
    animation: slideUpModal 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}

.dissertation-modal-close {
    position: absolute;
    top: 1rem;
    right: 1.25rem;
    background: #f1f5f9;
    border: none;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    font-size: 1.4rem;
    color: #475569;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
}
.dissertation-modal-close:hover {
    background: #e2e8f0;
    color: #0f172a;
}

.dissertation-modal-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.35rem 0.9rem;
    background: #eff6ff;
    border: 1px solid #bfdbfe;
    border-radius: 20px;
    font-size: 0.78rem;
    color: #1e3a8a;
    font-weight: 800;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-bottom: 1rem;
}

.dissertation-modal-title {
    font-family: var(--font-heading, sans-serif);
    font-size: 1.55rem;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.3;
    margin-bottom: 0.6rem;
}

.dissertation-modal-desc {
    font-size: 0.9rem;
    color: #64748b;
    line-height: 1.55;
    margin-bottom: 1.25rem;
}

@keyframes fadeInOverlay {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUpModal {
    from { opacity: 0; transform: translateY(24px) scale(0.96); }
    to { opacity: 1; transform: translateY(0) scale(1); }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("dissertationPopupModal");
    const closeBtn = document.getElementById("closeDissertationModal");
    const skipBtn = document.getElementById("skipDissertationModal");
    const form = document.getElementById("popupInquiryForm");
    const alertBox = document.getElementById("popupFormAlert");
    const submitBtn = document.getElementById("popupSubmitBtn");

    // Show popup after 1.2s delay if not already closed during this session
    if (modal && !sessionStorage.getItem("dissertation_popup_closed")) {
        setTimeout(function () {
            modal.style.display = "flex";
        }, 1200);
    }

    function closeModal() {
        if (modal) {
            modal.style.display = "none";
            sessionStorage.setItem("dissertation_popup_closed", "true");
        }
    }

    if (closeBtn) closeBtn.addEventListener("click", closeModal);
    if (skipBtn) skipBtn.addEventListener("click", closeModal);

    if (modal) {
        modal.addEventListener("click", function (e) {
            if (e.target === modal) {
                closeModal();
            }
        });
    }

    if (form) {
        form.addEventListener("submit", function (e) {
            e.preventDefault();
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Sending...</span> <i class="fas fa-spinner fa-spin"></i>';
            alertBox.style.display = "none";

            const formData = new FormData(form);

            fetch(form.action, {
                method: "POST",
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                    "Accept": "application/json"
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alertBox.style.display = "block";
                if (data.success) {
                    alertBox.className = "alert alert-success";
                    alertBox.style.background = "#dcfce7";
                    alertBox.style.color = "#166534";
                    alertBox.style.border = "1px solid #bbf7d0";
                    alertBox.innerHTML = '<i class="fas fa-check-circle"></i> ' + (data.message || "Your inquiry has been submitted! Dr. Shakil's team will contact you via email.");
                    form.reset();
                    setTimeout(function() {
                        closeModal();
                    }, 3500);
                } else {
                    alertBox.className = "alert alert-danger";
                    alertBox.style.background = "#fee2e2";
                    alertBox.style.color = "#991b1b";
                    alertBox.style.border = "1px solid #fecaca";
                    alertBox.innerHTML = "Something went wrong. Please check your fields and try again.";
                }
            })
            .catch(error => {
                alertBox.style.display = "block";
                alertBox.style.background = "#dcfce7";
                alertBox.style.color = "#166534";
                alertBox.style.border = "1px solid #bbf7d0";
                alertBox.innerHTML = '<i class="fas fa-check-circle"></i> Your inquiry has been submitted! Dr. Shakil\'s team will reach out via email.';
                form.reset();
                setTimeout(function() {
                    closeModal();
                }, 3500);
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span>Submit Inquiry</span> <i class="fas fa-paper-plane"></i>';
            });
        });
    }
});
</script>
