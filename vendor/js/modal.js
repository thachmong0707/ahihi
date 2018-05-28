
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
      var picture = $(tds[5]).text();
      if(picture === ""){
        $("#user-avatar").prop("src","../../vendor/img/avatar.png");
      }else{
        $("#user-avatar").prop("src","../../vendor/img/"+picture);

      }
      $("#userDetailModal").modal();
      
    }); 
});