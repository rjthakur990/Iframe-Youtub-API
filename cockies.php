<html>
   <head>   
      <script type = "text/javascript">
         <!--
            function WriteCookie() {
               if( document.myform.customer.value == "" ) {
                  alert("Enter some value!");
                  return;
               }
               cookievalue = escape(document.myform.customer.value) + ";";
               document.cookie = "name=" + cookievalue;
               document.write ("Setting Cookies : " + "name=" + cookievalue );
            }

            /**
                text added             
             */
            function Textadded(){
                getval = prompt("Text Goes here","your name");
                document.getElementById("show_text").innerHTML=getval;
            }
            function Getobjectval(){
                vdata = new Object();
                vdata.date  ="test";
                vdata.topic = "object value";
                document.write("date"+vdata.date);
            }
            function stationery(cat, val){
                this.category = cat;
                this.value    = val;
            }
           var store = new stationery("Comic", 'supider man');
            document.write(store.category+"<br>");
            document.write(store.value);

         //-->
         newarry = ["test1", "test2", "test"];
         getlen = newarry.length;
         for(var i=1; i<= getlen; i++){
            
            if(i == 2){
              document.write('<br>'+newarry[i]);
            }
         }
        
      </script>      
   </head>
   
   <body>  
       <button id="getobject" onclick="Getobjectval();">GO</button>
       <div id="show_text"></div>  
       <button id="new_text" onclick="Textadded();">Add Text</button>  
      <form name = "myform" action = "">
         Enter name: <input type = "text" name = "customer"/>
         <input type = "button" value = "Set Cookie" onclick = "WriteCookie();"/>
      </form>   
   </body>
</html>