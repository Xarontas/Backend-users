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
                <input type="text" name="first_name" value="{{ @old('first_name') }}">
            </label>
        </div>

        <div>
            <label>Last Name
                <input type="text" name="last_name" value="{{ @old('last_name') }}">
            </label>
        </div>

        <div>
            <label>Email
                <input type="text" name="email" value="{{ @old('email') }}">
            </label>
        </div>

        <div>
            <label>Date of birth
                <input type="date" name="dob" value="1985-09-28">
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
        <button type="submit">Save</button>
    </form>
    <br>
    
    <hr>
    <div>
        <strong>USERS:</strong>  <a href="{{ route('index') }}"><button type="submit">Edit Profile</button></a><br>
        @forelse(\App\Models\User::all() as $user)
            {{ $user->name }}, id:{{$user->id}} | {{$user->Profile->first_name}} {{$user->Profile->last_name}}, user_id:{{$user->Profile->user_id}}<br>
        @empty
            No users
        @endforelse
    </div>
</body>
</html>