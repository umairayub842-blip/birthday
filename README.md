# 🎂 Romantic Birthday Mini Website For Her ❤️

A sweet, elegant, mobile-first birthday mini website designed to make your girlfriend feel deeply loved and appreciated on her special day.

---

## 📁 Project Structure

```
c:/wamp64/www/birthday/
├── index.php         # Main page with configuration at the very top
├── style.css         # Romantic aesthetic, mobile-first styling & animations
├── script.js         # Interactive floating hearts, cake, lightbox, & confetti
├── README.md         # Instructions and customization guide
├── audio/            # (Optional) Folder for custom background music
│   └── music.mp3     # Optional MP3 file
└── images/           # Folder for your 20 photos
    ├── photo1.jpg    # Replace with your photos!
    ├── photo2.jpg
    ...
    └── photo20.jpg
```

---

## 🚀 How to View the Website

### Option 1: Via WampServer (Recommended)
1. Ensure your WampServer is running (green icon in taskbar).
2. Open your web browser (on phone or PC) and navigate to:
   ```
   http://localhost/birthday
   ```
3. To view it on your phone over the same Wi-Fi network:
   - Find your PC's local IP address (e.g. `192.168.1.50`).
   - On her phone, open `http://<your-pc-ip>/birthday`.

### Option 2: Using Built-in PHP Server
In your terminal, run:
```bash
php -S localhost:8000
```
Then visit `http://localhost:8000` in your browser.

## 📸 How to Put Your Photos in the Frames

You have two super easy options:

### Method A: Automatic Auto-Framing (Zero coding required!)
1. Just open the [`images/`](file:///c:/wamp64/www/birthday/images) folder.
2. Drop your photos inside!
   - They can be named anything (e.g. `photo1.jpg`, `IMG_1024.jpg`, `vacation.png`, `snap.jpeg`, etc.).
   - The website **automatically scans and frames every photo** in the folder!
3. Refresh `http://localhost/birthday` in your browser.

### Method B: Ask Me (AI Assistant)
1. Drop your photos into the [`images/`](file:///c:/wamp64/www/birthday/images) folder.
2. Just reply here saying: *"I dropped the photos!"*
3. I will inspect your photos, order them nicely, and write personalized sweet captions for each one!

> **Photo Quality Tip:** The gallery cards automatically preserve aspect ratios and use `object-fit: cover`, meaning vertical (portrait) photos from smartphones look exceptionally good and will never be stretched or distorted.

---

## ✏️ How to Customize Her Name & Messages

Open `index.php` in any text editor (VS Code, Notepad++, etc.). At the very top (lines 16-80), you will find the configuration block:

```php
// 1. Her Name:
$girlfriend_name = "Sarah"; // Change this to her name or nickname!

// 2. Main Birthday Note:
$birthday_message = "Today is all about celebrating you...";

// 3. Gallery Captions:
$gallery_photos = [
    ['file' => 'images/photo1.jpg', 'caption' => 'The start of our story ✨'],
    ['file' => 'images/photo2.jpg', 'caption' => 'Your beautiful smile 😊'],
    ...
];

// 4. Sweet Reminders / Cards:
$sweet_messages = [
    ['quote' => 'Some people make ordinary days feel special.', 'author' => 'Forever grateful'],
    ...
];
```

---

## 🎵 Optional Background Music

The website has a built-in soft synthesized lullaby melody and sound effects that work **without needing any external files**. 

If you want to play a specific song (e.g., her favorite romantic song):
1. Create a folder named `audio` inside `birthday/`.
2. Place an MP3 file named `music.mp3` inside it (`audio/music.mp3`).
3. When she taps the **Music: Off/On** button in the bottom right corner, your custom song will play!

---

## 🎁 Features Included

- **Mobile-First & Touch-Friendly:** Crafted specifically to feel natural on iPhones and Android phones.
- **Hero Envelope Screen:** Clean opening with "Open Your Surprise" button.
- **Animated Birthday Cake:** Tap the candle flame to blow it out with a celebratory heart burst!
- **Interactive Photo Lightbox:** Tap any photo to see it full-screen with touch-swipe navigation (swipe left/right on mobile).
- **Smooth Scroll Animations:** Romantic cards fade and slide into view as she scrolls down.
- **Final Surprise & "Make a Wish ✨":** Triggers full-screen heart and pastel confetti particles with an emotional birthday reveal message.
- **No Database & No Complex Backend:** 100% lightweight and fast; easy to zip and host anywhere.
