# Group-4---Final_Project
Group Members:
1. Alfin Najeehah binti Zahid           - 2019618
2. Nur Faizah binti Mhd Kamil           - 2016834
3. Nur Najua Binti Abdul Rahim          - 1919230
4. Muhammad Firdaus bin Shahrum         - 2013803
5. Muhammad Amir Hamzah bin Abdul Aziz  - 2011685

## Youtube Video Link
https://youtu.be/pB9ZsLtzFh4

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

### 4.1 Users
1) Features and functionality:
      1. Register - Users enter their personal details into the registration form.
      2. Login - Users login with their email and password.

2) Views: 
      1. welcome.blade.php
      2. register.blade.php
      3. login.blade.php
      4. dashboard.blade.php

5) Model definition:
      * This model shows that the users need to fill in their personal details in registration forms that has been devided by the chosen user type by entering Name,
        Email, and Password. These details are needed so that the users can login only with Matric Number and Password.

### 4.2 Car Rental
1) Features and functionality: 
      1. Request car rental (Student) - Student enter the details to book a car from runner
      2. Accept request (Runner)- Runner need to accept the booking first
      3. Cancel booking (Student) - Student can cancel order before runner accept the booking

2) Views: 
      1. car.blade.php
      2. carRental.blade.php
      3. sview.blade.php

3) Controllers: 
      * rentalController - create, read, update, delete the transportation requests in the database.
      * index()
      * create()
      * store()
      * show()
      * showMyRental()
      * edit()
      * update()
      * destroy()

4) Routing:
      * /dashboard - directs the user to dashboard.blade.php (student)
      * /car - directs the user to car.blade.php (student)
      * /acceptRequest - directs the user to carRental.blade.php
      * /acceptRental - directs the user to car.blade.php
      * /acceptRental {ID} - directs the user to car.blade.php
      * /MyRentalOrders - directs user to showRental
      * /cancelRentalOrder {ID} - directs user to sview.blade.php
      * /requestCar - directs user to car.blade.php

5) Model definition:   
      * This model for car rental among iium student. Student need to fill in all the required details such as date and will nagivate to next page for runner to accept         the booking. Student also can cancel booking by delete order before the runner accept the booking. As a runner, only can accept the booking not delete or               decline the booking.

### 4.3 Transportation
1) Features and functionality: 
      1. Request for pickup (Student) - Student enters their destination details such as from, to, number of passengers and the time of pickup.
      2. Accept Pickup (Runner) - Runner can view the details of all transportaion requests and accept any.
      3. Cancel Request - Student can cancel their request for pickup as long as no runner have accepted the request.

2) Views: 
      1. requestPickup.blade.php
      2. layouts
            - master.blade.php
      3. cancelRequest.blade.php
      4. acceptPickup.blade.php

3) Controllers: 
      * transportController - create, read, update, delete the transportation requests in the database.

4) Routing:
      * /requestPickup - directs the user to requestPickup.blade.php (student)
      * /acceptTransport - directs the user to acceptPickup.blade.php (student)
      * /MyPickupRequest - directs the user to cancelRequest.blade.php (runner)
      * /MyPickup{id}
      * /acceptTransport{id}

5) Model definition:   
      * This model stores all the transportation requests made by the user. Students will have to insert the details of their booking such as from, the destination,           the number of passengers and the time of pickup. Then, a new transportation order object will be created with all the details inserted by the student. The only         detail that is yet to be filled is the driver attribute. As a runner, user can browse a list of all available requests made by the students. Runners have the           option to accept any one or none of the requests. Upon accepting, the controller will update the request by inserting the runner's name into the request and           remove it from the list.

### 4.4 Food Delivery
1) Features and functionality: 
      1. Order food (Student) - Student enters their order details such as delivery address, vendor and what food do they want.
      2. Accept order (Runner) - Runner can view the details of all food order requests and accept any.
      3. Cancel Request - Student can cancel their request for food as long as no runner have accepted the request.

2) Views: 
      1. orderFood.blade.php
      2. acceptOrder.blade.php
      3. myOrders.blade.php

3) Controllers: 
      * foodOrderController - to create, read, update, delete the food delivery requests in the database. Functions :
      * index()
      * create()
      * store()
      * show()
      * showMyOrders()
      * edit()
      * update()
      * destroy()

4) Routing:
      * /food -> index()
      * /acceptOrder -> show()
      * /acceptOrder{id} -> update()
      * /MyFoodOrders -> showMyOrders()
      * /cancelOrder -> destroy()
      * makeOrder

5) Model definition:   
      * This model stores all the food delivery requests made by the student. As student, users can create an order for food delivery by filling in the particulars             such as delivery address, vendor and food. After that, the foodOrderController will create a new foodOrder object. The controller will then shows the list of           orders that are yet to be accepted by any runner in the acceptOrder page. This is done by checking the "runnerID" property in the object. Upon accepting, the           runner's name will be inserted into the variable and the order will be removed from the list.

### 4.5 Parcel Delivery
1) Features and functionality: 
      1. Student enter their parcel details (Student) - Student enter their parcel details like parcelID, from, to and item in the parcel delivery form
      2. Student request for delivery runner (Student) - Student can request for runner after they submited the form.
      3. Review user details (Student) - Student can review their input values in this page and it will display the charge as well. 
      4. Runner view request  (Runner) - Runner can view all the details they required and choose any existing request for delivery.

2) Views: 
      1. parcel.blade.php
      2. myOrder.blade.php
      3. acceptParcel.blade.php

3) Controllers: 
      * parcelController - use to implement CRUD (Create, Read, Update and Delete) parcel details in the database
      * index()
      * create()
      * store()
      * show()
      * showMyOrders()
      * edit()
      * update()
      * destroy()

4) Routing:
      * /acceptParcel -> show()
      * /myParcelOrder -> showOrder()
      * /cancelParcelOrder{parcel_id} -> destroy()
      * /acceptParcelOrder{parcel_id) -> update()

5) Model definition:   
      * The purpose of this model is for students to request existing runner to deliver their parcels directly to them. Users are required to enter their parcelID(tracking number), From (the current location of the parcel), To (The location of the owner) and specify the item. After submitting the form, user will be notify if there is runner to pick up their parcels and it will display all the details inserted by the user from the previous form with the charges.

### 5.0 Entity Relationship Diagram (ERD) 

![Group 4 WAD-Page-1 drawio (1)](https://user-images.githubusercontent.com/104127503/171080192-41db444c-7a7b-41e4-92d2-cbcf11ec3643.png)


### 6.0 Sequence Diagrams
1. Users 
      ![Group 4 WAD-users drawio](https://user-images.githubusercontent.com/75491091/171093823-635f05ec-3f23-439e-9cf9-1fe781e2350d.png)

2. Transportation
      ![Group 4 WAD-Page-2 drawio](https://user-images.githubusercontent.com/104126603/170878191-02da8f1a-908e-49cc-939a-eebb8af5e0c5.png)

3. Food Delivery 
      ![Group 4 WAD-food delivery drawio](https://user-images.githubusercontent.com/84954462/171091872-3720d011-24c5-4858-a49b-6a04780d0ca3.png)

4. Parcel Delivery
      ![Group 4 WAD-parcelSequenceDiagram drawio](https://user-images.githubusercontent.com/101052053/171030328-33e695b1-7198-4eac-b7ca-d5b5d66acc96.png)  

5. Car Rental
      ![Group 4 WAD-carRental drawio](https://user-images.githubusercontent.com/104127503/171079408-2e7dc833-151e-426c-bb7c-363e99efd154.png)

