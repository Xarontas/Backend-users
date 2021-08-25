<h1>PROFILES</h1>

@forelse(\App\Models\Profile::all() as $profile)
<a href="{{ route('update', $profile->id) }}"> {{$profile->first_name}}  {{$profile->last_name}}, id:{{$profile->id}} </a> <br>
@empty
 No users
@endforelse