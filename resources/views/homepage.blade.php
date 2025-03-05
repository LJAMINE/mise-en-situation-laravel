<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>home</h1>

    <form action="/destroy" method="post">
        @csrf
        <button> logout</button>
    </form>

    <h1> {{ $users }} </h1>




</body>

<script>

    function afficher(){
        let url='http://127.0.0.1:8000/homepage'
        const res=await fetch(url,{
    
            method:'GET',
          
    
    
        })
    
        if (!res.ok){
           return const data = await res.json();
        }
                    
        }
        
        
    
    
    
    
    
    </script>

</html>