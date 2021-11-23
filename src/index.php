<?php include 'header.php';?>
<nav class="navbar navbar-light bg-light" style="padding-top:0px;">
    <div class="container-fluid">
        <div class="col-md-2 col-sm-3">
            <a class="navbar-brand" href="index.php">IDEA Bookstore</a>
        </div>
        <div class="col-md-7 col-sm-9">
            <br>
            <form class="d-flex idea-br" style="border-radius: 5px; background-color: white;" action="template.php"
                method="post">
                <input id="inp" class="form-control me-2" style="border:0px;" type="sumbit"
                    placeholder="Nhập sách cần tìm" aria-label="Search">
                <a><button type="sumbit" style="border: 0px solid transparent; background-color: transparent"><i
                            class="fas fa-search idea-color"
                            style="font-size:1.5em; padding: 5px 5px 0px 0px;"></i></button></a>
            </form>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="row">
                <div class="col-4 text-center idea-color" style="padding-top:8px;">
                    <div class="row">
                        <i class="far fa-bell"></i>
                    </div>
                    <div class="row">
                        <a class="nav-link idea-color" href="http://">Thông báo</a>
                    </div>
                </div>
                <div class="col-4 text-center idea-color" style="padding-top:8px;">
                    <div class="row">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="row">
                        <a class="nav-link idea-color" href="http://">Giỏ hàng</a>
                    </div>
                </div>
                <div class="col-4 text-center idea-color" style="padding-top:8px;">
                    <div class="row">
                        <i class="fas fa-sign-in-alt"></i>
                    </div>
                    <div class="row">
                        <a class="nav-link idea-color" href="http://">Đăng nhập</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</nav>

<!-- carousel -->
<div class="row">
    <div class="col-md-3" style="padding-right: 0px;">
        <ul class="list-group">
            <li class="list-group-item"><a class="nav-link" href="index.php?category=Cổ tích">Cổ tích</a></li>
            <li class="list-group-item"><a class="nav-link" href="index.php?category=Trinh thám">Trinh thám</a></li>
            <li class="list-group-item"><a class="nav-link" href="index.php?category=Light novel">Light novel</a></li>
            <li class="list-group-item"><a class="nav-link" href="index.php?category=Tiểu thuyết">Tiểu thuyết</a></li>
            <li class="list-group-item"><a class="nav-link" href="index.php?category=Hài hước">Hài hước</a></li>
            <li class="list-group-item"><a class="nav-link" href="index.php?category=Lãng mạn">Lãng mạn</a></li>
            <li class="list-group-item"><a class="nav-link" href="index.php?category=Báo">Báo</a></li>
            <li class="list-group-item"><a class="nav-link" href="index.php?category=Truyện ngắn">Truyện ngắn</a></li>
            <li class="list-group-item"><a class="nav-link" href="index.php?category=Học tập">Học tập</a></li>
        </ul>
    </div>
    <div class="col-md-9" style="padding-left: 0px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <?php
                //load số lượng trang trong carousel
                $sql="select * from tb_banner";
                $result=mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0){
                    $dem=1;
                    while($row=mysqli_fetch_array($result)){
                        echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$dem.'" aria-label="?"></button>';
                        $dem++;
                    }
                }
                ?>
                <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../banner.jpg" class="d-block" style=" width: 100%;" alt="...">
                </div>
                <?php
                //load số lượng trang trong carousel
                $sql="select * from tb_banner";
                $result=mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_array($result)){
                        echo '<div class="carousel-item">';
                        echo '    <img src="'.$row["img_url"].'" class="d-block w-100" alt="'.$row["banner_name"].'">';
                        echo '</div>';
                    }
                }
                ?>
                <!-- <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<!-- Nổi bật -->
<div class="container-fluid">
    <div class="row text-center" style="padding-top: 15px;">
        <h2>Top 5 của tháng</h2>
    </div>
    <div class="row">
        <div class="card me-2" style="width: 20%;">
            <img src="https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/i/m/image_217480.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cây cam ngọt của tôi</h5>
                <p style="font-size: 12px; color: gray;">Còn lại: 15</p>
                <p class="card-text text-danger">95000đ</p>
            </div>
        </div>
        <div class="card me-2" style="width: 20%;">
            <img src="https://cdn0.fahasa.com/media/catalog/product/cache/1/small_image/400x400/9df78eab33525d08d6e5fb8d27136e95/i/m/image_217480.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cây cam ngọt của tôi</h5>
                <p style="font-size: 12px; color: gray;">Còn lại: 15</p>
                <p class="card-text text-danger">95000đ</p>
            </div>
        </div>
    </div>
</div>
<!-- thông thường -->
<div class="container-fluid">
    <div class="row" style="padding-top: 15px;">
    <div class="col-md-2 col-sm-3">
    Sắp xếp theo
    </div>
        <div class="col-md-2 col-sm-4">
            <div class="dropdown">
                <button type="button" class="btn btn-outline-success dropdown-toggle w-100" data-bs-toggle="dropdown">
                    Mặc định
                </button>
                <ul class="dropdown-menu w-100">
                    <li><a class="dropdown-item" href="#">Mặc định</a></li>
                    <li><a class="dropdown-item" href="#">Giá: thấp->cao</a></li>
                    <li><a class="dropdown-item" href="#">Giá: cao->thấp</a></li>
                    <li><a class="dropdown-item" href="#">Bán chạy</a></li>
                    <li><a class="dropdown-item" href="#">Mới nhất</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-4">
            <div class="dropdown">
                <button type="button" class="btn btn-outline-success dropdown-toggle w-100" data-bs-toggle="dropdown">
                    12 sản phẩm
                </button>
                <ul class="dropdown-menu w-100 text-center">
                    <li><a class="dropdown-item" href="#">12 sản phẩm</a></li>
                    <li><a class="dropdown-item" href="#">24 sản phẩm</a></li>
                    <li><a class="dropdown-item" href="#">36 sản phẩm</a></li>
                </ul>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

<?php include 'footer.php';?>