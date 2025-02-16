<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $internetPromotionsInfo->id }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $internetPromotionsInfo->title }}</p>
</div>

<!-- Content Field -->
<div class="col-sm-12">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $internetPromotionsInfo->content }}</p>
</div>

<!-- Cover Front Image Field -->
<div class="col-sm-12">
    {!! Form::label('cover_front_image', 'Cover Front Image:') !!}
    <p>{{ $internetPromotionsInfo->cover_front_image }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $internetPromotionsInfo->status }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $internetPromotionsInfo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $internetPromotionsInfo->updated_at }}</p>
</div>

