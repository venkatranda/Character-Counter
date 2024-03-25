<html>
    
    <head>
        <title>Character Counter by Venkat Randa.</title>
        <style type="text/css">
            header,footer{
                padding:10px;
                background:grey;
                color:#fff;
                margin:0px;
                text-align:center;
            }
            body{
                margin:0;
            }
            #section-1{
                padding:10px 400px;
                
            }
            #section-1 button{
                padding:10px;
                background:green;
                color:#fff;
                margin:2px;
            }
            #datacount{
                color: red;
            }
            
        </style>
        <script>
            function countdata(){
               document.getElementById('datacount').innerHTML = document.getElementById('data').value.length;
            }
        </script>
    </head>
    <body>
        <header>
            <h1>Character Counter by Venkat Randa.</h1>
        </header>
           
        <section id="section-1">
            <h2>Enter the Text in Below Field</h2>
            <h3>Number of Characters: <span id="datacount"></span></h3>
            <textarea rows=40 cols=100 id="data" onchange="javascript:countdata();"></textarea><br>
            <button onclick="javascript:countdata();">Count</button>
        </section>
        
        
        <footer>
            <h5>Created by Venkat Randa</h5>
        </footer>
    </body>
    
</html>
