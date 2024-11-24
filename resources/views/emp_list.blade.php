<link rel="stylesheet" href="{{ asset('asset/css/table.css') }}" />
<p>Resize window to see different layouts.</p>

<div class="list">
  <ul>
  <li> ID</li>
    <li> Name</li>
    <li>User Name</li>
    <li>Email</li>
    <li>Phone</li>
    <li>Edit</li>
    <li>Delete</li>
  </ul>
@foreach($var_get_data as $var_data)
  <ul>
  <li data-label="id">{{$var_data['id']}}</li>
    <li data-label="first name">{{$var_data['name']}}</li>
    <li data-label="user name">{{$var_data['username']}}</li>
    <li data-label="email">{{$var_data['email']}}</li>
    <li data-label="number">{{$var_data['phone']}}</li>
    <li><a href="edit/{{$var_data['id']}}">Edit</a></li>
    <li><a href="delete/{{$var_data['id']}}">Delete</a></li>
  </ul>
@endforeach

</div>