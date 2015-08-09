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
		  $post.name = file.serverId;
		  $post._token = $('input[name=_token]').val();
          $.ajax({
			type: 'POST',
			url: 'property/image/delete',
			data: $post
			});
        });

        // Add the button to the file preview element.
        file.previewElement.appendChild(removeButton);
      });
		this.on("success",function(file, response){
			file.serverId = response.fileName;
		});
    }
	
  };
});