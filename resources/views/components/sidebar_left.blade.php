   <div class="container-fluid"><!--1-->
     <div class="card mb-4" style="max-width: 350px;"><!--2-->
        <div class="bg-primary opacity-75 text-white px-3 py-2 shadow fw-bold rounded-top"><!--3-->
            ログイン日時
        </div><!--3-->
        @foreach ($usersall as $userone )
            <div class="card-body px-0 py-0"><!--4-->
                
                    <div class="card mb-2 shadow rounded"><!--5-->
                        <div class="card-body py-2 px-1"><!--6-->
                            <div class="d-flex justify-content-between align-items-center"><!--7-->
                              <div class="d-flex align-items-center gap-4"><!--8-->
                                 <div class="fw-bold ms-2" style="min-width: 90px;">
                                 {{ $userone->name.'さん' }}
                                 </div>
                                 <div class="text-muted" style="min-width: 90px;">
                                  {{ $userone->last_login_at }} 
                                 </div>
                              </div><!--8-->
                                 <span class="badge bg-success me-2"></span>
                            </div><!--7-->
                        </div><!--6-->
                    </div><!--5-->
               
             </div><!--4-->
        @endforeach   
    </div><!--2-->
  </div><!--1-->