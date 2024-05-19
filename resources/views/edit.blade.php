<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Edit</h1>
    <div class="w-80 d-flex justify-content-center">
        <form action="/edit1/{{ $company->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="Company" class="form-label">Company</label>
                <input type="text" class="form-control" id="Company" aria-describedby="emailHelp" name="Company" value="{{ old('Company') }}">
                @error('Company')
                  <p style="color: red;">The Company field is required.</p>
                @enderror
                </div>
                <div class="mb-3">
                  <label for="Capital" class="form-label">Capital</label>
                  <input type="text" class="form-control" id="Capital" aria-describedby="emailHelp" name="Capital" value="{{ old('Capital') }}">
                  @error('Capital')
                    <p style="color: red;">The Capital field is required.</p>
                  @enderror
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>