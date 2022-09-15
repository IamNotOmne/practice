<?php 

header('Content-type: text/css; charset: UTF-8')
?>
body{
    background-color: #c1e3ed;
}
h1{
    text-align: center;
    font-family: Helvetica;
}
table{
    display: flex;
    justify-content: center;
}
input{
    border-radius: 20px;
    padding: 12px 15px;
    border: 1px solid hsl(209.4,100%,19.2%);
}
.form_body{
    text-align: center;
    padding: 10px;
    margin-top: 5%;
    width: 500px;
    height: 500px;
    margin-left:35%;
    background-color: purple;
    transition: box-shadow .5s;
}
.form_body:hover{
    box-shadow:  #fee227 10px 10px;
}
.form{
    text-align: center;
    border: 0;
}
.comp_btn{
    padding: 12px 15px;
    border-radius: 20px;
    border: 1px solid;
    font-weight: var(--font-medium);
    background-color: hsl(209.4,100%,19.2%);
    margin-bottom: 15px;
    color: #ffffff;
}
.comp_btn:hover{
    background-color: hsl(47.5,100%,50%);
    color: #000;
}
p{
    color: red;
    font-size: 20px;
    font-weight: bold;
    font-family: Helvetica;
}
