<div class="form-group">
    {{ Form::label('Title:') }}
    {{ Form::text('title') }}
    {{ Form::label('Body:') }}
    {{ Form::text('body') }}
    {{ Form::hidden('user_id', auth()->id()) }}
</div>


