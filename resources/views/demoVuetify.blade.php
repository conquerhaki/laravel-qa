@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="height: 500px">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <change-color-button>
                    </change-color-button>

                    <status-board>
                    </status-board>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
