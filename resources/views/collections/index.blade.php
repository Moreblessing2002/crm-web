@extends('layouts.app')

@section('content')

<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      <a class="btn btn-info" href="{{ route('collection.item.create', $collection->slug) }}">
        <i class="fas fa-plus"></i> New {{ $collection->name }}
      </a>
      <a class="btn btn-secondary" href="#">
        <i class="fas fa-cog"></i> Edit collection
      </a>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--7">
  <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h3 class="mb-0">{{ str_plural($collection->name) }}</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
              @foreach($collection->fieldsVisible('list') as $field)
                <th scope="col">{{ $field->label }}</th>
              @endforeach
              </tr>
            </thead>
            <tbody>
            @foreach($collection->items as $item)
              <tr>
              @foreach($collection->fieldsVisible('list') as $field)
                <td>{{ $item->data($field->name) }}</td>
              @endforeach
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
