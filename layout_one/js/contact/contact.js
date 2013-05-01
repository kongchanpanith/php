/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function loadContact(){
    $.ajax({
       url : 'view/contact/contact.php',
       type : 'post',
       beforeSend : function(){
           $('div.container_left').html('loading...');
       },
       success : function(result){
           $('div.container_left').html(result);
           
       }
    });
}
