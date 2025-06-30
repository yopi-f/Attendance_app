@extends('index.layouts')
  <!-- メインカード -->
@section('title', '全体共有登録')

@section('content')

    <div class="d-flex justify-content-start flex-column align-items-center">
        <h2>全体共有 登録画面</h2>
    </div> 
  <form action="{{ route('attendance.store')  }}" method="POST"> 
    @csrf
    <!--日付入力-->
    <div class="d-flex align-items-center mx-4 gap-3">
        <div class="badge bg-secondary notification badge ms-2" style="font-size:16px;">日付</div>
        <input type="date" name="datetime" value ="{{ $now->format("Y-m-d") }}" class="form-control w-25 my-3 rounded-lg">
    </div>    
    <!--タイトル入力-->
    <div class="d-flex align-items-center mx-4 gap-2">
        <div class="badge bg-secondary notification badge" style="font-size:16px;">タイトル</div>
        <input type="text" name="title" class="form-control w-25 my-3 rounded-lg">
    </div> 
    <!--内容入力--> 
    <div class="d-flex align-items-center mx-4 gap-4"> 
        <div class="mt-3 badge bg-secondary notification badge" style="font-size:16px;">内容</div>
        <div class="d-flex justify-content-center flex-column align-items-center">      
            <textarea name="body" placeholder="内容を入力してください。" rows="7" 
            class="form-control my-4 rounded-lg" style="resize:horizontal; width:600px;"></textarea>
            <button type="submit" class="btn btn-primary">送信</button> 
        </div>
    </div>
</form>  
@endsection