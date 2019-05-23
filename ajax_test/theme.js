function ajax(){
  var id = $('#identifiant').val();
  var mdp = $('#mdp').val();

  $.ajax({
    url : 'ajax.php',
    type : 'POST',
    data : {
      'id' : id,
      'mdp' : mdp,
    },
    success : function (data){
      if (data == 0) {
        $('.affprof').hide();
      }
      else {
        affiche_json();
      }
    }
  });
}


function affiche_json(){
  $('.affprof').show();
  $.getJSON('http://localhost/ajax_connect_example/result.json', function(data){
        var json = JSON.stringify(data);
        json = JSON.parse(json);
        json = json[0];
        $('#resid').text(json['login']);
        $('#resmdp').text(json['mdp']);
        $('#resdesc').text(json['description']);
  });
}
