{{View:: make('title')}}
{{View:: make('menu')}}



<div class="container">
<h5>User Account</h5>
    
</div> <br>

<div class="container">
          <div class="bd-example-snippet bd-code-snippet "><div class="bd-example">
          <main>
          <table class="table table-striped ">

    @if(count($listofuser))
    <thead>
        <tr colspan="3">
    <form method='get' action="/userlist">
    <input  class="search border rounded-3" value="{{request()->input('q')}}" name="q">
    <button type="submit" class="btn border-none"><span class="material-symbols-rounded align-text-bottom">search</span></button>
</form></tr>
    <tr>
        <th></th>
        <th>Full name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Created Date</th>
        <th>Updated Date</th>
        <th></th>
    <tr>
</thead>
<tbody>
    @foreach($listofuser as $user)
    <tr>
        <td><span class="material-symbols-outlined">
                account_circle
                </span></td>
        <!--<td>{{$loop->iteration}}</td>-->
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
       <td>{{$user->gender}}</td>
        <td>{{$user->created_at ? date('D, d F Y',strtotime($user->created_at)) : 'N/A'}}</td>
        <td>{{$user->updated_at ? date('D, d F Y',strtotime($user->updated_at)) : 'N/A'}}</td>
        <td><a href="/userview?rid={{$user->id}}"><span class="material-symbols-outlined">
                fullscreen
                </span></a>&nbsp;&nbsp;
        <a href="/useredit?rid={{$user->id}}"> <span class="material-symbols-outlined">
                  edit
                  </span></a>&nbsp;&nbsp;
        <a href="/userdelete?rid={{$user->id}}"> <span class="material-symbols-outlined">
                delete
                </span></a>
</td>
</tr>
@endforeach

<style>
.h-5 {
height: 1em;
}

.flex {
 text-align: center;
 width: 100%;
}

 .leading-5 {
 padding: 0.8em;
}
 </style>
 <tr class="page border-light" ><td  colspan=7><br>
    
 {{ $listofuser->appends(['q' => Request::get('q')])->links()}}
</td></tr>


</tbody>
@else
<td>No record found</td>
@endif
</table>
</main>
</div>


{{View:: make('footer')}}




