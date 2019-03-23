@extends('...layouts.layout')

@section('plan_add')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card">
  <div class="card-body">
    <h4 class="card-title">企画作成</h4>
    <form action="{{ route('plan_create') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="kikakumei">企画名</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="kikakumei" placeholder="企画名" name="planName">
        </div>
      </div>
      <div class="form-group">
        <label for="kikakusetumei">企画説明</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="kikakusetumei" placeholder="企画説明" name="planDescription">
        </div>
      </div>
      <div class="form-group">
        <label for="sakuseisyamei">作成者名</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="sakuseisyamei" placeholder="作成者名" name="createUser">
        </div>
      </div>
      <div class="form-group">
        <label for="sakuseisyamei">編集キー</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="sakuseisyamei" placeholder="編集キー" name="editKey">
        </div>
      </div>
      <input type="submit" value="投稿">
    </form>
  </div>
</div>
@endsection
