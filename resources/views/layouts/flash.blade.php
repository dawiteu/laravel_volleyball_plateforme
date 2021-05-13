@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block text-center position-absolute">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{$message}}</strong>
    </div>
@endif

{{-- MESSAGE ERRORS  (à choisir entre ce message sous forme de liste ou les messages d'erreurs en dessous de l'input) --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{  $error  }}</li>
            @endforeach
        </ul>
    </div>
@endif