<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>

    <script>
      $(function() {
        var nameSuggestions = <?php echo json_encode($ideas); ?>;
        $("#input").autocomplete({
          source: nameSuggestions,
          delay : 500,
          autofocus: true,
          minLength: 0
        });
        $("#input").autocomplete("enable")
      });
    </script>

</head>
<body>
  <form  style="text-align: center;">
    <h1>Enter food or drink item</h1>
    <input id="input" type="text">
  </form>
</body>
</html>
