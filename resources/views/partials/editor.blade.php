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
    <form method="POST" action="{{route('page.save')}}">
        {{ csrf_field() }}

        {{-- text editor --}}
        <textarea id="editor" name="post"></textarea>

        <div class="row">
            <div class="col text-center">
                <button id="page-save" 
                        type="submit" 
                        class="btn btn-success mt-2" 
                        value="Submit">Save</button>
            </div>
        </div>  
    </form>
</div>


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

