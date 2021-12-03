@extends('Layout/app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Atencion') }}</div>
                <div class="card-body">
                    <div>
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Listo, correo enviado nuevamente!') }}
                            </div>
                        @endif
                        {{ __('Antes de seguir, revisa tu correo y da clic al enlace adjuntado') }}
                    </div>
                    <br>
                    <div>
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary  align-baseline">{{ __('Volver a enviar el correo electronico') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection