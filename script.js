/* ============================================
   NEON RP — интерактив
   ============================================ */

(() => {
    'use strict';

    // ---------- Бургер-меню ----------
    const burger = document.getElementById('burger');
    const nav = document.getElementById('nav');

    if (burger && nav) {
        burger.addEventListener('click', () => {
            burger.classList.toggle('is-open');
            nav.classList.toggle('is-open');
        });

        nav.querySelectorAll('.nav__link').forEach(link => {
            link.addEventListener('click', () => {
                burger.classList.remove('is-open');
                nav.classList.remove('is-open');
            });
        });
    }

    // ---------- Тень шапки при скролле ----------
    const header = document.getElementById('header');
    if (header) {
        const onScroll = () => {
            header.classList.toggle('is-scrolled', window.scrollY > 8);
        };
        document.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    // ---------- Счётчик онлайна (имитация live-данных) ----------
    const onlineEl = document.getElementById('online-count');
    if (onlineEl) {
        let current = 0;
        const target = 1280 + Math.floor(Math.random() * 240); // 1280–1520

        const tickIn = () => {
            const step = Math.max(1, Math.round((target - current) / 18));
            current += step;
            if (current >= target) {
                current = target;
                onlineEl.textContent = current.toLocaleString('ru-RU');
                startDrift();
                return;
            }
            onlineEl.textContent = current.toLocaleString('ru-RU');
            requestAnimationFrame(tickIn);
        };

        // Лёгкое «дыхание» онлайна каждые 5 сек
        const startDrift = () => {
            setInterval(() => {
                const delta = Math.floor(Math.random() * 11) - 5; // -5..+5
                current = Math.max(800, current + delta);
                onlineEl.textContent = current.toLocaleString('ru-RU');
            }, 5000);
        };

        tickIn();
    }

    // ---------- Анимированная статистика в hero ----------
    const statNums = document.querySelectorAll('.stat__num[data-target]');

    const animateNumber = (el) => {
        const target = parseInt(el.dataset.target, 10);
        if (Number.isNaN(target)) return;

        const duration = 1400;
        const start = performance.now();

        const tick = (now) => {
            const progress = Math.min(1, (now - start) / duration);
            // ease-out cubic
            const eased = 1 - Math.pow(1 - progress, 3);
            const value = Math.round(target * eased);
            el.textContent = value.toLocaleString('ru-RU');
            if (progress < 1) requestAnimationFrame(tick);
            else el.textContent = target.toLocaleString('ru-RU');
        };

        requestAnimationFrame(tick);
    };

    if (statNums.length && 'IntersectionObserver' in window) {
        const io = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateNumber(entry.target);
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });

        statNums.forEach(el => io.observe(el));
    } else {
        statNums.forEach(animateNumber);
    }

    // ---------- Reveal-анимация при появлении в зоне видимости ----------
    const revealTargets = document.querySelectorAll(
        '.card, .step, .rule, .social, .faq__item, .section__head'
    );
    revealTargets.forEach(el => el.classList.add('reveal'));

    if ('IntersectionObserver' in window) {
        const io = new IntersectionObserver((entries, obs) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    setTimeout(() => entry.target.classList.add('is-visible'), i * 40);
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        revealTargets.forEach(el => io.observe(el));
    } else {
        revealTargets.forEach(el => el.classList.add('is-visible'));
    }

    // ---------- Подсветка активного раздела в навигации ----------
    const sections = ['features', 'how-to-start', 'rules', 'community', 'faq']
        .map(id => document.getElementById(id))
        .filter(Boolean);
    const navLinks = document.querySelectorAll('.nav__link');

    if (sections.length && navLinks.length && 'IntersectionObserver' in window) {
        const setActive = (id) => {
            navLinks.forEach(link => {
                const isActive = link.getAttribute('href') === `#${id}`;
                link.style.color = isActive ? 'var(--accent)' : '';
            });
        };

        const io = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) setActive(entry.target.id);
            });
        }, { rootMargin: '-45% 0px -50% 0px' });

        sections.forEach(s => io.observe(s));
    }
})();
