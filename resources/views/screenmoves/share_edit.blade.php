@extends('index.layouts')
  <!-- メインカード -->
@section('title', '全体共有登録')

@section('content')

    <div class="d-flex justify-content-start flex-column align-items-center">
        <h2>全体共有編集画面</h2>
    </div> 
 <form action="{{ route('attendance.update',$edit_info->id)  }}" method="POST">
        @csrf
        @method('PUT') 
    <!--日付入力-->
    <div class="d-flex align-items-center mx-4 gap-3">
        <div class="badge bg-secondary notification badge ms-2" style="font-size:16px;">日付</div>
        <input type="datetime-local" name="datetime" value="{{ $edit_info->clock_in->format('Y-m-d\TH:i') }}">
    </div>    
    <!--タイトル入力-->
    <div class="d-flex align-items-center mx-4 gap-2">
        <div class="badge bg-secondary notification badge" style="font-size:16px;">タイトル</div>
        <input type="text" name="title" value="{{$edit_info->title}}" class="form-control w-25 my-3 rounded-lg"> 
    </div> 
    <!--内容入力--> 
    <div class="d-flex align-items-center mx-4 gap-4"> 
        <div class="mt-3 badge bg-secondary notification badge" style="font-size:16px;">内容</div>
         <div class="d-flex justify-content-center flex-column align-items-center">      
           <textarea class="form-control my-4 rounded-lg" rows="7" name="body"
                     style="resize:horizontal; width:600px; white-space: pre-wrap;">{{ $edit_info->body }}
           </textarea>         
              <div class="d-flex justify-content-center mt-4 me-5 gap-5"> 
                    <button type="submit" class="btn btn-primary">保存</button> 
              </div>     
          </div>
       </div>
     </div>
 </form>     
@endsection