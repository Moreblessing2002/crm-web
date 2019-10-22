<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <h5>{{ $field->label }}</h5>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <input 
        type="text"
        class="form-control"
        name="{{ $field->name }}"
        placeholder="{{ $field->placeholder }}">
    </div>
  </div>
</div>