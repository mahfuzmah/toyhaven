// !function(e){"use strict";$("#summernote").summernote({height:120})}();
!function(e) {
    "use strict";

    // Initialize Summernote for short description
    $("#shortDescription").summernote({
        height: 120,
        toolbar: [
            ['style', ['bold', 'italic', 'underline']],
            ['para', ['ul', 'ol']],
            ['insert', ['link']]
        ]
    });

    // Initialize Summernote for long description
    $("#longDescription").summernote({
        height: 250,
        toolbar: [
            ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview']]
        ]
    });

}();
