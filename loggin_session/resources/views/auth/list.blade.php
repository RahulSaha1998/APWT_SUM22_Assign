<table border="1">
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>email</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td><a href="{{route('dashboard.details',['id'=>$user->id,'name'=>$user->name])}}">{{$s->name}}</a></td>
                <td>{{$user->id}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
    </table>