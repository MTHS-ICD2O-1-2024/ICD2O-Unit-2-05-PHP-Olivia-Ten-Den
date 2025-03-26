<!DOCTYPE html>
<!-- ICS2O-Unit2-05-HTML-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The salary program, PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Olivia TD" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>The salary program, PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The salary program, PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/income_tax.jpg" alt="Image: The words income tax written on a notebook." width="250" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          // Ontario income tax
          $ONTARIO_INCOME_TAX = 0.18;

          $numberOfHoursWorked = $_GET["number-of-hours-worked"];
          $hourlyWage = $_GET["hourly-wage"];

          // process
          $incomeTaxToPay = ($numberOfHoursWorked * $hourlyWage) * $ONTARIO_INCOME_TAX;
          $takeHomeSalary = ($numberOfHoursWorked * $hourlyWage) - $incomeTaxToPay;

          // output
          echo "Your take home salary is $" . (round($takeHomeSalary, 2));
          echo "Your income tax to pay is $" . (round($incomeTaxToPay, 2));
          ?>
        </div>
        <br />
        <div class="page-content-answer">
          <a href="./index.php">Return ...</a>
        </div>
    </main>
  </div>
</body>

</html>