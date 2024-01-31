{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Alumni</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Verifikasi Akun Alumni</div>

                    <div class="card-body">
                        <form action="{{ route('admin.verify-account', ['id' => $alumni->id]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="first_name">First Name:</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $alumni->first_name }}" required disabled>
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name:</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $alumni->last_name }}" required disabled>
                            </div>

                            <div class="form-group">
                                <label for="join_year">Join Year:</label>
                                <input type="text" class="form-control" id="join_year" name="join_year" value="{{ $alumni->join_year }}" required disabled>
                            </div>

                            <div class="form-group">
                                <label for="leave_year">Leave Year:</label>
                                <input type="text" class="form-control" id="leave_year" name="leave_year" value="{{ $alumni->leave_year }}" required disabled>
                            </div>

                            <div class="form-group">
                                <label for="status">Status:</label>
                                <input type="text" class="form-control" id="status" name="status" value="{{ $alumni->status }}" required disabled>
                            </div>

                            <button type="submit" class="btn btn-success">Verifikasi Akun</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html> --}}
