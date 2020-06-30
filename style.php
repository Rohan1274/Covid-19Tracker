<style type="text/css">

 html{
     scroll-behavior: smooth;
 }

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Muli', sans-serif;

}

.navcol{
    background-color: #4285F4!important;
}

.navcol a {
    color: white;
}

.rightside h1{font-size: 4rem;

}
/* main header */

.main_header{
    height: 450px;
    width: 100%;
}

.newsty{
    background: linear-gradient(to right ,#fc00ff , #00dbde  )!important;
}


}

.newcase{
    text-transform: uppercase;
}

/* img animations */

.coronarotate {
    width: 40px;
    height: 40px;
    animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
    0% {transform: rotate(0);}
    100% { transform: rotate(360deg);}
}

.leftside img{ 
    animation: heartbeat 5s linear infinite;
}

@keyframes heartbeat{
    0%{transform: scale(.75);}
    20%{transform: scale(1);}
    40%{transform: scale(.75);}
    60%{transform: scale(1);}
    80%{transform: scale(.75);}
    100%{transform: scale(.75);}

}
.corona_update{
    margin: 0 0 30px 0;
}
.corona_update h3{ color: indianred; }
.corona_update h1{ font-size: 3rem; text-align: center;}


/* aabout section */
.sub_section{
    background-color: lightcyan;
}

/* footer */
.footer_style{
    background-color: skyblue;
}
.footer_style p{
    margin-bottom: 0 !important;
}

/* google table color */
.googlecolor tr{
    background-color: #4285F4!important;
}

/* try */
.counter {
    background-color:#f5f5f5;
    padding: 20px 0;
    border-radius: 5px;
}

.count-title {
    font-size: 40px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.count-text {
    font-size: 13px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.fa-2x {
    margin: 0 auto;
    float: none;
    display: table;
    color: #4ad1e5;
}

.row{
    margin-left: 0!important;
    margin-right: 0!important;
}
@media(max-width: 800px){
    .main_header{height:700px; text-align: center;}

    .main_header h1{
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 30px;
    }

    .count_style{
        display: block!important;
        justify-content: center!important;
        align-items: center!important;
        text-align: center!important;
    }
    .count_style p{
        justify-content: center!important;
        align-items: center!important;
        text-align: center!important;
    }
}
  
  .my{
      display: block;
      
  }
</style> 