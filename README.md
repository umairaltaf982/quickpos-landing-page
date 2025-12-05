# QuickPOS Landing Page

A modern, responsive, PHP-based landing page for the QuickPOS point-of-sale system.

## Features

- **Professional UI** - Clean, modern design with smooth animations
- **Fully Responsive** - Works on desktop, tablet, and mobile devices
- **Accessible** - ARIA labels and semantic HTML
- **Fast Loading** - Optimized CSS and lazy-loaded images

## Sections

- Header with sticky navigation
- Hero section with call-to-action
- Features showcase
- Pricing plans (Starter, Professional, Enterprise)
- Contact form
- Footer with social media links

## Local Development

1. Clone the repository
2. Run a local PHP server:
   ```bash
   php -S localhost:8000
   ```
3. Open `http://localhost:8000` in your browser

## Deployment to GitHub Pages

This project uses GitHub Actions to automatically build and deploy to GitHub Pages.

### Setup Instructions:

1. **Push to GitHub** - Ensure your code is pushed to the `main` branch

2. **Enable GitHub Pages**:
   - Go to your repository on GitHub
   - Navigate to **Settings** → **Pages**
   - Under "Build and deployment", select **GitHub Actions** as the source

3. **Deploy**:
   - The workflow runs automatically on every push to `main`
   - You can also manually trigger it from **Actions** → **Deploy to GitHub Pages** → **Run workflow**

4. **Access your site**:
   - Your site will be available at: `https://<username>.github.io/<repository-name>/`

## Project Structure

```
├── index.php           # Main landing page
├── header.php          # Navigation header
├── hero.php            # Hero section
├── features.php        # Features section
├── pricing.php         # Pricing plans
├── contact.php         # Contact form
├── footer.php          # Footer with social links
├── signup.php          # Sign up page
├── css/
│   ├── global.css      # Global styles and reset
│   ├── header.css      # Header styles
│   ├── hero.css        # Hero styles
│   ├── features.css    # Features styles
│   ├── pricing.css     # Pricing styles
│   ├── contact.css     # Contact form styles
│   ├── footer.css      # Footer styles
│   └── signup.css      # Sign up page styles
├── assets/
│   └── pos-mockup.svg  # POS dashboard mockup
└── .github/
    └── workflows/
        └── deploy.yml  # GitHub Actions workflow
```

## Technologies

- PHP 8.x
- CSS3 (Flexbox, Grid)
- SVG icons
- GitHub Actions for CI/CD
