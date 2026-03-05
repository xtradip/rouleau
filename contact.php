<style>
    /* ===== Contact Form Section ===== */
    .contact-section {
        background: linear-gradient(135deg, #e8f5e9 0%, #f1f8f4 50%, #e0f2f1 100%);
        padding: 4rem 0;
        position: relative;
        overflow: hidden;
    }

    .contact-section::before {
        content: '';
        position: absolute;
        top: -100px;
        right: -100px;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(46, 125, 50, 0.08) 0%, transparent 70%);
        border-radius: 50%;
        z-index: 0;
    }

    .contact-section::after {
        content: '';
        position: absolute;
        bottom: -80px;
        left: -80px;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(255, 109, 0, 0.06) 0%, transparent 70%);
        border-radius: 50%;
        z-index: 0;
    }

    .contact-inner {
        position: relative;
        z-index: 1;
        max-width: 750px;
        margin: 0 auto;
    }

    .contact-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .contact-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 0.5rem 1.2rem;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        margin-bottom: 1.2rem;
        box-shadow: 0 4px 15px rgba(46, 125, 50, 0.3);
        animation: contact-badge-pulse 3s ease-in-out infinite;
    }

    @keyframes contact-badge-pulse {

        0%,
        100% {
            box-shadow: 0 4px 15px rgba(46, 125, 50, 0.3);
        }

        50% {
            box-shadow: 0 6px 25px rgba(46, 125, 50, 0.5);
        }
    }

    .contact-header h2 {
        font-size: 2.2rem;
        color: var(--primary-dark) !important;
        margin-bottom: 0.75rem !important;
        line-height: 1.3;
    }

    .contact-header p {
        font-size: 1.1rem;
        color: #555;
        max-width: 550px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .contact-form-card {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border-radius: 20px;
        padding: 2.5rem;
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.08), 0 1px 3px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.6);
    }

    .contact-form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.25rem;
    }

    .contact-form-group {
        margin-bottom: 1.25rem;
    }

    .contact-form-group.full-width {
        grid-column: 1 / -1;
    }

    .contact-form-group label {
        display: block;
        font-weight: 600;
        font-size: 0.9rem;
        color: var(--primary-dark);
        margin-bottom: 0.5rem;
        transition: color 0.3s ease;
    }

    .contact-form-group label .required-star {
        color: var(--accent-color);
        margin-left: 2px;
    }

    .contact-input {
        width: 100%;
        padding: 0.85rem 1.1rem;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-family: var(--font-main);
        font-size: 0.95rem;
        color: var(--text-dark);
        background: white;
        transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.2s ease;
        outline: none;
    }

    .contact-input:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 4px rgba(46, 125, 50, 0.12);
        transform: translateY(-1px);
    }

    .contact-input::placeholder {
        color: #aaa;
    }

    /* Services grid as clickable cards */
    .contact-services-label {
        font-weight: 600;
        font-size: 0.9rem;
        color: var(--primary-dark);
        margin-bottom: 0.75rem;
        display: block;
    }

    .contact-services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0.75rem;
        margin-bottom: 1.5rem;
    }

    .service-check-card {
        position: relative;
        cursor: pointer;
    }

    .service-check-card input[type="checkbox"] {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    .service-check-label {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.4rem;
        padding: 1rem 0.5rem;
        border: 2px solid #e0e0e0;
        border-radius: 14px;
        background: white;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        user-select: none;
    }

    .service-check-label:hover {
        border-color: var(--primary-color);
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(46, 125, 50, 0.15);
    }

    .service-check-card input:checked+.service-check-label {
        border-color: var(--primary-color);
        background: linear-gradient(135deg, #e8f5e9 0%, #f1f8f4 100%);
        box-shadow: 0 4px 15px rgba(46, 125, 50, 0.2);
    }

    .service-check-card input:checked+.service-check-label .service-check-icon {
        transform: scale(1.15);
    }

    .service-check-card input:checked+.service-check-label .service-check-indicator {
        background: var(--primary-color);
        border-color: var(--primary-color);
    }

    .service-check-card input:checked+.service-check-label .service-check-indicator::after {
        opacity: 1;
        transform: rotate(45deg) scale(1);
    }

    .service-check-icon {
        font-size: 2rem;
        transition: transform 0.3s ease;
    }

    .service-check-name {
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--text-dark);
        line-height: 1.2;
    }

    .service-check-indicator {
        width: 22px;
        height: 22px;
        border: 2px solid #ccc;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        position: relative;
        margin-top: 0.2rem;
    }

    .service-check-indicator::after {
        content: '';
        width: 6px;
        height: 10px;
        border: solid white;
        border-width: 0 2.5px 2.5px 0;
        opacity: 0;
        transform: rotate(45deg) scale(0);
        transition: all 0.25s ease;
    }

    /* Submit button */
    .contact-submit-wrapper {
        text-align: center;
        margin-top: 0.5rem;
    }

    .btn-contact-submit {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.6rem;
        padding: 1rem 2.5rem;
        background: linear-gradient(135deg, var(--accent-color) 0%, #E65100 100%);
        color: white;
        border: none;
        border-radius: 14px;
        font-family: var(--font-main);
        font-size: 1.1rem;
        font-weight: 800;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 6px 20px rgba(255, 109, 0, 0.35);
        min-width: 280px;
        position: relative;
        overflow: hidden;
    }

    .btn-contact-submit::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .btn-contact-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(255, 109, 0, 0.45);
    }

    .btn-contact-submit:hover::before {
        left: 100%;
    }

    .btn-contact-submit:active {
        transform: translateY(-1px);
    }

    .btn-contact-submit:disabled {
        cursor: not-allowed;
        opacity: 0.8;
    }

    .btn-contact-submit .btn-text {
        transition: opacity 0.3s ease;
    }

    .btn-contact-submit .btn-loader {
        display: none;
        width: 22px;
        height: 22px;
        border: 3px solid rgba(255, 255, 255, 0.3);
        border-top-color: white;
        border-radius: 50%;
        animation: contact-spin 0.8s linear infinite;
    }

    .btn-contact-submit.loading .btn-text {
        opacity: 0;
        position: absolute;
    }

    .btn-contact-submit.loading .btn-loader {
        display: block;
    }

    @keyframes contact-spin {
        to {
            transform: rotate(360deg);
        }
    }

    /* Feedback messages */
    .contact-feedback {
        margin-top: 1.25rem;
        padding: 0;
        border-radius: 12px;
        font-weight: 600;
        font-size: 0.95rem;
        text-align: center;
        overflow: hidden;
        max-height: 0;
        opacity: 0;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .contact-feedback.show {
        padding: 1rem 1.5rem;
        max-height: 120px;
        opacity: 1;
    }

    .contact-feedback.success {
        background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
        color: #1B5E20;
        border: 2px solid #66BB6A;
    }

    .contact-feedback.error {
        background: linear-gradient(135deg, #ffebee 0%, #ffcdd2 100%);
        color: #b71c1c;
        border: 2px solid #ef5350;
    }

    .contact-feedback-icon {
        font-size: 1.3rem;
        margin-right: 0.5rem;
        vertical-align: middle;
    }

    /* Guarantee badges */
    .contact-guarantees {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-top: 1.5rem;
        flex-wrap: wrap;
    }

    .contact-guarantee {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.85rem;
        color: #666;
        font-weight: 500;
    }

    .contact-guarantee-icon {
        font-size: 1.1rem;
    }

    /* Mobile responsive */
    @media (max-width: 1200px) {
        .contact-section {
            padding: 2.5rem 0;
        }

        .contact-form-card {
            padding: 1.75rem 1.25rem;
            border-radius: 16px;
        }

        .contact-form-row {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .contact-form-group.full-width {
            grid-column: 1;
        }

        .contact-header h2 {
            font-size: 1.7rem;
        }

        .contact-services-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .btn-contact-submit {
            width: 100%;
            min-width: unset;
        }

        .contact-guarantees {
            flex-direction: column;
            align-items: center;
            gap: 0.75rem;
        }
    }

    @media (max-width: 480px) {
        .contact-services-grid {
            grid-template-columns: 1fr 1fr;
            gap: 0.5rem;
        }

        .service-check-label {
            padding: 0.75rem 0.3rem;
        }

        .service-check-icon {
            font-size: 1.6rem;
        }

        .service-check-name {
            font-size: 0.75rem;
        }
    }
</style>

<!-- Contact / Prise de Rendez-vous Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="contact-inner">

            <div class="contact-header">
                <div class="contact-badge">📅 Soumission gratuite</div>
                <h2>Prenez Rendez-vous en 30 Secondes</h2>
                <p>Remplissez ce court formulaire et nous vous rappelons rapidement pour planifier votre intervention.
                </p>
            </div>

            <div class="contact-form-card">
                <form id="contactForm" novalidate>

                    <div class="contact-form-row">
                        <div class="contact-form-group">
                            <label for="contact-nom">Nom complet <span class="required-star">*</span></label>
                            <input type="text" id="contact-nom" name="nom" class="contact-input" placeholder="Votre nom"
                                required>
                        </div>
                        <div class="contact-form-group">
                            <label for="contact-telephone">Téléphone <span class="required-star">*</span></label>
                            <input type="tel" id="contact-telephone" name="telephone" class="contact-input"
                                placeholder="819-000-0000" required>
                        </div>
                    </div>

                    <div class="contact-form-row">
                        <div class="contact-form-group">
                            <label for="contact-adresse">Adresse <span class="required-star">*</span></label>
                            <input type="text" id="contact-adresse" name="adresse" class="contact-input"
                                placeholder="Votre adresse" required>
                        </div>
                        <div class="contact-form-group">
                            <label for="contact-date">Jour d'intervention souhaité</label>
                            <input type="date" id="contact-date" name="date_intervention" class="contact-input">
                        </div>
                    </div>

                    <label class="contact-services-label">Services souhaités <span
                            class="required-star">*</span></label>
                    <div class="contact-services-grid">
                        <div class="service-check-card">
                            <input type="checkbox" id="svc-abattage" name="services[]" value="Abattage d'arbres">
                            <label for="svc-abattage" class="service-check-label">
                                <span class="service-check-icon">🪓</span>
                                <span class="service-check-name">Abattage</span>
                                <span class="service-check-indicator"></span>
                            </label>
                        </div>
                        <div class="service-check-card">
                            <input type="checkbox" id="svc-elagage" name="services[]" value="Élagage d'arbres">
                            <label for="svc-elagage" class="service-check-label">
                                <span class="service-check-icon">✂️</span>
                                <span class="service-check-name">Élagage</span>
                                <span class="service-check-indicator"></span>
                            </label>
                        </div>
                        <div class="service-check-card">
                            <input type="checkbox" id="svc-taillage" name="services[]" value="Taillage de haies">
                            <label for="svc-taillage" class="service-check-label">
                                <span class="service-check-icon">🌿</span>
                                <span class="service-check-name">Taillage de haies</span>
                                <span class="service-check-indicator"></span>
                            </label>
                        </div>
                        <div class="service-check-card">
                            <input type="checkbox" id="svc-plantation" name="services[]" value="Plantation d'arbres">
                            <label for="svc-plantation" class="service-check-label">
                                <span class="service-check-icon">🌳</span>
                                <span class="service-check-name">Plantation</span>
                                <span class="service-check-indicator"></span>
                            </label>
                        </div>
                        <div class="service-check-card">
                            <input type="checkbox" id="svc-deboisement" name="services[]" value="Déboisement">
                            <label for="svc-deboisement" class="service-check-label">
                                <span class="service-check-icon">🏗️</span>
                                <span class="service-check-name">Déboisement</span>
                                <span class="service-check-indicator"></span>
                            </label>
                        </div>
                        <div class="service-check-card">
                            <input type="checkbox" id="svc-haubanage" name="services[]" value="Haubanage">
                            <label for="svc-haubanage" class="service-check-label">
                                <span class="service-check-icon">🔗</span>
                                <span class="service-check-name">Haubanage</span>
                                <span class="service-check-indicator"></span>
                            </label>
                        </div>
                    </div>

                    <div class="contact-submit-wrapper">
                        <button type="submit" class="btn-contact-submit" id="contactSubmitBtn">
                            <span class="btn-text">📞 Demander un rappel gratuit</span>
                            <span class="btn-loader"></span>
                        </button>
                    </div>

                    <div id="contactFeedback" class="contact-feedback"></div>

                </form>

                <div class="contact-guarantees">
                    <span class="contact-guarantee">
                        <span class="contact-guarantee-icon">✅</span> Soumission gratuite
                    </span>
                    <span class="contact-guarantee">
                        <span class="contact-guarantee-icon">⚡</span> Réponse rapide
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>

<script src="<?php echo isset($base_path) ? $base_path : ''; ?>js/contact.js"></script>