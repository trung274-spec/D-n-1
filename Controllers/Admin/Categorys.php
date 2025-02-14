<?php

class Categorys
{
    // public function __construct()
    // {
    //     $user = $_SESSION['user'] ?? [];
    //     if (!$user || $user['role'] != 'admin') {
    //         return header("location: " . ROOT_URL);
    //     }
    // }

    public function index()
    {
        $message = $_SESSION['message'] ?? '';
        unset($_SESSION['message']);
        $categories = (new Category)->all();
        return view('admin.categorys.list', compact('categorys','message'));
    }

    public function add()
    {
        return view('admin.categorys.add');
    }

    public function store()
    {
        $data = $_POST;
        (new Category)->create($data);
        $_SESSION['message'] = "Thêm mới dữ liệu thành công";
        header('location: ' . ADMIN_URL . '?ctl=listdm');
        die;
    }

    public function update()
    {
        $data = $_POST;
        (new Category)->update($data['id'], $data);
        $_SESSION['message'] = "Cập nhật dữ liệu thành công";
        header('location: ' . ADMIN_URL . '?ctl=editdm&id=' . $data['id']);
        die;
    }

    public function delete()
    {
        $id = $_GET['id'];
        (new Category)->delete($id);
        $_SESSION['message'] = "Xóa dữ liệu thành công";
        header('location: ' . ADMIN_URL . '?ctl=listdm');
        die;
    }
}