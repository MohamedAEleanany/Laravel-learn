<div>
   <h1>Welcome Job Board</h1>
   @foreach ($JobData as  $value )
    <div>
        {{ $value['Title'] }}
    </div>
   @endforeach
</div>
