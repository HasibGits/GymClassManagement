# GymClassManagement
# Laravel Trainer Management System
# Go to Master Branch

This Laravel-based web application is designed for managing trainers, scheduling classes, and allowing trainees to book classes. The system has three user roles: Admin, Trainer, and Trainee, each with specific functionality.

## Features

- **JWT Authentication** for secure login.
- **Roles & Permissions** using Spatie's Laravel Permission package:
  - **Admin**: Manage trainers, schedule classes, and assign trainers.
  - **Trainer**: View assigned class schedules.
  - **Trainee**: Manage profile and book available classes.
- **CRUD operations** for Trainers (Admin only).
- **Class scheduling**: Admin can create classes with time and capacity limits.
- **Booking system** for trainees to book classes.
- **Responsive front end** built using Laravel Blade templates.
  
## Tech Stack

- **Backend**: Laravel 11.x
- **Database**: MySQL/PostgreSQL (choose one based on your environment)
- **Authentication**: JWT (JSON Web Tokens)
- **Roles & Permissions**: Spatie Laravel Permission Package
- **Frontend**: Laravel Blade templates (HTML, CSS, Bootstrap)

## Installation

### Prerequisites

- PHP >= 8.2
- Composer
- MySQL or PostgreSQL


### Step 1: Clone the repository

git clone https://github.com/your-username/laravel-trainer-management.git
cd laravel-trainer-management
### Step 2: Install dependencies
Install PHP dependencies:

Visit http://localhost:8000 in your browser to see the application running.
