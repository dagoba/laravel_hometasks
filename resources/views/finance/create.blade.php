@extends('layouts.main')

@section('title', 'Add Income/Cost')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1>Add Income/Costs</h1>

            @component('components.addForm')
            @endcomponent
        </div>
    </div>

@endsection