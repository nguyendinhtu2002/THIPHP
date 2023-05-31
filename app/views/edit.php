<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Home</title>
</head>
<body>
<div class="container">
    <h1 class="text-center bg-danger text-white text-uppercase py-4 mt-1">Cửa hàng quần áo thời trang Bò Sữa</h1>
    <div class="row">
        <div class="col-2">
            <ul class="list-group">
                <li class="list-group-item bg-danger">
                    <a class="text-decoration-none text-white " href="">Menu Liên kết</a>
                </li>
                <li class="list-group-item">
                    <a class="text-decoration-none text-dark" href="">Trang chủ</a>
                </li>
                <li class="list-group-item">
                    <a class="text-decoration-none text-dark" href="">Danh sách sản phẩm</a>
                </li>
                <li class="list-group-item">
                    <a class="text-decoration-none text-dark" href="">Thêm sản phẩm mới</a>
                </li>
            </ul>
        </div>
        <div class="col-10">
            <ul class="list-group">
                <li class="list-group-item bg-danger">
                    <a class="text-decoration-none text-white">
                        Chỉnh sửa Sản Phẩm
                    </a></li>
            </ul>
            <div class="">
                <form action="">
                    <div class="row">
                        <div class="col">
                            <label for="name" class="fw-bold form-label">Tên sản phẩm*</label>
                            <input class="form-control" type="text" id="name" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="col">
                            <label for="name" class="fw-bold form-label">Danh mục sản phẩm*</label>
                            <div class="d-flex position-relative">
                                <select name="" id="" class="form-control">
                                    <option disabled selected value="">None</option>
                                    <option value="">Áo Nam</option>

                                </select>
                                <div class="position-absolute p-1"
                                     style="right: 3px; top: 3px; background-color: slategray"><i
                                            class="bi bi-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="name" class="fw-bold form-label">Giá sản phẩm*</label>
                            <input class="form-control" type="text" id="name" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="col">
                            <label for="name" class="fw-bold form-label">Trạng thái sản phẩm</label>
                            <div class="d-flex gap-3">
                                <div class="d-flex align-items-center gap-1">
                                    <label for="" class="form-check-label">Hiện</label>
                                    <input name="show" type="radio" class="form-check-input">
                                </div>
                                <div class="d-flex align-items-center gap-1">
                                    <label for="" class="form-check-label">Ẩn</label>
                                    <input name="show" type="radio" class="form-check-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="name" class="fw-bold form-label">Ảnh sản phẩm</label>
                            <input class="form-control" type="file" id="image">
                        </div>
                        <div class="col">

                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="col d-flex justify-content-center mx-auto ">
                            <button class="btn btn-warning mx-auto px-4">Sửa</button>
                        </div>
                        <div class="col"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>