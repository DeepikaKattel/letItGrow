<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CSS 3D Rotation Effect</title>
<style>
.our-team{
    padding-bottom: 20px;
    text-align: center;
    display:inline-block;
}
.our-team .pic{
    display: inline-block;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: #ff595e;
    padding: 70px 20px 30px;
    margin-bottom: 20px;
    position: relative;
}
.our-team .description{
    font-size: 14px;
    color: #fff;
}
.our-team .pic img{
    width: 101%;
    height: 101%;
    border-radius: 50%;
    position: absolute;
    top: -1px;
    left: -1px;
    transition: all 0.6s ease 0s;
}
.our-team:hover .pic img{
    transform: rotate(-120deg);
    transform-origin: 95% 40% 0;
}
.our-team .title{
    display: block;
    font-size: 20px;
    font-weight: 700;
    color: #7740ff;
    letter-spacing: 1px;
    margin-bottom: 5px;
}
.our-team .post{
    display: block;
    font-size: 15px;
    color: #333;
    text-transform: capitalize;
    margin-bottom: 10px;
    position: relative;
}
.our-team .post:after{
    content: "";
    width: 30px;
    height: 3px;
    background: #eee;
    margin: 0 auto;
    position: absolute;
    bottom: -10px;
    left: 0;
    right: 0;
}
.our-team .social{
    padding: 0;
    margin: 25px 0 0 0;
    list-style: none;
}
.our-team .social li{
    display: inline-block;
    margin-right: 5px;
}
.our-team .social li a{
    display: block;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    line-height:35px;
    background: #7740ff;
    font-size: 15px;
    color: #fff;
}
.our-team .social li a:hover{
    background: #ff595e;
}
@media only screen and (max-width: 990px){
    .our-team{ margin-bottom: 30px; }
}
@media only screen and (max-width: 767px){
    .our-team{ overflow: hidden; }
}
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <img src="{{asset('images/deepika.jpg')}}">
                    </div>
                    <h3 class="title">Williamson</h3>
                    <span class="post">Web Developer</span>
                    <ul class="social">
                        <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-twitter"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
    
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <img src="{{asset('images/webDevelopment.jpg')}}">
                    </div>
                    <h3 class="title">Kristiana</h3>
                    <span class="post">Web Designer</span>
                    <ul class="social">
                        <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-twitter"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</html>