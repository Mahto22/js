    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>wishlist</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <style type="text/css">
          <style>
          div{
            border: 1px dotted red;
            width: 100px;
            height: 100px;
          }
          form{
            margin-top: 20px;
          }
          span{
             border: 2px dotted red;
             width: 100%;
             height: 100%;
             text-align: center;
             font-size: 20px;
             font-weight: bold;
             margin-top: 40px;
          }
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            table,th,td {
                padding: 5px;
                text-align: center;
            }
            table{
                width: 30%;
            }
        </style>
      </style>
    </head>
    <body>
        <center>
            <div>
      <form action="">

        <span style="display: none;" id="welcome">Thank you for your effort 😉  BYE...</span>

        <input type="submit" class="btn btn-default btn-lg btn-danger" id="btn" value="🎁 ⬅️ 😉">
        <div class="container">            
    <table class="table-info table-hover" >
        <thead>
            <tr>
                <th class='text-primary' id="hide_icon"> 🤔 ?...</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    <td id="wishlist"></td>
                </tr>
            </tbody>
    </table>
      </form>
    </div>
    </center>
    <script>
        $(document).ready(function(){
            $("#btn").click(function(e){
                e.preventDefault();
                var array = ["You 😊 = Hug 🫂+ Kiss 😘+ Love ❤️","Teddy 🧸","Chocolate 🍫","Dress 👗","Yummy Cake 🎂","Flower 🥀"];

        var el = $.map(array, function(val, i) {
          return "<table class='table table-info'><tr><td style='font-size:20px;background-color:#bf5fcbdb;color:black'> * " + val + "</td></tr></table>";
        });
        
        $("#wishlist").html(el.join(""));
        $('#hide_icon').delay(5000).fadeOut('slow');
            });
            $('#wishlist').delay(11000).fadeOut('slow');
            $('#btn').delay(12000).fadeOut('slow');
            $('#welcome').delay(13000).show('slow');
            $('#welcome').delay(1000).hide('slow');
        });
    </script>
    </body>
    </html>
