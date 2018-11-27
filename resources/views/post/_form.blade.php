<div class="form-group">
    {!! Form::label('Name', 'Title') !!}
    {!! Form::text('title', null, ['class'=>'form-control', 'placeholder' => 'Title', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('Content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class'=>'form-control', 'placeholder' => 'Content', 'required']) !!}
</div>
<div id="tagForm">
    <div class="form-group" id="tagField">
        {!! Form::label('Tag', 'Tag:') !!}
        {!! Form::text('tags[]', null, ['class'=>'form-control', 'required']) !!}
    </div>
</div>
<button type="button" class="btn btn-success" id="addTagField">+</button>
<div class="form-group">
    {!!Form::submit('Submit', ['class' => 'btn btn-primary form-control'])!!}
</div>
