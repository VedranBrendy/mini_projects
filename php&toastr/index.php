
<?php 

  session_start();

  if (isset($_POST['info'])) {
    $_SESSION['toastr'] = [
      'type'      => 'info', // or 'success' or 'info' or 'warning'
      'message' => 'error message here!',
      'title'     => 'title here!'
    ];
  } elseif(isset($_POST['danger'])) {
    $_SESSION['toastr'] = [
      'type'      => 'error', // or 'success' or 'info' or 'warning'
      'message' => 'error message here!',
      'title'     => 'title here!'
    ];
  } elseif(isset($_POST['warning'])) {
    $_SESSION['toastr'] = [
      'type'      => 'warning', // or 'success' or 'info' or 'warning'
      'message' => 'error message here!',
      'title'     => 'title here!'
    ];

  } elseif(isset($_POST['success'])) {
    $_SESSION['toastr'] = [
      'type'      => 'success', // or 'success' or 'info' or 'warning'
      'message' => 'error message here!',
      'title'     => 'title here!'
    ];

}

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link href="toastr.css" rel="stylesheet" />

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <h4 class="mt-5">php & toastr</h4>
        <form action="index.php" method="POST">
          <input type="submit" class="btn btn-info" name="info">
          <input type="submit" class="btn btn-danger" name="danger">
          <input type="submit" class="btn btn-warning" name="warning">
          <input type="submit" class="btn btn-success" name="success">
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="toastr.min.js"></script>
    <script src="toast.js"></script>

    <script>
    $(function(){
        <?php
        // toastr output & session reset
       
        if(isset($_SESSION['toastr']))
        {
            echo 'toastr.'.$_SESSION['toastr']['type'].'("'.$_SESSION['toastr']['message'].'", "'.$_SESSION['toastr']['title'].'")';
            unset($_SESSION['toastr']);
        }
        ?>          
    });
</script> 
  </body>
</html>
