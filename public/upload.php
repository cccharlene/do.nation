<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> -->
</head>
<body>

 <form method="" action="" name="uploadForm" id="image">
    <input type="file" />
    <input type="button" name="submit" value="submit"/>
 </form>
	
<script src="./js/jquery.min.js"> </script>

<script>
var formData = new FormData();
formData.append('image', $('input[type=file]')[0].files[0]); 
console.log(formData);
$.ajax({
        method: "post",
        url: "http://localhost:8080/do.nation/public/upload",
        data: formData,
        processData: false,
        contentType: false,
        success: function(data){
            console.log(data);
            //$state.go($state.$current, null, { reload: true });
        }
});
</script>
</body>
</html>