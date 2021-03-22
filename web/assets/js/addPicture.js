Dropzone.autoDiscover = false;

        var myImageDropZone = new Dropzone("#newPicture", { //id form

            url: myUrl.addPicture,
            paramName: "file",
            parallelUploads: 1,
            uploadMultiple: true,
            maxFiles: 1,
            acceptedFiles: ".png,.jpg,.gif,.jpeg,.bmp",
            clickable: "#newPicture", //id div drop
            autoProcessQueue: false,
            addRemoveLinks: true,

            init: function() { 
                myDropzone = this;
            }

        });
        
        myImageDropZone.on("addedfile", function(file) {
            $('.dz-message').remove();
            $('.dz-details').css("display","none");
            $('.dz-success-mark').css("display","none");
            $('.dz-error-mark').css("display","none");
            if (this.files.length > 1) {
                this.removeFile(this.files[0]);
            }
            if (this.files.length > 0) {
               $('.dzresize120').parent().remove();
            }

        });


        myImageDropZone.on("removedfile", function(file, response) {
            $("#picture").val(""); 
        });
        myImageDropZone.on("success", function(file, response) {
            $("#picture").val("success"); 
            $("#photo").removeClass("divrederror");
            $("#picture-error").addClass("nodisplay");
            $("#picture-error2").addClass("nodisplay");
            if (myUrl.currentPage == 'newImage') {
                window.location.href=myUrl.redirectUrl;
            }
            if (myUrl.currentPage == 'addMedia') {
                $('#modalAddPicture').modal('toggle');
                html = "<div class='col-md-6 my-4'>";
                html += "<div class='container-m img-bg' style='background-image: url(/"+ response.path +")' data-src='/"+ response.path +"' id='myInput"+Math.random()+"'>"
                        html += "<div class='overlay'></div>"
                        html += "<div class='tooltip'>"
                            html += "<button  type='button' onmouseout='outFunc()' class='button-media'>"
                                html += "<span class='tooltiptext' id='myTooltip'>Copy to clipboard</span>Copy text"
                            html += "</button>"
                        html += "</div>"
                    html += "</div>"
                html += "</div>"
                $('.content-img').append(html);
            }
        });
        myImageDropZone.on("error", function(file, response) {
            
        });

        myImageDropZone.on("sendingmultiple", function(file, xhr, formData) {

        });

        myImageDropZone.on("processingmultiple", function(file, xhr, formData) {

        });

        // transform cropper dataURI output to a Blob which Dropzone accepts
        function dataURItoBlob(dataURI) {
            var byteString = atob(dataURI.split(',')[1]);
            var ab = new ArrayBuffer(byteString.length);
            var ia = new Uint8Array(ab);
            for (var i = 0; i < byteString.length; i++) {
                ia[i] = byteString.charCodeAt(i);
            }
            return new Blob([ab], { type: 'image/jpeg' });
        }
        // modal window template
        var modalTemplate = '<div class="modal fade" tabindex="-1" role="dialog">'+
                                '<div class="modal-dialog" role="document">'+
                                    '<div class="modal-content">'+
                                        '<div class="modal-body">'+
                                            '<div class="image-container"></div>'+
                                        '</div>'+
                                        '<div class="modal-footer">'+
                                            '<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>'+
                                            '<button type="button" class="btn btn-primary crop-upload">Upload</button>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>';


        // listen to thumbnail event
        myImageDropZone.on('thumbnail', function (file) {

            // ignore files which were already cropped and re-rendered
            // to prevent infinite loop
            if (file.cropped) {
                return;
            }
            // cache filename to re-assign it to cropped file
            var cachedFilename = file.name;
            // remove not cropped file from dropzone (we will replace it later)
            myImageDropZone.removeFile(file);

            // dynamically create modals to allow multiple files processing
            var $cropperModal = $(modalTemplate);
            // 'Crop and Upload' button in a modal
            var $uploadCrop = $cropperModal.find('.crop-upload');

            var $img = $('<img />');
            // initialize FileReader which reads uploaded file
            var reader = new FileReader();
            reader.onloadend = function () {
                // add uploaded and read image to modal
                $cropperModal.find('.image-container').html($img);
                $img.attr('src', reader.result);

                // initialize cropper for uploaded image
                $img.cropper({
                    // aspectRatio: 1,
                    autoCropArea: 1,
                    movable: false,
                    rotatable: true,
                    cropBoxResizable: true,
                    minContainerWidth: 470,
                    minContainerHeight: 300
                });
            };
           
            // read uploaded file (triggers code above)
            reader.readAsDataURL(file);

            $cropperModal.modal('show');

            // listener for 'Crop and Upload' button in modal
            $uploadCrop.on('click', function() {
                // get cropped image data
                var blob = $img.cropper('getCroppedCanvas').toDataURL();
                // transform it to Blob object
                var newFile = dataURItoBlob(blob);
                // set 'cropped to true' (so that we don't get to that listener again)
                newFile.cropped = true;
                // assign original filename
                newFile.name = cachedFilename;

                // add cropped file to dropzone
                myImageDropZone.addFile(newFile);
                // upload cropped file with dropzone
                myImageDropZone.processQueue();
                $cropperModal.modal('hide');
            });
        });