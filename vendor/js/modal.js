
  $(document).ready(function(){
    var $currentData = null;
    $('table tbody tr').hover(function(){
      $currentData = $(this);
    })
    $('.showModal').click(function(){
      var tds = $currentData.children("td");
      $("#full-name").text($(tds[1]).text());
      $("#username").text($(tds[2]).text());
      $("#user-role").text($(tds[3]).text());
      $("#user-info").text($(tds[4]).text());
      $("#userDetailModal").modal();
      
    }); 
});