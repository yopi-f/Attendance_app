

<div class="bg-primary opacity-75 text-white px-3 py-2 shadow fw-bold rounded-top"><!--3-->
全体共有一覧
</div><!--3-->

 @foreach ($shareall as $share )
    <div class="card-body px-0 py-0"><!--1-->
   
        <div class="card mb-2 shadow rounded btn btn-outline-secondary"><!--2-->
            <div class="card-body py-2 px-3"><!--3-->
               <a class="text-decoration-none text-dark" href="{{ route('attendance.show',['attendance' =>$share ->id]) }}">  
                <div class="d-flex justify-content-between align-items-center"><!--4-->
                    <div class="d-flex align-items-center gap-3"><!--5-->
                        <div class="fw-bold me-3" style="min-width: 90px;">     
                           {{ $share->user->name }}   
                        </div>
                        <div class="text-muted" style="min-width: 90px;">
                              {{ $share->title }} 
                        </div>
                        <div class="text-muted ms-4" style="min-width: 90px;">
                              {{ $share->body }} 
                        </div>
                    </div><!--5-->                    
                </div><!--4-->
              </a> 
            </div><!--3-->
        </div><!--2-->
    </div><!--1-->
 @endforeach 
     
  