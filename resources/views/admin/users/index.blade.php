@foreach($users as $user)

	<li>{!! $user['first_name'] !!} - {!! $user['last_name']  !!} from {!! $user['location'] !!}</li>



@endforeach
<li style="list-style: none;">We will get marry together </li>