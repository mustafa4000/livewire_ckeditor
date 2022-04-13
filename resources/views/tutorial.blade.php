@extends('layouts.app')

@push('styles')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  @livewireStyles
@endpush

@push('scripts')
  @livewireScripts
@endpush

@section('content')
<div class="container">
    <h1>Turorial CKeditor</h1>
    <hr>
    @livewire('my-editor')
</div>
@endsection
