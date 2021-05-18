@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            QL Danh Mục
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">QL Danh mục</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm Thông tin danh mục</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Danh mục cha</label>
                                        <select class="form-control" name="parent_id" id="parent_id">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Loại danh mục</label>
                                        <select class="form-control" name="type" id="type">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục...">
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Vị trí hiển thị</label>
                                    <input type="number" class="form-control" id="position" name="position" min="1" value="1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ảnh</label>
                                    <input type="file" id="image" name="image">
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

