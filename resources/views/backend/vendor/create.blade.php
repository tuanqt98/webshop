@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            QL Nhà Cung Cấp
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">QL Nhà cung cấp</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm Thông tin Nhà cung cấp</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên nhà cung cấp</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập nhà cung cấp...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ảnh</label>
                                    <input type="file" id="image" name="image">
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Website</label>
                                    <input type="text" class="form-control" id="website" name="website" placeholder="Nhập website">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <textarea class="form-control" rows="3" placeholder="Nhập địa chỉ" id="address" name="address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Vị trí hiển thị</label>
                                    <input type="number" class="form-control" id="position" name="position" min="1" value="1">

                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="is_active" id="is_active"> Hiển thị
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
            <!--/.col (left) -->

        </div>
        <!-- /.row -->
    </section>
@endsection
