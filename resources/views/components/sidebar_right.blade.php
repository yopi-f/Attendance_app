   <div class="container-fluid"><!--1-->
     <div class="card mb-4" style="max-width: 350px;"><!--2-->
        <div class="bg-primary opacity-75 text-white px-3 py-2 shadow fw-bold rounded-top"><!--3-->
            書き込みのお知らせ
        </div><!--3-->
        @foreach ($reportsall as $report )
            <div class="card-body px-0 py-0"><!--4-->
                
                    <div class="card mb-2 shadow rounded"><!--5-->
                        <div class="card-body py-0 px-0"><!--6-->
                            <div class="d-flex justify-content-between align-items-center"><!--7-->
                              <div class="d-flex align-items-center gap-4"><!--8-->
                                @if ($report->flag == 'shareall')
                                    <div class="ms-2" style="min-width: 80px;">
                                        {{$report->user->name.'さんが追加しました。'}}
                                    </div>

                                    <div class="text-muted" style="min-width: 90x;">
                                        {{ $report->created_at }} 
                                    </div>
                                 @elseif ($report->flag == 'daily')   
                                    <div class="ms-2" style="min-width: 80px;">
                                        {{$report->user->name.'さんが追加しました。'}}
                                    </div>
                                    <div class="text-muted" style="min-width: 90px;">
                                        {{ $report->created_at }} 
                                    </div>
                                @endif 
                              </div><!--8-->
                                 <span class="badge bg-success me-2"></span>
                            </div><!--7-->
                        </div><!--6-->
                    </div><!--5-->
               
             </div><!--4-->
        @endforeach   
    </div><!--2-->
  </div><!--1-->