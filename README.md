# 🏥 Clinic Management System – Laravel

A **full-featured Clinic Management System** built using **Laravel** that enables **doctors** to manage appointments, track patient health conditions, and prescribe medicine. Patients can book appointments easily and send messages to the clinic.

---

## 🚀 Features
✅ **Admin Dashboard** – Manage appointments, patients, and health records  
✅ **Appointment Booking** – Users can book appointments with name, phone, age, and health condition  
✅ **Health Condition Tracking** – Doctors can update patient records, add medications & doctor notes  
✅ **Secure Authentication** – Only **admin (doctor)** can log in and manage clinic data  
✅ **Contact & Feedback System** – Patients can send messages, and doctors can view them in the dashboard  
✅ **Responsive UI** – Clean and modern design for easy access on any device  

---

## 🛠 Technologies Used
- **Backend:** Laravel (PHP)
- **Frontend:** Blade (Laravel), Bootstrap, HTML, CSS
- **Authentication:** Laravel Auth Middleware
- **Database:** MySQL
- **Deployment:** Laravel Artisan, Apache/Nginx

---

## 📸 Screenshots  
### ✨ **Admin Dashboard**
![cli1](https://github.com/user-attachments/assets/a9d97f0e-cb6d-4db9-8c2e-3a8a1f5a738b)

### 📅 **Appointment Booking**
![cli5](https://github.com/user-attachments/assets/0530eff3-bcb5-4891-bf8d-9054f36cc894)

### 📩 **Messages Section**
![cli11](https://github.com/user-attachments/assets/db28eac1-33d8-475f-880d-1a1354243796)
![cli3](https://github.com/user-attachments/assets/ca0731be-ae38-4164-8909-a12e06506a94)

---

## 🚀 Installation Guide
Follow these steps to set up the project locally:

```bash
# Clone the repository
git clone https://github.com/yourusername/clinic-management-system.git

# Navigate to the project directory
cd clinic-management-system

# Install dependencies
composer install
npm install

# Set up environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate --seed

# Start the development server
php artisan serve
