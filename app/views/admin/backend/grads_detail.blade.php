@section('mainarea')
<div id="table-periode" class="box">
    <div class="box-header">
        <h3 class="box-title">Daftar Alumni Pada {{$title}}</h3>
    </div><!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
            <tr>
                <th style="width: 10px">No.</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>IPK</th>                
            </tr>
            <?php $no = 1; ?>
            @foreach($students as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{HTML::link('backend/student_detail/'.$data->nim,$data->nim)}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->email}}</td>
                <td><span class="badge bg-blue">{{$data->gpa}}</span></td>
            </tr>           
            @endforeach
        </table>
    </div><!-- /.box-body -->
</div>
@stop