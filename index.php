<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AutoComplete Search Using Bootstrap 4, PHP, PDO - MySQL & Ajax</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">

</head>

<body class="bg-info">
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-8 mx-auto bg-light rounded p-4">
        <h5 class="text-center font-weight-bold">AutoComplete Search Using Bootstrap 4, PHP, PDO - MySQL & Ajax</h5>
        <hr class="my-1">
        <h5 class="text-center text-secondary">consginee gst Id</h5>
        <form action="details.php" method="post" class="p-3">
          <div class="input-group">
            <input type="text" name="consginee_gst" id="consginee_gst" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." autocomplete="off" required>
            <div class="input-group-append">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5" style="position: relative;margin-top: -38px;margin-left: 215px;">
        <div class="list-group" id="show-list">
            
        </div>
      </div>
      <div class="row mt-4">
      <div class="col-md-8 mx-auto bg-light rounded p-4">
      <h5 class="text-center text-secondary">consginoor gst Id</h5>
      <form action="details.php" method="post" class="p-3">
          <div class="input-group">
            <input type="text" name="consginoor_gst" id="consginoor_gst" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." autocomplete="off" required>
            <div class="input-group-append">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5" style="position: relative;margin-top: -38px;margin-left: 215px;">
        <div class="list-group" id="show-list1">
            
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
  <script type="text/javascript">
  </script>

</body>

</html>