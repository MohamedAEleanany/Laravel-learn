<div>
   <h1>Welcome Job Board</h1>
   <?php
   foreach ($JobData as $key => $value) {
    # code...
   }
   ?>
   @foreach ($JobData as  $value )
    <div>
        {{ $value['Title'] }}
    </div>
   @endforeach
</div>
