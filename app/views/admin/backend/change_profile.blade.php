@section('mainarea')
<div class="col-md-8">
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Form Edit Profile</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    {{ Form::open(array('url' => 'foo/bar', 'role'=>'form')) }}
        <div class="box-body">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" readonly class="form-control" name="username" id="username" value="{{$user->username}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label for="firstname">Nama Depan</label>
                <input type="text" class="form-control" id="firstname" name="firstname" value="{{$user->firstname}}">
            </div>
            <div class="form-group">
                <label for="lastname">Nama Belakang</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{$user->lastname}}">
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                {{Form::select('level', $user->levelChoice, $user->level, array('class'=>'form-control'));}}                
            </div>
            <div class="form-group">
                <label>
                    {{Form::checkbox('activates', '1', $user->activated)}}
                    Pengguna Aktif
                </label>
            </div>
        </div>

        <div class="box-footer">
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Konfirmasi Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1">
            </div>
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    {{ Form::close() }}
</div><!-- /.box -->
</div>
@stop