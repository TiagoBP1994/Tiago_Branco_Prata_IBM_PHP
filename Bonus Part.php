<html>
<head>
<title>Bonus Part - AJAX (Table One and Table Two)</title>
<style>
table {
  border-collapse: collapse;
  width: 30%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

#resultone {
    height: 46px;
    border: none;
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
}
#resultone:hover {
  background-color: #4CAF50;
  color: white;
}
#resulttwo {
    height: 46px;
    border: none;
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
}
#resulttwo:hover {
  background-color: #008CBA;
  color: white;
}
</style>
<script src="jquery.min.js"></script>
</head>
<body>


<div id="resultajax" class="resultajax">

</div>

<input type="button" name="resultone" id="resultone" value="RESULT ONE ON AJAX">
<input type="button" name="resulttwo" id="resulttwo" value="RESULT TWO ON AJAX">

<script>
	$('document').ready(function(){
		
		/// Ajax function on First Button
		$('#resultone').click(function(){
			
		 	 $.ajax ({
				url:'ajax-firsttable.php',
				data:{},
				type:'POST',
				success:function(data) {
					$('.resultajax').html(data)
				}
			});  
			
		});
		
		/// Ajax function on Second Button
		$('#resulttwo').click(function(){
			
		 	 $.ajax ({
				url:'ajax-secondtable.php',
				data:{},
				type:'POST',
				success:function(data) {
					$('.resultajax').html(data)
				}
			});  
			
		});


	});
</script>

</body>