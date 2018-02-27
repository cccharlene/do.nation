<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
	<style> 
/* hides controls for dropzone.js */
.single-dropzone {
  .dz-image-preview, .dz-file-preview {
    display: none;
  }
}

	</style>
</head>
<body>

<div class="col-lg-12 text-center">
  {!! Form::open(array('route' => 'upload', 'method' => 'POST', 'id' => 'my-dropzone', 'class' => 'form single-dropzone', 'files' => true)) !!}
    <div id="img-thumb-preview">
      <img id="img-thumb" class="user size-lg img-thumbnail" src="./image/bench.png">
    </div>
    <button id="upload-submit" class="btn btn-default margin-t-5"><i class="fa fa-upload"></i> Upload Picture</button>
  {!! Form::close() !!}
</div>


<script src="https://code.jquery.com/jquery-2.1.4.js"> </script>
<script src="./js/dropzone.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script>
	



	if ($('#DropzoneElementId').length) {
	$("div#DropzoneElementId").dropzone({ url: "/image" });

		$(document).ready(function() {
			//Dropzone.js Options - Upload an image via AJAX.
  Dropzone.options.myDropzone = {
    uploadMultiple: false,
    // previewTemplate: '',
    addRemoveLinks: false,
    // maxFiles: 1,
    dictDefaultMessage: '',
    init: function() {
      this.on("addedfile", function(file) {
        // console.log('addedfile...');
      });
      this.on("thumbnail", function(file, dataUrl) {
        // console.log('thumbnail...');
        $('.dz-image-preview').hide();
        $('.dz-file-preview').hide();
      });
      this.on("success", function(file, res) {
        console.log('upload success...');
        $('#img-thumb').attr('src', res.path);
        $('input[name="pic_url"]').val(res.path);
      });
    }
  };
  var myDropzone = new Dropzone("#my-dropzone");
 
  $('#upload-submit').on('click', function(e) {
    e.preventDefault();
    //trigger file upload select
    $("#my-dropzone").trigger('click');
  });
 
});

		  
	}//end if


  
 
//we want to manually init the dropzone.
Dropzone.autoDiscover = false;


</script>
</body>
</html>