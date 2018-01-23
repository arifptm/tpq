<div class="box-body" style="min-height:200px;">
  <table class="table table-bordered">
    <thead>
      <tr>              
        <th>NIS</th>          
        <th>Nama</th>          
        <th>NonAktif</th>
      </tr>
    </thead>            

    @foreach($students as $student)
      <tr>
        <td> {{ $student->id }} </td>
        <td> {{ $student->fullname }} </td>
        <td> {{ $student->stop_date }} </td>
      </tr>
    @endforeach

  </table>
</div>        

<div class="box-footer clearfix">        
</div>