<header class="short-header">   

    <div class="gradient-block"></div>	

    <div class="row header-content">
<html>
        <div class="logo">
          <a href="../">Author</a>
       </div>
   	</html>


	   <br>
	   <h1 align="center">MUSIC NAVIGATOR</h1>
	   	
	   <h1 align="center">Here is a list of songs for your album</h1>
		   <br>
		   <br>
           <h1 align="center">{{$album->name}}</h1>

           <ul>
               @foreach($album->songs as $song)
               <p align="center">{{$song->name}}</p>
               @endforeach
           </ul>
