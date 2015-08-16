$(document).ready(function() {
    $('#dataTables-admin').DataTable( {
        responsive: true
    } );
	$('#description-textarea').jqte({
		format: false,
		fsize: false,
		placeholder:true,
		placeholder: "description",
	});
	$('#aboutUs_edit').editable({
		inlineMode: false,
		imageUploadURL: "/editor/image/upload",
		crossDomain: false,
		autosave: false,
		// Set the save param.
        saveParam: 'content',
        // Set the save URL.
        saveURL: '/editor/aboutUs/save',
        // HTTP request type.
        saveRequestType: 'POST',
		saveParams: {
			id: 'my_editor',
			_token: $('input[name=_token]').val()
		}
	});
	// Getter.
var imageUploadParams = $('#aboutUs_edit').editable('option', 'imageUploadParams');

// Setter.
$('#aboutUs_edit').editable('option', 'imageUploadParams', {
    id: 'editor_image',
	_token: $('input[name=_token]').val()
  });
  $('#aboutUs_edit').on('editable.imageLoaded', function (e, editor, URL) {
});
$('#aboutUs_saveButton').click (function () {
    $('#aboutUs_edit').editable('save')
  })

	 $('#submit').click(function () {
        var mysave = $(".jqte_editor").html();
        $('#description-input').val(mysave);
    });
Dropzone.options.myDropzone = {
	 sending: function(file, xhr, formData) {
        // Pass token. You can use the same method to pass any other values as well such as a id to associate the image with for example.
        formData.append("_token", $('[name=_token').val()); // Laravel expect the token post value to be named _token by default
    },
    init: function() {
		this.on("addedfile", function(file) {
        // Create the remove button
        var removeButton = Dropzone.createElement("<button>Remove file</button>");
		var setCoverImageButton = Dropzone.createElement("<button>Cover Image</button>");

        // Capture the Dropzone instance as closure.
        var _this = this;

        // Listen to the click event
        removeButton.addEventListener("click", function(e) {
          // Make sure the button click doesn't submit the form:
          e.preventDefault();
          e.stopPropagation();

          // Remove the file preview.
          _this.removeFile(file);
		  var $post ={};
		  if(file.serverId==null){
			var imageId = $(this).parent().find(".dz-filename > span").text();
			$post.name = imageId;
		  }else{
			$post.name = file.serverId;
		  }		  
		  $post._token = $('input[name=_token]').val();
          $.ajax({
			type: 'POST',
			url: '/property/image/delete',
			data: $post
			});
        });
		
		//set image id as the cover image
		setCoverImageButton.addEventListener("click", function(e) {
          // Make sure the button click doesn't submit the form:
          e.preventDefault();
          e.stopPropagation();

		  var $post ={};
		  if(file.serverId==null){
			var imageId = $(this).parent().find(".dz-filename > span").text();
			$post.name = imageId;
		  }else{
			$post.name = file.serverId;
		  }		  
		  $post._token = $('input[name=_token]').val();
          $.ajax({
			type: 'POST',
			url: '/property/image/setCoverImage',
			data: $post
			});
		 $(document).ajaxStart(function(){
			$("#wait").css("display", "block");
			});
		$(document).ajaxComplete(function(){
			$("#wait").css("display", "none");
			});
        });

        // Add the button to the file preview element.
        file.previewElement.appendChild(removeButton);
		file.previewElement.appendChild(setCoverImageButton);
      }	);
		this.on("success",function(file, response){
			file.serverId = response.fileName;
		});
		var thisDropzone = this;
		$.get('/property/image/preload/'+$("input[name=propertyId]").val(),function(data){
			$.each(data,function(name,value){
				for(key in value){
					var mockFile = { name: value[key].name, size: value[key].size };
					thisDropzone.emit("addedfile", mockFile);
					thisDropzone.emit("thumbnail", mockFile, "/uploads/thumbs/"+value[key].name);
					thisDropzone.emit("complete", mockFile);
					console.log(key+":"+value[key].name);
				}
			});
		});
    }
	
  };
});