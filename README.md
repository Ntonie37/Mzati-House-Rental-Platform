# Mzati-House-Rental-Platform
a web-based platform for house searching, providing users with an intuitive interface to search and filter available properties.


Mzati House Rental Platform Installation Guide
Prerequisites:
XAMPP Installation:

Download and install XAMPP from the official website: XAMPP.
Follow the installation instructions provided for your operating system.
Project Files:

Download or  the Mzati House Rental Platform project from this repository link.
Installation Steps:
Extract Project:


Move Project Files:

Move the entire project folder to the htdocs directory inside your XAMPP installation directory. For example, if you installed XAMPP on Windows, the path might be C:\xampp\htdocs.
Start XAMPP:

Start the XAMPP control panel and ensure that the Apache server is running. You can access the control panel by running xampp-control.exe (Windows) or using terminal commands (Linux/Mac).
Database Setup:

Open your web browser and navigate to http://localhost/phpmyadmin.
Create a new database for your project (e.g., mzati_house_rental).
Import Database:

Inside the project folder, there should be a SQL file (e.g., mzati_house_rental.sql). Import this file into your newly created database using phpMyAdmin.
Configure Database Connection:

In the project files, locate the configuration file (e.g., config.php). Update the database connection details to match your local environment (database name, username, password).
Access the Application:

Open your web browser and go to http://localhost/your_project_folder.
The Mzati House Rental Platform should now be accessible.
Using the Platform:
User Registration:

Users can register on the platform by providing necessary details.
Property Search:

Users can search for available houses based on various filters such as location, price range, etc.
Property Listing:

Property listings should display detailed information about each available house.
Contacting Property Owners:

Users should have the ability to contact the property owners or agents for more information.
User Dashboard:

Implement a user dashboard where registered users can manage their profile, saved searches, and favorite properties.
