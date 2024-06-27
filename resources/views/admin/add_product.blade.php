<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style>
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .input_deg {
            padding: 15px;

        }

        label {
            display: inline-block;
            width: 250px;
            font-size: 18px !important;
            color: white !important;
        }

        input [type='text'] {
            width: 350px;
            height: 47px;
            border-radius: 10px;
            border: none;
            margin: 10px;
        }

        textarea {
            width: 450px;
            height: 80px;
        }
    </style>
</head>

<body>

    @include('admin.header')

    @include('admin.sidebar')

    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <h1 style="color: white;">Adicionar Produtos</h1>

                <div class="div_deg">

                    <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="input_deg">
                            <label for="">Nome Produto</label>
                            <input required type="text" name="title">
                        </div>
                        <div class="input_deg">
                            <label for="">Descrição Produto</label>
                            <textarea required name="description"></textarea>
                        </div>
                        <div class="input_deg">
                            <label for="">Preço</label>
                            <input type="text" name="price">
                        </div>
                        <div class="input_deg">
                            <label for="">Quantidade</label>
                            <input type="number" name="qty">
                        </div>
                        <div class="input_deg">
                            <label for="">Categoria</label>

                            <select name="category" required>
                                <option></option>

                                @foreach ($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="input_deg">
                            <label for="">Imagem Produto</label>
                            <input type="file" name="image">
                        </div>
                        <div class="input_deg">
                            <input class="btn btn-success" type="submit" value="Adicionar Produto">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
</body>

</html>