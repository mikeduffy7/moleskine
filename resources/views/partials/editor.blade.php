<style>
    #editor{
        width: 100%;
        height: 350px;
        max-height: 350px;
        resize: none;
        overflow-y: scroll;

    }
</style>

{{--  TODO:figure out how to have classiceditor5 have overflow-y: scroll  --}}


<script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-beta.1/classic/ckeditor.js"></script>

<div class="container mt-4">
    <textarea id="editor">
        <p>This is some sample content.</p>
    </textarea>
</div>

<form>
    @method('put')
    @csrf


</form>



<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    var editor = document.getElementById('editor');
    console.log(editor);
</script>

