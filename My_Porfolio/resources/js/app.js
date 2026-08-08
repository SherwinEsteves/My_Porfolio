document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const themeToggle = document.getElementById('theme-toggle');
    const header = document.querySelector('header');
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('[data-nav]');
    let isOpen = false;

    const applyTheme = (theme) => {
        document.documentElement.classList.add('theme-transition');
        document.documentElement.classList.remove('light', 'dark');
        document.documentElement.classList.add(theme);
        localStorage.setItem('theme', theme);

        setTimeout(() => {
            document.documentElement.classList.remove('theme-transition');
        }, 300);
    };

    themeToggle.addEventListener('click', () => {
        const isDark = document.documentElement.classList.contains('dark');
        applyTheme(isDark ? 'light' : 'dark');
    });

    const closeMenu = () => {
        isOpen = false;
        mobileMenu.style.maxHeight = '0';
        mobileMenu.style.opacity = '0';
    };

    menuToggle.addEventListener('click', () => {
        isOpen = !isOpen;

        if (isOpen) {
            mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
            mobileMenu.style.opacity = '1';
        } else {
            closeMenu();
        }
    });

    const scrollToSection = (target) => {
        const headerHeight = header.offsetHeight;
        const top = target.getBoundingClientRect().top + window.scrollY - headerHeight;

        window.scrollTo({
            top: top,
            behavior: 'smooth',
        });
    };

    navLinks.forEach((link) => {
        link.addEventListener('click', (e) => {
            const target = document.querySelector(link.getAttribute('href'));
            if (!target) return;

            e.preventDefault();
            closeMenu();
            scrollToSection(target);

            history.replaceState(null, '', link.getAttribute('href'));
        });
    });

    const setActive = (id) => {
        navLinks.forEach((link) => {
            const isActive = link.dataset.nav === id;
            const label = link.querySelector('.nav-label');

            if (label) {
                label.classList.toggle('text-heading', isActive);
                label.classList.toggle('text-body', !isActive);
            }

            const underline = link.querySelector('.nav-underline');
            if (underline) {
                if (isActive) {
                    underline.classList.add('w-full', 'left-0');
                    underline.classList.remove('w-0', 'left-1/2');
                } else {
                    underline.classList.remove('w-full', 'left-0');
                    underline.classList.add('w-0', 'left-1/2');
                }
            }
        });
    };

    const onScroll = () => {
        const headerHeight = header.offsetHeight;
        let current = 'home';

        sections.forEach((section) => {
            const top = section.getBoundingClientRect().top + window.scrollY - headerHeight;
            if (window.scrollY >= top - 100) {
                current = section.id;
            }
        });

        setActive(current);
    };

    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
            window.scrollTo({ top: 0, behavior: 'instant' });
            setTimeout(() => scrollToSection(target), 50);
        }
    }

    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });

    // responsibilities modal
    const modal = document.getElementById('responsibilities-modal');
    const modalOpener = document.querySelector('[data-open-modal="responsibilities-modal"]');

    const lockScroll = () => {
        document.documentElement.style.overflow = 'hidden';
        document.body.style.overflow = 'hidden';
    };

    const unlockScroll = () => {
        document.documentElement.style.overflow = '';
        document.body.style.overflow = '';
    };

    const openModal = () => {
        if (!modal) return;
        modal.classList.remove('hidden');
        lockScroll();
    };

    const closeModal = () => {
        if (!modal) return;
        modal.classList.add('hidden');
        unlockScroll();
    };

    modalOpener?.addEventListener('click', openModal);
    modal?.querySelector('[data-close-modal]')?.addEventListener('click', closeModal);
    modal?.querySelector('[data-modal-backdrop]')?.addEventListener('click', closeModal);
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal && !modal.classList.contains('hidden')) closeModal();
    });

    // certificate viewer modal
    const certModal = document.getElementById('certificate-modal');
    const certTitle = document.getElementById('cert-modal-title');
    const certSub = document.getElementById('cert-modal-sub');
    const certModalImage = document.getElementById('cert-modal-image');
    const certModalPdf = document.getElementById('cert-modal-pdf');

    const openCertModal = (title, issuer, year, image, pdf) => {
        if (!certModal) return;
        certTitle.textContent = title;
        certSub.textContent = issuer ? `${issuer} · ${year}` : year;

        if (pdf) {
            certModalImage.classList.add('hidden');
            certModalPdf.classList.remove('hidden');
            certModalPdf.src = pdf;
        } else if (image) {
            certModalPdf.classList.add('hidden');
            certModalImage.classList.remove('hidden');
            certModalImage.src = image;
            certModalImage.alt = title;
        }

        certModal.classList.remove('hidden');
        lockScroll();
    };

    const closeCertModal = () => {
        if (!certModal) return;
        certModal.classList.add('hidden');
        certModalImage.src = '';
        certModalPdf.src = '';
        unlockScroll();
    };

    document.addEventListener('click', (e) => {
        const viewBtn = e.target.closest('[data-cert-view]');
        if (!viewBtn) return;

        const title = viewBtn.dataset.certTitle || 'Certificate';
        const issuer = viewBtn.dataset.certIssuer || '';
        const year = viewBtn.dataset.certYear || '';
        const image = viewBtn.dataset.certImage || '';
        const pdf = viewBtn.dataset.certPdf || '';

        if (image || pdf) {
            openCertModal(title, issuer, year, image, pdf);
        }
    });

    certModal?.querySelector('[data-cert-close]')?.addEventListener('click', closeCertModal);
    certModal?.querySelector('[data-cert-backdrop]')?.addEventListener('click', closeCertModal);
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && certModal && !certModal.classList.contains('hidden')) closeCertModal();
    });

    // scroll-triggered reveal (animate once when element enters viewport)
    const revealEls = document.querySelectorAll('.reveal, .reveal-right');
    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

        revealEls.forEach((el) => revealObserver.observe(el));
    } else {
        revealEls.forEach((el) => el.classList.add('in-view'));
    }
});
