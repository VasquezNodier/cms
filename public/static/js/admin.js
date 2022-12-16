$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip()

    CKEDITOR.replace( 'description', {
        extraPlugins: 'editorplaceholder,label',
        editorplaceholder: 'Product description...',
        label: 'Description'
    } );

})


