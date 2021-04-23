# IotDashboard

 this is a guide for how to use XAMPP to test any PHP website on your own computer. Well, actually, it's more a guide of guides than an actual guide. I personally didn't find the process to be bad, but it also wasn't straightforward, and it involved a lot of googling separate problems. There was no One Guide for the Entire Process, but a bunch of separate things.

So I decided to put everything together. Here are the steps:

Step 1: Install XAMPP. [Download from here](https://www.apachefriends.org/index.html).

Step 2: Set up XAMPP. [Follow instructions here](http://sustainablewebdesign.com/book/resources/xampp/).

Step 3: Go to PhpMyAdmin and create any relevant MySQL tables, if any.

Step 4: [Get unlocked out from PhpMyAdmin](http://stackoverflow.com/questions/18807100/locked-out-of-phpmyadmin-with-xampp).

Step 5: Edit your database access script to [reflect the new PhpMyAdmin credentials](https://community.apachefriends.org/f/viewtopic.php?f=7&t=47691).

Step 6: If you're having users upload things, make sure your copies of folders where you want uploads to go [are writable](http://stackoverflow.com/questions/1070216/how-do-i-make-directory-writable).

After installation , open the Xampp Control panel by searching in windows Search.

start the Apache and Mysql engines by click the appropriate start buttons.

Then, open a browser, type localhost/dashboard - if the xampp is correctly installed , it will show the dashboard page.

--------------------------------------------------------------------------------------------------------------------------------------------------


## Dashboard website code

you can access the localhost webapp project codes in your computer at this location - C:\xampp\htdocs\

you put your project codes here - C:\xampp\htdocs\dp\

## Cloning this repository

Download this repo code as Zip file and extract it to your computer.

After extracting, Copy the iot_dashboard folder to this location - C:\xampp\htdocs\dp\

After Copying - go to browser and open - localhost/dp/iot_dashboard/ 
 you can see the website is loading....


## Mysql Tables adding

Download the sql file from here - [dp.sql](https://drive.google.com/file/d/1Tr4U3KJ2Dma8o8uWcw4_LeSj7_BCC1q9/view?usp=sharing).

Go to localhost/phpmyadmin in browser - you can see the database there.

import the downloaded dp.sql file to phpmyadmin database by accessing the Import menu.

Then you can see that the database is loaded to your DB.

## Connect DB - Webapp

go to project code and change the neccessary db login details - 
 - - most of the cases, if your db is localhost don't change the user details.


# Hurray your app is now working.

# you can access the hosted website here - [Marvel IoT]()