/* ==========================================================================
   Butazzo Pizza — Home v5 "Dark Fine Dining"
   GSAP + ScrollTrigger + Lenis smooth scroll
   ========================================================================== */

(function () {
  "use strict";

  const ready = (fn) =>
    document.readyState !== "loading"
      ? fn()
      : document.addEventListener("DOMContentLoaded", fn);

  ready(() => {
    initPreloader();
    initLenis();
    initNav();
    initHero();
    initTicker();
    initSectionReveals();
    initStoryPin();
    initMenuHorizontal();
    initStatsCounter();
    initReviewsSlider();
    initReservation();
    initYear();
  });

  /* ----- Preloader ----- */
  function initPreloader() {
    const pre = document.querySelector(".preloader");
    if (!pre) return;
    const bar = pre.querySelector(".preloader__bar span");
    const count = pre.querySelector(".preloader__count");
    const obj = { v: 0 };

    if (window.gsap) {
      gsap.to(obj, {
        v: 100,
        duration: 1.8,
        ease: "power2.inOut",
        onUpdate: () => {
          const n = Math.round(obj.v);
          if (count) count.textContent = String(n).padStart(3, "0") + " / 100";
          if (bar) bar.style.width = n + "%";
        },
        onComplete: () => {
          gsap.to(pre, {
            y: "-100%",
            duration: 1.1,
            ease: "power3.inOut",
            onComplete: () => {
              pre.style.display = "none";
              document.body.classList.add("is-loaded");
              playHero();
            },
          });
        },
      });
    } else {
      pre.style.display = "none";
      document.body.classList.add("is-loaded");
      playHero();
    }
  }

  /* ----- Lenis smooth scroll ----- */
  function initLenis() {
    if (!window.Lenis) return;
    const lenis = new Lenis({
      duration: 1.2,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      smoothWheel: true,
    });
    window.lenis = lenis;

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    if (window.gsap && window.ScrollTrigger) {
      lenis.on("scroll", ScrollTrigger.update);
      gsap.ticker.add((time) => lenis.raf(time * 1000));
      gsap.ticker.lagSmoothing(0);
    }
  }

  /* ----- Nav ----- */
  function initNav() {
    const nav = document.querySelector(".nav");
    if (!nav) return;
    const onScroll = () => {
      nav.classList.toggle("is-scrolled", window.scrollY > 80);
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();

    // Smooth anchor scroll via Lenis if present
    document.querySelectorAll('a[href^="#"]').forEach((a) => {
      a.addEventListener("click", (e) => {
        const id = a.getAttribute("href");
        if (id.length < 2) return;
        const target = document.querySelector(id);
        if (!target) return;
        e.preventDefault();
        if (window.lenis) window.lenis.scrollTo(target, { offset: -60 });
        else target.scrollIntoView({ behavior: "smooth" });
      });
    });

    // Mobile toggle — hamburger/X + body scroll lock
    const toggle = nav.querySelector(".nav__toggle");
    const menu = nav.querySelector(".nav__menu");
    if (toggle && menu) {
      const closeMenu = () => {
        menu.classList.remove("is-open");
        toggle.classList.remove("is-active");
        nav.classList.remove("menu-open");
        document.body.style.overflow = "";
      };
      toggle.addEventListener("click", () => {
        const isOpen = menu.classList.toggle("is-open");
        toggle.classList.toggle("is-active", isOpen);
        nav.classList.toggle("menu-open", isOpen);
        document.body.style.overflow = isOpen ? "hidden" : "";
      });
      menu.querySelectorAll("a").forEach((a) => {
        a.addEventListener("click", closeMenu);
      });
      document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") closeMenu();
      });
    }
  }

  /* ----- Hero kinetic typography ----- */
  function splitWords(el) {
    const text = el.textContent.trim();
    const words = text.split(/\s+/);
    el.innerHTML = words
      .map(
        (w) =>
          `<span class="word"><span class="word__inner" style="display:inline-block;transform:translateY(110%);">${w}</span></span>`
      )
      .join(" ");
  }

  function playHero() {
    if (!window.gsap) return;
    const title = document.querySelector(".hero__title");
    if (title) {
      const inners = title.querySelectorAll(".word__inner");
      gsap.to(inners, {
        y: 0,
        duration: 1.4,
        ease: "expo.out",
        stagger: 0.08,
      });
    }
    gsap.from(".hero__meta, .hero__lede, .hero__cta", {
      y: 30,
      opacity: 0,
      duration: 1,
      delay: 0.6,
      ease: "power3.out",
      stagger: 0.12,
    });
  }

  function initHero() {
    document.querySelectorAll(".hero__title .line").forEach((line) => {
      splitWords(line);
    });

    if (window.gsap && window.ScrollTrigger) {
      // Subtle parallax on hero video
      gsap.to(".hero__video", {
        yPercent: 18,
        ease: "none",
        scrollTrigger: {
          trigger: ".hero",
          start: "top top",
          end: "bottom top",
          scrub: true,
        },
      });
      gsap.to(".hero__title", {
        yPercent: -10,
        opacity: 0.4,
        ease: "none",
        scrollTrigger: {
          trigger: ".hero",
          start: "top top",
          end: "bottom top",
          scrub: true,
        },
      });
    }
  }

  /* ----- Ticker (duplicate items for seamless loop) ----- */
  function initTicker() {
    document.querySelectorAll(".ticker__track").forEach((track) => {
      track.innerHTML = track.innerHTML + track.innerHTML;
    });
  }

  /* ----- Generic reveal-up / fade / line stagger ----- */
  function initSectionReveals() {
    if (!window.gsap || !window.ScrollTrigger) return;

    gsap.utils.toArray(".reveal-up").forEach((el) => {
      gsap.to(el, {
        y: 0,
        opacity: 1,
        duration: 1.1,
        ease: "power3.out",
        scrollTrigger: { trigger: el, start: "top 85%" },
      });
    });

    gsap.utils.toArray(".reveal-fade").forEach((el) => {
      gsap.to(el, {
        opacity: 1,
        duration: 1.4,
        ease: "power2.out",
        scrollTrigger: { trigger: el, start: "top 85%" },
      });
    });

    gsap.utils.toArray("[data-stagger]").forEach((parent) => {
      const children = parent.querySelectorAll("[data-stagger-item]");
      gsap.from(children, {
        y: 40,
        opacity: 0,
        duration: 1,
        ease: "power3.out",
        stagger: 0.12,
        scrollTrigger: { trigger: parent, start: "top 80%" },
      });
    });

    // Split line reveals for section heads
    gsap.utils.toArray(".split-title").forEach((el) => {
      const words = el.textContent.trim().split(/\s+/);
      el.innerHTML = words
        .map(
          (w) =>
            `<span style="display:inline-block;overflow:hidden;vertical-align:bottom;"><span class="sw" style="display:inline-block;transform:translateY(110%);">${w}</span></span>`
        )
        .join(" ");
      const inners = el.querySelectorAll(".sw");
      gsap.to(inners, {
        y: 0,
        duration: 1.1,
        ease: "expo.out",
        stagger: 0.06,
        scrollTrigger: { trigger: el, start: "top 85%" },
      });
    });
  }

  /* ----- Story (pinned media) — sticky CSS handles pin; add parallax on chapters ----- */
  function initStoryPin() {
    if (!window.gsap || !window.ScrollTrigger) return;
    gsap.utils.toArray(".story__chapter").forEach((ch) => {
      gsap.from(ch, {
        y: 60,
        opacity: 0,
        duration: 1.1,
        ease: "power3.out",
        scrollTrigger: { trigger: ch, start: "top 80%" },
      });
    });
    gsap.to(".story__media img", {
      yPercent: -8,
      ease: "none",
      scrollTrigger: {
        trigger: ".story",
        start: "top bottom",
        end: "bottom top",
        scrub: true,
      },
    });
  }

  /* ----- Menu horizontal scroll (GSAP ScrollTrigger pin + scrub) ----- */
  function initMenuHorizontal() {
    if (!window.gsap || !window.ScrollTrigger) return;
    const wrap = document.querySelector(".menu-h__track-wrap");
    const track = document.querySelector(".menu-h__track");
    const progress = document.querySelector(".menu-h__progress span");
    if (!wrap || !track) return;

    const getScrollDistance = () =>
      Math.max(0, track.scrollWidth - window.innerWidth + 80);

    const tween = gsap.to(track, {
      x: () => -getScrollDistance(),
      ease: "none",
      scrollTrigger: {
        trigger: wrap,
        start: "top top",
        end: () => "+=" + getScrollDistance(),
        pin: true,
        scrub: 0.6,
        invalidateOnRefresh: true,
        onUpdate: (self) => {
          if (progress) progress.style.width = (self.progress * 100).toFixed(2) + "%";
        },
      },
    });

    // Card subtle entrance as they near viewport center
    gsap.utils.toArray(".menu-card").forEach((card, i) => {
      gsap.from(card, {
        y: 40,
        opacity: 0.5,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
          trigger: card,
          containerAnimation: tween,
          start: "left 90%",
          toggleActions: "play none none reverse",
        },
      });
    });
  }

  /* ----- Stats counter ----- */
  function initStatsCounter() {
    if (!window.gsap || !window.ScrollTrigger) return;
    document.querySelectorAll(".stat__num[data-count]").forEach((el) => {
      const target = parseInt(el.dataset.count, 10);
      const suffix = el.dataset.suffix || "";
      const obj = { v: 0 };
      gsap.to(obj, {
        v: target,
        duration: 2.4,
        ease: "power2.out",
        scrollTrigger: { trigger: el, start: "top 85%" },
        onUpdate: () => {
          el.textContent = Math.round(obj.v).toLocaleString() + suffix;
        },
      });
    });
  }

  /* ----- Reviews slider (Swiper) ----- */
  function initReviewsSlider() {
    if (!window.Swiper) return;
    new Swiper(".reviews__slider .swiper", {
      loop: true,
      autoplay: { delay: 6000, disableOnInteraction: false },
      effect: "fade",
      fadeEffect: { crossFade: true },
      speed: 900,
      pagination: { el: ".reviews__pagination", clickable: true },
    });
  }

  /* ----- Reservation — Flatpickr date + Choices.js selects ----- */
  function initReservation() {
    const dateInput = document.querySelector("#reserve-date");
    if (dateInput && window.flatpickr) {
      flatpickr(dateInput, {
        minDate: "today",
        maxDate: new Date().fp_incr(365),
        disableMobile: true,
        dateFormat: "D, d M Y",
        disable: [
          function (date) { return date.getDay() === 1; }
        ],
        onReady: function (_, __, instance) {
          var wrapper = instance.calendarContainer.querySelector(".numInputWrapper");
          if (!wrapper) return;
          var minY = new Date().getFullYear();
          var maxY = minY + 1;
          var curY = instance.currentYear;
          var sel = document.createElement("select");
          sel.className = "fp-year-select";
          for (var y = minY; y <= maxY; y++) {
            var opt = document.createElement("option");
            opt.value = y;
            opt.textContent = y;
            if (y === curY) opt.selected = true;
            sel.appendChild(opt);
          }
          sel.addEventListener("change", function () {
            instance.changeYear(parseInt(this.value, 10));
          });
          wrapper.parentNode.replaceChild(sel, wrapper);
        },
        onYearChange: function (_, __, instance) {
          var sel = instance.calendarContainer.querySelector(".fp-year-select");
          if (sel) sel.value = instance.currentYear;
        },
      });
    }

    if (window.Choices) {
      document.querySelectorAll(".choices-select").forEach(function (el) {
        new Choices(el, {
          searchEnabled: false,
          itemSelectText: "",
          shouldSort: false,
          allowHTML: false,
        });
      });
    }
  }

  /* ----- Year ----- */
  function initYear() {
    document.querySelectorAll("[data-year]").forEach((el) => {
      el.textContent = new Date().getFullYear();
    });
  }
})();
