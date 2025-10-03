# VIMS — Vehicle Insurance Management System

**VIMS** is a web-based system for managing vehicle insurance operations: registration, claims, payments, etc.  
Built with PHP, CSS, and MySQL (or another database) to streamline insurance workflows.

---

## 📁 Project Structure

├── database/ # Database scripts, schema, seed data
├── image/ # Images or assets used in the UI
├── styles/ # CSS files for styling
├── about.php
├── apply_claim.php
├── claim_valid.php
├── claims.php
├── contact.php
├── contact_valid.php
├── config.php # Configuration (DB, constants, etc.)
├── customer.php
├── faq.php
├── home.php
├── index.php
├── insurance.php
├── insurance_reg.php
├── payment.php
├── payment_form.php
├── payment_validate.php
├── policy.php
├── register_ins.php
├── sign_up.php
├── staff.php
├── staff_login.php
├── staff_validate.php
├── user.php
├── user_login.php
└── user_validate.php

---

## 🛠️ Features

- Vehicle insurance registration  
- Claim application and validation  
- Payment processing  
- User / staff login & authentication  
- Policy management  
- Contact & support pages  
- FAQ / informational pages  

---

## ⚙️ Setup & Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/Shakir-Hiflulla/VIMS.git
    ```

2. Move into the project folder:
    ```bash
    cd VIMS
    ```

3. Configure your database:
   - Create a database (e.g. `vims_db`)
   - Import the SQL schema from `database/` (if provided)
   - Update `config.php` with DB connection settings (host, user, password, database name)

4. Ensure your web server (e.g. Apache, XAMPP) is running and PHP is enabled.

5. Place the `VIMS` folder in your server’s document root (e.g. `htdocs` or `www`).

6. Access via browser:
