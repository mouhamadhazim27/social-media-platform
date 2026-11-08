# Social Media Platform

A dynamic social media web application built with **Laravel and Livewire**, designed to connect users and provide an interactive environment for communication and social networking.

The platform allows users to share posts, interact with other users, build friendships, and communicate through a chat system. It also provides notifications to keep users updated on activities and interactions.

## Features

- **User Authentication:** Secure user registration and login.
- **Posts Management:** Create, edit, and delete posts.
- **Likes System:** Like and interact with posts.
- **Comments & Replies:** Comment on posts and reply to existing comments.
- **Friend System:** Send friend requests, add friends, and unfriend users.
- **Real-Time Chat:** Communicate with other users through a messaging system powered by Pusher.
- **Notifications:** Receive notifications about social interactions and activities.
- **User Profiles:** View and manage user profiles.

## Technologies Used

- **Backend:** PHP, Laravel
- **Frontend:** Livewire, HTML, CSS, JavaScript
- **Database:** MySQL
- **Real-Time Communication:** Pusher
- **Version Control:** Git & GitHub

## Installation & Setup

Follow these steps to run the project locally.

### Prerequisites

- PHP
- Composer
- Node.js and npm
- MySQL
- Git

### 1. Clone the Repository

```bash
git clone YOUR_REPOSITORY_URL
cd your-project-folder
```

Replace the repository URL and folder name with your actual project details.

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Configure Environment Variables

Copy the example environment file:

```bash
cp .env.example .env
```

On Windows CMD:

```cmd
copy .env.example .env
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Configure the Database

Create a MySQL database and update the database credentials in your `.env` file.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=social_media
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Configure Pusher

Add your Pusher credentials to the `.env` file:

```env
BROADCAST_CONNECTION=pusher

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

### 7. Run Database Migrations

```bash
php artisan migrate
```

### 8. Install Frontend Dependencies

```bash
npm install
npm run build
```

### 9. Start the Development Server

```bash
php artisan serve
```

Open the application in your browser:

http://127.0.0.1:8000

**Note:** Make sure your MySQL server is running and your Pusher credentials are configured before testing real-time messaging.

## Project Goal

The main goal of this project is to develop a complete social networking platform while applying Laravel development concepts, database relationships, dynamic frontend interactions, and real-time communication.

## Author

**Mouhamad Hazim**

- GitHub: [@mouhamadhazim27](https://github.com/mouhamadhazim27)
- LinkedIn: [Mouhamad Hazim](https://www.linkedin.com/in/mouhamad-hazim-16748b3a4)
