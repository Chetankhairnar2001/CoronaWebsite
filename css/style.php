<style type="text/css">

*{
    margin:0; padding: 0;box-sizing: border-box;
    font-family: 'Georama', sans-serif;
}

.row{
    margin-left: 0!important;
    margin-right: 0!important;
}

.nav_body{
    background-color: rgb(98, 152, 233);
}

.nav_body a{
    color: white;
}

.nav_body button span:hover{
border:1px solid white;
}

.main_header{
    width: 100%;
    height: 450px;
}

.rightside h1{
    font-size: 3rem;
}

.coroimg img{
    animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
    0%{transform: rotate(0);}
    100%{transform: rotate(360deg);}
}
 
.leftside img{
    animation: together 5s linear infinite;
}

@keyframes together{
    0%{
        transform: scale(.75);
    }
    20%{
        transform: scale(1);
    }
    40%{
        transform: scale(.75);
    }
    60%{
        transform: scale(1);
    }
    80%{
        transform: scale(.75);
    }
    100%{
        transform: scale(.75);
    }
}


/* @media screen and (max-width:426px){
    .leftside img{
        width: 50%;
        height: 80%;
        padding-bottom: 5rem;
    }
} */

section h2{
    color: red;
    text-shadow: 1px 1px rgb(31, 29, 29);
}

section h1{
    text-align: center; font-size: 2rem;
}

.sub_section,.main_header{
    background-color: #fbfbfb;
}

footer {
    background-color: rgb(98, 152, 233);
}

.footer_style p{
margin-bottom: 0;
}

#myBtn{
cursor: pointer;
color: white;
background-color: rgb(117, 117, 235);
border: none;
padding: 5px;
border-radius: 8px;
z-index: 10;
position: fixed;
right: 40px;
bottom: 30px;
}

#myBtn:hover{
    background-color: rgb(59, 71, 240);
}

@media screen and (max-width:426px) {
    .main_header{ height: 600px; text-align:center;}

    .main_header h1{
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 2rem;
    }
}

</style>