<style>
.white
{
background-color:white;
}


.blue{
background-color:blue;
}


button {
border-radius:10px;
}

</style>
<body>

<table style="width:100%">
  <tr>
    <td>Gear 1</td>	
    <td><button type="button" id="1" class="white">On</button></td>
  </tr>
  <tr>
    <td>Gear 2</td>
    <td><button type="button"  id="2" class="white">On</button></td>
  </tr>
  <tr>
    <td>Gear 3</td>
    <td><button type="button"  id="3" class="white">On</button></td>
  </tr>
   <tr>
    <td>Gear 4</td>
    <td><button type="button"  id="4" class="white">On</button></td>
  </tr>
  <span></span>
</table>





             
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <script type="text/javascript">

      $('button').click(function  () {
      	if ($(this).html()=='On') {
      		$(this).html('Off');
      	$(this).removeClass('white');
      	$(this).addClass('blue');
        $url = "txt.php";
		
		txt = '';
		$.each( $('button'), function(i, nappula) {
			html = $(nappula).html();
			id = $(nappula).attr('id');
        txt += id + ' ' + html + '\r\n';
});
        
        console.log(txt);
        $.post("txt.php",{suggest:txt},function(result){
     // $("span").html(result);

    });
      	
      	}
      	 else{
      	 	$(this).html('On');
      	$(this).removeClass('blue');
      	$(this).addClass('white');
        $url = "txt.php";
        	txt = '';
		$.each( $('button'), function(i, nappula) {
			html = $(nappula).html();
			id = $(nappula).attr('id');
        txt += id + ' ' + html + '\r\n';
		});
        console.log(txt);
        $.post("txt.php",{suggest:txt},function(result){
          console.log("got result = "+result);
     // $("span").html(result);
    });
        
      	 };
      	
      })

      </script>
</body>