@if($rejected_sender_ids->count() > 0)
    <div class="alert alert-danger">
        <strong>Notice</strong>
        <br>
        {!! trans('strings.sender_id.rejected_request') !!}
        <ul>
            @foreach($rejected_sender_ids as $rejected_sender_id)

                <li><span class="badge badge-primary mb-2">{!! $rejected_sender_id->rejected_name !!}</span> <a href="{!! route('sender.id.profile', $rejected_sender_id->sender->uuid) !!}" class="btn btn-xs btn-success"> {!! trans('buttons.sender_id.change') !!}</a></li>
                @endforeach
        </ul>
    </div>
@endif
