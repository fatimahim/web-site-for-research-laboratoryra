@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Entrez le code d'activation envoyez sur votre email</div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if ($error = Session::get('error'))
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endif
            <form method="POST" action="/activate">
                @csrf
                <div class="form-group">
                    <label for="activation_code">code d'activation</label>
                    <input type="text" name="activation_code" id="activation_code" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection