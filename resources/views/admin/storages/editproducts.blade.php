@extends('admin.main')
@section('title','ورود کالا به نبار')
@section('body')
    <form action="{{route('edit.product.post',['id'=>$storage_products->id])}}" method="POST">
        @csrf
        <div class="col-md-4">

            <select name="storage_id" id="storage_id" class="form-control ">
                <option value=""></option>

                @foreach($storages as $st)
                    <option value="{{$st->id}}" @if($st->id==$storage_products->storage_id) selected @endif>{{$st->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <input type="number" placeholder="تعداد کالا" class="form-control" name="quantity" id="quantity" required  value="{{old('quantity',$storage_products->quantity)}}" >
        </div>
        <div class="col-md-2">
            <input type="number" placeholder="شناسه کالا" class="form-control" name="product_id" id="product_id" required value="{{old('product_id',$storage_products->product_id)}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">وضعیت :</label>
            <select class="form-control" name="status" id="status" >
                <option>انتخاب کنید</option>
                <option value="1" @if($storage_products->status==1) selected @endif>موجود</option>
                <option value="0" @if($storage_products->status==0) selected @endif >ناموجود</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">شرح :</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description',$storage_products->description)}}</textarea>
        </div>

        <input type="submit" class="btn btn-info" value="اعمال ویرایش">
    </form>
@endsection