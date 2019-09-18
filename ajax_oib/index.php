<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Ajax OIB</title>
    <style>
      .container{
        margin-top:100px;
      }
    </style>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <form>
        <div class="form-group">
          <input class="form-control" type="text" name="oib" id="oib" placeholder="Insert OIB">
           <small id="response-oib"><p class="text-danger"></p></small>
        </div>
        <div class="form-group">
          <button type="button" class="btn btn-info" id="btn-check">Check</button>
        </div>
        </form>
      </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#btn-check").click(function(){
          var oib = $("#oib").val();
          $.ajax({
            type: 'POST',
            url : 'ajax_oib.php',
            data : {ajax_name:oib},
            success: function(response){

                $("#response-oib").html(response);
               
            }
          })

        })
      })
    </script>
  </body>
</html>