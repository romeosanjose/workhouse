$(document).ready(function(){

  getAll();

  function sendAjax(keys='',action='property'){
     action = (keys == '')? 'property': action;

    $.ajax({url: "/" + action + "/" + keys, success: function(result){
      //  $("#div1").html(result);
        setTable(result);
     }});
  }

  function setTable(result)
  {
      $('tbody').html('');
      var td = '';
      $.each(result.data,function(k, v){
        td = td + '<tr><td>' + v.name + '</td>' + '<td>' + v.price + '</td>' + '<td>' + v.bedrooms + '</td>' + '<td>' + v.bathrooms + '</td>' + '<td>' + v.storeys + '</td>' + '<td>' + v.garages + '</td></tr>';
      });
      console.log(td);
      $('tbody').html(td);
  }

  function getAll(){
    sendAjax('','property');
  }

  $('#name').keyup(function(){
    sendAjax($('#name').val(),'/name');
  });

  $('#price2').keyup(function(){
    sendAjax($('#price1').val()+'/'+$('#price2').val(),'property/price');
  });

  $('#bedrooms').keyup(function(){
    sendAjax($('#bedrooms').val(),'property/bedrooms');
  });

  $('#bathrooms').keyup(function(){
    sendAjax($('#bathrooms').val(),'property/bathrooms');
  });

  $('#storeys').keyup(function(){
    sendAjax($('#storeys').val(),'property/storeys');
  });

  $('#garages').keyup(function(){
    sendAjax($('#garages').val(),'property/garages');
  });





});
