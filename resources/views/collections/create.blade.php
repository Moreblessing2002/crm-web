@extends('layouts.app')

@section('content')

<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      <a class="btn btn-default" href="{{ route('collection.item.index', $collection->slug) }}">
        <i class="">icon</i> All {{ str_plural($collection->name) }}
      </a>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--7">
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h3 class="mb-0">{{ str_plural($collection->name) }}</h3>
        </div>
        <form>
        @foreach($collection->fieldsVisible('create') as $field)
          @include("fields.$field->component.create")
        @endforeach
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
