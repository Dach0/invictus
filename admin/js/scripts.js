$(document).ready(function(){
    
$('#selectAllTables').click(function(event){
    
    if(this.checked){
        
        $('.checkBox').each(function(){
            
           this.checked = true;
            
        });
        
    } else {
        
        $('.checkBox').each(function(){
            
           this.checked = false;
            
        });
        
        
    }
});
    
    
});