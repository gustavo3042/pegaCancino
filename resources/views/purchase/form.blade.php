<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('provider_id') }}
            {{ Form::text('provider_id', $purchase->provider_id, ['class' => 'form-control' . ($errors->has('provider_id') ? ' is-invalid' : ''), 'placeholder' => 'Provider Id']) }}
            {!! $errors->first('provider_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $purchase->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('purchase_date') }}
            {{ Form::text('purchase_date', $purchase->purchase_date, ['class' => 'form-control' . ($errors->has('purchase_date') ? ' is-invalid' : ''), 'placeholder' => 'Purchase Date']) }}
            {!! $errors->first('purchase_date', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tax') }}
            {{ Form::text('tax', $purchase->tax, ['class' => 'form-control' . ($errors->has('tax') ? ' is-invalid' : ''), 'placeholder' => 'Tax']) }}
            {!! $errors->first('tax', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $purchase->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $purchase->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('picture') }}
            {{ Form::text('picture', $purchase->picture, ['class' => 'form-control' . ($errors->has('picture') ? ' is-invalid' : ''), 'placeholder' => 'Picture']) }}
            {!! $errors->first('picture', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>