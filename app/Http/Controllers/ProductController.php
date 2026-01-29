<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\CheckTimeAccess;
use Illuminate\Routing\Controllers\HasMiddleware;

class ProductController extends Controller
{

    // public static function middleware(): array
    // {
    //     return [CheckTimeAccess::class];
    // }

    //
    public function index()
    {
        $title = "Product List";
        return view("product.index", [
            "title" => $title,

            "products" => [
                [
                    "id" => 1,
                    'name' => "Product A",
                    'price' => 100,
                    'description' => "Description for Product A"
                ],
                [
                    "id" => 2,
                    'name' => "Product B",
                    'price' => 200,
                    'description' => "Description for Product B"
                ],
                [
                    "id" => 3,
                    'name' => "Product C",
                    'price' => 300,
                    'description' => "Description for Product C"
                ],
            ]
        ]);
    }

    public function getDetail($id = 123)
    {
        return view("product.product-detail", [
            "id" => $id
        ]);
    }

    public function create()
    {
        return view("product.add");
    }

    public function store(Request $request)
    {
        var_dump($request->input('name'));
    }

    public function login()
    {
        return view("product.login");
    }

    public function checkLogin(Request $request)
    {
        if ($request->input('username') == 'thanhtung' && $request->input('password') == '123456') {
            return "Login successful";
        } else {
            return "Login failed";
        }
    }
    public function register()
    {
        return view("product.register");
    }

    public function checkRegister(Request $request)
    {
        if ($request->input("username") == "Thanh Tùng" && $request->input("password") == $request->input("password_confirmation") && $request->input("mssv") == "0284367" && $request->input("class") == "67PM1" && $request->input("gender") == "nam") {
            return "Đăng ký thành công!";
        } else {
            return "Đăng ký thất bại!";
        }
    }
}
