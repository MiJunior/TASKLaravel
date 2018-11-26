<div class="form-group">
    {!! Form::label('Name', 'Title') !!}
    {!! Form::text('title', null, ['class'=>'form-control', 'placeholder' => 'Title', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('Content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class'=>'form-control', 'placeholder' => 'Content', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('Tag', 'Tags') !!}
    {!! Form::text('tags', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!!Form::submit('Submit', ['class' => 'btn btn-primary form-control'])!!}
</div>