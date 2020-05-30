<?php 
	session_start();
    if(!isset($_COOKIE['user'])){
        echo '
        <div class = "container"> Đăng nhập <a class="center" href="login.php">tại đây</a></div>';
        exit;
    }
 ?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin | Phim Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- Back to top Button -->
        <script>
        /** 
    // kéo xuống khoảng cách 500px thì xuất hiện nút Top-up
    var offset = 250;
    // thời gian di trượt 0.75s ( 1000 = 1s )
    var duration = 750;
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > offset)
                $('#top-up').fadeIn(duration);
            else
                $('#top-up').fadeOut(duration);
        });
        $('#top-up').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, duration);
        });
    });
    */
        // Tạo nút click on Top
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-to-top').click(function() {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
        });
        // Tạo một Icon Menu khi kích thước site nhỏ hơn 600px
        function menuFunction() {
            var x = document.getElementById("menuTopnav");
            if (x.className === "topnav") {
                x.className += "responsive";
            } else {
                x.className = "topnav";
            }
        }

        // Tạo function hiển thị (Read more) nội dung phim...
        $('.moreless-button').click(function() {
            $('.moretext').slideToggle();
            if ($('.moreless-button').text() == "Read more") {
                $(this).text("Read less")
            } else {
                $(this).text("Read more")
            }
        });
        /** Tạo function xóa một danh mục phim
        function deleteAjax(id_phim) {
            if (confirm('Bạn có muốn xóa chứ?')) {
                $.ajax({
                    type: 'get',
                    url: 'delete.php',
                    data: {
                        delete_id: id_phim
                    },
                    success: function(data) {
                        $('#delete' + id_phim).hide();
                    }
                });
            }
        }
        */
        // jQuery thực hiện chức năng Tìm kiếm
        $(document).ready(function() {
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#searchTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        // jQuery Delete
        $(Document).ready(function() {
            $('.btn').click(function() {
                var th = $(this);
                var id = $(this).attr("id");
                swal({
                    title: 'Bạn có muốn xóa phim này chứ ?',
                    text: "Lưu ý: không thể hoàn tác lại thao tác xóa Phim!",
                    type: 'Warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Đồng ý!'
                }).then(function() {
                    $.ajax({
                        url: 'delete.php',
                        type: 'post',
                        data: {
                            idd: id
                        },
                        success: function(data) {
                            th.parents('tr').hide();
                        }
                    })
                    swal(
                        'Đã xóa!',
                        'Danh mục phim đã được xóa.',
                        'Thành công'
                    )
                })

                $(this).parents('tr').hide();
            });
        });
        </script>

        <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            padding: 20px;
        }

        .back-to-top {
            position: fixed;
            bottom: 25px;
            right: 25px;
            display: none;
        }

        #top-up {
            background: none;
            font-size: 3em;
            text-shadow: 0px 0px 20px #d400fb;
            cursor: pointer;
            position: fixed;
            z-index: 9999;
            color: #004993;
            bottom: 20px;
            right: 15px;
            display: none;
            padding-right: 25px;
            padding-bottom: 20px
        }

        table {
            text-align: center;
            border-radius: 10px 10px 0px 0px;
        }

        td {
            padding: 10px;
        }

        tr.item {
            border-top: 1px solid #5e5e5e;
            border-bottom: 1px solid #5e5e5e;
            background-color: hsla(89, 43%, 51%, 0.3);
        }

        tr.item:hover {
            background-color: #d9edf7;
        }

        tr.item td {
            min-width: 150px;
        }

        tr.header {
            width: 1060px;
            background-color: #333;
            color: #f2f2f2;
        }

        .top-menu {
            width: auto;
        }

        /** Menu Button
    */
        .topnav {
            border-radius: 10px;
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 16px;
        }

        .topnav a:hover {
            border-radius: 10px;
            background-color: grey;
            color: black;
        }

        .topnav a.active {
            border-radius: 10px;
            background-color: grey;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }

        #section {
            word-wrap: break-word;
        }

        .moretext {
            display: none;
        }

        .button {
            display: inline-block;
            padding: 10px 25px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 10px;
            box-shadow: 0 9px #999;
        }

        .button:hover {
            background-color: #3e8e41;
            opacity: 1;
        }

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 4px #666;
            transform: translateY(4px);
        }

        /** Tạo nút cancel và delete */
        .cancelbtn,
        .deletebtn {
            float: left;
            width: 50%;
        }

        /** Thiết kế màu sắc, kí tự cho hai button: cancel và delete */
        .cancelbtn {
            background-color: #ccc;
            color: black;
        }

        .deletebtn {
            background-color: #f44336;
        }

        .text-box {
            padding: 16px;
            text-align: center;
        }

        /** Modal background */
        .modal {
            display: none;
            /** Hidden by default */
            position: fixed;
            /** Stay in place */
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            /** Full width */
            height: 100%;
            /** Full height */
            overflow: auto;
            /** Enable scroll if needed */
            background-color: #474e5d;
            padding-top: 50px;
        }

        /** Modal content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 80%;
        }

        /** Style the horizontal ruler */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /** Modal Close Button (x) */
        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: bold;
            color: #f1f1f1;
        }

        .close:hover,
        .close:focus {
            color: #f44336;
            cursor: pointer;
        }

        /** Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /** Change styles for cancel button and delete button on extra small screens */
        @media screen and (max-widthL 300px) {

            .cancelbtn,
            .deletebtn {
                width: 100%;
            }
        }
        </style>
        <div class="top-menu">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">Trang chủ</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a></li>
                    </ul>
                    <!--<div>
                    <a href="javascript:void(0);" class="icon" onclick="menuFunction()">
                        <i class="fa fa-bars"></i></a>
                </div>
                -->
                </div>
            </nav>
        </div>
        <!--<div class="topnav" id="menuTopnav">
            <a href="register.php">Đăng ký tài khoản Admin</a>
            <a href="add.php">Thêm danh mục Phim</a>
            </nav>
        -->
        <tr class="control" style="text-align: center; font-weight: bold; font-size: 20px">
            <td colspan="7">
                <div class="alert alert-info">Người quản lý hiện tại là:
                    <strong href="admin.php" class="main"><?= $_COOKIE['user'] ?></strong>
                </div>
            </td>
        </tr>
        <table cellpadding="10" cellspacing="10" style="border-collapse: collapse; margin: auto">
            <!-- Tìm kiếm: -->
            <p>Tìm kiếm thông tin phim:</p>
            <div class="row">
                <div class="col-lg-6">
                    <input class="form-control " id="searchInput" type="text" placeholder="Tìm kiếm...">
                    <br>
                </div>
                <div class="col-lg-3">
                    <a href="add.php" class="btn btn-warning col-lg-6">Thêm phim</a>
                </div>
                <div class="col-lg-3">
                    <a href="admin.php" class="btn btn-info col-lg-6" style="font-size: 14px">
                        <span class="glyphicon glyphicon-refresh"></span> Refresh</a>
                    </p>
                </div>
            </div>
            <br>
            <tr class="header">
                <td>Footage</td>
                <td>ID</td>
                <td>Tên</td>
                <td>Tóm tắt</td>
                <td>ID Thể loại</td>
                <td>URL Phim</td>
                <td>Tùy chọn</td>
            </tr>
            <!-- Load phim -->
            <?php
            require_once('connect.php');
            $sql = "SELECT * FROM phim";
            $result = $connection ->query($sql);
            while($row = $result ->fetch_assoc()){
                $id = $row['id_phim'];
                $content = $row['thongtin_phim'];
                $lengthcontent = strlen($content);
                $shortcontent = substr($content, 0, 200) ."...";
                $lastcontent = substr($content, 201, $lengthcontent);
        ?>
            <div id="section">
                <tbody id="searchTable">
                    <tr class="item" id="delete <?php echo $row['id_phim']?>">
                        <td><img src=".<?= $row['anh_phim'] ?>" style="max-height: 80px"></td>
                        <td><?= $row['id_phim'] ?></td>
                        <td><?= $row['ten_phim'] ?></td>
                        <td>
                            <div>
                                <?php echo $shortcontent;?>
                            </div>
                            <a href="'.<?= $lastcontent?>.'" class="more">More</a>
                        </td>
                        <td><?= $row['id_theloai'] ?></td>
                        <td><a href=" .<?= $row['url_phim'] ?>"><img src=".<?= $row['anh_phim'] ?>"
                                    style="max-height: 80px"></a>
                        </td>
                        <td><a href="./edit.php?id_phim=<?=$row['id_phim']?>" class="btn btn-info">Edit</a> | <a
                                href="./delete.php?id_phim=<?=$row['id_phim']?>"
                                class="btn btn-danger delete">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </div>
            <?php 
            }
         ?>
            <tr class="control" style="text-align: right; font-weight: bold; font-size: 16px">
                <td colspan="7">
                    <p class="btn btn-primary">Tổng số phim hiện có <span
                            class="badge"><?=$result->num_rows?></span></p>
                </td>
            </tr>
        </table>
    </div>
    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i
            class="fas fa-chevron-up"></i></a>
</body>

</html>