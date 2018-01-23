<script>
$datatable = $('#students-data').DataTable({
  dom: 'Bfrtip',
  buttons: ['pdf','excel'],    
  processing: true,
  serverSide: true,
  responsive: true,
  autoWidth : false,
  pageLength : 15,
  order: [ 0, "desc" ],
  ajax: '/data/students/default/all/1',
  columns: [
    { data: 'id', name: 'id', visible: false },
    { data: 'formatted_registered_date', name: 'registered_date', searchable: false, className: 'hidden-xs hidden-sm'},         
    { data: 'institution.name', name: 'institution.name', orderable: false, visible: false}, 
    { data: 'image', name: 'image', orderable: false}, 
    { data: 'name_href', name: 'fullname'}, 
    // { data: 'gender_x', name: 'gender'},
    { data: 'status', name: 'status', orderable: false, className: 'hidden-sm hidden-xs'},
    { data: 'actions', name: 'actions', orderable: false, searchable: false}
  ],
  createdRow: function(row, data, index) {
    $(row).addClass('row'+data.id)
  },
  language: {        
    'url': '/assets/dt.indonesian.json'
  }
});
</script> 