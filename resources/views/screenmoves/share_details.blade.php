@extends('index.layouts')
  <!-- メインカード -->
@section('title', '全体共有登録')

@section('content')

    <div class="d-flex justify-content-start flex-column align-items-center">
        <h2>{{ $details_info->user->name.'さんの共有' }}</h2>
    </div> 

    <!--日付入力-->
    <div class="d-flex align-items-center mx-4 gap-3">
        <div class="badge bg-secondary notification badge ms-2" style="font-size:16px;">日付</div>
        <div class="form-control w-25 my-3 rounded-lg">{{ $details_info->clock_in->format('Y-m-d H:i') }}</div>
    </div>    
    <!--タイトル入力-->
    <div class="d-flex align-items-center mx-4 gap-2">
        <div class="badge bg-secondary notification badge" style="font-size:16px;">タイトル</div>
        <div class="form-control w-25 my-3 rounded-lg">{{$details_info->title}}</div> 
    </div> 
    <!--内容入力--> 
    <div class="d-flex align-items-center mx-4 gap-4"> 
        <div class="mt-3 badge bg-secondary notification badge" style="font-size:16px;">内容</div>
         <div class="d-flex justify-content-center flex-column align-items-center">      
           <textarea class="form-control my-4 rounded-lg" rows="7" readonly 
                     style="resize:horizontal; width:600px; white-space: pre-wrap;">{{ $details_info->body }}
           </textarea>         
              <div class="d-flex justify-content-center mt-4 me-5 gap-5"> 
                    <form action="{{ route('attendance.edit',$details_info->id)  }}" method="GET"> 
                            <button type="submit" class="btn btn-primary">編集</button> 
                    </form>  
                    <form action="{{ route('attendance.destroy',$details_info->id)  }}" method="POST"> 
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">削除</button> 
                    </form>  
                </div>     
          </div>
       </div>
     </div>    
@endsection