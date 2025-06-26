<header>
  <!-- ナビゲーションバー -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom mb-4 shadow-sm">
    <div class="container d-flex justify-content-between align-items-center gap-3">
      <div class="d-flex justify-content-start align-items-center w-50 gap-2"> 
          <span class="navbar-brand">日報・全体共有管理アプリ</span>
          <a class="btn btn-dark" href="{{ route('dailyreport.createpage')}}">日報の追加</a>
          <a class="btn btn-dark" href="{{ route('shareall.createpage') }}">全体共有事項の追加</a>
      </div> 
      <div class="d-flex justify-content-end flex-wrap  gap-2 ">
          <a class="btn btn-outline-primary" href="{{ route('attendance.index') }}">TOP</a>
          <a class="btn btn-outline-primary" href="#">プロフィール編集</a>
          <a class="btn btn-outline-primary" href="#">CSV出力</a>
          <a class="btn btn-outline-danger" href="{{ route('login')}}">ログアウト</a>
          <a class="btn btn-outline-secondary" href="#">ヘルプ</a>
      </div>
    </div>
  </nav>
</header>