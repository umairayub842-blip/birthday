/**
 * ============================================================
 * ROMANTIC BIRTHDAY MINI WEBSITE - SCRIPT
 * Smooth interactions, Lightbox, Floating Canvas & Confetti
 * ============================================================
 */

document.addEventListener('DOMContentLoaded', () => {

  /* ------------------------------------------------------------
   * 1. AMBIENT FLOATING HEARTS & SPARKLES CANVAS
   * ------------------------------------------------------------ */
  const ambientCanvas = document.getElementById('ambient-canvas');
  if (ambientCanvas) {
    const ctx = ambientCanvas.getContext('2d');
    let width = (ambientCanvas.width = window.innerWidth);
    let height = (ambientCanvas.height = window.innerHeight);

    let resizeRaf = null;
    window.addEventListener('resize', () => {
      if (resizeRaf) cancelAnimationFrame(resizeRaf);
      resizeRaf = requestAnimationFrame(() => {
        width = ambientCanvas.width = window.innerWidth;
        height = ambientCanvas.height = window.innerHeight;
      });
    }, { passive: true });

    const particles = [];
    const maxParticles = window.innerWidth < 600 ? 16 : (window.innerWidth < 1024 ? 26 : 38);

    class FloatingParticle {
      constructor() {
        this.reset(true);
      }

      reset(init = false) {
        this.x = Math.random() * width;
        this.y = init ? Math.random() * height : height + 20;
        this.size = Math.random() * 12 + 8;
        this.speedY = Math.random() * 0.5 + 0.35;
        this.speedX = Math.sin(Math.random() * Math.PI) * 0.35;
        this.angle = Math.random() * Math.PI * 2;
        this.angleSpeed = (Math.random() - 0.5) * 0.02;
        this.opacity = Math.random() * 0.45 + 0.2;
        this.type = Math.random() > 0.3 ? 'heart' : 'sparkle';
        this.color = ['#FF7597', '#E55C80', '#F3C68F', '#FFCCD7', '#C92A54', '#FFA8BE'][
          Math.floor(Math.random() * 6)
        ];
      }

      update() {
        this.y -= this.speedY;
        this.x += Math.sin(this.angle) * 0.4;
        this.angle += this.angleSpeed;

        if (this.y < -30) {
          this.reset();
        }
      }

      draw() {
        ctx.save();
        ctx.translate(this.x, this.y);
        ctx.globalAlpha = this.opacity;

        if (this.type === 'heart') {
          ctx.rotate(this.angle * 0.2);
          ctx.fillStyle = this.color;
          const s = this.size * 0.5;
          ctx.beginPath();
          ctx.moveTo(0, s * 0.3);
          ctx.bezierCurveTo(-s, -s * 0.6, -s * 1.6, s * 0.4, 0, s * 1.5);
          ctx.bezierCurveTo(s * 1.6, s * 0.4, s, -s * 0.6, 0, s * 0.3);
          ctx.fill();
        } else {
          // Sparkle
          ctx.fillStyle = '#FFE5B4';
          const r = this.size * 0.3;
          ctx.beginPath();
          ctx.arc(0, 0, r, 0, Math.PI * 2);
          ctx.fill();
        }

        ctx.restore();
      }
    }

    for (let i = 0; i < maxParticles; i++) {
      particles.push(new FloatingParticle());
    }

    let isVisible = true;
    document.addEventListener('visibilitychange', () => {
      isVisible = !document.hidden;
    });

    function animateAmbient() {
      if (isVisible) {
        ctx.clearRect(0, 0, width, height);
        for (let i = 0; i < particles.length; i++) {
          particles[i].update();
          particles[i].draw();
        }
      }
      requestAnimationFrame(animateAmbient);
    }
    animateAmbient();
  }

  /* ------------------------------------------------------------
   * 2. HERO / OPEN SURPRISE BUTTON TRANSITION
   * ------------------------------------------------------------ */
  const openSurpriseBtn = document.getElementById('btn-open-surprise');
  const birthdaySection = document.getElementById('birthday-section');

  if (openSurpriseBtn && birthdaySection) {
    openSurpriseBtn.addEventListener('click', () => {
      // Soft gentle chime note
      playSoftChime();

      // Trigger a small heart burst
      spawnHeartBurst(window.innerWidth / 2, window.innerHeight * 0.65, 12);

      // Smoothly scroll down to birthday greeting
      birthdaySection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  }

  /* ------------------------------------------------------------
   * 3. INTERACTIVE BIRTHDAY CAKE & CANDLE
   * ------------------------------------------------------------ */
  const cakeWrapper = document.getElementById('cake-interactive');
  const cakeLabel = document.getElementById('cake-label');

  if (cakeWrapper) {
    cakeWrapper.addEventListener('click', (e) => {
      const isBlown = cakeWrapper.classList.toggle('blown-out');

      if (isBlown) {
        // Spawn sparkles from candle tip
        const rect = cakeWrapper.getBoundingClientRect();
        spawnHeartBurst(rect.left + rect.width / 2, rect.top + 20, 16);

        if (cakeLabel) {
          cakeLabel.textContent = '✨ Yay! May all your wishes come true! ✨';
          cakeLabel.style.color = '# BE3156';
        }
        playSoftChime(587.33); // D5
        setTimeout(() => playSoftChime(880), 160); // A5
      } else {
        if (cakeLabel) {
          cakeLabel.textContent = '🕯️ Tap the candle to make your wish!';
          cakeLabel.style.color = 'var(--primary-rose)';
        }
      }
    });
  }

  /* ------------------------------------------------------------
   * 3.5. CUTE INTERACTIVE CAT (Laying & Peeking on Birthday Card)
   * ------------------------------------------------------------ */
  const cardCat = document.getElementById('card-cat');
  const catSpeechBubble = document.getElementById('cat-speech-bubble');
  const catQuotes = [
    "Purrr... Happy Birthday Tazmeen! 🐾❤️",
    "Umair loves you so much! 🥰✨",
    "The prettiest lady in the universe! 👑",
    "Meow! Please don't be mad at Umair! 🥺❤️",
    "My favorite Hello Kitty & Evil Bunny! 🎀🐰",
    "Mwah! Showering you with purrs! 💋🐾",
    "You are Umair's forever and always! 💖"
  ];
  let catQuoteIndex = 0;
  let catBubbleTimeout = null;

  if (cardCat) {
    cardCat.addEventListener('click', (e) => {
      e.stopPropagation();
      playCatMeow();

      // Cycle message
      catQuoteIndex = (catQuoteIndex + 1) % catQuotes.length;
      if (catSpeechBubble) {
        catSpeechBubble.textContent = catQuotes[catQuoteIndex];
      }

      // Keep bubble visible on tap
      cardCat.classList.add('active');
      clearTimeout(catBubbleTimeout);
      catBubbleTimeout = setTimeout(() => {
        cardCat.classList.remove('active');
      }, 3500);

      // Mini heart burst from cat
      const rect = cardCat.getBoundingClientRect();
      const burstX = rect.left + rect.width / 2;
      const burstY = rect.top + rect.height / 2;
      spawnHeartBurst(burstX, burstY, 5);
    });
  }

  /* ------------------------------------------------------------
   * 4. OUR MEMORIES PHOTO GALLERY & LIGHTBOX
   * ------------------------------------------------------------ */
  const galleryItems = document.querySelectorAll('.gallery-item');
  const lightboxModal = document.getElementById('lightbox-modal');
  const lightboxImg = document.getElementById('lightbox-img');
  const lightboxCaption = document.getElementById('lightbox-caption');
  const lightboxCounter = document.getElementById('lightbox-counter');
  const lightboxClose = document.getElementById('lightbox-close');
  const lightboxPrev = document.getElementById('lightbox-prev');
  const lightboxNext = document.getElementById('lightbox-next');

  let currentPhotoIndex = 0;
  const galleryData = [];

  galleryItems.forEach((item, index) => {
    const img = item.querySelector('img');
    const note = item.querySelector('.memory-note');
    const title = item.querySelector('.memory-number');

    galleryData.push({
      src: img ? img.getAttribute('src') : '',
      alt: img ? img.getAttribute('alt') : `Memory ${index + 1}`,
      caption: (note && note.textContent.trim() !== '') ? note.textContent.trim() : (title ? title.textContent : `Memory #${index + 1}`),
      tag: title ? title.textContent : `MEMORY #${index + 1}`
    });

    item.addEventListener('click', () => {
      openLightbox(index);
    });
  });

  function openLightbox(index) {
    if (!lightboxModal || !galleryData.length) return;
    currentPhotoIndex = index;
    updateLightboxContent();
    lightboxModal.classList.add('active');
    document.body.style.overflow = 'hidden'; // prevent background scroll
  }

  function closeLightbox() {
    if (!lightboxModal) return;
    lightboxModal.classList.remove('active');
    document.body.style.overflow = '';
  }

  function updateLightboxContent() {
    const current = galleryData[currentPhotoIndex];
    if (!current) return;

    if (lightboxImg) {
      lightboxImg.src = current.src;
      lightboxImg.alt = current.alt;
    }
    if (lightboxCaption) {
      lightboxCaption.textContent = current.caption;
    }
    if (lightboxCounter) {
      lightboxCounter.textContent = `${currentPhotoIndex + 1} / ${galleryData.length}`;
    }
  }

  function showPrevPhoto() {
    currentPhotoIndex = (currentPhotoIndex - 1 + galleryData.length) % galleryData.length;
    updateLightboxContent();
  }

  function showNextPhoto() {
    currentPhotoIndex = (currentPhotoIndex + 1) % galleryData.length;
    updateLightboxContent();
  }

  if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
  if (lightboxPrev) lightboxPrev.addEventListener('click', showPrevPhoto);
  if (lightboxNext) lightboxNext.addEventListener('click', showNextPhoto);

  // Close when tapping modal backdrop
  if (lightboxModal) {
    lightboxModal.addEventListener('click', (e) => {
      if (e.target === lightboxModal) {
        closeLightbox();
      }
    });
  }

  // Keyboard navigation
  document.addEventListener('keydown', (e) => {
    if (!lightboxModal || !lightboxModal.classList.contains('active')) return;
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowLeft') showPrevPhoto();
    if (e.key === 'ArrowRight') showNextPhoto();
  });

  // Mobile Touch Swipe Navigation for Lightbox
  let touchStartX = 0;
  let touchStartY = 0;
  let touchEndX = 0;
  let touchEndY = 0;
  if (lightboxModal) {
    lightboxModal.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
      touchStartY = e.changedTouches[0].screenY;
    }, { passive: true });

    lightboxModal.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      touchEndY = e.changedTouches[0].screenY;
      handleSwipe();
    }, { passive: true });
  }

  function handleSwipe() {
    const diffX = touchEndX - touchStartX;
    const diffY = touchEndY - touchStartY;
    // Only trigger if horizontal swipe is dominant and exceeds threshold
    if (Math.abs(diffX) > 40 && Math.abs(diffX) > Math.abs(diffY) * 1.3) {
      if (diffX > 0) {
        showPrevPhoto(); // Swiped right -> go to previous
      } else {
        showNextPhoto(); // Swiped left -> go to next
      }
    }
  }

  /* ------------------------------------------------------------
   * 5. SCROLL REVEAL ANIMATIONS (IntersectionObserver)
   * ------------------------------------------------------------ */
  const revealElements = document.querySelectorAll('.reveal-on-scroll');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      rootMargin: '250px 0px 150px 0px',
      threshold: 0.01
    });

    revealElements.forEach((el) => observer.observe(el));
  } else {
    // Fallback if IntersectionObserver is not supported
    revealElements.forEach((el) => el.classList.add('is-visible'));
  }

  /* ------------------------------------------------------------
   * 5.5. SONGS THAT REMIND ME OF YOU (Interactive Vinyl Player)
   * ------------------------------------------------------------ */
  const songCards = document.querySelectorAll('.song-card');
  let currentSongAudio = null;
  let currentActiveSongCard = null;

  songCards.forEach((card) => {
    const playBtn = card.querySelector('.song-play-btn');
    const playIcon = playBtn ? playBtn.querySelector('.play-icon') : null;
    const audioSrc = card.getAttribute('data-audio-src');

    if (playBtn) {
      playBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        initAudio();

        const isCurrentlyPlaying = card.classList.contains('is-playing');

        // Stop any current song
        if (currentSongAudio) {
          currentSongAudio.pause();
          currentSongAudio = null;
        }
        if (currentActiveSongCard) {
          currentActiveSongCard.classList.remove('is-playing');
          const prevIcon = currentActiveSongCard.querySelector('.play-icon');
          if (prevIcon) prevIcon.textContent = '▶';
        }

        if (!isCurrentlyPlaying) {
          // Pause ambient background music if it was playing to prevent clashing
          if (typeof isMusicPlaying !== 'undefined' && isMusicPlaying && audioToggleBtn) {
            audioToggleBtn.click();
          }

          card.classList.add('is-playing');
          if (playIcon) playIcon.textContent = '⏸';
          currentActiveSongCard = card;

          if (audioSrc && audioSrc.trim() !== '') {
            currentSongAudio = new Audio(audioSrc);
            currentSongAudio.preload = 'none';
            currentSongAudio.play().catch(() => {
              playCelebrationChords();
            });
            currentSongAudio.addEventListener('ended', () => {
              card.classList.remove('is-playing');
              if (playIcon) playIcon.textContent = '▶';
              currentActiveSongCard = null;
              currentSongAudio = null;
            });
          } else {
            // Romantic synth chime chord if no audio file linked yet
            playCelebrationChords();
          }
        } else {
          currentActiveSongCard = null;
        }
      });
    }
  });

  /* ------------------------------------------------------------
   * 6. FINAL SURPRISE & "MAKE A WISH" CELEBRATION
   * ------------------------------------------------------------ */
  const makeWishBtn = document.getElementById('btn-make-wish');
  const revealedWishCard = document.getElementById('revealed-wish-card');
  const replayWishBtn = document.getElementById('btn-replay-wish');

  function triggerWishCelebration() {
    // Play celebratory chime chord
    playCelebrationChords();

    // Trigger Heart & Pastel Confetti
    launchRomanticConfetti();

    // Reveal final heartfelt card
    if (revealedWishCard) {
      revealedWishCard.classList.add('active');
      revealedWishCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
  }

  if (makeWishBtn) {
    makeWishBtn.addEventListener('click', triggerWishCelebration);
  }

  if (replayWishBtn) {
    replayWishBtn.addEventListener('click', () => {
      launchRomanticConfetti();
      playCelebrationChords();
    });
  }

  /* ------------------------------------------------------------
   * 7. ROMANTIC CONFETTI & HEART BURST CANNON
   * ------------------------------------------------------------ */
  const confettiCanvas = document.getElementById('confetti-canvas');
  let confettiCtx = null;
  if (confettiCanvas) {
    confettiCtx = confettiCanvas.getContext('2d');
    confettiCanvas.width = window.innerWidth;
    confettiCanvas.height = window.innerHeight;
    let confettiResizeRaf = null;
    window.addEventListener('resize', () => {
      if (confettiResizeRaf) cancelAnimationFrame(confettiResizeRaf);
      confettiResizeRaf = requestAnimationFrame(() => {
        confettiCanvas.width = window.innerWidth;
        confettiCanvas.height = window.innerHeight;
      });
    }, { passive: true });
  }

  let activeConfetti = [];

  class ConfettiPiece {
    constructor(x, y) {
      this.x = x || window.innerWidth / 2;
      this.y = y || window.innerHeight * 0.7;
      this.size = Math.random() * 14 + 10;
      this.speedX = (Math.random() - 0.5) * 12;
      this.speedY = -(Math.random() * 14 + 10);
      this.gravity = 0.45;
      this.rotation = Math.random() * 360;
      this.rotationSpeed = (Math.random() - 0.5) * 8;
      this.opacity = 1;
      this.decay = Math.random() * 0.007 + 0.005;
      this.type = Math.random() > 0.4 ? 'heart' : 'confetti';
      this.colors = ['#B81E48', '#C92A54', '#E55C80', '#FF7597', '#F3C68F', '#FFFFFF', '#7A1434', '#FFAFC5'];
      this.color = this.colors[Math.floor(Math.random() * this.colors.length)];
    }

    update() {
      this.speedY += this.gravity;
      this.x += this.speedX;
      this.y += this.speedY;
      this.rotation += this.rotationSpeed;
      this.opacity -= this.decay;
    }

    draw(ctx) {
      if (this.opacity <= 0) return;
      ctx.save();
      ctx.translate(this.x, this.y);
      ctx.rotate((this.rotation * Math.PI) / 180);
      ctx.globalAlpha = Math.max(0, this.opacity);
      ctx.fillStyle = this.color;

      if (this.type === 'heart') {
        const s = this.size * 0.6;
        ctx.beginPath();
        ctx.moveTo(0, s * 0.3);
        ctx.bezierCurveTo(-s, -s * 0.6, -s * 1.6, s * 0.4, 0, s * 1.5);
        ctx.bezierCurveTo(s * 1.6, s * 0.4, s, -s * 0.6, 0, s * 0.3);
        ctx.fill();
      } else {
        ctx.fillRect(-this.size / 2, -this.size / 3, this.size, this.size / 1.5);
      }

      ctx.restore();
    }
  }

  function launchRomanticConfetti() {
    if (!confettiCtx) return;
    const piecesCount = window.innerWidth < 600 ? 90 : 160;

    // Launch from both sides and center for a rich, beautiful shower
    for (let i = 0; i < piecesCount; i++) {
      const startX = window.innerWidth * (0.2 + Math.random() * 0.6);
      const startY = window.innerHeight * 0.85;
      activeConfetti.push(new ConfettiPiece(startX, startY));
    }

    if (activeConfetti.length === piecesCount) {
      animateConfetti();
    }
  }

  function animateConfetti() {
    if (!confettiCtx) return;
    confettiCtx.clearRect(0, 0, confettiCanvas.width, confettiCanvas.height);

    for (let i = activeConfetti.length - 1; i >= 0; i--) {
      activeConfetti[i].update();
      activeConfetti[i].draw(confettiCtx);

      if (activeConfetti[i].opacity <= 0 || activeConfetti[i].y > confettiCanvas.height + 50) {
        activeConfetti.splice(i, 1);
      }
    }

    if (activeConfetti.length > 0) {
      requestAnimationFrame(animateConfetti);
    } else {
      confettiCtx.clearRect(0, 0, confettiCanvas.width, confettiCanvas.height);
    }
  }

  function spawnHeartBurst(x, y, count = 10) {
    if (!confettiCtx) return;
    for (let i = 0; i < count; i++) {
      const p = new ConfettiPiece(x, y);
      p.speedY = -(Math.random() * 8 + 4);
      p.speedX = (Math.random() - 0.5) * 6;
      p.type = 'heart';
      p.decay = 0.015;
      activeConfetti.push(p);
    }
    if (activeConfetti.length === count) {
      animateConfetti();
    }
  }

  /* ------------------------------------------------------------
   * 8. ROMANTIC SYNTHESIZED SOUND EFFECTS (Web Audio API)
   * Standalone, zero external audio dependencies needed!
   * ------------------------------------------------------------ */
  let audioCtx = null;

  function initAudio() {
    if (!audioCtx) {
      const AudioContext = window.AudioContext || window.webkitAudioContext;
      if (AudioContext) {
        audioCtx = new AudioContext();
      }
    }
    if (audioCtx && audioCtx.state === 'suspended') {
      audioCtx.resume();
    }
  }

  function playSoftChime(freq = 523.25) { // C5
    try {
      initAudio();
      if (!audioCtx) return;

      const osc = audioCtx.createOscillator();
      const gain = audioCtx.createGain();

      osc.type = 'sine';
      osc.frequency.setValueAtTime(freq, audioCtx.currentTime);

      gain.gain.setValueAtTime(0.01, audioCtx.currentTime);
      gain.gain.exponentialRampToValueAtTime(0.12, audioCtx.currentTime + 0.05);
      gain.gain.exponentialRampToValueAtTime(0.0001, audioCtx.currentTime + 1.2);

      osc.connect(gain);
      gain.connect(audioCtx.destination);

      osc.start();
      osc.stop(audioCtx.currentTime + 1.25);
    } catch (e) {
      // Audio autoplay policy fallback
    }
  }

  function playCelebrationChords() {
    try {
      initAudio();
      if (!audioCtx) return;

      // Romantic harp chime chord progression: C5 -> E5 -> G5 -> C6
      const chord = [523.25, 659.25, 783.99, 1046.5];
      chord.forEach((freq, idx) => {
        setTimeout(() => {
          playSoftChime(freq);
        }, idx * 120);
      });
    } catch (e) {
      // Audio fallback
    }
  }

  function playCatMeow() {
    try {
      initAudio();
      if (!audioCtx) return;

      const now = audioCtx.currentTime;
      const osc = audioCtx.createOscillator();
      const gain = audioCtx.createGain();

      osc.type = 'sine';
      // Kitty meow glide: starts ~580Hz, glides to ~880Hz, softens to ~720Hz
      osc.frequency.setValueAtTime(580, now);
      osc.frequency.exponentialRampToValueAtTime(880, now + 0.1);
      osc.frequency.exponentialRampToValueAtTime(720, now + 0.35);

      gain.gain.setValueAtTime(0.001, now);
      gain.gain.exponentialRampToValueAtTime(0.12, now + 0.06);
      gain.gain.exponentialRampToValueAtTime(0.0001, now + 0.38);

      osc.connect(gain);
      gain.connect(audioCtx.destination);

      osc.start(now);
      osc.stop(now + 0.4);
    } catch (e) {
      // Audio fallback
    }
  }

  /* ------------------------------------------------------------
   * 9. BACKGROUND MUSIC CONTROLLER (Synthesized + Custom MP3)
   * ------------------------------------------------------------ */
  const audioToggleBtn = document.getElementById('audio-toggle');
  let isMusicPlaying = false;
  let synthMusicInterval = null;
  const customAudio = new Audio('audio/music.mp3'); // Optional user file
  customAudio.preload = 'none';

  if (audioToggleBtn) {
    audioToggleBtn.addEventListener('click', () => {
      initAudio();
      isMusicPlaying = !isMusicPlaying;

      if (isMusicPlaying) {
        // Stop any song card that might be playing
        if (currentSongAudio) {
          currentSongAudio.pause();
          currentSongAudio = null;
        }
        if (currentActiveSongCard) {
          currentActiveSongCard.classList.remove('is-playing');
          const prevIcon = currentActiveSongCard.querySelector('.play-icon');
          if (prevIcon) prevIcon.textContent = '▶';
          currentActiveSongCard = null;
        }

        audioToggleBtn.classList.remove('muted');
        const textSpan = audioToggleBtn.querySelector('span');
        if (textSpan) textSpan.textContent = 'Music: On';

        // Try playing custom audio file if provided by user
        customAudio.play().catch(() => {
          // If no custom mp3 found, play gentle music-box melody
          playDreamyMelody();
        });
      } else {
        audioToggleBtn.classList.add('muted');
        const textSpan = audioToggleBtn.querySelector('span');
        if (textSpan) textSpan.textContent = 'Music: Off';

        customAudio.pause();
        if (synthMusicInterval) {
          clearInterval(synthMusicInterval);
          synthMusicInterval = null;
        }
      }
    });
  }

  function playDreamyMelody() {
    if (synthMusicInterval) clearInterval(synthMusicInterval);

    // Warm, peaceful music-box notes (Frequencies in Hz: E4, G#4, B4, C#5, E5)
    const melody = [
      329.63, 415.30, 493.88, 554.37,
      659.25, 554.37, 493.88, 415.30,
      369.99, 440.00, 554.37, 440.00
    ];
    let noteIdx = 0;

    function playNextNote() {
      if (!isMusicPlaying) return;
      playSoftChime(melody[noteIdx % melody.length]);
      noteIdx++;
    }

    playNextNote();
    synthMusicInterval = setInterval(playNextNote, 600);
  }

});
