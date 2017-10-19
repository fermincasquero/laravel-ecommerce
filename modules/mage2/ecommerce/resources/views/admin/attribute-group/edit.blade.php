@extends('mage2-ecommerce::admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    Edit Attribute Group
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.attribute-group.update', $model->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">

                    @include('mage2-ecommerce::admin.attribute-group._fields')

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Update Attribute Group</button>
                            <a href="{{ route('admin.attribute-group.index') }}" class="btn">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection