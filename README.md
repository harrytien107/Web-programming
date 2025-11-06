# 🌐 Web Programming - Learning Repository

A comprehensive collection of web development exercises and projects covering HTML, CSS, JavaScript, PHP, and MySQL.
So its kinda mid and easy.

## 📚 Repository Overview

This repository contains various assignments, labs, and projects completed during the web programming course in my school. The exercises progress from basic HTML/CSS to advanced PHP and database integration. Do not worry it sill mid.

---

## 📂 Project Structure

### 🎯 Basic HTML & CSS

#### **CSS_1/** & **CSS_2/**
- **Purpose**: CSS Fundamentals Lab
- **Content**: Layout exercises, styling practices
- **Files**: 
  - `tinxemnhieu.html` - Most viewed news section
  - `tinnoibat.html` - Featured news section
- **Topics**: CSS styling, layout design, responsive design basics

#### **TH - HTML/**
- **Purpose**: HTML Practice Exercises
- **Content**: Basic HTML structure and elements
- **Topics**: HTML5 semantics, forms, tables, lists

#### **Form1/**
- **Purpose**: HTML Form Design
- **Content**: Form creation and styling
- **Files**: `form1.html`, `style.css`
- **Topics**: Form elements, input validation, CSS styling

#### **Lab_layout1/** & **Lab_layout2/**
- **Purpose**: Layout Design Exercises
- **Content**: Different layout techniques
- **Files**: `index.html`, `layout.css`
- **Topics**: CSS Grid, Flexbox, positioning

---

### 💻 JavaScript & jQuery

#### **LAB JAVASCRIPT/**
- **Purpose**: JavaScript Fundamentals Lab
- **Content**: Client-side scripting exercises
- **Files**:
  - `checklogin.js` - Login validation
  - `checksearch.js` - Search functionality
  - `login.html` - Login form
  - `tim.html` - Search page
- **Topics**: Form validation, DOM manipulation, event handling

#### **labjvs/**
- **Purpose**: jQuery Menu Implementation
- **Content**: Dynamic menu with jQuery
- **Files**: `menu_jquery.html`, `menu.css`, jQuery library
- **Topics**: jQuery selectors, effects, event handling

#### **Jquery Load/**
- **Purpose**: jQuery AJAX Loading
- **Content**: Dynamic content loading
- **Files**: `hamload.html`, `layout_a.html`, various content pages
- **Topics**: jQuery `.load()` method, AJAX basics

#### **lab_jquery_04/**
- **Purpose**: Advanced jQuery Lab
- **Content**: jQuery exercises
- **Topics**: jQuery animations, DOM traversal, event delegation

---

### 🐘 PHP Programming

#### **BT PHP co ban/** (Basic PHP Exercises)
- **Purpose**: PHP Fundamentals
- **Content**: 9 basic PHP exercises
- **Files**: `bai1.php` through `bai9.php`, `index.php`
- **Topics**: 
  - PHP syntax and variables
  - Control structures
  - Functions
  - Arrays
  - String manipulation

#### **BT2/** (Assignment 2)
- **Purpose**: PHP & MySQL Integration
- **Content**: Music database application
- **Files**: 
  - `casi_baihat.php` - Singers and songs management
  - `webtintuc.sql` - Database schema
- **Topics**: Database connection, SQL queries, data display

#### **BT3/** (Assignment 3)
- **Purpose**: Multi-page News Website
- **Content**: News portal with multiple sections
- **Files**:
  - `index.php` - Main page
  - `menu.php` - Navigation menu
  - `tintuc.php` - News section
  - `giaitri.php` - Entertainment section
  - `xahoi.php` - Society section
  - `banner.php`, `footer.php` - Layout components
- **Topics**: PHP includes, modular design, content management

#### **Thuchanh1/** (Practice 1)
- **Purpose**: PHP Database Practice
- **Content**: User management system
- **Files**: `users.php`, `lienket.php`, `webtintuc.sql`
- **Topics**: CRUD operations, database interaction

#### **Loaisp/** (Product Categories)
- **Purpose**: Product Category Management
- **Content**: E-commerce category system
- **Files**: `lossp.php`, database schema
- **Topics**: Category listing, product organization

#### **phantrang/** (Pagination)
- **Purpose**: Data Pagination Implementation
- **Content**: Product pagination system
- **Files**: 
  - `index.php` - Main pagination logic
  - `connect.php` - Database connection
  - `Info.txt` - Detailed code explanation
  - `img_sp/` - Product images (male/female categories)
- **Topics**: 
  - SQL LIMIT and OFFSET
  - Page calculation
  - Navigation links
  - GET parameter handling

---

### 🎓 Major Projects

#### **BTL-Nhom13/WebFilm/** (Group 13 Final Project)
- **Purpose**: Complete Movie Streaming Website
- **Content**: Full-stack web application with admin panel
- **Technologies**: 
  - HTML, CSS, JavaScript
  - PHP, MySQL
  - Bootstrap framework
  - Docker containerization
- **Features**:
  - User Interface:
    - Movie browsing by category
    - Movie detail pages
    - Video streaming player
    - Search functionality
  - Admin Panel:
    - Movie management (CRUD)
    - Category management
    - Episode management
    - Series management
    - Admin user management
- **Structure**:
  - `/src` - Source code
  - `/admin` - Administration panel
  - `/assets` - CSS, JS, images
  - `/classes` - PHP classes
  - `/config` - Configuration files
  - `/includes` - Reusable components
- **Deployment**: 
  - Docker support (see `docker-compose.yml`)
  - XAMPP compatible
- **Topics**: OOP PHP, MVC pattern, authentication, file upload, video streaming

---

### 🧪 Additional Labs & Tests

#### **labDB/**
- **Purpose**: Database Design Lab
- **Content**: SQL schema files
- **Files**: `shop.sql`, `shoponline.sql`
- **Topics**: Database design, normalization, relationships

#### **Baitap31-3/**
- **Purpose**: Specific Date Assignment (March 31)
- **Content**: Mixed exercises
- **Files**: `test.php`, `Untitled-1.html`

#### **webtestbt/**
- **Purpose**: Website Structure Testing
- **Content**: Multi-page website with sections
- **Structure**:
  - `/giaitri` - Entertainment (games, music)
  - `/tintuc` - News (science, sports)
  - `/Hinh` - Images
- **Topics**: Site structure, navigation, linking

#### **Slide/**
- **Purpose**: Course presentation materials

---

## 🛠️ Technologies Used

### Frontend
- HTML5
- CSS3
- JavaScript (ES6+)
- jQuery
- Bootstrap

### Backend
- PHP 7+
- MySQL/MariaDB

### Tools & Deployment
- Docker
- XAMPP
- Git

---

## 🚀 Getting Started

### Prerequisites
- XAMPP (Apache + MySQL + PHP) or
- Docker & Docker Compose

### Running PHP Projects

#### Method 1: Using XAMPP
1. Install XAMPP
2. Copy project folder to `htdocs`
3. Start Apache and MySQL from XAMPP Control Panel
4. Import `.sql` file to phpMyAdmin
5. Access via `http://localhost/[project-folder]`

#### Method 2: Using Docker (WebFilm project)
1. Navigate to project directory
2. Run `docker-compose up -d`
3. Access via `http://localhost:8080`

### Running Static HTML Projects
- Simply open `.html` files in a web browser
- For jQuery exercises, ensure internet connection for CDN resources

---

## 📖 Learning Path

1. **Week 1-2**: HTML & CSS Basics (`TH - HTML/`, `CSS_1/`, `CSS_2/`)
2. **Week 3-4**: Layouts & Forms (`Lab_layout1/`, `Lab_layout2/`, `Form1/`)
3. **Week 5-6**: JavaScript Fundamentals (`LAB JAVASCRIPT/`)
4. **Week 7-8**: jQuery (`labjvs/`, `Jquery Load/`, `lab_jquery_04/`)
5. **Week 9-10**: PHP Basics (`BT PHP co ban/`)
6. **Week 11-12**: PHP & MySQL (`BT2/`, `BT3/`, `Thuchanh1/`)
7. **Week 13-14**: Advanced PHP (`Loaisp/`, `phantrang/`)
8. **Week 15-16**: Final Project (`BTL-Nhom13/WebFilm/`)

---

## 📝 Notes

- Each folder contains specific exercises or labs
- SQL files are included for database-related projects
- Some folders include PDF instructions (Vietnamese)
- Most projects use UTF-8 encoding for Vietnamese language support

---

## 👨‍💻 Author

**Harry Tien** (harrytien107)

---

## 📄 License

This repository is for educational purposes.
