//https://s3.amazonaws.com/dolartoday/data.json
$.getJSON("https://s3.amazonaws.com/dolartoday/data.json",function(data){
  console.log(data)
  $('#texto').html(data.USD.sicad2 + 'BS');
    });   