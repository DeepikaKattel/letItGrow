<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CSS 3D Rotation Effect</title>
<style>
    .flip-container {
        margin: 50px;
        perspective: 1000;
        display: inline-block;
    }
    .flip-container:hover .card {
        transform: rotateY(180deg);
    }
    .card, .front, .back {
        width: 500px;
        height: 205px;
    }
    .card {
        transition: 0.5s;
        transform-style: preserve-3d;
        position: relative;
    }
    .front, .back {
        backface-visibility: hidden;
        position: absolute;
    }
    .front {
        z-index: 1;
        transform: rotateY(180deg);
        
    }
    .back {
        z-index: 2; /* back side, placed above front */
        transform: rotateY(0deg);       
    }
</style>
</head>
<body>
    <div class="flip-container">
        <div class="card">
            <div class="front">
                <img src={{asset('images/webDevelopment.jpg')}}>
            </div>
            <div class="back">
                <!-- back side content -->
            </div>
        </div>
    </div>
</body>
</html>