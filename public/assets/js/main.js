$('#portada').fileinput({
    language: 'es',
    allowedFileExtensions: ['jpg','jpeg','png'],
    maxFileSize:1000,
    showUpload: false,
    showClose: false,
    initialPreviewAsData:true,
    dropZoneEnabled:false,
    theme: "fa",
    uploadUrl: "/file-upload-batch/2",
})