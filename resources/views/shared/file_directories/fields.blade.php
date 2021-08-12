<div class="row">
    <div class="col-6">
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
                {!! Form::label('file_type_id', 'File Type:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
                <div class="col-md-9 col-lg-9 col-12">
                    {!! Form::select('file_type_id', modelDropdown($file_types, 'id', 'title'), null, ['class' => 'form-control']) !!}
                    <a class="btn secondary-color-bg" href="{{ route('shared.fileTypes.create') }}">Add new</a>
                </div>
            </div>
        </div>


        <!-- Staff No Field -->
        <div class="form-group">
            <div class="row">
                {!! Form::label('Employee', 'Staff No:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
                <div class="col-md-9 col-lg-9 col-12">
                    {!! Form::select('employee_id', modelDropdown($employees, 'id', 'staff_code'), null, ['class' => 'form-control']) !!}
                    <a class="btn secondary-color-bg" href="{{ route('humanresource.employees.create') }}">Add new</a>
                </div>
            </div>
        </div>


        <!-- Status Field -->
        <div class="form-group">
            <div class="row">
                {!! Form::label('status', 'Status:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
                <div class="col-md-9 col-lg-9 col-12">
                    {!! Form::select('status', enum_status(), null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>


        <!-- Remark Field -->
        <div class="form-group ">
            <div class="row">
                {!! Form::label('remark', 'Remark:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
                <div class="col-md-9 col-lg-9 col-12">
                    {!! Form::textarea('remark', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row ml-0">
                <div class="custom-control custom-switch col-md-9 col-lg-9 col-12">
                    <input type="checkbox" class="custom-control-input" id="toggle-upload">
                    <label class="custom-control-label" for="toggle-upload">Scan</label>
                </div>
            </div>
        </div>

        <!-- File Upload Field -->
        <div id="upload_row" class="form-group">
            <div class="row">
                {!! Form::label('file_upload', 'File Upload:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
                <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload[]', ['class' => 'form-control', 'id' => 'file_upload', 'accept' => 'image/*,.pdf']) !!}
                </div>
            </div>
        </div>

        <div id="scan_row" class="form-group" style="display: none">
            <div id="scanOptions" >
                <label for="BW">
                    <input type="radio" value="0" name="PixelType">B&amp;W </label>
                <label for="Gray">
                    <input type="radio" value="1" name="PixelType">Gray</label>
                <label for="RGB">
                    <input type="radio" value="2" name="PixelType" checked="checked">Color</label>
                |

                <label>
                    <input type="checkbox" id="ADF" checked="checked">Auto Feeder</label>
                <label>
                    <input type="checkbox" id="ShowUI" checked="checked">Show UI
                    <br />
                </label>

                <select id="Resolution">
                    <option value="100">100</option>
                    <option value="150">150</option>
                    <option value="200">200</option>
                    <option value="300">300</option>
                </select>
                <select id="source" style="position: relative; width: 220px;"></select>

                    <input type="button" class="btn secondary-color-bg" value="Scan Image"
                        onclick="AcquireImage();" />

                    <input type="button" class="btn secondary-color-bg" id="mobileFile" value="Acquire" style="font-size: x-large;display:none" onclick="LoadImage()" />
            </div>
        </div>


        <!-- Submit Field -->
        <div class="form-group col-sm-12">
            {!! Form::submit('Save', ['class' => 'btn secondary-color-bg']) !!}
            <a href="{{ route('shared.fileDirectories.index') }}" class="btn btn-default">Cancel</a>
        </div>
    </div>

    <div class="col-6">
        <div id="dwtcontrolContainer" class=""></div>
        <div><embed id="preview" alt="preview" src="" height="50%" width="50%"></div>
    </div>
</div>

<script>
    let toggleUpload = document.getElementById('toggle-upload');
    toggleUpload.onchange = event => {
        let toggleStatus = event.target.checked;
        if (toggleStatus) {
            document.getElementById('upload_row').style.display = 'none';
            document.getElementById('scan_row').style.display = 'block';

            document.getElementById('preview').style.display = 'none';
            document.getElementById('dwtcontrolContainer').style.display = 'block';

        } else {
            document.getElementById('upload_row').style.display = 'block';
            document.getElementById('scan_row').style.display = 'none';

            document.getElementById('preview').style.display = 'block';
            document.getElementById('dwtcontrolContainer').style.display = 'none';
        }
    }
    let file_upload = document.getElementById('file_upload');
    let preview = document.getElementById('preview');

    file_upload.onchange = evt => {
        const [file] = file_upload.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }
    }
</script>


{{-- <script>
    console.log(Dynamsoft);
    Dynamsoft.DWT.ResourcesPath = "{{ asset('dynamsoft/dist') }}";
    var DWObject;
    Dynamsoft.DWT.Containers = [{
        ContainerId: 'dwtcontrolContainer',
        Width: '480px',
        Height: '640px'
    }];
    Dynamsoft.DWT.RegisterEvent('OnWebTwainReady', Dynamsoft_OnReady);
    Dynamsoft.DWT.ProductKey =
        'f0078xQAAAC9Ai95ZaTJwafPTnV4iN2NLB42dv5oSr4gK++LUUtoru7rnATrhQRcwSW2OUqzRlC0mwu3dtd3itDh3LJcFl4xiYGpoDAACZCbz';
    Dynamsoft.DWT.Load();

    function Dynamsoft_OnReady() {
        DWObject = Dynamsoft.DWT.GetWebTwain('dwtcontrolContainer');
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
</script> --}}


<script type="text/javascript">
    Dynamsoft.DWT.ResourcesPath = "{{ asset('dynamsoft/dist') }}";
    // Dynamsoft.DWT.ProductKey =
    //     'f0078xQAAAC9Ai95ZaTJwafPTnV4iN2NLB42dv5oSr4gK++LUUtoru7rnATrhQRcwSW2OUqzRlC0mwu3dtd3itDh3LJcFl4xiYGpoDAACZCbz';
        Dynamsoft.DWT.ProductKey = 't00901wAAAJ9NGZw778x/3peKo89melzLUHAi4QOWQGJQWK02d876RMXz7ki0QJ02M5/G+qjzs78K+4z3KDO1Dfz96Hv03wO7EJjvFlA6yBPUNIDZXjwQ0w1njiur';
    Dynamsoft.DWT.RegisterEvent('OnWebTwainReady',
        Dynamsoft_OnReady
        ); // Register OnWebTwainReady event. This event fires as soon as Dynamic Web TWAIN is initialized and ready to be used
    window.onload = function() {
        if (Dynamsoft.Lib.env.bMobile) {
            document.getElementById('scanOptions').style.display = "none";
            document.getElementById('mobileFile').style.display = "";
        }
        Dynamsoft.DWT.Containers = [{
            ContainerId: 'dwtcontrolContainer',
            Width: '480px',
            Height: '610px'
        }];
        Dynamsoft.DWT.Load();
    };
    var DWObject;

    function Dynamsoft_OnReady() {
        DWObject = Dynamsoft.DWT.GetWebTwain(
            'dwtcontrolContainer'
            ); // Get the Dynamic Web TWAIN object that is embeded in the div with id 'dwtcontrolContainer'
        if (DWObject) {
            var count = DWObject.SourceCount;
            for (var i = 0; i < count; i++)
                document.getElementById("source").options.add(new Option(DWObject.GetSourceNameItems(i), i));
        }
    }


    function AcquireImage() {
        if (DWObject) {
            DWObject.SelectSourceByIndex(document.getElementById("source").selectedIndex);
            DWObject.OpenSource();
            var pixelType = 2;
            var pixelTypeInputs = document.getElementsByName("PixelType");
            for (var i = 0; i < pixelTypeInputs.length; i++) {
                if (pixelTypeInputs[i].checked) {
                    pixelType = pixelTypeInputs[i].value;
                    break;
                }
            }
            DWObject.AcquireImage({
                    IfShowUI: document.getElementById("ShowUI").checked,
                    IfFeederEnabled: document.getElementById("ADF").checked,
                    PixelType: pixelType,
                    Resolution: parseInt(document.getElementById("Resolution").value),
                    IfDisableSourceAfterAcquire: true
                },
                function() {
                    console.log("Successful!");
                },
                function(settings, errCode, errString) {
                    alert(errString)
                }
            );
        }
    }

    function LoadImage() {
        DWObject.LoadImageEx('', 5);
    }
</script>
