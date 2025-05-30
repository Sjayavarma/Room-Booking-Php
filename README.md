# 🏨 Frida Inn Hotel Booking Portal

A full-stack room and hall booking web application designed for **Vestin Park** and similar hotel businesses. The portal enables users to view rooms, book accommodations, make payments, and allows the admin to manage all bookings and view revenue details.

## 🚀 Live Demo
[ YOUR localhost url ](#) (Replace with your hosted URL)

---

## 📁 Project Structure

```
project/
│
├── public/
├── resources/
│   ├── views/
│   │   ├── user/
│   │   ├── admin/
│   │   └── layouts/
│
├── routes/
│   ├── web.php
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   ├── Models/
│
├── database/
│   └── migrations/
│
├── .env
└── README.md
```

---

## 💡 Features

### 🧾 User Side
- View rooms and halls with images and details
- Online room/hall booking with form
- Payment confirmation page
- Responsive UI using Bootstrap
- Location linking via Google Maps

### 🛠️ Admin Side
- Login-secured admin dashboard
- View all booking records
- Track **Total Earnings** (automatically calculated after each payment)
- Manage room/hall availability

---

## 💻 Tech Stack

| Frontend | Backend | Database |
|----------|---------|----------|
| HTML, CSS, JS, Bootstrap 5 | Laravel 10 | MySQL |

---

## ⚙️ Setup Instructions

### 1. Clone the repository

```bash
git clone https://github.com/yourusername/room-booking-portal.git
cd room-booking-portal
```

### 2. Install dependencies

```bash
composer install
npm install
```

### 3. Configure `.env`

```env
DB_DATABASE=room_booking
DB_USERNAME=root
DB_PASSWORD=yourpassword
```

### 4. Run migrations

```bash
php artisan migrate
```

### 5. Seed sample data (Optional)

```bash
php artisan db:seed
```

### 6. Start the server

```bash
php artisan serve
```

---

## 📸 Screenshots

### ✅ User Payment Success Page
![Payment Success](screenshots/payment_success.png)

### 📊 Admin Dashboard
![Dashboard](screenshots/admin_dashboard.png)

---

## 📂 Important Files

### 🔢 Admin Dashboard Revenue Calculation

**File:** `AdminDashboardController.php`
```php
public function index() {
    $totalRevenue = Booking::sum('total_price');
    return view('admin.dashboard', compact('totalRevenue'));
}
```

**View File:** `resources/views/admin/dashboard.blade.php`
```blade
<h3>Total Revenue: ₹{{ number_format($totalRevenue, 2) }}</h3>
```

---

## 📦 Future Enhancements
- Email notifications on booking
- PDF invoice generation
- Booking calendar with availability
- Integration with payment gateways like Razorpay/Stripe

---

## 🤝 Acknowledgements
- [Laravel Framework](https://laravel.com)
- [Bootstrap](https://getbootstrap.com)
- [Google Maps](https://maps.google.com)

---

## 📧 Contact

**Jayavarma (Developer)**  
📩 Email: [your-email@example.com]  
📱 GitHub: [@jayavarma](https://github.com/Sjayavarma)  
🌍 Project for: Fridayinn pondicherry 

---

## 📝 License
This project is open-sourced under the [MIT License](LICENSE).
