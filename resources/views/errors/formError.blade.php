@if($errors -> any())
    <ul class="alert alert-danger" style="margin-top: 10px;">
        @foreach($errors -> all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif