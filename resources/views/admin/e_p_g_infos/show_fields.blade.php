<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $ePGInfo->id }}</p>
</div>

<!-- Epg Img Field -->
<div class="col-sm-12">
    {!! Form::label('epg_img', 'Epg Img:') !!}
    <p>{{ $ePGInfo->epg_img }}</p>
</div>

<!-- Alt Field -->
<div class="col-sm-12">
    {!! Form::label('alt', 'Alt:') !!}
    <p>{{ $ePGInfo->alt }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ePGInfo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ePGInfo->updated_at }}</p>
</div>

