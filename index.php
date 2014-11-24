<!DOCTYPE html><html><head><style type="text/css">
.div-table{
  display:table;         
  width:auto;         
  background-color:#eee;         
  border:1px solid  #666666;         
  border-spacing:5px;/*cellspacing:poor IE support for  this*/
}
.div-table-row{
  display:table-row;
  width:auto;
  clear:both;
}
.div-table-col{
  float:left;/*fix for  buggy browsers*/
  display:table-column;         
  width:200px;         
  background-color:#ccc;  
}
.blue
{
       
  background:blue;  
}
button
{
       
  border-radius: 10px; 
}

.white
{
       
  background:white;  
}
</style>
<meta charset="utf-8">
<title>tyhjä</title>
</head>
<body>
<div class="divTable">
             <div class="headRow">
                <div class="divCell" style="position:absolute;
                top:10px; left:450px;">Vibra
                <br><button type="button" id="1" class="white">On</button><br><button type="button"  id="2" class="white">On</button><br><button type="button" id="3" class="white">On</button><br><button type="button" id="4" class="white">On</button></div>
                <div  class="divCell">Username</div>
                <div  class="divCell">Gear 1</div>
             </div>
            <div class="divRow">
                  <div class="divCell">Gear 2</div>
                <div class="divCell">Gear 3</div>
                <div class="divCell">Gear 4</div>
            </div>
            <span></span>

      </div>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <script type="text/javascript">

      $('button').click(function  () {
      	if ($(this).html()=='On') {
      		$(this).html('Off');
      	$(this).removeClass('white');
      	$(this).addClass('blue');
        $url = "txt.php";
        html = $(this).html();
        id = $(this).attr('id');
        txt = id + ' ' + html;
        console.log(txt);
        $.post("txt.php",{suggest:txt},function(result){
      $("span").html(result);

    });
      	
      	}
      	 else{
      	 	$(this).html('On');
      	$(this).removeClass('blue');
      	$(this).addClass('white');
        $url = "txt.php";
        html = $(this).html();
        txt = $(this).attr('id') + ' ' + html;
        console.log(txt);
        $.post("txt.php",{suggest:txt},function(result){
          console.log("got result = "+result);
      $("span").html(result);
    });
        
      	 };
      	
      })

      </script>
</body>
</html>
