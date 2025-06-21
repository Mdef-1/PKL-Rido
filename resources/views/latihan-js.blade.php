@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Latihan JavaScript</h1>
        <button id="alertButton">Buttons</button>
    </div>
@endsection

@push('scripts')
<script>
 
        document.getElementById('alertButton')
        .addEventListener('click', function() { alert('Button was Clicked');

        })
</script>
@endpush