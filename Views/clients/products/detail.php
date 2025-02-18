<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        HDTL
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <style>
        #logo {
            width: 120px;
            height: 100px;
            margin-left: 100px;
        }

        .navbar {
            height: 75px;
        }

        .signup {
            margin-left: 750px;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="items-center justify-center min-h-screen bg-gray-100">
    <!-- Header -->
    <header class="bg-red-600 text-white text-center py-2">
        <div class="container mx-auto flex justify-between items-center py-2 navbar">
            <img id="logo" alt="GearVN Logo" class="" src="fond/user/image/logo.png" />
            <div class="flex items-center space-x-4" id="header">

                <nav class="hidden md:flex space-x-4">



                    <a class="hover:underline" href="#">
                        Dịch vụ kỹ thuật tại nhà
                    </a>
                    <a class="hover:underline" href="#">
                        Thu cũ đổi mới
                    </a>
                    <a class="hover:underline" href="#">
                        Tra cứu đơn hàng
                    </a>
                    <a class="hover:underline" href="#">
                        Tra cứu bảo hành
                    </a>
                </nav>
            </div>
            <div class="flex items-center space-x-4">
                <input class="px-4 py-2 rounded-md" placeholder="Bạn cần tìm gì?" type="text" />
                <i class="fas fa-search">
                </i>
                <i class="fas fa-shopping-cart">
                </i>
                <i class="fas fa-user">
                </i>
            </div>
        </div>
    </header>

    <div class="container mx-auto p-4">
        <nav class="text-sm text-gray-500 mb-4">
            <a class="hover:underline" href="<?= ROOT_URL ?>">
                Trang chủ
            </a>
            /
            <a class="hover:underline" href="#">
                PC GVN
            </a>
            /
            <span>
            <?= $product['name'] ?>            </span>
        </nav>
        <div class="flex flex-col lg:flex-row bg-white p-4 rounded shadow">
            <div class="lg:w-1/3">
                <img alt="Product Image" class="w-full mb-4" height="300"
                    src="<?= $product['image'] ?>"
                    width="300" />
                <div class="flex space-x-2">
                    <img alt="Thumbnail 1" class="w-12 h-12 border" height="50"
                        src="<?= $product['image'] ?>"
                        width="50" />
                    <img alt="Thumbnail 2" class="w-12 h-12 border" height="50"
                        src="<?= $product['image'] ?>"
                        width="50" />
                    <img alt="Thumbnail 3" class="w-12 h-12 border" height="50"
                        src="<?= $product['image'] ?>"
                        width="50" />
                </div>
            </div>
            <div class="lg:w-2/3 lg:pl-8">
                <h1 class="text-xl font-bold mb-2">
                <?= $product['name'] ?>                </h1>
                <div class="flex items-center mb-2">
                    <span class="text-yellow-500 text-lg">
                        <i class="fas fa-star">
                        </i>
                    </span>
                    <span class="text-yellow-500 text-lg">
                        <i class="fas fa-star">
                        </i>
                    </span>
                    <span class="text-yellow-500 text-lg">
                        <i class="fas fa-star">
                        </i>
                    </span>
                    <span class="text-yellow-500 text-lg">
                        <i class="fas fa-star">
                        </i>
                    </span>
                    <span class="text-yellow-500 text-lg">
                        <i class="fas fa-star-half-alt">
                        </i>
                    </span>
                    <span class="text-sm text-gray-500 ml-2">
                        0.0
                    </span>
                    <a class="text-sm text-blue-500 ml-2 hover:underline" href="#">
                        Xem đánh giá
                    </a>
                </div>
                <div class="text-red-600 text-3xl font-bold mb-2">
                <?= number_format($product['price']) ?>đ
                </div>
                <div class="text-gray-500 line-through mb-2">
                    12.520.000đ
                </div>
                <div class="text-red-600 text-sm mb-4">
                    -4%
                </div>
                <div class="bg-red-100 p-4 rounded mb-4">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-gift text-red-600 mr-2">
                        </i>
                        <span class="text-red-600 font-bold">
                            Quà tặng khuyến mãi
                        </span>
                    </div>
                    <div class="text-sm text-gray-700">
                        Tặng ngay 1 x RAM V-Color Prism RGB 16GB 3200 Grey (TL8G32S8H16GDE) trị giá 450.000đ
                    </div>
                </div>
                <a href="<?= ROOT_URL . '?ctl=add-cart&id=' . $product['id'] ?>">
                <button class="bg-red-600 text-white text-lg font-bold py-2 px-4 rounded w-full mb-4">
                    MUA NGAY
                </button>
                </a>
                <div class="text-center text-sm text-gray-500 mb-4">
                    Giao hàng tận nơi hoặc nhận tại cửa hàng
                </div>
                <div class="text-red-600 font-bold mb-2">
                    ƯU ĐÃI KHI MUA KÈM PC
                </div>
                <div class="text-sm text-gray-700 mb-4">
                    Đã lên đến 54% khi mua kèm PC xem ngay tại đây
                </div>
                <div class="text-sm text-gray-700 mb-4">
                    Hỗ trợ trả góp MPOS (Thẻ tín dụng), HDSAISON.
                </div>
                <div class="text-xs text-gray-500 mb-4">
                    (Hỗ trợ PC chỉ mang tính chất minh họa)
                </div>
                <div class="text-red-600 font-bold mb-2">
                    Khuyến mãi cực khủng
                </div>
                <div class="text-sm text-gray-700 mb-4">
                    Mua kèm màn hình giảm giá lên đến 500K
                </div>
                <div class="bg-gray-100 p-4 rounded">
                    <div class="text-gray-700 font-bold mb-2">
                        Khuyến mãi
                    </div>
                    <ul class="list-disc list-inside text-sm text-gray-700">
                        <li>
                            Giảm ngay 200.000đ khi mua kèm ổ cứng SSD
                        </li>
                        <li>
                            Giảm ngay 100.000đ khi mua kèm chuột gaming
                        </li>
                        <li>
                            Giảm ngay 300.000đ khi mua Microsoft Office kèm PC
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto p-4">
            <h1 class="text-lg font-bold mb-4">Đánh giá & Nhận xét PC GVN Intel i5-12400F/ VGA RX 6500XT (H610) (Powered
                by ASUS)</h1>
            <div class="flex items-center mb-4">
                <span class="text-red-500 text-4xl font-bold">0/5</span>
                <div class="ml-4">
                    <div class="flex items-center">
                        <i class="far fa-star text-gray-400 text-2xl"></i>
                        <i class="far fa-star text-gray-400 text-2xl"></i>
                        <i class="far fa-star text-gray-400 text-2xl"></i>
                        <i class="far fa-star text-gray-400 text-2xl"></i>
                        <i class="far fa-star text-gray-400 text-2xl"></i>
                    </div>
                    <span class="text-gray-500">0 đánh giá & nhận xét</span>
                </div>
            </div>
            <div class="space-y-2">
                <div class="flex items-center">
                    <span class="text-gray-700">5</span>
                    <i class="fas fa-star text-yellow-500 ml-1"></i>
                    <div class="w-full bg-gray-200 h-2 ml-2 rounded">
                        <div class="bg-gray-300 h-2 rounded" style="width: 0%;"></div>
                    </div>
                    <span class="ml-2 text-blue-500 cursor-pointer">Đánh giá</span>
                </div>
                <div class="flex items-center">
                    <span class="text-gray-700">4</span>
                    <i class="fas fa-star text-yellow-500 ml-1"></i>
                    <div class="w-full bg-gray-200 h-2 ml-2 rounded">
                        <div class="bg-gray-300 h-2 rounded" style="width: 0%;"></div>
                    </div>
                    <span class="ml-2 text-blue-500 cursor-pointer">Đánh giá</span>
                </div>
                <div class="flex items-center">
                    <span class="text-gray-700">3</span>
                    <i class="fas fa-star text-yellow-500 ml-1"></i>
                    <div class="w-full bg-gray-200 h-2 ml-2 rounded">
                        <div class="bg-gray-300 h-2 rounded" style="width: 0%;"></div>
                    </div>
                    <span class="ml-2 text-blue-500 cursor-pointer">Đánh giá</span>
                </div>
                <div class="flex items-center">
                    <span class="text-gray-700">2</span>
                    <i class="fas fa-star text-yellow-500 ml-1"></i>
                    <div class="w-full bg-gray-200 h-2 ml-2 rounded">
                        <div class="bg-gray-300 h-2 rounded" style="width: 0%;"></div>
                    </div>
                    <span class="ml-2 text-blue-500 cursor-pointer">Đánh giá</span>
                </div>
                <div class="flex items-center">
                    <span class="text-gray-700">1</span>
                    <i class="fas fa-star text-yellow-500 ml-1"></i>
                    <div class="w-full bg-gray-200 h-2 ml-2 rounded">
                        <div class="bg-gray-300 h-2 rounded" style="width: 0%;"></div>
                    </div>
                    <span class="ml-2 text-blue-500 cursor-pointer">Đánh giá</span>
                </div>
            </div>
            <div class="mt-6">
                <button class="bg-blue-500 text-white py-2 px-4 rounded">Gửi đánh giá của bạn</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                <div>
                    <h3 class="font-bold mb-2">
                        VỀ HDTL
                    </h3>
                    <ul>
                        <li>
                            <a class="text-black hover:underline" href="#">
                                Giới thiệu
                            </a>
                        </li>
                        <li>
                            <a class="text-black hover:underline" href="#">
                                Tuyển dụng
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2">
                        CHÍNH SÁCH
                    </h3>
                    <ul>
                        <li>
                            <a class="text-black hover:underline" href="#">
                                Chính sách bảo hành
                            </a>
                        </li>
                        <li>
                            <a class="text-black hover:underline" href="#">
                                Chính sách giao hàng
                            </a>
                        </li>
                        <li>
                            <a class="text-black hover:underline" href="#">
                                Chính sách bảo mật
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2">
                        THÔNG TIN
                    </h3>
                    <ul>
                        <li>
                            <a class="text-black hover:underline" href="#">
                                Hệ thống cửa hàng
                            </a>
                        </li>
                        <li>
                            <a class="text-black hover:underline" href="#">
                                Hướng dẫn mua hàng
                            </a>
                        </li>
                        <li>
                            <a class="text-black hover:underline" href="#">
                                Hướng dẫn thanh toán
                            </a>
                        </li>
                        <li>
                            <a class="text-black hover:underline" href="#">
                                Hướng dẫn trả góp
                            </a>
                        </li>
                        <li>
                            <a class="text-black hover:underline" href="#">
                                Tra cứu địa chỉ bảo hành
                            </a>
                        </li>
                        <li>
                            <a class="text-black hover:underline" href="#">
                                Dịch vụ vệ sinh miễn phí
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2">
                        TỔNG ĐÀI HỖ TRỢ (8:00 - 21:00)
                    </h3>
                    <ul>
                        <li>
                            <a class="text-blue-600 hover:underline" href="tel:19005301">
                                Mua hàng: 1900.5301
                            </a>
                        </li>
                        <li>
                            <a class="text-blue-600 hover:underline" href="tel:19005325">
                                Bảo hành: 1900.5325
                            </a>
                        </li>
                        <li>
                            <a class="text-blue-600 hover:underline" href="tel:18006173">
                                Khiếu nại: 1800.6173
                            </a>
                        </li>
                        <li>
                            <a class="text-blue-600 hover:underline" href="mailto:cskh@gearvn.com">
                                Email: cskh@hdtl.com
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2">
                        ĐƠN VỊ VẬN CHUYỂN
                    </h3>
                    <div class="flex space-x-2 mb-4">
                        <img alt="GHN logo" src="https://placehold.co/50x30" />
                        <img alt="EMS logo" src="https://placehold.co/50x30" />
                        <img alt="GVN logo" src="https://placehold.co/50x30" />
                        <img alt="Another shipping logo" src="https://placehold.co/50x30" />
                    </div>
                    <h3 class="font-bold mb-2">
                        CÁCH THỨC THANH TOÁN
                    </h3>
                    <div class="flex space-x-2">
                        <img alt="Payment method 1" src="https://placehold.co/50x30" />
                        <img alt="Payment method 2" src="https://placehold.co/50x30" />
                        <img alt="Payment method 3" src="https://placehold.co/50x30" />
                        <img alt="Payment method 4" src="https://placehold.co/50x30" />
                        <img alt="Payment method 5" src="https://placehold.co/50x30" />
                        <img alt="Payment method 6" src="https://placehold.co/50x30" />
                        <img alt="Payment method 7" src="https://placehold.co/50x30" />
                        <img alt="Payment method 8" src="https://placehold.co/50x30" />
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t pt-4">
                <div class="flex justify-between items-center">
                    <div class="flex space-x-4">
                        <span class="font-bold">
                            KẾT NỐI VỚI CHÚNG TÔI
                        </span>
                        <a class="text-black" href="#">
                            <i class="fab fa-facebook-f">
                            </i>
                        </a>
                        <a class="text-black" href="#">
                            <i class="fab fa-tiktok">
                            </i>
                        </a>
                        <a class="text-black" href="#">
                            <i class="fab fa-instagram">
                            </i>
                        </a>
                        <a class="text-black" href="#">
                            <i class="fab fa-youtube">
                            </i>
                        </a>
                        <a class="text-black" href="#">
                            <i class="fab fa-zalo">
                            </i>
                        </a>
                    </div>
                    <div class="flex space-x-2">
                        <img alt="Certification logo 1" src="https://placehold.co/50x30" />
                        <img alt="Certification logo 2" src="https://placehold.co/50x30" />
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
