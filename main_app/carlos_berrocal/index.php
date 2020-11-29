<?php
session_start();
if(isset($_SESSION['usuario'])){
if ($_SESSION['usuario']['Tipo_usuario']!="carlos_berrocal") {
    	header('Location:../angel_mercado/');
}
} else{
header('Location:../../');
}
header('Cache-Control: no cache');

?>
<!DOCTYPE html>
<html>

<head>
    
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <title></title>
    <link rel="shortcut icon" href="./img/icono.ico">
    <META http-equiv='Content-Type' content='text/html' charset='utf-8' />
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" crossorigin="anonymous"></script>
    <!-- Font Icon -->
    <!--<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">-->
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">
    <!--SELECT DEPENDE DE OTRO-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <!-- Main css -->

    <style>
        <script src="jquery-3.2.1.min.js"></script>

        /*ETIQUETA SELECT*/
        <script>$("#creditos").change(function() {
                var value2=$(this).find("option:selected") .attr("data-value2");
                $("#wCoin").val(value2);
            }

        );

        $("#enviar").click(function() {
                console.log($("form").serialize());
            }

        );

        </script><style type="text/css">body {
            margin: 0;
            padding: 0;
        }

        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            /*font-size: 20px;*/
        }

        h5 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            /*font-size: 20px;*/
            padding-bottom: 15px;
        }

        h3 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            /*font-size: 20px;*/
            padding-bottom: 15px;
        }

        .center {
            display: block;
            text-align: center;
            margin: 20px auto;
        }
    </style>


    <style>
        .valor-desplegable {
            position: relative;
            width: 200px;
            height: 25px;
            overflow: hidden;
        }

        .valor-desplegable:hover {
            overflow: visible;
        }

        .valor-desplegable .valorTexto {
            width: 200px;
            height: 25px;
            line-height: 25px;
            padding-left: 4px;
            background: white;
            border: 1px solid #ddd;
            position: relative;
            box-sizing: border-box;
            color: #222;
        }

        .valor-desplegable .valorTexto::after {
            content: "\25BF";
            position: absolute;
            right: 4px;
            color: #222 !important;
        }

        .valor-desplegable>ol,
        .valor-desplegable>ol>li>ol {
            list-style: none;
            padding-left: 0;
            position: absolute;
            top: 24px;
            border: 1px solid #ddd;
            width: 200px;
            margin-top: 0;
            box-sizing: border-box;
            background: white;
        }

        .valor-desplegable li {
            display: block;
            height: 25px;
            line-height: 25px;
            padding-left: 4px;
            border-bottom: 1px solid #f5f5f5;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .valor-desplegable li:hover {
            overflow: visible;
            background: #f8f8f8;
        }

        .valor-desplegable>ol>li>ol {
            top: -1px;
            left: 198px;
        }

        .valor-desplegable>ol>li>ol::before {
            content: "\25B9";
            position: absolute;
            left: -15px;
        }
    </style>

    <!--ESTILO PARA MARK INPUT NUMERO DE GUIA-->
    <style>
        /* Libary CSS */
        .shell {
            position: relative;
            line-height: 1;
        }

        .shell span {
            position: absolute;
            /* left: 3px; */
            top: 1px;
            color: red;
            pointer-events: none;
            z-index: -1;
        }

        .shell span i {
            /* any of these 3 will work */
            color: transparent;
            opacity: 0;
            visibility: hidden;
        }

        input.masked,
        .shell span {
            font-size: 16px;
            font-family: monospace;
            /* padding-right: 10px; */
            background-color: transparent;
            text-transform: uppercase;
        }

        /* Look and feel (not lib specific) */
        li {
            line-height: 2;
            font-family: helvetica;
            list-style-type: none;
            /* border-bottom: 1px solid #ccc; */
        }

        label {
            display: inline-block;
            /* width: 14em; */
        }
    </style>

    <!--estilo para autocompletar input color-->
    <style>
        /*the container must be positioned relative:*/
        .autocomplete {
            position: relative;
            display: inline-block;
        }



        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
            color: red;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>
    <!--STYLE.CSS-->

    </style>
    <!--ASSETS MAIN.CSS-->


    <style>
        /*assets/main.css*/
        @charset "UTF-8";
        @import url(font-awesome.min.css);
        @import "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600";

        /*
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
*/

        /* Reset */

        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        legend,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        /*table {*/
        /*	border-collapse: collapse;*/
        /*	border-spacing: 0;*/
        /*}*/

        body {
            -webkit-text-size-adjust: none;
        }

        /* Box Model */

        *,
        *:before,
        *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        /* Containers */

        .container {
            margin-left: auto;
            margin-right: auto;
        }

        .container.\31 25\25 {
            width: 100%;
            max-width: 100em;
            min-width: 80em;
        }

        .container.\37 5\25 {
            width: 60em;
        }

        .container.\35 0\25 {
            width: 40em;
        }

        .container.\32 5\25 {
            width: 20em;
        }

        .container {
            width: 80em;
        }

        @media screen and (max-width: 1680px) {

            .container.\31 25\25 {
                width: 100%;
                max-width: 100em;
                min-width: 80em;
            }

            .container.\37 5\25 {
                width: 60em;
            }

            .container.\35 0\25 {
                width: 40em;
            }

            .container.\32 5\25 {
                width: 20em;
            }

            .container {
                width: 80em;
            }

        }

        @media screen and (max-width: 1280px) {

            .container.\31 25\25 {
                width: 100%;
                max-width: 81.25em;
                min-width: 65em;
            }

            .container.\37 5\25 {
                width: 48.75em;
            }

            .container.\35 0\25 {
                width: 32.5em;
            }

            .container.\32 5\25 {
                width: 16.25em;
            }

            .container {
                width: 65em;
            }

        }

        @media screen and (max-width: 980px) {

            .container.\31 25\25 {
                width: 100%;
                max-width: 112.5%;
                min-width: 90%;
            }

            .container.\37 5\25 {
                width: 67.5%;
            }

            .container.\35 0\25 {
                width: 45%;
            }

            .container.\32 5\25 {
                width: 22.5%;
            }

            .container {
                width: 90%;
            }

        }

        @media screen and (max-width: 736px) {

            .container.\31 25\25 {
                width: 100%;
                max-width: 112.5%;
                min-width: 90%;
            }

            .container.\37 5\25 {
                width: 67.5%;
            }

            .container.\35 0\25 {
                width: 45%;
            }

            .container.\32 5\25 {
                width: 22.5%;
            }

            .container {
                width: 90% !important;
            }

        }

        @media screen and (max-width: 480px) {

            .container.\31 25\25 {
                width: 100%;
                max-width: 112.5%;
                min-width: 90%;
            }

            .container.\37 5\25 {
                width: 67.5%;
            }

            .container.\35 0\25 {
                width: 45%;
            }

            .container.\32 5\25 {
                width: 22.5%;
            }

            .container {
                width: 90% !important;
            }

        }

        /* Grid */

        .row {
            border-bottom: solid 1px transparent;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .row>* {
            float: left;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .row:after,
        .row:before {
            content: '';
            display: block;
            clear: both;
            height: 0;
        }

        .row.uniform>*> :first-child {
            margin-top: 0;
        }

        .row.uniform>*> :last-child {
            margin-bottom: 0;
        }

        .row.\30 \25>* {
            padding: 0 0 0 0em;
        }

        .row.\30 \25 {
            margin: 0 0 -1px 0em;
        }

        .row.uniform.\30 \25>* {
            padding: 0em 0 0 0em;
        }

        .row.uniform.\30 \25 {
            margin: 0em 0 -1px 0em;
        }

        .row>* {
            padding: 0 0 0 2em;
        }

        .row {
            margin: 0 0 -1px -2em;
        }

        .row.uniform>* {
            padding: 2em 0 0 2em;
        }

        .row.uniform {
            margin: -2em 0 -1px -2em;
        }

        .row.\32 00\25>* {
            padding: 0 0 0 4em;
        }

        .row.\32 00\25 {
            margin: 0 0 -1px -4em;
        }

        .row.uniform.\32 00\25>* {
            padding: 4em 0 0 4em;
        }

        .row.uniform.\32 00\25 {
            margin: -4em 0 -1px -4em;
        }

        .row.\31 50\25>* {
            padding: 0 0 0 3em;
        }

        .row.\31 50\25 {
            margin: 0 0 -1px -3em;
        }

        .row.uniform.\31 50\25>* {
            padding: 3em 0 0 3em;
        }

        .row.uniform.\31 50\25 {
            margin: -3em 0 -1px -3em;
        }

        .row.\35 0\25>* {
            padding: 0 0 0 1em;
        }

        .row.\35 0\25 {
            margin: 0 0 -1px -1em;
        }

        .row.uniform.\35 0\25>* {
            padding: 1em 0 0 1em;
        }

        .row.uniform.\35 0\25 {
            margin: -1em 0 -1px -1em;
        }

        .row.\32 5\25>* {
            padding: 0 0 0 0.5em;
        }

        .row.\32 5\25 {
            margin: 0 0 -1px -0.5em;
        }

        .row.uniform.\32 5\25>* {
            padding: 0.5em 0 0 0.5em;
        }

        .row.uniform.\32 5\25 {
            margin: -0.5em 0 -1px -0.5em;
        }

        .\31 2u,
        .\31 2u\24 {
            width: 100%;
            clear: none;
            margin-left: 0;
        }

        .\31 1u,
        .\31 1u\24 {
            width: 91.6666666667%;
            clear: none;
            margin-left: 0;
        }

        .\31 0u,
        .\31 0u\24 {
            width: 83.3333333333%;
            clear: none;
            margin-left: 0;
        }

        .\39 u,
        .\39 u\24 {
            width: 75%;
            clear: none;
            margin-left: 0;
        }

        .\38 u,
        .\38 u\24 {
            width: 66.6666666667%;
            clear: none;
            margin-left: 0;
        }

        .\37 u,
        .\37 u\24 {
            width: 58.3333333333%;
            clear: none;
            margin-left: 0;
        }

        .\36 u,
        .\36 u\24 {
            width: 50%;
            clear: none;
            margin-left: 0;
        }

        .\35 u,
        .\35 u\24 {
            width: 41.6666666667%;
            clear: none;
            margin-left: 0;
        }

        .\34 u,
        .\34 u\24 {
            width: 33.3333333333%;
            clear: none;
            margin-left: 0;
        }

        .\33 u,
        .\33 u\24 {
            width: 25%;
            clear: none;
            margin-left: 0;
        }

        .\32 u,
        .\32 u\24 {
            width: 16.6666666667%;
            clear: none;
            margin-left: 0;
        }

        .\31 u,
        .\31 u\24 {
            width: 8.3333333333%;
            clear: none;
            margin-left: 0;
        }

        .\31 2u\24+*,
        .\31 1u\24+*,
        .\31 0u\24+*,
        .\39 u\24+*,
        .\38 u\24+*,
        .\37 u\24+*,
        .\36 u\24+*,
        .\35 u\24+*,
        .\34 u\24+*,
        .\33 u\24+*,
        .\32 u\24+*,
        .\31 u\24+* {
            clear: left;
        }

        .\-11u {
            margin-left: 91.66667%;
        }

        .\-10u {
            margin-left: 83.33333%;
        }

        .\-9u {
            margin-left: 75%;
        }

        .\-8u {
            margin-left: 66.66667%;
        }

        .\-7u {
            margin-left: 58.33333%;
        }

        .\-6u {
            margin-left: 50%;
        }

        .\-5u {
            margin-left: 41.66667%;
        }

        .\-4u {
            margin-left: 33.33333%;
        }

        .\-3u {
            margin-left: 25%;
        }

        .\-2u {
            margin-left: 16.66667%;
        }

        .\-1u {
            margin-left: 8.33333%;
        }

        @media screen and (max-width: 1680px) {

            .row>* {
                padding: 0 0 0 2em;
            }

            .row {
                margin: 0 0 -1px -2em;
            }

            .row.uniform>* {
                padding: 2em 0 0 2em;
            }

            .row.uniform {
                margin: -2em 0 -1px -2em;
            }

            .row.\32 00\25>* {
                padding: 0 0 0 4em;
            }

            .row.\32 00\25 {
                margin: 0 0 -1px -4em;
            }

            .row.uniform.\32 00\25>* {
                padding: 4em 0 0 4em;
            }

            .row.uniform.\32 00\25 {
                margin: -4em 0 -1px -4em;
            }

            .row.\31 50\25>* {
                padding: 0 0 0 3em;
            }

            .row.\31 50\25 {
                margin: 0 0 -1px -3em;
            }

            .row.uniform.\31 50\25>* {
                padding: 3em 0 0 3em;
            }

            .row.uniform.\31 50\25 {
                margin: -3em 0 -1px -3em;
            }

            .row.\35 0\25>* {
                padding: 0 0 0 1em;
            }

            .row.\35 0\25 {
                margin: 0 0 -1px -1em;
            }

            .row.uniform.\35 0\25>* {
                padding: 1em 0 0 1em;
            }

            .row.uniform.\35 0\25 {
                margin: -1em 0 -1px -1em;
            }

            .row.\32 5\25>* {
                padding: 0 0 0 0.5em;
            }

            .row.\32 5\25 {
                margin: 0 0 -1px -0.5em;
            }

            .row.uniform.\32 5\25>* {
                padding: 0.5em 0 0 0.5em;
            }

            .row.uniform.\32 5\25 {
                margin: -0.5em 0 -1px -0.5em;
            }

            .\31 2u\28xlarge\29,
            .\31 2u\24\28xlarge\29 {
                width: 100%;
                clear: none;
                margin-left: 0;
            }

            .\31 1u\28xlarge\29,
            .\31 1u\24\28xlarge\29 {
                width: 91.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 0u\28xlarge\29,
            .\31 0u\24\28xlarge\29 {
                width: 83.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\39 u\28xlarge\29,
            .\39 u\24\28xlarge\29 {
                width: 75%;
                clear: none;
                margin-left: 0;
            }

            .\38 u\28xlarge\29,
            .\38 u\24\28xlarge\29 {
                width: 66.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\37 u\28xlarge\29,
            .\37 u\24\28xlarge\29 {
                width: 58.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\36 u\28xlarge\29,
            .\36 u\24\28xlarge\29 {
                width: 50%;
                clear: none;
                margin-left: 0;
            }

            .\35 u\28xlarge\29,
            .\35 u\24\28xlarge\29 {
                width: 41.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\34 u\28xlarge\29,
            .\34 u\24\28xlarge\29 {
                width: 33.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\33 u\28xlarge\29,
            .\33 u\24\28xlarge\29 {
                width: 25%;
                clear: none;
                margin-left: 0;
            }

            .\32 u\28xlarge\29,
            .\32 u\24\28xlarge\29 {
                width: 16.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 u\28xlarge\29,
            .\31 u\24\28xlarge\29 {
                width: 8.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\31 2u\24\28xlarge\29+*,
            .\31 1u\24\28xlarge\29+*,
            .\31 0u\24\28xlarge\29+*,
            .\39 u\24\28xlarge\29+*,
            .\38 u\24\28xlarge\29+*,
            .\37 u\24\28xlarge\29+*,
            .\36 u\24\28xlarge\29+*,
            .\35 u\24\28xlarge\29+*,
            .\34 u\24\28xlarge\29+*,
            .\33 u\24\28xlarge\29+*,
            .\32 u\24\28xlarge\29+*,
            .\31 u\24\28xlarge\29+* {
                clear: left;
            }

            .\-11u\28xlarge\29 {
                margin-left: 91.66667%;
            }

            .\-10u\28xlarge\29 {
                margin-left: 83.33333%;
            }

            .\-9u\28xlarge\29 {
                margin-left: 75%;
            }

            .\-8u\28xlarge\29 {
                margin-left: 66.66667%;
            }

            .\-7u\28xlarge\29 {
                margin-left: 58.33333%;
            }

            .\-6u\28xlarge\29 {
                margin-left: 50%;
            }

            .\-5u\28xlarge\29 {
                margin-left: 41.66667%;
            }

            .\-4u\28xlarge\29 {
                margin-left: 33.33333%;
            }

            .\-3u\28xlarge\29 {
                margin-left: 25%;
            }

            .\-2u\28xlarge\29 {
                margin-left: 16.66667%;
            }

            .\-1u\28xlarge\29 {
                margin-left: 8.33333%;
            }

        }

        @media screen and (max-width: 1280px) {

            .row>* {
                padding: 0 0 0 1.5em;
            }

            .row {
                margin: 0 0 -1px -1.5em;
            }

            .row.uniform>* {
                padding: 1.5em 0 0 1.5em;
            }

            .row.uniform {
                margin: -1.5em 0 -1px -1.5em;
            }

            .row.\32 00\25>* {
                padding: 0 0 0 3em;
            }

            .row.\32 00\25 {
                margin: 0 0 -1px -3em;
            }

            .row.uniform.\32 00\25>* {
                padding: 3em 0 0 3em;
            }

            .row.uniform.\32 00\25 {
                margin: -3em 0 -1px -3em;
            }

            .row.\31 50\25>* {
                padding: 0 0 0 2.25em;
            }

            .row.\31 50\25 {
                margin: 0 0 -1px -2.25em;
            }

            .row.uniform.\31 50\25>* {
                padding: 2.25em 0 0 2.25em;
            }

            .row.uniform.\31 50\25 {
                margin: -2.25em 0 -1px -2.25em;
            }

            .row.\35 0\25>* {
                padding: 0 0 0 0.75em;
            }

            .row.\35 0\25 {
                margin: 0 0 -1px -0.75em;
            }

            .row.uniform.\35 0\25>* {
                padding: 0.75em 0 0 0.75em;
            }

            .row.uniform.\35 0\25 {
                margin: -0.75em 0 -1px -0.75em;
            }

            .row.\32 5\25>* {
                padding: 0 0 0 0.375em;
            }

            .row.\32 5\25 {
                margin: 0 0 -1px -0.375em;
            }

            .row.uniform.\32 5\25>* {
                padding: 0.375em 0 0 0.375em;
            }

            .row.uniform.\32 5\25 {
                margin: -0.375em 0 -1px -0.375em;
            }

            .\31 2u\28large\29,
            .\31 2u\24\28large\29 {
                width: 100%;
                clear: none;
                margin-left: 0;
            }

            .\31 1u\28large\29,
            .\31 1u\24\28large\29 {
                width: 91.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 0u\28large\29,
            .\31 0u\24\28large\29 {
                width: 83.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\39 u\28large\29,
            .\39 u\24\28large\29 {
                width: 75%;
                clear: none;
                margin-left: 0;
            }

            .\38 u\28large\29,
            .\38 u\24\28large\29 {
                width: 66.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\37 u\28large\29,
            .\37 u\24\28large\29 {
                width: 58.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\36 u\28large\29,
            .\36 u\24\28large\29 {
                width: 50%;
                clear: none;
                margin-left: 0;
            }

            .\35 u\28large\29,
            .\35 u\24\28large\29 {
                width: 41.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\34 u\28large\29,
            .\34 u\24\28large\29 {
                width: 33.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\33 u\28large\29,
            .\33 u\24\28large\29 {
                width: 25%;
                clear: none;
                margin-left: 0;
            }

            .\32 u\28large\29,
            .\32 u\24\28large\29 {
                width: 16.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 u\28large\29,
            .\31 u\24\28large\29 {
                width: 8.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\31 2u\24\28large\29+*,
            .\31 1u\24\28large\29+*,
            .\31 0u\24\28large\29+*,
            .\39 u\24\28large\29+*,
            .\38 u\24\28large\29+*,
            .\37 u\24\28large\29+*,
            .\36 u\24\28large\29+*,
            .\35 u\24\28large\29+*,
            .\34 u\24\28large\29+*,
            .\33 u\24\28large\29+*,
            .\32 u\24\28large\29+*,
            .\31 u\24\28large\29+* {
                clear: left;
            }

            .\-11u\28large\29 {
                margin-left: 91.66667%;
            }

            .\-10u\28large\29 {
                margin-left: 83.33333%;
            }

            .\-9u\28large\29 {
                margin-left: 75%;
            }

            .\-8u\28large\29 {
                margin-left: 66.66667%;
            }

            .\-7u\28large\29 {
                margin-left: 58.33333%;
            }

            .\-6u\28large\29 {
                margin-left: 50%;
            }

            .\-5u\28large\29 {
                margin-left: 41.66667%;
            }

            .\-4u\28large\29 {
                margin-left: 33.33333%;
            }

            .\-3u\28large\29 {
                margin-left: 25%;
            }

            .\-2u\28large\29 {
                margin-left: 16.66667%;
            }

            .\-1u\28large\29 {
                margin-left: 8.33333%;
            }

        }

        @media screen and (max-width: 980px) {

            .row>* {
                padding: 0 0 0 1.5em;
            }

            .row {
                margin: 0 0 -1px -1.5em;
            }

            .row.uniform>* {
                padding: 1.5em 0 0 1.5em;
            }

            .row.uniform {
                margin: -1.5em 0 -1px -1.5em;
            }

            .row.\32 00\25>* {
                padding: 0 0 0 3em;
            }

            .row.\32 00\25 {
                margin: 0 0 -1px -3em;
            }

            .row.uniform.\32 00\25>* {
                padding: 3em 0 0 3em;
            }

            .row.uniform.\32 00\25 {
                margin: -3em 0 -1px -3em;
            }

            .row.\31 50\25>* {
                padding: 0 0 0 2.25em;
            }

            .row.\31 50\25 {
                margin: 0 0 -1px -2.25em;
            }

            .row.uniform.\31 50\25>* {
                padding: 2.25em 0 0 2.25em;
            }

            .row.uniform.\31 50\25 {
                margin: -2.25em 0 -1px -2.25em;
            }

            .row.\35 0\25>* {
                padding: 0 0 0 0.75em;
            }

            .row.\35 0\25 {
                margin: 0 0 -1px -0.75em;
            }

            .row.uniform.\35 0\25>* {
                padding: 0.75em 0 0 0.75em;
            }

            .row.uniform.\35 0\25 {
                margin: -0.75em 0 -1px -0.75em;
            }

            .row.\32 5\25>* {
                padding: 0 0 0 0.375em;
            }

            .row.\32 5\25 {
                margin: 0 0 -1px -0.375em;
            }

            .row.uniform.\32 5\25>* {
                padding: 0.375em 0 0 0.375em;
            }

            .row.uniform.\32 5\25 {
                margin: -0.375em 0 -1px -0.375em;
            }

            .\31 2u\28medium\29,
            .\31 2u\24\28medium\29 {
                width: 100%;
                clear: none;
                margin-left: 0;
            }

            .\31 1u\28medium\29,
            .\31 1u\24\28medium\29 {
                width: 91.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 0u\28medium\29,
            .\31 0u\24\28medium\29 {
                width: 83.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\39 u\28medium\29,
            .\39 u\24\28medium\29 {
                width: 75%;
                clear: none;
                margin-left: 0;
            }

            .\38 u\28medium\29,
            .\38 u\24\28medium\29 {
                width: 66.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\37 u\28medium\29,
            .\37 u\24\28medium\29 {
                width: 58.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\36 u\28medium\29,
            .\36 u\24\28medium\29 {
                width: 50%;
                clear: none;
                margin-left: 0;
            }

            .\35 u\28medium\29,
            .\35 u\24\28medium\29 {
                width: 41.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\34 u\28medium\29,
            .\34 u\24\28medium\29 {
                width: 33.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\33 u\28medium\29,
            .\33 u\24\28medium\29 {
                width: 25%;
                clear: none;
                margin-left: 0;
            }

            .\32 u\28medium\29,
            .\32 u\24\28medium\29 {
                width: 16.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 u\28medium\29,
            .\31 u\24\28medium\29 {
                width: 8.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\31 2u\24\28medium\29+*,
            .\31 1u\24\28medium\29+*,
            .\31 0u\24\28medium\29+*,
            .\39 u\24\28medium\29+*,
            .\38 u\24\28medium\29+*,
            .\37 u\24\28medium\29+*,
            .\36 u\24\28medium\29+*,
            .\35 u\24\28medium\29+*,
            .\34 u\24\28medium\29+*,
            .\33 u\24\28medium\29+*,
            .\32 u\24\28medium\29+*,
            .\31 u\24\28medium\29+* {
                clear: left;
            }

            .\-11u\28medium\29 {
                margin-left: 91.66667%;
            }

            .\-10u\28medium\29 {
                margin-left: 83.33333%;
            }

            .\-9u\28medium\29 {
                margin-left: 75%;
            }

            .\-8u\28medium\29 {
                margin-left: 66.66667%;
            }

            .\-7u\28medium\29 {
                margin-left: 58.33333%;
            }

            .\-6u\28medium\29 {
                margin-left: 50%;
            }

            .\-5u\28medium\29 {
                margin-left: 41.66667%;
            }

            .\-4u\28medium\29 {
                margin-left: 33.33333%;
            }

            .\-3u\28medium\29 {
                margin-left: 25%;
            }

            .\-2u\28medium\29 {
                margin-left: 16.66667%;
            }

            .\-1u\28medium\29 {
                margin-left: 8.33333%;
            }

        }

        @media screen and (max-width: 736px) {

            .row>* {
                padding: 0 0 0 1.25em;
            }

            .row {
                margin: 0 0 -1px -1.25em;
            }

            .row.uniform>* {
                padding: 1.25em 0 0 1.25em;
            }

            .row.uniform {
                margin: -1.25em 0 -1px -1.25em;
            }

            .row.\32 00\25>* {
                padding: 0 0 0 2.5em;
            }

            .row.\32 00\25 {
                margin: 0 0 -1px -2.5em;
            }

            .row.uniform.\32 00\25>* {
                padding: 2.5em 0 0 2.5em;
            }

            .row.uniform.\32 00\25 {
                margin: -2.5em 0 -1px -2.5em;
            }

            .row.\31 50\25>* {
                padding: 0 0 0 1.875em;
            }

            .row.\31 50\25 {
                margin: 0 0 -1px -1.875em;
            }

            .row.uniform.\31 50\25>* {
                padding: 1.875em 0 0 1.875em;
            }

            .row.uniform.\31 50\25 {
                margin: -1.875em 0 -1px -1.875em;
            }

            .row.\35 0\25>* {
                padding: 0 0 0 0.625em;
            }

            .row.\35 0\25 {
                margin: 0 0 -1px -0.625em;
            }

            .row.uniform.\35 0\25>* {
                padding: 0.625em 0 0 0.625em;
            }

            .row.uniform.\35 0\25 {
                margin: -0.625em 0 -1px -0.625em;
            }

            .row.\32 5\25>* {
                padding: 0 0 0 0.3125em;
            }

            .row.\32 5\25 {
                margin: 0 0 -1px -0.3125em;
            }

            .row.uniform.\32 5\25>* {
                padding: 0.3125em 0 0 0.3125em;
            }

            .row.uniform.\32 5\25 {
                margin: -0.3125em 0 -1px -0.3125em;
            }

            .\31 2u\28small\29,
            .\31 2u\24\28small\29 {
                width: 100%;
                clear: none;
                margin-left: 0;
            }

            .\31 1u\28small\29,
            .\31 1u\24\28small\29 {
                width: 91.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 0u\28small\29,
            .\31 0u\24\28small\29 {
                width: 83.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\39 u\28small\29,
            .\39 u\24\28small\29 {
                width: 75%;
                clear: none;
                margin-left: 0;
            }

            .\38 u\28small\29,
            .\38 u\24\28small\29 {
                width: 66.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\37 u\28small\29,
            .\37 u\24\28small\29 {
                width: 58.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\36 u\28small\29,
            .\36 u\24\28small\29 {
                width: 50%;
                clear: none;
                margin-left: 0;
            }

            .\35 u\28small\29,
            .\35 u\24\28small\29 {
                width: 41.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\34 u\28small\29,
            .\34 u\24\28small\29 {
                width: 33.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\33 u\28small\29,
            .\33 u\24\28small\29 {
                width: 25%;
                clear: none;
                margin-left: 0;
            }

            .\32 u\28small\29,
            .\32 u\24\28small\29 {
                width: 16.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 u\28small\29,
            .\31 u\24\28small\29 {
                width: 8.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\31 2u\24\28small\29+*,
            .\31 1u\24\28small\29+*,
            .\31 0u\24\28small\29+*,
            .\39 u\24\28small\29+*,
            .\38 u\24\28small\29+*,
            .\37 u\24\28small\29+*,
            .\36 u\24\28small\29+*,
            .\35 u\24\28small\29+*,
            .\34 u\24\28small\29+*,
            .\33 u\24\28small\29+*,
            .\32 u\24\28small\29+*,
            .\31 u\24\28small\29+* {
                clear: left;
            }

            .\-11u\28small\29 {
                margin-left: 91.66667%;
            }

            .\-10u\28small\29 {
                margin-left: 83.33333%;
            }

            .\-9u\28small\29 {
                margin-left: 75%;
            }

            .\-8u\28small\29 {
                margin-left: 66.66667%;
            }

            .\-7u\28small\29 {
                margin-left: 58.33333%;
            }

            .\-6u\28small\29 {
                margin-left: 50%;
            }

            .\-5u\28small\29 {
                margin-left: 41.66667%;
            }

            .\-4u\28small\29 {
                margin-left: 33.33333%;
            }

            .\-3u\28small\29 {
                margin-left: 25%;
            }

            .\-2u\28small\29 {
                margin-left: 16.66667%;
            }

            .\-1u\28small\29 {
                margin-left: 8.33333%;
            }

        }

        @media screen and (max-width: 480px) {

            .row>* {
                padding: 0 0 0 1.25em;
            }

            .row {
                margin: 0 0 -1px -1.25em;
            }

            .row.uniform>* {
                padding: 1.25em 0 0 1.25em;
            }

            .row.uniform {
                margin: -1.25em 0 -1px -1.25em;
            }

            .row.\32 00\25>* {
                padding: 0 0 0 2.5em;
            }

            .row.\32 00\25 {
                margin: 0 0 -1px -2.5em;
            }

            .row.uniform.\32 00\25>* {
                padding: 2.5em 0 0 2.5em;
            }

            .row.uniform.\32 00\25 {
                margin: -2.5em 0 -1px -2.5em;
            }

            .row.\31 50\25>* {
                padding: 0 0 0 1.875em;
            }

            .row.\31 50\25 {
                margin: 0 0 -1px -1.875em;
            }

            .row.uniform.\31 50\25>* {
                padding: 1.875em 0 0 1.875em;
            }

            .row.uniform.\31 50\25 {
                margin: -1.875em 0 -1px -1.875em;
            }

            .row.\35 0\25>* {
                padding: 0 0 0 0.625em;
            }

            .row.\35 0\25 {
                margin: 0 0 -1px -0.625em;
            }

            .row.uniform.\35 0\25>* {
                padding: 0.625em 0 0 0.625em;
            }

            .row.uniform.\35 0\25 {
                margin: -0.625em 0 -1px -0.625em;
            }

            .row.\32 5\25>* {
                padding: 0 0 0 0.3125em;
            }

            .row.\32 5\25 {
                margin: 0 0 -1px -0.3125em;
            }

            .row.uniform.\32 5\25>* {
                padding: 0.3125em 0 0 0.3125em;
            }

            .row.uniform.\32 5\25 {
                margin: -0.3125em 0 -1px -0.3125em;
            }

            .\31 2u\28xsmall\29,
            .\31 2u\24\28xsmall\29 {
                width: 100%;
                clear: none;
                margin-left: 0;
            }

            .\31 1u\28xsmall\29,
            .\31 1u\24\28xsmall\29 {
                width: 91.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 0u\28xsmall\29,
            .\31 0u\24\28xsmall\29 {
                width: 83.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\39 u\28xsmall\29,
            .\39 u\24\28xsmall\29 {
                width: 75%;
                clear: none;
                margin-left: 0;
            }

            .\38 u\28xsmall\29,
            .\38 u\24\28xsmall\29 {
                width: 66.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\37 u\28xsmall\29,
            .\37 u\24\28xsmall\29 {
                width: 58.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\36 u\28xsmall\29,
            .\36 u\24\28xsmall\29 {
                width: 50%;
                clear: none;
                margin-left: 0;
            }

            .\35 u\28xsmall\29,
            .\35 u\24\28xsmall\29 {
                width: 41.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\34 u\28xsmall\29,
            .\34 u\24\28xsmall\29 {
                width: 33.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\33 u\28xsmall\29,
            .\33 u\24\28xsmall\29 {
                width: 25%;
                clear: none;
                margin-left: 0;
            }

            .\32 u\28xsmall\29,
            .\32 u\24\28xsmall\29 {
                width: 16.6666666667%;
                clear: none;
                margin-left: 0;
            }

            .\31 u\28xsmall\29,
            .\31 u\24\28xsmall\29 {
                width: 8.3333333333%;
                clear: none;
                margin-left: 0;
            }

            .\31 2u\24\28xsmall\29+*,
            .\31 1u\24\28xsmall\29+*,
            .\31 0u\24\28xsmall\29+*,
            .\39 u\24\28xsmall\29+*,
            .\38 u\24\28xsmall\29+*,
            .\37 u\24\28xsmall\29+*,
            .\36 u\24\28xsmall\29+*,
            .\35 u\24\28xsmall\29+*,
            .\34 u\24\28xsmall\29+*,
            .\33 u\24\28xsmall\29+*,
            .\32 u\24\28xsmall\29+*,
            .\31 u\24\28xsmall\29+* {
                clear: left;
            }

            .\-11u\28xsmall\29 {
                margin-left: 91.66667%;
            }

            .\-10u\28xsmall\29 {
                margin-left: 83.33333%;
            }

            .\-9u\28xsmall\29 {
                margin-left: 75%;
            }

            .\-8u\28xsmall\29 {
                margin-left: 66.66667%;
            }

            .\-7u\28xsmall\29 {
                margin-left: 58.33333%;
            }

            .\-6u\28xsmall\29 {
                margin-left: 50%;
            }

            .\-5u\28xsmall\29 {
                margin-left: 41.66667%;
            }

            .\-4u\28xsmall\29 {
                margin-left: 33.33333%;
            }

            .\-3u\28xsmall\29 {
                margin-left: 25%;
            }

            .\-2u\28xsmall\29 {
                margin-left: 16.66667%;
            }

            .\-1u\28xsmall\29 {
                margin-left: 8.33333%;
            }

        }

        /* Basic */

        @-ms-viewport {
            width: device-width;
        }

        body {
            -ms-overflow-style: scrollbar;
        }

        @media screen and (max-width: 480px) {

            html,
            body {
                min-width: 320px;
            }

        }

        body {
            background: #fff;
        }

        body.is-loading *,
        body.is-loading *:before,
        body.is-loading *:after {
            -moz-animation: none !important;
            -webkit-animation: none !important;
            -ms-animation: none !important;
            animation: none !important;
            -moz-transition: none !important;
            -webkit-transition: none !important;
            -ms-transition: none !important;
            transition: none !important;
        }

        /* Type */

        body,
        input,
        textarea {
            color: #9a9a9a;
            font-family: "Source Sans Pro", Arial, Helvetica, sans-serif;
            font-size: 14pt;
            font-weight: 400;
            line-height: 1.65;
        }

        @media screen and (max-width: 1680px) {

            body,
            input,
            textarea {
                font-size: 12pt;
            }

        }

        @media screen and (max-width: 1280px) {

            body,
            input,
            textarea {
                font-size: 12pt;
            }

        }

        @media screen and (max-width: 980px) {

            body,
            input,
            textarea {
                font-size: 12pt;
            }

        }

        @media screen and (max-width: 736px) {

            body,
            input,
            textarea {
                font-size: 12pt;
            }

        }

        @media screen and (max-width: 480px) {

            body,
            input,
            textarea {
                font-size: 12pt;
            }

        }

        a {
            color: #6cc091;
            text-decoration: underline;
        }

        a:hover {
            text-decoration: none;
        }

        strong,
        b {
            color: #555;
            font-weight: 600;
        }

        em,
        i {
            font-style: italic;
        }

        p {
            margin: 0 0 2em 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #555;
            font-weight: 400;
            line-height: 1.5;
            margin: 0 0 1em 0;
        }

        h1 a,
        h2 a,
        h3 a,
        h4 a,
        h5 a,
        h6 a {
            color: inherit;
            text-decoration: none;
        }

        h2 {
            font-size: 1.85em;
            font-weight: 300;
        }

        h3 {
            font-size: 1.75em;
        }

        @media screen and (max-width: 480px) {

            h3 {
                font-size: 1.25em;
            }

        }

        h4 {
            font-size: 1.5em;
        }

        h5 {
            font-size: 0.9em;
        }

        h6 {
            font-size: 0.7em;
        }

        sub {
            font-size: 0.8em;
            position: relative;
            top: 0.5em;
        }

        sup {
            font-size: 0.8em;
            position: relative;
            top: -0.5em;
        }

        blockquote {
            border-left: solid 4px #dbdbdb;
            font-style: italic;
            margin: 0 0 2em 0;
            padding: 0.5em 0 0.5em 2em;
        }

        code {
            background: rgba(144, 144, 144, 0.075);
            border-radius: 0;
            border: solid 1px #dbdbdb;
            font-family: "Courier New", monospace;
            font-size: 0.9em;
            margin: 0 0.25em;
            padding: 0.25em 0.65em;
        }

        pre {
            -webkit-overflow-scrolling: touch;
            font-family: "Courier New", monospace;
            font-size: 0.9em;
            margin: 0 0 2em 0;
        }

        pre code {
            display: block;
            line-height: 1.75;
            padding: 1em 1.5em;
            overflow-x: auto;
        }

        hr {
            border: 0;
            border-bottom: solid 1px #dbdbdb;
            margin: 2em 0;
        }

        hr.major {
            margin: 3em 0;
        }

        .align-left {
            text-align: left;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .inner {
            max-width: 75em;
            margin: 0 auto;
        }

        @media screen and (max-width: 1280px) {

            .inner {
                max-width: 90%;
            }

        }

        @media screen and (max-width: 480px) {

            .inner {
                max-width: 90%;
            }

        }

        /* Section/Article */

        section.special,
        article.special {
            text-align: center;
        }

        section.special article,
        article.special article {
            text-align: left;
        }

        section.wrapper,
        article.wrapper {
            padding: 6em 0;
        }

        section.wrapper header,
        article.wrapper header {
            margin-bottom: 4em;
        }

        section.wrapper header h2,
        article.wrapper header h2 {
            font-size: 2.75em;
            margin: 0 0 .5em 0;
        }

        section.wrapper header p,
        article.wrapper header p {
            font-size: 1em;
        }

        section.wrapper article header,
        article.wrapper article header {
            margin: 0;
        }

        @media screen and (max-width: 980px) {

            section.wrapper,
            article.wrapper {
                padding: 4em 0;
            }

        }

        @media screen and (max-width: 736px) {

            section.wrapper,
            article.wrapper {
                padding: 3em 0;
            }

            section.wrapper header,
            article.wrapper header {
                margin-bottom: 2em;
            }

            section.wrapper header h2,
            article.wrapper header h2 {
                font-size: 2em;
            }

            section.wrapper header p,
            article.wrapper header p {
                font-size: .9em;
            }

        }

        @media screen and (max-width: 480px) {

            section.wrapper article,
            article.wrapper article {
                text-align: center;
            }

        }

        header p {
            color: #bbb;
            position: relative;
            margin: 0 0 1.5em 0;
        }

        header h2+p {
            font-size: 1.25em;
            margin-top: -1em;
        }

        header h3+p {
            font-size: 1.1em;
            margin-top: -0.8em;
        }

        header h4+p,
        header h5+p,
        header h6+p {
            font-size: 0.9em;
            margin-top: -0.6em;
        }

        /* Flex */

        .flex {
            display: -ms-flexbox;
            -ms-flex-wrap: wrap;
            -ms-flex-pack: justify;
            -moz-justify-content: space-between;
            -webkit-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            display: -moz-flex;
            display: -webkit-flex;
            display: -ms-flex;
            display: flex;
            -moz-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
        }

        .flex.flex-2 {
            -moz-justify-content: space-between;
            -webkit-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
        }

        .flex.flex-2 article {
            width: 50%;
        }

        @media screen and (max-width: 980px) {

            .flex.flex-2 article {
                width: 100%;
                margin-bottom: 3em;
            }

            .flex.flex-2 article:last-child {
                margin-bottom: 0;
            }

        }

        @media screen and (max-width: 480px) {

            .flex.flex-2 br {
                display: none;
            }

        }

        /* Form */

        /*	form {*/
        /*		margin: 0 0 2em 0;*/
        /*	}*/

        /*		form .field {*/
        /*			margin-bottom: 1.5em;*/
        /*		}*/

        /*			form .field.half {*/
        /*				display: inline-block;*/
        /*				width: 48%;*/
        /*			}*/

        /*				form .field.half.first {*/
        /*					margin-right: 3%;*/
        /*				}*/

        /*		@media screen and (max-width: 980px) {*/

        /*			form .field.half {*/
        /*				display: block;*/
        /*				width: 100%;*/
        /*			}*/

        /*				form .field.half.first {*/
        /*					margin-right: 0;*/
        /*				}*/

        /*		}*/

        /*	label {*/
        /*		color: #555;*/
        /*		display: block;*/
        /*		font-size: 0.9em;*/
        /*		font-weight: 600;*/
        /*		margin: 0 0 1em 0;*/
        /*	}*/

        /*	input[type="text"],*/
        /*	input[type="password"],*/
        /*	input[type="email"],*/
        /*	input[type="tel"],*/
        /*	select,*/
        /*	textarea {*/
        /*		-moz-appearance: none;*/
        /*		-webkit-appearance: none;*/
        /*		-ms-appearance: none;*/
        /*		appearance: none;*/
        /*		background: #6cc091;*/
        /*		border-radius: 10px;*/
        /*		border: none;*/
        /*		border: solid 2px #8dcca9;*/
        /*		color: #fff;*/
        /*		display: block;*/
        /*		outline: 0;*/
        /*		padding: 0 1em;*/
        /*		text-decoration: none;*/
        /*		width: 100%;*/
        /*	}*/

        /*		input[type="text"]:invalid,*/
        /*		input[type="password"]:invalid,*/
        /*		input[type="email"]:invalid,*/
        /*		input[type="tel"]:invalid,*/
        /*		select:invalid,*/
        /*		textarea:invalid {*/
        /*			box-shadow: none;*/
        /*		}*/

        /*		input[type="text"]:focus,*/
        /*		input[type="password"]:focus,*/
        /*		input[type="email"]:focus,*/
        /*		input[type="tel"]:focus,*/
        /*		select:focus,*/
        /*		textarea:focus {*/
        /*			border-color: #4bae77;*/
        /*			box-shadow: 0 0 0 1px #4bae77;*/
        /*		}*/

        /*	.select-wrapper {*/
        /*		text-decoration: none;*/
        /*		display: block;*/
        /*		position: relative;*/
        /*	}*/

        /*		.select-wrapper:before {*/
        /*			content: "";*/
        /*			-moz-osx-font-smoothing: grayscale;*/
        /*			-webkit-font-smoothing: antialiased;*/
        /*			font-family: FontAwesome;*/
        /*			font-style: normal;*/
        /*			font-weight: normal;*/
        /*			text-transform: none !important;*/
        /*		}*/

        /*		.select-wrapper:before {*/
        /*			color: #fff;*/
        /*			display: block;*/
        /*			height: 2.75em;*/
        /*			line-height: 2.75em;*/
        /*			pointer-events: none;*/
        /*			position: absolute;*/
        /*			right: 0;*/
        /*			text-align: center;*/
        /*			top: 0;*/
        /*			width: 2.75em;*/
        /*		}*/

        /*		.select-wrapper select::-ms-expand {*/
        /*			display: none;*/
        /*		}*/

        /*	input[type="text"],*/
        /*	input[type="password"],*/
        /*	input[type="email"],*/
        /*	select {*/
        /*		height: 2.75em;*/
        /*	}*/

        /*	textarea {*/
        /*		padding: 0.75em 1em;*/
        /*	}*/

        /*	input[type="checkbox"],*/
        /*	input[type="radio"] {*/
        /*		-moz-appearance: none;*/
        /*		-webkit-appearance: none;*/
        /*		-ms-appearance: none;*/
        /*		appearance: none;*/
        /*		display: block;*/
        /*		float: left;*/
        /*		margin-right: -2em;*/
        /*		opacity: 0;*/
        /*		width: 1em;*/
        /*		z-index: -1;*/
        /*	}*/

        /*		input[type="checkbox"] + label,*/
        /*		input[type="radio"] + label {*/
        /*			text-decoration: none;*/
        /*			color: #9a9a9a;*/
        /*			cursor: pointer;*/
        /*			display: inline-block;*/
        /*			font-size: 1em;*/
        /*			font-weight: 400;*/
        /*			padding-left: 2.4em;*/
        /*			padding-right: 0.75em;*/
        /*			position: relative;*/
        /*		}*/

        /*			input[type="checkbox"] + label:before,*/
        /*			input[type="radio"] + label:before {*/
        /*				-moz-osx-font-smoothing: grayscale;*/
        /*				-webkit-font-smoothing: antialiased;*/
        /*				font-family: FontAwesome;*/
        /*				font-style: normal;*/
        /*				font-weight: normal;*/
        /*				text-transform: none !important;*/
        /*			}*/

        /*			input[type="checkbox"] + label:before,*/
        /*			input[type="radio"] + label:before {*/
        /*				background: rgba(144, 144, 144, 0.075);*/
        /*				border-radius: 0;*/
        /*				border: solid 1px #8dcca9;*/
        /*				content: '';*/
        /*				display: inline-block;*/
        /*				height: 1.65em;*/
        /*				left: 0;*/
        /*				line-height: 1.58125em;*/
        /*				position: absolute;*/
        /*				text-align: center;*/
        /*				top: 0;*/
        /*				width: 1.65em;*/
        /*			}*/

        /*		input[type="checkbox"]:checked + label:before,*/
        /*		input[type="radio"]:checked + label:before {*/
        /*			background: #6cc091;*/
        /*			border-color: #6cc091;*/
        /*			color: #ffffff;*/
        /*			content: '\f00c';*/
        /*		}*/

        /*		input[type="checkbox"]:focus + label:before,*/
        /*		input[type="radio"]:focus + label:before {*/
        /*			border-color: #6cc091;*/
        /*			box-shadow: 0 0 0 1px #6cc091;*/
        /*		}*/

        /*	input[type="checkbox"] + label:before {*/
        /*		border-radius: 0;*/
        /*	}*/

        /*	input[type="radio"] + label:before {*/
        /*		border-radius: 100%;*/
        /*	}*/

        /*	::-webkit-input-placeholder {*/
        /*		color: #c4e5d3 !important;*/
        /*		opacity: 1.0;*/
        /*	}*/

        /*	:-moz-placeholder {*/
        /*		color: #c4e5d3 !important;*/
        /*		opacity: 1.0;*/
        /*	}*/

        /*	::-moz-placeholder {*/
        /*		color: #c4e5d3 !important;*/
        /*		opacity: 1.0;*/
        /*	}*/

        /*	:-ms-input-placeholder {*/
        /*		color: #c4e5d3 !important;*/
        /*		opacity: 1.0;*/
        /*	}*/

        /*	.formerize-placeholder {*/
        /*		color: #c4e5d3 !important;*/
        /*		opacity: 1.0;*/
        /*	}*/

        /* Box */

        .box {
            border: solid 1px #dbdbdb;
            margin-bottom: 2em;
            padding: 1.5em;
        }

        .box> :last-child,
        .box> :last-child> :last-child,
        .box> :last-child> :last-child> :last-child {
            margin-bottom: 0;
        }

        .box.alt {
            border: 0;
            border-radius: 0;
            padding: 0;
        }

        .box.person {
            border: solid 1px #8dcca9;
            padding: 3em 1.5em;
        }

        .box.person h3 {
            margin: 0;
        }

        .box.person .image {
            margin-bottom: 1em;
        }

        .box.person .image img {
            max-width: 100%;
        }

        /* Icon */

        .icon {
            text-decoration: none;
            border-bottom: none;
            position: relative;
        }

        .icon:before {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            text-transform: none !important;
        }

        .icon>.label {
            display: none;
        }

        /* Image */

        .image {
            border-radius: 0;
            border: 0;
            display: inline-block;
            position: relative;
        }

        .image img {
            border-radius: 0;
            display: block;
        }

        .image.left,
        .image.right {
            max-width: 40%;
        }

        .image.left img,
        .image.right img {
            width: 100%;
        }

        .image.round img {
            border-radius: 100%;
        }

        .image.left {
            float: left;
            padding: 0 1.5em 1em 0;
            top: 0.25em;
        }

        .image.right {
            float: right;
            padding: 0 0 1em 1.5em;
            top: 0.25em;
        }

        .image.fit {
            display: block;
            margin: 0 0 2em 0;
            width: 100%;
        }

        .image.fit img {
            width: 100%;
        }

        .image.main {
            display: block;
            margin: 0 0 3em 0;
            width: 100%;
        }

        .image.main img {
            width: 100%;
        }

        /* List */

        ol {
            list-style: decimal;
            margin: 0 0 2em 0;
            padding-left: 1.25em;
        }

        ol li {
            padding-left: 0.25em;
        }

        ul {
            list-style: disc;
            margin: 0 0 2em 0;
            padding-left: 1em;
        }

        ul li {
            padding-left: 0.5em;
        }

        ul.alt {
            list-style: none;
            padding-left: 0;
        }

        ul.alt li {
            border-top: solid 1px #dbdbdb;
            padding: 0.5em 0;
        }

        ul.alt li:first-child {
            border-top: 0;
            padding-top: 0;
        }

        ul.alt.dark li {
            border-top: solid 1px rgba(0, 0, 0, 0.25);
        }

        ul.icons {
            cursor: default;
            list-style: none;
            padding-left: 0;
        }

        ul.icons li {
            display: inline-block;
            padding: 0 1em 0 0;
        }

        ul.icons li:last-child {
            padding-right: 0;
        }

        ul.icons li .icon:before {
            font-size: 2em;
        }

        ul.actions {
            cursor: default;
            list-style: none;
            padding-left: 0;
        }

        ul.actions li {
            display: inline-block;
            padding: 0 1em 0 0;
            vertical-align: middle;
        }

        ul.actions li:last-child {
            padding-right: 0;
        }

        ul.actions.small li {
            padding: 0 0.5em 0 0;
        }

        ul.actions.vertical li {
            display: block;
            padding: 1em 0 0 0;
        }

        ul.actions.vertical li:first-child {
            padding-top: 0;
        }

        ul.actions.vertical li>* {
            margin-bottom: 0;
        }

        ul.actions.vertical.small li {
            padding: 0.5em 0 0 0;
        }

        ul.actions.vertical.small li:first-child {
            padding-top: 0;
        }

        ul.actions.fit {
            display: table;
            margin-left: -1em;
            padding: 0;
            table-layout: fixed;
            width: calc(100% + 1em);
        }

        ul.actions.fit li {
            display: table-cell;
            padding: 0 0 0 1em;
        }

        ul.actions.fit li>* {
            margin-bottom: 0;
        }

        ul.actions.fit.small {
            margin-left: -0.5em;
            width: calc(100% + 0.5em);
        }

        ul.actions.fit.small li {
            padding: 0 0 0 0.5em;
        }

        @media screen and (max-width: 480px) {

            ul.actions {
                margin: 0 0 2em 0;
            }

            ul.actions li {
                padding: 1em 0 0 0;
                display: block;
                text-align: center;
                width: 100%;
            }

            ul.actions li:first-child {
                padding-top: 0;
            }

            ul.actions li>* {
                width: 100%;
                margin: 0 !important;
            }

            ul.actions li>*.icon:before {
                margin-left: -2em;
            }

            ul.actions.small li {
                padding: 0.5em 0 0 0;
            }

            ul.actions.small li:first-child {
                padding-top: 0;
            }

        }

        dl {
            margin: 0 0 2em 0;
        }

        dl dt {
            display: block;
            font-weight: 600;
            margin: 0 0 1em 0;
        }

        dl dd {
            margin-left: 2em;
        }



        /* Button */

        input[type="submit"],
        input[type="reset"],
        input[type="button"],
        button,
        .button {
            -moz-appearance: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            appearance: none;
            -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            background-color: transparent;
            box-shadow: inset 0 0 0 3px #6cc091;
            color: #6cc091 !important;
            border-radius: 30px;
            border: 0;
            cursor: pointer;
            display: inline-block;
            font-size: .75em;
            font-weight: 400;
            height: 3.75em;
            line-height: 3.85em;
            letter-spacing: 2px;
            padding: 0 4em;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            white-space: nowrap;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover,
        input[type="button"]:hover,
        button:hover,
        .button:hover {
            background-color: rgba(108, 192, 145, 0.15);
        }

        input[type="submit"]:active,
        input[type="reset"]:active,
        input[type="button"]:active,
        button:active,
        .button:active {
            background-color: rgba(108, 192, 145, 0.15);
        }

        input[type="submit"].icon,
        input[type="reset"].icon,
        input[type="button"].icon,
        button.icon,
        .button.icon {
            padding-left: 1.35em;
        }

        input[type="submit"].icon:before,
        input[type="reset"].icon:before,
        input[type="button"].icon:before,
        button.icon:before,
        .button.icon:before {
            margin-right: 0.5em;
        }

        input[type="submit"].fit,
        input[type="reset"].fit,
        input[type="button"].fit,
        button.fit,
        .button.fit {
            display: block;
            margin: 0 0 1em 0;
            width: 100%;
        }

        input[type="submit"].small,
        input[type="reset"].small,
        input[type="button"].small,
        button.small,
        .button.small {
            font-size: 0.8em;
        }

        input[type="submit"].big,
        input[type="reset"].big,
        input[type="button"].big,
        button.big,
        .button.big {
            font-size: 1.35em;
        }

        input[type="submit"].alt,
        input[type="reset"].alt,
        input[type="button"].alt,
        button.alt,
        .button.alt {
            background-color: transparent;
            box-shadow: inset 0 0 0 3px #FFF;
            color: #fff !important;
        }

        input[type="submit"].alt:hover,
        input[type="reset"].alt:hover,
        input[type="button"].alt:hover,
        button.alt:hover,
        .button.alt:hover {
            background-color: #7ec89e;
        }

        input[type="submit"].alt:active,
        input[type="reset"].alt:active,
        input[type="button"].alt:active,
        button.alt:active,
        .button.alt:active {
            background-color: #7ec89e;
        }

        input[type="submit"].alt.icon:before,
        input[type="reset"].alt.icon:before,
        input[type="button"].alt.icon:before,
        button.alt.icon:before,
        .button.alt.icon:before {
            color: #bbb;
        }

        input[type="submit"].special,
        input[type="reset"].special,
        input[type="button"].special,
        button.special,
        .button.special {
            background-color: #6cc091;
            color: #ffffff !important;
        }

        input[type="submit"].special:hover,
        input[type="reset"].special:hover,
        input[type="button"].special:hover,
        button.special:hover,
        .button.special:hover {
            background-color: #7ec89e;
        }

        input[type="submit"].special:active,
        input[type="reset"].special:active,
        input[type="button"].special:active,
        button.special:active,
        .button.special:active {
            background-color: #5ab884;
        }

        input[type="submit"].disabled,
        input[type="submit"]:disabled,
        input[type="reset"].disabled,
        input[type="reset"]:disabled,
        input[type="button"].disabled,
        input[type="button"]:disabled,
        button.disabled,
        button:disabled,
        .button.disabled,
        .button:disabled {
            background-color: #9a9a9a !important;
            box-shadow: inset 0 -0.15em 0 0 rgba(0, 0, 0, 0.15);
            color: #fff !important;
            cursor: default;
            opacity: 0.25;
        }

        @media screen and (max-width: 480px) {

            input[type="submit"],
            input[type="reset"],
            input[type="button"],
            button,
            .button {
                padding: 0;
                width: 100%;
            }

        }

        /* Header */

        .subpage {
            padding-top: 44px;
        }

        .subpage #header {
            background: #6cc091;
            top: 0;
            height: 44px;
            line-height: 44px;
            position: fixed;
        }

        #header {
            color: #fff;
            cursor: default;
            height: 3.25em;
            left: 0;
            line-height: 3.25em;
            position: absolute;
            text-align: right;
            top: 2em;
            width: 100%;
            z-index: 10001;
        }

        #header .inner {
            margin: 0 auto;
            position: relative;
        }

        #header .logo {
            color: #ffffff;
            display: inline-block;
            font-weight: 400;
            height: inherit;
            left: 0;
            line-height: inherit;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 0;
            font-size: 1em;
        }

        #header .logo strong {
            color: #ffffff;
            font-weight: 600;
        }

        #header a {
            -moz-transition: color 0.2s ease-in-out;
            -webkit-transition: color 0.2s ease-in-out;
            -ms-transition: color 0.2s ease-in-out;
            transition: color 0.2s ease-in-out;
            display: inline-block;
            padding: 0 0.75em;
            color: inherit;
            text-decoration: none;
            font-size: 1em;
        }

        #header a:hover {
            color: #ffffff;
        }

        #header a:last-child {
            padding-right: 0;
        }

        #header a.navPanelToggle {
            display: none;
            text-decoration: none;
            height: 4em;
            width: 4em;
            z-index: 10003;
        }

        #header a.navPanelToggle .fa {
            font-size: 1.25em;
        }

        @media screen and (max-width: 980px) {

            #header a.navPanelToggle {
                display: inline-block;
            }

        }

        @media screen and (max-width: 736px) {

            #header a {
                padding: 0 0.5em;
            }

        }

        @media screen and (max-width: 980px) {

            #header {
                top: 1em;
            }

        }

        @media screen and (max-width: 736px) {

            #header {
                top: .5em;
            }

        }

        @media screen and (max-width: 480px) {

            #header {
                font-size: .9em;
            }

        }

        /* Nav */

        @media screen and (max-width: 980px) {

            #nav {
                display: none;
            }

        }

        #navPanel {
            -moz-transform: translatex(20em);
            -webkit-transform: translatex(20em);
            -ms-transform: translatex(20em);
            transform: translatex(20em);
            -moz-transition: -moz-transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
            -webkit-transition: -webkit-transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
            -ms-transition: -ms-transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out, visibility 0.2s ease-in-out;
            -webkit-overflow-scrolling: touch;
            visibility: hidden;
            overflow-y: auto;
            position: fixed;
            right: 0;
            top: 0;
            background: #6cc091;
            color: #daefe3;
            height: 100%;
            max-width: 80%;
            width: 20em;
            padding: 0.5em 1.25em;
            z-index: 10010;
        }

        #navPanel.visible {
            -moz-transform: translatex(0);
            -webkit-transform: translatex(0);
            -ms-transform: translatex(0);
            transform: translatex(0);
            box-shadow: 0 0 1.5em 0 rgba(0, 0, 0, 0.2);
            visibility: visible;
        }

        #navPanel a:not(.close) {
            border-top: solid 1px #8dcca9;
            color: #daefe3;
            font-weight: 600;
            display: block;
            padding: 0.75em 0;
            text-decoration: none;
            font-weight: 400;
        }

        #navPanel a:not(.close):first-child {
            border: none;
        }

        #navPanel .close {
            text-decoration: none;
            -moz-transition: color 0.2s ease-in-out;
            -webkit-transition: color 0.2s ease-in-out;
            -ms-transition: color 0.2s ease-in-out;
            transition: color 0.2s ease-in-out;
            -webkit-tap-highlight-color: transparent;
            border: 0;
            color: #daefe3;
            cursor: pointer;
            display: block;
            height: 4em;
            padding-right: 1.25em;
            position: absolute;
            right: 0;
            text-align: right;
            top: 0;
            vertical-align: middle;
            width: 5em;
        }

        #navPanel .close:before {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            text-transform: none !important;
            content: '\f00d';
            width: 3em;
            height: 3em;
            line-height: 3em;
            display: block;
            position: absolute;
            right: 0;
            top: 0;
            text-align: center;
        }

        #navPanel .close:hover {
            color: inherit;
        }

        /* Banner */

        #banner {
            padding: 8em 0 9em 0;
            background-image: url(./images/banner.jpg);
            background-size: cover;
            background-position: bottom;
            background-attachment: fixed;
            background-repeat: no-repeat;
            text-align: center;
            position: relative;
        }

        #banner:before {
            content: '';
            background: rgba(75, 75, 93, 0.85);
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        #banner .inner {
            border-top: 2px solid rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 10005;
            padding-top: 8em;
        }

        #banner h1 {
            font-size: 3.5em;
            font-weight: 400;
            color: #fff;
            line-height: 1em;
            margin: 0 0 1em 0;
            padding: 0;
        }

        #banner h3 {
            font-weight: 400;
            color: #fff;
            margin: 0;
            font-size: 1.5em;
        }

        #banner .icon {
            color: #6cc091;
            font-size: 2em;
        }

        #banner p {
            font-size: 1em;
            color: rgba(255, 255, 255, 0.55);
            margin-bottom: 1.75em;
        }

        #banner .flex {
            -ms-flex-pack: center;
            -moz-justify-content: center;
            -webkit-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            text-align: center;
            margin: 0 auto 4em auto;
        }

        #banner .flex div {
            border-right: 2px solid rgba(255, 255, 255, 0.2);
            padding: 0 8em;
        }

        #banner .flex div:last-child {
            border: none;
            padding-right: 0;
        }

        #banner .flex div:first-child {
            padding-left: 0;
        }

        #banner .flex div p {
            margin: 0;
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) {

            #banner {
                background-attachment: scroll;
            }

        }

        @media screen and (max-width: 1680px) {

            #banner .flex div {
                padding: 0 6em;
            }

        }

        @media screen and (max-width: 1280px) {

            #banner {
                padding: 7em 0 6em 0;
            }

            #banner .inner {
                padding-top: 6em;
            }

            #banner h1 {
                font-size: 3em;
            }

            #banner h3 {
                font-size: 1.25em;
            }

            #banner .flex div {
                padding: 0 3em;
            }

        }

        @media screen and (max-width: 980px) {

            #banner {
                background-attachment: scroll;
                padding: 5em 0 4em 0;
            }

            #banner .inner {
                padding-top: 4em;
            }

            #banner h1 {
                font-size: 2.5em;
            }

            #banner h3 {
                font-size: 1.25em;
            }

            #banner .flex div {
                font-size: .85em;
                padding: 0 1.5em;
            }

        }

        @media screen and (max-width: 736px) {

            #banner {
                padding: 4em 0 3em 0;
            }

            #banner .inner {
                padding-top: 3em;
            }

            #banner h1 {
                font-size: 2em;
            }

            #banner h3 {
                font-size: 1.25em;
            }

            #banner .flex {
                -moz-flex-direction: column;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                margin: 0 auto 2em auto;
            }

            #banner .flex div {
                font-size: .85em;
                padding: 0;
                border: none;
                margin-bottom: 1em;
            }

        }

        @media screen and (max-width: 480px) {

            #banner h1 {
                font-size: 1.5em;
            }

        }

        /* Footer */

        #footer {
            padding: 6em 0;
            background: #6cc091;
            color: #fff;
            text-align: center;
        }

        #footer h3 {
            color: #FFF;
            margin-bottom: 2em !important;
        }

        #footer label {
            text-align: left;
            color: #FFF;
        }

        #footer .copyright {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.8em;
            margin: 0 0 2em 0;
            padding: 0;

        }

        #footer .copyright a {
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
        }

        #footer .copyright a:hover {
            color: #FFF;
        }

        @media screen and (max-width: 980px) {

            #footer {
                padding: 4em 0;
            }

        }

        @media screen and (max-width: 736px) {

            #footer {
                padding: 3em 0;
            }

        }
    </style>
    <style>
        /*   input{*/
        /*         width: 65%;*/

        /*    }*/
        /*     select{*/
        /*         width: 65%;*/

        /*     }*/
        /*     body{*/
        /*         background-color:#6cc091;*/
        /*     }*/
        .container {
            /*background-color:red;*/
            width: 50%;

        }


        /*     @media only screen and (max-width: 768px) {*/
        /*  .container {*/
        /*    padding: 5px 7px;*/
        /*    min-width: 30px;*/
        /*  }*/
        /*  .container:after,*/
        /*  .container:before {*/
        /*    border-bottom-width: 12.5px;*/
        /*    border-right-width: 12.5px;*/
        /*    bottom: -12.5px;*/
        /*    right: 12.5px;*/
        /*  }*/
        /*  .container:before {*/
        /*    border-right-width: 12.5px;*/
        /*    bottom: -14px;*/
        /*    right: 11px;*/
        /*  }*/
        /*}*/
        /*.container {*/
        /*position: fixed;   */
        /*   top: 50%;*/
        /*   left: 50%;*/
        /*   transform: translate(-50%, -50%);*/
        /*}*/

        /*#frmajax {*/
        /*   position: absolute;*/
        /*   top: 50%;*/
        /*   left: 50%;*/
        /*   transform: translate(-50%, -50%);*/
        /*}*/
    </style>
    <!--llenar form para actuvar boton enviar-->
    <style>
        .fecdeentrega,
        .fecdesalida {
            /*background: #303F9F;*/
            border-radius: 1px;
            border: 2px solid #f2f2f2;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: "Roboto";
            font-size: 16px;
            padding: 15px;
            width: 100%;
            -webkit-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        /*.contenedor-formulario .formulario input[type="date"]:hover {*/
        /*  background: #1976D2; }*/

        }
    </style>
    <style>
        #dnisolicitante::placeholder {
            font-size: 2.4vh;
            color: #303F9F;

        }

        #celularsolicitante::placeholder {
            font-size: 2.4vh;

            color: #303F9F;
        }

        #correosolicitante::placeholder {
            font-size: 2.4vh;
            color: #303F9F;
        }


        label.label {}

        }
    </style>

    <script language="javascript">
        btnguardar = "";
        function activar(formulario, btnguardar) {
            cont = 0;
            for (i = 0; i < formulario.elements.length; i++) {
                if (formulario.elements[i].value != "") {
                    cont = cont + 1;
                }
                if (btnguardar == "") {
                    if (formulario.elements[i].type == "submit") {
                        btnguardar = formulario.elements[i].name;
                    }
                }
            }
            if (cont == formulario.elements.length) {
                formulario.btnguardar.disabled = false;
            } else {
                formulario.btnguardar.disabled = true;
            }
        }
    </script>

</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="inner">
            <!-- <a href="index.html" class="logo"><strong>Projection</strong> by TEMPLATED</a> -->
            <nav id="nav">
                <a href="index.php">Home</a>
                <a href="">Historial de Registros</a>
                <a href="">Contáctenos</a>
            </nav>
            <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        </div>
    </header>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <header>
                <h1>BIENVENIDO <?php echo $_SESSION['usuario'] ['Nombre']?> </h1>
            </header>

            <div class="flex ">

                <div>
                    <span class="icon fa-truck"></span>
                    <h3>A donde Vamos</h3>
                    <p></p>
                </div>

                <div>
                    <span class="icon fa-lock"></span>
                    <h3>Seguridad</h3>
                    <p>Unidades monitoreadas 24/7 </p>
                </div>

                <div>
                    <span class="icon fa-road"></span>
                    <h3>Filosofía</h3>
                    <p></p>
                </div>

            </div>

            <footer>
                <!--<a href="#" class="button">Cerrar Sesión</a>-->
                <a class="button" href="../salir.php">Cerrar Sesión</a>
            </footer>
        </div>
    </section>


    <!-- Three -->
    <section id="three" class="wrapper align-center">
        <header>

        </header>
        <!--<h1>Bienvenido <?php echo $_SESSION['usuario'] ['Nombre']?> a  </h1>-->
        <h3>FORMULARIO DE REGISTRO</h3>


        <!--<div class="main">-->

        <!--   <section class="signup">-->
        <!--      <img src="images/signup-bg.jpg" alt=""> -->
        <!--     <div class="container">-->
        <!--       <div class="signup-content">-->
        <?php
 
if( isset($_POST['generar_contenido']) ){ //Si se pulso el boton 'generar_contenido' ..
if(empty($_POST['dir' ] ) ){ // Si esta vacio el campo 'anio' entonces damos un mensaje de error.
// echo "<h2>Por favor rellene el formulario</h2>";
// echo "<a href='index.php'><input type='submit' value='Back'/></a>";
echo "Por favor rellene el formulario
<a href='index.php'><input type='submit' value='Back'/></a>";

}

else if(empty($_POST['fecdeentrega']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el fecdeentrega
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['fecdesalida']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el fecdesalida 
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['fecprogpdi']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el fecprogpdi 
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['cliente']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el cliente
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['ruc']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el ruc
<a href='index.php'><input type='submit' value='Back'/></a>";
}

else if(empty($_POST['origen']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el origen
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['destino']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el destino
<a href='index.php'><input type='submit' value='Back'/></a>";
}

else if(empty($_POST['marca']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba la marca
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['modelo']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el modelo 
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['color']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el color
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['vin']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el vin
<a href='index.php'><input type='submit' value='Back'/></a>";
}
else if(empty($_POST['concesionario']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
echo "Por favor escriba el concesionario
<a href='index.php'><input type='submit' value='Back'/></a>";
}


else if(empty($_POST['numdeguia']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
// echo "Por favor escriba el numero de guia";
}
else if(empty($_POST['nombresolicitante']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
// echo "Por favor escriba el numero de guia";
}
else if(empty($_POST['dnisolicitante']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
// echo "Por favor escriba el numero de guia";
}
else if(empty($_POST['celularsolicitante']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
// echo "Por favor escriba el numero de guia";
}
else if(empty($_POST['correosolicitante']) ){ // Si esta vacio el campo 'mes' entonces damos un mensaje de error.
// echo "Por favor escriba el numero de guia";


}





else{
?>

        <center>
            <!--  <div class="main">-->

            <!--    <section class="signup">-->
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <!--      <div class="container">-->
            <!--        <div class="signup-content">-->
            <!--            <div class="contenedor-formulario">-->
            <!--<div class="wrap">-->
            <div class="wrap" id="muestra">
                <h1></h1>
                <table id="muestra" class="tabla">
                    <tr>
                        <td>
                            DIRECCIÓN:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['dir']); //Imprimimos el dir  generada en el form. ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            FEC DE ENTREGA:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['fecdeentrega']); //Imprimimos la fecdeentrega generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            FECHA DE SALIDA:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['fecdesalida']); //Imprimimos la fecdesalida generada en el form. ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            CLIENTE:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['cliente']); //Imprimimos el cliente generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            RUC:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['ruc']); //Imprimimos ruc generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ORIGEN:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['origen']); //Imprimimos origen generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            DESTINO:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['destino']); //Imprimimos el destino generada en el form. ?>
                        </td>
                    </tr>

                    </tr>

                    <tr>
                        <td>
                            MARCA:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['marca']); //Imprimimos la marca generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            MODELO:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['modelo']); //Imprimimos el modelo generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            COLOR:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['color']); //Imprimimos el color generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            VIN:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['vin']); //Imprimimos el vin generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            CONCESIONARIO:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['concesionario']); //Imprimimos el concesionario generada en el form. ?>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            NOMBRE SOLICITANTE:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['nombresolicitante']); //Imprimimos el concesionario generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            DNI SOLICITANTE:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['dnisolicitante']); //Imprimimos el concesionario generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            CELULAR SOLICITANTE:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['celularsolicitante']); //Imprimimos el concesionario generada en el form. ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            CORREO SOLICITANTE:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['correosolicitante']); //Imprimimos el concesionario generada en el form. ?>
                        </td>
                    </tr>

                    <!--<input type="submit" name="submit" class="form-submit" value="Enviar" /> <input class="form-submit" type="reset" />-->


                    <tr>
                        <td>
                            NÚMERO DE GUÍA:
                        </td>
                        <td>
                            <?php echo htmlentities($_POST['numdeguia']); //Imprimimos el concesionario generada en el form. ?>
                        </td>
                    </tr>



                </table>
            </div>
            </br>
            <input type='button' onclick="javascript:imprim2();" value='Imprimir' />
            <!--<a href='index.php'><input type='submit' value='Back' /></a>-->

            <a href='index.php'><input type='submit' value='Nuevo Registro' /></a>


            </div>
            </div>

            <script>
                function imprim2() {
                    var mywindow = window.open('', 'PRINT', 'height=400,width=600');
                    mywindow.document.write('<html><head>');
                    mywindow.document.write('<style>.tabla{width:100%;border-collapse:collapse;margin:16px 0 16px 0;}.tabla th{border:1px solid #ddd;padding:4px;background-color:#d4eefd;text-align:left;font-size:15px;}.tabla td{border:1px solid #ddd;text-align:left;padding:6px;}</style>');
                    mywindow.document.write('</head><body >');
                    mywindow.document.write(document.getElementById('muestra').innerHTML);
                    mywindow.document.write('</body></html>');
                    mywindow.document.close(); // necesario para IE >= 10
                    mywindow.focus(); // necesario para IE >= 10
                    mywindow.print();
                    mywindow.close();
                    return true;
                }
            </script>


    </section>

    </div>
    <br>

    </center>
    <?php
}
}else{
?>
    <center>
        <div class="contenedor-formulario">
            <div class="wrap">
                <h5>LOS CAMPOS CON (*) SON REQUERIDOS.</h5>
                <form id="frmajax" method="POST" action="" onkeyup="activar(this);" action="" class="formulario"
                    name="formulario_registro" method="get" autocomplete="off">


                    <div>
                        <div class="input-group">
                            <label class="label" for="dir">*DIRECCIÓN:</label></br>
                            <select style=" margin-top:18px;" id="dir" name="dir">
                                <option value=""></option>
                                <option value="IDA">IDA</option>
                                <option value="VUELTA">VUELTA</option>
                            </select>



                        </div>

                        <!--<div>-->

                        <div class="input-group">
                            <!--<label style="padding-right:358px;color:#B6B6B6;font-size: 12px;">*AÑO:</label>-->
                            <input type="text" name="anio" id="anio" readonly="readonly" hidden="true">



                            <script>
                                const letrero = document.querySelector("#anio")

                                const fecha = new Date();
                                let anio = fecha.getFullYear()
                                let mes = fecha.getMonth() + 1
                                let dia = fecha.getDate()


                                if (dia < 10) {
                                    dia = '0' + dia
                                }
                                if (mes < 10) {
                                    mes = '0' + mes
                                }
                                letrero.value = `${anio}`

                            </script>
                        </div>
                        <div class="input-group">
                            <!--<label  style="padding-right:358px;color:#B6B6B6;font-size: 12px;" for="mes" >*MES:</label>-->
                            <input type="text" name="mes" id="mes" readonly="readonly" hidden="true">

                            <script>
                                const letrer = document.querySelector("#mes")

                                const fech = new Date();
                                let ani = fech.getFullYear()
                                let me = fech.getMonth() + 1
                                let di = fech.getDate()


                                if (di < 10) {
                                    di = '0' + di
                                }
                                if (me < 10) {
                                    me = '0' + me
                                }
                                letrer.value = `${me}`

                            </script>

                        </div>
                        <div class="input-group">


                            <script>
                                function PasarValorfecha() {
                                    document.getElementById("placadetracto").value = document.getElementById("fecdeentrega").value;
                                }
                            </script>
                            <label class="label" for="fecdeentrega">* FECHA DE ENTREGA:</label></br>
                            <input class="fecdeentrega" type="date" value="" name="fecdeentrega" id="fecdeentrega"
                                onclick"PasarValorfecha()" oninput="join_names();" onpaste="join_names();"
                                onfocus="myFunction()" onchange="obtenerFecha(this)">


                            <script>
                                function obtenerFecha(e) {

                                    var fecha = moment(e.value);
                                    console.log("Fecha original:" + e.value);
                                    console.log("Fecha formateada es: " + fecha.format("DD/MM/YYYY"));
                                }
                            </script>
                            <script src="https://momentjs.com/downloads/moment.js"></script>


                        </div>

                        <div class="input-group">
                            <label class="label" for="fecdesalida">* FECHA ESTIMADA DE SALIDA:</label></br>
                            <input class="fecdesalida" type="date" name="fecdesalida" id="fecdesalida">

                        </div>
                        <div class="input-group">
                            <!--<label class="label" style="color:#B6B6B6;font-size: 12px; " for="pass2" > * CÓDIGO DE VIAJE(DÍA-MES-VIN):</label>		-->
                            <input style=" margin-top:20px;" type="text" name="fecprogpdi" id="fecprogpdi"
                                placeholder="" maxlength="10"
                                oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                readonly="readonly" hidden="true">


                            <!--CONCATENA FECHA DE ENTREGA Y VIN-->

                            <?php
                echo"    <script type='text/javascript'>
                

                      function concatenate(/*String*/string_one, /*String*/string_two, /*boolean*/with_space) {
                    
                         var str = string_one;
var resultado = str.match(/.{1,4}/g); 


 

let B = resultado.reduceRight((a, c) => (a.push(c), a), []);





rslt = B.join('');
// console.log(rslt);


                      
                        if (with_space === true) {
                          return rslt.replace(/-/g, '').slice(0,-4) + string_two.slice(-5).replace(/-/g, '');
                          // slice(5)
                        }
                        else {
                          return string_one.slice(-6).replace(/-/g, '') + string_two.slice(-5).replace(/-/g, '');
                        }
                      }
                      function join_names() {
                        var input_name_first = document.getElementsByName('fecdeentrega')[0].value;
                        var input_name_last = document.getElementsByName('vin')[0].value;
                        var input_name_full = document.getElementsByName('fecprogpdi')[0];
                        var var_name_full = concatenate(input_name_first, input_name_last, true);
                        input_name_full.value = var_name_full;
                      }
                      
                      
                    </script>"
                    
                    ?>









                        </div>


                        <!--soledad alberto aguedo-->




                        <div class="input-group">
                            <input type="text" type="text" maxlength="12"
                                oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                name="ruc" id="ruc" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            <label class="label" for="ruc"> * RUC/DNI:</label>
                        </div>





                        <!--ORIGEN-->







                        <div class="input-group">



                            <input type="text" name="marca" id="marca" onkeypress="return soloLetras(event)"
                                maxlength="20"
                                oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

                            <label class="label" for="marca">* MARCA:</label>

                        </div>
                        <!--<input type="text" name="marca" id="marca">-->

                        <script>
                            function soloLetras(e) {
                                key = e.keyCode || e.which;
                                tecla = String.fromCharCode(key).toLowerCase();
                                letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
                                especiales = "8-37-39-46";

                                tecla_especial = false
                                for (var i in especiales) {
                                    if (key == especiales[i]) {
                                        tecla_especial = true;
                                        break;
                                    }
                                }

                                if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                                    return false;
                                }
                            }
                        </script>
                        <!--<input type="text" name="marca" id="marca" onkeypress="return soloLetras(event)" maxlength="20" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" >-->


                        <!--rocio-->
                        <script>
                            function autocomplete(inp, arr) {

                                var currentFocus;

                                inp.addEventListener("input", function (e) {
                                    var a, b, i, val = this.value;

                                    closeAllLists();
                                    if (!val) { return false; }
                                    currentFocus = -1;

                                    a = document.createElement("DIV");
                                    a.setAttribute("id", this.id + "autocomplete-list");
                                    a.setAttribute("class", "autocomplete-items");

                                    this.parentNode.appendChild(a);
                                    /*for each item in the array...*/
                                    for (i = 0; i < arr.length; i++) {

                                        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {

                                            b = document.createElement("DIV");

                                            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                                            b.innerHTML += arr[i].substr(val.length);

                                            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";

                                            b.addEventListener("click", function (e) {

                                                inp.value = this.getElementsByTagName("input")[0].value;

                                                closeAllLists();
                                            });
                                            a.appendChild(b);
                                        }
                                    }
                                });

                                inp.addEventListener("keydown", function (e) {
                                    var x = document.getElementById(this.id + "autocomplete-list");
                                    if (x) x = x.getElementsByTagName("div");
                                    if (e.keyCode == 40) {

                                        currentFocus++;

                                        addActive(x);
                                    } else if (e.keyCode == 38) { //up

                                        currentFocus--;

                                        addActive(x);
                                    } else if (e.keyCode == 13) {

                                        e.preventDefault();
                                        if (currentFocus > -1) {

                                            if (x) x[currentFocus].click();
                                        }
                                    }
                                });
                                function addActive(x) {

                                    if (!x) return false;

                                    removeActive(x);
                                    if (currentFocus >= x.length) currentFocus = 0;
                                    if (currentFocus < 0) currentFocus = (x.length - 1);

                                    x[currentFocus].classList.add("autocomplete-active");
                                }
                                function removeActive(x) {

                                    for (var i = 0; i < x.length; i++) {
                                        x[i].classList.remove("autocomplete-active");
                                    }
                                }
                                function closeAllLists(elmnt) {

                                    var x = document.getElementsByClassName("autocomplete-items");
                                    for (var i = 0; i < x.length; i++) {
                                        if (elmnt != x[i] && elmnt != inp) {
                                            x[i].parentNode.removeChild(x[i]);
                                        }
                                    }
                                }

                                document.addEventListener("click", function (e) {
                                    closeAllLists(e.target);
                                });
                            }


                            var marcas = ["AGYA",
                                "AUDI",
                                "AVANZA",
                                "BAI",
                                "BAIC", "BRILLIANCE", "BRI", "BYD", "CHA", "CHANGAN", "CHERY", "CHEVROLET", "CHRYSLER", "CITROEN", "DERCO",
                                "DODGE",
                                "ECOSPORT",
                                "EMGRAND 7",
                                "EMGRAND X7 SPORT",
                                "ETIOS",
                                "EXPLORER",
                                "FIAT", "FORD", "FORTUNER", "GE", "GEELY", "GREAT WALL", "HAVAL", "HIACE", "HILUX",
                                "HONDA", "HR-V", "HYU", "HYUNDAI", "HINO", "JAC", "JEEP", "JEI", "JIM",
                                "JIN",
                                "JINBEI",
                                "JINBEI", "JMC", "KIA", "KONECT", "LAND ROVER", "LEXUS", "MAH",
                                "MAHINDRA", "MAZDA", "MERCEDEZ BENZ",
                                "MINI", "MITSUBISHI", "NISAN", "PEUGEOT",
                                "PORSHE", "RENAULT", "RUSH", "SUZUKI", "TOYOTA", "VOL",
                                "VOLKSWAGEN", "VOLVO", "YARIS"];


                            autocomplete(document.getElementById("marca"), marcas);
                        </script>

                        <!--rocio-->
                        <div class="input-group">

                            <input type="text" name="modelo" id="modelo" onkeypress="return checkas(event)"
                                maxlength="20"
                                oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

                            <label class="label" for="modelo"> * MODELO:</label>
                            <!--<input class="tf w-input" id="txtCurp" name="txtCurp" maxlength="256" onkeypress="return checkas(event)" placeholder="No. de CURP" type="text">-->

                        </div>
                        <script>
                            function checkas(e) {
                                tecla = (document.all) ? e.keyCode : e.which;

                                //Tecla de retroceso para borrar, siempre la permite
                                if (tecla == 8) {
                                    return true;
                                }

                                // Patron de entrada, en este caso solo acepta numeros y letras
                                patron = /[A-Za-z0-9]/;
                                tecla_final = String.fromCharCode(tecla);
                                return patron.test(tecla_final);
                            }
                        </script>



                        <!--rocio-->
                        <script>
                            function autocomplete(inp, arr) {

                                var currentFocus;

                                inp.addEventListener("input", function (e) {
                                    var a, b, i, val = this.value;

                                    closeAllLists();
                                    if (!val) { return false; }
                                    currentFocus = -1;

                                    a = document.createElement("DIV");
                                    a.setAttribute("id", this.id + "autocomplete-list");
                                    a.setAttribute("class", "autocomplete-items");

                                    this.parentNode.appendChild(a);
                                    /*for each item in the array...*/
                                    for (i = 0; i < arr.length; i++) {

                                        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {

                                            b = document.createElement("DIV");

                                            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                                            b.innerHTML += arr[i].substr(val.length);

                                            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";

                                            b.addEventListener("click", function (e) {

                                                inp.value = this.getElementsByTagName("input")[0].value;

                                                closeAllLists();
                                            });
                                            a.appendChild(b);
                                        }
                                    }
                                });

                                inp.addEventListener("keydown", function (e) {
                                    var x = document.getElementById(this.id + "autocomplete-list");
                                    if (x) x = x.getElementsByTagName("div");
                                    if (e.keyCode == 40) {

                                        currentFocus++;

                                        addActive(x);
                                    } else if (e.keyCode == 38) { //up

                                        currentFocus--;

                                        addActive(x);
                                    } else if (e.keyCode == 13) {

                                        e.preventDefault();
                                        if (currentFocus > -1) {

                                            if (x) x[currentFocus].click();
                                        }
                                    }
                                });
                                function addActive(x) {

                                    if (!x) return false;

                                    removeActive(x);
                                    if (currentFocus >= x.length) currentFocus = 0;
                                    if (currentFocus < 0) currentFocus = (x.length - 1);

                                    x[currentFocus].classList.add("autocomplete-active");
                                }
                                function removeActive(x) {

                                    for (var i = 0; i < x.length; i++) {
                                        x[i].classList.remove("autocomplete-active");
                                    }
                                }
                                function closeAllLists(elmnt) {

                                    var x = document.getElementsByClassName("autocomplete-items");
                                    for (var i = 0; i < x.length; i++) {
                                        if (elmnt != x[i] && elmnt != inp) {
                                            x[i].parentNode.removeChild(x[i]);
                                        }
                                    }
                                }

                                document.addEventListener("click", function (e) {
                                    closeAllLists(e.target);
                                });
                            }


                            var modelos = ["4RUNNER V6 4.0 AT LTD", "5 AIRCROSS 1.6 THP AT6 SHINE BT", "86 GT MT", "A6", "AGYA 1.0L E MT", "ALASKAN INTENS 4X4 MT DIESEL", "ALASKAN ZEN 4X4 MT DIESEL",
                                "ALL NEW H6 2.0 INTELLIGENT 4X2 6AB", "ALL NEW H6 2.0 SUPREME 4X2 FULL", "APV PASAJERO PLUS", "ACCENT", "ATOS", "ATOS 1.1 GL MT FULL TD E4", "AVANZA 1.5 MT",
                                "AVANZA 1.5 MYT", "AZUL METALICO - SZ6", "BAIC M60", "BALENO 5MT GL", "BERLINGO K9 M 1.6 HDI", "BRONCE METALICO - SZ", "BT50 MT 2.2 4X4 D2 HIGH IPM PER", "BT50 MT 3.2 4X4 D2 HIGH IPM PE",
                                "C5 AIRCROSS 1.6 THP AT SHINE", "C5 AIRCROSS 1.6 THP AT6 FEEL", "C5 AIRCROSS 1.6 THP AT6 SHINE BT", "CAPTUR ZEN 4X2 2.0 AT", "CARRYING PLUS", "CELERIO 1.0 GA MT",
                                "CELERIO 1.0 GLX AMT", "C-ELYSÉE 1.6 VTI MT FEEL", "CERATO", "CIAZ", "CIAZ 1.4 GL MT", "CIAZ 1.4 GL MT + GLP", "CIDAZ", "COROLLA GLI 1.6 M/T ADV", "COROLLA HB 1.2 TURBO CVT",
                                "COROLLA HB 1.2 TURBO MT", "COROLLA SEG MT", "COROLLA XEI CVT", "COROLLA XLI CVT", "COUNTY", "COUNTY III", "COUPE", "CRETA", "CS15 DCT 1.5L FASHION",
                                "CS15 MT 1.5L CONFORT", "CS15 MT 1.5L LUXURY", "CS15 MT 1.5L SPORT LIMITED", "CS35 PLUS 1.6 AT LUXURY", "CS35 PLUS 1.6 MT COMFORTABLE", "CS35 PLUS 1.6 MT LUXURY",
                                "CS55", "CS55 1.5T 6MT COMFORTABLE", "CS55 1.5T 6MT ELITE", "CX3", "CX3 AT 2.0 2WD", "CX3 AT 2.0 2WD GS HIGH IPM II PE", "CX3 CORE", "CX3 MT 2.0 2WD GS CORE IPM II PE",
                                "CX3 MT 2.0 2WD GS ENTRY IPM II PE", "CX-5 AT 2.0 2WD CORE", "CX-5 AT 2.0 2WD HIGH", "CX-5 AT 2.0 AWD HIGH", "CX-5 AT 2.5T AWD SIGNATURE", "CX-5 MT 2.0 2WD CORE",
                                "CX-5 MT 2.0 2WD PRIME", "CX70", "CX70 1.5T MT COMFORTABLE", "CX70 1.6L MT BASIC", "CX70 1.6L MT LUXURY", "CX9 AT 2.5T AWD GS HIGH IPM II PE", "DISCOVERY",
                                "DISCOVERY SPORT", "DS3", "DS3 1.6 120 HP MT", "DS4 1.6 THP 160 AUT6", "DURANGO GT", "DUSTER INTENS 4X2 5MT 1.6 ULC", "DUSTER INTENS 4X2 6MT 2.0",
                                "DUSTER INTENS 4X2 6MT 2.0 ULC", "DUSTER INTENS 4X2 AT 2.0 ULC", "DUSTER ZEN", "DUSTER ZEN 4X2 MT 1.6", "DUSTER ZEN 4X2 MT 1.6 V2", "ECOSPORT", "EDGE",
                                "ELANTRA", "EMBRAND X7 SPORT", "EMGRAND", "EMGRAND 7", "EMGRAND 7 EXCLUSIVE 1.8 MT", "EMGRAND GS", "EMGRAND X7 SPORT", "EMGRAND X7", "ESCAPE", "ESCAPE SE 2.0 L 4X4",
                                "ETIOS", "ETIOS 1.5 M/T", "EX10", "EXPLORER", "F-150", "F3 CACTUS", "F3 CACTUS 1.2 PURETECH 110 BVM FEEL", "F50", "F50 COMFORT 1.6 MT /GLP", "FJ CRUISER A/T DESERT ADVENTURE", "FORD EXPLORER",
                                "FORTUNER", "FORTUNER 2.7 CITY 4X2 A/T", "FORTUNER 2.7 CITY 4X2 AT", "FORTUNER 2.7 FULL 4X2 MT", "FORTUNER 2.8 ADVENTURE 4X4 MT", "FORTUNER MT 3.0 4X4  SUV",
                                "FREESTYLE", "G.NOMADE 2.4 MT 4X4 S/R", "G.NOMADE 2.4 MT 4X2 S/R", "GEELY", "GEELY X7 SPORT", "GRAND i10", "GRAND NEW SUPERVAN 1.5L 11 SEATS",
                                "GRAND NEW SUPERVAN 1.5L 11 SEATS CON AC", "GRAND NOMADE", "GRAND S3 1.6 AT LUXURY", "GRAND S3 1.6 MT LUXURY",
                                "GRAND S3 1.6 MT LUXURY SUNROOF",
                                "GRAND S3 1.6 MT LUXURY+GLP", "GRAND VAN TURISMO 1.5L 11 PASAJEROS", "GREAT WALL H3 4X2 CITY 2.0 5MT + MP5",
                                "GREAT WALL H3 4X4 CITY 2.0 5MT + MP5", "GRIS METALICO - MZ", "GS", "GS EXCLUSIVE 1.8 MT",
                                "GS EXCLUSIVE 1.8 MT / GLP", "GX3",
                                "GX3 EXCLUSIVE 1.5 MT / GLP", "H-1", "H-1 3 VAN", "H-1 6 VAN", "H-1 M/BUS", "H-1 M/BUS SN", "H-1 MBUS 12P 2.5 TDI GL MT - INT GRIS E4",
                                "H-1 MBUS 12P 2.5 TDI GLS MT E4", "H-1 MBUS 12S 2.4 MPI GL MT E4", "H100 TRUCK", "H-100 TRUCK 2.5 CRDi TAC E4", "H100 TRUK",
                                "H2L", "H3 4X4 CITY 2.0 5MT + MULTIMEDIA + GLP", "H350", "HAISE", "HATCH",
                                "HAVAL H2 1.5T GSL 6MT 4X2 CITY",
                                "HAVAL H2 1.5T GSL 6MT 4X2 CITY BC",
                                "HAVAL H2 1.5T GSL 6MT 4X2 DIGNITY E",
                                "HAVAL H2 1.5T GSL 6MT 4X2 DIGNITY E BC",
                                "HAVAL H2 1.5T GSL 6MT 4X4 DIGNITY",
                                "HAVAL H2 1.5T GSL AT 4X2 DIGNITY E",
                                "HAVAL H6 SPORT 1.5T GSL 6MT 4X2 CITY",
                                "HAVAL H6 SPORT 1.5T GSL 6MT 4X2 DIGNITY",
                                "HAVAL H7 L 2.0T GLS 6DCT 4X2 DIGNITY",
                                "HD35",
                                "HD78",
                                "HIACE",
                                "HIACE COMMUTER",
                                "HIACE COMMUTER 1GB",
                                "HIACE COMMUTER 1GD - GL",
                                "HIACE COMMUTER 1GD HIGH ROOF",
                                "HIACE COMMUTER 1GD HIGH ROOF",
                                "HIACE COMMUTER 1GD HIGH ROOF - GL",
                                "HIACE COMMUTER HIGH ROOF 1GD",
                                "HIACE COMMUTER HIGH ROOF 1GD",
                                "HIGHLANDER",
                                "HILUX",
                                "HILUX 4X2",
                                "HILUX 4X2 D/C 2GD M/T",
                                "HILUX 4X2 D/C 2GD SR",
                                "HILUX 4X4",
                                "HILUX 4X4 C/S 2GD",
                                "HILUX 4X4 C/S 2GD M/T",
                                "HILUX 4X4 D/C 1GD",
                                "HILUX 4X4 D/C 1GD M/T SR",
                                "HILUX 4X4 D/C 1GD M/T SRV",
                                "HILUX 4X4 D/C 1GD SR",
                                "HILUX 4X4 D/C 1GD SRV",
                                "HILUX 4X4 D/C 1GD SRV AT",
                                "HILUX 4X4 D/C 2GD SR",
                                "HILUX 4X4 DC SR",
                                "HILUX 4X4 SR",
                                "HILUX 4X4, DOBLE CABINA",
                                "HILUX 4X4D/C 1GD SR",
                                "HILUX DC 3.0 MEC 4X4 TD",
                                "HILUX DLC 260",
                                "HILUX TD 2.5 4X2 CABINA DOBLE UP",
                                "HILUX TD 2.5 4X4 CABINA DOBLE UP",
                                "HILUX TDI 3.0 4X4 CABINA DOBLE UP",
                                "HILUX  TD 2.5 4X4 CABINA DOBLE UP",
                                "HONOR S 1.5 MT COMFORTABLE 8 SEATS",
                                "HONOR S 1.5 MT LUXURY 8 SEATS AC", "I10", "I20", "I20 ACTIVE CROSS SPORT MT E4", "I30", "IGNIS GLX CVT", "IGNIS GLX MT", "IONIQ EV", "IS 300", "IS300", "J4 1.5 MT COMFORT VVT",
                                "JUMPY FURGON PLUS L3 2.0 HDI 150HP", "KICKS", "KICKS ADVANCE MT", "KICKS SENSE MT", "KOLEOS", "KOLEOS PRIVILEGE 4X2 2.5 CVT", "KOLEOS PRIVILEGE 4X4 2.5 CVT", "KONECT",
                                "KONECT COMFORT 1.6 MT", "KONECT EXCLUSIVE 1.6 MT", "KWID LIFE 1.0 MT", "KWID OUTSIDER 1.0 MT",
                                "L200", "L6T7844S1KN000252", "LAND CRUISER 200", "LAND CRUISER PRADO 2.7 TX-L AT", "LOGAN INTENS 1.6 MT ULC", "LOGAN LIFE", "LOGAN LIFE 1.6 MT", "LOGAN LIFE 1.6 MT" + "GLP",
                                "LOGAN LIFE 1.6 MT AC", "LOGAN LIFE 1.6 MT AC" + "GLP", "LS 500H", "LX",
                                "M4",
                                "M60",
                                "M90 2.0L MT STANDARD 2 11 SEATS",
                                "MACAN S",
                                "MARCH",
                                "MASTER FURGON 2.3 TDI",
                                "MASTER MICROBUS 2.3 TDI",
                                "MAZDA 2 SEDAN AT 1.5 GS HIGH IPM II PE",
                                "MAZDA 2 SPORT MT 1.5 GS CORE IPM PE",
                                "MAZDA 3 SEDAN AT 2.0 GS CORE IPM PE",
                                "MAZDA 3 SEDAN MT 1.6 GS CORE IPM PE",
                                "MAZDA 3 SEDAN MT 2.0 GS CORE IPM PE",
                                "MAZDA 3 SPORT AT 2.5 NEW HIGH",
                                "MAZDA 3 SPORT MT 2.0 GS CORE IPM PE",
                                "MONTERO SPORT 4X2 3.0  GLS AT",
                                "MONTERO SPORT 4X4 2.4 HP TDI GLS A/T",
                                "N520",
                                "NEW 10",
                                "NEW ACCENT 1.4 GL 4DR MT COMFORT E4",
                                "NEW ALTO 800 ST",
                                "NEW ALTO 800 ST ABS PS",
                                "NEW C3 1.6 HDI 90 BVM5 FEEL",
                                "NEW C3 1.6 VTI 115HP AT6III SHINE",
                                "NEW CS35 1.6AT 4X2 LUXURY",
                                "NEW CS35 1.6MT 4X2 COMFORTABLE",
                                "NEW ELANTRA",
                                "NEW ERTIGA 1.5 GL MT TAP NEG",
                                "NEW ERTIGA 1.5 MT",
                                "NEW F3",
                                "NEW I10",
                                "NEW I10 1.25 GL",
                                "NEW I10 1.25 GL 4DR MT COMFORT E4.GLP",
                                "NEW I10 1.25 GL 4DR MT VALUE E4",
                                "NEW I10 1.25 GL 4DR MT VALUE E4.GLP",
                                "NEW JIMNY 1.5 AT TC",
                                "NEW JIMNY 1.5 MT",
                                "NEW JIMNY 1.5 MT TC",
                                "NEW M4",
                                "NEW M4 4X2 COMFORT 1.5",
                                "NEW M4 4X2 LUXURY 1.5",
                                "NEW M4  4X2 LUXURY 1.5",
                                "NEW REFINE 1.9 TDI DIESEL COMFORT",
                                "NEW SANTA FE TM 2.4 GL 2WD MT FULL RA8 E4",
                                "NEW SWIFT 1.2 GA MT",
                                "NEW SWIFT 1.2 GL CVT",
                                "NEW SWIFT 1.2 GL MT",
                                "NEW SWIFT 1.2 GLX CVT PW",
                                "NEW TUCSON",
                                "NEW TUCSON TL FL 2.0 GL 2WD MT COMFORT RA8 E4.GLP",
                                "NEW TUCSON TL FL 2.0 GL 2WD MT FULL E4",
                                "NEW V3 EXCLUSIVE 1.5 MT / GLP",
                                "NEW VAN",
                                "NEW VAN CON AC",
                                "NEW VIGUS 4X4 DSL + CAM",
                                "NEW VITARA GLX FULL MT 1.4 TURBO ALLGRIP",
                                "NEW VITARA GLX LUX 6AT 2WD VVT",
                                "NEW VITARA LIMITED AT 1.4 TURBO ALLGRIP",
                                "NEW VOLEEX C30 1.5 4X2 5MT FASHIONABLE",
                                "NEW VOLEEX C30 1.5 4X2 LUX INTELLIGENT",
                                "NEW X200 S/AC",
                                "NP300",
                                "NP300 4X4 2.5 D/C",
                                "NX 300",
                                "OROCH",
                                "OROCH INTENS 4X2 2.0 6MT ULC",
                                "OROCH INTENS 4X4 2.0 6MT ULC",
                                "OROCH ZEN 4X2 2.0 6MT",
                                "PICANTO",
                                "PIK UP D/CAB",
                                "PIKUP D/C",
                                "PILOT",
                                "PRIUS",
                                "PRIUS 1.8 CVT",
                                "PRIUS C 1.5 CVT",
                                "QASHQAI",
                                "RANGER",
                                "RANGER XLT 4X4",
                                "RANGER XLT 4X4 2020",
                                "RAV",
                                "RAV 4 4X2",
                                "RAV4",
                                "RAV4 2.0 4X2 FULL MT",
                                "RAV4 2.0 FULL D-LUX 4X2 CVT",
                                "RAV4 2.0 FULL D-LUX 4X2 MT",
                                "RAV4 2.0 FULL D-LUX 4X4 MT",
                                "RAV4 HYBRID 2.5 FULL D-LUX 4X2 CVT",
                                "RAV4 HYBRID 2.5 PREMIUM 4X2 CVT",
                                "RIO",
                                "RIO HB 1.4 AT LX FULL",
                                "ROJO - JAC AT",
                                "ROJO FUEGO - RE",
                                "RUSH 1.5 FULL AT",
                                "RUSH 1.5 FULL D-LUX",
                                "RUSH 1.5 FULL D-LUX MT",
                                "RUSH 1.5 FULL MT",
                                "RUSH 1.5 FULL MT",
                                "RX 350",
                                "RX 350 F SPORT",
                                "RX 450H",
                                "S 60",
                                "S2",
                                "S2 1.5 AT COMFORT",
                                "S2 1.5 MT COMFORT VVT",
                                "S2 1.5 MT COMFORT VVT+ MULT",
                                "S2 1.5 MT LUXURY VVT",
                                "S3",
                                "S3 1.6 MT COMFORT VVT",
                                "S3 1.6 MT LUXURY VVT",
                                "S60",
                                "SANDERO",
                                "SANTA FE",
                                "S-CROSS 1.6 2WD GL 5MT",
                                "SENTRA",
                                "SOLUTO",
                                "SPORTAGE",
                                "SPORTAGE QL (FL)",
                                "STEPWAY INTENS 4X2 1.6 MT ULC",
                                "SUNRAY 17 ASIENTOS 6MT 2.7 CTI EV",
                                "T6 4X2 COMFORT",
                                "T6 4X2 COMFORT DIESEL",
                                "T6 4X4 COMFORT DIESEL",
                                "TRANSPORTER",
                                "TRANSPORTER  4X2 MICROBUS",
                                "TUCSON",
                                "TUCSON ROXY",
                                "URBAN",
                                "URVAN",
                                "UX 250H",
                                "UX 250H LUX",
                                "V3",
                                "V40",
                                "VENUE",
                                "VERNA",
                                "VERSA",
                                "VERSA DRIVE",
                                "VERSA N18",
                                "VIGUS",
                                "VIGUS 3",
                                "VOLEEX C30",
                                "VOLEEX C30 1.5 FASHIONABLE",
                                "VOLEEX C30 1.5 FASHIONABLE + GLP",
                                "VOLEEX C30 1.5 INTELLIGENT",
                                "VVVV",
                                "WINGLE 5 4X2 STD 2.2 GSL 5MT CD EURO IV",
                                "WINGLE 5 UPGRADE 4X4 LUX 2.0 TDI 6MT CD",
                                "WINGLE 7 2WD",
                                "WINGLE 7 2WD LUXURY DIESEL",
                                "WINGLE 7 4WD ESTANDAR DIESEL",
                                "X25",
                                "X25 COMFORTABLE 1.5MT",
                                "X35",
                                "X7",
                                "X7 SPORT",
                                "X7 SPORT COMFORT 2.0 MT",
                                "X7 SPORT EXCLUSIVE 2.4 AT",
                                "X7 SPORT EXCLUSIVE 2.4 AT / GLP",
                                "XC40 T4 R-DESIGN MY20",
                                "XC60",
                                "XC90",
                                "XLT 4X2",
                                "X-TRAIL",
                                "XUV500",
                                "YARIS",
                                "YARIS 1.3 M/T",
                                "YARIS GL 1.3",
                                "YARIS GLI 1.3 CVT",
                                "YARIS GLI 1.3 M/T",
                                "YARIS GLI 1.3 M/T GRIS OSCURO METALICO-(1G3)",
                                "YARIS HB 1.5 CVT",
                                "YARIS HB GLI 1.3 CVT",
                                "YARIS HB GLI 1.3 M/T",




                            ];


                            autocomplete(document.getElementById("modelo"), modelos);
                        </script>

                        <!--rocio-->
                        <div class="input-group">
                            <!--<input type="text" name="color" id="color">-->
                            <!--acepta solo letras-->

                            <!--<div class="autocomplete" style="width:300px;">-->
                            <input type="text" name="color" id="color" onkeypress="return soloLetras(event)"
                                maxlength="20"
                                oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            <label class="label" for="color">* COLOR:</label>
                            <!--</div>-->

                            <!--input atocompleta-->
                            <script>
                                function soloLetras(e) {
                                    key = e.keyCode || e.which;
                                    tecla = String.fromCharCode(key).toLowerCase();
                                    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
                                    especiales = "8-37-39-46";

                                    tecla_especial = false
                                    for (var i in especiales) {
                                        if (key == especiales[i]) {
                                            tecla_especial = true;
                                            break;
                                        }
                                    }

                                    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                                        return false;
                                    }
                                }
                            </script>
                            <script>
                                function autocomplete(inp, arr) {

                                    var currentFocus;

                                    inp.addEventListener("input", function (e) {
                                        var a, b, i, val = this.value;

                                        closeAllLists();
                                        if (!val) { return false; }
                                        currentFocus = -1;

                                        a = document.createElement("DIV");
                                        a.setAttribute("id", this.id + "autocomplete-list");
                                        a.setAttribute("class", "autocomplete-items");

                                        this.parentNode.appendChild(a);
                                        /*for each item in the array...*/
                                        for (i = 0; i < arr.length; i++) {

                                            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {

                                                b = document.createElement("DIV");

                                                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                                                b.innerHTML += arr[i].substr(val.length);

                                                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";

                                                b.addEventListener("click", function (e) {

                                                    inp.value = this.getElementsByTagName("input")[0].value;

                                                    closeAllLists();
                                                });
                                                a.appendChild(b);
                                            }
                                        }
                                    });

                                    inp.addEventListener("keydown", function (e) {
                                        var x = document.getElementById(this.id + "autocomplete-list");
                                        if (x) x = x.getElementsByTagName("div");
                                        if (e.keyCode == 40) {

                                            currentFocus++;

                                            addActive(x);
                                        } else if (e.keyCode == 38) { //up

                                            currentFocus--;

                                            addActive(x);
                                        } else if (e.keyCode == 13) {

                                            e.preventDefault();
                                            if (currentFocus > -1) {

                                                if (x) x[currentFocus].click();
                                            }
                                        }
                                    });
                                    function addActive(x) {

                                        if (!x) return false;

                                        removeActive(x);
                                        if (currentFocus >= x.length) currentFocus = 0;
                                        if (currentFocus < 0) currentFocus = (x.length - 1);

                                        x[currentFocus].classList.add("autocomplete-active");
                                    }
                                    function removeActive(x) {

                                        for (var i = 0; i < x.length; i++) {
                                            x[i].classList.remove("autocomplete-active");
                                        }
                                    }
                                    function closeAllLists(elmnt) {

                                        var x = document.getElementsByClassName("autocomplete-items");
                                        for (var i = 0; i < x.length; i++) {
                                            if (elmnt != x[i] && elmnt != inp) {
                                                x[i].parentNode.removeChild(x[i]);
                                            }
                                        }
                                    }

                                    document.addEventListener("click", function (e) {
                                        closeAllLists(e.target);
                                    });
                                }


                                var colores = ["AMARILLO", "ANARANJADO OCRE", "AZUL",
                                    "AZUL CLARO METALICO",
                                    "AZUL DARK",
                                    "AZUL ESMERALDA",
                                    "AZUL LAGUNA",
                                    "AZUL MARINO",
                                    "AZUL METALICO",
                                    "AZUL OSCURO",
                                    "AZUL OSCURO METALIZADO",
                                    "AZUL OSCURO PERLA",
                                    "AZUL PERLA",
                                    "AZUL PERLADO",
                                    "AZUL TCH NEGRO",
                                    "AZUL TNEG",
                                    "BEIGE",
                                    "BEIGE", "BEIG MICA",
                                    "BEIGE CENDRE",
                                    "BEIGE METALICO",
                                    "BEIGE OSCURO MICA",
                                    "BLACK STONE",
                                    "BLANCA",
                                    "BLANCO",
                                    "BLANCO PERLA",
                                    "BLANCO PLATINUM",
                                    "BLANCO SOLIDO",
                                    "BLANCO TCH ROJO",
                                    "BLANCO TITANIO",
                                    "BRO-BROWN",
                                    "BRONZE BISONTE",
                                    "BLCK-BLACK", "BLCK-NEGRO", "BLK-NEGRO", "BLU-AZUL", "CAFÉ", "DORADO",
                                    "DRE-MARRON",
                                    "EMGRAND", "DORADO",
                                    "GOLDEN",
                                    "GRAND",
                                    "GRAND VITARA",
                                    "GRAY",
                                    "GRIS",
                                    "GRIS ACERO",
                                    "GRIS ALUMINIUM",
                                    "GRIS AMATISTA",
                                    "GRIS ARENA",
                                    "GRIS CASSIOPEE",
                                    "GRIS DAKOTA METALICO",
                                    "GRIS ESTRELLA",
                                    "GRIS GRAFITO",
                                    "GRIS LUNA",
                                    "GRIS METALICO",
                                    "GRIS MINERAL",
                                    "GRIS NOBLE",
                                    "GRIS OSCURO",
                                    "GRIS OSCURO METALICO",
                                    "GRIS PERLA",
                                    "GRIS PLATINO MET",
                                    "GRIS SHARK ROJO",
                                    "GRIS TIERRA",
                                    "GRIS TITANIO",
                                    "GRIS URBANO",
                                    "GUINDA",
                                    "MARRON",
                                    "PLATA",
                                    "ROJO",
                                    "MARRON CAYU",
                                    "MARRÓN METÁLICO",
                                    "MARRON METALIZADO",
                                    "VERDE+NEGRO",
                                    "NARANJA",
                                    "NARANJO COBRE",
                                    "NEGRO",
                                    "NEGRO GRAFITO",
                                    "NEGRO METALICO",
                                    "NEGRO MICA",
                                    "NEGRO NACARADO",
                                    "NEGRO ONYX",
                                    "NEGRO PERLADO",
                                    "PLATA",
                                    "PLATA (PLAJA)",
                                    "PLATA CIELO",
                                    "PLATA DEPORTIVO",
                                    "PLATA METALICO",
                                    "PLATA METALIZADO",
                                    "PLATA OSCURO",
                                    "PLATA POLAR",
                                    "PLATA PREMIUM",
                                    "PLATA TITANIO",
                                    "ROJO / TENCHO NEGRO",
                                    "ROJO CRISTAL",
                                    "ROJO FUEGO",
                                    "ROJO METALICO",
                                    "ROJO MICA",
                                    "ROJO MICA METALICO",
                                    "ROJO OSCURO",
                                    "ROJO OSCURO MICA",
                                    "ROJO PERLADO",
                                    "ROJO RUBI",
                                    "ROJO SOLIDO",
                                    "ROJO TOURMALINE",
                                    "ROJO VOLCANO",
                                    "ROJO",
                                    "ROJO/NEGRO",
                                    "GRIS COSMICO / AMARILLO",
                                    "VERDE",
                                    "VERDE ESMERALDA",
                                    "VERDE LIMA TNEG",
                                    "VERDE OLIVA",

                                ];





                                autocomplete(document.getElementById("color"), colores);
                            </script>


                        </div>




                        <!--unidad asignada custodia-->


                        <!--unidad asignada-->
                        <!--unidad asiganda custodia-->

                        <!--unidad asignada-->
                        <div class="input-group">


                            <!--<div class="autocomplete" >-->

                            <!--<label style=" padding-right:258px; color:#B6B6B6;font-size: 12px;" for="unidadasignada"> * UNIDAD ASIGNADA:</label></br>-->
                            <input type="text" name="unidadasignada" id="unidadasignada"
                                onkeypress="return soloLetras(event)" maxlength="20"
                                oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                value="VIN" readonly="readonly" hidden="true">

                        </div>
                        <!--</div>	-->

                        <script>
                            function soloLetras(e) {
                                key = e.keyCode || e.which;
                                tecla = String.fromCharCode(key).toLowerCase();
                                letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
                                especiales = "8-37-39-46";

                                tecla_especial = false
                                for (var i in especiales) {
                                    if (key == especiales[i]) {
                                        tecla_especial = true;
                                        break;
                                    }
                                }

                                if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                                    return false;
                                }
                            }
                        </script>

                        <script>
                            function autocomplete(inp, arr) {

                                var currentFocus;

                                inp.addEventListener("input", function (e) {
                                    var a, b, i, val = this.value;

                                    closeAllLists();
                                    if (!val) { return false; }
                                    currentFocus = -1;

                                    a = document.createElement("DIV");
                                    a.setAttribute("id", this.id + "autocomplete-list");
                                    a.setAttribute("class", "autocomplete-items");

                                    this.parentNode.appendChild(a);
                                    /*for each item in the array...*/
                                    for (i = 0; i < arr.length; i++) {

                                        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {

                                            b = document.createElement("DIV");

                                            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                                            b.innerHTML += arr[i].substr(val.length);

                                            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";

                                            b.addEventListener("click", function (e) {

                                                inp.value = this.getElementsByTagName("input")[0].value;

                                                closeAllLists();
                                            });
                                            a.appendChild(b);
                                        }
                                    }
                                });

                                inp.addEventListener("keydown", function (e) {
                                    var x = document.getElementById(this.id + "autocomplete-list");
                                    if (x) x = x.getElementsByTagName("div");
                                    if (e.keyCode == 40) {

                                        currentFocus++;

                                        addActive(x);
                                    } else if (e.keyCode == 38) { //up

                                        currentFocus--;

                                        addActive(x);
                                    } else if (e.keyCode == 13) {

                                        e.preventDefault();
                                        if (currentFocus > -1) {

                                            if (x) x[currentFocus].click();
                                        }
                                    }
                                });
                                function addActive(x) {

                                    if (!x) return false;

                                    removeActive(x);
                                    if (currentFocus >= x.length) currentFocus = 0;
                                    if (currentFocus < 0) currentFocus = (x.length - 1);

                                    x[currentFocus].classList.add("autocomplete-active");
                                }
                                function removeActive(x) {

                                    for (var i = 0; i < x.length; i++) {
                                        x[i].classList.remove("autocomplete-active");
                                    }
                                }
                                function closeAllLists(elmnt) {

                                    var x = document.getElementsByClassName("autocomplete-items");
                                    for (var i = 0; i < x.length; i++) {
                                        if (elmnt != x[i] && elmnt != inp) {
                                            x[i].parentNode.removeChild(x[i]);
                                        }
                                    }
                                }

                                document.addEventListener("click", function (e) {
                                    closeAllLists(e.target);
                                });
                            }


                            var origenes = ["ALTO AMAZONAS",
                                "AMBO",
                                "ANCÓN",
                                "ANDAHUAYLAS",
                                "ANGARAES",
                                "ANTA",
                                "ANTABAMBA",
                                "ANTONIO RAIMONDI",
                                "AREQUIPA",
                                "ASCOPE",
                                "ASUNCIÓN",
                                "ATALAYA",
                                "ATE",
                                "AYABACA",
                                "AYACUCHO",
                                "AYMARAES",
                                "AZÁNGARO",
                                "BAGUA",
                                "BARRANCA",
                                "BARRANCO",
                                "BASE",
                                "BELLAVISTA",
                                "BOCANEGRA",
                                "BOLÍVAR",
                                "BOLOGNESI",
                                "BONGARA",
                                "CAJABAMBA",
                                "CAJAMARCA",
                                "CAJATAMBO",
                                "CALCA",
                                "CALLAO",
                                "CAMACHO",
                                "CAMANÁ",
                                "CANAS",
                                "CANCHIS",
                                "CANDARAVE",
                                "CANGALLO",
                                "CANTA",
                                "CARABAYA",
                                "CARABAYLLO",
                                "CARAVELÍ",
                                "CARAZ",
                                "CARHUAZ",
                                "CARLOS FERMÍN FITZCARRALD",
                                "CASMA",
                                "CASTILLA",
                                "CASTROVIRREYNA",
                                "CAYLLOMA",
                                "CELENDÍN",
                                "CERRO DE PASCO",
                                "CHACHAPOYAS",
                                "CHACLACAYO",
                                "CHALLHUAHUACHO",
                                "CHAMAYA",
                                "CHANCHAMAYO",
                                "CHEPÉN",
                                "CHICLAYO",
                                "CHIMBOTE",
                                "CHINCHA",
                                "CHINCHEROS",
                                "CHORRILLOS",
                                "CHOSICA",
                                "CHOTA",
                                "CHUCUITO",
                                "CHUMBIVILCAS",
                                "CHUPACA",
                                "CHURCAMPA",
                                "CIENEGUILLA",
                                "COMAS",
                                "CONCEPCIÓN",
                                "CONDESUYOS",
                                "CONDORCANQUI",
                                "CONTRALMIRANTE VILLAR",
                                "CONTUMAZA",
                                "CORONEL PORTILLO",
                                "CORONGO",
                                "COTABAMBAS",
                                "CREDITEX",
                                "CUSCO",
                                "CUTERVO",
                                "DANIEL ALCIDES CARRIÓN",
                                "DATEM DEL MARAÑÓN",
                                "DOS DE MAYO",
                                "EL AGUSTINO",
                                "EL COLLAO",
                                "EL DORADO",
                                "ESPINAR",
                                "FERREÑAFE",
                                "FRUTALES",
                                "GENERAL SÁNCHEZ CERRO",
                                "GRAN CHIMÚ",
                                "GRAU",
                                "HUACAYBAMBA",
                                "HUALGAYOC",
                                "HUALLAGA",
                                "HUAMALÍES",
                                "HUAMANGA",
                                "HUANCA SANCOS",
                                "HUANCABAMBA",
                                "HUANCANÉ",
                                "HUANCAVELICA",
                                "HUANCAYO",
                                "HUANTA",
                                "HUÁNUCO",
                                "HUARAL",
                                "HUARAZ",
                                "HUARI",
                                "HUARMEY",
                                "HUAROCHIRÍ",
                                "HUAURA",
                                "HUAYLAS",
                                "HUAYTARÁ",
                                "ICA",
                                "ILO",
                                "INDEPENDENCIA",
                                "ISLAY",
                                "JAÉN",
                                "JESÚS MARÍA",
                                "JORGE BASADRE",
                                "JULCÁN",
                                "JULIACA",
                                "JUNÍN",
                                "KLO",
                                "LA CONVENCIÓN",
                                "LA MAR",
                                "LA MARINA",
                                "LA MOLINA",
                                "LA UNIÓN",
                                "LA VICTORIA",
                                "LAMAS",
                                "LAMBAYEQUE",
                                "LAMPA",
                                "LAURICOCHA",
                                "LEONCIO PRADO",
                                "LIMA",
                                "LIMA",
                                "LINCE",
                                "LORETO",
                                "LOS OLIVOS",
                                "LUCANAS",
                                "LURIGANCHO",
                                "LURÍN",
                                "LUYA",
                                "MAGDALENA DEL MAR",
                                "MANCHAY",
                                "MANU",
                                "MARAÑÓN",
                                "MARCONA",
                                "MARISCAL CÁCERES",
                                "MARISCAL LUZURIAGA",
                                "MARISCAL NIETO",
                                "MARISCAL RAMÓN CASTILLA",
                                "MAYNAS",
                                "MELGAR",
                                "MIRAFLORES",
                                "MOHO",
                                "MOLLENDO",
                                "MORROPÓN",
                                "MOYOBAMBA",
                                "NAZCA",
                                "NEPTUNIA",
                                "OCROS",
                                "OTUZCO",
                                "OXAPAMPA",
                                "OYÓN",
                                "PACASMAYO",
                                "PACHACÁMAC",
                                "PACHITEA",
                                "PADRE ABAD",
                                "PAITA",
                                "PALLASCA",
                                "PALPA",
                                "PARACAS",
                                "PARINACOCHAS",
                                "PARURO",
                                "PATAZ",
                                "PÁUCAR DEL SARA SARA",
                                "PAUCARTAMBO",
                                "PICOTA",
                                "PISCO",
                                "PIURA",
                                "POMABAMBA",
                                "PROV. CONST. DEL CALLAO",
                                "PUCALLPA",
                                "PUCUSANA",
                                "PUEBLO LIBRE",
                                "PUENTE PIEDRA",
                                "PUERTO INCA",
                                "PUNO",
                                "PUNTA HERMOSA",
                                "PUNTA NEGRA",
                                "PUNTA SAL",
                                "PURÚS",
                                "PUTUMAYO",
                                "QUISPICANCHI",
                                "RECUAY",
                                "REQUENA",
                                "RÍMAC",
                                "RIOJA",
                                "RODRÍGUEZ DE MENDOZA",
                                "SAN ANTONIO DE PUTINA",
                                "SAN BARTOLO",
                                "SAN BORJA",
                                "SAN IGNACIO",
                                "SAN ISIDRO",
                                "SAN JUAN DE MIRAFLORES",
                                "SAN MARCOS",
                                "SAN MARTIN DE PORRES",
                                "SAN MARTÍN",
                                "SAN MIGUEL",
                                "SAN MIGUEL",
                                "SAN PABLO",
                                "SAN ROMÁN",
                                "SÁNCHEZ CARRIÓN",
                                "SANDIA",
                                "SANTA ANITA",
                                "SANTA CRUZ",
                                "SANTA MARÍA DEL MAR",
                                "SANTA ROSA",
                                "SANTA",
                                "SANTIAGO DE CHUCO",
                                "SANTIAGO DE SURCO",
                                "SATIPO",
                                "SECHURA",
                                "SIHUAS",
                                "SLA",
                                "SUCRE",
                                "SULLANA",
                                "SURQUILLO",
                                "TACNA",
                                "TAHUAMANU",
                                "TALARA",
                                "TAMBOPATA",
                                "TARAPOTO",
                                "TARATA",
                                "TARMA",
                                "TAYACAJA",
                                "TIENDA",
                                "TOCACHE",
                                "TRUJILLO",
                                "TUMBES",
                                "UCAYALI",
                                "URUBAMBA",
                                "UTCUBAMBA",
                                "VARI",
                                "VÍCTOR FAJARDO",
                                "VILCASHUAMÁN",
                                "VILLA EL SALVADOR",
                                "VILLA MARIA DEL TRIUNFO",
                                "VIRÚ",
                                "YAROWILCA",
                                "YAULI",
                                "YAUYOS",
                                "YUNGAY",
                                "YUNGUYO",
                                "ZARUMILLA",


                            ];


                            autocomplete(document.getElementById("origen"), origenes);
                        </script>

                        <!--unidad asignada-->




                        <!--placa de tracto-->
                        <div class="input-group">




                            <!--<label style="padding-right:288px;color:#B6B6B6;font-size: 12px;" for="placadetracto" > * PLACA DE TRACTO:</label>		-->
                            <input type="text" name="placadetracto" id="placadetracto" maxlength="10"
                                readonly="readonly" hidden="true">

                            <script>
                                function myFunction() {
                                    var x = document.getElementById("fecdeentrega").value;
                                    document.getElementById("placadetracto").value = x;
                                }
                            </script>


                        </div>

                        <!--cliente-->
                        <div class="input-group">
                            <input type="text" name="cliente" id="cliente" onkeypress="return soloLetras(event)"
                                maxlength="20" oninput="generateFullName()" onclick="generateFullsituacion()">
                            <label class="label" for="cliente"> * CLIENTE:</label></br>
                        </div>
                        <script>
                            function autocomplete(inp, arr) {
                                var currentFocus;
                                inp.addEventListener("input", function (e) {
                                    var a, b, i, val = this.value;
                                    closeAllLists();
                                    if (!val) { return false; }
                                    currentFocus = -1;
                                    a = document.createElement("DIV");
                                    a.setAttribute("id", this.id + "autocomplete-list");
                                    a.setAttribute("class", "autocomplete-items");
                                    this.parentNode.appendChild(a);
                                    /*for each item in the array...*/
                                    for (i = 0; i < arr.length; i++) {
                                        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                                            b = document.createElement("DIV");
                                            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                                            b.innerHTML += arr[i].substr(val.length);
                                            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                                            b.addEventListener("click", function (e) {
                                                inp.value = this.getElementsByTagName("input")[0].value;
                                                closeAllLists();
                                            });
                                            a.appendChild(b);
                                        }
                                    }
                                });

                                inp.addEventListener("keydown", function (e) {
                                    var x = document.getElementById(this.id + "autocomplete-list");
                                    if (x) x = x.getElementsByTagName("div");
                                    if (e.keyCode == 40) {
                                        currentFocus++;
                                        addActive(x);
                                    } else if (e.keyCode == 38) { //up
                                        currentFocus--;
                                        addActive(x);
                                    } else if (e.keyCode == 13) {
                                        e.preventDefault();
                                        if (currentFocus > -1) {
                                            if (x) x[currentFocus].click();
                                        }
                                    }
                                });
                                function addActive(x) {
                                    if (!x) return false;
                                    removeActive(x);
                                    if (currentFocus >= x.length) currentFocus = 0;
                                    if (currentFocus < 0) currentFocus = (x.length - 1);
                                    x[currentFocus].classList.add("autocomplete-active");
                                }
                                function removeActive(x) {

                                    for (var i = 0; i < x.length; i++) {
                                        x[i].classList.remove("autocomplete-active");
                                    }
                                }
                                function closeAllLists(elmnt) {
                                    var x = document.getElementsByClassName("autocomplete-items");
                                    for (var i = 0; i < x.length; i++) {
                                        if (elmnt != x[i] && elmnt != inp) {
                                            x[i].parentNode.removeChild(x[i]);
                                        }
                                    }
                                }
                                document.addEventListener("click", function (e) {
                                    closeAllLists(e.target);
                                });
                            }
                            var clientes = ["ALONSO SERRUDO",
                                "ANDEAN MOTORS E.I.R.L",
                                "APLEE GLASS",
                                "AUTNORT HUARAZ",
                                "AUTOBACS IMPORT DISTRIBUTION & SALE",
                                "AUTOESPAR S.A. - ICA",
                                "AUTOMAQUINARIAS DEL AMAZONAS",
                                "AUTOMECANICA SAN MIGUEL SRL",
                                "AUTOMOTORES INKA",
                                "AUTOMOTORES MOPAL S.A.C",
                                "AUTOMOTORES PAKATNAMU S.A.C",
                                "AUTOMORIZ SAN CRISTOBAL",
                                "AUTOMOTORES DE LA AMAZONIA S.A.C.",
                                "AUTOMOTORES -HUÁNUCO",
                                "AUTOMOTORES PAKATNAMU SELVA S.",
                                "AUTOMOTORES YOSHIVAL S.A.C-HUACHO",
                                "AUTOMOTORES YOSHIVAL S.A.C-HUARAZ",
                                "AUTOMOTORES YOSHIVAL S.A.C-LOS OLIVOS",
                                "AUTOMOTOREZ PAKATNAMU  S.A.C.",
                                "AUTOMOTRIZ EL CISNE",
                                "AUTOMOTRIZ HUACHO VIP S.A.C. - SANTA MARIA",
                                "AUTOMOTRIZ HUAMANGA  EIRL",
                                "AUTOMOTRIZ INCAMOTORS - AREQUIPA",
                                "AUTOMOTRIZ INCAMOTORS - CUSCO",
                                "AUTOMOTRIZ INCAMOTORS FORD - AREQUIPA",
                                "AUTOMOTRIZ INCAMOTORS FORD - CUSCO",
                                "AUTOMOTRIZ INCAMOTORS FORD - ICA",
                                "AUTOMOTRIZ INCAMOTORS -JULIACA",
                                "AUTOMOTRIZ INCAMOTORS S.A.C",
                                "AUTOMOTRIZ INCAMOTORS S.A.C. - AREQUIPA",
                                "AUTOMOTRIZ INCAMOTORS S.A.C.- ICA",
                                "AUTOMOTRIZ SAN CRISTOBAL - HUANCAYO",
                                "AUTOMOTRIZ SAN CRISTOBAL S.A.C",
                                "AUTOMOTRIZ Y MAQUINARIAS MOTOR MASS - JULIACA",
                                "AUTOMOTRIZ YOSHIVAL S.A.C HUACHO",
                                "AUTOMOVILES -AYACUCHO",
                                "AUTOMOVILES S.A.C",
                                "AUTONORT",
                                "AUTONORT - BARRANCA",
                                "AUTONORT - CAJAMARCA S.A.C.",
                                "AUTONORT - CHICLAYO",
                                "AUTONORT - CHIMBOTE",
                                "AUTONORT - PIURA",
                                "AUTONORT - TARAPOTO",
                                "AUTONORT - TALARA",
                                "AUTONORT- HUARAZ",
                                "AUTONORT NOR ORIENTE S.A.C.",
                                "AUTONORT TRUJILLO S.A.C",
                                "AUTRISA AUTOMOTRIZ",
                                "B MOTORS S.A.C",
                                "B MOTORS S.A.C. CHIMBOTE",
                                "B MOTORS TRUJILLO",
                                "CAJAMARCA",
                                "CENTRO COMERCIAL SAN PEDRO S.R",
                                "CHEVROLET", "DC CAJAMARCA",
                                "CONAUTO - AREQUIPA",
                                "CONCESIONARIOS AUTORIZADOS JULIACA",
                                "CONCESIONARIOS AUTORIZADOS S.A.C.",
                                "CONOAUTO AREQUIPA",
                                "CORASUR-CUSCO",
                                "CORSA AUTOMOTRIZ S.A.C.",
                                "CRISTIAN ALBERCA P",
                                "CTRNAUTOMOTRIZ Y MAQUINARIAS MOTOR",
                                "CUSCO EXHIBICION",
                                "DC PERU CAJAMARCA",
                                "DC PERÚ PIURA SANCHEZ CERRO",
                                "DC PERÚ PIURA",
                                "DEPOSITO 3 TRUJILLO",
                                "DEPOSITO TRUJILLO",
                                "DERCO CAJAMARCA",
                                "DERCO",
                                "DERCOCENTER - PIURA",
                                "ESTACION DE SERVICIOS SANTA CECILIA S. A.",
                                "FABIOLA ACOSTA SALAZAR",
                                "FAP - GRUPO PANA",
                                "GILDEMEISTER",
                                "GNECCO & CIA S.A.",
                                "GRUPO PANA S.A.-SURQUILLO",
                                "GRUPO PANA",
                                "GRUPO SAN ANTONIO",
                                "HONDA",
                                "HUANCA AUTOS SAC",
                                "ICAMOTORS ICA",
                                "INCAMOTORS CUSCO",
                                "INKA LIDER AUTOMOTRIZ S.A.C. - TRUJILLO",
                                "JM AUTOMOTRIZ S.A.C.",
                                "JOSE ANTONIO LIZARRAGA",
                                "JOSE ANTONIO ROSAS",
                                "JOSE GONZALES",
                                "JUAN ANTONIO GONZALES",
                                "JUAN WU CHANG",
                                "KLM AUTOMOTRIZ",
                                "KLM GROUP S.A.C.",
                                "MANNUCCI MOTORS S.A.C.",
                                "MANUCCI DIESEL",
                                "MANUEL YZAGA",
                                "MAQGAMA S.A.C - SAN MARTIN",
                                "MAQUINARIAS",
                                "MAREAUTO",
                                "MAREAUTOS AREQUIPA",
                                "MAREAUTOS CHICLAYO",
                                "MAREAUTOS PUCALLPA",
                                "MAREAUTOS TRUJILLO",
                                "MATSURI - TACNA",
                                "MATSURI",
                                "MILENKO", "MITSUI",
                                "MITSUI - AREQUIPA",
                                "MITSUI - LA MOLINA",
                                "MITSUI AREQUIPA SAC",
                                "MITSUI AREQUIPA",
                                "MITSUI AUTOMOTRIZ AREQUIPA",
                                "MITSUI AUTOMOTRIZ S.A.- LA MOLINA",
                                "MITSUI AUTOMOTRIZ S.A.C.",
                                "MOPAL HUAMUCO",
                                "MOPAL HUANUCO",
                                "MOPAL PASCO S.A.",
                                "MOPAL PUCALLPA",
                                "MOTOR MUNDO",
                                "MOTORGAS CHINCHA S.A.C.",
                                "MOTORS CISNE SRL - PUERTO MALDONADO",
                                "MOTORS SHOW TARAPOTO S.A.C.",
                                "NOR AUTOS CHICLAYO S.A.C.",
                                "NOR AUTOS PIURA S.A.C",
                                "NORMOTORS FORD - CHIMBOTE",
                                "NORMOTORS S.A.C. - CHIMBOTE",
                                "ORAZUL ENERGY",
                                "OSCAR CHERO",
                                "OTROS",
                                "PAKATNAMU JAEN",
                                "PERUANA DE MOTORES",
                                "PIURA",
                                "PRUEBA",
                                "RENTING PERU",
                                "REPARACIONES Y SERVICIOS DEL SUR S.",
                                "REPARACIONES Y SERVICIOS DEL SUR S. / ILO",
                                "REPRESENTACIONES E INVERSIONES P&B S.A.C. - CUSCO",
                                "REPRESENTACIONES E INVERSIONES P&B S.A.C. - ICA",
                                "REPRESENTACIONES E INVERSIONES P&B",
                                "RESERSUR S.A.C.",
                                "RESESUR- URGENTE",
                                "RICARDO SAENZ",
                                "ROBERTS RESERSUR",
                                "SAN ANTONIO MOTORS SAC",
                                "SAN ANTONIO PIURA",
                                "SAN ANTONIO TRADE S.A.C. - CHICLAYO",
                                "SAN ANTONIO TRADE S.A.C. - PIURA",
                                "SAN ANTONIO TRADE S.A.C.",
                                "SAN ANTONIO VISE S.A.C",
                                "SANTA CLARA - AREQUIPA",
                                "SANTA CLARA",
                                "SATELITAL - TRUJILLO",
                                "SATELITAL CHCLAYO",
                                "SATELITAL",
                                "SAVI MOTORS FORD - CAJAMARCA",
                                "SAVI MOTORS FORD - TRUJILLO",
                                "SERVICIO AUTOMOTRICES DEL NORTE",
                                "SERVICIOS AUTOMOTRICES DEL NORTE -EVITAMIENTO",
                                "SHOUGANG",
                                "SILVIA YABAR", "SLA",
                                "SOCIEDAD DE AUTOMOTORES INKA S.A.C.",
                                "SOCIEDAD DE AUTOMOTORES INKA S.A.C.-CHICLAYO",
                                "SOCIEDAD DE AUTOMOTORES INKA",
                                "SPORTWAGEN - MANCHAY",
                                "SPORTWAGEN S.A.C.",
                                "STOCK BMOTORS",
                                "SUCURSAL TRUJILLO",
                                "SUR MOTORS - AREQUIPA DOLORES",
                                "SUR MOTORS AREQUIPA - VENEZUELA",
                                "SUR MOTORS AREQUIPA",
                                "SUR MOTORS ILO - LOTE 20",
                                "SUR MOTORS ILO - LOTE 3",
                                "SUR MOTORS JULIACA",
                                "TAIR AREQUIPA",
                                "TAIR RENTING",
                                "TAIR",
                                "TIENDA/ KLM",
                                "TOYOTA DEL PERU",
                                "TOYOTA TDP",
                                "TOYOTA",
                                "TOYOTATHON PIURA",
                                "TRANSPORTES ANGEL IBARCENA S.A.C.",
                                "TRUJILLO 3 DEPÓSITO",
                                "TRUJILLO 4 CV",
                                "TRUJILLO",
                                "URSUS RESTAURANTES",
                                "WANKAMOTORS FORD - HUANCAYO",
                                "MULTIMARKAS S.A.C",
                                "TSUTOMU AUTOS S.A.C",
                                "CHAMAYA",
                            ];
                            autocomplete(document.getElementById("cliente"), clientes);
                        </script>

                        <!--ORIGEN-->
                        <div class="input-group">


                            <!--<div class="autocomplete" >-->
                            <input type="text" name="origen" id="origen" onkeypress="return soloLetras(event)"
                                maxlength="20"
                                oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                onkeyup="myFunction()">
                            <label class="label" for="origen"> * ORIGEN:</label></br>
                        </div>
                        <!--</div>	-->

                        <script>
                            function soloLetras(e) {
                                key = e.keyCode || e.which;
                                tecla = String.fromCharCode(key).toLowerCase();
                                letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
                                especiales = "8-37-39-46";

                                tecla_especial = false
                                for (var i in especiales) {
                                    if (key == especiales[i]) {
                                        tecla_especial = true;
                                        break;
                                    }
                                }

                                if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                                    return false;
                                }
                            }
                        </script>

                        <script>
                            function autocomplete(inp, arr) {

                                var currentFocus;

                                inp.addEventListener("input", function (e) {
                                    var a, b, i, val = this.value;

                                    closeAllLists();
                                    if (!val) { return false; }
                                    currentFocus = -1;

                                    a = document.createElement("DIV");
                                    a.setAttribute("id", this.id + "autocomplete-list");
                                    a.setAttribute("class", "autocomplete-items");

                                    this.parentNode.appendChild(a);
                                    /*for each item in the array...*/
                                    for (i = 0; i < arr.length; i++) {

                                        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {

                                            b = document.createElement("DIV");

                                            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                                            b.innerHTML += arr[i].substr(val.length);

                                            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";

                                            b.addEventListener("click", function (e) {

                                                inp.value = this.getElementsByTagName("input")[0].value;

                                                closeAllLists();
                                            });
                                            a.appendChild(b);
                                        }
                                    }
                                });

                                inp.addEventListener("keydown", function (e) {
                                    var x = document.getElementById(this.id + "autocomplete-list");
                                    if (x) x = x.getElementsByTagName("div");
                                    if (e.keyCode == 40) {

                                        currentFocus++;

                                        addActive(x);
                                    } else if (e.keyCode == 38) { //up

                                        currentFocus--;

                                        addActive(x);
                                    } else if (e.keyCode == 13) {

                                        e.preventDefault();
                                        if (currentFocus > -1) {

                                            if (x) x[currentFocus].click();
                                        }
                                    }
                                });
                                function addActive(x) {

                                    if (!x) return false;

                                    removeActive(x);
                                    if (currentFocus >= x.length) currentFocus = 0;
                                    if (currentFocus < 0) currentFocus = (x.length - 1);

                                    x[currentFocus].classList.add("autocomplete-active");
                                }
                                function removeActive(x) {

                                    for (var i = 0; i < x.length; i++) {
                                        x[i].classList.remove("autocomplete-active");
                                    }
                                }
                                function closeAllLists(elmnt) {

                                    var x = document.getElementsByClassName("autocomplete-items");
                                    for (var i = 0; i < x.length; i++) {
                                        if (elmnt != x[i] && elmnt != inp) {
                                            x[i].parentNode.removeChild(x[i]);
                                        }
                                    }
                                }

                                document.addEventListener("click", function (e) {
                                    closeAllLists(e.target);
                                });
                            }


                            var origenes = ["ALTO AMAZONAS",
                                "AMBO",
                                "ANCÓN",
                                "ANDAHUAYLAS",
                                "ANGARAES",
                                "ANTA",
                                "ANTABAMBA",
                                "ANTONIO RAIMONDI",
                                "AREQUIPA",
                                "ASCOPE",
                                "ASUNCIÓN",
                                "ATALAYA",
                                "ATE",
                                "AYABACA",
                                "AYACUCHO",
                                "AYMARAES",
                                "AZÁNGARO",
                                "BAGUA",
                                "BARRANCA",
                                "BARRANCO",
                                "BASE",
                                "BELLAVISTA",
                                "BOCANEGRA",
                                "BOLÍVAR",
                                "BOLOGNESI",
                                "BONGARA",
                                "CAJABAMBA",
                                "CAJAMARCA",
                                "CAJATAMBO",
                                "CALCA",
                                "CALLAO",
                                "CAMACHO",
                                "CAMANÁ",
                                "CANAS",
                                "CANCHIS",
                                "CANDARAVE",
                                "CANGALLO",
                                "CANTA",
                                "CARABAYA",
                                "CARABAYLLO",
                                "CARAVELÍ",
                                "CARAZ",
                                "CARHUAZ",
                                "CARLOS FERMÍN FITZCARRALD",
                                "CASMA",
                                "CASTILLA",
                                "CASTROVIRREYNA",
                                "CAYLLOMA",
                                "CELENDÍN",
                                "CERRO DE PASCO",
                                "CHACHAPOYAS",
                                "CHACLACAYO",
                                "CHALLHUAHUACHO",
                                "CHAMAYA",
                                "CHANCHAMAYO",
                                "CHEPÉN",
                                "CHICLAYO",
                                "CHIMBOTE",
                                "CHINCHA",
                                "CHINCHEROS",
                                "CHORRILLOS",
                                "CHOSICA",
                                "CHOTA",
                                "CHUCUITO",
                                "CHUMBIVILCAS",
                                "CHUPACA",
                                "CHURCAMPA",
                                "CIENEGUILLA",
                                "COMAS",
                                "CONCEPCIÓN",
                                "CONDESUYOS",
                                "CONDORCANQUI",
                                "CONTRALMIRANTE VILLAR",
                                "CONTUMAZA",
                                "CORONEL PORTILLO",
                                "CORONGO",
                                "COTABAMBAS",
                                "CREDITEX",
                                "CUSCO",
                                "CUTERVO",
                                "DANIEL ALCIDES CARRIÓN",
                                "DATEM DEL MARAÑÓN",
                                "DOS DE MAYO",
                                "EL AGUSTINO",
                                "EL COLLAO",
                                "EL DORADO",
                                "ESPINAR",
                                "FRUTALES",
                                "FERREÑAFE",
                                "GENERAL SÁNCHEZ CERRO",
                                "GRAN CHIMÚ",
                                "GRAU",
                                "HUACAYBAMBA",
                                "HUACHO",
                                "HUALGAYOC",
                                "HUALLAGA",
                                "HUAMALÍES",
                                "HUAMANGA",
                                "HUANCA SANCOS",
                                "HUANCABAMBA",
                                "HUANCANÉ",
                                "HUANCAVELICA",
                                "HUANCAYO",
                                "HUANTA",
                                "HUÁNUCO",
                                "HUARAL",
                                "HUARAZ",
                                "HUARI",
                                "HUARMEY",
                                "HUAROCHIRÍ",
                                "HUAURA",
                                "HUAYLAS",
                                "HUAYTARÁ",
                                "ICA",
                                "ILO",
                                "INDEPENDENCIA",
                                "ISLAY",
                                "JAÉN",
                                "JESÚS MARÍA",
                                "JORGE BASADRE",
                                "JULCÁN",
                                "JULIACA",
                                "JUNÍN",
                                "KLO",
                                "LA CONVENCIÓN",
                                "LA MAR",
                                "LA MARINA",
                                "LA MOLINA",
                                "LA UNIÓN",
                                "LA VICTORIA",
                                "LAMAS",
                                "LAMBAYEQUE",
                                "LAMPA",
                                "LAURICOCHA",
                                "LEONCIO PRADO",
                                "LIMA",
                                "LIMA",
                                "LINCE",
                                "LORETO",
                                "LOS OLIVOS",
                                "LUCANAS",
                                "LURIGANCHO",
                                "LURÍN",
                                "LUYA",
                                "MAGDALENA DEL MAR",
                                "MANCHAY",
                                "MANU",
                                "MARAÑÓN",
                                "MARCONA",
                                "MARISCAL CÁCERES",
                                "MARISCAL LUZURIAGA",
                                "MARISCAL NIETO",
                                "MARISCAL RAMÓN CASTILLA",
                                "MAYNAS",
                                "MELGAR",
                                "MIRAFLORES",
                                "MOHO",
                                "MOLLENDO",
                                "MORROPÓN",
                                "MOYOBAMBA",
                                "NAZCA",
                                "NEPTUNIA",
                                "OCROS",
                                "OTUZCO",
                                "OXAPAMPA",
                                "OYÓN",
                                "PACASMAYO",
                                "PACHACÁMAC",
                                "PACHITEA",
                                "PADRE ABAD",
                                "PAITA",
                                "PALLASCA",
                                "PALPA",
                                "PARACAS",
                                "PARINACOCHAS",
                                "PARURO",
                                "PATAZ",
                                "PÁUCAR DEL SARA SARA",
                                "PAUCARTAMBO",
                                "PICOTA",
                                "PISCO",
                                "PIURA",
                              
                                "POMABAMBA",
                                "PROV. CONST. DEL CALLAO",
                                "PUCALLPA",
                                "PUCUSANA",
                                "PUEBLO LIBRE",
                                "PUENTE PIEDRA",
                                "PUERTO INCA",
                                "PUERTO MALDONADO",
                                "PUNO",
                                "PUNTA HERMOSA",
                                "PUNTA NEGRA",
                                "PUNTA SAL",
                                "PURÚS",
                                "PUTUMAYO",
                                "QUISPICANCHI",
                                "RECUAY",
                                "REQUENA",
                                "RÍMAC",
                                "RIOJA",
                                "RODRÍGUEZ DE MENDOZA",
                                "SAN ANTONIO DE PUTINA",
                                "SAN BARTOLO",
                                "SAN BORJA",
                                "SAN IGNACIO",
                                "SAN ISIDRO",
                                "SAN JUAN DE MIRAFLORES",
                                "SAN MARCOS",
                                "SAN MARTIN DE PORRES",
                                "SAN MARTÍN",
                                "SAN MIGUEL",
                                "SAN MIGUEL",
                                "SAN PABLO",
                                "SAN ROMÁN",
                                "SÁNCHEZ CARRIÓN",
                                "SANDIA",
                                "SANTA ANITA",
                                "SANTA CRUZ",
                                "SANTA MARÍA DEL MAR",
                                "SANTA ROSA",
                                "SANTA",
                                "SANTIAGO DE CHUCO",
                                "SANTIAGO DE SURCO",
                                "SATIPO",
                                "SECHURA",
                                "SIHUAS",
                                "SLA",
                                "SUCRE",
                                "SULLANA",
                                "SURCO",
                                "SURQUILLO",
                                "TACNA",
                                "TAHUAMANU",
                                "TALARA",
                                "TAMBOPATA",
                                "TARAPOTO",
                                "TARATA",
                                "TARMA",
                                "TAYACAJA",
                                "TIENDA",
                                "TOCACHE",
                                "TRUJILLO",
                                "TUMBES",
                                "UCAYALI",
                                "URUBAMBA",
                                "UTCUBAMBA",
                                "VARI",
                                "VÍCTOR FAJARDO",
                                "VILCASHUAMÁN",
                                "VILLA EL SALVADOR",
                                "VILLA MARIA DEL TRIUNFO",
                                "VIRÚ",
                                "YAROWILCA",
                                "YAULI",
                                "YAUYOS",
                                "YUNGAY",
                                "YUNGUYO",
                                "ZARUMILLA",

                            ];


                            autocomplete(document.getElementById("origen"), origenes);
                        </script>

                        <!--CLIENTE-->





                        <!--CLIENTE-->

                        <!--ORIGEN-->

                <div class="input-group">
    <input type="text" name="destino" id="destino" onkeypress="return soloLetras(event)" maxlength="20"
        onclick="cambio(this)" oninput="generateFullName()" onkeyup="tipoFunction()">
    <label class="label" for="destino"> * DESTINO:</label></br>
</div>
<script>
    function autocomplete(inp, arr) {
        var currentFocus;
        inp.addEventListener("input", function (e) {
            var a, b, i, val = this.value;

            closeAllLists();
            if (!val) { return false; }
            currentFocus = -1;

            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");

            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {

                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {

                    b = document.createElement("DIV");

                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);

                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";

                    b.addEventListener("click", function (e) {

                        inp.value = this.getElementsByTagName("input")[0].value;

                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });

        inp.addEventListener("keydown", function (e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {

                currentFocus++;

                addActive(x);
            } else if (e.keyCode == 38) { //up

                currentFocus--;

                addActive(x);
            } else if (e.keyCode == 13) {

                e.preventDefault();
                if (currentFocus > -1) {

                    if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {

            if (!x) return false;

            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);

            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {

            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {

            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }

        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }
    var destinos = ["ALTO AMAZONAS",
        "AMBO",
        "ANCÓN",
        "ANDAHUAYLAS",
        "ANGARAES",
        "ANTA",
        "ANTABAMBA",
        "ANTONIO RAIMONDI",
        "AREQUIPA",
        "ASCOPE",
        "ASUNCIÓN",
        "ATALAYA",
        "ATE",
        "AYABACA",
        "AYACUCHO",
        "AYMARAES",
        "AZÁNGARO",
        "BAGUA",
        "BARRANCA",
        "BARRANCO",
        "BASE",
        "BELLAVISTA",
        "BOCANEGRA",
        "BOLÍVAR",
        "BOLOGNESI",
        "BONGARA",
        "CAJABAMBA",
        "CAJAMARCA",
        "CAJATAMBO",
        "CALCA",
        "CALLAO",
        "CAMACHO",
        "CAMANÁ",
        "CANAS",
        "CANCHIS",
        "CANDARAVE",
        "CANGALLO",
        "CANTA",
        "CARABAYA",
        "CARABAYLLO",
        "CARAVELÍ",
        "CARAZ",
        "CARHUAZ",
        "CARLOS FERMÍN FITZCARRALD",
        "CASMA",
        "CASTILLA",
        "CASTROVIRREYNA",
        "CAYLLOMA",
        "CELENDÍN",
        "CERRO DE PASCO",
        "CHACHAPOYAS",
        "CHACLACAYO",
        "CHALLHUAHUACHO",
        "CHAMAYA",
        "CHANCHAMAYO",
        "CHEPÉN",
        "CHICLAYO",
        "CHIMBOTE",
        "CHINCHA",
        "CHINCHEROS",
        "CHORRILLOS",
        "CHOSICA",
        "CHOTA",
        "CHUCUITO",
        "CHUMBIVILCAS",
        "CHUPACA",
        "CHURCAMPA",
        "CIENEGUILLA",
        "COMAS",
        "CONCEPCIÓN",
        "CONDESUYOS",
        "CONDORCANQUI",
        "CONTRALMIRANTE VILLAR",
        "CONTUMAZA",
        "CORONEL PORTILLO",
        "CORONGO",
        "COTABAMBAS",
        "CREDITEX",
        "CUSCO",
        "CUTERVO",
        "DANIEL ALCIDES CARRIÓN",
        "DATEM DEL MARAÑÓN",
        "DOS DE MAYO",
        "EL AGUSTINO",
        "EL COLLAO",
        "EL DORADO",
        "ESPINAR",
        "FERREÑAFE",
        "GENERAL SÁNCHEZ CERRO",
        "GRAN CHIMÚ",
        "GRAU",
        "HUACAYBAMBA",
        "HUACHO",
        "HUALGAYOC",
        "HUALLAGA",
        "HUAMALÍES",
        "HUAMANGA",
        "HUANCA SANCOS",
        "HUANCABAMBA",
        "HUANCANÉ",
        "HUANCAVELICA",
        "HUANCAYO",
        "HUANTA",
        "HUÁNUCO",
        "HUARAL",
        "HUARAZ",
        "HUARI",
        "HUARMEY",
        "HUAROCHIRÍ",
        "HUAURA",
        "HUAYLAS",
        "HUAYTARÁ",
        "ICA",
        "ILO",
        "INDEPENDENCIA",
        "ISLAY",
        "JAÉN",
        "JESÚS MARÍA",
        "JORGE BASADRE",
        "JULCÁN",
        "JULIACA",
        "JUNÍN",
        "KLO",
        "LA CONVENCIÓN",
        "LA MAR",
        "LA MOLINA",
        "LA UNIÓN",
        "LA VICTORIA",
        "LAMAS",
        "LAMBAYEQUE",
        "LAMPA",
        "LAURICOCHA",
        "LEONCIO PRADO",
        "LIMA",
        "LIMA",
        "LINCE",
        "LORETO",
        "LOS OLIVOS",
        "LUCANAS",
        "LURIGANCHO",
        "LURÍN",
        "LUYA",
        "MAGDALENA DEL MAR",
        "MANCHAY",
        "MANU",
        "MARAÑÓN",
        "MARCONA",
        "MARISCAL CÁCERES",
        "MARISCAL LUZURIAGA",
        "MARISCAL NIETO",
        "MARISCAL RAMÓN CASTILLA",
        "MAYNAS",
        "MELGAR",
        "MIRAFLORES",
        "MOHO",
        "MOLLENDO",
        "MORROPÓN",
        "MOYOBAMBA",
        "NAZCA",
        "NEPTUNIA",
        "OCROS",
        "OTUZCO",
        "OXAPAMPA",
        "OYÓN",
        "PACASMAYO",
        "PACHACÁMAC",
        "PACHITEA",
        "PADRE ABAD",
        "PAITA",
        "PALLASCA",
        "PALPA",
        "PARACAS",
        "PARINACOCHAS",
        "PARURO",
        "PATAZ",
        "PÁUCAR DEL SARA SARA",
        "PAUCARTAMBO",
        "PICOTA",
        "PISCO",
        "PIURA",
      
        "POMABAMBA",
        "PROV. CONST. DEL CALLAO",
        "PUCALLPA",
        "PUCUSANA",
        "PUEBLO LIBRE",
        "PUENTE PIEDRA",
        "PUERTO INCA",
         "PUERTO MALDONADO",
        "PUNO",
        "PUNTA HERMOSA",
        "PUNTA NEGRA",
        "PUNTA SAL",
        "PURÚS",
        "PUTUMAYO",
        "QUISPICANCHI",
        "RECUAY",
        "REQUENA",
        "RÍMAC",
        "RIOJA",
        "RODRÍGUEZ DE MENDOZA",
        "SAN ANTONIO DE PUTINA",
        "SAN BARTOLO",
        "SAN BORJA",
        "SAN IGNACIO",
        "SAN ISIDRO",
        "SAN JUAN DE MIRAFLORES",
        "SAN MARCOS",
        "SAN MARTIN DE PORRES",
        "SAN MARTÍN",
        "SAN MIGUEL",
        "SAN MIGUEL",
        "SAN PABLO",
        "SAN ROMÁN",
        "SÁNCHEZ CARRIÓN",
        "SANDIA",
        "SANTA ANITA",
        "SANTA CRUZ",
        "SANTA MARÍA DEL MAR",
        "SANTA ROSA",
        "SANTA",
        "SANTIAGO DE CHUCO",
        "SANTIAGO DE SURCO",
        "SATIPO",
        "SECHURA",
        "SIHUAS",
        "SLA",
        "SUCRE",
        "SULLANA",
        "SURCO",
        "SURQUILLO",
        "TACNA",
        "TAHUAMANU",
        "TALARA",
        "TAMBOPATA",
        "TARAPOTO",
        "TARATA",
        "TARMA",
        "TAYACAJA",
        "TIENDA",
        "TOCACHE",
        "TRUJILLO",
        "TUMBES",
        "UCAYALI",
        "URUBAMBA",
        "UTCUBAMBA",
        "VARI",
        "VÍCTOR FAJARDO",
        "VILCASHUAMÁN",
        "VILLA EL SALVADOR",
        "VILLA MARIA DEL TRIUNFO",
        "VIRÚ",
        "YAROWILCA",
        "YAULI",
        "YAUYOS",
        "YUNGAY",
        "YUNGUYO",
        "ZARUMILLA",];
    autocomplete(document.getElementById("destino"), destinos);
</script>

<div class="input-group">



    <input type="text" onkeypress="return checkast(event)" name="vin" id="vin" oninput="join_names();"
        onpaste="join_names();" maxlength="20"
        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        onclick="generateFullsituacion()" onkeyup="generateFullName()" onchange="tipoFunction()" />
    <label class="label" for="vin"> * VIN/SERIE/PLACA:</label>
    <!--NO ACEPTA SOLO CARACTERES EXTRAÑOS-->

    <script>
        function checkast(e) {
            tecla = (document.all) ? e.keyCode : e.which;

            //Tecla de retroceso para borrar, siempre la permite
            if (tecla == 8) {
                return true;
            }

            // Patron de entrada, en este caso solo acepta numeros y letras
            patron = /[A-Za-z0-9]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }
    </script>


    <!--rocio-->



    <!--PARA QUE ACEPTE TEXTO Y NUMEROS-->
    <script>
        function check(e) {
            tecla = (document.all) ? e.keyCode : e.which;

            //Tecla de retroceso para borrar, siempre la permite
            if (tecla == 8) {
                return true;
            }

            // Patron de entrada, en este caso solo acepta numeros y letras
            patron = /[A-Za-z0-9]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }
    </script>




    <div class="input-group">
        <!--<label class="label"  for="conductor">* CONDUCTOR:</label>-->
        <input type="text" name="conductor" id="conductor" readonly="readonly" hidden="true">

    </div>
    <script type="text/javascript">
        function generateFullName() {
            document.getElementById('conductor').value =
                document.getElementById('cliente').value +
                document.getElementById('destino').value;
        }
    </script>
    <!--cliente-->
    <!--placa de tracto-->
</div>

<div class="input-group">

    </script>
    <input type="text" name="concesionario" id="concesionario" onkeypress="return soloLetras(event)" maxlength="18"
        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        onkeyup="generateFullsituacion()">

    <!--<i>(Maximo 50 digitos)</i>-->


    <label class="label" for="concesionario">* CONCESIONARIO/ CLIENTE:</label></br>

    <!--<input type="text" name="concesionario" id="concesionario" >-->
    <script>
        function soloLetras(e) {
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toLowerCase();
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
            especiales = "8-37-39-46";

            tecla_especial = false
            for (var i in especiales) {
                if (key == especiales[i]) {
                    tecla_especial = true;
                    break;
                }
            }

            if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                return false;
            }
        }
    </script>

    <script>
        function autocomplete(inp, arr) {

            var currentFocus;

            inp.addEventListener("input", function (e) {
                var a, b, i, val = this.value;

                closeAllLists();
                if (!val) { return false; }
                currentFocus = -1;

                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");

                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {

                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {

                        b = document.createElement("DIV");

                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);

                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";

                        b.addEventListener("click", function (e) {

                            inp.value = this.getElementsByTagName("input")[0].value;

                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });

            inp.addEventListener("keydown", function (e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {

                    currentFocus++;

                    addActive(x);
                } else if (e.keyCode == 38) { //up

                    currentFocus--;

                    addActive(x);
                } else if (e.keyCode == 13) {

                    e.preventDefault();
                    if (currentFocus > -1) {

                        if (x) x[currentFocus].click();
                    }
                }
            });
            function addActive(x) {

                if (!x) return false;

                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);

                x[currentFocus].classList.add("autocomplete-active");
            }
            function removeActive(x) {

                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }
            function closeAllLists(elmnt) {

                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }

            document.addEventListener("click", function (e) {
                closeAllLists(e.target);
            });
        }


        var concesionarios = ["ALONSO SERRUDO",
            "ANDEAN MOTORS E.I.R.L",
            "APLEE GLASS",
            "AUTNORT HUARAZ",
            "AUTOBACS IMPORT DISTRIBUTION & SALE",
            "AUTOESPAR S.A. - ICA",
            "AUTOMAQUINARIAS DEL AMAZONAS",
            "AUTOMECANICA SAN MIGUEL SRL",
            "AUTOMOTORES INKA",
            "AUTOMOTORES MOPAL S.A.C",
            "AUTOMOTORES PAKATNAMU S.A.C",
            "AUTOMORIZ SAN CRISTOBAL",
            "AUTOMOTORES DE LA AMAZONIA S.A.C.",
            "AUTOMOTORES -HUÁNUCO",
            "AUTOMOTORES PAKATNAMU SELVA S.",
            "AUTOMOTORES YOSHIVAL S.A.C-HUACHO",
            "AUTOMOTORES YOSHIVAL S.A.C-HUARAZ",
            "AUTOMOTORES YOSHIVAL S.A.C-LOS OLIVOS",
            "AUTOMOTOREZ PAKATNAMU  S.A.C.",
            "AUTOMOTRIZ EL CISNE",
            "AUTOMOTRIZ HUACHO VIP S.A.C. - SANTA MARIA",
            "AUTOMOTRIZ HUAMANGA  EIRL",
            "AUTOMOTRIZ INCAMOTORS - AREQUIPA",
            "AUTOMOTRIZ INCAMOTORS - CUSCO",
            "AUTOMOTRIZ INCAMOTORS FORD - AREQUIPA",
            "AUTOMOTRIZ INCAMOTORS FORD - CUSCO",
            "AUTOMOTRIZ INCAMOTORS FORD - ICA",
            "AUTOMOTRIZ INCAMOTORS -JULIACA",
            "AUTOMOTRIZ INCAMOTORS S.A.C",
            "AUTOMOTRIZ INCAMOTORS S.A.C. - AREQUIPA",
            "AUTOMOTRIZ INCAMOTORS S.A.C.- ICA",
            "AUTOMOTRIZ SAN CRISTOBAL - HUANCAYO",
            "AUTOMOTRIZ SAN CRISTOBAL S.A.C",
            "AUTOMOTRIZ Y MAQUINARIAS MOTOR MASS - JULIACA",
            "AUTOMOTRIZ YOSHIVAL S.A.C HUACHO",
            "AUTOMOVILES -AYACUCHO",
            "AUTOMOVILES S.A.C",
            "AUTONORT",
            "AUTONORT - BARRANCA",
            "AUTONORT - CAJAMARCA S.A.C.",
            "AUTONORT - CHICLAYO",
            "AUTONORT - CHIMBOTE",
            "AUTONORT - PIURA",
            "AUTONORT - TARAPOTO",
            "AUTONORT- HUARAZ",
            "AUTONORT NOR ORIENTE S.A.C.",
            "AUTONORT TRUJILLO S.A.C",
            "AUTRISA AUTOMOTRIZ",
            "B MOTORS S.A.C",
            "B MOTORS S.A.C. CHIMBOTE",
            "B MOTORS TRUJILLO",
            "CAJAMARCA",
            "CENTRO COMERCIAL SAN PEDRO S.R",
            "CHEVROLET", "DC CAJAMARCA",
            "CONAUTO - AREQUIPA",
            "CONCESIONARIOS AUTORIZADOS JULIACA",
            "CONCESIONARIOS AUTORIZADOS S.A.C.",
            "CONOAUTO AREQUIPA",
            "CORASUR-CUSCO",
            "CORSA AUTOMOTRIZ S.A.C.",
            "CRISTIAN ALBERCA P",
            "CTRNAUTOMOTRIZ Y MAQUINARIAS MOTOR",
            "CUSCO EXHIBICION",
            "DC PERU CAJAMARCA",
            "DC PERÚ PIURA SANCHEZ CERRO",
            "DC PERÚ PIURA",
            "DEPOSITO 3 TRUJILLO",
            "DEPOSITO TRUJILLO",
            "DERCO CAJAMARCA",
            "DERCO",
            "DERCOCENTER - PIURA",
            "ESTACION DE SERVICIOS SANTA CECILIA S. A.",
            "FABIOLA ACOSTA SALAZAR",
            "FAP - GRUPO PANA",
            "GILDEMEISTER",
            "GNECCO & CIA S.A.",
            "GRUPO PANA S.A.-SURQUILLO",
            "GRUPO PANA",
            "GRUPO SAN ANTONIO",
            "HONDA",
            "HUANCA AUTOS SAC",
            "ICAMOTORS ICA",
            "INCAMOTORS CUSCO",
            "INKA LIDER AUTOMOTRIZ S.A.C. - TRUJILLO",
            "JM AUTOMOTRIZ S.A.C.",
            "JOSE ANTONIO LIZARRAGA",
            "JOSE ANTONIO ROSAS",
            "JOSE GONZALES",
            "JUAN ANTONIO GONZALES",
            "JUAN WU CHANG",
            "KLM AUTOMOTRIZ",
            "KLM GROUP S.A.C.",
            "MANNUCCI MOTORS S.A.C.",
            "MANUCCI DIESEL",
            "MANUEL YZAGA",
            "MAQGAMA S.A.C - SAN MARTIN",
            "MAQUINARIAS",
            "MAREAUTO",
            "MAREAUTOS AREQUIPA",
            "MAREAUTOS CHICLAYO",
            "MAREAUTOS PUCALLPA",
            "MAREAUTOS TRUJILLO",
            "MATSURI - TACNA",
            "MATSURI",
            "MILENKO", "MITSUI",
            "MITSUI - AREQUIPA",
            "MITSUI - LA MOLINA",
            "MITSUI AREQUIPA SAC",
            "MITSUI AREQUIPA",
            "MITSUI AUTOMOTRIZ AREQUIPA",
            "MITSUI AUTOMOTRIZ S.A.- LA MOLINA",
            "MITSUI AUTOMOTRIZ S.A.C.",
            "MOPAL HUAMUCO",
            "MOPAL HUANUCO",
            "MOPAL PASCO S.A.",
            "MOPAL PUCALLPA",
            "MOTOR MUNDO",
            "MOTORGAS CHINCHA S.A.C.",
            "MOTORS CISNE SRL - PUERTO MALDONADO",
            "MOTORS SHOW TARAPOTO S.A.C.",
            "NOR AUTOS CHICLAYO S.A.C.",
            "NOR AUTOS PIURA S.A.C",
            "NORMOTORS FORD - CHIMBOTE",
            "NORMOTORS S.A.C. - CHIMBOTE",
            "ORAZUL ENERGY",
            "OSCAR CHERO",
            "OTROS",
            "PAKATNAMU JAEN",
            "PERUANA DE MOTORES",
            "PIURA",
            "PRUEBA",
            "RENTING PERU",
            "REPARACIONES Y SERVICIOS DEL SUR S.",
            "REPARACIONES Y SERVICIOS DEL SUR S. / ILO",
            "REPRESENTACIONES E INVERSIONES P&B S.A.C. - CUSCO",
            "REPRESENTACIONES E INVERSIONES P&B S.A.C. - ICA",
            "REPRESENTACIONES E INVERSIONES P&B",
            "RESERSUR S.A.C.",
            "RESESUR- URGENTE",
            "RICARDO SAENZ",
            "ROBERTS RESERSUR",
            "SAN ANTONIO MOTORS SAC",
            "SAN ANTONIO PIURA",
            "SAN ANTONIO TRADE S.A.C. - CHICLAYO",
            "SAN ANTONIO TRADE S.A.C. - PIURA",
            "SAN ANTONIO TRADE S.A.C.",
            "SAN ANTONIO VISE S.A.C",
            "SANTA CLARA - AREQUIPA",
            "SANTA CLARA",
            "SATELITAL - TRUJILLO",
            "SATELITAL CHCLAYO",
            "SATELITAL",
            "SAVI MOTORS FORD - CAJAMARCA",
            "SAVI MOTORS FORD - TRUJILLO",
            "SERVICIO AUTOMOTRICES DEL NORTE",
            "SERVICIOS AUTOMOTRICES DEL NORTE -EVITAMIENTO",
            "SHOUGANG",
            "SILVIA YABAR", "SLA",
            "SOCIEDAD DE AUTOMOTORES INKA S.A.C.",
            "SOCIEDAD DE AUTOMOTORES INKA S.A.C.-CHICLAYO",
            "SOCIEDAD DE AUTOMOTORES INKA",
            "SPORTWAGEN - MANCHAY",
            "SPORTWAGEN S.A.C.",
            "STOCK BMOTORS",
            "SUCURSAL TRUJILLO",
            "SUR MOTORS - AREQUIPA DOLORES",
            "SUR MOTORS AREQUIPA - VENEZUELA",
            "SUR MOTORS AREQUIPA",
            "SUR MOTORS ILO - LOTE 20",
            "SUR MOTORS ILO - LOTE 3",
            "SUR MOTORS JULIACA",
            "TAIR AREQUIPA",
            "TAIR RENTING",
            "TAIR",
            "TIENDA/ KLM",
            "TOYOTA DEL PERU",
            "TOYOTA TDP",
            "TOYOTA",
            "TOYOTATHON PIURA",
            "TRANSPORTES ANGEL IBARCENA S.A.C.",
            "TRUJILLO 3 DEPÓSITO",
            "TRUJILLO 4 CV",
            "TRUJILLO",
            "URSUS RESTAURANTES",
            "WANKAMOTORS FORD - HUANCAYO",
            "MULTIMARKAS S.A.C",
            "TSUTOMU AUTOS S.A.C",
            "CHAMAYA",
        ];


        autocomplete(document.getElementById("concesionario"), concesionarios);
    </script>


</div>

<div class="input-group">

    <!--<label  style=" padding-right:288px; color:#B6B6B6;font-size: 12px;"  for="situacion">   * SITUACION:</label>-->

    <input type="text" onkeypress="return checkast(event)" name="situacion" id="situacion" oninput="join_names();"
        onpaste="join_names();" maxlength="20"
        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        readonly="readonly" hidden="true" />

    <!--NO ACEPTA SOLO CARACTERES EXTRAÑOS-->

</div>

<script type="text/javascript">
    function generateFullsituacion() {
        document.getElementById('situacion').value =
            document.getElementById('cliente').value + 'VIN' +
            document.getElementById('vin').value;
    }
</script>

<!--fecha de registro-->
<div class="input-group">

    <!--<label  style=" padding-right:288px; color:#B6B6B6;font-size: 12px;"  for="situacion">   * FECHA DE REGISTRO:</label>-->


    <?php date_default_timezone_set('America/Lima');date('Y-m-d H:i:s');?>





    <?php

$fecha1 = date('Y-m-d H:i:s.'); // Obviamente se cambia por $_POST['fecha1'];

$fechaNueva =date('d-m-Y H:i:s.', strtotime(str_replace('/', '-', $fecha1)));

echo


"        <input id='fecharegistro' name='fecharegistro' value='$fechaNueva'readonly='readonly'  hidden= 'true'/>"

?>






    <!--NO ACEPTA SOLO CARACTERES EXTRAÑOS-->

</div>
<!--fecha de registro-->


<h1><input style="color:red;" id="target" name="target" type="checkbox" value="Autocompletar datos del solicitante?"
        onkeyup="tipoFunction()" />
    Autocompletar datos del solicitante</h1>

<div class="input-group">
    <input type="text" class="wpcf7-text" style="margin-top:13px;" maxlength="20"
        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        onkeypress="return solonombre(event)" id="nombresolicitante" name="nombresolicitante"
        onClick="$('#dnisolicitante').toggle();$('#celularsolicitante').toggle();$('#correosolicitante').toggle();" />


    <label class="label" for="solicitante">* NOMBRE DEL SOLICITANTE:</label></br>
</div>

<script>
    function solonombre(e) {
        key = e.keyCode || e.which;
        tecla = String.fromCharCode(key).toLowerCase();
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
        especiales = "8-37-39-46";

        tecla_especial = false
        for (var i in especiales) {
            if (key == especiales[i]) {
                tecla_especial = true;
                break;
            }
        }

        if (letras.indexOf(tecla) == -1 && !tecla_especial) {
            return false;
        }
    }
</script>
<div class="input-group">

    <input maxlength="8" class="wpcf7-text"
        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="dnisolicitante"
        name="dnisolicitante" class="form-control pull-right" placeholder="* DNI DEL SOLICITANTE:"
        style="display:none;" />
    <!--<label class="label" for="dnisolicitante" >DNI SOLICITANTE:</label>-->

    <input maxlength="9" class="wpcf7-text"
        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="celularsolicitante"
        name="celularsolicitante" class="form-control pull-right" placeholder="* CELULAR DEL SOLICITANTE:"
        style="display:none;" />
    <!--<label class="label" for="pass2" >CELULAR SOLICITANTE:</label>-->

    <input class="wpcf7-text" maxlength="25"
        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="text"
        id="correosolicitante" name="correosolicitante" class="form-control pull-right"
        placeholder="* EMAIL DEL SOLICITANTE:" style="display:none;" />
    <!--<label class="label" for="pass" >CORREO SOLICITANTE:</label>-->

    <!--						<script>-->
    <!--    var inputEmail = document.getElementById("correosolicitante");-->
    <!--    localStorage.setItem("correosolicitante", inputEmail.value);-->
    <!--</script>-->


    <!--						<script>-->
    <!--    var inputEmail = document.getElementById("correosolicitante");-->
    <!--    localStorage.setItem("correosolicitante", inputEmail.value);-->
    <!--</script>-->



</div>


<div class="input-group">
    <!--<label class="label" for="tipo">* TIPO:</label></br>-->
    <input type="text" id="tipo" name="tipo" value="PROVINCIA"readonly="readonly" hidden="true">


    <script>
        // function tipoFunction() {
        //     var x = document.getElementById("destino").value;
        //     document.getElementById("tipo").value = x;
        // }
    </script>

</div>
<!--NUMERO DE GUIA-->

<div class="input-group">
    <label class="label" for="numdeguia">* NÚMERO DE GUÍA/TARJETA DE PROPIEDAD:</label></br>
    <input style=" margin-top:18px;" type="text" name="numdeguia" id="numdeguia" placeholder="XXX-XXXXXXXXXXXXXXXXXXX"
        pattern=" \d{3}\-\d{20}" class="masked">

</div>

<script>
    window.addEventListener("load", cargaPagina);
    function cargaPagina() {
        var btn = document.getElementById("numdeguia").addEventListener("click", cambiaValores);
    }

    function cambiaValores() {
        if (document.getElementById("tipo").value == "ALTO AMAZONAS" || document.getElementById("tipo").value == "AMBO" ||
            document.getElementById("tipo").value == "ANDAHUAYLAS" || document.getElementById("tipo").value == "ANGARAES" ||
            document.getElementById("tipo").value == "ANTA" || document.getElementById("tipo").value == "ANTABAMBA" ||
            document.getElementById("tipo").value == "ANTONIO RAIMONDI" || document.getElementById("tipo").value == "AREQUIPA" ||
            document.getElementById("tipo").value == "ASCOPE" || document.getElementById("tipo").value == "ASUNCIÓN" ||
            document.getElementById("tipo").value == "ATALAYA" || document.getElementById("tipo").value == "AYABACA" ||
            document.getElementById("tipo").value == "AYACUCHO" || document.getElementById("tipo").value == "AYMARAES" ||
            document.getElementById("tipo").value == "AZÁNGARO" || document.getElementById("tipo").value == "BAGUA" ||
            document.getElementById("tipo").value == "BARRANCA" || document.getElementById("tipo").value == "BOLÍVAR" ||
            document.getElementById("tipo").value == "BOLOGNESI" || document.getElementById("tipo").value == "BONGARA" ||
            document.getElementById("tipo").value == "CAJABAMBA" || document.getElementById("tipo").value == "CAJAMARCA" ||
            document.getElementById("tipo").value == "CAJATAMBO" || document.getElementById("tipo").value == "CALCA" ||
            document.getElementById("tipo").value == "CAMACHO" || document.getElementById("tipo").value == "CAMANÁ" ||
            document.getElementById("tipo").value == "CANAS" || document.getElementById("tipo").value == "CANCHIS" ||
            document.getElementById("tipo").value == "CANDARAVE" || document.getElementById("tipo").value == "CANGALLO" ||
            document.getElementById("tipo").value == "CANTA" || document.getElementById("tipo").value == "CARABAYA" ||
            document.getElementById("tipo").value == "CARAVELÍ" || document.getElementById("tipo").value == "CARAZ" ||
            document.getElementById("tipo").value == "CARHUAZ" || document.getElementById("tipo").value == "CARLOS FERMÍN FITZCARRALD" ||
            document.getElementById("tipo").value == "CASMA" || document.getElementById("tipo").value == "CASTILLA" ||
            document.getElementById("tipo").value == "CASTROVIRREYNA" || document.getElementById("tipo").value == "CAYLLOMA" ||
            document.getElementById("tipo").value == "CELENDÍN" || document.getElementById("tipo").value == "CERRO DE PASCO" ||
            document.getElementById("tipo").value == "CHACHAPOYAS" || document.getElementById("tipo").value == "CHALLHUAHUACHO" ||
            document.getElementById("tipo").value == "CHAMAYA" || document.getElementById("tipo").value == "CHANCHAMAYO" ||
            document.getElementById("tipo").value == "CHEPÉN" || document.getElementById("tipo").value == "CHICLAYO" ||
            document.getElementById("tipo").value == "CHIMBOTE" || document.getElementById("tipo").value == "CHINCHA" ||
            document.getElementById("tipo").value == "CHINCHEROSS" || document.getElementById("tipo").value == "CHOTA" ||
            document.getElementById("tipo").value == "CHUCUITO" || document.getElementById("tipo").value == "CHUMBIVILCAS" ||
            document.getElementById("tipo").value == "CHUPACA" || document.getElementById("tipo").value == "CHURCAMPA" ||
            document.getElementById("tipo").value == "CONCEPCIÓN" || document.getElementById("tipo").value == "CONDESUYOS" ||
            document.getElementById("tipo").value == "CONDORCANQUI" || document.getElementById("tipo").value == "CONTRALMIRANTE VILLAR" ||
            document.getElementById("tipo").value == "CONTUMAZA" || document.getElementById("tipo").value == "CORONEL PORTILLO" ||
            document.getElementById("tipo").value == "CORONGO" || document.getElementById("tipo").value == "COTABAMBAS" ||
            document.getElementById("tipo").value == "CUSCO" || document.getElementById("tipo").value == "CUTERVO" ||
            document.getElementById("tipo").value == "DANIEL ALCIDES CARRIÓN" || document.getElementById("tipo").value == "DATEM DEL MARAÑÓN" ||
            document.getElementById("tipo").value == "DOS DE MAYO" || document.getElementById("tipo").value == "EL COLLAO" ||
            document.getElementById("tipo").value == "EL DORADO" || document.getElementById("tipo").value == "ESPINAR" ||
            document.getElementById("tipo").value == "GENERAL SÁNCHEZ CERRO" || document.getElementById("tipo").value == "GRAN CHIMÚ" ||
            document.getElementById("tipo").value == "GRAU" || document.getElementById("tipo").value == "HUACAYBAMBA" ||
            document.getElementById("tipo").value == "HUACHO" || document.getElementById("tipo").value == "HUALGAYOC" ||
            document.getElementById("tipo").value == "HUALLAGA" || document.getElementById("tipo").value == "HUAMALÍES" ||
            document.getElementById("tipo").value == "HUAMANGA" || document.getElementById("tipo").value == "HUANCA SANCOS" ||
            document.getElementById("tipo").value == "HUANCABAMBA" || document.getElementById("tipo").value == "HUANCANÉ" ||
            document.getElementById("tipo").value == "HUANCAVELICA" || document.getElementById("tipo").value == "HUANCAYO" ||
            document.getElementById("tipo").value == "HUANTA" || document.getElementById("tipo").value == "HUÁNUCO" ||
            document.getElementById("tipo").value == "HUARAL" || document.getElementById("tipo").value == "HUARAZ" ||
            document.getElementById("tipo").value == "HUARI" || document.getElementById("tipo").value == "HUARMEY" ||
            document.getElementById("tipo").value == "HUAROCHIRÍ" || document.getElementById("tipo").value == "HUAURA" ||
            document.getElementById("tipo").value == "HUAYLAS" || document.getElementById("tipo").value == "HUAYTARÁ" ||
            document.getElementById("tipo").value == "ICA" || document.getElementById("tipo").value == "ILO" ||
            document.getElementById("tipo").value == "ISLAY" || document.getElementById("tipo").value == "JULCÁN" || document.getElementById("tipo").value == "JULIACA" ||
            document.getElementById("tipo").value == "JORGE BASADRE" || document.getElementById("tipo").value == "JUNÍN" ||
            document.getElementById("tipo").value == "LA CONVENCIÓN" || document.getElementById("tipo").value == "LA MAR" || document.getElementById("tipo").value == "LAMBAYEQUE" ||
            document.getElementById("tipo").value == "LAMPA" || document.getElementById("tipo").value == "LAURICOCHA" ||
            document.getElementById("tipo").value == "LEONCIO PRADO" || document.getElementById("tipo").value == "LORETO" ||
            document.getElementById("tipo").value == "LUYA" || document.getElementById("tipo").value == "MANCHAY" ||
            document.getElementById("tipo").value == "MANU" || document.getElementById("tipo").value == "MARAÑÓN" ||
            document.getElementById("tipo").value == "MARISCAL CÁCERES" || document.getElementById("tipo").value == "MARISCAL LUZURIAGA" ||
            document.getElementById("tipo").value == "MARISCAL NIETO" || document.getElementById("tipo").value == "MARISCAL RAMÓN CASTILLA" ||
            document.getElementById("tipo").value == "MAYNAS" || document.getElementById("tipo").value == "MELGAR" ||
            document.getElementById("tipo").value == "MOHO" || document.getElementById("tipo").value == "MORROPÓN" ||
            document.getElementById("tipo").value == "MOYOBAMBA" || document.getElementById("tipo").value == "NAZCA" ||
            document.getElementById("tipo").value == "OCROS" || document.getElementById("tipo").value == "OTUZCO" ||
            document.getElementById("tipo").value == "OXAPAMPA" || document.getElementById("tipo").value == "OYÓN" ||
            document.getElementById("tipo").value == "PACHITEA" || document.getElementById("tipo").value == "PADRE ABAD" ||
            document.getElementById("tipo").value == "PAITA" || document.getElementById("tipo").value == "PALLASCA" ||
            document.getElementById("tipo").value == "PALPA" || document.getElementById("tipo").value == "PARINACOCHAS" ||
            document.getElementById("tipo").value == "PARURO" || document.getElementById("tipo").value == "PATAZ" ||
            document.getElementById("tipo").value == "PÁUCAR DEL SARA SARA" || document.getElementById("tipo").value == "PAUCARTAMBO" ||
            document.getElementById("tipo").value == "PICOTA" || document.getElementById("tipo").value == "PISCO" ||
            document.getElementById("tipo").value == "PIURA" || document.getElementById("tipo").value == "POMABAMBA" ||
            document.getElementById("tipo").value == "PUCALLPA" || document.getElementById("tipo").value == "PUERTO INCA" ||
            document.getElementById("tipo").value == "PUNO" || document.getElementById("tipo").value == "PURÚS" ||
            document.getElementById("tipo").value == "PUTUMAYO" || document.getElementById("tipo").value == "QUISPICANCHI" ||
            document.getElementById("tipo").value == "RECUAY" || document.getElementById("tipo").value == "REQUENA" ||
            document.getElementById("tipo").value == "RIOJA" || document.getElementById("tipo").value == "RODRÍGUEZ DE MENDOZA" ||
            document.getElementById("tipo").value == "SAN ANTONIO DE PUTINA" || document.getElementById("tipo").value == "SAN MARCOS" ||
            document.getElementById("tipo").value == "SAN MARTÍN" || document.getElementById("tipo").value == "SAN ROMÁN" ||
            document.getElementById("tipo").value == "SÁNCHEZ CARRIÓN" || document.getElementById("tipo").value == "SANDIA" ||
            document.getElementById("tipo").value == "SANTA CRUZ" || document.getElementById("tipo").value == "SANTA" ||
            document.getElementById("tipo").value == "SANTIAGO DE CHUCO" || document.getElementById("tipo").value == "SATIPO" ||
            document.getElementById("tipo").value == "SECHURA" || document.getElementById("tipo").value == "SIHUAS" ||
            document.getElementById("tipo").value == "SUCRE" || document.getElementById("tipo").value == "SULLANA" ||
            document.getElementById("tipo").value == "TACNA" || document.getElementById("tipo").value == "TAHUAMANU" ||
            document.getElementById("tipo").value == "TALARA" || document.getElementById("tipo").value == "TAMBOPATA" ||
            document.getElementById("tipo").value == "TARAPOTO" || document.getElementById("tipo").value == "TARATA" ||
            document.getElementById("tipo").value == "TARMA" || document.getElementById("tipo").value == "TAYACAJA" ||
            document.getElementById("tipo").value == "TOCACHE" || document.getElementById("tipo").value == "TRUJILLO" ||
            document.getElementById("tipo").value == "TUMBES" || document.getElementById("tipo").value == "UCAYALI" ||
            document.getElementById("tipo").value == "URUBAMBA" || document.getElementById("tipo").value == "UTCUBAMBA" ||
            document.getElementById("tipo").value == "VÍCTOR FAJARDO" || document.getElementById("tipo").value == "VILCASHUAMÁN" ||
            document.getElementById("tipo").value == "VIRÚ" || document.getElementById("tipo").value == "YAROWILCA" ||
            document.getElementById("tipo").value == "YAULI" || document.getElementById("tipo").value == "YAUYOS" ||
            document.getElementById("tipo").value == "YUNGAY" || document.getElementById("tipo").value == "YUNGUYO" ||
            document.getElementById("tipo").value == "ZARUMILLA" || document.getElementById("tipo").value == "ALTO AMAZONAS" || document.getElementById("tipo").value == "AMBO") {
            document.getElementById("tipo").value = "PROVINCIA";



        } if (document.getElementById("tipo").value == "ANCÓN" || document.getElementById("tipo").value == "ATE" ||
            document.getElementById("tipo").value == "BARRANCO" || document.getElementById("tipo").value == "BASE" ||
            document.getElementById("tipo").value == "BELLAVISTA" || document.getElementById("tipo").value == "BOCANEGRA" ||
            document.getElementById("tipo").value == "CALLAO" || document.getElementById("tipo").value == "CARABAYLLO" ||
            document.getElementById("tipo").value == "CHACLACAYO" || document.getElementById("tipo").value == "CHORRILLOS" ||
            document.getElementById("tipo").value == "CHOSICA" || document.getElementById("tipo").value == "CIENEGUILLA" ||
            document.getElementById("tipo").value == "COMAS" || document.getElementById("tipo").value == "CREDITEX" ||
            document.getElementById("tipo").value == "EL AGUSTINO" || document.getElementById("tipo").value == "FERREÑAFE" ||
            document.getElementById("tipo").value == "INDEPENDENCIA" || document.getElementById("tipo").value == "JESÚS MARÍA" || document.getElementById("tipo").value == "KLO" ||
            document.getElementById("tipo").value == "LA MOLINA" || document.getElementById("tipo").value == "LA UNIÓN" ||
            document.getElementById("tipo").value == "LA VICTORIA" || document.getElementById("tipo").value == "LAMAS" ||
            document.getElementById("tipo").value == "LIMA" || document.getElementById("tipo").value == "LINCE" ||
            document.getElementById("tipo").value == "LOS OLIVOS" || document.getElementById("tipo").value == "LUCANAS" ||
            document.getElementById("tipo").value == "LURIGANCHO" || document.getElementById("tipo").value == "LURÍN" ||
            document.getElementById("tipo").value == "MAGDALENA DEL MAR" || document.getElementById("tipo").value == "MARCONA" ||
            document.getElementById("tipo").value == "MIRAFLORES" || document.getElementById("tipo").value == "MOLLENDO" ||
            document.getElementById("tipo").value == "NEPTUNIA" || document.getElementById("tipo").value == "PACASMAYO" ||
            document.getElementById("tipo").value == "PACHACÁMAC" || document.getElementById("tipo").value == "PARACAS" ||
            document.getElementById("tipo").value == "PROV. CONST. DEL CALLAO" || document.getElementById("tipo").value == "PUCUSANA" ||
            document.getElementById("tipo").value == "PUEBLO LIBRE" || document.getElementById("tipo").value == "PUENTE PIEDRA" ||
            document.getElementById("tipo").value == "PUNTA HERMOSA" || document.getElementById("tipo").value == "PUNTA NEGRA" ||
            document.getElementById("tipo").value == "PUNTA SAL" || document.getElementById("tipo").value == "RÍMAC" ||
            document.getElementById("tipo").value == "SAN BARTOLO" || document.getElementById("tipo").value == "SAN BORJA" ||
            document.getElementById("tipo").value == "SAN IGNACIO" || document.getElementById("tipo").value == "SAN ISIDRO" ||
            document.getElementById("tipo").value == "SAN JUAN DE MIRAFLORES" || document.getElementById("tipo").value == "SAN MARTIN DE PORRES" ||
            document.getElementById("tipo").value == "SAN MIGUEL" || document.getElementById("tipo").value == "SAN PABLO" ||
            document.getElementById("tipo").value == "SANTA ANITA" || document.getElementById("tipo").value == "SANTA MARÍA DEL MAR" ||
            document.getElementById("tipo").value == "SANTA ROSA" || document.getElementById("tipo").value == "SANTIAGO DE SURCO" ||
            document.getElementById("tipo").value == "SLA" || document.getElementById("tipo").value == "SURCO" ||
            document.getElementById("tipo").value == "SURQUILLO" || document.getElementById("tipo").value == "TIENDA" ||
            document.getElementById("tipo").value == "VARI" || document.getElementById("tipo").value == "VILLA EL SALVADOR" ||
            document.getElementById("tipo").value == "VILLA MARIA DEL TRIUNFO") {
            document.getElementById("tipo").value = "LOCAL";
        }
    }
</script>
<!--rocio-->

<script>
    window.addEventListener("load", cargaPagina);
    function cargaPagina() {
        var btn = document.getElementById("target").addEventListener("click", cambiaValores);
    }

    function cambiaValores() {
        if (document.getElementById("tipo").value == "ALTO AMAZONAS" || document.getElementById("tipo").value == "AMBO" ||
            document.getElementById("tipo").value == "ANDAHUAYLAS" || document.getElementById("tipo").value == "ANGARAES" ||
            document.getElementById("tipo").value == "ANTA" || document.getElementById("tipo").value == "ANTABAMBA" ||
            document.getElementById("tipo").value == "ANTONIO RAIMONDI" || document.getElementById("tipo").value == "AREQUIPA" ||
            document.getElementById("tipo").value == "ASCOPE" || document.getElementById("tipo").value == "ASUNCIÓN" ||
            document.getElementById("tipo").value == "ATALAYA" || document.getElementById("tipo").value == "AYABACA" ||
            document.getElementById("tipo").value == "AYACUCHO" || document.getElementById("tipo").value == "AYMARAES" ||
            document.getElementById("tipo").value == "AZÁNGARO" || document.getElementById("tipo").value == "BAGUA" ||
            document.getElementById("tipo").value == "BARRANCA" || document.getElementById("tipo").value == "BOLÍVAR" ||
            document.getElementById("tipo").value == "BOLOGNESI" || document.getElementById("tipo").value == "BONGARA" ||
            document.getElementById("tipo").value == "CAJABAMBA" || document.getElementById("tipo").value == "CAJAMARCA" ||
            document.getElementById("tipo").value == "CAJATAMBO" || document.getElementById("tipo").value == "CALCA" ||
            document.getElementById("tipo").value == "CAMACHO" || document.getElementById("tipo").value == "CAMANÁ" ||
            document.getElementById("tipo").value == "CANAS" || document.getElementById("tipo").value == "CANCHIS" ||
            document.getElementById("tipo").value == "CANDARAVE" || document.getElementById("tipo").value == "CANGALLO" ||
            document.getElementById("tipo").value == "CANTA" || document.getElementById("tipo").value == "CARABAYA" ||
            document.getElementById("tipo").value == "CARAVELÍ" || document.getElementById("tipo").value == "CARAZ" ||
            document.getElementById("tipo").value == "CARHUAZ" || document.getElementById("tipo").value == "CARLOS FERMÍN FITZCARRALD" ||
            document.getElementById("tipo").value == "CASMA" || document.getElementById("tipo").value == "CASTILLA" ||
            document.getElementById("tipo").value == "CASTROVIRREYNA" || document.getElementById("tipo").value == "CAYLLOMA" ||
            document.getElementById("tipo").value == "CELENDÍN" || document.getElementById("tipo").value == "CERRO DE PASCO" ||
            document.getElementById("tipo").value == "CHACHAPOYAS" || document.getElementById("tipo").value == "CHALLHUAHUACHO" ||
            document.getElementById("tipo").value == "CHAMAYA" || document.getElementById("tipo").value == "CHANCHAMAYO" ||
            document.getElementById("tipo").value == "CHEPÉN" || document.getElementById("tipo").value == "CHICLAYO" ||
            document.getElementById("tipo").value == "CHIMBOTE" || document.getElementById("tipo").value == "CHINCHA" ||
            document.getElementById("tipo").value == "CHINCHEROSS" || document.getElementById("tipo").value == "CHOTA" ||
            document.getElementById("tipo").value == "CHUCUITO" || document.getElementById("tipo").value == "CHUMBIVILCAS" ||
            document.getElementById("tipo").value == "CHUPACA" || document.getElementById("tipo").value == "CHURCAMPA" ||
            document.getElementById("tipo").value == "CONCEPCIÓN" || document.getElementById("tipo").value == "CONDESUYOS" ||
            document.getElementById("tipo").value == "CONDORCANQUI" || document.getElementById("tipo").value == "CONTRALMIRANTE VILLAR" ||
            document.getElementById("tipo").value == "CONTUMAZA" || document.getElementById("tipo").value == "CORONEL PORTILLO" ||
            document.getElementById("tipo").value == "CORONGO" || document.getElementById("tipo").value == "COTABAMBAS" ||
            document.getElementById("tipo").value == "CUSCO" || document.getElementById("tipo").value == "CUTERVO" ||
            document.getElementById("tipo").value == "DANIEL ALCIDES CARRIÓN" || document.getElementById("tipo").value == "DATEM DEL MARAÑÓN" ||
            document.getElementById("tipo").value == "DOS DE MAYO" || document.getElementById("tipo").value == "EL COLLAO" ||
            document.getElementById("tipo").value == "EL DORADO" || document.getElementById("tipo").value == "ESPINAR" ||
            document.getElementById("tipo").value == "GENERAL SÁNCHEZ CERRO" || document.getElementById("tipo").value == "GRAN CHIMÚ" ||
            document.getElementById("tipo").value == "GRAU" || document.getElementById("tipo").value == "HUACAYBAMBA" ||
            document.getElementById("tipo").value == "HUACHO" || document.getElementById("tipo").value == "HUALGAYOC" ||
            document.getElementById("tipo").value == "HUALLAGA" || document.getElementById("tipo").value == "HUAMALÍES" ||
            document.getElementById("tipo").value == "HUAMANGA" || document.getElementById("tipo").value == "HUANCA SANCOS" ||
            document.getElementById("tipo").value == "HUANCABAMBA" || document.getElementById("tipo").value == "HUANCANÉ" ||
            document.getElementById("tipo").value == "HUANCAVELICA" || document.getElementById("tipo").value == "HUANCAYO" ||
            document.getElementById("tipo").value == "HUANTA" || document.getElementById("tipo").value == "HUÁNUCO" ||
            document.getElementById("tipo").value == "HUARAL" || document.getElementById("tipo").value == "HUARAZ" ||
            document.getElementById("tipo").value == "HUARI" || document.getElementById("tipo").value == "HUARMEY" ||
            document.getElementById("tipo").value == "HUAROCHIRÍ" || document.getElementById("tipo").value == "HUAURA" ||
            document.getElementById("tipo").value == "HUAYLAS" || document.getElementById("tipo").value == "HUAYTARÁ" ||
            document.getElementById("tipo").value == "ICA" || document.getElementById("tipo").value == "ILO" ||
            document.getElementById("tipo").value == "ISLAY" || document.getElementById("tipo").value == "JULCÁN" || document.getElementById("tipo").value == "JULIACA" ||
            document.getElementById("tipo").value == "JORGE BASADRE" || document.getElementById("tipo").value == "JUNÍN" ||
            document.getElementById("tipo").value == "LA CONVENCIÓN" || document.getElementById("tipo").value == "LA MAR" || document.getElementById("tipo").value == "LAMBAYEQUE" ||
            document.getElementById("tipo").value == "LAMPA" || document.getElementById("tipo").value == "LAURICOCHA" ||
            document.getElementById("tipo").value == "LEONCIO PRADO" || document.getElementById("tipo").value == "LORETO" ||
            document.getElementById("tipo").value == "LUYA" || document.getElementById("tipo").value == "MANCHAY" ||
            document.getElementById("tipo").value == "MANU" || document.getElementById("tipo").value == "MARAÑÓN" ||
            document.getElementById("tipo").value == "MARISCAL CÁCERES" || document.getElementById("tipo").value == "MARISCAL LUZURIAGA" ||
            document.getElementById("tipo").value == "MARISCAL NIETO" || document.getElementById("tipo").value == "MARISCAL RAMÓN CASTILLA" ||
            document.getElementById("tipo").value == "MAYNAS" || document.getElementById("tipo").value == "MELGAR" ||
            document.getElementById("tipo").value == "MOHO" || document.getElementById("tipo").value == "MORROPÓN" ||
            document.getElementById("tipo").value == "MOYOBAMBA" || document.getElementById("tipo").value == "NAZCA" ||
            document.getElementById("tipo").value == "OCROS" || document.getElementById("tipo").value == "OTUZCO" ||
            document.getElementById("tipo").value == "OXAPAMPA" || document.getElementById("tipo").value == "OYÓN" ||
            document.getElementById("tipo").value == "PACHITEA" || document.getElementById("tipo").value == "PADRE ABAD" ||
            document.getElementById("tipo").value == "PAITA" || document.getElementById("tipo").value == "PALLASCA" ||
            document.getElementById("tipo").value == "PALPA" || document.getElementById("tipo").value == "PARINACOCHAS" ||
            document.getElementById("tipo").value == "PARURO" || document.getElementById("tipo").value == "PATAZ" ||
            document.getElementById("tipo").value == "PÁUCAR DEL SARA SARA" || document.getElementById("tipo").value == "PAUCARTAMBO" ||
            document.getElementById("tipo").value == "PICOTA" || document.getElementById("tipo").value == "PISCO" ||
            document.getElementById("tipo").value == "PIURA" || document.getElementById("tipo").value == "POMABAMBA" ||
            document.getElementById("tipo").value == "PUCALLPA" || document.getElementById("tipo").value == "PUERTO INCA" ||
            document.getElementById("tipo").value == "PUNO" || document.getElementById("tipo").value == "PURÚS" ||
            document.getElementById("tipo").value == "PUTUMAYO" || document.getElementById("tipo").value == "QUISPICANCHI" ||
            document.getElementById("tipo").value == "RECUAY" || document.getElementById("tipo").value == "REQUENA" ||
            document.getElementById("tipo").value == "RIOJA" || document.getElementById("tipo").value == "RODRÍGUEZ DE MENDOZA" ||
            document.getElementById("tipo").value == "SAN ANTONIO DE PUTINA" || document.getElementById("tipo").value == "SAN MARCOS" ||
            document.getElementById("tipo").value == "SAN MARTÍN" || document.getElementById("tipo").value == "SAN ROMÁN" ||
            document.getElementById("tipo").value == "SÁNCHEZ CARRIÓN" || document.getElementById("tipo").value == "SANDIA" ||
            document.getElementById("tipo").value == "SANTA CRUZ" || document.getElementById("tipo").value == "SANTA" ||
            document.getElementById("tipo").value == "SANTIAGO DE CHUCO" || document.getElementById("tipo").value == "SATIPO" ||
            document.getElementById("tipo").value == "SECHURA" || document.getElementById("tipo").value == "SIHUAS" ||
            document.getElementById("tipo").value == "SUCRE" || document.getElementById("tipo").value == "SULLANA" ||
            document.getElementById("tipo").value == "TACNA" || document.getElementById("tipo").value == "TAHUAMANU" ||
            document.getElementById("tipo").value == "TALARA" || document.getElementById("tipo").value == "TAMBOPATA" ||
            document.getElementById("tipo").value == "TARAPOTO" || document.getElementById("tipo").value == "TARATA" ||
            document.getElementById("tipo").value == "TARMA" || document.getElementById("tipo").value == "TAYACAJA" ||
            document.getElementById("tipo").value == "TOCACHE" || document.getElementById("tipo").value == "TRUJILLO" ||
            document.getElementById("tipo").value == "TUMBES" || document.getElementById("tipo").value == "UCAYALI" ||
            document.getElementById("tipo").value == "URUBAMBA" || document.getElementById("tipo").value == "UTCUBAMBA" ||
            document.getElementById("tipo").value == "VÍCTOR FAJARDO" || document.getElementById("tipo").value == "VILCASHUAMÁN" ||
            document.getElementById("tipo").value == "VIRÚ" || document.getElementById("tipo").value == "YAROWILCA" ||
            document.getElementById("tipo").value == "YAULI" || document.getElementById("tipo").value == "YAUYOS" ||
            document.getElementById("tipo").value == "YUNGAY" || document.getElementById("tipo").value == "YUNGUYO" ||
            document.getElementById("tipo").value == "ZARUMILLA" || document.getElementById("tipo").value == "ALTO AMAZONAS" || document.getElementById("tipo").value == "AMBO") {
            document.getElementById("tipo").value = "PROVINCIA";



        } if (document.getElementById("tipo").value == "ANCÓN" || document.getElementById("tipo").value == "ATE" ||
            document.getElementById("tipo").value == "BARRANCO" || document.getElementById("tipo").value == "BASE" ||
            document.getElementById("tipo").value == "BELLAVISTA" || document.getElementById("tipo").value == "BOCANEGRA" ||
            document.getElementById("tipo").value == "CALLAO" || document.getElementById("tipo").value == "CARABAYLLO" ||
            document.getElementById("tipo").value == "CHACLACAYO" || document.getElementById("tipo").value == "CHORRILLOS" ||
            document.getElementById("tipo").value == "CHOSICA" || document.getElementById("tipo").value == "CIENEGUILLA" ||
            document.getElementById("tipo").value == "COMAS" || document.getElementById("tipo").value == "CREDITEX" ||
            document.getElementById("tipo").value == "EL AGUSTINO" || document.getElementById("tipo").value == "FERREÑAFE" ||
            document.getElementById("tipo").value == "INDEPENDENCIA" || document.getElementById("tipo").value == "JESÚS MARÍA" || document.getElementById("tipo").value == "KLO" ||
            document.getElementById("tipo").value == "LA MOLINA" || document.getElementById("tipo").value == "LA UNIÓN" ||
            document.getElementById("tipo").value == "LA VICTORIA" || document.getElementById("tipo").value == "LAMAS" ||
            document.getElementById("tipo").value == "LIMA" || document.getElementById("tipo").value == "LINCE" ||
            document.getElementById("tipo").value == "LOS OLIVOS" || document.getElementById("tipo").value == "LUCANAS" ||
            document.getElementById("tipo").value == "LURIGANCHO" || document.getElementById("tipo").value == "LURÍN" ||
            document.getElementById("tipo").value == "MAGDALENA DEL MAR" || document.getElementById("tipo").value == "MARCONA" ||
            document.getElementById("tipo").value == "MIRAFLORES" || document.getElementById("tipo").value == "MOLLENDO" ||
            document.getElementById("tipo").value == "NEPTUNIA" || document.getElementById("tipo").value == "PACASMAYO" ||
            document.getElementById("tipo").value == "PACHACÁMAC" || document.getElementById("tipo").value == "PARACAS" ||
            document.getElementById("tipo").value == "PROV. CONST. DEL CALLAO" || document.getElementById("tipo").value == "PUCUSANA" ||
            document.getElementById("tipo").value == "PUEBLO LIBRE" || document.getElementById("tipo").value == "PUENTE PIEDRA" ||
            document.getElementById("tipo").value == "PUNTA HERMOSA" || document.getElementById("tipo").value == "PUNTA NEGRA" ||
            document.getElementById("tipo").value == "PUNTA SAL" || document.getElementById("tipo").value == "RÍMAC" ||
            document.getElementById("tipo").value == "SAN BARTOLO" || document.getElementById("tipo").value == "SAN BORJA" ||
            document.getElementById("tipo").value == "SAN IGNACIO" || document.getElementById("tipo").value == "SAN ISIDRO" ||
            document.getElementById("tipo").value == "SAN JUAN DE MIRAFLORES" || document.getElementById("tipo").value == "SAN MARTIN DE PORRES" ||
            document.getElementById("tipo").value == "SAN MIGUEL" || document.getElementById("tipo").value == "SAN PABLO" ||
            document.getElementById("tipo").value == "SANTA ANITA" || document.getElementById("tipo").value == "SANTA MARÍA DEL MAR" ||
            document.getElementById("tipo").value == "SANTA ROSA" || document.getElementById("tipo").value == "SANTIAGO DE SURCO" ||
            document.getElementById("tipo").value == "SLA" || document.getElementById("tipo").value == "SURCO" ||
            document.getElementById("tipo").value == "SURQUILLO" || document.getElementById("tipo").value == "TIENDA" ||
            document.getElementById("tipo").value == "VARI" || document.getElementById("tipo").value == "VILLA EL SALVADOR" ||
            document.getElementById("tipo").value == "VILLA MARIA DEL TRIUNFO") {
            document.getElementById("tipo").value = "LOCAL";
        }
    }
</script>
<!--rocio-->
<script>
    var masking = {

        // User defined Values
        //maskedInputs : document.getElementsByClassName('masked'), // add with IE 8's death
        maskedInputs: document.querySelectorAll('.masked'), // kill with IE 8's death
        maskedNumber: 'XdDmMyY9',
        maskedLetter: '_',

        init: function () {
            masking.setUpMasks(masking.maskedInputs);
            masking.maskedInputs = document.querySelectorAll('.masked'); // Repopulating. Needed b/c static node list was created above.
            masking.activateMasking(masking.maskedInputs);
        },

        setUpMasks: function (inputs) {
            var i, l = inputs.length;

            for (i = 0; i < l; i++) {
                masking.createShell(inputs[i]);
            }
        },

        // replaces each masked input with a shall containing the input and it's mask.
        createShell: function (input) {
            var text = '',
                placeholder = input.getAttribute('placeholder');

            input.setAttribute('maxlength', placeholder.length);
            input.setAttribute('data-placeholder', placeholder);
            input.removeAttribute('placeholder');

            text = '<span class="shell">' +
                '<span aria-hidden="true" id="' + input.id +
                'Mask"><i></i>' + placeholder + '</span>' +
                input.outerHTML +
                '</span>';

            input.outerHTML = text;
        },

        setValueOfMask: function (e) {
            var value = e.target.value,
                placeholder = e.target.getAttribute('data-placeholder');

            return "<i>" + value + "</i>" + placeholder.substr(value.length);
        },

        // add event listeners
        activateMasking: function (inputs) {
            var i, l;

            for (i = 0, l = inputs.length; i < l; i++) {
                if (masking.maskedInputs[i].addEventListener) { // remove "if" after death of IE 8
                    masking.maskedInputs[i].addEventListener('keyup', function (e) {
                        masking.handleValueChange(e);
                    }, false);
                } else if (masking.maskedInputs[i].attachEvent) { // For IE 8
                    masking.maskedInputs[i].attachEvent("onkeyup", function (e) {
                        e.target = e.srcElement;
                        masking.handleValueChange(e);
                    });
                }
            }
        },

        handleValueChange: function (e) {
            var id = e.target.getAttribute('id');

            switch (e.keyCode) { // allows navigating thru input
                case 20: // caplocks
                case 17: // control
                case 18: // option
                case 16: // shift
                case 37: // arrow keys
                case 38:
                case 39:
                case 40:
                case 9: // tab (let blur handle tab)
                    return;
            }

            document.getElementById(id).value = masking.handleCurrentValue(e);
            document.getElementById(id + 'Mask').innerHTML = masking.setValueOfMask(e);

        },

        handleCurrentValue: function (e) {
            var isCharsetPresent = e.target.getAttribute('data-charset'),
                placeholder = isCharsetPresent || e.target.getAttribute('data-placeholder'),
                value = e.target.value, l = placeholder.length, newValue = '',
                i, j, isInt, isLetter, strippedValue;

            // strip special characters
            strippedValue = isCharsetPresent ? value.replace(/\W/g, "") : value.replace(/\D/g, "");

            for (i = 0, j = 0; i < l; i++) {
                var x =
                    isInt = !isNaN(parseInt(strippedValue[j]));
                isLetter = strippedValue[j] ? strippedValue[j].match(/[A-Z]/i) : false;
                matchesNumber = masking.maskedNumber.indexOf(placeholder[i]) >= 0;
                matchesLetter = masking.maskedLetter.indexOf(placeholder[i]) >= 0;

                if ((matchesNumber && isInt) || (isCharsetPresent && matchesLetter && isLetter)) {

                    newValue += strippedValue[j++];

                } else if ((!isCharsetPresent && !isInt && matchesNumber) || (isCharsetPresent && ((matchesLetter && !isLetter) || (matchesNumber && !isInt)))) {
                    // masking.errorOnKeyEntry(); // write your own error handling function
                    return newValue;

                } else {
                    newValue += placeholder[i];
                }
                // break if no characters left and the pattern is non-special character
                if (strippedValue[j] == undefined) {
                    break;
                }
            }
            if (e.target.getAttribute('data-valid-example')) {
                return masking.validateProgress(e, newValue);
            }
            return newValue;
        },

        validateProgress: function (e, value) {
            var validExample = e.target.getAttribute('data-valid-example'),
                pattern = new RegExp(e.target.getAttribute('pattern')),
                placeholder = e.target.getAttribute('data-placeholder'),
                l = value.length, testValue = '';

            //convert to months
            if (l == 1 && placeholder.toUpperCase().substr(0, 2) == 'MM') {
                if (value > 1 && value < 10) {
                    value = '0' + value;
                }
                return value;
            }
            // test the value, removing the last character, until what you have is a submatch
            for (i = l; i >= 0; i--) {
                testValue = value + validExample.substr(value.length);
                if (pattern.test(testValue)) {
                    return value;
                } else {
                    value = value.substr(0, value.length - 1);
                }
            }

            return value;
        },

        errorOnKeyEntry: function () {
            // Write your own error handling
        }
    }

    masking.init();
</script>
<!--NUMERO DE GUIA-->







<input type="submit" id="btnguardar" name="btnguardar" value="Guardar datos" onclick="enableProceed()" class="btn"
    disabled="disabled" style="white-space: normal;line-height: 16px;" />


<script>
    $(".btn").on("click", function () {


        var acc = "Diferencias";

        if (acc == "Diferencias") {
            $(this).prop('disabled', true);
        } else {
            $(this).prop('disabled', false);
        }

    });
</script>
<script type="text/javascript">

    function enableProceed() {
        document.getElementById("proceed").disabled = false;
    }
</script>

<h1> Hacer click para imprimir el contenido del formulario</h1>
<input type="submit" name="generar_contenido" value=" Generar consulta " id="proceed" class="coss center"
    disabled="disabled" style="white-space: normal;line-height: 16px;" />

<!--<p><button id="recordate" onclick="action()" type="button">Recordad</button></p>-->

<!--<input type="submit" onclick="action()"  disabled="disabled" style="white-space: normal;line-height: 16px;" value="recordar" class="coss center" disabled="disabled" style="white-space: normal;line-height: 16px;"/>-->
<!--Script para select dependiente dir origen destino-->


</form>

</div>
<!--<p><button id="recordate" onclick="action()" type="button">Recordad</button></p>-->
</div>

<script src="js/formulario.js"></script>
</center>
<?php
} //Fin del codigo
/*
*/
?>
</div>
</div>
</div>
</div>


</section>

</div>
</section>

<!-- Footer -->
<!--	<footer id="footer">-->
<!--		<div class="inner">-->

<!--			<h3>Get in touch</h3>-->

<!--			<form action="#" method="post">-->

<!--				<div class="field half first">-->
<!--					<label for="name">Name</label>-->
<!--					<input name="name" id="name" type="text" placeholder="Name">-->
<!--				</div>-->
<!--				<div class="field half">-->
<!--					<label for="email">Email</label>-->
<!--					<input name="email" id="email" type="email" placeholder="Email">-->
<!--				</div>-->
<!--				<div class="field">-->
<!--					<label for="message">Message</label>-->
<!--					<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>-->
<!--				</div>-->
<!--				<ul class="actions">-->
<!--					<li><input value="Send Message" class="button alt" type="submit"></li>-->
<!--				</ul>-->
<!--			</form>-->

<!--			<div class="copyright">-->
<!--				&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.-->
<!--			</div>-->

<!--		</div>-->
<!--	</footer>-->

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
<script src="js/main.js"></script>
<script src="js/formulario.js"></script>

</body>

</html>
<!--CONEXION-->
<script type="text/javascript">
    $(document).ready(function () {
        $('#btnguardar').click(function () {
            var datos = $('#frmajax').serialize();
            $.ajax({
                type: "POST",
                url: "connect_db.php",
                data: datos,
                success: function (r) {
                    if (r == 1) {
                        alert("Gracias, el formulario ha sido enviado con éxito");
                    } else {
                        alert("Gracias, el formulario ha sido enviado con éxito");
                    }
                }
            });

            return false;
        });
    });
</script>



<!--<p><input id="target" name="target" type="checkbox" value="Downloaded our stuff before?" /> Downloaded our stuff-->
<!--    before?</p>-->
<script>
    $("#target").change(function () {
        if ($(this).is(":checked")) {
            if (localStorage['nombresolicitante']) {
                $("input[name='nombresolicitante']").val(localStorage['nombresolicitante']);
            }
            if (localStorage['dnisolicitante']) {
                $("input[name='dnisolicitante']").val(localStorage['dnisolicitante']);
            }
            if (localStorage['celularsolicitante']) {
                $("input[name='celularsolicitante']").val(localStorage['celularsolicitante']);
            }
            if (localStorage['correosolicitante']) {
                $("input[name='correosolicitante']").val(localStorage['correosolicitante']);
            }
        }
    });
    $(".wpcf7-text").on("change", function () {
        localStorage.setItem($(this).attr("name"), $(this).val());
    });
</script>

<!--<html>-->

<!--<head>-->
<!--    <style>-->
<!--        .valor-desplegable {-->
<!--            position: relative;-->
<!--            width: 200px;-->
<!--            height: 25px;-->
<!--            overflow: hidden;-->
<!--        }-->

<!--        .valor-desplegable:hover {-->
<!--            overflow: visible;-->
<!--        }-->

<!--        .valor-desplegable .valorTexto {-->
<!--            width: 200px;-->
<!--            height: 25px;-->
<!--            line-height: 25px;-->
<!--            padding-left: 4px;-->
<!--            background: white;-->
<!--            border: 1px solid #ddd;-->
<!--            position: relative;-->
<!--            box-sizing: border-box;-->
<!--            color: #222;-->
<!--        }-->

<!--        .valor-desplegable .valorTexto::after {-->
<!--            content: "\25BF";-->
<!--            position: absolute;-->
<!--            right: 4px;-->
<!--            color: #222 !important;-->
<!--        }-->

<!--        .valor-desplegable>ol,-->
<!--        .valor-desplegable>ol>li>ol {-->
<!--            list-style: none;-->
<!--            padding-left: 0;-->
<!--            position: absolute;-->
<!--            top: 24px;-->
<!--            border: 1px solid #ddd;-->
<!--            width: 200px;-->
<!--            margin-top: 0;-->
<!--            box-sizing: border-box;-->
<!--            background: white;-->
<!--        }-->

<!--        .valor-desplegable li {-->
<!--            display: block;-->
<!--            height: 25px;-->
<!--            line-height: 25px;-->
<!--            padding-left: 4px;-->
<!--            border-bottom: 1px solid #f5f5f5;-->
<!--            position: relative;-->
<!--            overflow: hidden;-->
<!--            cursor: pointer;-->
<!--        }-->

<!--        .valor-desplegable li:hover {-->
<!--            overflow: visible;-->
<!--            background: #f8f8f8;-->
<!--        }-->

<!--        .valor-desplegable>ol>li>ol {-->
<!--            top: -1px;-->
<!--            left: 198px;-->
<!--        }-->

<!--        .valor-desplegable>ol>li>ol::before {-->
<!--            content: "\25B9";-->
<!--            position: absolute;-->
<!--            left: -15px;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->

<!--<body>-->

<!--    <form>-->
<!--        <div class="valor-desplegable">-->
<!--            <input type="hidden" name="miValor" id="miValor" value="" />-->
<!--            <div id="miValorVisible" class="valorTexto">Selecciona un valor</div>-->
<!--            <ol>-->
<!--                <li data-val="1">Opción 1</li>-->
<!--                <li>-->
<!--                    Opción 2-->
<!--                    <ol>-->
<!--                        <li data-val="2.1">Sub-opción 2.1</li>-->
<!--                        <li data-val="2.2">Sub-opción 2.2</li>-->
<!--                    </ol>-->
<!--                </li>-->
<!--                <li>-->
<!--                    Opción 3-->
<!--                    <ol>-->
<!--                        <li data-val="3.1">Sub-opción 3.1</li>-->
<!--                        <li data-val="3.2">Sub-opción 3.2</li>-->
<!--                        <li data-val="3.3">Sub-opción 3.3</li>-->
<!--                    </ol>-->
<!--                </li>-->
<!--                <li data-val="4">Opción 4</li>-->
<!--            </ol>-->
<!--        </div>-->
<!--        <input type="submit" value="Enviar" id="enviar" />-->
<!--    </form>-->
<!--    <script>-->
<!--        var lis = document.querySelectorAll(".valor-desplegable [data-val]");-->
<!--// cada vez que se pulse en una opción del menú desplegable-->
<!--        for (var x = 0; x < lis.length; x++) {-->
<!--            lis[x].addEventListener("click", function () {-->
<!--// actualizar el texto y el valor-->
<!--                document.getElementById("miValorVisible").textContent = this.textContent;-->
<!--                document.getElementById("miValor").value = this.dataset.val;-->
<!--            });-->
<!--        }-->

<!--// mostrar el valor cuando se pulse en Enviar (en vez de enviar)-->
<!--        document.getElementById("enviar").addEventListener("click", function (e) {-->
<!--            e.preventDefault();-->
<!--            console.log("El valor del select es: " + document.getElementById("miValor").value);-->
<!--        });-->



<!--    </script>-->
<!--</body>-->

<!--</html>-->



<!--<html>-->
<!--    <head>-->

<!--    </head>-->
<!--    <body>-->
<!--        <form method="post" name="id">-->

<!-- Nombre: <input type="text" name="numero1" id="numero1" size="10" onKeyUp="generarId()"/>-->
<!-- Apellidos: <input type="text" name="numero2" id="numero2" size="10" onKeyUp="generarId()"/>-->
<!--Edad:  <input type="text" name="numero3" id="numero3" size="10" onKeyUp="generarId()"/>-->


<!--Resultado: <input type="text" name="resultado2" id="resultado2"/>-->

<!--</form>-->
<!--<script type="text/javascript">-->
<!--    function generarId(){-->
<!--        document.getElementById("resultado2").value =-->
<!--            document.getElementById("numero1").value +-->
<!--            document.getElementById("numero2").value ;-->
<!--    }-->
<!-- </script>-->
<!--    </body>-->
<!--</html>-->






<!--<html>-->
<!--    <head>-->
<!--origen-->
<!--        <script type="text/javascript">-->

<!--function slctr(texto,valor){-->
<!--this.texto = texto-->
<!--this.valor = valor-->
<!--}-->
<!--var herramientas=new Array()-->
<!--herramientas[0] = new slctr('- -Herramientas- -')-->
<!--herramientas[1] = new slctr("Jardín",'jardin')-->
<!--herramientas[2] = new slctr("fontanería",'fontaneria')-->


<!--var muebles=new Array()-->
<!--muebles[0] = new slctr('- -Muebles- -')-->
<!--muebles[1] = new slctr("Salón",'salon')-->
<!--muebles[2] = new slctr("dormitorio",'dormitorio')-->

<!--//*******Nietos*******************-->
<!--var jardin = new Array()-->
<!--jardin[0] = new slctr('- -Jardín- -')-->
<!--jardin[1] = new slctr("podadora",null)-->
<!--jardin[2] = new slctr("segadora" ,null)-->

<!--var fontaneria = new Array()-->
<!--fontaneria[0] = new slctr('- -Fontanería- -')-->
<!--fontaneria[1] = new slctr("llave inglesa",null)-->
<!--fontaneria[2] = new slctr("llave fija",null)-->

<!--var salon = new Array()-->
<!--salon[0] = new slctr('- -Salón- -')-->
<!--salon[1] = new slctr("Mesa",null)-->
<!--salon[2] = new slctr("silla" ,null)-->

<!--var dormitorio = new Array()-->
<!--dormitorio[0] = new slctr('- -Dormitorio- -')-->
<!--dormitorio[1] = new slctr("cama",null)-->
<!--dormitorio[2] = new slctr("mesita" ,null)-->

<!--function slctryole(cual,donde){-->
<!--if(cual.selectedIndex != 0){-->
<!--donde.length=0-->
<!--cual = eval(cual.value)-->
<!--for(m=0;m<cual.length;m++){-->
<!--var nuevaOpcion = new Option(cual[m].texto);-->
<!--donde.options[m] = nuevaOpcion;-->
<!--if(cual[m].valor != null){-->
<!--donde.options[m].value = cual[m].valor-->
<!--}-->
<!--else{-->
<!--donde.options[m].value = cual[m].texto-->
<!--}-->
<!--}-->
<!--}-->
<!--}-->
<!--</script>-->


<!--destino-->
<!--origen-->
<!--        <script type="text/javascript">-->

<!--function slct(texto,valor){-->
<!--this.texto = texto-->
<!--this.valor = valor-->
<!--}-->
<!--var herramientas=new Array()-->
<!--herramientas[0] = new slct('- -Herramientas- -')-->
<!--herramientas[1] = new slct("Jardín",'jardin')-->
<!--herramientas[2] = new slct("fontanería",'fontaneria')-->


<!--var muebles=new Array()-->
<!--muebles[0] = new slct('- -Muebles- -')-->
<!--muebles[1] = new slct("Salón",'salon')-->
<!--muebles[2] = new slct("dormitorio",'dormitorio')-->

<!--//*******Nietos*******************-->
<!--var jardin = new Array()-->
<!--jardin[0] = new slct('- -Jardín- -')-->
<!--jardin[1] = new slct("podadora",null)-->
<!--jardin[2] = new slct("segadora" ,null)-->

<!--var fontaneria = new Array()-->
<!--fontaneria[0] = new slct('- -Fontanería- -')-->
<!--fontaneria[1] = new slct("llave inglesa",null)-->
<!--fontaneria[2] = new slct("llave fija",null)-->

<!--var salon = new Array()-->
<!--salon[0] = new slct('- -Salón- -')-->
<!--salon[1] = new slct("Mesa",null)-->
<!--salon[2] = new slct("silla" ,null)-->

<!--var dormitorio = new Array()-->
<!--dormitorio[0] = new slct('- -Dormitorio- -')-->
<!--dormitorio[1] = new slct("cama",null)-->
<!--dormitorio[2] = new slct("mesita" ,null)-->

<!--function slctryol(cual,donde){-->
<!--if(cual.selectedIndex != 0){-->
<!--donde.length=0-->
<!--cual = eval(cual.value)-->
<!--for(m=0;m<cual.length;m++){-->
<!--var nuevaOpcion = new Option(cual[m].texto);-->
<!--donde.options[m] = nuevaOpcion;-->
<!--if(cual[m].valor != null){-->
<!--donde.options[m].value = cual[m].valor-->
<!--}-->
<!--else{-->
<!--donde.options[m].value = cual[m].texto-->
<!--}-->
<!--}-->
<!--}-->
<!--}-->
<!--</script>-->
<!--    </head>-->
<!--    <body>-->
<!--        <form name="form1" method="post" action="">-->
<!--<select name="select"onChange="slctryole(this,this.form.select2);slctryole(this,this.form.select3)" >-->



<!--<option>- - Seleccionar - -</option>-->
<!--<option value="herramientas">herramientas</option>-->
<!--<option value="muebles">muebles</option>-->
<!--</select>-->
<!--<select name="select2" >-->
<!--<option>- - - - - -</option>-->
<!--</select>-->
<!--<select name="select3">-->
<!--<option>- - - - - -</option>-->
<!--</select>-->
<!--</form>-->
<!--    </body>-->

<!--</html>-->




<!--<head>-->
<!--</head>-->

<!--<body>-->
<!--  <form action="" method="get">-->
<!--    <input type="text" name="name_first" placeholder="First Name" oninput="join_names();"-->
<!--      onpaste="join_names();" /><br />-->
<!--    <input type="text" name="name_last" placeholder="Last Name" oninput="join_names();" onpaste="join_names();" /><br />-->
<!--    <input type="text" name="name_full" placeholder="Full Name" /><br />-->

<!--  </form>-->
<!--  <script type="text/javascript">-->
<!--function concatenate(/*String*/string_one, /*String*/string_two, /*boolean*/with_space) {-->
<!--      if (with_space === true) {-->
<!--        return string_one + ' ' + string_two;-->
<!--      }-->
<!--      else {-->
<!--        return string_one + string_two;-->
<!--      }-->
<!--    }-->
<!--    function join_names() {-->
<!--      var input_name_first = document.getElementsByName('name_first')[0].value;-->
<!--      var input_name_last = document.getElementsByName('name_last')[0].value;-->
<!--      var input_name_full = document.getElementsByName('name_full')[0];-->
<!--      var var_name_full = concatenate(input_name_first, input_name_last, true);-->
<!--      input_name_full.value = var_name_full;-->
<!--    }-->
<!--  </script>-->
<!--</body>-->

<!--</html>-->



<html>

<head>
    <style>
        select {
            /*background-color:red;*/
            /*width:400px;*/
            /*background: #303F9F;*/
            border-radius: 1px;
            border: 2px solid #f2f2f2;
            color: #303F9F;
            cursor: pointer;
            display: inline-block;
            font-family: "Roboto";
            font-size: 16px;
            padding: 15px;
            width: 100%;
            -webkit-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        /*.contenedor-formulario .formulario input[type="date"]:hover {*/
        /*  background: #1976D2; }*/
        }
    </style>
</head>

<body>

    <!--<label  for="dir">Direccion</label></br>-->
    <!--  <select id="dir" name="dir">-->

    <option value=""></option>




    </div>


</body>

</html>






<!--<html>-->
<!--    <head>-->

<!--    </head>-->
<!--    <body>-->

<!--<input type="text" onclick="action2()" id="año" name="año">-->
<!--<input type="text" id="mes" name="mes">-->

<!--<p><button onclick="action()" type="button">Save me!</button></p>-->
<!-- <p><button onclick="action2()" type="button">Remember me!</button></p> -->

<!--<script>-->
<!--    function action() {-->
<!--        window.localStorage['año'] = document.getElementById('año').value;-->
<!--        window.localStorage['mes'] = document.getElementById('mes').value;-->

<!--    }-->

<!--    function action2() {-->
<!--        document.getElementById('año').value = window.localStorage['año'];-->
<!--        document.getElementById('mes').value = window.localStorage['mes'];-->

<!--    }-->
<!--</script>-->
<!--    </body>-->
<!--</html>-->




<!-- <p><button onclick="action2()" type="button">Remember me!</button></p> -->