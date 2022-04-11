<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>notice page</title>
</head>
<style>       * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body,
html {
    height: 100%;

    background-image: linear-gradient(
            135deg,
            rgba(159, 159, 159, 0.46) 0%,
            rgba(159, 159, 159, 0.46) 14.286%,
            rgba(165, 165, 165, 0.46) 14.286%,
            rgba(165, 165, 165, 0.46) 28.572%,
            rgba(171, 171, 171, 0.46) 28.572%,
            rgba(171, 171, 171, 0.46) 42.858%,
            rgba(178, 178, 178, 0.46) 42.858%,
            rgba(178, 178, 178, 0.46) 57.144%,
            rgba(184, 184, 184, 0.46) 57.144%,
            rgba(184, 184, 184, 0.46) 71.43%,
            rgba(190, 190, 190, 0.46) 71.43%,
            rgba(190, 190, 190, 0.46) 85.716%,
            rgba(196, 196, 196, 0.46) 85.716%,
            rgba(196, 196, 196, 0.46) 100.002%
        ),
        linear-gradient(
            45deg,
            rgb(252, 252, 252) 0%,
            rgb(252, 252, 252) 14.286%,
            rgb(246, 246, 246) 14.286%,
            rgb(246, 246, 246) 28.572%,
            rgb(241, 241, 241) 28.572%,
            rgb(241, 241, 241) 42.858%,
            rgb(235, 235, 235) 42.858%,
            rgb(235, 235, 235) 57.144%,
            rgb(229, 229, 229) 57.144%,
            rgb(229, 229, 229) 71.43%,
            rgb(224, 224, 224) 71.43%,
            rgb(224, 224, 224) 85.716%,
            rgb(218, 218, 218) 85.716%,
            rgb(218, 218, 218) 100.002%
        );
}

.container {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

button {
    margin: 1em;
    font-family: Franklin Gothic Medium;
    letter-spacing: 1px;
    height: 3em;
    width: 11em;
    background: rgb(0, 89, 255);
    color: rgb(255, 255, 255);
    font-size: 1.05em;
    border: none;
    border-radius: 5px;
    transition: all 0.3s ease-out;
}

.btn-1 {
    box-shadow: inset 0 0 rgb(0, 89, 255);
    transition: all 0.3s ease-out;
}

.btn-1:hover {
    box-shadow: inset 12em 0 #7EC8E3;
    cursor: pointer;
    color: rgb(0, 0, 0);
    color: black;
}

.btn-2 {
    position: relative;
    z-index: 1;
    background: #7EC8E3;
}

.btn-2::before {
    content: " ";
    position: absolute;
    height: 100%;
    width: 55%;
    background: rgb(0, 89, 255);
    top: 0;
    left: 0;
    border-radius: 5px;
    z-index: -1;
    transition: all 0.3s ease-out;
}

.btn-2::after {
    content: " ";
    position: absolute;
    height: 100%;
    width: 55%;
    right: 0;
    top: 0;
    background: rgb(0, 89, 255);
    border-radius: 5px;
    z-index: -1;
    transition: all 0.3s ease-out;
}

.btn-2:hover:before {
    width: 0;
}

.btn-2:hover:after {
    width: 0;
}

.btn-2:hover {
    cursor: pointer;
    color: rgb(0, 0, 0);
}

.btn-3 {
    position: relative;
    background: rgb(0, 89, 255);
    z-index: 1;
    transition: all 0.3s ease-out;
}
.btn-3:hover {
    color: black;
    cursor: pointer;
}

.btn-3::after {
    content: " ";
    position: absolute;
    height: 100%;
    width: 0;
    background: #7EC8E3;
    right: 0;
    top: 0;
    border-radius: 5px;
    z-index: -1;
    transition: all 0.3s ease-out;
}

.btn-3:hover:after {
    width: 100%;
}
.wel{
    
    font-size: 30px;
    font-weight: bold;
   color: white;
  background-color:#1d878f ;
  padding: 15px;
   
}

</style>
<body>
     <div class="wel"> notice  </div>

<div class="container">
        <button class="btn-1"><a href="slider_admin/index.php"style="text-decoration: none;color: white;">Slider</a></button>
        <button class="btn-2"><a href="calenderadmin/display.php"style="text-decoration: none;color: white;"> Calender</a></button>
        
    </div>
</body>
</html>