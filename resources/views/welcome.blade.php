{{-- <x-app-layout> --}}
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="project.css">
        <title>Engaging Dashboard</title>
    </head>
    <style>
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: #f4f4f4;
       background-image: url(background-image.jpg.jpg);
       z-index: 50px;
      }
      
      header {
        background-color: rgb(17, 17, 236);
        color: #fff;
        text-align: center;
        padding: 1em;
      }
      #home{
        background-image: url(background-image.jpg.jpg);
      }
      nav {
        background-color: rgb(118, 239, 118);
        padding: 0.5em;
      }
      
      nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        text-align: center;
      }
      
      nav ul li {
        display: inline;
        margin-right: 10px;
      }
      
      nav a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
      }
      
      section {
        margin: 20px;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      
      form {
        display: flex;
        flex-direction: column;
        max-width: 300px;
        margin: auto;
      }
      
      label {
        margin-top: 10px;
        font-weight: bold;
      }
      
      input,
      textarea {
        margin-bottom: 15px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }
      
      button {
        padding: 10px;
        background-color: #555;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      
      footer {
        background-color: #b68686;
        color: #fff;
        text-align: center;
        padding: 1em;
        
      }
      .reg{
margin-left: 30px;
justify-content: space-between;
      }
      .images>img{
width: 300px;
      }
      .images{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        margin: 5px;
      }
      x-app-layout{
        position: fixed;
      }

      @keyframes fade-in {
         from {
            opacity: 0;
            /* Start with 0 opacity */
         }
         to {
            opacity: 1;
            /* transition to full opacity */
         }
      }
      h2 {
         animation: fade-in 3s;
      }

    </style>
    
    <body>
        <header>
            <h1>Trainee Dashboard</h1>
        </header>
    
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                 <li><a href="{{ route('upload.index') }}">Upload Content</a></li> 
                <li><a href="{{ route('posts.index') }}">Blog</a></li>
                <li class="reg"><a href="{{ route('register') }}">Register</a></li>
                <li class="reg"><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav>
    
        <section id="home">
            <h2 class="fade-in">Welcome, Expert-hub Trainee!</h2>
            <p>Welcome to Expert-hub Trainee Dashboard, where innovation meets education, turning digital dreams into reality! Here trainees upload and showcase there works, thus reflecting the impacts garnerd from the Expert-hub Team led by industry experts, who are determined to unlock potentials while providing enduring skills for the future. We say a big thank you to the Expert-hub Team</p>
        </section>
        
        <div class="images">
<div class="images"> <img src="background-image.jpg.jpg" alt="images"></div>
<div class="images"> <img src="portfolio.JPG" alt="images"></div>
<div class="images"> <img src="Screenshot 2023-09-19 101208.png" alt="images"></div>
        </div>

        
        <section id="uploadeimage">
         
{{-- @if(isset($imagePath))
<img src="{{ $imagePath }}" alt="Uploaded Image">
@endif --}}
        </section>
{{-- </x-app-layout> --}}
