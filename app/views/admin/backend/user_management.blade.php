@section('mainarea')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Pengguna Aplikasi</h3>
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
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Last Login</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach($allUser as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->firstname}} {{$user->lastname}}</td>
                        <td> {{$user->email}} </td>
                        <?php $labelClass = 'label-success';
                            if($user->level == 'S') $labelClass = 'label-primary';
                            else if($user->level == 'I') $labelClass = 'label-warning'; ?>
                        <td><span class="label  {{$labelClass}}"> {{ $user->getLevel($user->level) }} </span></td>
                        <td> {{$user->last_login}} </td>
                        <td><button class="btn btn-warning btn-sm" onclick="btnAction('edit', {{$user->id}})">Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="btnAction('del', {{$user->id}})">Delete</button>
                        </td>
                    </tr>
                    @endforeach                    
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>

<script>
    var btnAction = function (cmd, userId){
        if(cmd == 'edit'){
            location = '{{url("backend/changeprofile/'+userId+'")}}'
        } else if (cmd == 'del'){
            alert('yang mau dihapus adalah '+userId);
        }
    }
</script>
@stop