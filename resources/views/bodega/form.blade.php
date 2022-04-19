<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $bodega->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('CodigoBarras') }}
            {{ Form::text('barcode', $bodega->barcode, ['class' => 'form-control' . ($errors->has('barcode') ? ' is-invalid' : ''), 'placeholder' => 'Barcode']) }}
            {!! $errors->first('barcode', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Codigocolor') }}
            {{ Form::text('color', $bodega->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stock') }}
            {{ Form::text('stock', $bodega->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <!--

        <div class="form-group">
            {{ Form::label('totalObillos') }}
            {{ Form::text('totalObillos', $bodega->totalObillos, ['class' => 'form-control' . ($errors->has('totalObillos') ? ' is-invalid' : ''), 'placeholder' => 'Totalobillos']) }}
            {!! $errors->first('totalObillos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('image') }}
            {{ Form::text('image', $bodega->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('brand') }}
            {{ Form::text('brand', $bodega->brand, ['class' => 'form-control' . ($errors->has('brand') ? ' is-invalid' : ''), 'placeholder' => 'Brand']) }}
            {!! $errors->first('brand', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    -->

        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $bodega->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <!--
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $bodega->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    -->

    <input type="hidden" name="status" value="1" id="status" class="form-control">

      
    <label for="category_id">Categoria</label>
    <div class="form-group">
    <select class="form-control" name="category_id" id="category_id">

       
        @foreach($most as $productos)

       
        
    <option value="{{$productos->id}}">{{$productos->name}} </option>

        @endforeach

    </select>

</div>


<label for="provider_id">Proveedor</label>
<div class="form-group">
    <select class="form-control" name="provider_id" id="provider_id">

        @foreach($mostrar as $provider)
    <option value="{{$provider->id}}">{{$provider->name}} </option>

        @endforeach

    </select>

</div>
  
        


<!--
        <div class="form-group">
            {{ Form::label('category_id') }}
            {{ Form::text('category_id', $bodega->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('provider_id') }}
            {{ Form::text('provider_id', $bodega->provider_id, ['class' => 'form-control' . ($errors->has('provider_id') ? ' is-invalid' : ''), 'placeholder' => 'Provider Id']) }}
            {!! $errors->first('provider_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    -->

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
