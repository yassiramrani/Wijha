# WIJHA - Travel Companion Landing Page

![WIJHA Logo](https://placehold.co/600x200/14b8a6/ffffff?text=WIJHA&font=montserrat)

## Overview

WIJHA is a comprehensive travel companion platform that helps users plan their journeys from visa requirements to local attractions. This repository contains the landing page and authentication pages for the WIJHA platform.

## Features

### Landing Page
- Responsive hero section with search functionality
- Feature highlights section
- How it works process explanation
- Popular destinations showcase
- User testimonials
- Call-to-action sections

### Authentication
- Dedicated login page
- Dedicated signup page
- Form validation
- Social authentication options
- Responsive design for all devices

## Screenshots

### Landing Page
![Landing Page](https://placehold.co/800x400/f1f5f9/1e293b?text=WIJHA+Landing+Page)

### Login Page
![Login Page](https://placehold.co/800x400/f1f5f9/1e293b?text=WIJHA+Login+Page)

### Signup Page
![Signup Page](https://placehold.co/800x400/f1f5f9/1e293b?text=WIJHA+Signup+Page)

## Technologies Used

- HTML5
- CSS3 (with custom variables for theming)
- JavaScript (Vanilla)
- Responsive design principles
- SVG icons

## Project Structure

\`\`\`
wijha-landing/
├── index.html          # Main landing page
├── login.html          # Login page
├── signup.html         # Signup page
├── styles.css          # Shared styles
├── script.js           # Main JavaScript for landing page
├── auth.js             # JavaScript for authentication pages
└── README.md           # Project documentation
\`\`\`

## Getting Started

### Prerequisites

- A modern web browser
- Basic knowledge of HTML, CSS, and JavaScript

### Installation

1. Clone the repository:
   \`\`\`bash
   git clone https://github.com/yourusername/wijha-landing.git
   \`\`\`

2. Navigate to the project directory:
   \`\`\`bash
   cd wijha-landing
   \`\`\`

3. Open `index.html` in your browser to view the landing page.

## Usage

### Landing Page

The landing page (`index.html`) serves as the main entry point for users. It showcases the key features of WIJHA and provides navigation to other parts of the site.

### Authentication

- `login.html` - Provides a form for existing users to log in
- `signup.html` - Allows new users to create an account

## Customization

### Changing Colors

The project uses CSS variables for consistent theming. To change the color scheme, modify the variables in the `:root` section of `styles.css`:

\`\`\`css
:root {
  --color-primary: #14b8a6;
  --color-primary-dark: #0d9488;
  /* other color variables */
}
\`\`\`

### Adding New Pages

To add new pages:

1. Create a new HTML file based on the existing templates
2. Link to the shared CSS file
3. Add navigation links in the header
4. Update the navigation links in other pages to include your new page

## Future Enhancements

- Dark mode support
- Multi-language support
- Integration with backend services
- User dashboard
- Destination detail pages
- Interactive maps
- Booking functionality

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Contact

Your Name - [your.email@example.com](mailto:your.email@example.com)

Project Link: [https://github.com/yourusername/wijha-landing](https://github.com/yourusername/wijha-landing)

## Acknowledgments

- [Lucide Icons](https://lucide.dev/) for the SVG icons
- [Inter Font](https://fonts.google.com/specimen/Inter) from Google Fonts
- [Placeholder.com](https://placeholder.com) for placeholder images
