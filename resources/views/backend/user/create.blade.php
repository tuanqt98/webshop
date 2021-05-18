@extends('backend.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Thêm người dùng <a href="{{route('user.index')}}" class="btn bg-purple"><i class="fa fa-list"></i> Danh Sách</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin người dùng</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Chọn quyền</label>
                                    <select class="form-control" name="role_id">
                                        <option value="0">--chọn--</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Manage</option>
                                        <option value="3">Member</option>
                                        <option value="4">option 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Họ tên</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Avatar</label>
                                    <input type="file" id="image" name="image">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="is_active" id="is_active"> Kích hoạt tài khoản
                                    </label>
                                </div>

                            </div>


                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Tạo</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection
