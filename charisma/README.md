# LifePoint Church Website

A modern, responsive church website built with HTML, Tailwind CSS, and vanilla JavaScript. This website provides information about LifePoint Church, its ministries, sermons, events, and facilitates online giving and visit planning.

## 🎯 Overview

The LifePoint Church website is designed to help visitors:
- **Know God** and discover their faith journey
- **Find Freedom** through community and support
- **Discover Purpose** in their lives
- **Make a Difference** in their communities

## ✨ Features

### Core Pages
- **Home** (`index.html`) - Hero section with church mission and latest sermon
- **About** (`about.html`) - Information about the church's values and beliefs
- **Ministries** (`ministries.html`) - Various church ministries and programs
- **Sermons** (`sermons.html`) - Sermon library with video embeds
- **Events** (`events.html`) - Upcoming church events and gatherings
- **Give** (`give.html`) - Online and in-person giving options
- **Plan Visit** (`plan-visit.html`) - Information for first-time visitors

### Design Features
- 🎨 **Modern UI** - Clean, contemporary design with bold typography
- 📱 **Fully Responsive** - Mobile-first design that works on all devices
- 🎭 **Smooth Animations** - Fade-up animations and hover effects
- 🎯 **Fixed Navigation** - Sticky header with mobile menu support
- 🎨 **Custom Color Scheme** - Professional color palette with yellow accent

### Technical Features
- **Tailwind CSS** - Utility-first CSS framework (via CDN)
- **Custom Styling** - Additional CSS with Google Fonts integration
- **Mobile Menu** - Interactive hamburger menu for mobile devices
- **YouTube Integration** - Embedded sermon videos
- **Unsplash Images** - High-quality stock photography

## 🚀 Getting Started

### Prerequisites
- A web server (XAMPP, Apache, Nginx, or any static file server)
- A modern web browser

### Installation

1. **Clone or download** this repository to your web server directory:
   ```bash
   # For XAMPP (Windows)
   cd C:\xampp\htdocs\charisma
   ```

2. **Start your web server** (if using XAMPP, start Apache)

3. **Open in browser**:
   ```
   http://localhost/charisma/index.html
   ```

### For Local Development

Simply open `index.html` in a web browser, or use a local development server:

```bash
# Using Python
python -m http.server 8000

# Using Node.js (http-server)
npx http-server

# Using PHP
php -S localhost:8000
```

Then navigate to `http://localhost:8000` in your browser.

## 📁 Project Structure

```
charisma/
│
├── index.html          # Homepage
├── about.html          # About page
├── ministries.html     # Ministries page
├── sermons.html        # Sermons library
├── events.html         # Events page
├── give.html           # Giving page
├── plan-visit.html     # Plan a visit page
│
├── config.js           # Tailwind CSS configuration
├── script.js           # JavaScript functionality
└── style.css           # Custom styles and animations
```

## 🎨 Customization

### Colors
Edit `config.js` to customize the color scheme:
```javascript
colors: {
    church: {
        primary: '#1a202c',    // Dark Gray/Black
        secondary: '#4b5563',  // Gray-600
        accent: '#facc15',     // Bold Yellow
        bg: '#ffffff',         // White
        'bg-alt': '#f9fafb',   // Gray-50
    }
}
```

### Fonts
The site uses Google Fonts:
- **Poppins** - Primary sans-serif font
- **Playfair Display** - Serif font for headings

Fonts can be customized in `style.css` and `config.js`.

### Content
- Update church information in the footer sections
- Replace placeholder images with your own
- Update YouTube video embeds with your sermon videos
- Modify contact information and service times

## 🔧 Technologies Used

- **HTML5** - Semantic markup
- **Tailwind CSS** - Utility-first CSS framework
- **Vanilla JavaScript** - No dependencies, pure JS
- **Google Fonts** - Poppins & Playfair Display
- **Unsplash** - Stock photography

## 📱 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🤝 Contributing

This is a template website that can be customized for any church or religious organization. Feel free to:

1. Fork the repository
2. Make your changes
3. Customize the content for your organization
4. Update images and videos

## 📝 Notes

- The site uses Tailwind CSS via CDN (no build process required)
- All images are currently sourced from Unsplash (replace with your own)
- YouTube video embeds need to be updated with actual sermon videos
- Contact information and service times are placeholders

## 🎯 Future Enhancements

Potential improvements:
- [ ] Add a content management system (CMS)
- [ ] Implement a blog/news section
- [ ] Add online event registration
- [ ] Integrate a payment gateway for giving
- [ ] Add a contact form with backend processing
- [ ] Implement a sermon search/filter feature
- [ ] Add social media feed integration

## 📄 License

This project is open source and available for use by churches and religious organizations.

---

**LifePoint Church** - Helping people know God, find freedom, discover purpose, and make a difference.
