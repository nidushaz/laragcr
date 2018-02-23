

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Start Date</label>
                <div class="input-group">
                    <input type="text" required="required" class="form-control" placeholder="mm/dd/yyyy" id="start-event" name="start-event" value="@if(@isset($id)){{$id->getEventStartDate()->format('d/m/Y')}}@endif">
                    <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>End Date</label>
                <div class="input-group">
                    <input type="text" required="required" class="form-control" placeholder="mm/dd/yyyy" id="end-event" name="end-event" value="@if(@isset($id)){{$id->getEventEndDate()->format('d/m/Y')}} @endif">
                    <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                </div>
            </div>
        </div>
    </div>
