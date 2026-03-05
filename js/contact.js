document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');
    if (!form) return;

    const submitBtn = document.getElementById('contactSubmitBtn');
    const feedback = document.getElementById('contactFeedback');
    const dateInput = document.getElementById('contact-date');

    // Set minimum date to today
    if (dateInput) {
        const today = new Date().toISOString().split('T')[0];
        dateInput.setAttribute('min', today);
    }

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Reset feedback
        hideFeedback();

        // Client-side validation
        const nom = form.querySelector('[name="nom"]').value.trim();
        const telephone = form.querySelector('[name="telephone"]').value.trim();
        const adresse = form.querySelector('[name="adresse"]').value.trim();
        const servicesChecked = form.querySelectorAll('input[name="services[]"]:checked');

        if (!nom) {
            showFeedback('error', '⚠️ Veuillez entrer votre nom.');
            form.querySelector('[name="nom"]').focus();
            return;
        }

        if (!telephone) {
            showFeedback('error', '⚠️ Veuillez entrer votre numéro de téléphone.');
            form.querySelector('[name="telephone"]').focus();
            return;
        }

        // Basic phone validation (accepts various formats)
        const phoneRegex = /^[\d\s\-\(\)\+\.]{7,20}$/;
        if (!phoneRegex.test(telephone)) {
            showFeedback('error', '⚠️ Veuillez entrer un numéro de téléphone valide.');
            form.querySelector('[name="telephone"]').focus();
            return;
        }

        if (!adresse) {
            showFeedback('error', '⚠️ Veuillez entrer votre adresse.');
            form.querySelector('[name="adresse"]').focus();
            return;
        }

        if (servicesChecked.length === 0) {
            showFeedback('error', '⚠️ Veuillez sélectionner au moins un service.');
            return;
        }

        // Show loading state
        setLoading(true);

        // Build form data
        const formData = new FormData(form);

        try {
            // Determine the base path for the AJAX call
            const scriptTags = document.querySelectorAll('script[src*="contact.js"]');
            let basePath = '';
            if (scriptTags.length > 0) {
                const src = scriptTags[0].getAttribute('src');
                basePath = src.replace('js/contact.js', '');
            }

            const response = await fetch(basePath + 'send-contact.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.success) {
                showFeedback('success', '✅ ' + result.message);
                form.reset();
                // Reset min date after form reset
                if (dateInput) {
                    const today = new Date().toISOString().split('T')[0];
                    dateInput.setAttribute('min', today);
                }
            } else {
                showFeedback('error', '❌ ' + result.message);
            }
        } catch (err) {
            showFeedback('error', '❌ Une erreur est survenue. Veuillez réessayer ou nous appeler au 819-212-8222.');
        } finally {
            setLoading(false);
        }
    });

    function setLoading(loading) {
        if (loading) {
            submitBtn.classList.add('loading');
            submitBtn.disabled = true;
        } else {
            submitBtn.classList.remove('loading');
            submitBtn.disabled = false;
        }
    }

    function showFeedback(type, message) {
        feedback.className = 'contact-feedback ' + type;
        feedback.innerHTML = message;
        // Trigger reflow then add show class for animation
        feedback.offsetHeight;
        feedback.classList.add('show');
    }

    function hideFeedback() {
        feedback.className = 'contact-feedback';
        feedback.innerHTML = '';
    }
});
