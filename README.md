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
There are many services available nowadays, particularly with the availability of online websites where people can simply type in their request without having to contact the service provider directly. The services provided range from the most complex to the most simple tasks. These services are especially important for those who are looking for part-time work to supplement their income.  

Similarly, students at IIUM provide a variety of services, including picking up parcels, renting cars, delivering food, and serving as a transporter. However, other students who want to use these services must join a Whatsapp or Telegram group or communicate directly with each of these service providers, which can be inconvenient at times, especially if it is their first time using these services. As a result, this project, TransportIIUM, is proposed to develop a web application that will help in centralising the services available at IIUM, reducing the hassle for students in obtaining the services they require.

## 3.0 Objectives
The following objectives have been proposed for this project:
1. To centralize the services available at IIUM.
2.  To make it easier for IIUM students to request a transporter.
3.  To help in the quick and efficient delivery of food.
4.  To establish a system for picking up parcels requested by IIUM students that is easy to use.
5.  To provide an easy-to-use platform for the IIUM community to rent a car.


## 4.0 Contents

### 4.1 Student & Runner
1) Features and functionality:
      1. Choose user type - User choose between Student or Runner.
      2. Register (Student) - Students enter their personal details into the registration form.
      3. Register (Runner) - Runners enter their personal details into the registration form.
      4. Login - Users login with their matric number and password.
      
2) Views: 
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
1) Features and functionality: 
      1. Request car rental (Student) - Student enter the details to book a car from runner
      2. Accept request (Runner)- Runner need to accept the booking first
      3. Cancel booking (Student) - Student can cancel order before runner accept the booking
      
2) Views: 
      1. car.blade.php
      2. layouts
            - master.blade.php
      3. runnerAccept.blade.php
      4. cancelBooking.blade.php
      
3) Controllers: 
      * transportationController - create, read, update, delete the transportation requests in the database.

4) Routing:
      * web.php - navigate through the pages 
      
5) Model definition:   
      * This model for car rental among iium student. Student need to fill in all the required details such as date, the time pick up and the type of cars and it will         nagivate to next page for runner to accept the booking. Student also can cancel booking by delete order before the runner accept the booking. As a runner, only 
        can accept the booking not delete or decline the booking.

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
      4. cancelRequest.blade.php

3) Controllers: 
      * transportationController - create, read, update, delete the transportation requests in the database.

4) Routing:
      * web.php - navigate through the pages 
      
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
      * foodOrderController - to create, read, update, delete the food delivery requests in the database.

4) Routing:
      * web.php - navigate through the pages
      
5) Model definition:   
      * This model stores all the food delivery requests made by the student. As student, users can create an order for food delivery by filling in the particulars             such as delivery address, vendor and food. After that, the foodOrderController will create a new foodOrder object. The controller will then shows the list of           orders that are yet to be accepted by any runner in the acceptOrder page. This is done by checking the "runnerID" property in the object. Upon accepting, the           runner's name will be inserted into the variable and the order will be removed from the list.

### 4.5 Parcel Delivery
1) Features and functionality: 
      1. Student enter their parcel details (Student) - Student enter their parcel details like parcelID, from, to and item in the parcel delivery form
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

![Group 4 WAD-Page-1 drawio (1)](https://user-images.githubusercontent.com/104127503/171080192-41db444c-7a7b-41e4-92d2-cbcf11ec3643.png)


### 6.0 Sequence Diagrams
1. Users

2. Transportation
      ![Group 4 WAD-Page-2 drawio](https://user-images.githubusercontent.com/104126603/170878191-02da8f1a-908e-49cc-939a-eebb8af5e0c5.png)

3. Food  
      ![Group 4 WAD-food delivery drawio](https://user-images.githubusercontent.com/84954462/171091872-3720d011-24c5-4858-a49b-6a04780d0ca3.png)

4. Parcel
      ![Group 4 WAD-parcelSequenceDiagram drawio](https://user-images.githubusercontent.com/101052053/171030328-33e695b1-7198-4eac-b7ca-d5b5d66acc96.png)  
      
5. Rent
      ![Group 4 WAD-carRental drawio](https://user-images.githubusercontent.com/104127503/171079408-2e7dc833-151e-426c-bb7c-363e99efd154.png)

### 7.0 References (if any)


