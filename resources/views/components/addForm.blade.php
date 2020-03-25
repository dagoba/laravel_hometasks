{!! Form::open(['route' => 'finance.store', 'method' => 'post']) !!}

{{ Form::label('type', 'Choose Type', ['class' => 'control-label']) }}
{{ Form::select('type', ['income' => 'Income', 'costs' => 'Costs'], null, ['class' => 'form-control form-control-lg'])  }}

{{ Form::label('name', 'Income/Costs Name', ['class' => 'control-label mt-3']) }}
{{ Form::text('name', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Enter Income/Costs Name']) }}

{{ Form::label('summ', 'Sum', ['class' => 'control-label mt-3']) }}
{{ Form::text('summ', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Enter Sum']) }}

{{ Form::label('source', 'Source/Purpose', ['class' => 'control-label mt-3']) }}
{{ Form::text('source', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Enter Source/Purpose']) }}

{{ Form::label('comment', 'Comment', ['class' => 'control-label mt-3']) }}
{{ Form::textarea('comment', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Enter Comment']) }}

<div class="row justify-content-center mt-3">
    <div class="col-sm-6">
        <button class="btn btn-block btn-success" type="submit">Add Incone/Costs</button>
    </div>
</div>

{!! Form::close() !!}