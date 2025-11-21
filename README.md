📌 Before you begin, you need:

1. XAMPP

   Download it from: [https://www.apachefriends.org](https://www.apachefriends.org)
   Install it and open the XAMPP Control Panel.

---

🚀 How to Run the PHP Project Using XAMPP

1. Start the Apache Server

   * Open the XAMPP Control Panel
   * Click “Start” next to Apache
   * It should turn green to show the server is running


2. Move the Project to the htdocs folder
   XAMPP serves files from a special folder called htdocs.

Windows location:
C:\xampp\htdocs\

Take the project folder (for example “Sessions”) and move it inside the htdocs folder:

htdocs
└── Sessions
    └── login.php
    └── userinfo.php
    └── language_selector.php


3. Open the Project in Your Browser
Once the folder is in htdocs, open your browser and go to:
[http://localhost/Sessions/login.php](http://localhost/Sessions/login.php)

You can open any file the same way:
[http://localhost/Sessions/userinfo.php](http://localhost/Sessions/userinfo.php)
[http://localhost/Sessions/language_selector.php](http://localhost/Sessions/language_selector.php)

If your folder name is different, replace “Sessions” with your actual folder name.

🎉 You're Done!