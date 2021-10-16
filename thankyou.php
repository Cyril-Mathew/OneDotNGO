<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OneDot | Invoice</title>
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet" />
  <!--X- Google Font -X-->

  <!-- Font Awsome Icon CDN -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!--X- Font Awsome Icon CDN -X-->
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    ul {
      list-style-type: none;
    }

    a {
      text-decoration: none;
    }

    body {
      font-family: "Roboto", sans-serif;
    }

    .container {
      width: 100%;
      padding: 25px;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .border {
      border: 2px solid #1da1f2;
      padding: 50px 70px;
    }

    .heading {
      text-align: center;
    }

    .heading .logo a {
      font-size: 35px;
      color: #000066;
      font-weight: 700;
    }

    .heading .logo h3 {
      margin-top: 8px;
      color: #2c3e50;
      font-weight: 700;
    }

    .d-flex {
      display: flex;
    }

    .justify-content {
      justify-content: space-between;
    }

    .center {
      align-items: center;
    }

    .donationSlipDody {
      margin-top: 25px;
    }

    .donationSlipDody .donate_info_heading ul li {
      padding-bottom: 5px;
      font-size: 18px;
      color: #6a6a6a;
      font-weight: 500;
    }

    .donationSlipDody .donate_info ul li {
      padding-bottom: 3.5px;
      font-size: 18px;
      color: #2c3e50;
      padding: 0px 0px 5px 10px;
      font-weight: 700;
    }

    .footer {
      margin-top: 25px;
      border-top: 1px solid #1da1f2;
      padding: 25px;
    }

    .footer .logo {
      text-align: center;
    }

    .footer .logo a {
      font-size: 25px;
      color: #1da1f2;
      font-weight: 700;
    }

    .footer .logo p {
      padding: 2px 0px;
    }

    .footer .logo p i {
      color: #1da1f2;
    }

    .footer .logo p a {
      font-size: 18px;
    }

    .print {
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .print .btn {
      padding: 10px;
      background-color: #1da1f2;
      color: #ffffff;
      border: none;
      outline: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .pl-2 {
      padding-left: 20px;
    }
  </style>
</head>

<body>
  <!-- Donation Slip -->
  <div class="container d-flex">
    <!-- <div class="print">
        <a href="index.html"><button type="button" class="btn">Back</button></a>
        <button type="button" class="btn pl-2" onclick="window.print()">
          Print Slip Now
        </button>
      </div> -->
    <div class="border">
      <div class="heading">
        <div class="logo">
          <a href="index.html"><span>OneDot</span></a>
          <h3>Thank you for your contribution !</h3>
        </div>
      </div>
      <div class="donationSlipDody d-flex justify-content center">
        <div class="donate_info_heading">
          <ul>

            <li>Payment Id :</li>
            <li>Payment Status :</li>
            <li>Name :</li>
            <li>Email-id :</li>
            <li>Contact Number :</li>
            <li>Donation Amount :</li>
            <li>Payment Time :</li>
          </ul>
        </div>
        <div class="donate_info">
          <ul>
            <li>
              <?php include 'config.php';

              $conn = mysqli_connect($server, $username, $password, $dbname);

              mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

              $query = "SELECT * FROM `donation` ORDER BY `id` DESC LIMIT 1";

              $result = mysqli_query($conn, $query);

              /* fetch associative array */
              while ($row = mysqli_fetch_row($result)) {
                printf($row[6]);
              } ?>
            </li>
            <li>
              <?php include 'config.php';

              $conn = mysqli_connect($server, $username, $password, $dbname);

              mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


              $query = "SELECT * FROM `donation` ORDER BY `id` DESC LIMIT 1";

              $result = mysqli_query($conn, $query);

              /* fetch associative array */
              while ($row = mysqli_fetch_row($result)) {
                printf($row[7]);
              } ?>
            </li>
            <li>
              <?php include 'config.php';

              $conn = mysqli_connect($server, $username, $password, $dbname);

              mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


              $query = "SELECT * FROM `donation` ORDER BY `id` DESC LIMIT 1 ";

              $result = mysqli_query($conn, $query);

              /* fetch associative array */
              while ($row = mysqli_fetch_row($result)) {
                printf($row[1]);
              } ?>
            </li>
            <li>
              <?php include 'config.php';

              $conn = mysqli_connect($server, $username, $password, $dbname);

              mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


              $query = "SELECT * FROM `donation` ORDER BY `id` DESC LIMIT 1";

              $result = mysqli_query($conn, $query);

              /* fetch associative array */
              while ($row = mysqli_fetch_row($result)) {
                printf($row[2]);
              }  ?>
            </li>
            <li>
              <?php include 'config.php';

              $conn = mysqli_connect($server, $username, $password, $dbname);

              mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


              $query = "SELECT * FROM `donation` ORDER BY `id` DESC LIMIT 1";

              $result = mysqli_query($conn, $query);

              /* fetch associative array */
              while ($row = mysqli_fetch_row($result)) {
                printf($row[4]);
              } ?>
            </li>
            <li>
              <?php include 'config.php';

              $conn = mysqli_connect($server, $username, $password, $dbname);

              mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


              $query = "SELECT * FROM `donation` ORDER BY `id` DESC LIMIT 1";

              $result = mysqli_query($conn, $query);

              /* fetch associative array */
              while ($row = mysqli_fetch_row($result)) {
                printf($row[3]);
              } ?>
            </li>
            <li>
              <?php include 'config.php';

              $conn = mysqli_connect($server, $username, $password, $dbname);

              mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


              $query = "SELECT * FROM `donation` ORDER BY `id` DESC LIMIT 1";

              $result = mysqli_query($conn, $query);

              /* fetch associative array */
              while ($row = mysqli_fetch_row($result)) {
                printf($row[8]);
              } ?>
              <!-- &#8377; -->
            </li>
          </ul>
        </div>
      </div>
      <div class="footer">
        <div class="logo">
          <p><a href="#"></a></p>
          <!-- <p>
              <i class="fas fa-map-marker-alt"></i>
              <span>12, Pune, Maharastra, India</span>
            </p>
            <p>
              <i class="fas fa-phone-volume"></i> <span>+91 0000 00000</span>
            </p>
            <p><i class="far fa-envelope"></i> <span>example@ngo.com</span></p> -->
        </div>
      </div>
    </div>
    <div class="print">
      <a href="index.html"><button type="button" class="btn">Back</button></a>
      <button type="button" class="btn" onclick="window.print()">
        Print Slip Now
      </button>
    </div>
  </div>
  <!-- Donation Slip -->
</body>

</html>