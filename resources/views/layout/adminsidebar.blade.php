<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdminView</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            color: #ffffff;
            padding: 20px;
        }

        .sidebar {
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
        }

        .sidebar a {
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            font-style: bold;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar a {
            display: block;
            padding: 10px 0;
            color: #ffffff;
            text-decoration: none;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background: rgb(34,193,195);
            background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(40,80,52,1) 73%, rgba(49,34,3,1) 100%);
            color: #ffffff;
            padding: 20px;
        }

        .sidebar a:hover {
            color: #ffffff;
            background-color: #6c757d;
        }

        .content {
            margin-left: 250px;
            background: rgb(34,193,195);
            background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(40,80,52,1) 73%, rgba(49,34,3,1) 100%);
            padding: 20px;
        }

        .content h1{
            color: #ffffff;
            background: transparent;
            font-size: 40px;
            font-family: 'Times New Roman', Times, serif;
        }

        .sidebar .btn {
            width: 100%;
            padding: 10px;
            text-align: left;
            border: none;
            color: #ffffff;
            background-color: transparent;
        }

        .sidebar .btn:hover {
            background-color: #6c757d;
        }

        .sidebar .logout-btn {
            width: 10%;
            padding: 10px;
            position: fixed;
            bottom: 20px;
            left: 20px;
            }


            table {
            border-collapse: collapse;
            width: 100%;
            }

            th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            }

            th {
            background-color: #f2f2f2;
            }

        .button-container {
            text-align: center;
            margin-top: 20px;
          }

    </style>
</head>
<body>
    <div class="content">
        <h1>ADMIN DASHBOARD</h1>
    </div>
    <div class="sidebar">
        <ul>
            <h1> TM SYSTEM</h1>
            <div class="sidebar">
                <ul>
                    <h1>TM SYSTEM</h1>
                    <li>
                        <button class="btn" onclick="location.href='/adminhome'">HOME</button>
                    </li>
                    <li>
                        <button class="btn" onclick="location.href='/roomview'">ROOMS</button>
                    </li>
                    <li>
                        <button class="btn" onclick="location.href='/tenantview'">TENANTS</button>
                    </li>
                    <li>
                        <button class="btn" onclick="location.href='/billingview'">BILLING SECTION</button>
                    </li>
                    <li>
                        <button class="btn" onclick="location.href='/transactionhistoryview'">TRANSACTION HISTORY</button>
                    </li>

                </ul>
            </ul>
            <button class="btn logout-btn" onclick="location.href='/logout'">LOG OUT</button>
        </div>
        </ul>
    </div>

    <div class="container">
       @yield('content')
  </div>
