<?php csrf_token() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<base href="/">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gentelella Alela! | </title>
	<?php include(__VIEW__ . 'admin/layouts/lib/css.php') ?>
    <!-- Switchery -->
    <link href="assets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
	<link href="assets/build/css/custom.min.css" rel="stylesheet">
	<style type="text/css">
		body{
			font-family: unset;
		}
	</style>
</head>

<body class="nav-md">
<div class="container body">
	<div class="main_container">
        <?php include(__VIEW__ . 'admin/layouts/sidebar.php') ?>

        <!-- top navigation -->
        <?php include(__VIEW__ . 'admin/layouts/header.php') ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Danh mục<small>thêm mới</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form class="form-horizontal form-label-left" action="" method="post">
                                <input name="_token" type="hidden" value="<?php echo csrf_token() ?>">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="categories">Danh mục
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="select2_group form-control" name="categories">
                                            <option value="0">-- Chọn danh mục --</option>
                                            <optgroup label="{{ $category->title }}">
                                                <option value="1" disabled>{{ $item->title }}</option>
                                                <option value="{{ $category->id }}">- Thêm vào {{ $category->title }}</option>
                                            </optgroup>
                                        </select>
                                        <p class="help-block"><i>Mặc định không chọn sẽ là danh mục chính</i></p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Tiêu đề <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="title" name="title"
                                               class="form-control col-md-7 col-xs-12"
                                               placeholder="Tiêu đề danh mục">
                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                            <li class="parsley-required"></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug">Link tiêu đề </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="slug" name="slug" class="form-control col-md-7 col-xs-12"
                                               placeholder="Link tiêu đề danh mục">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="txt-slug"></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>
                                            <input type="checkbox" class="js-switch" name="status" checked /> Hiển thị
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="txt-slug">Mô tả </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea rows="5" id="txt-des" name="txt-des" class="form-control" placeholder="Mô tả ngắn không quá 191 ký tự ..."></textarea>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-danger" onclick="location.href='" type="button">Hủy</button>
                                        <button type="submit" class="btn btn-success">Thêm mới</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /page content -->

            <!-- footer content -->
        <?php include(__VIEW__ . 'admin/layouts/footer.php') ?>
        <!-- /footer content -->
	</div>
</div>
<?php include(__VIEW__ . 'admin/layouts/lib/javascript.php') ?>
<!-- Switchery -->
<script src="assets/vendors/switchery/dist/switchery.min.js"></script>
<!-- Custom Theme Scripts -->
<script src="assets/build/js/custom.min.js"></script>
</body>
</html>
