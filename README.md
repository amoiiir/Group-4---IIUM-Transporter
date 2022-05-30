# Group-4---Final_Project
Group Members:
1. Alfin Najeehah binti Zahid           - 2019618
2. Nur Faizah binti Mhd Kamil           - 2016834
3. Nur Najua Binti Abdul Rahim          - 1919230
4. Muhammad Firdaus bin Shahrum         - 2013803
5. Muhammad Amir Hamzah bin Abdul Aziz  - 2011685

## 1.0 Project Title

TransportIIUM - IIUM Runner Service System

## 2.0 Introduction

## 3.0 Objectives

## 4.0 Contents

### 4.1 Student & Runner

### 4.2 Car Rental

### 4.3 Transportation
1) Features and functionality: 
      1. Request for pickup (Student) - Student enters their destination details such as from, to, number of passengers and the time of pickup.
      2. Accept Pickup (Runner) - Runner can view the details of all transportaion requests and accept any.
      3. Cancel Request - Student can cancel their request for pickup as long as no runner have accepted the request.
  
2) Views: 
      1. requestPickup.blade.php
      2. layouts
            - master.blade.php
      3. acceptPickup.blade.php

3) Controllers: 
      * transportationController - create, read, update, delete the transportation requests in the database.

4) Routing:
      * /pickuprequest - directs the user to requestPickup.blade.php
      * /acceptpickup - directs the user to acceptPickup.balde.php
      
5) Model definition:   
      * This model stores all the transportation requests made by the user. Students will have to insert the details of their booking such as from, the destination,           the number of passengers and the time of pickup. Then, a new transportation order object will be created with all the details inserted by the student. The only         detail that is yet to be filled is the driver attribute. As a runner, user can browse a list of all available requests made by the students. Runners have the           option to accept any one or none of the requests. Upon accepting, the controller will update the request by inserting the runner's name into the request and           remove it from the list.

### 4.4 Food Delivery
1) Features and functionality: 
      1. Order food (Student) - Student enters their order details such as delivery address, vendor and what food do they want.
      2. Accept order (Runner) - Runner can view the details of all food order requests and accept any.
      3. Cancel Request - Student can cancel their request for food as long as no runner have accepted the request.
  
2) Views: 
      1. orderFood.blade.php
      2. layouts
            - master.blade.php
      3. acceptOrder.blade.php
      4. myOrders.blade.php

3) Controllers: 
      * foodOrderController - create, read, update, delete the food delivery requests in the database.

4) Routing:
      * /orderfood - directs the user to orderFood.blade.php
      * /myorders - directs the user to myOrders.blade.php
      * /acceptorder - directs the user to acceptOrder.blade.php
      
5) Model definition:   
      * This model stores all the food delivery requests made by the student. As student, users can create an order for food delivery by filling in the particulars             such as delivery address, vendor and food. After that, the foodOrderController will create a new foodOrder object. The controller will then shows the list of           orders that are yet to be accepted by any runner in the acceptOrder page. This is done by checking the "runnerID" property in the object. Upon accepting, the           runner's name will be inserted into the variable and the order will be removed from the list.


### 4.5 Parcel Delivery
1) Features and functionality: 
      1. Enter parcel Details (Student) - Student enter their tracking number parcel in the parcel delivery form
      2. Student request for runner (Student) - User can see their order status. If their parcel arrived, they can choose to request for a runner.
      3. Accept request from student (Runner) - Runner can accept any order comming from student
  
2) Views: 
      1. enterDetails.blade.php
      2. layouts
            * master.blade.php
      3. requestRunner.blade.php - 

3) Controllers: 
      * parcelController - can be use to store, update or destroy parcel details in database

4) Routing:
      * web.php - navigate through the pages 
5) Model definition:   
      * The purpose of this model is for students to request existing runner to deliver their parcels directly to them. Users are required to enter their parcelID(tracking number), From (the current location of the parcel), To (The location of the owner) and specify the item. After submitting the form, user will be notify if there is runner to pick up their parcels and it will display all the details inserted by the user from the previous form with the charges.

### 5.0 Entity Relationship Diagram (ERD) 

![Group 4 WAD-Page-1 drawio](https://user-images.githubusercontent.com/104126603/170981800-81a83ccf-5768-4500-b40a-2048df25aa3c.png)


### 6.0 Sequence Diagrams
1. Users

2. Transportation
      ![Group 4 WAD-Page-2 drawio](https://user-images.githubusercontent.com/104126603/170878191-02da8f1a-908e-49cc-939a-eebb8af5e0c5.png)

3. Food

4. Parcel

5. Rent
### 7.0 References (if any)


