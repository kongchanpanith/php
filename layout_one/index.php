<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="lib/jquery-1.9.1.min.js" type="text/javascript" ></script>
        <script src="js/contact/contact.js" type="text/javascript" ></script>
        <script src="js/service/service.js" type="text/javascript" ></script>
        <script src="js/about/about.js" type="text/javascript" ></script>
        <script src="js/home/home.js" type="text/javascript" ></script>
        
        <link rel="stylesheet" href="css/main.css" />
        <script>
        $(document).ready(function() {
                // declare variable
                var menu_items = $("div.menu ul.menu_items li.menu_item");
                var hash_value = null;
                // initialize data
                initData();
                refresh(hash_value);
                // work with event
                $(menu_items).click(function() {
                    $(menu_items).removeClass('active');
                    $(this).addClass('active');
                    var url_hash = $(this).find('a').attr('id');
                    window.location.hash = url_hash;
                    loadData(url_hash);

                });
                // all method in this file
                function initData(){
                    if(window.location.hash){
                        hash_value = window.location.hash.split('#');
                        hash_value = hash_value[1];
                    }
                }
                function loadData(hash){
                    if(hash){
                        switch(hash){
                        case 'home' :
                            loadHome();
                            break;
                        case 'service' :
                            loadService(hash);
                            break;
                        case 'contact' :
                            loadContact(hash);
                            break;
                        case 'about' :
                            loadAbout(hash);
                            break;
                        default :
                            loadHome();    
                            break;
                        }
                    }else{
                        loadHome();
                    }
                      
                }
                function refresh() {
                    if(hash_value){
                        switch(hash_value){
                        case 'home' :
                            selecetMenuAfterRefresh(hash_value);
                            break;
                        case 'service' :
                            selecetMenuAfterRefresh(hash_value);
                            break;
                        case 'contact' :
                            selecetMenuAfterRefresh(hash_value);
                            break;
                        case 'about' :
                            selecetMenuAfterRefresh(hash_value);
                            break;
                        }
                    }else{
                        selecetMenuAfterRefresh('home');
                    }
                    loadData(hash_value);
                }
                function selecetMenuAfterRefresh(hash) {
                    if (hash) {
                        $(menu_items).removeClass('active');
                        $(menu_items).each(function() {
                            if ($(this).find('a').attr('id') === hash) {
                                $(this).addClass('active');
                            }
                        });
                    }
                }
            });
        </script>
    </head>
    <body>
        <div class="wrap">
            <div class="header">
                
            </div>
            <div class="menu">
                <ul class="menu_items">
                    <li class="menu_item"><a class="item" id="home">home</a></li>
                    <li class="menu_item"><a class="item" id="service">service</a></li>
                    <li class="menu_item"><a class="item" id="contact">contact</a></li>
                    <li class="menu_item"><a class="item" id="about">about us</a></li>
                </ul>
            </div>
            <div class="container">
                <div class="container_left">
                    Container Left
                </div>
                <div class="container_right">
                    Container Right
                </div>
                
            </div>
            <div class="footer">
                
            </div>    
        </div>
        
    </body>
</html>
