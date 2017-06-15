$(function(){
      $("#carregando2df").hide();
      
         $("div#loginpanel a").click(function(){
            pagina = "paginas/"+$(this).attr('href')
			
            
            $("#carregando2df").ajaxStart(function(){
               $(this).show()
               })
            $("#carregando2df").ajaxStop(function(){
               $(this).hide();
               
            })
            
            $("#loginbox").load(pagina);
            return false;
         })
})