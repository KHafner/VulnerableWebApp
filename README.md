# VulnerableWebApp
Lab2 for Application Security course summer 2019


This web app is vulnerable to XSS and SQLi attacks. The pages directly displays input from the user and adds it to the SQL database without peforming any checks on the user input. The $applename variable is input to the APPLEIMAGES database and the $filename file is loaded into the database without any security checking such as using prepared statements, thus making the app vulnerable to SQLi attacks. The $applename variable is displayed to the resulting HTML page directly and the $filename file is loaded in an image tag on the page without any checking, making the app vulnerable to XSS attacks. For example, the user could input a script in the Apple Variety field of the form on test.html page and it will be executed. They could also upload a malicious file instead of an image.
