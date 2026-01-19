<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Product List</h1>
        <a href="{{ route('add') }}" class="btn">Add Product</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Laptop Dell XPS 13</td>
                <td>$999.99</td>
                <td>50</td>
                <td>Electronics</td>
                <td>
                    <a href="#" style="color: #007bff; margin-right: 10px;">Edit</a>
                    <a href="#" style="color: #dc3545;">Delete</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>iPhone 15 Pro</td>
                <td>$1,199.00</td>
                <td>30</td>
                <td>Electronics</td>
                <td>
                    <a href="#" style="color: #007bff; margin-right: 10px;">Edit</a>
                    <a href="#" style="color: #dc3545;">Delete</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Samsung Smart TV</td>
                <td>$799.00</td>
                <td>20</td>
                <td>Electronics</td>
                <td>
                    <a href="#" style="color: #007bff; margin-right: 10px;">Edit</a>
                    <a href="#" style="color: #dc3545;">Delete</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Nike Air Max</td>
                <td>$129.99</td>
                <td>100</td>
                <td>Shoes</td>
                <td>
                    <a href="#" style="color: #007bff; margin-right: 10px;">Edit</a>
                    <a href="#" style="color: #dc3545;">Delete</a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Coffee Maker</td>
                <td>$49.99</td>
                <td>75</td>
                <td>Home Appliances</td>
                <td>
                    <a href="#" style="color: #007bff; margin-right: 10px;">Edit</a>
                    <a href="#" style="color: #dc3545;">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>