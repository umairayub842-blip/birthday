<?php
/**
 * =========================================================================
 * ROMANTIC BIRTHDAY MINI WEBSITE FOR HER ❤️
 * =========================================================================
 * 
 * QUICK CUSTOMIZATION GUIDE:
 * 1. Change $girlfriend_name below to your girlfriend's actual name.
 * 2. Drop your 20 photos into the "images/" folder with names:
 *    photo1.jpg, photo2.jpg, ... photo20.jpg
 * 3. (Optional) Customize the captions or messages in the arrays below.
 * 4. (Optional) If you want background music, drop an MP3 into "audio/music.mp3".
 * 
 * No database or backend setup required! Works directly in any PHP server
 * (like WAMP, XAMPP, or standard web hosting).
 */

$girlfriend_name   = "Tazmeen"; // <-- Her name ❤️
$nickname          = "Sweetheart";
$hero_title        = "A Little Something For You ❤️";
$hero_subtext      = "Made with love, just for you.";
$birthday_message  = "Happy Birthday TAZMEEEEN! 🎉❤️\n\nToday is all about celebrating you — your laughter, your kindness, and every single moment you make brighter just by being you. I hope your day is as lovely and wonderful as your heart is.\n\nI want you to stay happy all your life and get everything you desire, and I love you soo soo muchhh. You know I am just bad at expressing love or writing about you... I just want to write about you forever, but words can never truly capture how deeply I feel for you.\n\nI want you to forgive my mistakes, and please don’t be mad at me that much — I get so worried because I really cannot bear your anger. I love you so much, meri jaan.\n\nAt the end of the day, just remember: even if no one else is there, I will ALWAYS be there for you. I am so proud of you and I will support you in everything. You are completely perfect for me, and I pray to God that no one ever gets a woman like mine, because she is MINEEEEEEEEEEE!\n\nLastly, I just want to say: I love you so much, Tazmeen.";
$sender_title      = "From your man,";
$sender_name       = "UMAIR ❤️";

// --- 2. Memory Gallery Photos (20 Photos Framed) ---
// Captions can be written below or let me know what to write:
$gallery_photos = [
    ['file' => 'images/Snapchat-899478274.jpg',       'caption' => 'The most beautiful woman I have ever seen and want to spend the rest of my life with. Very sassy, has attitude greater than the peak of Mount Everest, but same with her beauty — it’s out of this world! Mmmmm you are so beautiful, wanna kiss this potato face! Ahhh I love you so muchhh 🏔️💋🥔❤️'],
    ['file' => 'images/IMG_20260727_152056_901.jpg', 'caption' => 'I am that Spider-Man who gets his Gwen in this universe, and the most loveliest, supportive, and caring one 🕷️❤️'],
    ['file' => 'images/IMG_20260724_141503_004.jpg', 'caption' => 'You are my hello kitty who brighten my world with chaos, though you still make my day and made me love you more everyday 🎀✨'],
    ['file' => 'images/Snapchat-481508265.jpg',       'caption' => 'Gangster lady who knows how to use guns, so messing with her is not a genius idea — and that makes me like you more! 🔫😎❤️'],
    ['file' => 'images/Snapchat-501904059.jpg',       'caption' => 'Ahh I love your nose, cheeks, and lips, and I just love it sooo muchhhhhh! You’re so beautiful, they make you even prettier 🥰💋✨'],
    ['file' => 'images/Snapchat-613069001.jpg',       'caption' => 'Ahh you look really adorable in glasses sometimes, and it makes me love you even moreeeeeeee! I love you 👓🥹❤️'],
    ['file' => 'images/Snapchat-857963354.jpg',       'caption' => 'The faces you make, I love them! You make everything look funny and meaningful, you’re my world 🤪🌍❤️'],
    ['file' => 'images/Snapchat-888119596.jpg',       'caption' => 'The face of an evil bunny who loves to annoy others, but if someone in reply does something, then this joyful cute evil bunny makes a long face, gets mad, and sometimes her eyes get watery... and I can’t bear to see that. Ahh I love you so much! 🐰😈🥺❤️'],
    ['file' => 'images/Snapchat-896823401.jpg',       'caption' => 'A very chatpati, joyful Hello Kitty who wants just freedommmmm and do dherrr saari mastii! 🎀💃✨'],
    ['file' => 'images/Snapchat-563712557.jpg',       'caption' => 'Ahhh my muscle lady, you have enough muscle to make your man work for you, and I don’t really like your anger but still I love you 💪😂❤️'],
    ['file' => 'images/Snapchat-954268958.jpg',       'caption' => 'I just love this picture of yours! You look so like... mmm I can’t explain in words, like you make my body tingle, you look so hot here! Ahhhhh I just love you so much 🔥🫠❤️'],
    ['file' => 'images/Snapchat-962441252.jpg',       'caption' => 'Even without a filter, you look so gorgeous, so beautiful, cannot explain in words! I hope you can understand what I feel for you. Love you ✨🥰❤️'],
    ['file' => 'images/Snapchat-1271676970.jpg',      'caption' => 'Ahhh I just love your faceee! I will never get bored of your face. If there was a condition that I could only see one face for my whole life, I would gladly say yours. Love you! 🥹💖✨'],
    ['file' => 'images/Snapchat-1281220834.jpg',      'caption' => 'No one can match your sassiness! You are a queen, most beautiful and sexyy, no one can match your sexiness 🙈 muweheh, love you! 👑💋❤️'],
    ['file' => 'images/Snapchat-1432715714.jpg',      'caption' => 'Ahhh the cutest faceeeee! I loveee this soooo muchhhhh, it’s just so kissable! I wanna shower your face with kisses... mwah! Love you 😚💋🥰❤️'],
    ['file' => 'images/Snapchat-1552855786.jpg',      'caption' => 'How beautiful! Even when your face is relaxed, you can see all your facial features and look how beautiful you are... can’t get over you. Love you! 🥹✨💖'],
    ['file' => 'images/Snapchat-1644708708.jpg',      'caption' => 'The eyesss, chico! These eyes drive me crazyyy! Ahhh I love this woman sooo soo muchhh 👀🫠❤️'],
    ['file' => 'images/Snapchat-1650370381.jpg',      'caption' => 'The face of a mastkhorr cat! I love this woman sooo much, you can’t be mad at this lady — like who even can? Hope you stay happy and live a life filled with joy. Love you! 🐱🐾✨❤️'],
    ['file' => 'images/Snapchat-2069483531.jpg',      'caption' => 'Ahhh I just want this smile to never leave your face, it stays the same and you live your life happily, and just love meee, no one elsee! I want you to just look at me, no one elsee, and kiss me soo much. I love you soo much, Tazmeen! 🥹💋🥰❤️'],
];

// --- 3. Sweet Messages ---
$sweet_messages = [
    [
        'quote'  => 'Some people make ordinary days feel special.',
        'author' => 'Forever grateful',
        'emoji'  => '🌹'
    ],
    [
        'quote'  => 'I’m really glad our paths crossed.',
        'author' => 'Always and truly',
        'emoji'  => '✨'
    ],
    [
        'quote'  => 'You deserve a beautiful birthday and an even more beautiful year.',
        'author' => 'Wishing you the best',
        'emoji'  => '💖'
    ],
    [
        'quote'  => 'I hope today brings you lots of reasons to smile.',
        'author' => 'From the bottom of my heart',
        'emoji'  => '<svg width="26" height="26" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" title="Choco Lava Cake"><ellipse cx="18" cy="29.5" rx="14" ry="3.5" fill="#EADCD5"/><path d="M7 28 C7 28 8.5 16 11 14 C14 12 22 12 25 14 C27.5 16 29 28 29 28 Z" fill="#42210B"/><ellipse cx="18" cy="14.5" rx="7" ry="2.2" fill="#2E1405"/><path d="M15 15 C15 15 15.8 22 17 25 C17.6 26.5 19.4 26.5 20 25 C20.8 21 21 15 21 15 Z" fill="#6B3319"/><path d="M16 16 C16 19 16.5 23.5 17.6 25 C18.1 25.6 19 25.6 19.4 24.8 C20 23 20.2 18 20.2 16 Z" fill="#9E4D20"/><ellipse cx="18" cy="25.5" rx="3.5" ry="1.2" fill="#52240D"/><circle cx="18" cy="12.5" r="2.2" fill="#E5395E"/></svg>'
    ],
    [
        'quote'  => 'Thank you for bringing so much gentle warmth and joy into my life.',
        'author' => 'With all my care',
        'emoji'  => '🕊️'
    ],
    [
        'quote'  => 'Never forget how deeply loved, appreciated, and cherished you are.',
        'author' => 'Always in my thoughts',
        'emoji'  => '🍓'
    ]
];

// --- 4. Songs That Remind Me of You ---
// Drop in your songs below (title, artist, and your custom note for Tazmeen):
$reminding_songs = [
    [
        'title'  => 'Blue',
        'artist' => 'yung kai',
        'note'   => '“Your morning eyes, I could stare like watching stars...” Every time this song plays, all I can see is your eyes, your gentle smile, and how you bring calm to my entire world. You are my blue, my peace, and my favorite person. 💙✨',
        'audio'  => 'audio/blue.mp3',
    ],
    [
        'title'  => 'Mr Loverman',
        'artist' => 'Ricky Montgomery',
        'note'   => '“I’m Mr. Loverman, and I miss my lover, man...” Whenever this song plays, it reminds me how deeply I love and adore you. You have my whole heart, and I will always be your man, through every up and down. 🌹❤️',
        'audio'  => 'audio/mr_loverman.mp3',
    ],
];

// --- 5. Final Surprise Content ---
$final_note = "Before this day is over, I just wanted to remind you how much you truly mean to me. You bring peace, joy, and so much beauty into the world simply by being yourself.";
$wish_reveal_title = "May Your Wish Come True! ✨";
$wish_reveal_body  = "Close your eyes, take a gentle breath, and make the biggest wish you can imagine. I’ll always be right here, cheering for your happiness every step of the way. Happy Birthday, " . htmlspecialchars($girlfriend_name) . "! ❤️";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, viewport-fit=cover">
  <title>Happy Birthday, <?php echo htmlspecialchars($girlfriend_name); ?> ❤️</title>
  
  <!-- Favicon Heart -->
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🎂</text></svg>">

  <!-- Google Fonts: Playfair Display + Plus Jakarta Sans + Sacramento -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Sacramento&display=swap" rel="stylesheet">

  <!-- Stylesheet (Cache Busted) -->
  <link rel="stylesheet" href="style.css?v=4.0">
</head>
<body>

  <!-- Floating Ambient Canvas (Gentle floating hearts & sparkles) -->
  <canvas id="ambient-canvas"></canvas>

  <!-- Celebratory Confetti & Heart Burst Canvas -->
  <canvas id="confetti-canvas"></canvas>

  <!-- Ambient Sound / Music Toggle Button -->
  <button id="audio-toggle" class="floating-audio-ctrl muted" title="Click to toggle soft romantic melody" aria-label="Toggle background music">
    <span class="music-icon">🎵</span>
    <span>Music: Off</span>
  </button>

  <div class="site-wrapper">

    <!-- ============================================================
         1. HERO / OPENING SCREEN
         ============================================================ -->
    <header class="hero-section" id="hero-section">
      <div class="hero-envelope-card">
        <div class="hero-envelope-icon">
          💌
        </div>
        <div class="section-badge">
          <span>A Surprise For You</span>
        </div>
        <h1 class="hero-title"><?php echo htmlspecialchars($hero_title); ?></h1>
        <p class="hero-subtitle"><?php echo htmlspecialchars($hero_subtext); ?></p>
        
        <button id="btn-open-surprise" class="romantic-btn primary-btn pulse-effect">
          <span>Open Your Surprise</span>
          <span class="hero-sparkle-decor">✨</span>
        </button>
      </div>
    </header>

    <!-- ============================================================
         2. BIRTHDAY CELEBRATION SECTION
         ============================================================ -->
    <main>
      <section class="birthday-section container" id="birthday-section">
        <div class="birthday-card reveal-on-scroll">
          <!-- Cute Laying & Peeking Cat on Top Edge (Tazmeen's Mastkhorr Cat) -->
          <div class="card-cat-wrapper" id="card-cat" title="Tap me! Meow! 🐾" role="button" tabindex="0" aria-label="Cute cat resting on the card">
            <div class="cat-speech-bubble" id="cat-speech-bubble">Purrr... 🐾</div>
            <svg class="cat-svg" viewBox="0 0 130 62" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <!-- Animated Tail -->
              <g class="cat-tail">
                <path d="M110 38 C120 36 128 28 126 18 C124 10 117 12 117 17 C117 22 121 27 108 34" fill="#FFF6ED" stroke="#E5C7D0" stroke-width="1.4" stroke-linecap="round"/>
              </g>
              
              <!-- Chubby Body laying down -->
              <ellipse cx="86" cy="36" rx="26" ry="14" fill="#FFF6ED"/>
              <path d="M72 32 Q88 26 102 33" stroke="rgba(215, 140, 160, 0.2)" stroke-width="2" fill="none"/>
              <!-- Hind foot -->
              <ellipse cx="104" cy="44" rx="6" ry="4" fill="#FFF6ED" stroke="#E5C7D0" stroke-width="1"/>

              <!-- Head -->
              <ellipse cx="52" cy="30" rx="21" ry="17" fill="#FFF6ED"/>

              <!-- Left Ear (with subtle twitch) -->
              <g class="cat-ear-left">
                <path d="M34 20 L30 5 Q40 8 45 17 Z" fill="#FFF6ED" stroke="#E5C7D0" stroke-width="1.3" stroke-linejoin="round"/>
                <path d="M34 18 L32 9 Q39 12 42 16 Z" fill="#FFAEC0"/>
              </g>

              <!-- Right Ear -->
              <g>
                <path d="M59 17 Q64 8 74 5 L70 20 Z" fill="#FFF6ED" stroke="#E5C7D0" stroke-width="1.3" stroke-linejoin="round"/>
                <path d="M62 17 Q66 12 72 9 L69 19 Z" fill="#FFAEC0"/>
              </g>

              <!-- Blush Cheeks -->
              <ellipse cx="38" cy="33" rx="3.5" ry="2" fill="rgba(255, 120, 155, 0.5)"/>
              <ellipse cx="66" cy="33" rx="3.5" ry="2" fill="rgba(255, 120, 155, 0.5)"/>

              <!-- Peeking Eyes (Kawaii Eyes with Gentle Blinking) -->
              <g class="cat-eyes eye-open">
                <!-- Left Eye -->
                <ellipse cx="43" cy="27" rx="3.8" ry="4.2" fill="#3D0B1C"/>
                <circle cx="44.5" cy="25.5" r="1.5" fill="#FFFFFF"/>
                <circle cx="41.5" cy="28.5" r="0.75" fill="#FFFFFF"/>
                <!-- Right Eye -->
                <ellipse cx="61" cy="27" rx="3.8" ry="4.2" fill="#3D0B1C"/>
                <circle cx="62.5" cy="25.5" r="1.5" fill="#FFFFFF"/>
                <circle cx="59.5" cy="28.5" r="0.75" fill="#FFFFFF"/>
              </g>

              <!-- Nose -->
              <path d="M50.5 31.5 L53.5 31.5 L52 33.5 Z" fill="#E85D80"/>

              <!-- Kitten Mouth (w shape) -->
              <path d="M49 33.8 Q52 35.8 52 33.8 Q52 35.8 55 33.8" stroke="#681E32" stroke-width="1.2" stroke-linecap="round" fill="none"/>

              <!-- Whiskers -->
              <path d="M33 30 L20 28" stroke="#D398A8" stroke-width="1.1" stroke-linecap="round"/>
              <path d="M33 32.5 L18 33" stroke="#D398A8" stroke-width="1.1" stroke-linecap="round"/>
              <path d="M34 35 L21 38" stroke="#D398A8" stroke-width="1.1" stroke-linecap="round"/>

              <path d="M71 30 L84 28" stroke="#D398A8" stroke-width="1.1" stroke-linecap="round"/>
              <path d="M71 32.5 L86 33" stroke="#D398A8" stroke-width="1.1" stroke-linecap="round"/>
              <path d="M70 35 L83 38" stroke="#D398A8" stroke-width="1.1" stroke-linecap="round"/>

              <!-- Wine Red Collar with Heart Charm -->
              <path d="M43 41 Q52 44 61 41" stroke="#A81B3C" stroke-width="2.5" stroke-linecap="round" fill="none"/>
              <!-- Gold Heart Pendant -->
              <path d="M52 43 C50.5 41.5 49 43 50.5 45 L52 47 L53.5 45 C55 43 53.5 41.5 52 43 Z" fill="#F3C68F" stroke="#C48E45" stroke-width="0.5"/>

              <!-- Front Paws Hanging Over Card Edge -->
              <!-- Left Paw -->
              <g class="cat-paw-left">
                <rect x="40" y="41" width="10" height="13" rx="5" fill="#FFF6ED" stroke="#E5C7D0" stroke-width="1.2"/>
                <line x1="43" y1="48" x2="43" y2="51" stroke="#D398A8" stroke-width="0.9" stroke-linecap="round"/>
                <line x1="47" y1="48" x2="47" y2="51" stroke="#D398A8" stroke-width="0.9" stroke-linecap="round"/>
              </g>
              <!-- Right Paw -->
              <g class="cat-paw-right">
                <rect x="54" y="41" width="10" height="13" rx="5" fill="#FFF6ED" stroke="#E5C7D0" stroke-width="1.2"/>
                <line x1="57" y1="48" x2="57" y2="51" stroke="#D398A8" stroke-width="0.9" stroke-linecap="round"/>
                <line x1="61" y1="48" x2="61" y2="51" stroke="#D398A8" stroke-width="0.9" stroke-linecap="round"/>
              </g>
            </svg>
          </div>

          <div class="section-badge">
            <span>Special Day 🎂</span>
          </div>
          
          <h2 class="birthday-heading">
            Happy Birthday, <span class="girlfriend-name"><?php echo htmlspecialchars($girlfriend_name); ?></span> 🎂❤️
          </h2>

          <div class="birthday-tagline">
            <p><?php echo nl2br(htmlspecialchars($birthday_message)); ?></p>
            <div class="birthday-signature">
              <span class="signature-sub"><?php echo htmlspecialchars($sender_title); ?></span>
              <span class="signature-author"><?php echo htmlspecialchars($sender_name); ?></span>
            </div>
          </div>

          <!-- Interactive Birthday Cake -->
          <div class="cake-wrapper" id="cake-interactive" title="Tap the candle to make a wish!">
            <div class="cake-container">
              <div class="cake-plate"></div>
              <div class="cake-tier-bottom"></div>
              <div class="cake-tier-top"></div>
              <div class="cake-decorations">
                <div class="cake-berry"></div>
                <div class="cake-berry"></div>
                <div class="cake-berry"></div>
              </div>
              <div class="cake-candle">
                <div class="candle-flame"></div>
                <div class="candle-smoke"></div>
              </div>
            </div>
            <p class="cake-tip-label" id="cake-label">🕯️ Tap the candle to make your wish!</p>
          </div>
          <div class="wish-message">May every sweet wish you have blossom into reality! 🌸</div>
        </div>
      </section>

      <!-- ============================================================
           3. OUR MEMORIES PHOTO GALLERY
           ============================================================ -->
      <section class="gallery-section container" id="gallery-section">
        <div class="section-header reveal-on-scroll">
          <div class="section-badge">
            <span>My Favorite Pictures of You 📸❤️</span>
          </div>
          <h2>Moments I Fall In Love With</h2>
          <p>Every single picture of you reminds me why I’m the luckiest man to have you.</p>
        </div>

        <div class="gallery-grid">
          <?php foreach ($gallery_photos as $index => $photo): ?>
            <div class="gallery-item reveal-on-scroll delay-<?php echo ($index % 4) + 1; ?>" data-index="<?php echo $index; ?>">
              <div class="gallery-thumb-wrapper">
                <img 
                  src="<?php echo htmlspecialchars($photo['file']); ?>" 
                  alt="<?php echo htmlspecialchars($photo['caption']); ?>" 
                  loading="lazy"
                  decoding="async"
                >
                <div class="gallery-overlay-badge">
                  <span>✨ Tap to view</span>
                </div>
              </div>
              <div class="gallery-caption-bar">
                <span class="memory-number">Memory #<?php echo ($index + 1); ?></span>
                <?php if (!empty($photo['caption'])): ?>
                  <p class="memory-note"><?php echo htmlspecialchars($photo['caption']); ?></p>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- ============================================================
           4. SWEET MESSAGES SECTION
           ============================================================ -->
      <section class="messages-section container" id="messages-section">
        <div class="section-header reveal-on-scroll">
          <div class="section-badge">
            <span>From The Heart 💌</span>
          </div>
          <h2>Little Reminders For You</h2>
          <p>Things I hope you always carry in your heart.</p>
        </div>

        <div class="messages-grid">
          <?php foreach ($sweet_messages as $index => $msg): ?>
            <div class="message-card reveal-on-scroll delay-<?php echo ($index % 3) + 1; ?>">
              <div class="message-card-inner">
                <div class="message-icon-bubble">
                  <?php echo $msg['emoji'] ?? '🍓'; ?>
                </div>
                <div class="message-content">
                  <p class="message-text">"<?php echo htmlspecialchars($msg['quote']); ?>"</p>
                  <span class="message-author">— <?php echo htmlspecialchars($msg['author']); ?></span>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- ============================================================
           4.5. SONGS THAT REMIND ME OF YOU
           ============================================================ -->
      <section class="songs-section container" id="songs-section">
        <div class="section-header reveal-on-scroll">
          <div class="section-badge">
            <span>Our Soundtrack 🎵❤️</span>
          </div>
          <h2>Songs That Remind Me of You</h2>
          <p>Every lyric, melody, and rhythm that brings you right into my thoughts.</p>
        </div>

        <div class="songs-grid">
          <?php foreach ($reminding_songs as $index => $song): ?>
            <div class="song-card reveal-on-scroll delay-<?php echo ($index % 3) + 1; ?>" data-song-index="<?php echo $index; ?>" data-audio-src="<?php echo htmlspecialchars($song['audio'] ?? ''); ?>">
              <div class="song-card-header">
                <div class="song-vinyl-wrapper">
                  <div class="song-vinyl">
                    <div class="song-vinyl-center">❤️</div>
                  </div>
                </div>

                <div class="song-meta">
                  <div class="song-header-row">
                    <h3 class="song-title"><?php echo htmlspecialchars($song['title']); ?></h3>
                    <div class="song-equalizer" aria-hidden="true">
                      <span class="eq-bar"></span>
                      <span class="eq-bar"></span>
                      <span class="eq-bar"></span>
                      <span class="eq-bar"></span>
                    </div>
                  </div>
                  <div class="song-artist"><?php echo htmlspecialchars($song['artist']); ?></div>
                </div>

                <div class="song-actions">
                  <button class="song-play-btn" title="Play song" aria-label="Play <?php echo htmlspecialchars($song['title']); ?>">
                    <span class="play-icon">▶</span>
                  </button>
                </div>
              </div>

              <?php if (!empty($song['note'])): ?>
                <p class="song-personal-note">“<?php echo htmlspecialchars($song['note']); ?>”</p>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- ============================================================
           5. FINAL SURPRISE & "MAKE A WISH"
           ============================================================ -->
      <section class="surprise-section container" id="surprise-section">
        <div class="surprise-box reveal-on-scroll">
          <div class="section-badge">
            <span>One Last Surprise 💫</span>
          </div>
          <h2 class="surprise-title">One Last Thing... ❤️</h2>
          
          <p class="surprise-note-text" id="surprise-note">
            <?php echo htmlspecialchars($final_note); ?>
          </p>

          <button id="btn-make-wish" class="romantic-btn primary-btn pulse-effect">
            <span>Make a Wish ✨</span>
          </button>

          <!-- Hidden Revealed Wish Card -->
          <div class="revealed-wish-card" id="revealed-wish-card">
            <div class="revealed-icon">💖</div>
            <h3 class="revealed-heading"><?php echo htmlspecialchars($wish_reveal_title); ?></h3>
            <p class="revealed-text"><?php echo htmlspecialchars($wish_reveal_body); ?></p>
            <button id="btn-replay-wish" class="replay-wish-btn">
              <span>Celebrate Again ✨</span>
            </button>
          </div>
        </div>
      </section>
    </main>

    <!-- ============================================================
         FOOTER
         ============================================================ -->
    <footer class="site-footer">
      <p>
        Crafted with <span class="footer-heart">❤️</span> by Umair for <?php echo htmlspecialchars($girlfriend_name); ?> on her special day
      </p>
    </footer>

  </div>

  <!-- ============================================================
       LIGHTBOX MODAL FOR MEMORY GALLERY
       ============================================================ -->
  <div class="lightbox-modal" id="lightbox-modal" role="dialog" aria-modal="true" aria-label="Photo Lightbox">
    <div class="lightbox-content-box">
      <button class="lightbox-close-btn" id="lightbox-close" aria-label="Close photo preview">×</button>
      
      <button class="lightbox-nav-btn lightbox-prev" id="lightbox-prev" aria-label="Previous photo">‹</button>
      <button class="lightbox-nav-btn lightbox-next" id="lightbox-next" aria-label="Next photo">›</button>

      <div class="lightbox-image-container">
        <img id="lightbox-img" src="" alt="Enlarged photo view">
      </div>

      <div class="lightbox-meta">
        <span class="lightbox-caption" id="lightbox-caption"></span>
        <span class="lightbox-counter" id="lightbox-counter"></span>
      </div>
    </div>
  </div>

  <!-- JavaScript (Cache Busted) -->
  <script src="script.js?v=4.0"></script>
</body>
</html>
