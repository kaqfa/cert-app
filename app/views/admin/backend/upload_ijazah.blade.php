@section('mainarea')
<div class="col-md-8">
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Form Upload File Ijazah</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    {{ Form::open(array('url' => 'backend/uploadijazah', 'files' => true, 'role'=>'form')) }}
        <div class="box-body">
            <div class="form-group">
                <label for="name">NIM Mahasiswa</label>
                <input type="text" name="nim" class="form-control" id="name" placeholder="Masukkan NIM">
            </div>            
            <div class="form-group">
                <label for="certificate_file">File Ijazah</label>
                {{Form::file('certificate_file')}}
                <p class="help-block">Upload file Ijazah mahasiswa di sini.</p>
            </div>
            <div class="form-group">
                <label for="transcript1_file">File Transkrip (hal-1)</label>
                {{Form::file('transcript1_file')}}
                <p class="help-block">Upload file Transkrip lembar 1 di sini (jika ada).</p>
            </div>
            <div class="form-group">
                <label for="transcript2_file">File Transkrip (hal-2)</label>
                {{Form::file('transcript2_file')}}
                <p class="help-block">Upload file transkrip lembar 2 di sini (jika ada).</p>
            </div>            
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    {{ Form::close() }}
</div><!-- /.box -->
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Riwayat Validasi Ijazah Via Upload</h3>
                <div class="box-tools">
                    <div class="input-group">
                        <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                        <div class="input-group-btn">
                            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                    </tr>
                    @foreach($legals as $data)
                    <tr>
                        <td>1</td>
                        <td>{{$data->student->nim}}</td>
                        <td> {{$data->student->name}} </td>
                        <td>{{HTML::link('public/uploads/'.$data->certificate_file, $data->certficate_file)}}</td>
                        <td><span class="label label-success">$data->status</span></td>
                        <td>File Ijazah mahasiswa tersebut valid sesuai dengan aslinya.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>A11.2005.02603</td>
                        <td>Jane Doe</td>
                        <td>{{HTML::link('gambar/ijazah.jpg', 'ijazah saya.jpg')}}</td>
                        <td><span class="label label-warning">Pending</span></td>
                        <td>Proses identifikasi file ijazah sedang dijalankan.</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>A11.2005.02603</td>
                        <td>Bob Doe</td>
                        <td>{{HTML::link('gambar/ijazah.jpg', 'ijazah saya.jpg')}}</td>
                        <td><span class="label label-success">Otentik</span></td>
                        <td>File Ijazah mahasiswa tersebut valid sesuai dengan aslinya.</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>A11.2005.02603</td>
                        <td>Mike Doe</td>
                        <td>{{HTML::link('gambar/ijazah.jpg', 'ijazah saya.jpg')}}</td>
                        <td><span class="label label-danger">Tidak Terdaftar</span></td>
                        <td>File Ijazah yang diuploadkan tidak terdapat pada database kami.</td>
                    </tr>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
@stop