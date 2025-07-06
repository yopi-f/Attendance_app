@extends('index.layouts')
  <!-- メインカード -->
@section('title', '日報登録')

@section('content')
  
  
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h2>{{ $details_info->user->name.'さんの日報' }}</h2>        
        <div class="mt-3 badge bg-secondary notification badge " style="font-size:16px;">日付</div>
          <div class="d-flex justify-content-center form-control my-3 mx-0 rounded-lg" style="width:200px;">{{ $details_info->clock_in->format('Y-m-d H:i') }}</div>
          <div class="mt-3 badge bg-secondary notification badge" style="font-size:16px;">内容</div>
          <div class="form-control form-control-lg my-3 w-50  rounded-lg" style="white-space:pre-wrap;">{{ $details_info->body }}</div>
          @if ($details_info->user_id == auth()->id())
             <div class="d-flex justify-content-center mt-4 gap-5"> 
                <form action="{{ route('attendance.edit',$details_info->id) }}" method="GET">
                    <button type="submit" class="btn btn-primary my-2">編集</button>
                </form>  
                <form action="{{ route('attendance.destroy',$details_info->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger my-2">削除</button>
                </form>
             </div>     
          @endif
     </div>

@endsection