// Lightweight scroll animations, counters, and subtle flair
// No layout/background changes, only transitions and opacity transforms

(function () {
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Add a class to root if reduced motion to skip animations
  if (prefersReduced) {
    document.documentElement.classList.add('reduced-motion');
  }

  // Observe elements with data-animate
  const animated = new Set();
  const defaultMap = {
    'fade-up': { from: { y: 30, opacity: 0 }, to: { y: 0, opacity: 1 } },
    'fade-in': { from: { y: 0, opacity: 0 }, to: { y: 0, opacity: 1 } },
    'zoom-in': { from: { scale: 0.9, opacity: 0 }, to: { scale: 1, opacity: 1 } },
    'reveal': { from: { y: 20, opacity: 0 }, to: { y: 0, opacity: 1 } },
    'slide-right': { from: { x: -50, opacity: 0 }, to: { x: 0, opacity: 1 } },
    'slide-left': { from: { x: 50, opacity: 0 }, to: { x: 0, opacity: 1 } },
    'bounce-in': { from: { scale: 0.3, y: 0, opacity: 0 }, to: { scale: 1, y: 0, opacity: 1 } },
    'flip-in': { from: { rotateX: -90, opacity: 0 }, to: { rotateX: 0, opacity: 1 } },
    'rotate-in': { from: { rotate: -180, scale: 0.8, opacity: 0 }, to: { rotate: 0, scale: 1, opacity: 1 } },
    'scale-up': { from: { scale: 0.6, opacity: 0 }, to: { scale: 1, opacity: 1 } },
  };

  function applyFrom(el, def) {
    el.style.willChange = 'transform, opacity';
    el.style.opacity = def.from.opacity;
    const t = [];
    if (def.from.y) t.push(`translateY(${def.from.y}px)`);
    if (def.from.x) t.push(`translateX(${def.from.x}px)`);
    if (def.from.scale) t.push(`scale(${def.from.scale})`);
    if (def.from.rotate) t.push(`rotate(${def.from.rotate}deg)`);
    if (def.from.rotateX) t.push(`perspective(1000px) rotateX(${def.from.rotateX}deg)`);
    el.style.transform = t.join(' ');
  }

  function animateTo(el, def) {
    // Respect user motion preferences
    if (prefersReduced) {
      el.style.opacity = 1;
      el.style.transform = 'none';
      return;
    }

    // Enhanced timing for different animations with slower, better easing
    let timing = 'transform 1400ms cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 1200ms cubic-bezier(0.25, 0.46, 0.45, 0.94)';
    const animType = el.getAttribute('data-animate');
    
    if (animType === 'bounce-in') {
      timing = 'transform 1800ms cubic-bezier(0.34, 1.56, 0.64, 1), opacity 1400ms ease-out';
    } else if (animType === 'flip-in') {
      timing = 'transform 1600ms cubic-bezier(0.175, 0.885, 0.32, 1.275), opacity 1200ms ease-out';
    } else if (animType === 'rotate-in') {
      timing = 'transform 1900ms cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 1400ms ease-out';
    } else if (animType === 'slide-right' || animType === 'slide-left') {
      timing = 'transform 1500ms cubic-bezier(0.23, 1, 0.32, 1), opacity 1200ms ease-out';
    } else if (animType === 'scale-up') {
      timing = 'transform 1700ms cubic-bezier(0.34, 1.56, 0.64, 1), opacity 1400ms ease-out';
    }

    // Add will-change for better performance
    el.style.willChange = 'transform, opacity';
    el.style.transition = timing;
    el.style.opacity = def.to.opacity;
    const t = [];
    if (def.to.y !== undefined) t.push(`translateY(${def.to.y}px)`);
    if (def.to.x !== undefined) t.push(`translateX(${def.to.x}px)`);
    if (def.to.scale) t.push(`scale(${def.to.scale})`);
    if (def.to.rotate !== undefined) t.push(`rotate(${def.to.rotate}deg)`);
    if (def.to.rotateX !== undefined) t.push(`perspective(1000px) rotateX(${def.to.rotateX}deg)`);
    if (t.length === 0) t.push('none');
    el.style.transform = t.join(' ');
    
    // Clean up will-change after animation
    setTimeout(() => {
      el.style.willChange = 'auto';
    }, 2000);
  }

  const io = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      const el = entry.target;
      if (entry.isIntersecting && !animated.has(el)) {
        const key = el.getAttribute('data-animate') || 'fade-in';
        const def = defaultMap[key] || defaultMap['fade-in'];
        
        // Apply optional stagger delay from parent [data-stagger]
        const parent = el.closest('[data-stagger]');
        const idx = parent ? Array.from(parent.querySelectorAll('[data-animate]')).indexOf(el) : -1;
        const delayBase = parent ? parseInt(parent.getAttribute('data-stagger') || '0', 10) : 0;
        const delay = Math.max(0, (idx >= 0 ? idx : 0) * delayBase);
        
        // Add extra delay for hero section elements for staggered entrance
        const isHeroElement = el.closest('.banner');
        const heroDelay = isHeroElement ? 300 : 0;
        const totalDelay = delay + heroDelay;
        
        if (totalDelay > 0 && !prefersReduced) {
          el.style.transitionDelay = `${totalDelay}ms`;
          el.style.setProperty('--stagger-delay', `${totalDelay}ms`);
        }
        
        requestAnimationFrame(() => {
          setTimeout(() => {
            animateTo(el, def);
            el.classList.add('is-inview');
          }, isHeroElement ? 150 : 0);
        });
        animated.add(el);
        // Don't unobserve for banner elements to prevent re-triggering
        if (!isHeroElement) {
          io.unobserve(el);
        }
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -5% 0px'
  });

  // Prime elements with initial styles and observe
  document.querySelectorAll('[data-animate]').forEach((el) => {
    // Skip banner image as it has its own observer
    if (el.classList.contains('hero-image') && el.closest('.banner')) {
      return;
    }
    
    const key = el.getAttribute('data-animate');
    const def = defaultMap[key] || defaultMap['fade-in'];
    applyFrom(el, def);
    io.observe(el);
  });

  // Enhanced floating animation for banner image with slower, smoother motion
  const floaters = document.querySelectorAll('.animate-float');
  floaters.forEach((el) => {
    el.style.animation = 'floatY 12s cubic-bezier(0.25, 0.46, 0.45, 0.94) infinite';
    el.style.willChange = 'transform, filter';
    el.style.backfaceVisibility = 'hidden';
    el.style.transformStyle = 'preserve-3d';
    
    // Prevent animation restart on banner elements
    if (el.closest('.banner')) {
      el.style.animationFillMode = 'both';
      el.style.animationPlayState = 'running';
      // Mark banner floaters as pre-animated to prevent conflicts
      el.classList.add('banner-float-initialized');
    }
  });

  // Specific handler for banner image to prevent flicker
  const bannerImage = document.querySelector('.banner .hero-image');
  if (bannerImage) {
    // Ensure the banner image starts with proper initial state
    bannerImage.style.opacity = '0';
    bannerImage.style.transform = 'translateX(20px) scale(0.95) rotate(2deg)';
    
    // Add a one-time initialization flag
    let bannerAnimated = false;
    
    // Override the intersection observer for banner image specifically
    const bannerObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && !bannerAnimated) {
          bannerAnimated = true;
          setTimeout(() => {
            bannerImage.style.animation = 'heroImageReveal 2.0s cubic-bezier(0.34, 1.56, 0.64, 1) forwards';
            bannerImage.classList.add('is-inview');
            
            // Start floating animation after hero animation
            setTimeout(() => {
              bannerImage.style.animation += ', floatY 12s cubic-bezier(0.25, 0.46, 0.45, 0.94) infinite';
            }, 2200);
          }, 150);
          bannerObserver.unobserve(bannerImage);
        }
      });
    }, { threshold: 0.1 });
    
    bannerObserver.observe(bannerImage);
  }

  // Simple stat counter for .impact-card .percentage (keeps existing layout)
  function animateCount(el) {
    const text = el.textContent.trim();
    const isPercent = text.endsWith('%');
    const num = parseInt(text.replace(/[^0-9]/g, ''), 10);
    if (isNaN(num)) return;

    let start = 0;
    const duration = 1200; // ms
    const startTime = performance.now();

    function step(now) {
      const t = Math.min(1, (now - startTime) / duration);
      const eased = 1 - Math.pow(1 - t, 3); // easeOutCubic
      const val = Math.round(start + (num - start) * eased);
      el.textContent = isPercent ? `${val}%` : `${val}`;
      if (t < 1) requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
  }

  const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.querySelectorAll('.percentage').forEach(animateCount);
        statsObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  document.querySelectorAll('.impact-cards').forEach((wrap) => statsObserver.observe(wrap));

  // Initialize Bootstrap carousel if present (relies on already-loaded bootstrap bundle)
  if (window.bootstrap) {
    document.querySelectorAll('.carousel').forEach((c) => {
      try {
        bootstrap.Carousel.getOrCreateInstance(c, { interval: 4000, ride: true, pause: false, touch: true });
      } catch (e) { /* no-op */ }
    });
  }

  // Smooth scroll for anchors and page fade transitions
  const nav = document.getElementById('navbarRight');
  function getHeaderOffset() {
    const header = document.querySelector('.site-header');
    const extra = 8; // breathing room
    return (header?.offsetHeight || 64) + extra;
  }
  function smoothScrollTo(targetId) {
    const el = document.querySelector(targetId);
    if (!el) return;
    const y = el.getBoundingClientRect().top + window.scrollY - getHeaderOffset();
    window.scrollTo({ top: y, behavior: prefersReduced ? 'auto' : 'smooth' });
  }

  // Intercept all in-page anchors (not just nav links)
  document.querySelectorAll('a[href^="#"], a[href^="index.php#"]').forEach((a) => {
    a.addEventListener('click', (e) => {
      const href = a.getAttribute('href') || '';
      // Skip if explicitly opted out
      if (a.hasAttribute('data-no-scroll')) return;

      // Handle links like index.php#section when already on index
      const isIndexHash = href.startsWith('index.php#');
      const hash = isIndexHash ? '#' + href.split('#')[1] : href;

      if (hash && hash.startsWith('#') && hash.length > 1) {
        // Only intercept if the target is on current document
        const isOnIndex = /(?:^|\/)index\.php$/.test(window.location.pathname) || /(?:^|\/)$/ .test(window.location.pathname);
        if (!isIndexHash || (isIndexHash && isOnIndex)) {
          const target = document.querySelector(hash);
          if (target) {
            e.preventDefault();
            smoothScrollTo(hash);
            // collapse mobile menu if open
            if (nav && nav.classList.contains('show')) {
              const collapse = bootstrap?.Collapse?.getOrCreateInstance(nav, { toggle: false });
              collapse?.hide?.();
            }
          }
        }
      }
    });
  });

  // If page loads with a hash, nudge-scroll to account for fixed header
  window.addEventListener('load', () => {
    if (location.hash && document.querySelector(location.hash)) {
      // Delay to allow layout to settle
      setTimeout(() => smoothScrollTo(location.hash), 60);
    }
  });

  // Gentle page fade-out on internal navigation (non-hash)
  document.addEventListener('click', (e) => {
    const a = e.target.closest && e.target.closest('a');
    if (!a) return;
    if (prefersReduced) return;
    if (a.target === '_blank' || a.hasAttribute('download')) return;
    const href = a.getAttribute('href');
    if (!href || href.startsWith('#')) return;
    // Only same-origin links
    let url;
    try { url = new URL(href, window.location.href); } catch { return; }
    if (url.origin !== window.location.origin) return;

    // Allow Bootstrap collapses to work first if it's a toggler
    if (a.hasAttribute('data-bs-toggle')) return;

    e.preventDefault();
    document.body.classList.add('page-fade-out');
    setTimeout(() => { window.location.href = url.href; }, 160);
  }, true);

  // Interactive tilt-on-hover for cards (no library)
  const tiltEls = document.querySelectorAll('.tilt');
  const maxTilt = 6; // degrees
  const resetTilt = (el) => { el.style.transform = ''; };
  tiltEls.forEach((el) => {
    let frameId = 0;
    function onMove(e) {
      const rect = el.getBoundingClientRect();
      const px = (e.clientX - rect.left) / rect.width;
      const py = (e.clientY - rect.top) / rect.height;
      const rx = (0.5 - py) * maxTilt;
      const ry = (px - 0.5) * maxTilt;
      cancelAnimationFrame(frameId);
      frameId = requestAnimationFrame(() => {
        el.style.transform = `rotateX(${rx}deg) rotateY(${ry}deg)`;
      });
    }
    function onLeave() {
      cancelAnimationFrame(frameId);
      el.style.transition = 'transform 200ms ease';
      resetTilt(el);
      setTimeout(() => (el.style.transition = ''), 220);
    }
    el.addEventListener('mousemove', onMove);
    el.addEventListener('mouseleave', onLeave);
    el.addEventListener('mouseenter', () => { el.style.willChange = 'transform'; });
  });

  // Enhanced scroll progress bar and smooth parallax
  let ticking = false;
  function onScroll() {
    if (!ticking) {
      requestAnimationFrame(() => {
        const doc = document.documentElement;
        const scrollTop = doc.scrollTop || document.body.scrollTop;
        const scrollHeight = doc.scrollHeight - doc.clientHeight;
        const p = scrollHeight > 0 ? (scrollTop / scrollHeight) * 100 : 0;
        document.body.style.setProperty('--scroll-progress', p.toFixed(2) + '%');

        // Enhanced parallax on banner side image with momentum
        const bannerImg = document.querySelector('.banner .animate-float');
        if (bannerImg && !prefersReduced) {
          const rect = bannerImg.getBoundingClientRect();
          const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
          
          if (isVisible) {
            const scrollPercent = scrollTop / window.innerHeight;
            const parallaxOffset = Math.min(30, scrollTop * 0.08);
            const rotationOffset = Math.sin(scrollPercent * Math.PI) * 2;
            
            bannerImg.style.setProperty('--parallax-y', parallaxOffset.toFixed(2) + 'px');
            bannerImg.style.setProperty('--parallax-rotation', rotationOffset.toFixed(2) + 'deg');
            bannerImg.classList.add('parallax-y');
          }
        }
        ticking = false;
      });
      ticking = true;
    }
  }
  document.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // Active section highlighting for navbar links
  const sectionAnchors = Array.from(document.querySelectorAll('a.nav-link[href^="#"]').values());
  const sections = sectionAnchors
    .map(a => [a, document.querySelector(a.getAttribute('href'))])
    .filter(([, el]) => !!el);

  const highlight = () => {
    const y = window.scrollY + 100; // offset
    let activeA = null;
    for (const [a, el] of sections) {
      const rect = el.getBoundingClientRect();
      const top = rect.top + window.scrollY;
      if (y >= top && y < top + el.offsetHeight) { activeA = a; break; }
    }
    sectionAnchors.forEach(a => a.classList.toggle('active', a === activeA));
  };
  document.addEventListener('scroll', highlight, { passive: true });
  highlight();

  // Click ripple on .btn and .btn-gradient-border
  function attachRipple(el) {
    el.style.position = el.style.position || 'relative';
    el.style.overflow = 'hidden';
    el.addEventListener('click', (e) => {
      const d = Math.max(el.clientWidth, el.clientHeight);
      const r = document.createElement('span');
      r.style.position = 'absolute';
      r.style.borderRadius = '50%';
      r.style.pointerEvents = 'none';
      r.style.width = r.style.height = d + 'px';
      const rect = el.getBoundingClientRect();
      r.style.left = (e.clientX - rect.left - d / 2) + 'px';
      r.style.top = (e.clientY - rect.top - d / 2) + 'px';
      r.style.background = 'radial-gradient(circle, rgba(255,255,255,0.35) 0%, rgba(255,255,255,0) 60%)';
      r.style.transform = 'scale(0)';
      r.style.transition = 'transform 500ms ease, opacity 700ms ease';
      el.appendChild(r);
      requestAnimationFrame(() => { r.style.transform = 'scale(1)'; r.style.opacity = '0'; });
      setTimeout(() => r.remove(), 750);
    });
  }
  document.querySelectorAll('.btn, .btn-gradient-border').forEach(attachRipple);

  // Typewriter effect for special headings
  function typewriterEffect(element, text, speed = 100) {
    if (prefersReduced) {
      element.textContent = text;
      return;
    }
    
    element.style.borderRight = '2px solid #ff4fd8';
    element.style.whiteSpace = 'normal';
    element.style.overflow = 'visible';
    element.style.animation = 'blinkCursor 1s infinite';
    
    let i = 0;
    element.textContent = '';
    
    function type() {
      if (i < text.length) {
        element.textContent += text.charAt(i);
        i++;
        setTimeout(type, speed);
      } else {
        setTimeout(() => {
          element.style.borderRight = 'none';
          element.style.animation = 'none';
        }, 1000);
      }
    }
    type();
  }

  // Observe typewriter elements
  const typewriterObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && !animated.has(entry.target)) {
        const speed = parseInt(entry.target.getAttribute('data-typewriter-speed') || '80', 10);
        const text = entry.target.textContent;
        typewriterEffect(entry.target, text, speed);
        animated.add(entry.target);
        typewriterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.7 });

  document.querySelectorAll('[data-typewriter]').forEach(el => {
    typewriterObserver.observe(el);
  });

  // Particle effect on hover for special elements
  function createParticle(x, y, container) {
    const particle = document.createElement('div');
    particle.style.position = 'absolute';
    particle.style.left = x + 'px';
    particle.style.top = y + 'px';
    particle.style.width = '4px';
    particle.style.height = '4px';
    particle.style.background = `hsl(${Math.random() * 60 + 280}, 70%, 60%)`;
    particle.style.borderRadius = '50%';
    particle.style.pointerEvents = 'none';
    particle.style.transition = 'all 1s ease-out';
    particle.style.zIndex = '1000';
    
    container.appendChild(particle);
    
    requestAnimationFrame(() => {
      particle.style.transform = `translate(${(Math.random() - 0.5) * 100}px, ${(Math.random() - 0.5) * 100}px) scale(0)`;
      particle.style.opacity = '0';
    });
    
    setTimeout(() => particle.remove(), 1000);
  }

  // Add particle effects to gradient text elements
  document.querySelectorAll('.gradient-text').forEach(el => {
    let particleCount = 0;
    el.style.position = 'relative';
    
    el.addEventListener('mouseenter', function(e) {
      if (prefersReduced) return;
      
      const rect = el.getBoundingClientRect();
      const interval = setInterval(() => {
        if (particleCount < 8) {
          const x = Math.random() * rect.width;
          const y = Math.random() * rect.height;
          createParticle(x, y, el);
          particleCount++;
        } else {
          clearInterval(interval);
          particleCount = 0;
        }
      }, 100);
      
      el._particleInterval = interval;
    });
    
    el.addEventListener('mouseleave', function() {
      if (el._particleInterval) {
        clearInterval(el._particleInterval);
        particleCount = 0;
      }
    });
  });

  // Magnetic effect for buttons
  document.querySelectorAll('.btn-gradient-border, .btn-gradient').forEach(btn => {
    btn.addEventListener('mousemove', function(e) {
      if (prefersReduced) return;
      
      const rect = btn.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;
      
      const distance = Math.sqrt(x * x + y * y);
      const maxDistance = Math.max(rect.width, rect.height);
      
      if (distance < maxDistance * 0.5) {
        const force = (1 - distance / (maxDistance * 0.5)) * 10;
        btn.style.transform = `translate(${x * force * 0.1}px, ${y * force * 0.1}px)`;
      }
    });
    
    btn.addEventListener('mouseleave', function() {
      btn.style.transform = '';
    });
  });

  // Loading shimmer effect for images
  document.querySelectorAll('img').forEach(img => {
    if (!img.complete) {
      img.style.background = 'linear-gradient(90deg, #333 25%, #555 50%, #333 75%)';
      img.style.backgroundSize = '200% 100%';
      img.style.animation = 'shimmer 1.5s infinite';
      
      img.addEventListener('load', function() {
        img.style.background = '';
        img.style.animation = '';
      });
    }
  });

  // Add CSS for shimmer animation
  if (!document.getElementById('shimmer-styles')) {
    const shimmerCSS = document.createElement('style');
    shimmerCSS.id = 'shimmer-styles';
    shimmerCSS.textContent = `
      @keyframes shimmer {
        0% { background-position: -200% 0; }
        100% { background-position: 200% 0; }
      }
    `;
    document.head.appendChild(shimmerCSS);
  }

  // Mouse cursor trail effect
  if (!prefersReduced) {
    const trailElements = [];
    const maxTrailElements = 15;
    
    for (let i = 0; i < maxTrailElements; i++) {
      const trail = document.createElement('div');
      trail.style.position = 'fixed';
      trail.style.width = '6px';
      trail.style.height = '6px';
      trail.style.borderRadius = '50%';
      trail.style.pointerEvents = 'none';
      trail.style.zIndex = '9999';
      trail.style.background = `hsl(${280 + i * 5}, 70%, ${60 + i * 2}%)`;
      trail.style.opacity = (maxTrailElements - i) / maxTrailElements;
      trail.style.transform = 'scale(0)';
      trail.style.transition = 'transform 0.2s ease-out';
      document.body.appendChild(trail);
      trailElements.push(trail);
    }
    
    let mouseX = 0, mouseY = 0;
    let trailIndex = 0;
    
    document.addEventListener('mousemove', (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;
      
      const trail = trailElements[trailIndex];
      trail.style.left = (mouseX - 3) + 'px';
      trail.style.top = (mouseY - 3) + 'px';
      trail.style.transform = 'scale(1)';
      
      setTimeout(() => {
        trail.style.transform = 'scale(0)';
      }, 100);
      
      trailIndex = (trailIndex + 1) % maxTrailElements;
    });
  }

  // Enhanced scroll effects with momentum
  let scrollMomentum = 0;
  let lastScrollY = 0;
  
  function updateScrollEffects() {
    const currentScrollY = window.scrollY;
    scrollMomentum = currentScrollY - lastScrollY;
    lastScrollY = currentScrollY;
    
    // Apply momentum-based parallax to floating images
    document.querySelectorAll('.animate-float').forEach(img => {
      if (!prefersReduced) {
        const momentum = Math.min(Math.max(scrollMomentum * 0.1, -2), 2);
        img.style.setProperty('--momentum-y', momentum + 'px');
        img.classList.add('momentum-float');
      }
    });
    
    requestAnimationFrame(updateScrollEffects);
  }
  
  if (!prefersReduced) {
    requestAnimationFrame(updateScrollEffects);
  }

  // Add momentum float CSS
  if (!document.getElementById('momentum-styles')) {
    const momentumCSS = document.createElement('style');
    momentumCSS.id = 'momentum-styles';
    momentumCSS.textContent = `
      .momentum-float {
        transform: translateY(calc(var(--parallax-y, 0px) + var(--momentum-y, 0px))) translateZ(0);
        transition: transform 0.1s ease-out;
      }
    `;
    document.head.appendChild(momentumCSS);
  }

})();
