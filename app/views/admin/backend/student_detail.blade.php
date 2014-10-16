@section('mainarea')
<div class="col-md-8">
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Biodata Mahasiswa</h3>
    </div><!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
            <tr>
                <th style="width: 120px">NIM</th>
                <td>{{$student[0]->nim}}</td>
            </tr>   
            <tr>
                <th>Nama Lengkap</th>
                <td>{{$student[0]->name}}</td>
            </tr> 
            <tr>
                <th>Alamat</th>
                <td>{{$student[0]->address}}</td>
            </tr> 
            <tr>
                <th>Telephone</th>
                <td>{{$student[0]->phone}}</td>
            </tr> 
            <tr>
                <th>Email</th>
                <td>{{$student[0]->email}}</td>
            </tr> 
            <tr>
                <th>Periode Wisuda</th>
                <td>{{$student[0]->graduation_id}}</td>
            </tr>         
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
</div>

<div class="col-md-8">
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Transkrip Mahasiswa</h3>
    </div><!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
            <tr>
                <th>No.</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
            </tr>
            <?php $no = 1; ?>
            @foreach($transcripts as $matkul)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$matkul->name}}</td>
                <td>{{$matkul->grade}}</td>
            </tr>
            @endforeach
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
</div>
@stop