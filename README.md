# PlantParadise

**My second major personal project** (Feb 2023 – Aug 2023): A simple, responsive plant exploration and e-commerce-style website to browse plant categories, learn care tips, and simulate a shop experience.

**Live demo**: https://alexanderforrest.dev/PlantParadise

## Features
- **Category browsing**: Large Plants, Small Plants, Pots & Baskets, HomeWare, plus specialized sections like carnivorous plants (Venus flytrap, Cape sundew).
- **Plant knowledge & care library**: Tips on soil, watering, light, temperature, pest management, seasonal care (summer/winter guides).
- **Nationwide shipping info**: No size limit, affordable delivery across South Africa.
- **User features**: Basic login/register, profile updates (name, address, contact), possible file upload (e.g., avatars).
- **Shopping cart integration**: Styled for Snipcart (basic e-commerce functionality).
- Simple navigation and responsive design.

## Tech Stack
- **Frontend**: HTML, CSS (multiple stylesheets for layout, shop, dropdowns, plant care), minimal JavaScript (`toggle.js` for basic interactions).
- **Backend/Structure**: PHP (dominant—separate .php files for each page/category/feature).
- **Other**: Snipcart CSS for cart styling; no database schema visible (likely static or simple session-based).

## About This Project
This was my follow-up experiment after Butcher's Circus (my first full-stack app). I shifted focus to UI/responsiveness, CSS organization, and building a themed site with real content (plant categories, SA shipping, care guides).

**Honest status**: Code is messy and needs refactoring:
- Completely flat structure (35+ files in root, no folders).
- Repeated/redundant code across .php files.
- Minimal JS (mostly CSS-driven layout).
- No Git used during development.
- No React here (early experiments with React components happened locally or weren't committed; this push is the original vanilla/PHP version).

Proud of shipping a functional, content-rich site from scratch—it helped me learn responsive design, CSS best practices, and why modular structure/Git matter before moving to React/TS projects.

## Lessons Learned
- Organize files early (folders for CSS/JS/PHP includes).
- CSS can handle complex layouts with minimal JS.
- Start with Git from day one.
- Incremental learning (vanilla → frameworks) builds strong foundations.

## How to Run Locally
1. Set up a PHP server (XAMPP, MAMP, or `php -S localhost:8000`).
2. Place files in the server root.
3. Access http://localhost/index.php.
(No database required—mostly static content with session-based features.)

## Future Improvements
- Refactor to full React or Next.js.
- Add real filtering/search.
- Organize into components/folders.
- Migrate Snipcart to a modern cart if expanding.

Feel free to browse—it's raw early work, but part of my self-taught journey from beginner PHP sites to React multiplayer apps.
