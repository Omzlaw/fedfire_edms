{{-- <!-- File Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_name', 'File Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('file_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div --}}


<!-- File Type Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_type_id', 'File Type:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('file_type_id', modelDropdown($file_types, 'id', 'title'), null, ['class' => 'form-control']) !!}
            <a  class="btn secondary-color-bg" href="{{ route('shared.fileTypes.create') }}" >Add new</a>
        </div>
    </div>
</div>


<!-- Staff No Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('Employee', 'Staff No:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('employee_id', modelDropdown($employees, 'id', 'staff_code'), null, ['class' => 'form-control']) !!}
            <a  class="btn secondary-color-bg" href="{{ route('humanresource.employees.create') }}">Add new</a>
        </div>
    </div>
</div>


<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', enum_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Remark Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('remark', 'Remark:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('remark', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- File Upload Field -->
<div class="form-group">
    <div class="row"> 
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload[]', array('class' => 'form-control', 'accept' => 'image/*,.pdf')) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn secondary-color-bg']) !!}
    <a href="{{ route('shared.fileDirectories.index') }}" class="btn btn-default">Cancel</a>
</div>

<script type="text/javascript" src="http://tst.dynamsoft.com/libs/dwt/15.0/dynamsoft.webtwain.min.js"> </script>
{{-- <script src="{{ asset('dynamsoft/dynamsoft.webtwain.initiate.js') }}"></script>
<script src="{{ asset('dynamsoft/dynamsoft.webtwain.config.js') }}"></script> --}}

<script>
    var DWObject;
    Dynamsoft.WebTwainEnv.AutoLoad = false;
    Dynamsoft.WebTwainEnv.Containers = [{
        ContainerId: 'dwtcontrolContainer',
        Width: '480px',
        Height: '640px'
    }];
    Dynamsoft.WebTwainEnv.RegisterEvent('OnWebTwainReady', Dynamsoft_OnReady);
    Dynamsoft.WebTwainEnv.Trial = true;
    Dynamsoft.WebTwainEnv.ProductKey = "LICENSE-KEY";
    Dynamsoft.WebTwainEnv.Load();

    function Dynamsoft_OnReady() {
        DWObject = Dynamsoft.WebTwainEnv.GetWebTwain('dwtcontrolContainer');
        var token = document.querySelector("meta[name='_token']").getAttribute("content");
        DWObject.SetHTTPFormField('_token', token);
    }

    function loadImage() {
        var OnSuccess = function() {};
        var OnFailure = function(errorCode, errorString) {};
        if (DWObject) {
            DWObject.IfShowFileDialog = true;
            DWObject.LoadImageEx("", EnumDWT_ImageType.IT_ALL, OnSuccess, OnFailure);
        }
    }

    function acquireImage() {
        if (DWObject) {
            DWObject.IfShowUI = false;
            DWObject.IfDisableSourceAfterAcquire =
                true; // Scanner source will be disabled/closed automatically after the scan.
            DWObject.SelectSource(); // Select a Data Source (a device like scanner) from the Data Source Manager.
            DWObject
                .OpenSource(); // Open the source. You can set resolution, pixel type, etc. after this method. Please refer to the sample 'Scan' -> 'Custom Scan' for more info.
            DWObject
                .AcquireImage(); // Acquire image(s) from the Data Source. Please NOTE this is a asynchronous method. In other words, it doesn't wait for the Data Source to come back.
        }
    }

    function upload() {
        var OnSuccess = function(httpResponse) {
            alert("Succesfully uploaded");
        };
        var OnFailure = function(errorCode, errorString, httpResponse) {
            alert(httpResponse);
        };
        var date = new Date();
        DWObject.HTTPUploadThroughPostEx(
            "{{ route('shared.fileDirectories.store') }}",
            DWObject.CurrentImageIndexInBuffer,
            '',
            date.getTime() + ".jpg",
            1, // JPEG
            OnSuccess, OnFailure
        );
    }
</script>