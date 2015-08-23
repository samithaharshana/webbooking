<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<meta charset=utf-8 />
<title>JS Bin</title>


</head>
<body>
  <select id="names">
    <option value=0> </option>
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=2>3</option>
    <option value=2>4</option>
    <option value=2>5</option>
  </select>
 
   <button type="button" id="jsbutton" disabled />reserve now</button> 
   <script>


    $('#names').change(function(e) {
      if ($(this).prop("selectedIndex") === 0)
        {
            $('#jsbutton').prop('disabled', true);  
        }
        else
        {
            $('#jsbutton').prop('disabled', false);
        }
    });


</script>
</body>
</html>
	