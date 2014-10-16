@section('mainarea')
<div id="table-periode" class="box">
    <div class="box-header">
        <h3 class="box-title">Daftar Alumni Berdasarkan Periode Wisuda</h3>
    </div><!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
            <tr>
                <th style="width: 10px">Periode</th>
                <th>Tanggal Wisuda</th>
                <th>Tempat Wisuda</th>
                <th>Jumlah Wisudawan</th>
            </tr>
            @foreach($grads as $data)
            <tr>
                <td>{{$data->period}}</td>
                <td>{{HTML::link('backend/grads_detail/wisuda/'.$data->period, $data->grad_date)}}</td>
                <td>{{$data->venue}}</td>
                <td><span class="badge bg-blue">{{count($data->students)}}</span></td>
            </tr>           
            @endforeach
        </table>
    </div><!-- /.box-body -->
</div>
@stop