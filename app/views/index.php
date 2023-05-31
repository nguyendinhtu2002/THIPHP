<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        Danh sách sản phẩm
                    </a></li>
            </ul>
            <table class="table border">
                <thead>
                <tr>
                    <th class="" scope="col">STT</th>
                    <th class="" colspan="2">Ảnh</th>
                    <th class="" colspan="2">Tên sản phẩm</th>
                    <th class="">Giá</th>
                    <th class="">Trạng thái</th>
                    <th class=""></th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product) { ?>
                    <tr>
                        <th scope="row"><?php echo $product->getId(); ?></th>
                        <td colspan="2"><img src="<?php echo $product->getImageUrl(); ?>" style="width: 10%;height: 10%" alt="Product Image"></td>
                        <td colspan="2"><?php echo $product->getName(); ?></td>
                        <td><?php echo $product->getPrice(); ?></td>
                        <td><?php echo $product->getStatus(); ?></td>
                        <td class="d-flex gap-3">
                            <div>
                                <a href="" class="btn btn-primary">Sửa</a>
                            </div>
                            <div>
                                <form  method="POST">
                                    <input name="id" type="text" hidden value="<?php echo $product->getId(); ?>">
                                    <button type="submit" class="btn btn-danger" onclick="(confirm('Bạn có chắc muốn xóa?'))" >Xóa</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>

        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>