<x-app-layout>

    <style>

    h1{
        text-align:center;
          color: black;
          font-family: "Lucida Console", "Courier New", monospace;
          font-size: 250%;
    }

    .rentalTable {
      border-collapse: collapse;
      width: 80%;
      margin-left: 200px;
      padding: 16px;
      box-sizing: border-box;
    }

    .th-rental {
      background-color:#04AA6D;
      text-align: left;
      padding: 16px;
      color: white;
      font-family: "Montserrat";
    }

    .td-rental  {
      text-align: left;
      padding: 16px;
      font-family: "Montserrat";
    }

    tr:nth-child(even){background-color: rgb(240, 239, 239)}

    tr:nth-child(odd){background-color: white}

    .open-button {
      background-color:  #04AA6D;
      color: black;
      cursor: pointer;
    }

    .btn{
      background-color: white;
      outline: white;
    }
    </style>
    </head>

    <body>
          <h1> Car Request </H1>
          <br>
          <table class="rentalTable">
                <tr>
                    <th class="td-rental">Customers_ID</th>
                    <th class="td-rental">From</th>
                    <th class="td-rental">To</th>
                    {{-- <th class="td-rental">vehicle Modal <th>
                    <th class="td-rental">No Plat <th> --}}
                    <th class="td-rental">Accept <th>
                  </tr>
                  @foreach ($pickupOrder as $data)
                  @if($data['rider_id'] == 0)

                  <tr>
                    <td class="td-rental"> {{$data->customers_ID}} </td>
                    <td class="td-rental"> {{(string)$data->from}} </td>
                    <td class="td-rental"> {{(string)$data->to}} </td>
                    {{-- <td class="td-rental"> {{$data->vehicle_model}} </td>
                    <td class="td-rental"> {{$data->plate_no}} </td> --}}

                    {{-- <td> <a href=""> Button Accept </a> </td> --}}
                    <td>
                    <form action={{ url('acceptTransport'.$data->id)}} method="POST">
                        @csrf
                        @method('PUT')
                        <button class="open-button" onclick="openSeat()">ACCEPT</button>

                    </form>
                        </td>
                  </tr>
                @endif
                @endforeach
          </table>

        </x-app-layout>
