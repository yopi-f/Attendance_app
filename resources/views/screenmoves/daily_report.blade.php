@extends('index.layouts')
  <!-- メインカード -->
@section('title', '日報登録')

@section('content')
  <form action="{{ route('attendance.store')  }}" method="POST">
    @csrf
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h2>日報登録画面</h2>
        
        <div class="mt-3 badge bg-secondary notification badge " style="font-size:16px;">日付</div>
          <input type="date" name="datetime" value ="{{ $now->format("Y-m-d") }}" class="form-control w-25 my-3 rounded-lg">
          <div class="mt-3 badge bg-secondary notification badge" style="font-size:16px;">内容</div>
          <textarea name="body" placeholder="内容を入力してください。" rows="7" 
          class="form-control form-control-lg my-3 w-75  rounded-lg"></textarea>
          <input type="hidden" name="flag" value="daily">
          <button type="submit" class="btn btn-primary my-2">保存</button> 
     </div>
   </form>   
@endsection