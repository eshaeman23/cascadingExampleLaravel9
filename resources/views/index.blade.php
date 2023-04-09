<!doctype html>
<html lang="en">
  <head>
    <title>Index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
        <div class="col-md-6">
          <select name="" id="selectcountrid" class="form-control">
            <option value="">Select country</option>
            @foreach($country as $c)
            <option value="{{$c->id}}">{{$c->countryname}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-6">
          <select name="" id="selectcityid" class="form-control">
            <option value="">Select city</option>
          </select>
        </div>
        
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      $("#selectcountrid").change(function(){
        var countryid=$(this).val();
       // console.log(countryid); 
       $.ajax({
        url:"/cascade",
        type:"POST",
        data:
          "country_id="+countryid+
          "&_token={{csrf_token()}}",
        success:function(data)
        {
          $("#selectcityid").html(data);
        }
       });
      });
    });
  </script>
  
  </body>
</html>