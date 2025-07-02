@extends('index.layouts')
  <!-- メインカード -->
@section('title', '出退勤一覧')

@section('content')
          @if (session()->has('success'))
           <span class="container-fluid w-25 d-flex justify-content-center alert alert-success py-0">{{ session()->get('success') }}</span>
          @endif
  <div class="container-fluid d-flex justify-content-between">  

         @include('components.sidebar_left')<!--（仮）サイドバー左(ログイン履歴)読み込み-->
   <div class="w-100 px-4 "><!--1-->
     <div class="card " style="width: 750px;"><!--2-->
        <div class="bg-primary opacity-75 text-white px-3 py-2   fw-bold rounded-top"><!--3-->
            日報一覧
        </div><!--3-->
          @foreach ($dailyall as $daily)
            <div class="card-body px-0 py-0"><!--4-->
                
                    <div class="card mb-2 shadow rounded"><!--5-->
                        <div class="card-body py-2 px-3"><!--6-->
                            <div class="d-flex justify-content-between align-items-center"><!--7-->
                              <div class="d-flex align-items-center gap-3"><!--8-->
                                 <div class="fw-bold" style="min-width: 90px;">
                                    
                                      {{ $daily->user->name }}
                                   
                                 </div>
                                 <div class="text-muted" style="min-width: 90px;">
                                    {{ $daily->body }}
                                 </div>
                              </div><!--8-->
                             
                            </div><!--7-->
                        </div><!--6-->
                    </div><!--5-->
               
             </div><!--4-->
             @endforeach 
            @include('sections.share')<!--（仮）全体共有一覧読み込み-->
        </div><!--2-->
     </div><!--1-->
      
       @include('components.sidebar_right')<!--（仮）サイドバー左(ログイン履歴)読み込み-->
       
   </div>    
    
@endsection     