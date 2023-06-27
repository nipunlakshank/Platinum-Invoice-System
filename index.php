<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platinum | Invoice System</title>

    <!-- External CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- External JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="resources/css/index.css">

    <!-- JS -->
    <script defer src="resources/js/main.js"></script>
</head>
<body>
    <header>
        <div style="display: flex; justify-content: center; margin-bottom: 2em;">
            <h1 class="text-primary">Platinum | Invoice System</h1>
        </div>
    </header>
    <!-- header -->

    <main>
    <div class="container">
        <h2 style="margin-bottom: 1em;">Customer Receipt Form</h2>
        <form method="post" action="javascript:processForm()">

            <div class="form-group vertical-gap">
                <label for="customerName">Customer Id:</label>
                <input type="text" class="form-control" id="customerId" placeholder="Enter Customer Id">
            </div>

            <div class="form-group vertical-gap">
                <label for="invoiceNumbers">Invoice Numbers:</label>
                <input type="text" class="form-control" id="invoiceNumbers" placeholder="Enter comma-separated invoice numbers">
            </div>

            <div class="form-group vertical-gap">
                <label for="chequeNumber">Cheque Numbers:</label>
                <input type="text" class="form-control" id="chequeNumbers" placeholder="Enter comma-separated cheque numbers">
            </div>

            <button type="submit" class="btn btn-primary">Generate Receipt</button>

        </form>
    </div>

    </main>
    <!-- main -->

    <footer>

    </footer>
    <!-- footer -->
</body>
</html>