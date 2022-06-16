<x-app-layout>

    <style>
    *{
        font-family: Nunito, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }
    body {
      background-color: #D7DBDD;
      background-image: url(Images/car.jpg);
      height: 100%;
      background-position: center;
      background-size: cover;
    }

    h1{
        text-align:center;
          color: black;
          font-size: 250%;

    }

    .form{
      display: flex;
      text-align: center;
      color: black;
      margin-left:550px;
    }

    input[type=date], select, textarea {
      width: 200%;
      padding: 12px;
      border: 1px solid #ccc;
      background-color: white;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
      text-align: center;
    }

    .viewRentalOrder{
        width: 200%;
      padding: 12px;
      border: 1px solid #ccc;
      color: white;
      background-color: #04AA6D;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
      text-align: center;
    }

    input[type=time], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      background-color: white;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }



    input[type=submit], select, textarea {
      background-color: #04AA6D;
      color: white;
      width: 200%;
      padding: 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;

    }

    .viewRentalOrder{
      background-color: #04AA6D;
      color: white;
      width: 200%;
      padding: 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;

    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .viewRentalOrder:hover {
      background-color: #45a049;
    }
    </style>

    </head>
    <body>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Car Rental') }}
            </h2>
        </x-slot><br>
        <br>

        <section class="form">
            <form action="requestCar" method="POST">
                @csrf
              <label for="birthday">From</label>
              <input type="date" id="from" name="from" required>
              <br>
              <br>

              <label for="until">To</label>
              <input type="date" id="to" name="to" required>
              <br>
              <br>

              <input type="submit" value="Book A Car"><br>
              <div class="viewRentalOrder"><a href="{{ url('MyRentalOrders')}}">View My Orders<br></div>
              </a>
          </form>

        </section><br><br>
    </body>
    </x-app-layout>
