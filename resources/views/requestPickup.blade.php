{{-- TRANSPORTATION - STUDENT REQUEST PICKUP --}}
<x-app-layout>
    <style>
    body {
      background-color: #D7DBDD;
      height: 100%;
      background-position: center;
    }

    h1{
        text-align:center;
          color: black;
          font-size: 200%;
    }

    .form-transport{
      display: flex;
      text-align: center;
      color: black;
      margin-left:50px;
    }

    input[type=submit], select, textarea {
      background-color: #1b7d8c;
      color: white;
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin: auto;
    }

    input[type=submit]:hover {
      background-color: #35a4ac;
    }

    .container {
        background-color: rgb(199, 239, 239);
        border-radius: 2%;
        width: 50%;
        height: 100%;
        margin: auto;
        padding: 50px;
        box-shadow: 0 12px 20px #d4e5e8;
    }
    </style>
    </head>

    <body>
        <br>
        {{-- Tittle --}}
        <h1>TRANSPORTATION</h1><br>
        <br>
    <div class="container">
        <section class="form-transport">
            <form action="acceptPickup" method="POST">
                @csrf
                {{-- Location --}}
                <label for="from">From:</label>
                <input type="text" id="from" name="from" namespace="Enter your location..." required>

                {{-- Destination --}}
                <label for="to">To:</label>
                <input type="text" id="to" name="to" namespace="Enter your destination..." required>
            <br><br>
                {{-- Passengers --}}
                <label for="passengers">Pasenggers:</label>
                <select name="passengers" id="passengers" require>
                <option selected="selected" >Total Passengers</option>
                <?php
                  $totalPass = array(1, 2, 3, 4, 5, 6);
                  foreach($totalPass as $totalP) {
                  echo "<option required>$totalP</option>";
                  }
                ?>
                 </select>
            <br><br>
                {{-- Request Button --}}
              <input type="submit" value="Request a Transporter"><br></a>
          </form>
        </section>
    </div>
</x-app-layout>
