<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>

<form action="<?= ADMIN_URL . '?ctl=storesp' ?>" method="post" enctype="multipart/form-data">
    <div class="flex-1 p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">
                Thêm Mới Sản Phẩm
            </h2>
            <div class="flex items-center space-x-4">
                <input class="px-4 py-2 border rounded" placeholder="Tìm kiếm tại đây" type="text" />
                <i class="fas fa-bell text-xl"></i>
                <div class="flex items-center space-x-2">
                    <img alt="User avatar" class="w-10 h-10 rounded-full" height="40" src="https://storage.googleapis.com/a1aa/image/W7a2d_Y11w4nPJfoB1x7lgF932871k3mbw_TSFTZlCk.jpg" width="40" />
                    <span>Thành viên</span>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-2">
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">Thông Tin Chung</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block mb-1">Tên sản phẩm (*)</label>
                                <input class="w-full px-4 py-2 border rounded" type="text" name="name" />
                            </div>
                            <div>
                                <label class="block mb-1">Danh mục sản phẩm</label>
                                <select name="category_id">
                                    <?php foreach ($categories as $cate) : ?>
                                        <option value="<?= $cate['id'] ?>" >
                                            <?= $cate['cate_name'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div>
                                <label class="block mb-1">Giá sản phẩm</label>
                                <input class="w-full px-4 py-2 border rounded" type="number" name="price" />
                            </div>
                            <div>
                                <label class="block mb-1">Giá sản phẩm SALE</label>
                                <input class="w-full px-4 py-2 border rounded" type="number" name="price_sale" />
                            </div>
                            <div>
                                <label class="block mb-1">Is Sale?</label>
                                <input class="w-full px-4 py-2 border rounded" type="checkbox" name="is_sale" value="1" id="is_sale"/>
                            </div>
                            <div>
                                <label class="block mb-1">Số lượng sản phẩm</label>
                                <input class="w-full px-4 py-2 border rounded" type="number" name="quantity" />
                            </div>
                            <div>
                                <label class="block mb-1">Trạng thái</label>
                                <div>
                                    <input class="mr-2" type="radio" name="status" value="1" checked/> Đang kinh doanh
                                    <input class="ml-4 mr-2" type="radio" name="status" value="0"  /> Ngừng kinh doanh
                                </div>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block mb-1">Mô tả sản phẩm</label>
                                <textarea class="w-full px-4 py-2 border rounded" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">Ảnh Sản Phẩm</h3>
                    <div class="mb-4">
                        <img alt="" class="w-full h-auto rounded" height="150" />
                        <input type="file" name="image">
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button class="bg-blue-600 text-white px-6 py-2 rounded" type="submit">Thêm Mới Sản Phẩm</button>
            </div>
        </div>
    </div>
</form>



<?php include_once ROOT_DIR . "Views/admin/Header.php" ?>
