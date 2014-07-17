$(document).ready(function(){

    $("#shen").live("click",function(){

        $("#shen").siblings().css({"visibility":"hidden"});
        $("#shen").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro1").css({"visibility":"visible"})},1500);

    $("#shen").toggle(
        function(){

        $("#shen").animate({top:"93px", left:"167px"},1500);
        $("#intro1").css({"visibility":"hidden"});
        setTimeout(function(){$("#shen").siblings().css({"visibility":"visible"})},1500);
        setTimeout(function(){$('.intros').css({"visibility":"hidden"})},1500);
        
        },function(){
        $("#shen").siblings().css({"visibility":"hidden"});
        $("#shen").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro1").css({"visibility":"visible"})},1500);
        }
        )
    });

    $("#chiang").live("click",function(){

        $("#chiang").siblings().css({"visibility":"hidden"});
        $("#chiang").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro2").css({"visibility":"visible"})},1500);

    $("#chiang").toggle(
        function(){
        
        $("#intro2").css({"visibility":"hidden"});
        $("#chiang").animate({top:"95px", left:"437px"},1500);
        setTimeout(function(){$("#chiang").siblings().css({"visibility":"visible"})},1500);
        setTimeout(function(){$('.intros').css({"visibility":"hidden"})},1500);

        },function(){
        $("#chiang").siblings().css({"visibility":"hidden"});
        $("#chiang").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro2").css({"visibility":"visible"})},1500);

        }
        )
    }); 

    $("#tseng").live("click",function(){

        $("#tseng").siblings().css({"visibility":"hidden"});
        $("#tseng").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro3").css({"visibility":"visible"})},1500);

    $("#tseng").toggle(
        function(){
        
        $("#intro3").css({"visibility":"hidden"});
        $("#tseng").animate({top:"97px", left:"700px"},1500);
        setTimeout(function(){$("#tseng").siblings().css({"visibility":"visible"})},1500);
        setTimeout(function(){$('.intros').css({"visibility":"hidden"})},1500);

        },function(){
        $("#tseng").siblings().css({"visibility":"hidden"});
        $("#tseng").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro3").css({"visibility":"visible"})},1500);

        }
        )
    });     

    $("#hsiao").live("click",function(){

        $("#hsiao").siblings().css({"visibility":"hidden"});
        $("#hsiao").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro4").css({"visibility":"visible"})},1500);

    $("#hsiao").toggle(
        function(){

        $("#intro4").css({"visibility":"hidden"});
        $("#hsiao").animate({top:"92px", left:"954px"},1500);
        setTimeout(function(){$("#hsiao").siblings().css({"visibility":"visible"})},1500);
        setTimeout(function(){$('.intros').css({"visibility":"hidden"})},1500);

        },function(){
        $("#hsiao").siblings().css({"visibility":"hidden"});
        $("#hsiao").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro4").css({"visibility":"visible"})},1500);
        }
        )
    }); 

    $("#chen").live("click",function(){

        $("#chen").siblings().css({"visibility":"hidden"});
        $("#chen").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro5").css({"visibility":"visible"})},1500);

    $("#chen").toggle(
        function(){

        $("#intro5").css({"visibility":"hidden"});
        $("#chen").animate({top:"393px", left:"159px"},1500);
        setTimeout(function(){$("#chen").siblings().css({"visibility":"visible"})},1500);
        setTimeout(function(){$('.intros').css({"visibility":"hidden"})},1500);

        },function(){
        $("#chen").siblings().css({"visibility":"hidden"});
        $("#chen").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro5").css({"visibility":"visible"})},1500);
        }
        )
    });     

    $("#lee").live("click",function(){

        $("#lee").siblings().css({"visibility":"hidden"});
        $("#lee").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro6").css({"visibility":"visible"})},1500);

    $("#lee").toggle(
        function(){

        $("#intro6").css({"visibility":"hidden"});
        $("#lee").animate({top:"402px", left:"437px"},1500);
        setTimeout(function(){$("#lee").siblings().css({"visibility":"visible"})},1500);
        setTimeout(function(){$('.intros').css({"visibility":"hidden"})},1500);

        },function(){
        $("#lee").siblings().css({"visibility":"hidden"});
        $("#lee").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro6").css({"visibility":"visible"})},1500);
        }
        )
    }); 
    
    $("#chu").live("click",function(){

        $("#chu").siblings().css({"visibility":"hidden"});
        $("#chu").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro7").css({"visibility":"visible"})},1500);

    $("#chu").toggle(
        function(){

        $("#intro7").css({"visibility":"hidden"});
        $("#chu").animate({top:"402px", left:"697px"},1500);
        setTimeout(function(){$("#chu").siblings().css({"visibility":"visible"})},1500);
        setTimeout(function(){$('.intros').css({"visibility":"hidden"})},1500);

        },function(){
        $("#chu").siblings().css({"visibility":"hidden"});
        $("#chu").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro7").css({"visibility":"visible"})},1500);
        }
        )
    }); 

    $("#wu").live("click",function(){

        $("#wu").siblings().css({"visibility":"hidden"});
        $("#wu").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro8").css({"visibility":"visible"})},1500);

    $("#wu").toggle(
        function(){

        $("#intro8").css({"visibility":"hidden"});
        $("#wu").animate({top:"398px", left:"960px"},1500);
        setTimeout(function(){$("#wu").siblings().css({"visibility":"visible"})},1500);
        setTimeout(function(){$('.intros').css({"visibility":"hidden"})},1500);

        },function(){
        $("#wu").siblings().css({"visibility":"hidden"});
        $("#wu").animate({top:"220px", left:"500px"},1500);
        setTimeout(function(){$("#intro8").css({"visibility":"visible"})},1500);
        }
        )
    }); 
});

$a(document).ready(function(){

    var maxWidth = $a(window).width() * 0.17; 
    var maxHeight = $a(window).height() * 0.3;
    var ratio = 0;
    var w = $a(this).width();
    var h = $a(this).height();

    $a("#1_img").each(function() {   
      
    if( w > maxWidth ){
        $a(this).width( maxWidth);    
        $a(this).height(maxWidth); };  
    
    if( h > maxHeight ){ 
        $a(this).height(maxHeight);    
        $a(this).width(maxHeight); };
    });
 
    $a("#2_img").each(function() {   
   
    if( w > maxWidth ){
        $a(this).width( maxWidth);   
        $a(this).height(maxWidth); };  
    
    if( h > maxHeight ){ 
        $a(this).height(maxHeight);     
        $a(this).width(maxHeight); }; 
    });   
    
    $a("#3_img").each(function() {   
   
    if( w > maxWidth ){
        $a(this).width( maxWidth);    
        $a(this).height(maxWidth); };  
    
    if( h > maxHeight ){
        $a(this).height(maxHeight);     
        $a(this).width(maxHeight); };
    });

    $a("#4_img").each(function() {   
   
    if( w > maxWidth ){
        $a(this).width( maxWidth);    
        $a(this).height(maxWidth); };  
    
    if( h > maxHeight ){
        $a(this).height(maxHeight);  
        $a(this).width(maxHeight); };
    });
    
    $a("#5_img").each(function() {   
   
    if( w > maxWidth ){
        $a(this).width( maxWidth);    
        $a(this).height(maxWidth); };  
    
    if( h > maxHeight ){
        $a(this).height(maxHeight);    
        $a(this).width(maxHeight); };
    });
    
    $a("#6_img").each(function() {   
   
    if( w > maxWidth ){
        $a(this).width( maxWidth);    
        $a(this).height(maxWidth); };  
    
    if( h > maxHeight ){
        $a(this).height(maxHeight);     
        $a(this).width(maxHeight); };
    });
    
    $a("#7_img").each(function() {   
   
    if( w > maxWidth ){
        $a(this).width( maxWidth);   
        $a(this).height(maxWidth); };  
    
    if( h > maxHeight ){
        $a(this).height(maxHeight);     
        $a(this).width(maxHeight);  };
    });

    $a("#8_img").each(function() {   
   
    if( w > maxWidth ){
        $a(this).width( maxWidth);    
        $a(this).height(maxWidth); };  
    
    if( h > maxHeight ){
        $a(this).height(maxHeight);    
        $a(this).width(maxHeight); };
    });    
});