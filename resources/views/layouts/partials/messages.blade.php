{{-- LISTAR ERRORES --}}
@if(isset($errors) && count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

@if(Session::get('success', false))
    @php
        $data = Session::get('success');
    @endphp
    @if(is_array($data))

        @foreach($data as $message)
            <div class="alert alert-success }}" role="alert">
                 {{ $message }}
            </div>
        @endforeach
    @else
        <div class="alert alert-success }}" role="alert">
            {{ $data }}
        </div>
    @endif

@endif
