<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $latestAnnouncementsInfo->id }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $latestAnnouncementsInfo->title }}</p>
</div>

<!-- Content Field -->
<div class="col-sm-12">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $latestAnnouncementsInfo->content }}</p>
</div>

<!-- Cover Front Image Field -->
<div class="col-sm-12">
    {!! Form::label('cover_front_image', 'Cover Front Image:') !!}
    <p>{{ $latestAnnouncementsInfo->cover_front_image }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $latestAnnouncementsInfo->status }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $latestAnnouncementsInfo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $latestAnnouncementsInfo->updated_at }}</p>
</div>

