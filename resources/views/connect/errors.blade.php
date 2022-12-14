@if (Session::has('message'))
    <div class="my-1">
        <div class="alert alert-{{ Session::get('type-alert')}}">
            {{ Session::get('message') }}
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <script>
                $('.alert').slideDown();
                setTimeout(() => {
                    $('.alert').slideUp();
                }, 8000);
            </script>
        </div>
    </div>
@endif
