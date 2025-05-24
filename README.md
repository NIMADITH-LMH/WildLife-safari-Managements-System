# 🦁 WildTracks - Wildlife Safari Management System

![WildTracks Logo](wildtracks/img/wildtrackslklogo.png)

## 📋 Table of Contents
- [Overview](#overview)
- [Key Features](#key-features)
- [Technology Stack](#technology-stack)
- [Installation and Setup](#installation-and-setup)
- [Database Configuration](#database-configuration)
- [Usage Guide](#usage-guide)
- [Admin Dashboard](#admin-dashboard)
- [User Features](#user-features)
- [Project Structure](#project-structure)
- [Security Measures](#security-measures)
- [Screenshots](#screenshots)
- [Future Enhancements](#future-enhancements)
- [Contributing](#contributing)
- [License](#license)

## 🌟 Overview

WildTracks is a comprehensive web-based Safari Management System designed to streamline the booking and management of wildlife safari experiences. This platform bridges the gap between adventure enthusiasts and safari providers by offering an intuitive interface for customers to discover, book, and manage their safari experiences, while empowering administrators with robust tools to efficiently handle reservations, user accounts, and resources.

## 🔑 Key Features

### For Visitors & Customers
- **Tour Exploration**: Browse through various safari tours with detailed descriptions and pricing
- **Intuitive Booking System**: Easy-to-use reservation process with date selection and special requests
- **User Account Management**: Secure registration and login functionality
- **Reservation Management**: View, edit, or cancel existing reservations
- **Tour Reviews**: Share experiences and read feedback from other adventurers
- **Contact Support**: Direct communication channel with safari management

### For Administrators
- **Comprehensive Dashboard**: Overview of system activities, bookings, and statistics
- **Tour Management**: Add, edit, or remove tour packages with pricing and availability
- **Reservation Handling**: Accept, decline, or modify customer bookings
- **User Management**: Manage customer accounts and admin privileges
- **Inquiry Handling**: Respond to customer questions and concerns
- **Analytics**: Generate reports on bookings, revenue, and popular tours

## 💻 Technology Stack

### Frontend
- **HTML5**: Structure and content
- **CSS3**: Responsive and intuitive styling
- **JavaScript**: Interactive elements and form validation
- **jQuery**: Enhanced user interface components

### Backend
- **PHP**: Server-side logic and processing
- **MySQL**: Robust database management

### Security
- **Session Management**: Secure user sessions
- **Password Hashing**: Protected user credentials
- **Input Validation**: Protection against common web vulnerabilities

## 🚀 Installation and Setup

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/WildLife-safari-Managements-System.git
   ```

2. **Set up the database**
   - Create a MySQL database named `wildtracks`
   - Import the database schema from `wildtracks/wildtracks.sql`

3. **Configure database connection**
   - Navigate to `wildtracks/includes/config.php`
   - Update the database credentials:
     ```php
     $servername = "localhost";
     $username = "your_username";
     $password = "your_password";
     $dbname = "wildtracks";
     ```

4. **Deploy to web server**
   - Move the project files to your web server directory
   - Ensure proper permissions are set

5. **Access the application**
   - Open your browser and navigate to `http://localhost/wildtracks/`

## 🗄️ Database Configuration

The system utilizes a MySQL database with the following key tables:

- **users**: Stores user account information
- **admins**: Contains administrator credentials and privileges
- **tours**: Details of available safari packages
- **reservations**: Records of customer bookings
- **reviews**: User feedback and ratings
- **inquiries**: Customer questions and support requests

## 📱 Usage Guide

### For Visitors
1. Browse the available safari tours on the homepage
2. View detailed information about specific tours
3. Create an account to make reservations
4. Contact support for any inquiries

### For Registered Users
1. Log in to your account
2. Browse and select your preferred safari experience
3. Make a reservation with your preferred dates
4. View and manage your bookings in your profile
5. Update account information as needed
6. Submit reviews after completing your safari

### For Administrators
1. Access the admin dashboard via the login page
2. Manage tours, reservations, and user accounts
3. Respond to customer inquiries
4. Add or modify system content
5. Generate and view reports

## 👨‍💼 Admin Dashboard

The administrator dashboard provides a centralized control panel for managing all aspects of the safari management system:

- **Tour Management**: Add new tours, update existing ones, and manage availability
- **Reservation Oversight**: View, approve, or decline pending reservations
- **User Administration**: Manage user accounts and privileges
- **Communication Center**: Respond to customer inquiries
- **Content Management**: Update website content and images

## 🏗️ Project Structure

```
wildtracks/
├── index.php                 # Homepage
├── tours.php                 # Tour listings
├── tourdetails.php           # Individual tour information
├── login.php                 # User authentication
├── signup.php                # New user registration
├── userprofile.php           # User account management
├── profilereservations.php   # User reservation management
├── tourmanagement.php        # Admin tour control
├── usermanagement.php        # Admin user control
├── includes/                 # Core functionality
│   ├── config.php            # Database connection
│   ├── functions.php         # Common functions
│   ├── header.php            # Site header
│   ├── footer.php            # Site footer
│   └── ...                   # Additional functionality
├── styles/                   # CSS stylesheets
├── js/                       # JavaScript files
└── img/                      # Image assets
```

## 🔒 Security Measures

WildTracks implements several security best practices:

- **Input Validation**: All user inputs are validated and sanitized
- **Prepared Statements**: Protection against SQL injection attacks
- **Password Hashing**: User passwords are securely hashed
- **Session Management**: Secure user sessions with timeout functionality
- **CSRF Protection**: Forms include tokens to prevent cross-site request forgery

## 📸 Screenshots

### Homepage
![Homepage](wildtracks/img/homepage.jpg)

### Tour Listings
![Tour Listings](wildtracks/img/pack-10.jpg)

### Admin Dashboard
![Admin Dashboard](wildtracks/img/about.jpg)

## 🔮 Future Enhancements

- **Payment Gateway Integration**: Implement secure online payment processing
- **Mobile Application**: Develop complementary mobile apps for iOS and Android
- **Multi-language Support**: Extend accessibility to international users
- **Advanced Analytics**: Implement detailed reporting and business intelligence
- **Interactive Maps**: Add geographic visualization of safari routes and locations
- **Live Chat Support**: Real-time customer assistance

## 🤝 Contributing

Contributions to improve WildTracks are welcome! Here's how you can contribute:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

---

© 2025 WildTracks Safari Management System. All Rights Reserved.
