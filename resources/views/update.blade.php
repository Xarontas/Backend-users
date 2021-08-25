<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @forelse($errors->all() as $message)
        <div>{{ $message }}</div>
    @empty
        <p>No errors yet</p>
    @endforelse

    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>First Name
                <input type="text" name="first_name" value="{{ $profile->first_name }}">
            </label>
        </div>

        <div>
            <label>Last Name
                <input type="text" name="last_name" value="{{ $profile->last_name }}">
            </label>
        </div>

        <div>
            <label>Email
                <input type="text" name="email" value="{{ $profile->email }}">
            </label>
        </div>

        <div>
            <label>Date of birth
                <input type="date" name="dob" value="{{ $profile->dob }}">
            </label>
        </div>

        <div>
            <label for="">Certificate PDF
                <input type="file" name="certificate" accept=".pdf">
            </label>
        </div>

        <div>
            <label for="">Profile Image (JPG,PNG)
                <input type="file" name="profile_image" accept="image/png, image/jpeg">
            </label>
        </div>

        <div>
            <label>Terms of Service
                <input type="checkbox" name="tos">
            </label>
        </div>
        <button type="submit" name="save_btn">Save</button><a href="{{ route('store') }}"><button name="cancel_btn">Cancel</button></a><br>
    </form>
</body>
</html>