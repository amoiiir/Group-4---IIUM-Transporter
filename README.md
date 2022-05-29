# Group-4---Final_Project
Group Members:
1. Alfin Najeehah binti Zahid           - 2019618
2. Nur Faizah binti Mhd Kamil           - 2016834
3. Nur Najua Binti Abdul Rahim          - 1919230
4. Muhammad Firdaus bin Shahrum         - 2013803
5. Muhammad Amir Hamzah bin Abdul Aziz  - 2011685

## 1.0 Project Title

## 2.0 Introduction

## 3.0 Objectives

## 4.0 Contents

### 4.1 Student & Runner

### 4.2 Car Rental

### Transportation
1) Features and functionality: 
      1. Request for pickup (Student) - Student enters their destination details such as from, to, number of passengers and the time of pickup.
      2. Accept Pickup (Runner) - Runner can view the details of all transportaion requests and accept any.
      3. Cancel Request - Student can cancel their request for pickup as long as no runner have accepted the request.
  
2) Views: (KIV)
      1. requestPickup.blade.php
      2. layouts
            - master.blade.php
      3. acceptPickup.blade.php
      4. cancelRequest.blade.php

3) Controllers: 
      * transportationController - create, read, update, delete the transportation requests in the database.

4) Routing:
      * web.php - navigate through the pages 
      
5) Model definition:   
      * This model stores all the transportation requests made by the user. Students will have to insert the details of their booking such as from, the destination,           the number of passengers and the time of pickup. Then, a new transportation order object will be created with all the details inserted by the student. The only         detail that is yet to be filled is the driver attribute. As a runner, user can browse a list of all available requests made by the students. Runners have the           option to accept any one or none of the requests. Upon accepting, the controller will update the request by inserting the runner's name into the request and           remove it from the list.

### 4.3 Food Delivery

### 4.4 Parcel Delivery
1) Features and functionality: 
      1. enterDetails (Student) - Student enter their tracking number parcel in the parcel delivery form
      2. requestRunner (Student) - User can see their order status. If their parcel arrived, they can choose to request for a runner.
      3. acceptRequest (Runner) - Runner can accept any order comming from student
  
2) Views: (KIV)
      1. enterDetails.blade.php
      2. layouts
            * master.blade.php (?) - tak sure
      3. requestRunner.blade.php - 

3) Controllers: 
      * parcelController - can be use to store, update or destroy parcel details in database

4) Routing:
      * web.php - navigate through the pages 
5) Model definition:   
      * The purpose of this model is to store the parcel details for all existing students inside the databases. Students can keep updated with their parcel status all the time using the website. If the parcel arrived, students can use the runner services by requesting through the website. Runner will receive the request and can decide which request favors them the most.

### 5.0 Entity Relationship Diagram (ERD) 

![Group 4 WAD drawio (1)](https://user-images.githubusercontent.com/104126603/170876437-43737a8e-262d-4cd8-a3ca-20f953e3c888.png)

### 6.0 Sequence Diagrams
1. Users

2. Transportation
      ![Group 4 WAD-Page-2 drawio](https://user-images.githubusercontent.com/104126603/170878191-02da8f1a-908e-49cc-939a-eebb8af5e0c5.png)

3. Food

4. Parcel

5. Rent
### 7.0 References (if any)


