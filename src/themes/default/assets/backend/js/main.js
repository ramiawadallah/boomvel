$("#checkAll").click(function () {
 	$('input:checkbox').not(this).prop('checked', this.checked);
});

$(document).ready(function() {
  var title = '';
  $("#title").bind('blur', function() {
    title = $(this).val();
        title = title.replace(/\s+/g,'-').replace(/[^a-zA-Z0-9-]/g,'').toLowerCase(); 
    $("#slug").val(title);
  });
});

$(document).ready(function() {
    var name = '';
  $("#name").bind('blur', function() {
    name = $(this).val();
        name = name.replace(/\s+/g,'-').replace(/[^a-zA-Z0-9-]/g,'').toLowerCase(); 
    $("#uri").val(name);
  });
});