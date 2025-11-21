# 🚀 Running This PHP Project Using XAMPP

This project contains PHP files such as `login.php`, `userinfo.php`, and `language_selector.php`.
Follow the steps below to run the project locally using **XAMPP**.

---

## 📌 Before You Begin

### 1. Install XAMPP

Download it from:
[https://www.apachefriends.org](https://www.apachefriends.org)

Install it and open the **XAMPP Control Panel**.

---

## 🔥 How to Run the PHP Project Using XAMPP

### 1. Start the Apache Server

* Open the **XAMPP Control Panel**
* Click **Start** next to **Apache**
* The module should turn green when running

---

### 2. Move the Project to the `htdocs` Folder

XAMPP serves files from a special directory called **htdocs**.

**Windows location:**

```
C:\xampp\htdocs\
```

Copy your project folder (e.g., **Sessions**) into the `htdocs` directory:

```
htdocs
└── Sessions
    ├── login.php
    ├── userinfo.php
    └── language_selector.php
```

---

### 3. Open the Project in Your Browser

Once the project folder is inside `htdocs`, open your browser and go to:

```
http://localhost/Sessions/login.php
```

You can open any file the same way:

```
http://localhost/Sessions/userinfo.php
http://localhost/Sessions/language_selector.php
```

If your folder name is different, replace **Sessions** with the correct name.

---

## 🎉 You're Done!
