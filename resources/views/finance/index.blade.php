@extends('layouts.main')

@section('title', 'Financial Main Page')

@section('content')
<div style="width:50%; float:left;">
<h1>Incomes Notes</h1>
    @foreach($incomes as $income)
        <div class="row">
            <div class="cal-sm-12">
                <h3>{{ $income->name }}</h3>
                <span><b>Sum:</b> {{ $income->summ }}</span>
                <span><b>Source of income:</b> {{ $income->source }}</span>
                <p><b>Comment:</b> {{ $income->comment }}</p>
            </div>
        </div>
        <hr>
    @endforeach
</div>

<div style="width:50%; float:left;">
<h1>Costs Notes</h1>
    @foreach($costs as $cost)
        <div class="row">
            <div class="cal-sm-12">
                <h3>{{ $cost->name }}</h3>
                <span><b>Sum:</b> {{ $cost->summ }}</span>
                <span><b>Purpose of costs:</b> {{ $cost->source }}</span>
                <p><b>Comment:</b> {{ $cost->comment }}</p>
            </div>
        </div>
        <hr>
    @endforeach
    </div>
@endsection