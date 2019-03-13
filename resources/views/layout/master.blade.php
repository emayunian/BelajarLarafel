<html>
    <head>
        <title>master</title>
        </head>
       
           
<body 
    style = "background-color: #FF7F50"
    

        <table border="1" width="100%" height="500px">
        <tr>
                <th> @include('layout.sidebar')</th>
                <th>@yield('content')</th> 
                <th> @include('layout.mainfooter')</th>
                <th> @include('layout.mainheader')</th>
                <th> @include('layout.mainsidebar')</th>
             </tr>
            
            
        
</body>
    </html>
    