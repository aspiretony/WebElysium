$(function(){
      $("#carregando").hide();
      
         $("div#menuback a").click(function(){
            pagina = "paginas/"+$(this).attr('href')
			
            
            $("#carregando").ajaxStart(function(){
               $(this).show()
               })
            $("#carregando").ajaxStop(function(){
               $(this).hide();
               
            })
            
            $("#realcontent").load(pagina);
            return false;
         })
})