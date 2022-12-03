<style>
    form div{padding: 4px}
    input[type=text]{padding: 6px 12px; width: 250px}
    input[type=email]{padding: 6px 12px; width: 250px}
    input[type=password]{padding: 6px 12px; width: 250px}
    input[type=submit]{padding: 6px 12px}
</style>

<h1 style='padding: 4rem 0'>Авторизация</h1>
    <form method="POST">
        @csrf
        <div>
            <input type='email' required name='email' value="{{ old('email') }}" />
        </div>
        <div>
            <input type='password' required name='password' />
        </div>
        <div>
            <input type='submit' value='вход'/>
        </div>
    </form>
    <div style='padding: 12px'>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
