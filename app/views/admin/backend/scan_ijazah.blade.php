@section('scriptjava')
{{ HTML::script('js/qr/saycheese.min.js') }}
<!-- <script src="js/saycheese.min.js"></script> -->
{{ HTML::script('js/qr/qr/grid.js') }}
<!-- <script type="text/javascript" src="js/qr/grid.js"></script> -->
{{ HTML::script('js/qr/qr/version.js') }}
<!-- <script type="text/javascript" src="js/qr/version.js"></script> -->
{{ HTML::script('js/qr/qr/detector.js') }}v
<!-- <script type="text/javascript" src="js/qr/detector.js"></script> -->
{{ HTML::script('js/qr/qr/formatinf.js') }}
<!-- <script type="text/javascript" src="js/qr/formatinf.js"></script> -->
{{ HTML::script('js/qr/qr/errorlevel.js') }}
<!-- <script type="text/javascript" src="js/qr/errorlevel.js"></script> -->
{{ HTML::script('js/qr/qr/bitmat.js') }}
<!-- <script type="text/javascript" src="js/qr/bitmat.js"></script> -->
{{ HTML::script('js/qr/qr/datablock.js') }}
<!-- <script type="text/javascript" src="js/qr/datablock.js"></script> -->
{{ HTML::script('js/qr/qr/bmparser.js') }}
<!-- <script type="text/javascript" src="js/qr/bmparser.js"></script> -->
{{ HTML::script('js/qr/qr/datamask.js') }}
<!-- <script type="text/javascript" src="js/qr/datamask.js"></script> -->
{{ HTML::script('js/qr/qr/rsdecoder.js') }}
<!-- <script type="text/javascript" src="js/qr/rsdecoder.js"></script> -->
{{ HTML::script('js/qr/qr/gf256poly.js') }}
<!-- <script type="text/javascript" src="js/qr/gf256poly.js"></script> -->
{{ HTML::script('js/qr/qr/gf256.js') }}
<!-- <script type="text/javascript" src="js/qr/gf256.js"></script> -->
{{ HTML::script('js/qr/qr/decoder.js') }}
<!-- <script type="text/javascript" src="js/qr/decoder.js"></script> -->
{{ HTML::script('js/qr/qr/qrcode.js') }}
<!-- <script type="text/javascript" src="js/qr/qrcode.js"></script> -->
{{ HTML::script('js/qr/qr/findpat.js') }}
<!-- <script type="text/javascript" src="js/qr/findpat.js"></script> -->
{{ HTML::script('js/qr/qr/alignpat.js') }}
<!-- <script type="text/javascript" src="js/qr/alignpat.js"></script> -->
{{ HTML::script('js/qr/qr/databr.js') }}
<!-- <script type="text/javascript" src="js/qr/databr.js"></script> -->
{{ HTML::script('js/qr/effects_saycheese.js') }}
<!-- <script src="js/effects_saycheese.js"></script> -->
@stop

@section('mainarea')
<div class="col-md-8">
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Form Upload File Ijazah</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    {{ Form::open(array('url' => 'foo/bar', 'files' => true, 'role'=>'form')) }}
        <div class="pageWrapper cheese box-body">

            <div class="boxWrapper auto">
                <div id="example"></div>
            </div>

            <div class="button">
                <button type="button" id="button" class="btn btn-warning">Scan QR-Code</button>
                <button type="button" id="button2" class="btn btn-warning">Scan Lagi</button>
                <!-- <a id="button">Scan QR-Code</a>
                <a id="button2">Scan Lagi</a> -->
            </div>

            <div class="boxWrapper auto">
                <div id="hiddenImg"></div>
                <!-- <div id="qrContent"><p>Results will be shown here.</p></div> -->
                <input type="text" id="qrContent" class="form-control" readonly>
            </div>

            <!-- <div class="form-group boxWrapper auto">
                <div id="hiddenImg"></div>
                <div id="qrContent"><p>Results will be shown here.</p></div>
                <input type="text" id="qrContent" class="form-control" readonly>
            </div>  -->

        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    {{ Form::close() }}
</div><!-- /.box -->
</div>
@stop