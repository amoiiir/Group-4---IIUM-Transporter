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
1) Features and functionality:
      1. Choose user type - User choose between Student or Runner.
      2. Register (Student) - Students enter their personal details into the registration form.
      3. Register (Runner) - Runners enter their personal details into the registration form.
      4. Login - Users login with their matric number and password.
      
2) Views: (KIV)
      1. registerStudent.blade.php
      2. registerRunner.blade.php
      3. login.blade.php
      4. verify.blade.php
      5. layouts
            - master.blade.php

3) Controller:
      * registrationController - create and update users' personal details

4) Routing:
      * web.php - navigate through the pages

5) Model definition:
      * This model shows that the users need to choose between Student or Runner to use this web application. Then, users need to fill in their personal details in 
        registration forms that has been devided by the chosen user type by entering Name, Matric Number, IC Number, Age, Email, Kulliyyah and Password. These details
        are needed so that the users can login only with Matric Number and Password.

### 4.2 Car Rental

### 4.3 Transportation
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

### 4.4 Food Delivery

### 4.5 Parcel Delivery
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
      * The purpose of this model is for students to request existing runner to deliver their parcels directly to them. Users are required to enter their parcelID(tracking number), From (the current location of the parcel), To (The location of the owner) and specify the item. After submitting the form, user will be notify if there is runner to pick up their parcels and it will display all the details inserted by the user from the previous form with the charges.

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


