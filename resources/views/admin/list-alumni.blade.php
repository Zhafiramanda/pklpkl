@include('layouts.navigation')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    
    
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
            min-width: 100%;
        }

        .table-title h2 {
            margin: 8px 0 0;
            font-size: 22px;
        }


        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child {
            width: 130px;
        }

        table.table td a {
            color: #a0a5b1;
            display: inline-block;
            margin: 0 5px;
        }

        table.table td a.view {
            color: #03A9F4;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
        }

        table.table td i {
            font-size: 19px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 95%;
            width: 30px;
            height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 30px !important;
            text-align: center;
            padding: 0;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 6px;
            font-size: 95%;
        }

        #category {
            border: 2px solid #2DCC70;
        }

        input[type="search"] {
            border: 2px solid #2DCC70;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
    
            $('#category').on('change', function () {
                filterTable();
            });
    
            $('input[name="search"]').on('input', function () {
                filterTable();
            });
    
            function filterTable() {
                var category = $('#category').val().toLowerCase();
                var searchTerm = $('input[name="search"]').val().toLowerCase();
    
                $('tbody tr').each(function () {
                    var rowText = $(this).find('td:eq(' + categoryIndex[category] + ')').text().toLowerCase();
    
                    if (rowText.includes(searchTerm)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
            var categoryIndex = {
                'name': 1,
                'join year': 3,
                'leave year': 4
            };

        });
    </script>    
</head>

<body class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">       
    @vite(['resources/css/app.css','resources/js/app.js'])
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-container">
                    <div class="table-title">
                        <div class="col-sm-8">
                            <h2>Admin <b>Management Akun Alumni</b></h2>
                        </div>
                        <form class="flex items-center" style="margin-top: 20px;">
                            <select id="category"
                                class="bg-gray-50 border border-gray-300 pl-5 text-green-600 text-sm rounded-full w-1/5 focus:ring-green-500 focus:border-green-500 block p-2.5">
                                <option selected>Categories</option>
                                <option value="name">Name</option>
                                <option value="join year">Join Year</option>
                                <option value="leave year">Leave Year</option>
                            </select>

                            <div class="w-4"></div>
                            
                            <div class="relative w-4/5">
                                <input type="search" name="search" placeholder="Search..."
                                    class="bg-white w-full h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                    <svg class="h-4 w-4 fill-current"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                                        y="0px" viewBox="0 0 56.966 56.966"
                                        style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                        width="512px" height="512px">
                                        <path
                                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-container">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="name" onclick="sortTable('name')">Name <i class="fa fa-sort"></i></th>
                                <th>Email</th>
                                <th class="join-year" onclick="sortTable('join-year')">Join Year <i class="fa fa-sort"></i></th>
                                <th class="leave-year" onclick="sortTable('leave-year')">Leave Year <i class="fa fa-sort"></i></th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumnis as $alumni)
                                <tr>
                                    <td>{{ $alumni->id }}</td>
                                    <td>{{ $alumni->first_name }} {{ $alumni->last_name }}</td>
                                    <td>{{ $alumni->email }}</td>
                                    <td>{{ $alumni->join_year }}</td>
                                    <td>{{ $alumni->leave_year }}</td>
                                    <td>{{ $alumni->status }}</td>
                                    <td>
                                        <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Verifikasi</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>                        
                    </table>
                    <div class="clearfix">
                        {{$alumnis->links()}}
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
