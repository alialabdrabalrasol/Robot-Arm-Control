# Robot-Arm-Control:

## This project will use HTML, CSS and JS to bulid a web page that will be used in order to control a robot arm remotely. This project will use php to connect to a MySql database thorugh which values of each of motors of a robot arm will be stored at, along with its state that is whether its on or off. This project uses XAMPP to create an Apache server and access a MySQL database using phpmyadmin.

# How Does it Work ?

## In our case we have a robot arm with six motors. This project provides a web page by which each motor will be given a value through assigning each motor a value from 0 - 180 which will be developed as a range slider inside a form in html.

## Once Motors have been assigned values , users can choose whether it should be ON/FF through switching on or off a checkbox that is developed as a switch.

- For The switch
  - Green denotes ON
  - White desnotes OFF

## Once everything is done, users should hit save which sends data of motors to a database named robot_database to a table called arm-contorl by which data gets stored.

## After data gets saved , user gets directed to a page containing values of each motor along with the state.

# Base-Control:

## In this project we will also use HTML, CSS, JS to build a web page that will be used to control a robot base remotely. PHP will be used to connect to a MySql Database which will have a table dedicated to store actions of the base.

# How Does it Work ?

## Open the webpage that has the control panel of the base, once the page is opened the control panel can be used to contorl the base performing the follow acitons:

- For The base
  - UP to move forward
  - DOWN to move backward
  - LEFT to move left
  - RIGHT to move right
  - STOP to stop

## Choosing one of the above options will send the action to the table that holds values of contolling the base. Finally , that value is read and used on the information page

# Chatbot Integration:

## This project uses IBM Watson to create an IBM Watson assistant. The Assistant is then integrated to to a web interface which is the base. The assistant is called whenever the user chooses to interact with it.

# How Does it Work ?

## The user clicks on the bottom right chat icon, then the user starts interacting with the bot. whenever the user types anything, the bot start responing to the user accordingly. If the user asks the bot something which it does not understand, the bot can learn through things that the user had entered with the help of the user. through choosing what had been entered as:

- Intent
- Entity

## Adding them can help the bot through the process of communicating with the user smoothely and usefully.
