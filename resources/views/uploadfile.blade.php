 <div class="row">
     {!! Form::open(['url' => '/uploadfile', 'files' => 'true']);
'Select the file to upload.';
Form::file('image');
Form::submit('Upload File');
Form::close() !!}
 </div>
