/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function loadService(){
    $.ajax({
       url : 'view/service/service.php',
       type : 'post',
       beforeSend : function(){
           $('div.container_left').html('loading...');
       },
       success : function(result){
           $('div.container_left').html(result);
       }
    });
}
