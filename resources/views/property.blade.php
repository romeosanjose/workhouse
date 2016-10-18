<html>
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{URL::asset('js/script.js')}}"></script>
  </head>
  <body>
      <div class="row">
          <div class="col-md-12">
            <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>name <input type="text" id="name"></th>
                  <th>price <input type="text" id="price1"> to <input type="text" id="price2"></th>
                  <th>bedrooms <input type="text" id="bedrooms"></th>
                  <th>bathrooms <input type="text" id="bathrooms"></th>
                  <th>storeys <input type="text" id="storeys"></th>
                  <th>garages <input type="text" id="garages"></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
      </div>
  </body>
</html>
